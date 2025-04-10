@extends('layouts.user')

@section('contents')
<div class="row  align-items-center justify-content-between" style="margin-top:10px">
    <div class="col-16 col-sm-16" class="btn-group pull-right">
        <p style="color:white"><b>BANNER</b></p>
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

<style>
    th {
        background: -webkit-linear-gradient(left, #2ec7cb 0%, #6c8bef 100%);
        background: linear-gradient(to right, #2ec7cb 0%, #6c8bef 100%);
    }
</style>

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


<div class="card">
    <div class="card-header">
        <h5 class="font-weight-bold">
            <span style="float:left">Referral Link</span>
        </h5>
    </div>
    <div class="card-body">
        <div class="container_wizard wizard-bordered">

            <div class="table-responsive">

                a href="{{ route('user.register', ['ref' => user()->username ?? 'notset']) }}"

                Your Referral Link : {{ route('user.register', ['ref' => user()->username ?? 'notset']) }} <br><br>


                <a href="{{ route('user.register', ['ref' => user()->username ?? 'notset']) }}">
                    <img src="https://altsfolio.org/banners/banner125.gif" alt="" width="125" height="125" /><br>
                </a>

                <br><br>
                <textarea class="form-control" cols=60 rows=4>
<a href="{{ route('user.register', ['ref' => user()->username ?? 'notset']) }}">
<img src="https://altsfolio.org/banners/banner125.gif" alt="" width="125" height="125" /><br>
</a>
</textarea><br><br><br>


                <a href="{{ route('user.register', ['ref' => user()->username ?? 'notset']) }}">
                    <img src="https://altsfolio.org/banners/banner468.gif" alt="" width="468" height="60" /><br>
                </a>

                <br><br>
                <textarea class="form-control" cols=60 rows=4>
<a href="{{ route('user.register', ['ref' => user()->username ?? 'notset']) }}">
<img src="https://altsfolio.org/banners/banner468.gif" alt="" width="468" height="60" /><br>
</a>
</textarea><br><br><br>


                <a href="{{ route('user.register', ['ref' => user()->username ?? 'notset']) }}">
                    <img src="https://altsfolio.org/banners/banner728.gif" alt="" width="728" height="90" /><br></a>
                <br><br>
                <textarea class="form-control" cols=60 rows=4>
<a href="{{ route('user.register', ['ref' => user()->username ?? 'notset']) }}">
<img src="https://altsfolio.org/banners/banner728.gif" alt="" width="728" height="90" /><br>
</a>
</textarea><br><br><br>
            </div>

        </div>
    </div>
</div>
<br><br>
@endsection