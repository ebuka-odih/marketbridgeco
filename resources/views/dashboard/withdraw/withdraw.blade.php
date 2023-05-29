@extends('dashboard.layout.app')
@section('content')

    <div class="content-body" style="min-height: 1056px;">
        <div class="container-fluid">
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-titles">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item ps-0"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Withdraw</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">

                    <div class="col-xl-6 col-lg-8 offset-lg-2">
                        <div class="card profile-card card-bx m-b30">

                            <form class="form" method="POST" action="{{ route('user.processWithdraw') }}">
                            @csrf

                                <div class="card-body">
                                    <h3 class="text-center"> Withdrawal</h3>
                                    <hr class="mb-3">
                                    <br>
                                    <div class="container">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        @if(session()->has('declined'))
                                            <div class="alert alert-danger">
                                                {{ session()->get('declined') }}
                                            </div>
                                        @endif
                                        @if(session()->has('nop'))
                                            <div class="alert alert-danger">
                                                {{ session()->get('nop') }}
                                            </div>
                                        @endif
                                        @if(session()->has('low_balance'))
                                            <div class="alert alert-danger">
                                                {{ session()->get('low_balance') }}
                                            </div>
                                        @endif
                                        @if(session()->has('success_message'))
                                            <div class="alert alert-success">
                                                {{ session()->get('success_message') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="mb-3 mb-0">
                                        <h5>Select Account Wallet</h5>
                                        <div class="form-check custom-checkbox mb-2">
                                            <input type="radio" class="form-check-input" id="customRadioBox7" name="acct_wallet" value="main_bal">
                                            <label class="form-check-label" for="customRadioBox7">Main Balance <span>( $@convert($user->balance) )</span></label>
                                        </div>
                                        <div class="form-check custom-checkbox mb-2">
                                            <input type="radio" class="form-check-input" id="customRadioBox8" name="acct_wallet" value="profit_bal">
                                            <label class="form-check-label" for="customRadioBox8">Profit Balance <span>( $@convert($user->profit) )</span></label>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-12 m-b30">
                                            <label class="form-label">Amount</label>
                                            <input type="number" name="amount" class="form-control mb-3" id="exampleInputEmail3" required placeholder="Amount">
                                        </div>
                                        <div class="col-sm-12 m-b30">
                                            <label class="form-label">Payout Wallet</label>
                                            <select name="wallet" id="" class="form-control">
                                               <option value="Bitcoin">Bitcoin</option>
                                               <option value="Ethereum">Ethereum</option>
                                               <option value="USDT">USDT</option>
                                               <option value="Binance Coin">Binance Coin</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 m-b30">
                                            <label class="form-label">Wallet Address</label>
                                            <input type="text" name="wallet_address" class="form-control mb-3" id="exampleInputEmail3" required placeholder="Wallet Address">
                                        </div>

                                        <div class="col-sm-6 m-b30">
                                            <button type="submit" class="btn btn-primary">Proceed</button>
                                        </div>


                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
