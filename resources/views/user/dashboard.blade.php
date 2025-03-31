@extends('layouts.user')

@section('contents')
    
<div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item">Home</li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <div class="col-md-4">
                            <div class="card stat-card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Balance</h5>
                                    <div class="flex text-green-500  px-2 py-1 rounded-full hover:scale-110 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M15.22 6.268a.75.75 0 01.968-.432l5.942 2.28a.75.75 0 01.431.97l-2.28 5.941a.75.75 0 11-1.4-.537l1.63-4.251-1.086.483a11.2 11.2 0 00-5.45 5.174.75.75 0 01-1.199.19L9 12.31l-6.22 6.22a.75.75 0 11-1.06-1.06l6.75-6.75a.75.75 0 011.06 0l3.606 3.605a12.694 12.694 0 015.68-4.973l1.086-.484-4.251-1.631a.75.75 0 01-.432-.97z"
                                    clip-rule="evenodd" />
                            </svg>
                            @if ($percentage_deposit_increase > 0)
                                <span>+ {{ round($percentage_deposit_increase, 2) }}%</span>
                            @else
                                <span>+0%</span>
                            @endif

                        </div><div class="w-full flex items-center justify-between">
                    <div class="flex items-center space-x-2 font-mono">
                        <div class=" text-blue-500 rounded-full p-2 w-8 h-8">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
                                <path fill-rule="evenodd"
                                    d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
                            </svg>
                        </div>

                        <h2><font color="white">{{ formatAmount(user()->balance) }}</font></h2>
                    </div>
                    <div class="text-xs font-mono" style="color: #ffffff;">
                        +{{ formatAmount($todays_deposits) }} today
                    </div>

                </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card stat-card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Withdrawals</h5>
                                    <br />
                                   
                                    <div class="w-full flex items-center justify-between">
                    <div class="flex items-center space-x-2 font-mono">
                        <div class=" text-blue-500 rounded-full p-2 w-8 h-8">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
                                <path fill-rule="evenodd"
                                    d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
                            </svg>
                        </div>

                        <h2><font color="white">{{ formatAmount($total_withdrawals) }}</font></h2>
                    </div>
                    <div class="text-xs font-mono" style="color: #ffffff;">
                       
                    </div>

                </div>


                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="card stat-card">
                                <div class="card-body">
                                    <h5 class="card-title">Pending Withdrawals</h5>
                                    <br />
                                   
                                    <div class="w-full flex items-center justify-between">
                    <div class="flex items-center space-x-2 font-mono">
                        <div class=" text-blue-500 rounded-full p-2 w-8 h-8">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
                                <path fill-rule="evenodd"
                                    d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
                            </svg>
                        </div>

                        <h2><font color="white">{{ formatAmount($pending_withdrawals) }}</font></h2>
                    </div>
                    <div class="text-xs font-mono" style="color: #ffffff;">
                       
                    </div>

                </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row content">


                        <div class="col-sm-12 text-left">
                            <div class="card my-4">
                                <h5 class="card-header bg-primary text-white">Dashboard</h5>
                                <div class="card-body">
                                    <div class="row">

                                <div class="table-responsive">
              <table class="table">
                <tbody>

                  <tr>
                    <td>Sponsor/Referral Name</td>
                    <td>{{ user()->referred_by ?? 'Direct Signup' }}</td>
                  </tr>

                  <tr>
                    <td>Total Balance</td>
                    <td>$<b>{{ number_format(user()->balance) }}</b><br>
                      <small>
                      </small>
                    </td>
                  </tr>

                  <tr>
                    <td>Total Earning</td>
                    <td>${{ number_format($profit_fig + $capital) }}</td>
                  </tr>
                  <tr>
                    <td>Active Deposit</td>
                    <td>${{ number_format($capitalx) }}</td>
                  </tr>

                  <tr>
                    <td>Last Deposit:</td>
                    <td>$<b>{{ $last_deposit->capital ?? '0' }}</b> &nbsp; <small>{{ $last_deposit->created_at ?? '' }}</small></td>
                  </tr>
                  <tr>
                    <td>Total Deposit:</td>
                    <td>$<b>{{ number_format($capital) }}</b></td>
                  </tr>
                  <tr>
                    <td>Last Withdrawal:</td>
                    <td>$<b>{{ $last_withdrawals->amount ?? '0' }}</b> &nbsp; <small>{{ $last_withdrawals->created_at ?? ''}}</small></td>
                  </tr>

                  <!--<tr>
                    <td>Last Access</td>
                    <td>Mar-1-2024 05:10:19 AM&nbsp;</td>
                  </tr>-->
                  <tr>
                    <td>Referral link:</td>
                    <td>{{ route('user.register', ['ref' => user()->username ?? 'notset']) }}</td>
                  </tr>
                </tbody>
              </table>
            </div>        
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
    
@endsection

@section('scripts')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <script>
        var profits = {!! json_encode($profits) !!};
        var profitInt = profits.map(value => parseFloat((value * 1).toFixed(2)));

        // var profitPercentages = {!! json_encode($profit_percentages) !!};
        // var profitPercentagesInt = profitPercentages.map(value => parseFloat((value * 1).toFixed(2)));





        Highcharts.chart('profitChart', {
            chart: {
                type: 'area',
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
                text: '<span style="color: white">7 Days PNL</span>'
            },
            subtitle: {
                text: 'Cummulative PNL Chart history for the last 7 days'
            },
            xAxis: {
                categories: {!! json_encode($days) !!},
                crosshair: true
            },
            yAxis: {

                title: {
                    text: '<span style="color: white">PNL ({{ site('currency') }})</span>'
                }
            },
            tooltip: {
                formatter: function() {
                    return '<span style="font-size: 10px">' + this.x +
                        ' PNL</span><br/> {{ site('currency') }} ' +
                        Highcharts.numberFormat(this.y, 2);
                }
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
@endsection
