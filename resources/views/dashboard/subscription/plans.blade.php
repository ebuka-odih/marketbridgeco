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
                                    <li class="breadcrumb-item active" aria-current="page">Subscriptions</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-10 mb-2">
                                <h2 class="text-center">Subscriptions Plans</h2>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-md-6 col-lg-8 offset-lg-2">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif


                            @if(session()->has('insufficient'))
                                <div class="alert alert-danger alert-dismissible fade show">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                                    <strong>{{ session()->get('insufficient') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                        <span><i class="fa-solid fa-xmark"></i></span>
                                    </button>
                                </div>
                            @endif
                            @if(session()->has('declined'))
                                <div class="alert alert-danger  alert-dismissible fade show">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                                    <strong>{{ session()->get('declined') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                        <span><i class="fa-solid fa-xmark"></i></span>
                                    </button>
                                </div>
                            @endif
                        </div>


                    </div>

                    <div class="row">
                        @foreach($plans as $item)
                        <div class="col-xl-4 col-lg-12 col-sm-12">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="profile-photo">
                                            <img src="{{ asset('img2/usd.svg') }}" width="100" class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <h3 class="mt-2 mb-2">{{ $item->name }}</h3>
                                    </div>
                                    <table class="table table-striped" style="width:100%">

                                        <tr>
                                            <th>Amount USD:</th>
                                            <td>$@convert($item->amount)</td>
                                        </tr>
                                        <tr>
                                            <th>Term:</th>
                                            <td> {{ $item->term_days }} Day(s)</td>
                                        </tr>
                                        <tr>
                                            <th>Total Return:</th>
                                            <td class="text-success">{{ $item->total_return }}%</td>
                                        </tr>

                                    </table>
                                </div>
                                <div class="card-body">


                                    <form class="mt-3 mb-3" action="{{ route('user.subscribe') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $item->id }}" name="subscription_id">
                                        <input  type="text" class="form-control" name="amount" placeholder="Enter Amount">

                                        <div class="card-footer border-0 mt-0">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                                <i class="fa fa-bell-o"></i>Purchase
                                            </button>
                                        </div>
                                    </form>
                                </div>


                            </div>

                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

    @endsection

