@extends('layouts.user')

@section('contents')
<div class="row  align-items-center justify-content-between" style="margin-top:10px">
    <div class="col-16 col-sm-16" class="btn-group pull-right">
        <p style="color:white"><b>ACCOUNT SETTINGS | PROFILE</b></p>
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
            <span style="float:left">Personal Profile Info
            </span>
        </h5>
    </div>
    <div class="card-body">
        <div class="container_wizard wizard-bordered">





            <div class="table-responsive">
                <form action="{{ route('user.profile.edit-validate') }}" method="post"  class="gen-form" >

                @csrf


                    <table cellspacing=0 cellpadding=2 border=0 class="table table-striped table-bordered">
                        <tr>
                        <tr>
                            <td>Account Name:</td>
                            <td>{{user()->username }}</td>
                        </tr>
                        <tr>
                            <td>Registration date:</td>
                            <td>{{user()->created_at }}</td>
                        </tr>

                            <td>Your Full Name:</td>
                            <td><input type=text name=name value="{{user()->name }}" id="name" class="form-control" size=30>
                            <span class="text-xs text-red-500">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span></tr></td>

                        </tr>

                        <tr>
                            <td>New Password:</td>
                            <td><input type=password name=password id="password" class="form-control" size=30>
                            <span class="text-xs text-red-500">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                        </td>
                        </tr>
                        <tr>
                            <td>Retype Password:</td>
                            <td><input type=password name=password_confirmation id="password_confirmation" class="form-control" size=30>
                            <span class="text-xs text-red-500">
                                        @error('password_confirmation')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </td>
                        </tr>
                        <tr>
                            <td>Your Account ID:</td>
                            <td><input type=text class="form-control" id="usdt_wallet" size=30 name="usdt_wallet" value="{{user()->usdt_wallet }}"></td>
                        </tr>
                        <tr>
                            <td>Your Account ID:</td>
                            <td><input type=text class="form-control" size=30 id="usdt_wallet2" name="usdt_wallet2" value="{{user()->usdt_wallet2 }}"></td>
                        </tr>
                        <tr>
                            <td>Your Account ID:</td>
                            <td><input type=text class="form-control" size=30 id="usdt_wallet3" name="usdt_wallet3" value="{{user()->usdt_wallet3 }}"></td>
                        </tr>
                        <tr>
                            <td>Your E-mail address:</td>
                            <td><input type=text name=email id="email" value="{{user()->email }}" class="form-control" size=30 disabled>
                            <span class="text-xs text-red-500">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span></td>
                        </tr>


                        <tr>
                            <td>&nbsp;</td>
                            <td><input type=submit value="Update" class="btn btn-primary" style="background-color: #5770e8;"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection

