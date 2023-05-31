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
                                <li class="breadcrumb-item active" aria-current="page">Subscription </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">

                    <div class="col-xl-6 col-lg-8 offset-lg-2 col-md-12">
                        <div class="media flex-column text-center p-40 bg-white mb-20">
                              <span class="avatar avatar-xxl  opacity-60 mx-auto">
                               <img class="mt-3" height="100px" src="{{ asset('img/success.png') }}" alt=""><br>
                               <h6 class="text-uppercase fw-500 text-black">Subscription Activated</h6>
                                  <p>Your subscription will start making profit instantly</p>
                                <br>
                                <a href="{{ route('user.sub.plans') }}" class="btn btn-primary">Subscribe Again</a>
                              </span>
                            <br>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
