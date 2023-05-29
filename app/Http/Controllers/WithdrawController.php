<?php

namespace App\Http\Controllers;

use App\Mail\AdminWithdrawAlert;
use App\Mail\RequestWithdraw;
use App\User;
use App\Withdraw;
use App\WithdrawMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WithdrawController extends Controller
{

    public function transactions()
    {
        $count = Withdraw::whereUserId(\auth()->id())->where('status', 0)->count();
        $withdraw = Withdraw::whereUserId(\auth()->id())->latest()->paginate(10);
        return view('dashboard.withdraw.history', compact('withdraw', 'count'));
    }
    public function withdraw()
    {
//        $w_method = WithdrawMethod::whereUserId(auth()->id())->get();
        $user = Auth::user();
        return view('dashboard.withdraw.withdraw', compact('user'));

    }

    public function processWithdraw(Request $request)
    {
        $request->validate([
            'amount' => 'required',
            'wallet_address' => 'required',
        ]);
        $withdraw = new Withdraw();
        if ($request->acct_wallet == 'main_bal') {
            if ($request->amount < \auth()->user()->balance){
                if ($request->amount >= 100){
                    $withdraw->amount = $request->amount;
                    $withdraw->user_id = Auth::id();
                    $withdraw->wallet = $request->wallet;
                    $withdraw->wallet_address = $request->wallet_address;
                    $user = User::findOrFail($withdraw->user_id);
                    $data = ['withdraw' => $withdraw, 'user' => $user];
                    $withdraw->save();
//                    Mail::to($user->email)->send( new RequestWithdraw($data));
//                    Mail::to('admin@marketbridgeco.com')->send( new AdminWithdrawAlert($data));
                    return redirect()->route('user.success', $withdraw->id)->with('success_message', 'Your withdrawal request has been sent successfully, awaiting approval');
                }
                return redirect()->route('user.withdraw')->with('nop', "You can't withdraw less than 100 USD");
            }
            return redirect()->route('user.withdraw')->with('low_balance', "Insufficient Balance");
        }elseif ($request->acct_wallet == 'profit_bal')
        {
            if ($request->amount < \auth()->user()->profit){
                if ($request->amount >= 100){
                    $withdraw->amount = $request->amount;
                    $withdraw->user_id = Auth::id();
                    $withdraw->wallet = $request->wallet;
                    $withdraw->wallet_address = $request->wallet_address;
                    $user = User::findOrFail($withdraw->user_id);
                    $data = ['withdraw' => $withdraw, 'user' => $user];
                    $withdraw->save();
                    Mail::to($user->email)->send( new RequestWithdraw($data));
                    Mail::to('admin@marketbridgeco.com')->send( new AdminWithdrawAlert($data));
                    return redirect()->route('user.success', $withdraw->id)->with('success_message', 'Your withdrawal request has been sent successfully, awaiting approval');
                }
                return redirect()->route('user.withdraw')->with('nop', "You can't withdraw less than 100 USD");
            }
            return redirect()->route('user.withdraw')->with('low_balance', "Insufficient Balance");
        }


    }

    public function success($id)
    {
        $withdraw = Withdraw::findOrFail($id);
        return view('dashboard.withdraw.success', compact('withdraw'));
    }

    public function cancelWithdraw($id)
    {
        $withdraw = Withdraw::findOrFail($id);
        $withdraw->status = -1;
        $withdraw->save();
        return view('dashboard.withdraw.cancel', compact('withdraw'));
    }
}
