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
                                <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Transactions</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Deposit History</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 wow fadeInUp" data-wow-delay="1.5s" style="visibility: visible; animation-delay: 1.5s; animation-name: fadeInUp;">
                        <div class="card lastest_trans">
                            <div class="card-header border-0 flex-wrap">
                                <h2 class="heading">Deposit Transaction History</h2>

                            </div>
                            <div class="card-body py-0">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Deposit Method</th>
                                            <th>Status</th>
                                            <th class="pull-right">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($deposits as $item)
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-warning hover-warning">{{ date('d M, Y', strtotime($item->created_at)) }}</a>
                                                </td>
                                                <td>$@convert($item->amount)</td>
                                                <td>{{ $item->payment_method->name }}</td>
                                                <td>{!! $item->status() !!}</td>
                                                <td>
                                                    @if($item->status == 0)
                                                        <a class="pull-right" href="{{ route('user.payment', $item->id) }}"><i class="fa fa-eye fa-2x text-danger" title="View Deposit"></i></a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="table-pagenation pt-3 mt-0">
                                <nav>
                                    <ul class="pagination pagination-gutter pagination-danger no-bg">
                                        {!! $deposits->links() !!}

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!--/column-->
                </div>

            </div>
        </div>
    </div>

@endsection
