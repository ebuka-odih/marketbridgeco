@extends('dashboard.layout.app')
@section('content')

<div class="content-body" style="min-height: 1059px;">
    <!-- row -->
    <div class="container-fluid">
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-titles">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item ps-0"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Trading Room</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="row wow fadeInUp main-card" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                    <!--column-->
                    <div class="col-xxl-7 col-xl-8">
                        <div class="row">
                            <div class="col-xl-12 wow fadeInUp" data-wow-delay="1.5s" style="visibility: visible; animation-delay: 1.5s; animation-name: fadeInUp;">
                                <div class="card market_chart">
                                    <div class="card-header border-0 align-items-start flex-wrap pb-0">
                                        <div>
                                            <h2 class="heading">Market Chart</h2>
                                        </div>
                                    </div>
                                    <!-- TradingView Widget BEGIN -->
                                    <div class="tradingview-widget-container">
                                        <div id="tradingview_f4409"></div>
                                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                        <script type="text/javascript">
                                            new TradingView.widget(
                                                {
                                                    "width": "100%",
                                                    "height": 610,
                                                    "symbol": "NASDAQ:AAPL",
                                                    "interval": "D",
                                                    "timezone": "Etc/UTC",
                                                    "theme": "light",
                                                    "style": "1",
                                                    "locale": "en",
                                                    "toolbar_bg": "#f1f3f6",
                                                    "enable_publishing": false,
                                                    "allow_symbol_change": true,
                                                    "container_id": "tradingview_f4409"
                                                }
                                            );
                                        </script>
                                    </div>
                                    <!-- TradingView Widget END -->

                                </div>
                            </div>
                            <!--/column-->
                        </div>
                        <!--/row-->
                    </div>
                    <!--/column-->
                    <!--column-->
                    <div class="col-xxl-5 col-xl-4">
                        <!--row-->
                        <div class="row">
                            <!--column-->
                            <div class="col-xl-12 col-lg-6">
                                <div class="card exchange">
                                    <div class="card-header d-block border-0">
                                        <h2 class="heading">Futures Trade</h2>
                                        <div class="balance">
                                            <div class="header-content">
                                                <h6> Balance</h6>
                                            </div>
                                            <h4 class="count">$ @convert(auth()->user()->balance)</h4>
                                        </div>
                                    </div>

                                    <div class="card-body pt-0">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        @if(session()->has('success'))
                                            <div class="alert alert-success" >
                                                <strong>{{ session()->get('success') }}</strong>
                                            </div>
                                        @endif
                                        <form class="dash-form" action="{{ route('user.placeTrade') }}" method="POST">
                                            @csrf

                                            <div class="mb-3">
                                                <label class="input-group-addon">Symbol</label>
                                                <select class="form-control" name="symbol">
                                                    <option value="">Select Pair</option>
                                                    <option value="">Select a pair</option>
                                                    <option value="BTC-ETH">BTC-ETH</option>
                                                    <option value="BTC-XRP">BTC-XRP</option>
                                                    <option value="BTC-BCH">BTC-BCH</option>
                                                    <option value="BTC-LTC">BTC-LTC</option>
                                                    <option value="BTC-ADA">BTC-ADA</option>
                                                    <option value="BTC-DOGE">BTC-DOGE</option>
                                                    <option value="BTC-XLM">BTC-XLM</option>
                                                    <option value="BTC-LINK">BTC-LINK</option>
                                                    <option value="BTC-DOT">BTC-DOT</option>
                                                    <option value="BTC-UNI">BTC-UNI</option>
                                                    <option value="BTC-LUNA">BTC-LUNA</option>
                                                    <option value="BTC-BNB">BTC-BNB</option>
                                                    <option value="BTC-VET">BTC-VET</option>
                                                    <option value="BTC-FIL">BTC-FIL</option>
                                                    <option value="BTC-TRX">BTC-TRX</option>
                                                    <option value="BTC-ATOM">BTC-ATOM</option>
                                                    <option value="BTC-EOS">BTC-EOS</option>
                                                    <option value="BTC-XEM">BTC-XEM</option>
                                                    <option value="BTC-XTZ">BTC-XTZ</option>
                                                    <option value="BTC-THETA">BTC-THETA</option>
                                                    <option value="BTC-FTT">BTC-FTT</option>
                                                    <option value="BTC-ALGO">BTC-ALGO</option>
                                                    <option value="BTC-MKR">BTC-MKR</option>
                                                    <option value="BTC-ZEC">BTC-ZEC</option>
                                                    <option value="BTC-IOST">BTC-IOST</option>
                                                    <option value="BTC-NEO">BTC-NEO</option>
                                                    <option value="BTC-ETC">BTC-ETC</option>
                                                    <option value="BTC-DASH">BTC-DASH</option>
                                                    <option value="BTC-ONT">BTC-ONT</option>
                                                    <option value="BTC-BAT">BTC-BAT</option>

                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="">Amount [USD]</label>
                                                <input type="number" name="amount" class="form-control" placeholder="100">
                                            </div>
                                            <div class="mb-3">
                                                <label class="input-group-addon">Execution Time</label>
                                                <select class="form-control" name="execution_time">
                                                    <option value="60">1 Minutes</option>
                                                    <option value="180">3 Minutes</option>
                                                    <option value="300">5 Minutes</option>
                                                    <option value="600">10 Minutes</option>
                                                    <option value="1800">30 Minutes</option>
                                                    <option value="3600">1 Hour</option>
                                                    <option value="604800">1 Week</option>
                                                    <option value="2628000">1 Month</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <span class="input-group-addon">Leverage</span>
                                                <select class="form-control" name="leverage">
                                                    <option value="5x">5x</option>
                                                    <option value="25x">25x</option>
                                                    <option value="50x">50x</option>
                                                    <option value="75x">75x</option>
                                                    <option value="100x">100x</option>
                                                    <option value="125x">125x</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control" name="sl" placeholder="Stop Loss">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control" name="tp" placeholder="Take Profit">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button class="btn btn-success w-100 mt-3" name="type" value="buy">Buy</button>
                                                </div>
                                                <div class="col-md-6">
                                                    <button class="btn btn-primary w-100 mt-3" name="type" value="sell">Sell</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!--/column-->

                        </div>
                        <!--/row-->
                    </div>
                    <!--/column-->
                    <div class="row">
                        <div class="col-xl-12 wow fadeInUp" data-wow-delay="1.5s" style="visibility: visible; animation-delay: 1.5s; animation-name: fadeInUp;">
                            <div class="card lastest_trans">

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
    </div>
</div>

@endsection
