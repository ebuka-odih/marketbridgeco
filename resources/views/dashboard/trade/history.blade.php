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
                                <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Trade Room</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Open Trades</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 wow fadeInUp" data-wow-delay="1.5s" style="visibility: visible; animation-delay: 1.5s; animation-name: fadeInUp;">
                        <div class="card lastest_trans">
                            <div class="card-header border-0 flex-wrap">
                                <h2 class="heading">Open Trades History</h2>

                            </div>
                            <div class="card-body py-0">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Symbol</th>
                                            <th>Amount</th>
                                            <th>Leverage</th>
                                            <th>Time Frame</th>
                                            <th>TP/SL</th>
                                            <th>Status</th>
                                            <th>Progress</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($trades as $item)
                                            <tr>
                                                <td>{{ $item->created_at }}</td>
                                                <td>{{ $item->symbol }} {!! $item->type() !!}</td>
                                                <td>$@convert($item->amount)</td>
                                                <td>{{ $item->leverage }}</td>
                                                <td>{{ $item->execution_time }} Secs</td>
                                                <td>{{ $item->tp ? : "" }}/ {{ $item->sl ? : "" }}</td>
                                                <td class="-pull-right">{!! $item->status() !!}</td>
                                                @if($item->percent != 100)
                                                    <td class="pull-right text-danger">{{ $item->percent ? : "1" }}%</td>
                                                @else
                                                    <td class="pull-right text-success">{{ $item->percent  }}%</td>
                                                @endif
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="table-pagenation pt-3 mt-0">
                                <nav>
                                    <ul class="pagination pagination-gutter pagination-danger no-bg">
                                        {!! $trades->links() !!}

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
