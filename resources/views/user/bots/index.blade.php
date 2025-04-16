@extends('layouts.user')

@section('contents')
<div class="row  align-items-center justify-content-between" style="margin-top:10px">
    <div class="col-16 col-sm-16" class="btn-group pull-right">
        <p style="color:white"><b>DEPOSIT</b></p>
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


<div class="card" id="pageContent">
    <div class="card-header">
        <h5 class="font-weight-bold">
            <span style="float:left">Make a Deposit</span>
        </h5>
    </div>
    <div class="card-body">
        <div class="container_wizard wizard-bordered">

            <div class="table-responsive">


                <script language="javascript">

                    function openCalculator(id) {

                        w = 225;
                        h = 400;
                        t = (screen.height - h - 30) / 2;
                        l = (screen.width - w - 30) / 2;
                        window.open('?a=calendar&type=' + id, 'calculator' + id, "top=" + t + ",left=" + l + ",width=" + w + ",height=" + h + ",resizable=1,scrollbars=0");



                        for (i = 0; i < document.spendform.h_id.length; i++) {
                            if (document.spendform.h_id[i].value == id) {
                                document.spendform.h_id[i].checked = true;
                            }
                        }



                    }

                    function updateCompound() {
                        var id = 0;
                        var tt = document.spendform.h_id.type;
                        if (tt && tt.toLowerCase() == 'hidden') {
                            id = document.spendform.h_id.value;
                        } else {
                            for (i = 0; i < document.spendform.h_id.length; i++) {
                                if (document.spendform.h_id[i].checked) {
                                    id = document.spendform.h_id[i].value;
                                }
                            }
                        }

                        var cpObj = document.getElementById('compound_percents');
                        if (cpObj) {
                            while (cpObj.options.length != 0) {
                                cpObj.options[0] = null;
                            }
                        }

                        if (cps[id] && cps[id].length > 0) {
                            document.getElementById('coumpond_block').style.display = '';

                            for (i in cps[id]) {
                                cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
                            }
                        } else {
                            document.getElementById('coumpond_block').style.display = 'none';
                        }
                    }
                    var cps = {};

                </script>




                <br>

                <form action="{{ route('user.bots.new') }}" method="post" id="tbctransferForm" name="spendform" >
                @csrf
                    Select a plan:<br>

                    @foreach ($bots as $bot)

                    <table cellspacing="1" cellpadding="2" border="0" width="100%" class="table table-striped table-bordered">
                        <tr>
                            <td colspan="3">
                                <input type="radio" id="bot_id" name="bot_id" value="{{$bot->id}}" onclick="updateCompound()" required>

                                <b>{{ $bot->name }}</b>
                            </td>
                        </tr>
                        <tr>
                            <th class="inheader">Plan</th>
                            <th class="inheader" width="200">Spent Amount (<span class="fiat">$</span>)</th>
                            <th class="inheader" width="100" nowrap>
                                <nobr>Daily Profit (%)</nobr>
                            </th>
                        </tr>
                        <tr>
                            <td class="item">{{ $bot->name }}</td>
                            <td class="item" align="right"><span class="min_deposit">${{number_format($bot->min)}}</span> - <span class="max_deposit">$ @if ($bot->max >= 10000000) &infin; @else {{ number_format($bot->max) }} @endif </span></td>
                            <td class="item" align="right">{{ $bot->daily_min . '%' }}</td>
                        </tr>
                        <tr>
                            <td colspan=3 align=right><a href="javascript:openCalculator({{ $bot->id }})">Calculate your profit &gt;&gt;</a></td>
                        </tr>
                    </table><br><br>
                    <script>cps[{{ $bot->id }}] =[];
                </script>

                    @endforeach

                    <table cellspacing=0 cellpadding=2 border=0 class="table table-striped table-bordered">
                        <tr>
                            <td>Account Balance:</td>
                            <td>$<b>{{ number_format(user()->balance) }}</b></td>
                        </tr>
                    </table>
                    <br>
                    <table cellspacing=0 cellpadding=2 border=0 class="table table-striped table-bordered">
                        <tr>
                            <th>Processing</th>
                            <th>Topup</th>
                            <th>Balance</th>
                        </tr>
                        <tr>
                            <td><img src="/trust/images/1000.gif" width="44" height="17" align="absmiddle"> Bitcoin:</td>
                            <td><input type=radio name=type value="1" data-fiat="" required></td>
                            <td><input type=radio name=type value="0" data-fiat="" disabled> ${{ number_format(user()->balance) }}</td>
                        </tr>
                        <tr>
                       <td><img src="/trust/images/1001.gif" width="44" height="17" align="absmiddle"> Ethereum:</td>
                            <td><input type=radio name=type value="2" data-fiat=""></td>
                            <td><input type=radio name=type value="4" data-fiat="" disabled> ${{ number_format(user()->balance) }}</td>
                        </tr>
                        <tr>
                            <td><img src="/trust/images/1002.gif" width="44" height="17" align="absmiddle"> USDT TRC20:</td>
                            <td><input type=radio name=type value="3" data-fiat=""></td>
                            <td><input type=radio name=type value="5" data-fiat="" disabled> ${{ number_format(user()->balance) }}</td>
                        </tr>
                        <p class="mb-3 text-red-500 " id="errorMessage"></p>
                    </table>
                    <br>
                    <table cellspacing=0 cellpadding=2 border=0 class="table table-striped table-bordered">
                        <tr>
                            <td>Amount to Spend ($):</td>
                            <td align=right><input type="text" name="capital" id="capital" value='100.00' class="form-control" size=15 style="text-align:right;" required></td>
                        </tr>
                        <tr id="coumpond_block" style="display:none">
                            <td>Compounding(%):</td>
                            <td align=right>
                                <select name="compound" class="form-control" id="compound_percents"></select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=2><input type=submit value="Spend" class="btn btn-primary" id="activateButton-x" style="background-color: #5770e8;"></td>
                        </tr>
                    </table>



                </form>

                <script language=javascript>
            for (i = 0; i < document.spendform.type.length; i++) {
                if ((document.spendform.type[i].value.match(/^process_/))) {
                    document.spendform.type[i].checked = true;
                    break;
                }
            }
            updateCompound();
        </script>



            </div>
        </div>
    </div>
</div>
<br><br>

@endsection

@section('scripts')

    <script>
        let interval;


        // select the bot bot
        $(document).on('click', ".bot", function(e) {


            var bot_id = $(this).data('bot_id');
            var bot_name = $(this).data('bot_name');

            Swal.fire({
                html: `
                    <div class="mt-5">
                        <div>
                            <div class=" text-white px-2 py-5 w-full rounded-lg border border-slate-800 hover:border-slate-600">
                                <form action="{{ route('user.bots.new') }}" method="post" id="botForm">
                                    @csrf
                                    <input type="hidden" name="bot_id" id="bot_id">
                                    <p class="mb-3">You have chosen to activate <span class="text-orange-500" id="dispay_bot_name"></span>  Ai bot</p>
                                    <p class="mb-3 text-red-500 text-xs" id="errorMessage"></p>
                                    <div class="flex justify-end mb-5">
                                        <div class="grid grid-cols-1 mb-2 mt-5 w-full">
                                            <div class="relative">

                                                <span class="theme1-input-icon material-icons">
                                                    paid
                                                </span>
                                                <input type="number" step="any"
                                                    placeholder="Capital ({{ site('currency') }})" id="capital"
                                                    class="theme1-text-input" name="capital" value="0" required>
                                                <label for="capital"
                                                    class="placeholder-label text-gray-300  px-2">Capital
                                                    ({{ site('currency') }})
                                                </label>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-10 mb-10 px-3 flex flex-start">
                                        <button type="submit" id="activateButton"
                                            class="bg-purple-500 px-2 py-1 rounded-lg hover:scale-110 transition-all"> Activate Now
                                        </button>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                `,
                toast: false,
                background: 'rgb(7, 3, 12, 0)',
                showConfirmButton: false,
                showCancelButton: false,
                showCloseButton: true,
                allowEscapeKey: false,
                allowOutsideClick: false,



            });

            $('#dispay_bot_name').html(bot_name);
            $("#bot_id").val(bot_id);




        });

        // handle deposit form
        $(document).on('submit', '#botForm', function(e) {
            e.preventDefault();

            var form = $(this);
            var formData = new FormData(this);

            var submitButton = $(this).find('button[type="submit"]');
            submitButton.addClass('relative disabled');
            submitButton.append('<span class="button-spinner"></span>');
            submitButton.prop('disabled', true);
            if ($('input[name=type]:checked').val() == 1) {
                botForm.submit();
            } else {

                $.ajax({
                    url: form.attr('action'),
                    method: 'POST',
                    data: formData,
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        var link = window.location.href;
                        var targetDiv = '#bots';
                        $.ajax({
                            url: link,
                            method: 'GET',
                            success: function(response) {
                                $(targetDiv).html($(response).find(targetDiv).html());
                                var scrollTo = $(targetDiv).offset().top - 100;
                                $('.rescron-card').addClass('hidden');
                                $(targetDiv).removeClass('hidden');
                                $('html, body').animate({
                                    scrollTop: scrollTo
                                }, 800);
                            }
                        });
                        toastNotify('success', 'Plan activated successfully');


                    },
                    error: function(xhr, status, error) {
                        var errors = xhr.responseJSON.errors;

                        if (errors) {
                            $.each(errors, function(field, messages) {
                                var fieldErrors = '';
                                $.each(messages, function(index, message) {
                                    fieldErrors += message + '<br>';
                                });
                                $('#errorMessage').html(fieldErrors);
                            });
                        } else {
                            $('#errorMessage').html('error', 'An Error occured, try again later');
                        }


                    },
                    complete: function() {
                        submitButton.removeClass('disabled');
                        submitButton.find('.button-spinner').remove();
                        submitButton.prop('disabled', false);

                    }
                });

            };


        });
    </script>


    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <script>
        var profits = {!! json_encode($profits) !!};
        var profitInt = profits.map(value => parseFloat((value * 1).toFixed(2)));

        Highcharts.chart('profitChart', {
            chart: {
                type: 'spline',
                backgroundColor: '#1f1a23', // Set background color here

                plotBackgroundColor: '#1f1a23',
                plotBorderWidth: 1,
                plotBorderColor: 'rgb(168, 85, 247)',

                borderWidth: 0,
                borderColor: 'rgb(168, 85, 247)',
                borderRadius: 10,
                style: {
                    fontFamily: 'Arial, sans-serif',
                    fontSize: '14px',
                    color: '#fff'
                }
            },
            accessibility: {
                point: {
                    descriptionFormatter: function(p) {
                        return p.series.name + ', ' + p.category + ', ' + p.y + '{{ site('currency') }}.';
                    }
                }
            },
            title: {
                text: '<span style="color: white">30 Days PNL</span>'
            },
            subtitle: {
                text: 'PNL Chart history for the last 30 days'
            },
            xAxis: {
                categories: {!! json_encode($days) !!},
                crosshair: true
            },
            yAxis: {
                // min: 0,
                title: {
                    text: '<span style="color: white">PNL ({{ site('currency') }})</span>'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size: 10px">{point.key} PNL</span><br/>',
                valuePrefix: '{{ site('currency') }}'
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'PNL',
                data: profitInt
            }]
        });
    </script>

    {{-- view trading history chart --}}
    <script src="https://s3.tradingview.com/tv.js"></script>
    <script>
        $(document).on('click', '.view-chart', function(e) {
            var pair = $(this).data('pair'); // BTCUSDT

            //fetch trading view chart for the pair
            Swal.fire({
                html: `
                        <div class="mt-5 sm:overflow-x-scroll">
                            <div id="chart-container"></div>
                        </div>
                        `,
                toast: false,
                background: 'rgb(7, 3, 12, 0)',
                showConfirmButton: false,
                showCloseButton: true,
                position: 'top-left',
                allowEscapeKey: false, // Prevent closing by escape key
                allowOutsideClick: false, // Prevent closing by clicking backdrop
                willClose: () => {
                    //delete the previously generated qrcode
                    // $('#single_wallet_qrcode').html('');
                }
            });

            new TradingView.widget({
                // Define the container element for the widget
                container_id: 'chart-container', // Replace 'chart-container' with your actual container ID

                // Specify the symbol (pair) you want to display
                symbol: pair,

                // Specify the interval for the chart (e.g., '1D' for 1 day)
                interval: '1D',

                // Choose the style of the chart (e.g., 'Line' or 'Candles')
                style: 'Candles',

                // Specify the timezone for the chart
                timezone: 'Etc/UTC',
                theme: 'Dark'

            });

        });
    </script>

    <script>
        $(document).on('submit', '#tbctransferForm', function(e) {
            e.preventDefault();
            var bot_id = $('#bot_id').val() * 1;
            var capital = $('#capital').val() * 1;
            var compound = $('#compound').val() * 1;
            var type = $('#type').val() * 1;

            //check the currency code
            var error = null;
            //check min and max transfer

             //check min and max withdrawal

        if (bot_id == 1) {
            if (capital < 100 || capital > 1000) {
                error = 'Plan range for amount is $100 - $1000';
            }
         }

         if (bot_id == 2) {
            if (capital < 1000 || capital > 10000) {
                error = 'Plan range for amount is $1,000 - $10,000';
            }
         }

         if (bot_id == 3) {
            if (capital < 5000 ) {
                error = 'Plan range for amount is $100 - UNLIMITED';
            }
         }

         if (bot_id == 4) {
            if (capital < 10000 ) {
                error = 'Plan range for amount is $100 - UNLIMITED';
            }
         }

            if (error === null) {
                var form = $(this);
                var formData = new FormData(this);

                var submitButton = $(this).find('button[type="submit"]');
                submitButton.addClass('relative disabled');
                submitButton.append('<span class="button-spinner"></span>');
                submitButton.prop('disabled', true);

                if ($('input[name=type]:checked').val() == 1 || $('input[name=type]:checked').val() == 2 || $('input[name=type]:checked').val() == 3) {
                    tbctransferForm.submit();
                } else {
                    $.ajax({
                        url: form.attr('action'),
                        method: 'POST',
                        data: formData,
                        dataType: 'json',
                        contentType: false,
                        processData: false,
                        success: function(response) {

                            window.location.reload();


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
                }
            } else {

                toastNotify('error', error);

            }

        });
    </script>
@endsection