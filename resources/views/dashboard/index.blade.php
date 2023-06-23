@extends('dashboard.layout.app')
@section('content')

<div class="content-body">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title">Make Deposit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('user.processDeposit') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label class="form-label">Payment Method</label>
                            <select name="payment_method_id" id="" class="form-control">
                                @foreach($wallets as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label class="form-label">Amount</label>
                            <input type="number" name="amount" class="form-control mb-3" id="exampleInputEmail3" required placeholder="Amount">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Proceed</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal3" tabindex="-1"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title">Withdrawal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form" method="POST" action="{{ route('user.processWithdraw') }}">
                    @csrf
                <div class="modal-body">
                        <div class="card-body">
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


                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Proceed</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- row -->
    <div class="container-fluid pt-0">
        <div class="row">
            <div class="col-xl-12">
                <div class="payment-bx">
                    <div class="d-flex  justify-content-between flex-wrap">
                        <div class="payment-content">
                            <h1 class="font-w500 mb-2">Hi, {{ auth()->user()->name }} </h1>
                        </div>
                        <div class="mb-4 mb-xl-0">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                Make a Deposit
                            </button>
                            <button type="button" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                Withdraw
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div style="height: 250px" class="col-xl-4">
                            <div class="card  dz-wallet overflow-hidden">
                                <div class="boxs">
                                    <span class="box one"></span>
                                    <span class="box two"></span>
                                    <span class="box three"></span>
                                    <span class="box four"></span>
                                </div>
                                <div class="card-header border-0 pb-3 pb-sm-0 pe-4">
                                    <div class="wallet-icon">
                                        <svg width="62" height="39" viewBox="0 0 62 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="42.7722" cy="19.2278" r="19.2278" fill="white" fill-opacity="0.2"></circle>
                                            <circle cx="19.2278" cy="19.2278" r="19.2278" fill="white" fill-opacity="0.2"></circle>
                                        </svg>
                                    </div>

                                </div>
                                <div class="card-body py-3 pt-1 d-flex align-items-center justify-content-between flex-wrap pe-3">
                                    <div class="wallet-info">
                                        <span class="fs-14 font-w400 d-block">Wallet Balance</span>
                                        <h2 class="font-w600 mb-0">$@convert(auth()->user()->balance)</h2>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="card dz-wallet">
                                <div class="card-header border-0 align-items-start pb-0">
                                    <div>
                                        <span class="fs-18 d-block mb-2">Profit</span>
                                        <h2 class="fs-28 font-w600 ">$ @convert(auth()->user()->profit)</h2>
                                    </div>

                                </div>
                                <div class="card-body py-4 pt-md-2">
                                    <div class="progress default-progress mb-3">
                                        <div class="progress-bar bg-vigit progress-animated" style="width: 100%; height:8px;" role="progressbar">

                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <table class="table">
                                            <tr>
                                                <th><h4 class="mb-0 text-white font-w500">Deposits</h4></th>
                                                <td><h4 class="mb-0 text-white font-w500">$@convert($deposits)</h4></td>
                                            </tr>
                                            <tr>
                                                <th><h4 class="mb-0 text-white font-w500">Withdrawal</h4></th>
                                                <td><h4 class="mb-0 text-white font-w500">$@convert($withdrawal)</h4></td>
                                            </tr>
                                            <tr>
                                                <th><h4 class="mb-0 text-white font-w500">Trades</h4></th>
                                                <td><h4 class="mb-0 text-white font-w500">$@convert($trade)</h4></td>
                                            </tr>
                                            <tr>
                                                <th><h4 class="mb-0 text-white font-w500">Bonus</h4></th>
                                                <td><h4 class="mb-0 text-white font-w500">$@convert($bonus + $bonus2)</h4></td>
                                            </tr>
                                            <tr>
                                                <th><h4 class="mb-0 text-white font-w500">Loss</h4></th>
                                                <td><h4 class="mb-0 text-white font-w500 badge bg-danger">$@convert($loss)</h4></td>
                                            </tr>

                                        </table>



                                        <div class="col-xl-2"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
