@php
use App\Models\Bot;

$bots = Bot::get();

$page_title = 'Home';

@endphp

@extends('layouts.front')


@section('contents')

<main>



    <div id="particles-js"><canvas class="particles-js-canvas-el" width="1267" height="900" style="width: 100%; height: 100%;"></canvas></div>
    <div class="inner-slider" id="slider-carousel">
        <div class="exp animate__animated animate__fadeInUp" style="display: none;">
            <h1>Think Higher<span class="yellow-color"></span> <br></h1>
            <p>altsfolio.org was founded to provide an alternative to the volatile investment market for people.</p>
            <div class="mt-3">
                <a class="btn text-white mr-3" style="background-color: #0080db" href="/register">REGISTER</a>
                <a class="btn btn-light" href="/login">LOGIN</a>
            </div>
        </div>
        <div class="exp animate__animated animate__fadeInUp" style="display: block;">
            <h1>Step Financial <span class="yellow-color">Freedom</span></h1>
            <p> altsfolio.org was built to help you be a more confident investor and set you on
                the path to secure your financial future</p>
            <div class="mt-3">
                <a class="btn  text-white mr-3" style="background-color: #0080db" href="/register">REGISTER</a>
                <a class="btn btn-light" href="/login">LOGIN</a>
            </div>
        </div>
        <div class="exp animate__animated animate__fadeInUp" style="display: none;">
            <h1>MOST <span class="yellow-color">SECURE</span> <br>CRYPTO CURRENCY</h1>
            <p>Bitcoin is a fully decentralized crypto currency that ensures transparency with the block chain
                technology.
            </p>
            <div class="mt-3">
                <a class="btn text-white mr-3" style="background-color: #0080db" href="/register">REGISTER</a>
                <a class="btn btn-light" href="/login">LOGIN</a>
            </div>
        </div>
    </div>
    <!-- MARQUEE SCROLL -->
    <div style="background-color: #0080db">
        <div class="simple-marquee-container">

            <div class="marquee-1" style="left: 1774.6px;">
                <ul class="marquee-content-items">
                    <li><span>BTC: </span><span id="usd">$ 82529.4</span></li>
                    <li><span>BTC: </span><span id="cny">¥ 38800</span></li>
                    <li><span>BTC: </span><span id="eur">€ 74887.13</span></li>
                </ul>
            </div>
            <div class="marquee-2" style="left: 1774.6px;">
                <ul class="marquee-content-items">
                    <li><span>BTC: </span><span id="usd">$ 82529.4</span></li>
                    <li><span>BTC: </span><span id="cny">¥ 38800</span></li>
                    <li><span>BTC: </span><span id="eur">€ 74887.13</span></li>
                </ul>
            </div>
            <div class="marquee-3" style="left: 202.556px;">
                <ul class="marquee-content-items">
                    <li><span>BTC: </span><span id="usd">$ 82529.4</span></li>
                    <li><span>BTC: </span><span id="cny">¥ 38800</span></li>
                    <li><span>BTC: </span><span id="eur">€ 74887.13</span></li>
                </ul>
            </div>
            <div class="marquee-4" style="left: 202.556px;">
                <ul class="marquee-content-items">
                    <li><span>BTC: </span><span id="usd">$ 82529.4</span></li>
                    <li><span>BTC: </span><span id="cny">¥ 38800</span></li>
                    <li><span>BTC: </span><span id="eur">€ 74887.13</span></li>
                </ul>
            </div>
            <div class="marquee-5" style="left: 202.556px;">
                <ul class="marquee-content-items">
                    <li><span>BTC: </span><span id="usd">$ 82529.4</span></li>
                    <li><span>BTC: </span><span id="cny">¥ 38800</span></li>
                    <li><span>BTC: </span><span id="eur">€ 74887.13</span></li>
                </ul>
            </div>
            <div class="marquee-6" style="left: 1114.78px;">
                <ul class="marquee-content-items">
                    <li><span>BTC: </span><span id="usd">$ 82529.4</span></li>
                    <li><span>BTC: </span><span id="cny">¥ 38800</span></li>
                    <li><span>BTC: </span><span id="eur">€ 74887.13</span></li>
                </ul>
            </div>
            <div class="marquee-7" style="left: 1114.78px;">
                <ul class="marquee-content-items">
                    <li><span>BTC: </span><span id="usd">$ 82529.4</span></li>
                    <li><span>BTC: </span><span id="cny">¥ 38800</span></li>
                    <li><span>BTC: </span><span id="eur">€ 74887.13</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- MARQUEE SCROLL SECTION  END -->
    <section class="own_trending_area mt-3">
        <div class="container">
            <div class="main_title" style="margin: 35px 0 0 0;">
                <h3>ABOUT US</h3>
            </div>
            <div class="row mb-3">
                <div class="col-lg-6">
                    <div class="trending_list">
                        <div class="media">
                            <div class="d-flex">

                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4 class="my-3">We aim to provide expert advice and quality investment
                                        ideas.
                                    </h4>
                                </a>
                                <p class="my-3">Our traders and investment managers have extensive knowledge in stocks and crypto trading, and with the help of artificial intelligence and robotic trading we achieve unprecedented success in trading stock and crypto in the financial markets. Our company has direct contracts with professional traders and miners around the world that guarantees the best services and ensures profits are made and remitted to investors daily. We work on the principle that cryptocurrencies is changing the fundamental structure of not only our economy and banking systems but also the way we connect and engage a humans.</p>
                                <div class="my-3">
                                    <a class="btn text-white" style="background-color: #0080db" href="/about">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="trending_img">
                        <img class="img-fluid" src="/trust/img/PF.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="howorks">
        <div class="bg-feature work-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading m-auto text-center ">
                            <h2 class="f-xbold text-white">How it Works</h2>
                            <hr class="seperator">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="work-wrap ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 m-auto">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="work-inner-box">
                                    <div class="icon-box work-icon icon-lg">
                                        <i class="fas fa-hand-holding-usd text-white mb-3" style="font-size: 40px"></i>
                                    </div>
                                    <h4>Guaranteed Returns </h4>
                                    <p>Earn up to 10% daily returns on investment (ROI) automatically deposited
                                        into your
                                        account every 24 hours.</p>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="work-inner-box">
                                    <div class="icon-box work-icon icon-lg">
                                        <i class="fas fa-chart-line text-white mb-3" style="font-size: 40px"></i>
                                    </div>
                                    <h4>Asset Management</h4>
                                    <p>Working with seasoned high-value asset management, cryptocurrency and
                                        Blockchain
                                        professionals does make all of the difference.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="work-inner-box">
                                    <div class="icon-box work-icon icon-lg">
                                        <i class="fas fa-tasks text-white mb-3" style="font-size: 40px"></i>
                                    </div>
                                    <h4>Manage your portfolio</h4>
                                    <p>Incase you have a more conservative investment profile and do not want to
                                        be with all
                                        your capital in Bitcoin.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <center>
        <div class="amk_video">
            <iframe width="300" height="200" src="https://www.youtube.com/embed/qbnBU9Kezgs?si=T8-Ki9eVRdXsxV6A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
        </div>
    </center>



    <!--================Choose Bitcoin Area =================-->
    <section class="choose_bitcoin_area p_100">
        <div class="container">
            <div class="main_title">
                <h2>Services</h2>
            </div>
            <div class="row choose_bit_inner">
                <div class="col-lg-4 col-md-6">
                    <div class="choose_botcoin_item">
                        <img src="/trust/img/service1.jpg">

                        <a href="#">
                            <h4>Crypto Currency</h4>
                        </a>
                        <p>A cryptocurrency, crypto currency or crypto is a digital asset designed to work as a
                            medium of
                            exchange wherein individual coin ownership</p>
                        <a href="/cryptocurrency">learn more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="choose_botcoin_item">
                        <img src="/trust/img/service2.jpg">

                        <a href="#">
                            <h4>Stock &amp; Forex</h4>
                        </a>
                        <p>The foreign exchange market is a global decentralized or over-the-counter market for
                            the trading
                            of currencies. </p>
                        <a href="/stock">learn more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="choose_botcoin_item">
                        <img src="/trust/img/service3.jpg">

                        <a href="#">
                            <h4>Real estate </h4>
                        </a>
                        <p>Real estate is property consisting of land and the buildings on it, along with its
                            natural
                            resources such as crops, minerals or water; </p>
                        <a href="/realestate">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Choose Bitcoin Area =================-->

    <!-- MARQUEE SCROLL SECTION  END -->
    <section class="own_trending_area mt-3">
        <div class="container">
            <div class="main_title">
                <h2>MINING</h2>
            </div>
            <div class="row mb-3">
                <div class="col-lg-6">
                    <div class="trending_img">
                        <img class="img-fluid" src="/trust/img/kmd.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="trending_list">
                        <div class="media">
                            <div class="d-flex">

                            </div>
                            <div class="media-body">
                                <a href="#.">
                                    <h4 class="my-3">WHAT’S THE INCENTIVE FOR MINERS?
                                    </h4>
                                </a>
                                <p class="my-3">
                                    It all comes down to trust: Miners keep the blockchains trustworthy and are rewarded for their efforts.
                                </p>
                                <p class="my-3">As miners, we are processing and verifying the transactions of the
                                    cryptocurrency ecosystems and keeping their public transaction history (Blockchains)
                                    maintained and secure. For this, the mining community is rewarded with the networks’
                                    transaction fees and newly created coins. It’s a win-win situation! When you start mining
                                    with us, you are getting your share of this reward.</p>
                                <hr>
                                <!-- <br> -->
                                <!-- <div class="my-3">
                                        <a class="btn text-white" style="background-color: #0080db"
                                            href="?a=about">Learn More</a>
                                    </div> -->
                                <!-- </div>
                                <div class="media-body"> -->
                                <a href="#.">
                                    <h4 class="my-3">HOW IS BITCOIN KEPT SECURE?
                                    </h4>
                                </a>
                                <p class="my-3">
                                    The only way to not create money out of thin air or corrupt it, is to burn real energy.This is called Proof-Of-Work.
                                </p>
                                <p class="my-3">
                                    Today, bitcoin is the most secure computer network on the planet and it’s practically impossible to break it!
                                    The reason for that is hash power, the umbrella term used for the computing power that miners provide to the
                                    bitcoin network and similar cryptocurrency networks. Due to the rapid growth of the ecosystem, mining operations
                                    today are mostly running with specialized high-performance computers that function most
                                    efficiently set up in large data centers.
                                </p>
                                <!-- <div class="my-3">
                                        <a class="btn text-white" style="background-color: #0080db"
                                            href="?a=about">Learn More</a>
                                    </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--================Why Gain Bitcoin Area =================-->
    <div class="section-full p-t50 p-b50 overlay-wraper bg-parallax clouds1 bg-repeat" id="stellarTest" data-stellar-background-ratio="0.5" style="background-image: url(trust/img/bg-9.jpg)">
        <div class="overlay-main bg-secondry opacity-05"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="rocket-pic">
                        <div class="rocket-animation ">
                            <img alt="" class="floating">
                            <div class="rocket-fire"> <img alt="" class="floating"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6">
                    <div class="awesome-counter text-right text-white">
                        <h3 class="font-24">The Cryptocurrency</h3>
                        <h2 class="font-60 font-weight-600 my-3"><span style="color: #0080db;font-size:50px;">
                                AWESOME
                                FACTS</span></h2>
                        <p>A unique online platform modified to automatically receive investment and update
                            provide daily
                            profits.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Why Gain Bitcoin Area =================-->
    <section class="pricing-tables content-area">
        <div class="container">
            <!-- Main title -->
            <div class="main-title text-center" style="margin: 35px 0;">
                <h1>INVESTMENT PLANS</h1>
            </div>
            <div class="row">

                @foreach ($bots as $bot)
                <div class="col-sm-12 col-lg-3 col-md-4">
                    <div class="pricing">
                        <div class="price-header">
                            <div class="title">{{ $bot->name }}</div>
                            <h1 class="price">{{ $bot->daily_min }}%</h1>
                            <div class="text-white">{{ $bot->duration }} {{ $bot->duration_type }}</div>
                        </div>
                        <div class="content">
                            <ul>
                                <li>Minimum Deposit - ${{ number_format($bot->min) }}</li>
                                <li>Maximum Deposit - @if($bot->max >= 100000000) UNLIMITED @else ${{ number_format($bot->max) }}@endif</li>
                                <li>Enhanced Security</li>
                                <li>24/7 Support</li>
                                <li>Direct Referral: Yes</li>
                                <li>Binary Referral: Yes</li>
                            </ul>
                            <div class="button"><a href="/register" class="btn btn-outline pricing-btn">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach











                <!--<div class="col-sm-12 col-lg-3 col-md-4">
                        <div class="pricing">
                            <div class="price-header">
                                <div class="title">DIAMOND PLAN</div>
                                <h1 class="price">150%</h1>
                                <div class="text-white">Monthly</div>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>Minimum Deposit - $100,000</li>
                                    <li>Maximum Deposit - unlimited</li>
                                    <li>Enhanced Security</li>
                                    <li>24/7 Support</li>
                                    <li>Referral Bonus: 20%</li>
                                </ul>
                                <div class="button"><a href="/register" class="btn btn-outline pricing-btn">Get
                                        Started</a>
                                </div>
                            </div>
                        </div>
                    </div>-->


            </div>
        </div>
    </section>





    <section id="counter-wrap">
        <div class="container">
            <div class="row">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" style="width: 100%; height: 430px;">
                    <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/forex-heat-map/?locale=en#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A430%2C%22currencies%22%3A%5B%22EUR%22%2C%22USD%22%2C%22JPY%22%2C%22GBP%22%2C%22CHF%22%2C%22AUD%22%2C%22CAD%22%2C%22NZD%22%2C%22CNY%22%5D%2C%22isTransparent%22%3Afalse%2C%22colorTheme%22%3A%22dark%22%2C%22utm_source%22%3A%22altsfolio.org%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22forex-heat-map%22%2C%22page-uri%22%3A%22altsfolio.org%2F%22%7D" title="forex heat-map TradingView widget" lang="en" style="user-select: none; box-sizing: border-box; display: block; height: 100%; width: 100%;"></iframe>
                    <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/forex-heat-map/" rel="noopener" target="_blank"><span class="blue-text">Forex Heat Map</span></a> by TradingView</div> -->




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
            </div>
        </div>
    </section>




    <!--================Bitcoin About Area =================-->
    <section class="bitcoin_about_area p_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="btcwdgt-chart" bw-cash="true" bw-noshadow="true"></div>
                </div>
                <div class="col-lg-6">
                    <div class="bit_about_text">
                        <div class="left_title">
                            <h3>WE MAKE CRYPTO INVESTMENT SIMPLE</h3>
                            <p>To mine Bitcoin, you need the latest mining hardware, special software, and
                                access to a
                                public mining pool. Then, once you get started, you’ll need to upgrade your
                                equipment to
                                stay competitive. It’s not easy to get started or stay up-to-date.</p>
                        </div>
                        <div class="mt-3">
                            <a class="btn text-white" style="background-color: #0080db" href="/about">Learn
                                More</a>
                            <a class="btn btn-dark" href="/register">Join Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Bitcoin About Area =================-->


    <!--================Counter Area Area =================-->
    <section id="counter-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="single-project-complete">
                        <i class="fa fa-credit-card font-26 m-l15"></i>
                        <h3>TOTAL DEPOSIT </h3>
                        <h2 class="counter-num">52m+
                            <!--$18850.00-->
                        </h2>

                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="single-project-complete">
                        <i class="fa fa-users font-26 m-l15"></i>
                        <h3>HAPPY CLIENTS </h3>
                        <h2 class="counter-num">4k+
                            <!--8+-->
                        </h2>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="single-project-complete">
                        <i class="fa fa-money font-26 m-l15"></i>
                        <h3>TOTAL WITHDRAW </h3>
                        <h2 class="counter-num">187m+
                            <!--$9814.00-->
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Counter Area Area =================-->



    <!--================Trending Area Area =================-->
    <section class="own_trending_area p_100">
        <div class="container">
            <div class="main_title">

            </div>
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-striped">
                        <thead style="background:#0080db;  color:#ffffff;">
                            <tr>
                                <th scope="col">Latest Deposits</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table table-striped">
                        <thead style="background:#121212;  color:#ffffff;">
                            <tr>
                                <th scope="col">Latest Withdrawals</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <div class="table-responsive" style="height:400px; overflow-y:auto; overflow-x:auto;">
        <marquee direction="down" height="100%">
            <table class="table" style="width: 100%;">
                <thead>
                    <tr>
                        <th class="text-center">Status</th>
                        <th class="text-center">Amount(USD)</th>
                        <th class="text-center">Wallet</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$10,000.00</td>
                        <td class="text-center"> 3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning"></i></span>Pending</button>
                        </td>
                        <td class="text-center">$51,000.00</td>
                        <td class="text-center"> 8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2 </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$24,100.00</td>
                        <td class="text-center"> f007e92cc9f82ba9c8c40c481eec7315fa9abcd85e7249a6cb57e38a2cf22d3e </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$4,000.00</td>
                        <td class="text-center"> 8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2 </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$500</td>
                        <td class="text-center"> 00db85ef40da34f3ea76aa60f0b2053eec2d90121e450791c18d8edbfedde6f1 </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$240,000</td>
                        <td class="text-center"> b21a418a44ed8b56118facefe7aa8d26541dff811b8a8ca65cfa1346d62c5c48 </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$17,000</td>
                        <td class="text-center"> 1e652d2899a1d058a20041a9faaeb5dc009101ca412ff09c387e6b281bd1db8b </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning"></i></span>Pending</button>
                        </td>
                        <td class="text-center">$51,000</td>
                        <td class="text-center"> 6a49e66a66f75e72e6bd383ac798792af204a6693708912ad0d48e363a2ab7a7 </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$21,000</td>
                        <td class="text-center"> 8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2 </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning"></i></span>Pending</button>
                        </td>
                        <td class="text-center">$6,000</td>
                        <td class="text-center"> 797ba039291417fdbdb411ea0a102d23090cde9ac7799ff605f40b5db484891d </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$9,000</td>
                        <td class="text-center"> f0b66ce7a33bbc63bf50050beaf52be71709c359aa1d344bb90f943690485661 </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$23,000</td>
                        <td class="text-center"> 2083e95ada3c584471ba5982e16c5dc2a6e464d3c170555ea8c708668be9383b </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$51,000</td>
                        <td class="text-center"> 8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2 </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$5,000</td>
                        <td class="text-center"> 8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2 </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">5,000</td>
                        <td class="text-center"> 15c3a97edbd606bd1e455aa2875677f5c6cd2b804e9054e898f640d313e39781 </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning"></i></span>Pending</button>
                        </td>
                        <td class="text-center">$18,000</td>
                        <td class="text-center"> 66c13496e9d53a2402fd49bbe91df298164472679cc868bbfebbabb4844d784c </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$2,500</td>
                        <td class="text-center"> ce972a6b82135fcba0890ea0c8668bdddf782fd580672daa6616c3b1af40ca9f </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$9,000</td>
                        <td class="text-center"> 376e809b02e6ef044f6d5cf5b72111f25f3c3e16a93dce865a178e2e0f5c484c </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning"></i></span>Pending</button>
                        </td>
                        <td class="text-center">$43,000</td>
                        <td class="text-center"> aa14458f8082d9c4265ef491ca0b5d4801c16bbf7a4aece7b70a0b4824ffdfea </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$10,000.00</td>
                        <td class="text-center"> 3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning"></i></span>Pending</button>
                        </td>
                        <td class="text-center">$51,000.00</td>
                        <td class="text-center"> 8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2 </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$24,100.00</td>
                        <td class="text-center"> f007e92cc9f82ba9c8c40c481eec7315fa9abcd85e7249a6cb57e38a2cf22d3e </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$4,000.00</td>
                        <td class="text-center"> 8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2 </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$500</td>
                        <td class="text-center"> 00db85ef40da34f3ea76aa60f0b2053eec2d90121e450791c18d8edbfedde6f1 </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$240,000</td>
                        <td class="text-center"> b21a418a44ed8b56118facefe7aa8d26541dff811b8a8ca65cfa1346d62c5c48 </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$17,000</td>
                        <td class="text-center"> 1e652d2899a1d058a20041a9faaeb5dc009101ca412ff09c387e6b281bd1db8b </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning"></i></span>Pending</button>
                        </td>
                        <td class="text-center">$51,000</td>
                        <td class="text-center"> 6a49e66a66f75e72e6bd383ac798792af204a6693708912ad0d48e363a2ab7a7 </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$21,000</td>
                        <td class="text-center"> 8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2 </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn btn-success btn-sm"><span class="btn-label"><i class="fa fa-check"></i></span>confirmed</button>
                        </td>
                        <td class="text-center">$6,000</td>
                        <td class="text-center"> 797ba039291417fdbdb411ea0a102d23090cde9ac7799ff605f40b5db484891d </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$9,000</td>
                        <td class="text-center"> f0b66ce7a33bbc63bf50050beaf52be71709c359aa1d344bb90f943690485661 </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$23,000</td>
                        <td class="text-center"> 2083e95ada3c584471ba5982e16c5dc2a6e464d3c170555ea8c708668be9383b </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$51,000</td>
                        <td class="text-center"> 8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2 </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$5,000</td>
                        <td class="text-center"> 8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2 </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">5,000</td>
                        <td class="text-center"> 15c3a97edbd606bd1e455aa2875677f5c6cd2b804e9054e898f640d313e39781 </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning"></i></span>Pending</button>
                        </td>
                        <td class="text-center">$18,000</td>
                        <td class="text-center"> 66c13496e9d53a2402fd49bbe91df298164472679cc868bbfebbabb4844d784c </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$2,500</td>
                        <td class="text-center"> ce972a6b82135fcba0890ea0c8668bdddf782fd580672daa6616c3b1af40ca9f </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$9,000</td>
                        <td class="text-center"> 376e809b02e6ef044f6d5cf5b72111f25f3c3e16a93dce865a178e2e0f5c484c </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning"></i></span>Pending</button>
                        </td>
                        <td class="text-center">$43,000</td>
                        <td class="text-center"> aa14458f8082d9c4265ef491ca0b5d4801c16bbf7a4aece7b70a0b4824ffdfea </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$10,000.00</td>
                        <td class="text-center"> 3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$10,000.00</td>
                        <td class="text-center"> 3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$10,000.00</td>
                        <td class="text-center"> 3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$10,000.00</td>
                        <td class="text-center"> 3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$10,000.00</td>
                        <td class="text-center"> 3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$10,000.00</td>
                        <td class="text-center"> 3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$1000.00</td>
                        <td class="text-center"> 3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$123,000.00</td>
                        <td class="text-center"> 3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button class="btn
                                        btn-info btn-sm"><span class="btn-label"><i class="fa
                                        fa-check"></i></span>Confirmed</button>
                        </td>
                        <td class="text-center">$10,000.00</td>
                        <td class="text-center"> 3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca </td>
                    </tr>
                </tbody>
            </table>
        </marquee>
    </div>
    <!--================End Trending Area Area =================-->

    <!--================Bitcoin Calculater Area =================-->
    <section class="bitcoin_calculater_area p_100">
        <div class="container">
            <div class="main_title wh_title">
                <h2 class="text-white">altsfolio.org Calculator</h2>
                <p class="text-white">Our goal is to be at the heart of the financial services industry as
                    businesses expand
                    across the globe.</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="calculater_left_text">
                        <ul class="text-white">
                            <li>Select any of the investment plans we offer</li>
                            <li>Generate a life time income for yourself</li>
                            <li>Invite your friends and earn rewards </li>
                        </ul>

                        <div class="coin_calculator">

                            <script type="text/javascript" src="https://fx-rate.net/converter.php?layout=horizontal&amount=1&tcolor=000000&currency=BTC&default_pair=BTC/GBP"></script>


                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="calculate_img">
                        <img src="/trust/img/mobile-app.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Bitcoin Calculater Area =================-->


    <!--================Clients Slider Area =================-->
    <section class="clients_slider_area">
        <div class="container">
            <img src="/trust/img/banks.png" alt="">

        </div>
    </section>
    <!--================End Clients Slider Area =================-->


</main>
<!-- ================Footer Area ================= -->
@endsection