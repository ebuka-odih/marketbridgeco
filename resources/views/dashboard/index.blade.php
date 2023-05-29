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
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Proceed</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title">Make Payment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label class="form-label">Payment method</label>
                    <div>
                        <select class=" w-100 mb-3" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">Bank Card</option>
                            <option value="2">Online</option>
                            <option value="3">Cash On Time</option>
                        </select>
                    </div>
                    <label class="form-label">Amount</label>
                    <input type="email" class="form-control mb-3" id="exampleInputEmail4"  placeholder="Rupee">
                    <label class="form-label">Card Holder Name</label>
                    <input type="email" class="form-control mb-3" id="exampleInputEmail5"  placeholder="Amount">
                    <label class="form-label">Card Name</label>
                    <input type="email" class="form-control mb-3" id="exampleInputEmail6"  placeholder="Amount">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal3" tabindex="-1"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title">Enter Debit or Credit card Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label class="form-label">Card Number</label>
                    <input type="number" class="form-control mb-3" id="exampleInputEmail7"  placeholder="card no.">
                    <label class="form-label">Expiry/Validity</label>
                    <input type="number" class="form-control mb-3" id="exampleInputEmail8"  placeholder="Year/Month">
                    <label class="form-label">CVV</label>
                    <input type="number" class="form-control mb-3" id="exampleInputEmail9"  placeholder="123">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal4" tabindex="-1"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title">Send invoice</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label class="form-label">Send email to</label>
                    <input type="email" class="form-control mb-3" id="exampleInputEmail10"  placeholder="Art Vandelay<art@vandelay.com>">
                    <label class="form-label">Subject</label>
                    <input type="number" class="form-control mb-3" id="exampleInputEmail11"  placeholder="invoice Vi-001 from America">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Body</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
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
                            <p class="dz-para">Market has been growing in volume at rate of 2.3%</p>
                        </div>
                        <div class="mb-4 mb-xl-0">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                Make a Deposit
                            </button>
                            <button type="button" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#exampleModal2">
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
