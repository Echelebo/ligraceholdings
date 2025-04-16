@extends('layouts.user')

@section('contents')

<div class="row  align-items-center justify-content-between" style="margin-top:10px">
    <div class="col-16 col-sm-16">
        <p style="color:white"><b>DEPOSIT</b></p>
    </div>
</div>

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container" style="width: 100%; height: 46px;">
    <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/ticker-tape/?locale=en#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22FOREXCOM%3ASPXUSD%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3ANSXUSD%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3ABTCUSD%22%2C%22title%22%3A%22BTC%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3AETHUSD%22%2C%22title%22%3A%22ETH%2FUSD%22%7D%5D%2C%22showSymbolLogo%22%3Atrue%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Afalse%2C%22displayMode%22%3A%22relative%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A46%2C%22utm_source%22%3A%22altfolio.org%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22ticker-tape%22%2C%22page-uri%22%3A%22altfolio.org%2F%3Fa%3Ddeposit%22%7D" title="ticker tape TradingView widget" lang="en" style="user-select: none; box-sizing: border-box; display: block; height: 46px; width: 100%;"></iframe>

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
            <span style="float:left">Deposit Confirmation</span>
        </h5>
    </div>
    <div class="card-body" id="pageContent">
        <div class="container_wizard wizard-bordered">

            <div class="table-responsive">

                <p>

                Wallet:  <font color="red"> <b>{{$depositusdtwallet->wallet_address ?? 'Wallet Address not set contact admin'}}</b></font>

                <br><b><span
                class="clipboard cursor-pointer btn btn-warning m-t-xs" data-copy="{{$depositusdtwallet->wallet_address ?? 'Wallet Address not set contact admin'}}">Copy Wallet</span></b>
                    <!--hkindly send your payment to the wallet below <br>-->
                    <!-- The text field -->
                 <!--   <input type="text" value="Please make your payment to this wallet address: &lt;b&gt;  bc1q2r97ae3kmatlgelhwqedj8yu45phg57n5kqg5q&lt;/b&gt;" id="myInput"> -->
                    <!-- The button used to copy the text -->
                  <!--  <button onclick="myFunction()" class="btn btn-warning m-t-xs">Copy wallet</button> -->
                </p>
                <br><br>
                <table cellspacing="0" cellpadding="2" class="form deposit_confirm table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <th>Plan:</th>
                            <td>{{$plan_name}}</td>
                        </tr>
                        <tr>
                            <th>Profit:</th>
                            <td>{{$plan_daily_profit}}% after 24 hours</td>
                        </tr>
                        <tr>
                            <th>Principal Return:</th>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <th>Principal Withdraw:</th>
                            <td>
                                Not available </td>
                        </tr>

                        <tr>
                            <th>Credit Amount:</th>
                            <td>${{$plan_amount}}</td>
                        </tr>
                        <tr>
                            <th>Deposit Fee:</th>
                            <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                        </tr>
                        <tr>
                            <th>Debit Amount:</th>
                            <td>${{$plan_amount}}</td>
                        </tr>
                    </tbody>
                </table>
                <br><br>
                <form action="{{ route('user.bots.activateusdtpay') }}" method="post" id="tbctransferForm">
                    @csrf
<input type="hidden" name="plan_id" value="{{$botx}}">
<input type="hidden" name="amount" id="amount" value="{{$plan_amount}}">
<input type="hidden" name="currency_code" id="currency_code" value="{{$depositusdtwallet->code}}">
<input type="hidden" name="compound" value="{{$compound}}">
                    <table cellspacing="0" cellpadding="2" class="table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <td colspan="2"><b>Required Information:</b></td>
                            </tr>
                            <tr>
                                <td>Payer Account</td>
                                <td><input type="text" name="payername" value="" class="inpts" required></td>
                            </tr>
                            <tr>
                                <td>Transaction ID</td>
                                <td><input type="text" name="trans_id" value="" class="inpts" required></td>
                            </tr>
                        </tbody>
                    </table>

                    <br><input type="submit" value="Save" class="sbmt" style="background-color: #5770e8;"> &nbsp;
                    <input type="button" class="sbmt" value="Cancel" onclick="document.location='/user/bots'">
                </form>


            </div>
        </div>
    </div>
</div>
<br><br>

@endsection

@section('scripts')
    <script>
        // search deposit
        $(document).on('input keyup', '#search-deposit-input', function(e) {
            var ref = $(this).val();
            var base_link = $('#search-deposit-button').data('link');
            var encodedRef = encodeURIComponent(ref);

            // Append the query parameter to the URL
            var link = base_link + '?s=' + encodedRef;
            $('#search-deposit-button').attr('href', link);
        });

        let interval;
        //single deposit
        $(document).on('click', '.view-single-deposit', function(e) {
            var clicked = $(this);
            clicked.addClass('relative disabled');
            clicked.append('<span class="button-spinner"></span>');
            clicked.prop('disabled', true);
            var link = $(this).data('link');
            $('#single-display-new-deposit-information').removeClass('hidden');
            var html = $('#single-display-new-deposit-information');

            $.ajax({
                url: link,
                method: 'GET',
                success: function(response) {
                    var deposit = response.deposit;

                    Swal.fire({
                        html: `
                        <div class="mt-5" id="single-display-new-deposit-information">
                            <div>
                                <div class="ts-gray-1 p-2 w-full rounded-lg border border-slate-800 hover:border-slate-600">
                                    <div class="w-full flex justify-center items-center mb-2">
                                        <div id="single_wallet_qrcode" class="clipboard" data-copy=""></div>
                                    </div>
                                    <div class="w-full text-mono text-sm break-all">
                                        <div class="w-full flex items-center justify-between">
                                            <h2>Status </h2>
                                            <h2 class="font-bold"> <span id="single_display_deposit_status"></span>
                                            </h2>
                                        </div>
                                        <div class="w-full flex items-center justify-between">
                                            <h2>Valid Until </h2>
                                            <h2 class="font-bold"> <span id="single_display_deposit_valid_until"></span>
                                            </h2>
                                        </div>
                                        <div class="w-full flex items-center justify-between">
                                            <h2>Amount </h2>
                                            <h2 class="font-bold">{{ site('currency') }}<span id="single_display_deposit_amount"></span>
                                            </h2>
                                        </div>
                                        <div class="w-full flex items-center justify-between">
                                            <h2>Fee </h2>
                                            <h2 class="font-bold">{{ site('currency') }}<span id="single_display_deposit_fee"></span>
                                            </h2>
                                        </div>
                                        <div class="w-full flex items-center justify-between">
                                            <h2>Pay Amount</h2>
                                            <h2 class="font-bold"><span id="single_display_deposit_converted_amount"
                                                    class="clipboard cursor-pointer" data-copy=""> </span> <span
                                                    id="single_display_deposit_currency"></span>
                                            </h2>
                                        </div>
                                        <div class="w-full flex items-center justify-between">
                                            <h2>Network </h2>
                                            <h2 class="font-bold"><span id="single_display_deposit_network"
                                                    class="clipboard cursor-pointer" data-copy=""></span>
                                            </h2>
                                        </div>
                                        <div class="w-full flex items-center justify-between">
                                            <h2>Wallet Address </h2>
                                            <h2 class="font-bold"><span id="single_display_deposit_payment_wallet"
                                                    class="clipboard cursor-pointer" data-copy=""></span>
                                            </h2>
                                        </div>
                                        <div class="w-full flex items-center justify-between">
                                            <h2>Txn Ref </h2>
                                            <h2 class="font-bold"><span id="single_display_deposit_ref" class="clipboard cursor-pointer"
                                                    data-copy=""></span>
                                            </h2>
                                        </div>



                                    </div>

                                </div>
                            </div>
                        </div>
                        `,
                        toast: false,
                        background: 'rgb(7, 3, 12, 0)',
                        showConfirmButton: false,
                        showCloseButton: true,
                        allowEscapeKey: false, // Prevent closing by escape key
                        allowOutsideClick: false, // Prevent closing by clicking backdrop
                        willClose: () => {
                            //delete the previously generated qrcode
                            // $('#single_wallet_qrcode').html('');
                        }
                    });


                    // Loop through the deposit object's properties
                    for (var key in deposit) {
                        if (deposit.hasOwnProperty(key)) {
                            var value = deposit[key];
                            var element = $('#single_display_deposit_' + key);
                            if (element.length > 0) {
                                element.text(value);
                            }

                            //update the copy attribute
                            if (element.hasClass('clipboard')) {
                                element.attr('data-copy', value);
                            }


                        }
                    }

                    // create qrcode
                    var qrCodeElement = document.getElementById('single_wallet_qrcode');
                    var qrCode = new QRCode(qrCodeElement, {
                        text: deposit.payment_wallet,
                        width: 128,
                        height: 128
                    });

                    var walletQrCodeDiv = document.getElementById('single_wallet_qrcode');
                    walletQrCodeDiv.setAttribute('data-copy', deposit.payment_wallet);
                    var imageElement = walletQrCodeDiv.querySelector('img');
                    imageElement.classList.add('rounded-lg', 'border', 'border-slate-800',
                        'hover:border-slate-600', 'cursor-pointer', 'p-1');
                    //imageElement.setAttribute('style', '');

                    //create a count down
                    var targetId = 'single_display_deposit_valid_until';
                    var targetDateString = deposit.valid_until;
                    if (interval) {
                        clearInterval(interval);
                    }

                    interval = setInterval(function() {
                        updateCountdown(targetId, targetDateString);
                    }, 1000);

                    // Check payment status
                    var ref = deposit.ref
                    setInterval(function() {
                        $.ajax({
                            url: "{{ url('/user/deposits/view') }}" + '/' + deposit
                                .ref,
                            method: 'GET',
                            success: function(response) {
                                var status = response.deposit.status;
                                $('#single_display_deposit_status').html(status);


                            }
                        });
                    }, 10000);


                },
                complete: function() {
                    clicked.removeClass('disabled');
                    clicked.find('.button-spinner').remove();
                    clicked.prop('disabled', false);

                }
            });

        });
        // select the deposit coin
        $(document).on('click', ".coin", function(e) {
            $('.coin_select').addClass('hidden');
            var target = '#' + $(this).data('target');
            $(target).toggleClass('hidden');

            var currency_code = $(this).data('currency_code');
            $("#currency_code").val(currency_code);

        });


        // filter the coins
        $(document).on('input keyup', '#coin-search-input', function() {
            var searchText = $(this).val().toLowerCase();

            $('.coin').hide().filter(function() {
                return $(this).text().toLowerCase().includes(searchText);
            }).show();
        });


        // handle deposit form
        $(document).on('submit', '#depositForm', function(e) {
            e.preventDefault();
            var amount = $('#amount').val() * 1;
            var currency_code = $('#currency_code').val();
            var min_deposit = "{{ site('min_deposit') }}" * 1;
            var max_deposit = "{{ site('max_deposit') }}" * 1;
            var currency = "{{ site('currency') }}";
            var compound = $('#compound').val();
            var trans_id = $('#trans_id').val();
            var plan_id = $('#plan_id').val();

            //check the currency code
            var error = null;
            if (!currency_code) {
                error = 'You have not selected a deposit method';
            }

            //check min and max deposit
            if (amount < min_deposit) {
                error = 'Minimum deposit amount is ' + currency + min_deposit;
            }

            if (amount > max_deposit) {
                error = 'Maximum deposit amount is ' + currency + max_deposit;
            }

            if (error === null) {
                var form = $(this);
                var formData = new FormData(this);

                var submitButton = $(this).find('input[type="submit"]');
                submitButton.addClass('relative disabled');
                submitButton.append('<span class="button-spinner"></span>');
                submitButton.prop('disabled', true);

                $('html, body').animate({
                    scrollTop: 0 + 100
                }, 800);
                toastNotify('success', 'Deposit request initated successfully');

                // Check payment status



            },


        });
    </script>

    <script>
        $(document).on('submit', '#tbctransferForm', function(e) {
            e.preventDefault();
            var amount = $('#amount').val() * 1;
            var currency_code = $('#currency_code').val() * 1;
            var currency = "{{ site('currency') }}" * 1;
            var compound = $('#compound').val() * 1;
            var trans_id = $('#trans_id').val() * 1;
            var plan_id = $('#plan_id').val() * 1;

            //check the currency code
            var error = null;
            //check min and max transfer

            if (error === null) {
                var form = $(this);
                var formData = new FormData(this);

                var submitButton = $(this).find('input[type="submit"]');
                submitButton.addClass('relative disabled');
                submitButton.append('<span class="button-spinner"></span>');
                submitButton.prop('disabled', true);

                $.ajax({
                    url: form.attr('action'),
                    method: 'POST',
                    data: formData,
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    success: function(response) {

                        window.location.href = "/user/bots";


                        loadPage(form.attr('action'), submitButton, '#pageContent');

                        $('html, body').animate({
                            scrollTop: 0 + 100
                        }, 800);
                        toastNotify('success', response.message);




                    },
                    error: function(xhr, status, error) {
                        var errors = xhr.responseJSON.errors;

                        if (errors) {
                            $.each(errors, function(field, messages) {
                                var fieldErrors = '';
                                $.each(messages, function(index, message) {
                                    fieldErrors += message + '<br>';
                                });
                                toastNotify('error', fieldErrors);
                            });
                        } else {
                            toastNotify('error', 'An Error occured, try again later');
                        }


                    },
                    complete: function() {
                        submitButton.removeClass('disabled');
                        submitButton.find('.button-spinner').remove();
                        submitButton.prop('disabled', false);

                    }
                });
            } else {

                toastNotify('error', error);

            }

        });
    </script>
@endsection