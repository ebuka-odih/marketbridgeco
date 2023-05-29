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

                    <div class="col-xl-6 col-lg-8 offset-lg-2 col-md-12">
                        <div class="media flex-column text-center p-40 bg-white mb-20">
                              <span class="avatar avatar-xxl  opacity-60 mx-auto">
                               <img class="mt-3" height="100px" src="{{ asset('img/success.png') }}" alt=""><br>
                               <h6 class="text-uppercase fw-500 text-black">Withdrawal Sent Successfully, Awaiting Approval!</h6>
                                <p>Your withdrawal requested amount will be sent to your wallet once confirmed</p>
                                <br>
                                <h4>Withdrawal Progress: <span class="text-danger">{{ $withdraw->percent }}%</span></h4>
                                <hr>
                                <a href="{{ route('user.withdraw') }}" class="btn btn-primary">Withdrawal Again</a>
                              </span>
                            <br>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
