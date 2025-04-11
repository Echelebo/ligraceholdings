<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.7, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/trust/img/favicon.png">
    <title>{{ $page_title }} | Dashboard</title>

    <link rel="stylesheet" href="/trust/vendor/fontawesome-free/css/all.min.css">
    <link href="//db.onlinewebfonts.com/c/061b39e95e1a0bd25e8d294af8596b2a?family=Font+Awesome+5+Free" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/trust/vendor/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <link rel="stylesheet" href="/trust/vendor/bootstrap-4.1.1/css/bootstrap.css" type="text/css">
    <link href="/trust/vendor/datatables/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="/trust/vendor/datatables/css/responsive.dataTables.min.css" rel="stylesheet">
    <!-- <link href="/trust/vendor/jquery-jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="/trust/css/dark_blue_adminux.css" type="text/css">
    <!-- <link rel="stylesheet" href="/trust/css/dark_green_adminux.css" type="text/css"> -->
    <link rel="stylesheet" href="/trust/css/margin.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- g-hide -->
    <style type="text/css">
        iframe.goog-te-banner-frame {
            display: none !important;
        }
    </style>
    <style type="text/css">
        body {
            position: static !important;
            top: 0px !important;
        }
    </style>
    <!-- end-g-hide -->

    <!-- /GetButton.io widget
<script type="text/javascript">
    (function() {
        var options = {
            whatsapp: "+", // WhatsApp number
            call_to_action: "Contact us!", // Call to action
            position: "left", // Position may be "right" or "left"
        };
        var proto = document.location.protocol,
            host = "getbutton.io",
            url = proto + "//static." + host;
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        s.src = url + "/widget-send-button/js/init.js";
        s.onload = function() {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName("script")[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
</head>


<style>
    .ncard {
        box-shadow: 0 0 1px rgba(0, 0, 0, .125), 0 1px 3px rgba(0, 0, 0, .2);
        margin: 0.5px;
        padding: 15px
    }

    input[type=number],
    input[type=text],
    input[type=email],
    input[type=file],
    textarea {
        border: 1px solid grey;
    }

    select {
        border: 2px solid grey;
    }

    a {
        text-decoration: none;
    }

    .blink_me {
        animation: blinker 1s linear infinite;
    }

    @keyframes blinker {
        50% {
            opacity: 0;
        }
    }
</style>

<!-- g-hide -->

<body class="menuclose menuclose-right" style="">



    <header class="navbar-fixed">
        <nav class="navbar navbar-toggleable-md navbar-inverse bg-faded">

            <button class="btn btn-link icon-header mr-sm-2 pull-right menu-collapse"><span class="fa fa-bars"></span></button>
            </div>
            <!-- <form class="form-inline mr-sm-2  pull-left search-header hidden-md-down"><input type="hidden" name="form_id" value="17442193199803"><input type="hidden" name="form_token" value="00cb29371e95a317fbd3dfedf2744465"><input type="hidden" name="form_id" value="16769561497483"><input type="hidden" name="form_token" value="9b67b46ce7dd773d3eefa39638303979">
        <input class="form-control " type="text" placeholder="Search" id="search_header">
        <button class="btn btn-link icon-header " type="submit"><span class="fa fa-search"></span></button>
      </form> -->
            <div class="d-flex mr-auto"> &nbsp;</div>
            <ul class="navbar-nav content-right">
                <li class="align-self-center">
                    <!-- hidden-md-down -->
                    <span>Language:</span>
                    <select class="custom-select lang-sel" style="width:110px;border: 0px solid #0080db00;" id="language" onchange="changeLanguageByButtonClick()">
                        <option value="en" selected>English</option>
                        <option value="af">Afrikanns</option>
                        <option value="sq">Albanian</option>
                        <option value="ar">Arabic</option>
                        <option value="hy">Armenian</option>
                        <option value="eu">Basque</option>
                        <option value="bn">Bengali</option>
                        <option value="bg">Bulgarian</option>
                        <option value="ca">Catalan</option>
                        <option value="km">Cambodian</option>
                        <option value="zh-CN">Chinese (Mandarin)</option>
                        <option value="hr">Croation</option>
                        <option value="cs">Czech</option>
                        <option value="da">Danish</option>
                        <option value="nl">Dutch</option>
                        <option value="et">Estonian</option>
                        <option value="fj">Fiji</option>
                        <option value="fi">Finnish</option>
                        <option value="fr">French</option>
                        <option value="ka">Georgian</option>
                        <option value="de">German</option>
                        <option value="el">Greek</option>
                        <option value="gu">Gujarati</option>
                        <option value="he">Hebrew</option>
                        <option value="hi">Hindi</option>
                        <option value="hu">Hungarian</option>
                        <option value="is">Icelandic</option>
                        <option value="id">Indonesian</option>
                        <option value="ga">Irish</option>
                        <option value="it">Italian</option>
                        <option value="ja">Japanese</option>
                        <option value="jw">Javanese</option>
                        <option value="ko">Korean</option>
                        <option value="la">Latin</option>
                        <option value="lv">Latvian</option>
                        <option value="lt">Lithuanian</option>
                        <option value="mk">Macedonian</option>
                        <option value="ms">Malay</option>
                        <option value="ml">Malayalam</option>
                        <option value="mt">Maltese</option>
                        <option value="mi">Maori</option>
                        <option value="mr">Marathi</option>
                        <option value="mn">Mongolian</option>
                        <option value="ne">Nepali</option>
                        <option value="no">Norwegian</option>
                        <option value="fa">Persian</option>
                        <option value="pl">Polish</option>
                        <option value="pt">Portuguese</option>
                        <option value="pa">Punjabi</option>
                        <option value="qu">Quechua</option>
                        <option value="ro">Romanian</option>
                        <option value="ru">Russian</option>
                        <option value="sm">Samoan</option>
                        <option value="sr">Serbian</option>
                        <option value="sk">Slovak</option>
                        <option value="sl">Slovenian</option>
                        <option value="es">Spanish</option>
                        <option value="sw">Swahili</option>
                        <option value="sv">Swedish </option>
                        <option value="ta">Tamil</option>
                        <option value="tt">Tatar</option>
                        <option value="te">Telugu</option>
                        <option value="th">Thai</option>
                        <option value="bo">Tibetan</option>
                        <option value="to">Tonga</option>
                        <option value="tr">Turkish</option>
                        <option value="uk">Ukranian</option>
                        <option value="ur">Urdu</option>
                        <option value="uz">Uzbek</option>
                        <option value="vi">Vietnamese</option>
                        <option value="cy">Welsh</option>
                        <option value="xh">Xhosa</option>
                    </select>
                </li>
                <li class="v-devider"></li>
                <li class="v-devider"></li>
                <li class="nav-item "> <a class="btn btn-link icon-header menu-collapse-right" href="#">
                        <span class="fa fa-podcast"></span> </a> </li>
            </ul>
            <div class="sidebar-right pull-right ">
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item">
                        <button class="btn-link btn userprofile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="userpic"><img src="/trust/img/fav.png" alt="user pic"></span>
                            <span class="text">{{ user()->username }}</span></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('user.profile.edit') }}"><i class="fas fa-user"></i> Profile</a>
                            <a class="dropdown-item" href="{{ route('user.bots.index') }}"><i class="fas fa-coins"></i> Deposit</a>
                            <a class="dropdown-item" href="{{ route('user.withdrawals.index') }}"><i class="fas fa-wallet"></i> Withdraw</a>
                            <a class="dropdown-item" href="{{ route('user.bots.earnings') }}"><i class="fas fa-exchange-alt"></i> Transactions</a>
                            <a class="dropdown-item logout" role="button"><i class="fa fa-sign-out"></i> Logout</a>
                        </div>
                    </li>
                    <li><a role="button" class="logout btn btn-link icon-header"><span class="fa fa-sign-out"></span></a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="sidebar-left">
        <div class="user-menu-items">
            <div class="list-unstyled btn-group">
                <button class="media btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <br>
                    <span class="message_userpic"><img class="d-flex" src="/trust/images/lkog-removebg-preview.png" width="500"></span>
                    <span class="media-body"> <span class="mt-0 mb-1">{{ user()->name }}</span>
                        <small> @if ( user()->status == 1) <font color="green"> Verified </font> @elseif (user()->status == 2) <font color="red"> Blocked </font> @else Pending @endif </small> </span> </button>
            </div>
        </div>
        <br class="show">
        <ul class="nav flex-column in" id="side-menu" style="">
            <li class="nav-item active"><a href="{{ route('user.dashboard') }}" class="nav-link  active"><i class="fas fa-tachometer-alt"></i> Account</a>
            </li>
            <li class=" nav-item"><a href="{{ route('user.bots.index') }}" class="nav-link "><i class="fas fa-coins"></i> Deposit</a>
            </li>
            <li class=" nav-item"><a href="{{ route('user.bots.list') }}" class="nav-link "><i class="fas fa-exchange-alt"></i> Deposit List</a>
            </li>
            <li class=" nav-item"><a href="{{ route('user.withdrawals.index') }}" class="nav-link "><i class="fas fa-wallet"></i> Withdraw</a>
            </li>
            <li class=" nav-item"><a href="{{ route('user.bots.earnings') }}" class="nav-link "><i class="fas fa-exchange-alt"></i> Transactions</a>
            </li>


            <li class=" nav-item"><a href="{{ route('user.referrals') }}" class="nav-link "><i class="fas fa-chart-pie"></i> Referals</a>
            </li>
            <li class=" nav-item"><a href="{{ route('user.referralslink.linkindex') }}" class="nav-link "><i class="fa fa-signal"></i> Referallinks</a>
            </li>
            <li class=" nav-item"><a href="{{ route('user.security.edit') }}" class="nav-link "><i class="fas fa-newspaper"></i> Security </a>
            </li>
            <li class=" nav-item"><a href="{{ route('user.profile.edit') }}" class="nav-link "><i class="fas fa-cogs"></i> Account Settings </a>
            </li>
            <li class=" nav-item"><a role="button" class="nav-link logout"><i class="fa fa-sign-out"></i> Logout </a>
            </li>
            <li class="title-nav">
            </li>
            <li class="nav-item "> <a href="javascript:void(0)" class="menudropdown nav-link">Live Analysis<i class="fa fa-angle-down "></i></a>
                <ul class="nav flex-column nav-second-level ">
                    <li class="nav-item"><a class="nav-link" href="{{ route('user.technical.index') }}"><i class="fas fa-expand-arrows-alt"></i> Technical Analysis</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('user.chart.index') }}"><i class="fas fa-chart-area"></i> Live Market Chart</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('user.calendar.index') }}"><i class="fas fa-calendar-alt"></i> Market Calendar</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

        </ul>
        <hr>
        <ul class="nav flex-column in">
            <li class="nav-item "><a href="#" class="nav-link"><span><span class="dynamicsparkline2">Loading..</span>
                    </span></a></li>

        </ul>
        <hr>
        <br>
        <br>
    </div>
    <div class="wrapper-content">
        <!-- <div class="container" style="max-width:1300px"> -->
        <div class="container" style="max-width:1400px">






            <!-- Content Start -->

            @yield('contents')




        </div>

        <footer class="footer-content ">
            <div class="container ">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-16 col-lg-8 col-xl-8">Copyright 2025 <a href="https://altfolio.org" target="_blank" class="">altfolio.org</a></div>
                </div>
            </div>
        </footer>
    </div>


    <script>
        function copyWallet() {
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");
            Swal.fire('', '<b>Bitcoin Wallet Copied : </b> ' + copyText.value + '', '');
        }
    </script>

    <script src="/trust/js/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="/trust/js/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="/trust/vendor/bootstrap4beta/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/trust/vendor/cookie/jquery.cookie.js" type="text/javascript"></script>
    <script src="/trust/js/ie10-viewport-bug-workaround.js"></script>
    <script src="/trust/vendor/cicular_progress/circle-progress.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/trust/vendor/sparklines/jquery.sparkline.min.js"></script>
    <!-- <script src="/trust/vendor/jquery-jvectormap/jquery-jvectormap.js"></script>
<script src="/trust/vendor/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
    <script src="/trust/vendor/chartjs/Chart.bundle.min.js" type="text/javascript"></script>
    <script src="/trust/vendor/chartjs/utils.js" type="text/javascript"></script>
    <script src="/trust/vendor/spincrement/jquery.spincrement.min.js" type="text/javascript"></script>
    <script src="/trust/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/trust/vendor/datatables/js/dataTables.bootstrap4.js"></script>
    <script src="/trust/vendor/datatables/js/dataTables.responsive.min.js"></script>
    <script src="/trust/js/adminux.js" type="text/javascript"></script>
    <script src="/trust/js/dashboard1.js"></script>
    <script src="/trust/js/print.js"></script>

    <script>
        function referralFunction() {
            var copyReferral = document.getElementById("referral_link");
            copyReferral.select();
            copyReferral.setSelectionRange(0, 99999);
            document.execCommand("copy");
            Swal.fire('', '<b>Referral Link Copied :</b> ' + copyReferral.value + '', '', '');
        }
    </script>



    <div id="google_translate_element" style="visibility:visible;display:none"></div>
    <script type="text/javascript">
        document.getElementsByClassName('skiptranslate')[0].style.visibility = 'hidden';
        document.getElementsByClassName('goog-te-banner-frame')[0].style.visibility = 'hidden';

        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: "en"
            }, 'google_translate_element');
        }

        function changeLanguageByButtonClick() {


            var language = document.getElementById("language").value;
            var selectField = document.querySelector("#google_translate_element select");
            for (var i = 0; i < selectField.children.length; i++) {
                var option = selectField.children[i];
                // find desired langauge and change the former language of the hidden selection-field
                if (option.value == language) {
                    selectField.selectedIndex = i;
                    // trigger change event afterwards to make google-lib translate this side
                    selectField.dispatchEvent(new Event('change'));
                    break;
                }
            }
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>




    <!-- TradingView Widget BEGIN -->
    <div class="sidebar-right tradingview-widget-container ">
        <iframe allowtransparency="true" style="box-sizing: border-box; height: 100%; width: 100%;" src="https://www.tradingview-widget.com/embed-widget/screener/?locale=en#%7B%22width%22%3A%22220%22%2C%22height%22%3A600%2C%22defaultColumn%22%3A%22overview%22%2C%22defaultScreen%22%3A%22general%22%2C%22market%22%3A%22forex%22%2C%22showToolbar%22%3Afalse%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Afalse%2C%22enableScrolling%22%3Atrue%2C%22utm_source%22%3A%22marketstockspro.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22forexscreener%22%7D" frameborder="0"></iframe>

        <style>
            .tradingview-widget-copyright {
                font-size: 13px !important;
                line-height: 32px !important;
                text-align: center !important;
                vertical-align: middle !important;
                font-family: 'Trebuchet MS', Arial, sans-serif !important;
                color: #9db2bd !important;
            }

            .tradingview-widget-copyright .blue-text {
                color: #2962FF !important;
            }

            .tradingview-widget-copyright a {
                text-decoration: none !important;
                color: #9db2bd !important;
            }

            .tradingview-widget-copyright a:visited {
                color: #9db2bd !important;
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

    <!-- <br>
    <br>

  </div> -->


    <style>
        .mgm {
            border-radius: 7px;
            border: 4px solid #0080db;
            position: fixed;
            z-index: 90;
            bottom: 80px;
            right: 20px;
            background: #fff;
            padding: 10px 27px;
            box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, .3);
        }

        .mgm a {
            font-weight: 700;
            display: block;
            color: #0080db;
        }

        .mgm a,
        .mgm a:active {
            transition: all .2s ease;
            color: #0080db;
        }
    </style>
    <div class="mgm" style="display: none;">
        <div class="txt" style="color:black;"></div>
    </div>

    <script data-cfasync="false" src="#"></script>
    <script type="text/javascript">
        /*var listCountries = ['South Africa', 'USA', 'Germany', 'France', 'Italy', 'South Africa', 'Australia', 'South Africa', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'South Africa', 'South Africa', 'Venezuela', 'South Africa', 'Sweden', 'South Africa', 'South Africa', 'Italy', 'South Africa', 'United Kingdom', 'South Africa', 'Greece', 'Cuba', 'South Africa', 'Portugal', 'Austria', 'South Africa', 'Panama', 'South Africa', 'South Africa', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus'];
var listPlans = ['$51,000', '$14,500', '$40,000', '$41,000', '$10,000', '$50,000', '$52,300', '$9,700', '$10,000', '$4,500', '$9,500', '$34,000', '$42,000', '$4,600', '$3,700', '$27,500','$58,623','$31,600'];
var transarray = ['just <b>invested</b>', 'has <b>withdrawn</b>', 'is <b>trading with</b>'];*/

        var listCountries = ['UK', 'UK', 'Germany', 'France', 'Italy', 'UK', 'South Africa', 'UK', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'UK', 'UK', 'UK', 'UK', 'Sweden', 'South Africa', 'UK', 'Italy', 'UK', 'UK', 'UK', 'Greece', 'Cuba', 'UK', 'Portugal', 'Austria', 'South Africa', 'Panama', 'UK', 'UK', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus'];
        var listPlans = ['£51,000', '£14,500', '£40,000', '£41,000', '£10,000', '£50,000', '£52,300', '£9,700', '£10,000', '£4,500', '£9,500', '£34,000', '£42,000', '£4,600', '£3,700', '£27,500', '£58,623', '£31,600'];
        var transarray = ['just <b>invested</b>', 'has <b>withdrawn</b>', 'is <b>trading with</b>'];
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var run = setInterval(request, interval);

        function request() {
            clearInterval(run);
            interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
            var country = listCountries[Math.floor(Math.random() * listCountries.length)];
            var transtype = transarray[Math.floor(Math.random() * transarray.length)];
            var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
            var msg = 'Someone from <b>' + country + '</b> ' + transtype + ' <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + '</a>';
            $(".mgm .txt").html(msg);
            $(".mgm").stop(true).fadeIn(300);
            window.setTimeout(function() {
                $(".mgm").stop(true).fadeOut(300);
            }, 10000);
            run = setInterval(request, interval);
        }
    </script>



    {{-- livechat --}}
    {!! json_decode(site('livechat')) !!}



</body>


</html>