<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\Funding;
use App\Mail\DepositAlert;
use App\PaymentMethod;
use App\Rules\MatchOldPassword;
use App\Subscribe;
use App\Trade;
use App\User;
use App\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function dashboard()
    {
        $withdrawal = Withdraw::whereUserId(\auth()->id())->where('status', 1)->sum('amount');
        $deposits = Deposit::whereUserId(\auth()->id())->where('status', 1)->sum('amount');
        $trade = Trade::whereUserId(\auth()->id())->where('status', 1)->sum('amount');
        $loss = Funding::whereUserId(\auth()->id())->select('type', 'Loss')->where('status', 1)->sum('amount');

        $bonus = Funding::whereUserId(\auth()->id())->select('type', 'Bonus')->where('status', 1)->sum('amount');
        $bonus2 = Funding::whereUserId(\auth()->id())->select('type', 'Referral-Bonus')->where('status', 1)->sum('amount');
        $wallets = PaymentMethod::all();
        return view('dashboard.index', compact('trade', 'deposits', 'withdrawal', 'loss', 'bonus', 'bonus2', 'wallets'));
    }


    public function processDeposit(Request $request)
    {
        $request->validate([
            'amount' => 'required',
            'payment_method_id' => 'required',
        ]);

        $deposit = new Deposit();
        if ($request->amount > 50){
            $deposit->user_id = Auth::id();
            $deposit->amount = $request->amount;
            $deposit->payment_method_id = $request->payment_method_id;
            $deposit->save();
            Mail::to($deposit->user->email)->send(new DepositAlert($deposit));
            return redirect()->route('user.payment', $deposit->id);
        }
        return redirect()->back()->with('declined', "You can only deposit 50 USD and above");

    }

    public function profile()
    {
        $user = Auth::user();
        return view('dashboard.user.profile', compact('user'));
    }
    public function editProfile()
    {
        $user = Auth::user();
        return view('dashboard.user.edit-profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = User::findOrFail(auth()->id());
        $data = $this->getData($request);
        $user->update($data);
        return redirect()->back()->with('success', 'Profile Updated Successful');
    }
    protected function getData(Request $request){
        $rules = [
            'name' => 'nullable',
            'telegram' => 'nullable',
            'country' => 'nullable',
            'state' => 'nullable',
            'city' => 'nullable',
            'address' => 'nullable',
            'phone' => 'nullable',
        ];
        return $request->validate($rules);
    }

    public function security()
    {
        $user = Auth::user();
        return view('dashboard.user.security', compact('user'));
    }
    public function storePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        return redirect()->back()->with('success', "Password Changed Successfully");
    }



}
