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



            <script language=javascript>
                function IsNumeric(sText) {
                    var ValidChars = "0123456789.";
                    var IsNumber = true;
                    var Char;
                    if (sText == '') return false;
                    for (i = 0; i < sText.length && IsNumber == true; i++) {
                        Char = sText.charAt(i);
                        if (ValidChars.indexOf(Char) == -1) {
                            IsNumber = false;
                        }
                    }
                    return IsNumber;
                }

                function checkform() {
                    if (document.editform.fullname.value == '') {
                        alert("Please type your full name!");
                        document.editform.fullname.focus();
                        return false;
                    }


                    if (document.editform.password.value != document.editform.password2.value) {
                        alert("Please check your password!");
                        document.editform.fullname.focus();
                        return false;
                    }




                    if (document.editform.email.value == '') {
                        alert("Please enter your e-mail address!");
                        document.editform.email.focus();
                        return false;
                    }



                    for (i in document.editform.elements) {
                        f = document.editform.elements[i];
                        if (f.name && f.name.match(/^pay_account/)) {
                            if (f.value == '') continue;
                            var notice = f.getAttribute('data-validate-notice');
                            var invalid = 0;
                            if (f.getAttribute('data-validate') == 'regexp') {
                                var re = new RegExp(f.getAttribute('data-validate-regexp'));
                                if (!f.value.match(re)) {
                                    invalid = 1;
                                }
                            } else if (f.getAttribute('data-validate') == 'email') {
                                var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
                                if (!f.value.match(re)) {
                                    invalid = 1;
                                }
                            }
                            if (invalid) {
                                alert('Invalid account format. Expected ' + notice);
                                f.focus();
                                return false;
                            }
                        }
                    }

                    return true;
                }
            </script>

            <div class="table-responsive">
                <form action="" method=post onsubmit="return checkform()" name=editform><input type="hidden" name="form_id" value="17442228201186"><input type="hidden" name="form_token" value="c0a73a65154450060f9c2ca63edc8bf0">
                    <input type=hidden name=a value=edit_account>
                    <input type=hidden name=action value=edit_account>
                    <input type=hidden name=say value="">


                    <table cellspacing=0 cellpadding=2 border=0 class="table table-striped table-bordered">
                        <tr>
                        <tr>
                            <td>Account Name:</td>
                            <td>edwinman</td>
                        </tr>
                        <tr>
                            <td>Registration date:</td>
                            <td>Apr-9-2025 11:49:21 PM</td>
                        </tr>
                        <tr>
                            <td>Your Full Name:</td>
                            <td><input type=text name=fullname value="Pamela Nirav" class="form-control" size=30>
                        </tr>

                        <tr>
                            <td>New Password:</td>
                            <td><input type=password name=password value="" class="form-control" size=30></td>
                        </tr>
                        <tr>
                            <td>Retype Password:</td>
                            <td><input type=password name=password2 value="" class="form-control" size=30></td>
                        </tr>
                        <tr>
                            <td>Your Account ID:</td>
                            <td><input type=text class="form-control" size=30 name="pay_account[1000][Account ID]" value="gfgffghghgghhghghg"></td>
                        </tr>
                        <tr>
                            <td>Your Account ID:</td>
                            <td><input type=text class="form-control" size=30 name="pay_account[1001][Account ID]" value="gfgffgfgfgfgfggf"></td>
                        </tr>
                        <tr>
                            <td>Your Account ID:</td>
                            <td><input type=text class="form-control" size=30 name="pay_account[1002][Account ID]" value="fgfgfgfghhghg"></td>
                        </tr>
                        <tr>
                            <td>Your E-mail address:</td>
                            <td><input type=text name=email value="edwinted22@gmail.com" class="form-control" size=30></td>
                        </tr>


                        <tr>
                            <td>&nbsp;</td>
                            <td><input type=submit value="Update" class="btn btn-primary"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection