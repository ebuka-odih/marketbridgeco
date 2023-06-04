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
                                            <h2 class="heading">Futures Trade</h2>
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
                                                    <option value="USD/EUR">USD/EUR</option>
                                                    <option value="USD/JPY">USD/JPY</option>
                                                    <option value="GBP/USD">GBP/USD</option>
                                                    <option value="NZD/USD">NZD/USD</option>
                                                    <option value="USD/CAD">USD/CAD</option>
                                                    <option value="AUD/USD">AUD/USD</option>
                                                    <option value="EUR/CHF">EUR/CHF</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" class="form-control input-rounded" placeholder="input-rounded">
                                            </div>
                                        </form>
                                        <div class="selling">
                                            <h4>Buy</h4>
                                            <div class="form_exchange">
                                                <div class="input_exchange">
                                                    <input type="text" class="input-select" placeholder="Buy">
                                                </div>
                                                <div class="crypto-select">
                                                    <div class="dropdown bootstrap-select image-select default-select dashboard-select dropup"><select class="image-select default-select dashboard-select" aria-label="Default" tabindex="null">
                                                            <option selected="">Year</option>
                                                            <option value="1">Weeks</option>
                                                            <option value="2">Today</option>
                                                        </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-3" aria-haspopup="listbox" aria-expanded="false" title="Year"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Year</div></div> </div></button><div class="dropdown-menu" style="max-height: 453.641px; overflow: hidden; min-height: 0px;"><div class="inner show" role="listbox" id="bs-select-3" tabindex="-1" aria-activedescendant="bs-select-3-0" style="max-height: 437.641px; overflow-y: auto; min-height: 0px;"><ul class="dropdown-menu inner show" role="presentation" style="margin-top: 0px; margin-bottom: 0px;"><li class="selected active"><a role="option" class="dropdown-item active selected" id="bs-select-3-0" tabindex="0" aria-setsize="3" aria-posinset="1" aria-selected="true"><span class="text">Year</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-3-1" tabindex="0"><span class="text">Weeks</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-3-2" tabindex="0"><span class="text">Today</span></a></li></ul></div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary w-100 mt-3">Confirm</button>
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
