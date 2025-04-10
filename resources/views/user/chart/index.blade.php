@extends('layouts.user')

@section('contents')

<div class="row  align-items-center justify-content-between" style="margin-top:10px">
    <div class="col-16 col-sm-16" class="btn-group pull-right">
        <p style="color:white"> <b>Username :</b> {{ user()->username }}
    </div>
</div>


<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
        {
            "symbols": [{
                    "proName": "FOREXCOM:SPXUSD",
                    "title": "S&P 500"
                },
                {
                    "proName": "FOREXCOM:NSXUSD",
                    "title": "Nasdaq 100"
                },
                {
                    "proName": "FX_IDC:EURUSD",
                    "title": "EUR/USD"
                },
                {
                    "proName": "BITSTAMP:BTCUSD",
                    "title": "BTC/USD"
                },
                {
                    "proName": "BITSTAMP:ETHUSD",
                    "title": "ETH/USD"
                }
            ],
            "showSymbolLogo": true,
            "colorTheme": "dark",
            "isTransparent": false,
            "displayMode": "relative",
            "locale": "en"
        }
    </script>
</div>
<!-- TradingView Widget END -->

<div class="row  align-items-center justify-content-between" style="margin-top:10px">
    <div class="col-16 col-sm-16">
        <div class="btn-group pull-right">
            <a href="{{ route('user.dashboard') }}"><button class="btn btn-success btn-outline-light"><span class="">Account</span> <span class="text"><i class="fas fa-tachometer-alt ml-2"></i></span></button></a>
            <a href="{{ route('user.bots.index') }}"><button class="btn btn-success btn-outline-light"><span class="">Make Deposit</span> <span class="text"><i class="fas fa-coins ml-2"></i></span></button></a>
            <a href="{{ route('user.withdrawals.index') }}"><button class="btn btn-success btn-outline-light"><span class="">Withdraw Funds</span> <span class="text"><i class="fas fa-wallet ml-2"></i></span></button></a>
            <a href="{{ route('user.profile.edit') }}"><button class="btn btn-danger btn-outline-danger"><span class="">Settings</span> <i class="fa fa-cog fa-spin ml-2"></i></button></a>
        </div>
    </div>
</div>
<hr>




<div class="row">
    <div class="col-md-16 col-lg-16 col-xl-16">
        <div class="card full-screen-container">
            <div class="card-header align-items-start justify-content-between flex" style="">
                <h5 class="card-title  pull-left" style="color:white"><b>Live Trading Chart</b></h5>
                <ul class="nav nav-pills card-header-pills pull-right">
                    <!-- <li class="nav-item">
            <button type="" class="btn btn-sm btn-outline-primary btn-round" id="livechart"><i class="fa fa-print"></i> <span class="">Get Pdf</span></button>
          </li> -->
                    <li class="nav-item">
                        <button class="btn btn-sm btn-link btn-round fullscreen-btn"><i class="fa fa-arrows-alt"></i></button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-sm btn-link btn-round" data-toggle="collapse" data-target="#demo"><i class="fa fa-chevron-down"></i></button>
                    </li>
                </ul>
            </div>
            <div id="tablelivechart">
                <!-- chart -->
                <div class="tradingview-widget-container" id="demo">
                    <div id="tradingview_e705a" style="height:550px"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script type="text/javascript">
                        new TradingView.widget({
                            "autosize": true,
                            // "width": 1200,
                            // "height": 610,
                            "symbol": "BINANCE:BTCUSDT",
                            "interval": "1",
                            "timezone": "America/Los_Angeles",
                            "theme": "dark",
                            "style": "1",
                            "locale": "en",
                            "toolbar_bg": "#f1f3f6",
                            "enable_publishing": false,
                            "hide_side_toolbar": false,
                            "allow_symbol_change": true,
                            "details": true,
                            "studies": [
                                "AwesomeOscillator@tv-basicstudies",
                                "MACD@tv-basicstudies"
                            ],
                            "container_id": "tradingview_e705a"
                        });
                    </script>
                </div>
                <!-- chart end -->
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-16 col-lg-8 col-xl-8">
        <div class="card full-screen-container">
            <div class="card-header align-items-start justify-content-between flex">
                <h5 class="card-title  pull-left"><b>Cryptocurrency Market</b></h5>
                <ul class="nav nav-pills card-header-pills pull-right">
                    <!-- <li class="nav-item">
            <button type="" class="btn btn-sm btn-outline-primary btn-round" id="chart1"><i class="fa fa-print"></i> <span class="">Get Pdf</span></button>
          </li> -->
                    <li class="nav-item">
                        <button class="btn btn-sm btn-link btn-round fullscreen-btn"><i class="fa fa-arrows-alt"></i></button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-sm btn-link btn-round" data-toggle="collapse" data-target="#demo3"><i class="fa fa-chevron-down"></i></button>
                    </li>
                </ul>
            </div>
            <div id="tablechart1">
                <div id="demo3" class="">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container" style="width: 100%; height: 350px;">
                        <div class="tradingview-widget-container__widget"></div>
                        <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by TradingView</div> -->
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                            {
                                "width": "100%",
                                "height": "350",
                                "defaultColumn": "overview",
                                "screener_type": "crypto_mkt",
                                "displayCurrency": "USD",
                                "colorTheme": "dark",
                                "locale": "en"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>

            </div>
        </div>
    </div>
    <!-- </div> -->


    <!-- <div class="row"> -->
    <div class="col-md-16 col-lg-8 col-xl-8">
        <div class="card full-screen-container">
            <div class="card-header align-items-start justify-content-between flex">
                <h5 class="card-title  pull-left"><b>Stock Market Data</b></h5>
                <ul class="nav nav-pills card-header-pills pull-right">
                    <!-- <li class="nav-item">
            <button type="" class="btn btn-sm btn-outline-primary btn-round" id="chart2"><i class="fa fa-print"></i> <span class="">Get Pdf</span></button>
          </li> -->
                    <li class="nav-item">
                        <button class="btn btn-sm btn-link btn-round fullscreen-btn"><i class="fa fa-arrows-alt"></i></button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-sm btn-link btn-round" data-toggle="collapse" data-target="#demo1"><i class="fa fa-chevron-down"></i></button>
                    </li>
                </ul>
            </div>
            <div id="tablechart2">
                <div id="demo1" class="">
                    <div class="tradingview-widget-container" style="width: 100%; height: 350px;">
                        <!-- TradingView Widget BEGIN -->
                        <!-- <div class="tradingview-widget-container"> -->
                        <div class="tradingview-widget-container__widget"></div>
                        <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">stock</span></a> by TradingView</div> -->
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                            {
                                "width": "100%",
                                "height": "350",
                                "symbolsGroups": [{
                                        "name": "stock",
                                        "symbols": [{
                                                "name": "NASDAQ:NDAQ",
                                                "displayName": "NASDAQ"
                                            },
                                            {
                                                "name": "NASDAQ:AAPL",
                                                "displayName": "APPLE STOCK"
                                            },
                                            {
                                                "name": "NASDAQ:GOOGL",
                                                "displayName": "GOOGL"
                                            },
                                            {
                                                "name": "NASDAQ:NVAX",
                                                "displayName": "NVAX NA"
                                            },
                                            {
                                                "name": "NASDAQ:AMZN",
                                                "displayName": "AMZN"
                                            },
                                            {
                                                "name": "NASDAQ:FB",
                                                "displayName": "FACEB"
                                            },
                                            {
                                                "name": "NASDAQ:TLSA",
                                                "displayName": "TLSA"
                                            }
                                        ]
                                    },
                                    {
                                        "name": "Indices",
                                        "originalName": "Indices",
                                        "symbols": [{
                                                "name": "FOREXCOM:SPXUSD",
                                                "displayName": "S&P 500"
                                            },
                                            {
                                                "name": "FOREXCOM:NSXUSD",
                                                "displayName": "Nasdaq 100"
                                            },
                                            {
                                                "name": "FOREXCOM:DJI",
                                                "displayName": "Dow 30"
                                            },
                                            {
                                                "name": "INDEX:NKY",
                                                "displayName": "Nikkei 225"
                                            },
                                            {
                                                "name": "INDEX:DEU30",
                                                "displayName": "DAX Index"
                                            },
                                            {
                                                "name": "FOREXCOM:UKXGBP",
                                                "displayName": "UK 100"
                                            }
                                        ]
                                    },
                                    {
                                        "name": "Commodities",
                                        "originalName": "Commodities",
                                        "symbols": [{
                                                "name": "CME_MINI:ES1!",
                                                "displayName": "S&P 500"
                                            },
                                            {
                                                "name": "CME:6E1!",
                                                "displayName": "Euro"
                                            },
                                            {
                                                "name": "COMEX:GC1!",
                                                "displayName": "Gold"
                                            },
                                            {
                                                "name": "NYMEX:CL1!",
                                                "displayName": "Crude Oil"
                                            },
                                            {
                                                "name": "NYMEX:NG1!",
                                                "displayName": "Natural Gas"
                                            },
                                            {
                                                "name": "CBOT:ZC1!",
                                                "displayName": "Corn"
                                            }
                                        ]
                                    },
                                    {
                                        "name": "Bonds",
                                        "originalName": "Bonds",
                                        "symbols": [{
                                                "name": "CME:GE1!",
                                                "displayName": "Eurodollar"
                                            },
                                            {
                                                "name": "CBOT:ZB1!",
                                                "displayName": "T-Bond"
                                            },
                                            {
                                                "name": "CBOT:UB1!",
                                                "displayName": "Ultra T-Bond"
                                            },
                                            {
                                                "name": "EUREX:FGBL1!",
                                                "displayName": "Euro Bund"
                                            },
                                            {
                                                "name": "EUREX:FBTP1!",
                                                "displayName": "Euro BTP"
                                            },
                                            {
                                                "name": "EUREX:FGBM1!",
                                                "displayName": "Euro BOBL"
                                            }
                                        ]
                                    },
                                    {
                                        "name": "Forex",
                                        "originalName": "Forex",
                                        "symbols": [{
                                                "name": "FX:EURUSD"
                                            },
                                            {
                                                "name": "FX:GBPUSD"
                                            },
                                            {
                                                "name": "FX:USDJPY"
                                            },
                                            {
                                                "name": "FX:USDCHF"
                                            },
                                            {
                                                "name": "FX:AUDUSD"
                                            },
                                            {
                                                "name": "FX:USDCAD"
                                            }
                                        ]
                                    }
                                ],
                                "showSymbolLogo": true,
                                "colorTheme": "dark",
                                "isTransparent": false,
                                "locale": "en"
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>

@endsection