@extends('layouts.user')

@section('contents')
<div class="row  align-items-center justify-content-between" style="margin-top:10px">
    <div class="col-16 col-sm-16">
        <p style="color:white"><b>TRADE CALENDER</b></p>
    </div>
</div>



<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container" style="width: 100%; height: 46px;">
    <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/ticker-tape/?locale=en#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22FOREXCOM%3ASPXUSD%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3ANSXUSD%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3ABTCUSD%22%2C%22title%22%3A%22BTC%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3AETHUSD%22%2C%22title%22%3A%22ETH%2FUSD%22%7D%5D%2C%22showSymbolLogo%22%3Atrue%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Afalse%2C%22displayMode%22%3A%22relative%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A46%2C%22utm_source%22%3A%22secureminingfirm.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22ticker-tape%22%2C%22page-uri%22%3A%22secureminingfirm.com%2Faccount%2Fcalendar%22%7D" title="ticker tape TradingView widget" lang="en" style="user-select: none; box-sizing: border-box; display: block; height: 46px; width: 100%;"></iframe>

    <style>
        .tradingview-widget-copyright {
            font-size: 13px !important;
            line-height: 32px !important;
            text-align: center !important;
            vertical-align: middle !important;
            /* @mixin sf-pro-display-font; */
            font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
            color: #B2B5BE !important;
        }

        .tradingview-widget-copyright .blue-text {
            color: #2962FF !important;
        }

        .tradingview-widget-copyright a {
            text-decoration: none !important;
            color: #B2B5BE !important;
        }

        .tradingview-widget-copyright a:visited {
            color: #B2B5BE !important;
        }

        .tradingview-widget-copyright a:hover .blue-text {
            color: #1E53E5 !important;
        }

        .tradingview-widget-copyright a:active .blue-text {
            color: #1848CC !important;
        }

        .tradingview-widget-copyright a:visited .blue-text {
            color: #2962FF !important;
        }
    </style>
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
    <div class="col-sm-16 col-md-16">
        <div class="card">
            <!-- <div class="card-header">
                <h6 class="card-title"><i class="fas fa-newspaper"></i> Top News </h6>
            </div> -->
            <div class="card-body">
                <iframe src="https://sslecal2.forexprostools.com?ecoDayBackground=%231a0303&amp;defaultFont=%23120202&amp;innerBorderColor=%23f7f4f4&amp;borderColor=%230f0303&amp;columns=exc_flags,exc_currency,exc_importance,exc_actual,exc_forecast,exc_previous&amp;category=_employment,_economicActivity,_inflation,_credit,_centralBanks,_confidenceIndex,_balance,_Bonds&amp;features=datepicker,timezone,timeselector,filters&amp;countries=25,32,6,37,72,22,17,39,14,10,35,43,56,36,110,11,26,12,4,5&amp;calType=week&amp;timeZone=55&amp;lang=1" allowtransparency="true" marginwidth="0" marginheight="0" width="100%" height="450" frameborder="2"></iframe>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection