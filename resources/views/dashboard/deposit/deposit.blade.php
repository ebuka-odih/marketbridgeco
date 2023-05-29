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
                                <li class="breadcrumb-item active" aria-current="page">Deposit</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">

                    <div class="col-xl-6 col-lg-8 offset-lg-2">
                        <div class="card profile-card card-bx m-b30">

                            <form action="{{ route('user.processDeposit') }}" method="POST">
                                @csrf

                            <div class="card-body">
                                <h3 class="text-center"> Deposit</h3>
                                <hr class="mb-3">
                                <br>
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
                                <div class="row">

                                    <div class="col-sm-12 m-b30">
                                        <label class="form-label">Amount</label>
                                        <input type="number" name="amount" class="form-control mb-3" id="exampleInputEmail3" required placeholder="Amount">
                                    </div>
                                    <div class="col-sm-12 m-b30">
                                        <label class="form-label">Payment Method</label>
                                        <select name="payment_method_id" id="" class="form-control">
                                            @foreach($wallets as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
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
