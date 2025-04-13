@extends('layouts.user')

@section('contents')
<div class="row  align-items-center justify-content-between" style="margin-top:10px">
    <div class="col-16 col-sm-16" class="btn-group pull-right">
        <p style="color:white"><b>TRANSACTIONS</b></p>
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
            <span style="float:left">Transactions</span>
        </h5>
    </div>
    <div class="card-body">
        <div class="container_wizard wizard-bordered">

            <div class="table-responsive">

                <script language=javascript>
                    function go(p) {
                        document.opts.page.value = p;
                        document.opts.submit();
                    }
                </script>


                <table cellspacing=0 cellpadding=0 border=0 width=100% class="table table-striped table-bordered">
                    <tr>
                        <form method=post name=opts>

                            <td>
                                <select name=type class="form-control" onchange="document.opts.submit();" style=" width: 90%;  display: inline-block;">
                                    <option value="">All transactions</option>
                                    <option value="deposit">Deposit</option>
                                    <option value="withdrawal">Withdrawal</option>
                                    <option value="earning">Earning</option>
                                    <option value="commissions">Referral commission</option>
                                </select>
                                <br><img src=trust/images/q.gif width=1 height=4><br>
                                <select name=ec class="form-control" style=" width: 90%;  display: inline-block;">
                                    <option value=-1>All eCurrencies</option>
                                    <option value=1000>Bitcoin</option>
                                    <option value=1001>Ethereum</option>
                                    <option value=1002>USDT TRC20</option>
                                </select>
                            </td>
                            <td align=right>
                                From: <select name=month_from class="form-control" style=" width: 27%;  display: inline-block;">
                                    <option value=1>Jan
                                    <option value=2>Feb
                                    <option value=3>Mar
                                    <option value=4 selected>Apr
                                    <option value=5>May
                                    <option value=6>Jun
                                    <option value=7>Jul
                                    <option value=8>Aug
                                    <option value=9>Sep
                                    <option value=10>Oct
                                    <option value=11>Nov
                                    <option value=12>Dec
                                </select> &nbsp;
                                <select name=day_from class="form-control" style=" width: 27%;  display: inline-block;">
                                    <option value=1>1
                                    <option value=2>2
                                    <option value=3>3
                                    <option value=4>4
                                    <option value=5>5
                                    <option value=6>6
                                    <option value=7>7
                                    <option value=8>8
                                    <option value=9 selected>9
                                    <option value=10>10
                                    <option value=11>11
                                    <option value=12>12
                                    <option value=13>13
                                    <option value=14>14
                                    <option value=15>15
                                    <option value=16>16
                                    <option value=17>17
                                    <option value=18>18
                                    <option value=19>19
                                    <option value=20>20
                                    <option value=21>21
                                    <option value=22>22
                                    <option value=23>23
                                    <option value=24>24
                                    <option value=25>25
                                    <option value=26>26
                                    <option value=27>27
                                    <option value=28>28
                                    <option value=29>29
                                    <option value=30>30
                                    <option value=31>31
                                </select> &nbsp;

                                <select name=year_from class="form-control" style=" width: 27%;  display: inline-block;">
                                    <option value=2021>2021
                                    <option value=2022>2022
                                    <option value=2023>2023
                                    <option value=2024>2024
                                    <option value=2025 selected>2025
                                </select><br><img src=trust/images/q.gif width=1 height=4><br>

                                To: <select name=month_to class="form-control" style=" width: 27%;  display: inline-block;">
                                    <option value=1>Jan
                                    <option value=2>Feb
                                    <option value=3>Mar
                                    <option value=4 selected>Apr
                                    <option value=5>May
                                    <option value=6>Jun
                                    <option value=7>Jul
                                    <option value=8>Aug
                                    <option value=9>Sep
                                    <option value=10>Oct
                                    <option value=11>Nov
                                    <option value=12>Dec
                                </select> &nbsp;
                                <select name=day_to class="form-control" style=" width: 27%;  display: inline-block;">
                                    <option value=1>1
                                    <option value=2>2
                                    <option value=3>3
                                    <option value=4>4
                                    <option value=5>5
                                    <option value=6>6
                                    <option value=7>7
                                    <option value=8>8
                                    <option value=9>9
                                    <option value=10 selected>10
                                    <option value=11>11
                                    <option value=12>12
                                    <option value=13>13
                                    <option value=14>14
                                    <option value=15>15
                                    <option value=16>16
                                    <option value=17>17
                                    <option value=18>18
                                    <option value=19>19
                                    <option value=20>20
                                    <option value=21>21
                                    <option value=22>22
                                    <option value=23>23
                                    <option value=24>24
                                    <option value=25>25
                                    <option value=26>26
                                    <option value=27>27
                                    <option value=28>28
                                    <option value=29>29
                                    <option value=30>30
                                    <option value=31>31
                                </select> &nbsp;

                                <select name=year_to class="form-control" style=" width: 27%;  display: inline-block;">
                                    <option value=2021>2021
                                    <option value=2022>2022
                                    <option value=2023>2023
                                    <option value=2024>2024
                                    <option value=2025 selected>2025
                                </select>

                            </td>
                            <td>
                                &nbsp; <input type=submit value="Go" class="btn btn-primary">
                            </td>
                    </tr>
                </table>
                </form>
                <br><br>


                <table cellspacing=1 cellpadding=2 border=0 width=100% class="table table-striped table-bordered">
                    <tr>
                        <th class=inheader><b>Type</b></th>
                        <th class=inheader width=200><b>Amount</b></th>
                        <th class=inheader width=170><b>Date</b></th>
                    </tr>
                    <tr>
                        <td colspan=3 align=center>No transactions found</td>
                    </tr>
                    <tr>
                        <td colspan=3>&nbsp;</td>



                </table>

                <ul class="pagination">
                    <li class="page-item"><a class="prev page-link disabled">&lt;&lt;</a></li>
                    <li class="page-item active"><a class="page-link">1</a></li>
                    <li class="page-item"><a class="next page-link disabled">&gt;&gt;</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection

@section('scripts')
@foreach ($activations as $item)
<script>
    $(document).ready(function() {
        var target = "{{ 'bot_timer_' . $item->id }}";
        var expires_in = {
            {
                $item - > expires_in
            }
        };

        // Get the current time in milliseconds
        var currentTime = new Date().getTime();

        // Calculate the remaining time in milliseconds
        var remainingTime = expires_in * 1000 - currentTime;

        // Calculate days, hours, minutes, and seconds
        var days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));
        var hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

        // Display the countdown
        var countdownElement = document.getElementById(target);
        countdownElement.innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s";

        // Update the countdown every second
        var countdownInterval = setInterval(function() {
            if (remainingTime > 0) {
                remainingTime -= 1000;

                days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));
                hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
                seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

                countdownElement.innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds +
                    "s";
            } else {
                clearInterval(countdownInterval);
                countdownElement.innerHTML = "Expired";
            }
        }, 1000);
    });
</script>
@endforeach
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
                            <div class="ts-gray-1-x text-white px-2 py-5 w-full rounded-lg border border-slate-800 hover:border-slate-600">
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
                                                    class="placeholder-label text-white ts-gray-2-x px-2">Capital
                                                    ({{ site('currency') }})
                                                </label>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-10 mb-10 px-3 flex flex-start">
                                        <button type="submit" id="activateButton"
                                            class="bg-blue-500 px-2 py-1 rounded-lg hover:scale-110 transition-all"> Activate Now
                                        </button>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                `,
            toast: false,
            background: 'rgb(34, 37, 47, 0)',
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
                toastNotify('success', 'Bot activated successfully');


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

    });
</script>


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
    var profits = {
        !!json_encode($profits) !!
    };
    var profitInt = profits.map(value => parseFloat((value * 1).toFixed(2)));

    Highcharts.chart('profitChart', {
        chart: {
            type: 'spline',
            backgroundColor: '#22252F', // Set background color here

            plotBackgroundColor: '#22252F',
            plotBorderWidth: 1,
            plotBorderColor: 'rgb(85, 147, 247)',

            borderWidth: 0,
            borderColor: 'rgb(85, 147, 247)',
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
                    return p.series.name + ', ' + p.category + ', ' + p.y + '{{ site('
                    currency ') }}.';
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
            categories: {
                !!json_encode($days) !!
            },
            crosshair: true
        },
        yAxis: {
            // min: 0,
            title: {
                text: '<span style="color: white">PNL ({{ site('
                currency ') }})</span>'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size: 10px">{point.key} PNL</span><br/>',
            valuePrefix: '{{ site('
            currency ') }}'
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: '<span style="color: white">PNL</span>',
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
            background: 'rgb(34, 37, 47, 0)',
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
@endsection