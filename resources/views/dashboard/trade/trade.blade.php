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
                                        <form>
                                            <div class="mb-3">
                                                <label class="input-group-addon">Symbol</label>
                                                <select class="form-control" name="symbol">
                                                    <option value="">Select Pair</option>
                                                    <option value="AUDCAD">AUDCAD</option>
                                                    <option value="AUDCHF">AUDCHF</option>
                                                    <option value="AUDJPY">AUDJPY</option>
                                                    <option value="AUDNZD">AUDNZD</option>
                                                    <option value="AUDSGD">AUDSGD</option>
                                                    <option value="AUDUSD">AUDUSD</option>
                                                    <option value="CADCHF">CADCHF</option>
                                                    <option value="CADHKD">CADHKD</option>
                                                    <option value="CADJPY">CADJPY</option>
                                                    <option value="CADSGD">CADSGD</option>
                                                    <option value="EURAUD">EURAUD</option>
                                                    <option value="EURCAD">EURCAD</option>
                                                    <option value="EURCHF">EURCHF</option>
                                                    <option value="EURGBP">EURGBP</option>
                                                    <option value="EURJPY">EURJPY</option>
                                                    <option value="EURNZD">EURNZD</option>
                                                    <option value="EURUSD">EURUSD</option>
                                                    <option value="EURPLN">EURPLN</option>
                                                    <option value="EURSGD">EURSGD</option>
                                                    <option value="EURZAR">EURZAR</option>
                                                    <option value="GBPCAD">GBPCAD</option>
                                                    <option value="GBPCHF">GBPCHF</option>
                                                    <option value="GBPJPY">GBPJPY</option>
                                                    <option value="GBPNZD">GBPNZD</option>
                                                    <option value="GBPUSD">GBPUSD</option>
                                                    <option value="GBPSGD">GBPSGD</option>
                                                    <option value="GBPPLN">GBPPLN</option>
                                                    <option value="GBPZAR">GBPZAR</option>
                                                    <option value="NZDCAD">NZDCAD</option>
                                                    <option value="NZDCHF">NZDCHF</option>
                                                    <option value="NZDJPY">NZDJPY</option>
                                                    <option value="NZDUSD">NZDUSD</option>
                                                    <option value="NZDHKD">NZDHKD</option>
                                                    <option value="USDCAD">USDCAD</option>
                                                    <option value="USDCHF">USDCHF</option>
                                                    <option value="USDJPY">USDJPY</option>
                                                    <option value="USDMXN">USDMXN</option>
                                                    <option value="USDSGD">USDSGD</option>
                                                    <option value="USDTRY">USDTRY</option>
                                                    <option value="USDTHB">USDTHB</option>
                                                    <option value="USDZAR">USDZAR</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="">Amount [USD]</label>
                                                <input type="text" class="form-control" placeholder="100">
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
                                                    <button class="btn btn-success w-100 mt-3">Buy</button>
                                                </div>
                                                <div class="col-md-6">
                                                    <button class="btn btn-primary w-100 mt-3">Sell</button>
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
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
