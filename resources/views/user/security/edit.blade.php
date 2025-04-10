@extends('layouts.user')

@section('contents')
<div class="row  align-items-center justify-content-between" style="margin-top:10px">
    <div class="col-16 col-sm-16" class="btn-group pull-right">
        <p style="color:white"><b>SECURITY</b></p>
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
            <span style="float:left">Security Settings</span>
        </h5>
    </div>
    <div class="card-body">
        <div class="container_wizard wizard-bordered">

            <div class="table-responsive">

                <form method=post><input type="hidden" name="form_id" value="17442227118974"><input type="hidden" name="form_token" value="3840f5de1abaa8067e9e491427896959">
                    <input type=hidden name=a value="security">
                    <input type=hidden name=action value="save">
                    Detect IP Address Change Sensitivity<br>
                    <input type=radio name=ip value=disabled checked> Disabled<br>
                    <input type=radio name=ip value=medium> Medium<br>
                    <input type=radio name=ip value=high> High<br>
                    <input type=radio name=ip value=always> Paranoic<br><br>

                    Detect Browser Change<br>
                    <input type=radio name=browser value=disabled checked> Disabled<br>
                    <input type=radio name=browser value=enabled> Enabled<br><br>
                    <input type=submit value="Set" class="btn btn-primary">
                </form>

                <h3>Two Factor Authentication</h3>
                <form method=post name=mainform><input type="hidden" name="form_id" value="17442227118974"><input type="hidden" name="form_token" value="3840f5de1abaa8067e9e491427896959">
                    <input type=hidden name=a value="security">
                    <input type=hidden name=action value="tfa_save">
                    <input type=hidden name=time>

                    1. Install <a href="http://m.google.com/authenticator" target=_blank>Google Authenticator</a> on your mobile device.<br>
                    2. Your Secret Code is: <b>KGHTXCEJECRVJ45V</b> <input type=hidden name="tfa_secret" value="KGHTXCEJECRVJ45V"><br>
                    <img src="https://chart.googleapis.com/chart?chs=200x200&chld=M|0&cht=qr&chl=otpauth%3A%2F%2Ftotp%2Faltfolio.org%3Fsecret%3DKGHTXCEJECRVJ45V"><br>
                    3. Please enter two factor token from Google Authenticator to verify correct setup:<br>
                    <input type=text name="code" class="form-control"> <input type=submit value="Enable" class="btn btn-primary">
                </form>



                <script language=javascript>
                    document.mainform.time.value = (new Date()).getTime();

                    function checkform() {
                        if (!document.mainform.code.value.match(/^[0-9]{6}$/)) {
                            alert("Please type code!");
                            document.mainform.code.focus();
                            return false;
                        }
                        return true;
                    }
                </script>


            </div>
        </div>
    </div>
</div>
<br><br>
@endsection

@section('scripts')
@if (user()->g2fa == 0)
<script>
    $(document).ready(function() {
        // create qrcode
        var qrCodeElement = document.getElementById('wallet_qrcode');
        var text = "{{ $qr_code_url }}";
        var qrCode = new QRCode(qrCodeElement, {
            text: text,
            width: 128,
            height: 128
        });

        var walletQrCodeDiv = document.getElementById('wallet_qrcode');
        walletQrCodeDiv.classList.add('disabled');
        var imageElement = walletQrCodeDiv.querySelector('img');
        imageElement.classList.add('rounded-lg', 'border', 'border-slate-800',
            'hover:border-slate-600', 'cursor-pointer', 'p-1');
    });
</script>
@endif
@endsection