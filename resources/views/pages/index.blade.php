@php
    use App\Models\DepositCoin;
    use App\Models\Bot;
    use Faker\Factory as Faker;


    $page_title = 'Home';
    $faker = Faker::create();
    $logos = DepositCoin::inRandomOrder()
        ->take(20)
        ->get('logo_url');

    $bots = Bot::get();

    $deposit_methods = ['usdttrc20'];
    $methods = DepositCoin::where('status', 1)->get();
    foreach ($methods as $method) {
        array_push($deposit_methods, $method->code);
    }

    // Check if the count is less than 20
    while (count($deposit_methods) < 20) {
        $deposit_methods[] = 'usdttrc20';
    }

    $actions = ['deposited', 'withdrew', 'withdrew', 'deposited', 'withdrew', 'deposited', 'withdrew', 'withdrew', 'withdrew', 'withdrew', 'withdrew', 'withdrew'];

    $whys = ['Cutting-Edge Precision', 'Trendsetter Advantage', 'Adaptive Excellence', 'Seamless Profits', 'Data-Driven Triumph', 'Strategic Partner', 'Constant Success', 'Market Pioneer', 'Automated Mastery'];
    $reviews = [
        site('name') . "'s precision trading is a game-changer, consistently delivering impressive profits. I trust it for my financial success.",
        'Effortless trading with ' . site('name') . '. Its adaptability and data-driven approach make it a standout choice. Highly recommended!',
        'Seamless trades, constant profits - ' . site('name') . " simplifies trading. It's a must-have for anyone in the market.",
        site('name') . "'s innovative strategies and consistent returns have transformed my trading experience. It's a valuable asset to any trader.",
        'I rely on ' . site('name') . " for its adaptability in fluctuating markets. It's a proven partner in achieving financial goals.",
        site('name') . "'s automated precision is remarkable. It's a powerful tool for navigating today's complex trading landscape.",
        'Maximized profits with ' . site('name') . '. Its results speak volumes. A reliable and intelligent trading companion.',
        'Trading with ' . site('name') . ' is effortless and rewarding. It adapts to market changes seamlessly. Truly impressive!',
        site('name') . ' has changed my trading game. Its data-driven approach delivers consistent gains. An invaluable tool for success.',
        'Effortless trading made possible by ' . site('name') . ' .  Its strategic prowess sets it apart. A game-changer for traders.',
    ];

    $short_description =  site('seo_description');

@endphp

@extends('layouts.front')


@section('contents')

<main>



    <div id="particles-js"><canvas class="particles-js-canvas-el" width="1267" height="900" style="width: 100%; height: 100%;"></canvas></div>
    <div class="inner-slider" id="slider-carousel">
        <div class="exp animate__animated animate__fadeInUp" style="display: none;">
            <h1>Think Higher<span class="yellow-color"></span> <br></h1>
            <p>trustfundbit.com was founded to provide an alternative to the volatile investment market for people.</p>
            <div class="mt-3">
                <a class="btn text-white mr-3" style="background-color: #0080db" href="?a=signup">REGISTER</a>
                <a class="btn btn-light" href="?a=login">LOGIN</a>
            </div>
        </div>
        <div class="exp animate__animated animate__fadeInUp" style="display: block;">
            <h1>Step Financial <span class="yellow-color">Freedom</span></h1>
            <p> trustfundbit.com was built to help you be a more confident investor and set you on
                the path to secure your financial future</p>
            <div class="mt-3">
                <a class="btn  text-white mr-3" style="background-color: #0080db" href="?a=signup">REGISTER</a>
                <a class="btn btn-light" href="?a=login">LOGIN</a>
            </div>
        </div>
        <div class="exp animate__animated animate__fadeInUp" style="display: none;">
            <h1>MOST <span class="yellow-color">SECURE</span> <br>CRYPTO CURRENCY</h1>
            <p>Bitcoin is a fully decentralized crypto currency that ensures transparency with the block chain
                technology.
            </p>
            <div class="mt-3">
                <a class="btn text-white mr-3" style="background-color: #0080db" href="?a=signup">REGISTER</a>
                <a class="btn btn-light" href="?a=login">LOGIN</a>
            </div>
        </div>
    </div>
    <!-- MARQUEE SCROLL -->
    <div style="background-color: #0080db">
        <div class="simple-marquee-container">

        <div class="marquee-1" style="left: -112.816px;">
                <ul class="marquee-content-items">
                    <li><span>BTC: </span><span id="usd">$ 83773.46</span></li>
                    <li><span>BTC: </span><span id="cny">¥ 38800</span></li>
                    <li><span>BTC: </span><span id="eur">€ 77412.62</span></li>
                </ul>
            </div><div class="marquee-2" style="left: 252.784px;">
                <ul class="marquee-content-items">
                    <li><span>BTC: </span><span id="usd">$ 83773.46</span></li>
                    <li><span>BTC: </span><span id="cny">¥ 38800</span></li>
                    <li><span>BTC: </span><span id="eur">€ 77412.62</span></li>
                </ul>
            </div><div class="marquee-3" style="left: 618.125px;">
                <ul class="marquee-content-items">
                    <li><span>BTC: </span><span id="usd">$ 83773.46</span></li>
                    <li><span>BTC: </span><span id="cny">¥ 38800</span></li>
                    <li><span>BTC: </span><span id="eur">€ 77412.62</span></li>
                </ul>
            </div><div class="marquee-4" style="left: 983.357px;">
                <ul class="marquee-content-items">
                    <li><span>BTC: </span><span id="usd">$ 83773.46</span></li>
                    <li><span>BTC: </span><span id="cny">¥ 38800</span></li>
                    <li><span>BTC: </span><span id="eur">€ 77412.62</span></li>
                </ul>
            </div><div class="marquee-5" style="left: 1348.6px;">
                <ul class="marquee-content-items">
                    <li><span>BTC: </span><span id="usd">$ 83773.46</span></li>
                    <li><span>BTC: </span><span id="cny">¥ 38800</span></li>
                    <li><span>BTC: </span><span id="eur">€ 77412.62</span></li>
                </ul>
            </div><div class="marquee-6" style="left: 1713.84px;">
                <ul class="marquee-content-items">
                    <li><span>BTC: </span><span id="usd">$ 83773.46</span></li>
                    <li><span>BTC: </span><span id="cny">¥ 38800</span></li>
                    <li><span>BTC: </span><span id="eur">€ 77412.62</span></li>
                </ul>
            </div><div class="marquee-7" style="left: 2079.13px;">
                <ul class="marquee-content-items">
                    <li><span>BTC: </span><span id="usd">$ 83773.46</span></li>
                    <li><span>BTC: </span><span id="cny">¥ 38800</span></li>
                    <li><span>BTC: </span><span id="eur">€ 77412.62</span></li>
                </ul>
            </div></div>
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
<a class="btn text-white" style="background-color: #0080db" href="?a=about">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="trending_img">
                        <img class="img-fluid" src="img/PF.png" alt="">
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
                        <img src="img/service1.jpg">

                        <a href="#">
                            <h4>Crypto Currency</h4>
                        </a>
                        <p>A cryptocurrency, crypto currency or crypto is a digital asset designed to work as a
                            medium of
                            exchange wherein individual coin ownership</p>
                        <a href="?a=cryptocurrency">learn more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="choose_botcoin_item">
                        <img src="img/service2.jpg">

                        <a href="#">
                            <h4>Stock &amp; Forex</h4>
                        </a>
                        <p>The foreign exchange market is a global decentralized or over-the-counter market for
                            the trading
                            of currencies. </p>
                        <a href="?a=stock">learn more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="choose_botcoin_item">
                        <img src="img/service3.jpg">

                        <a href="#">
                            <h4>Real estate </h4>
                        </a>
                        <p>Real estate is property consisting of land and the buildings on it, along with its
                            natural
                            resources such as crops, minerals or water; </p>
                        <a href="?a=realestate">learn more</a>
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
                        <img class="img-fluid" src="img/kmd.jpg" alt="">
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
    <div class="section-full p-t50 p-b50 overlay-wraper bg-parallax clouds1 bg-repeat" id="stellarTest" data-stellar-background-ratio="0.5" style="background-image: url(img/bg-9.jpg)">
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
               <div class="col-sm-12 col-lg-3 col-md-4">
                    <div class="pricing">
                        <div class="price-header">
                            <div class="title">STARTER PLAN</div>
                            <h1 class="price">3.5%</h1>
                            <div class="text-white">24hrs</div>
                        </div>
                        <div class="content">
                            <ul>
                                <li>Minimum Deposit - $100</li>
                                <li>Maximum Deposit - $1,000</li>
                                <li>Enhanced Security</li>
                                <li>24/7 Support</li>
                                <li>Direct Referral: 5%</li>
                                <li>Binary Referral: 3%</li>
                            </ul>
                            <div class="button"><a href="?a=signup" class="btn btn-outline pricing-btn">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="col-sm-12 col-lg-3 col-md-4">
                    <div class="pricing">
                        <div class="price-header">
                            <div class="title">BUSINESS PLAN</div>
                            <h1 class="price">5%</h1>
                           <div class="text-white">24hrs</div>
                        </div>
                        <div class="content">
                            <ul>
                                <li>Minimum Deposit - $1,000</li>
                                <li>Maximum Deposit - $10,000</li>
                                <li>Enhanced Security</li>
                                <li>24/7 Support</li>
                                 <li>Direct Referral: 5%</li>
                                <li>Binary Referral: 3%</li>
                            </ul>
                            <div class="button"><a href="?a=signup" class="btn btn-outline pricing-btn">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                </div>


                 <div class="col-sm-12 col-lg-3 col-md-4">
                    <div class="pricing">
                        <div class="price-header">
                            <div class="title">VIP PLAN</div>
                            <h1 class="price">8.30%</h1>
                            <div class="text-white">24hrs</div>
                        </div>
                        <div class="content">
                            <ul>
                                <li>Minimum Deposit - $5,000</li>
                                <li>Maximum Deposit - $Unlimited</li>
                                <li>Enhanced Security</li>
                                <li>24/7 Support</li>
                               <li>Direct Referral: 5%</li>
                                <li>Binary Referral: 3%</li>
                            </ul>
                            <div class="button"><a href="?a=signup" class="btn btn-outline pricing-btn">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                </div>


                 <div class="col-sm-12 col-lg-3 col-md-4">
                    <div class="pricing">
                        <div class="price-header">
                            <div class="title">CLOUD MINING PLAN</div>
                            <h1 class="price">10%</h1>
                            <div class="text-white">24hrs</div>
                        </div>
                        <div class="content">
                            <ul>
                                <li>Minimum Deposit - $10,000</li>
                                <li>Maximum Deposit - $Unlimited</li>
                                <li>Enhanced Security</li>
                                <li>24/7 Support</li>
                               <li>Direct Referral: 10%</li>
                                <li>Binary Referral: 5%</li>
                            </ul>
                            <div class="button"><a href="?a=signup" class="btn btn-outline pricing-btn">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                </div>




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
                            <div class="button"><a href="?a=signup" class="btn btn-outline pricing-btn">Get
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
                    <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/forex-heat-map/?locale=en#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A430%2C%22currencies%22%3A%5B%22EUR%22%2C%22USD%22%2C%22JPY%22%2C%22GBP%22%2C%22CHF%22%2C%22AUD%22%2C%22CAD%22%2C%22NZD%22%2C%22CNY%22%5D%2C%22isTransparent%22%3Afalse%2C%22colorTheme%22%3A%22dark%22%2C%22utm_source%22%3A%22trustfundbit.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22forex-heat-map%22%2C%22page-uri%22%3A%22trustfundbit.com%2F%22%7D" title="forex heat-map TradingView widget" lang="en" style="user-select: none; box-sizing: border-box; display: block; height: 100%; width: 100%;"></iframe>
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
</style></div>
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
                            <a class="btn text-white" style="background-color: #0080db" href="?a=about">Learn
                                More</a>
                            <a class="btn btn-dark" href="?a=signup">Join Us</a>
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
                        <tr><td class="text-center">
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
                <h2 class="text-white">trustfundbit.com Calculator</h2>
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
                            <script type="text/javascript" src="https://fx-rate.net/converter.php?layout=horizontal&amp;amount=1&amp;tcolor=000000&amp;currency=BTC&amp;default_pair=BTC/GBP">
                            </script><style type="text/css">.HS1msg_1{        font-family: Arial,Verdana!important;        font-size: 10px!important;        font-weight: normal;        text-align: right;	line-height:10px!important;}.HS1msg_1 a {        font-family: Arial,Verdana!important;        font-size: 10px!important;        font-weight: normal;        text-align: right;	padding:0px!important;	margin:0px!important;	line-height:10px!important;        color:#000000!important;}.HS1selectBox {        font-family: Arial, Verdana, Helvetica, sans-serif!important;        font-size: 12px;        font-weight: normal;        text-align: left;        width: 100%;	padding:0!important;	margin:0!important;}.HS1textarea {        overflow: hidden;        width: 95%;        height: 22px;        font-family: Arial, Verdana, Helvetica, sans-serif!important;        font-size: 16px;        font-weight: bold;        text-align: right;	padding:0px!important;	margin:0px!important;}.HS1label {        font-family: Arial, Verdana, Helvetica, sans-serif!important;        font-size: 11px!important;        line-height: 11px!important;        color:#000000!important;        font-weight: bold;	padding:0px!important;	margin:0px!important;	width:100%}.HS1goContainer {        text-align: right;	padding:0!important;	margin:0!important;	line-height:0px;}.HS1mainContainer {        font-family: Arial, Verdana, Helvetica, sans-serif!important;        font-size: 13px;        font-weight: bold;        width: 100%;	text-align:center;	align:center;	padding:0px 0px 0px 3px!important;	margin:2px 0px 1px 0px!important;}.HS1spacer {	padding:0!important;	margin:8px 0px 0px 0px!important;	line-height:0px!important;	width:20px;}#HS1form1 {        font-family: Arial, Verdana, Helvetica, sans-serif!important;        font-size: 13px;        font-weight: bold;        width: 100%;	text-align:center;	align:center;	padding:0px 0px!important;	margin:0px 0px!important;}</style><form id="HS1form1" name="HS1form1" method="post" action="" onsubmit="return getCur2(document.getElementById('HS1from').value, document.getElementById('HS1to').value, document.getElementById('HS1amount').value, document.getElementsByName('HS1tofrom'),'HS1');"><table class="HS1mainContainer"><tbody><tr style="padding:0px;margin:0px;"><td class="HS1label" style="width:15%;text-align:left;align:left;"><font class="HS1label"><input type="radio" name="HS1tofrom" id="HS1tofrom" checked="checked" onclick="this.blur()" onchange="return getCur2(document.getElementById('HS1from').value, document.getElementById('HS1to').value, document.getElementById('HS1amount').value, document.getElementsByName('HS1tofrom'),'HS1');">to<br><input type="radio" name="HS1tofrom" id="HS1tofrom" onclick="this.blur()" onchange="return getCur2(document.getElementById('HS1from').value, document.getElementById('HS1to').value, document.getElementById('HS1amount').value, document.getElementsByName('HS1tofrom'),'HS1');">from</font><input type="hidden" name="HS1from" id="HS1from" value="BTC"></td><td width="25%" style="text-align:left;">    <select name="HS1to" id="HS1to" size="1" class="HS1selectBox" onchange="return getCur2(document.getElementById('HS1from').value, document.getElementById('HS1to').value, document.getElementById('HS1amount').value, document.getElementsByName('HS1tofrom'),'HS1');" onmouseup="return getCur2(document.getElementById('HS1from').value, document.getElementById('HS1to').value, document.getElementById('HS1amount').value, document.getElementsByName('HS1tofrom'),'HS1');" onkeyup="return getCur2(document.getElementById('HS1from').value, document.getElementById('HS1to').value, document.getElementById('HS1amount').value, document.getElementsByName('HS1tofrom'),'HS1');" style="display: none;">    <option value="USD">American Dollar</option><option value="GBP" selected="">British Pound</option><option value="CAD">Canadian Dollar</option><option value="EUR">Euro</option><option value="JPY">Japanese Yen</option><option value="CHF">Swiss Franc</option><option value="AUD">Australian Dollar</option><optgroup label="---------------"></optgroup><option value="AFN">Afghan Afghani</option><option value="ALL">Albanian Lek</option><option value="DZD">Algerian Dinar</option><option value="USD">American Dollar</option><option value="AOA">Angolan Kwanza</option><option value="ARS">Argentine Peso</option><option value="AMD">Armenian Dram</option><option value="AWG">Aruban Florin</option><option value="AUD">Australian Dollar</option><option value="AZN">Azerbaijani Manat</option><option value="BSD">Bahamian Dollar</option><option value="BHD">Bahraini Dinar</option><option value="BDT">Bangladeshi Taka</option><option value="BBD">Barbados Dollar</option><option value="BYR">Belarusian Ruble</option><option value="BZD">Belize Dollar</option><option value="BMD">Bermudian Dollar</option><option value="BTC">Bitcoin</option><option value="BTN">Bhutan Ngultrum</option><option value="BOB">Bolivian Boliviano</option><option value="BAM">Bosnia-Herzegovina Convertibl</option><option value="BWP">Botswana Pula</option><option value="BRL">Brazilian Real</option><option value="BND">Brunei Dollar</option><option value="BGN">Bulgarian Lev</option><option value="BIF">Burundi Franc</option><option value="KHR">Cambodian Riel</option><option value="CAD">Canadian Dollar</option><option value="CVE">Cape Verde Escudo</option><option value="KYD">Cayman Islands Dollar</option><option value="XAF">CFA BEAC Franc</option><option value="CLP">Chilean Peso</option><option value="CLF">Chilean Unidad de Fomento</option><option value="CNY">Chinese Yuan Renminbi</option><option value="COP">Colombian Peso</option><option value="KMF">Comoros Franc</option><option value="CRC">Costa Rican Colon</option><option value="HRK">Croatian Kuna</option><option value="CUP">Cuban Peso</option><option value="CYP">Cypriot Pound</option><option value="CZK">Czech Koruna</option><option value="DKK">Danish Krone</option><option value="DJF">Djibouti Franc</option><option value="DOP">Dominican Peso</option><option value="XCD">East Caribbean Dollar</option><option value="EGP">Egyptian Pound</option><option value="ERN">Eritrean Nakfa</option><option value="EEK">Estonian Kroon</option><option value="ETB">Ethiopian Birr</option><option value="EUR">Euro</option><option value="FJD">Fiji Dollar</option><option value="CDF">Franc Congolais</option><option value="XPF">CFP Franc</option><option value="GMD">Gambian Dalasi</option><option value="GEL">Georgian Lari</option><option value="GHS">Ghanaian Cedi</option><option value="GIP">Gibraltar Pound</option><option value="GTQ">Guatemalan Quetzal</option><option value="GNF">Guinean Franc</option><option value="GYD">Guyanese Dollar</option><option value="HTG">Haitian Gourde</option><option value="HNL">Honduran Lempira</option><option value="HKD">Hong Kong Dollar</option><option value="HUF">Hungarian Forint</option><option value="ISK">Iceland Krona</option><option value="INR">Indian Rupee</option><option value="IDR">Indonesian Rupiah</option><option value="IRR">Iranian Rial</option><option value="IQD">Iraqi Dinar</option><option value="ILS">Israeli New Shekel</option><option value="JMD">Jamaican Dollar</option><option value="JPY">Japanese Yen</option><option value="JOD">Jordanian Dinar</option><option value="KZT">Kazakhstan Tenge</option><option value="KES">Kenyan Shilling</option><option value="KRW">Korean Won</option><option value="KWD">Kuwaiti Dinar</option><option value="KGS">Kyrgyzstan Som</option><option value="LAK">Lao Kip</option><option value="LVL">Latvian Lats</option><option value="LBP">Lebanese Pound</option><option value="LSL">Lesotho Loti</option><option value="LRD">Liberian Dollar</option><option value="LYD">Libyan Dinar</option><option value="LTL">Lithuanian Litas</option><option value="MOP">Macau Pataca</option><option value="MKD">Macedonia Denar</option><option value="MGA">Malagasy Ariary</option><option value="MWK">Malawi Kwacha</option><option value="MYR">Malaysian Ringgit</option><option value="MVR">Maldive Rufiyaa</option><option value="MTL">Maltese Lira</option><option value="MRO">Mauritania Ouguiya</option><option value="MUR">Mauritius Rupee</option><option value="MXN">Mexican Peso</option><option value="MXV">Mexican Unidad De Inversion</option><option value="MDL">Moldovan Leu</option><option value="MNT">Mongolian Tugrik</option><option value="MAD">Moroccan Dirham</option><option value="MMK">Myanmar Kyat</option><option value="NAD">Namibian Dollar</option><option value="NPR">Nepalese Rupee</option><option value="ANG">Netherlands Antillian Guilder</option><option value="MZN">New Mozambican Metical</option><option value="TWD">Taiwan Dollar</option><option value="TRY">Turkish Lira</option><option value="NZD">New Zealand Dollar</option><option value="NIO">Nicaraguan Cordoba Oro</option><option value="NGN">Nigerian Naira</option><option value="NOK">Norwegian Krone</option><option value="OMR">Omani Rial</option><option value="XAL">Ounces of Aluminum</option><option value="XCP">Ounces of Copper</option><option value="XAU">Ounces of Gold</option><option value="XPD">Ounces of Palladium</option><option value="XPT">Ounces of Platinum</option><option value="XAG">Ounces of Silver</option><option value="PKR">Pakistan Rupee</option><option value="PAB">Panamanian Balboa</option><option value="PGK">Papua New Guinea Kina</option><option value="PYG">Paraguay Guarani</option><option value="PEN">Peruvian Neuevo Sol</option><option value="PHP">Philippine Peso</option><option value="PLN">Polish Zloty</option><option value="GBP">British Pound</option><option value="QAR">Qatari Rial</option><option value="RON">Romanian Leu</option><option value="RUB">Russian Ruble</option><option value="RWF">Rwanda Franc</option><option value="SHP">Saint Helena Pound</option><option value="WST">Samoa Tala</option><option value="STD">Sao Tome Dobra</option><option value="SAR">Saudi Riyal</option><option value="RSD">Serbian Dinar</option><option value="SCR">Seychelles Rupee</option><option value="SLL">Sierra Leonean Leone</option><option value="SGD">Singapore Dollar</option><option value="SKK">Slovak Koruna</option><option value="SBD">Solomon Islands Dollar</option><option value="SOS">Somali Shilling</option><option value="ZAR">South African Rand</option><option value="SDR">Special Drawing Right</option><option value="LKR">Sri Lanka Rupee</option><option value="SDD">Sudanese Dinar</option><option value="SRD">Suriname Dollar</option><option value="SZL">Swaziland Lilangeni</option><option value="SEK">Swedish Krona</option><option value="CHF">Swiss Franc</option><option value="SYP">Syrian Pound</option><option value="TJS">Tajikistan Somoni</option><option value="TZS">Tanzanian Shilling</option><option value="THB">Thai Baht</option><option value="THO">Thai Offshore Baht</option><option value="TOP">Tongan Pa Anga</option><option value="TTD">Trinidad and Tobago Dollar</option><option value="TND">Tunisian Dinar</option><option value="TMM">Turkmenistan Manat</option><option value="UGX">Uganda Shilling</option><option value="UAH">Ukraine Hryvnia</option><option value="AED">United Arab Emirates Dirham</option><option value="UYU">Uruguayan peso</option><option value="UZS">Uzbekistan Sum</option><option value="VUV">Vanuatu Vatu</option><option value="VEB">Venezuelan Bolivar</option><option value="VND">Vietnamese Dong</option><option value="XOF">CFA BCEAO Franc</option><option value="YER">Yemeni Rial</option><option value="ZMK">Zambian Kwacha</option><option value="ZWD">Zimbabwe Dollar</option>   </select><div class="nice-select HS1selectBox" tabindex="0"><span class="current">British Pound</span><ul class="list"><li data-value="USD" class="option">American Dollar</li><li data-value="GBP" class="option selected">British Pound</li><li data-value="CAD" class="option">Canadian Dollar</li><li data-value="EUR" class="option">Euro</li><li data-value="JPY" class="option">Japanese Yen</li><li data-value="CHF" class="option">Swiss Franc</li><li data-value="AUD" class="option">Australian Dollar</li><li data-value="AFN" class="option">Afghan Afghani</li><li data-value="ALL" class="option">Albanian Lek</li><li data-value="DZD" class="option">Algerian Dinar</li><li data-value="USD" class="option">American Dollar</li><li data-value="AOA" class="option">Angolan Kwanza</li><li data-value="ARS" class="option">Argentine Peso</li><li data-value="AMD" class="option">Armenian Dram</li><li data-value="AWG" class="option">Aruban Florin</li><li data-value="AUD" class="option">Australian Dollar</li><li data-value="AZN" class="option">Azerbaijani Manat</li><li data-value="BSD" class="option">Bahamian Dollar</li><li data-value="BHD" class="option">Bahraini Dinar</li><li data-value="BDT" class="option">Bangladeshi Taka</li><li data-value="BBD" class="option">Barbados Dollar</li><li data-value="BYR" class="option">Belarusian Ruble</li><li data-value="BZD" class="option">Belize Dollar</li><li data-value="BMD" class="option">Bermudian Dollar</li><li data-value="BTC" class="option">Bitcoin</li><li data-value="BTN" class="option">Bhutan Ngultrum</li><li data-value="BOB" class="option">Bolivian Boliviano</li><li data-value="BAM" class="option">Bosnia-Herzegovina Convertibl</li><li data-value="BWP" class="option">Botswana Pula</li><li data-value="BRL" class="option">Brazilian Real</li><li data-value="BND" class="option">Brunei Dollar</li><li data-value="BGN" class="option">Bulgarian Lev</li><li data-value="BIF" class="option">Burundi Franc</li><li data-value="KHR" class="option">Cambodian Riel</li><li data-value="CAD" class="option">Canadian Dollar</li><li data-value="CVE" class="option">Cape Verde Escudo</li><li data-value="KYD" class="option">Cayman Islands Dollar</li><li data-value="XAF" class="option">CFA BEAC Franc</li><li data-value="CLP" class="option">Chilean Peso</li><li data-value="CLF" class="option">Chilean Unidad de Fomento</li><li data-value="CNY" class="option">Chinese Yuan Renminbi</li><li data-value="COP" class="option">Colombian Peso</li><li data-value="KMF" class="option">Comoros Franc</li><li data-value="CRC" class="option">Costa Rican Colon</li><li data-value="HRK" class="option">Croatian Kuna</li><li data-value="CUP" class="option">Cuban Peso</li><li data-value="CYP" class="option">Cypriot Pound</li><li data-value="CZK" class="option">Czech Koruna</li><li data-value="DKK" class="option">Danish Krone</li><li data-value="DJF" class="option">Djibouti Franc</li><li data-value="DOP" class="option">Dominican Peso</li><li data-value="XCD" class="option">East Caribbean Dollar</li><li data-value="EGP" class="option">Egyptian Pound</li><li data-value="ERN" class="option">Eritrean Nakfa</li><li data-value="EEK" class="option">Estonian Kroon</li><li data-value="ETB" class="option">Ethiopian Birr</li><li data-value="EUR" class="option">Euro</li><li data-value="FJD" class="option">Fiji Dollar</li><li data-value="CDF" class="option">Franc Congolais</li><li data-value="XPF" class="option">CFP Franc</li><li data-value="GMD" class="option">Gambian Dalasi</li><li data-value="GEL" class="option">Georgian Lari</li><li data-value="GHS" class="option">Ghanaian Cedi</li><li data-value="GIP" class="option">Gibraltar Pound</li><li data-value="GTQ" class="option">Guatemalan Quetzal</li><li data-value="GNF" class="option">Guinean Franc</li><li data-value="GYD" class="option">Guyanese Dollar</li><li data-value="HTG" class="option">Haitian Gourde</li><li data-value="HNL" class="option">Honduran Lempira</li><li data-value="HKD" class="option">Hong Kong Dollar</li><li data-value="HUF" class="option">Hungarian Forint</li><li data-value="ISK" class="option">Iceland Krona</li><li data-value="INR" class="option">Indian Rupee</li><li data-value="IDR" class="option">Indonesian Rupiah</li><li data-value="IRR" class="option">Iranian Rial</li><li data-value="IQD" class="option">Iraqi Dinar</li><li data-value="ILS" class="option">Israeli New Shekel</li><li data-value="JMD" class="option">Jamaican Dollar</li><li data-value="JPY" class="option">Japanese Yen</li><li data-value="JOD" class="option">Jordanian Dinar</li><li data-value="KZT" class="option">Kazakhstan Tenge</li><li data-value="KES" class="option">Kenyan Shilling</li><li data-value="KRW" class="option">Korean Won</li><li data-value="KWD" class="option">Kuwaiti Dinar</li><li data-value="KGS" class="option">Kyrgyzstan Som</li><li data-value="LAK" class="option">Lao Kip</li><li data-value="LVL" class="option">Latvian Lats</li><li data-value="LBP" class="option">Lebanese Pound</li><li data-value="LSL" class="option">Lesotho Loti</li><li data-value="LRD" class="option">Liberian Dollar</li><li data-value="LYD" class="option">Libyan Dinar</li><li data-value="LTL" class="option">Lithuanian Litas</li><li data-value="MOP" class="option">Macau Pataca</li><li data-value="MKD" class="option">Macedonia Denar</li><li data-value="MGA" class="option">Malagasy Ariary</li><li data-value="MWK" class="option">Malawi Kwacha</li><li data-value="MYR" class="option">Malaysian Ringgit</li><li data-value="MVR" class="option">Maldive Rufiyaa</li><li data-value="MTL" class="option">Maltese Lira</li><li data-value="MRO" class="option">Mauritania Ouguiya</li><li data-value="MUR" class="option">Mauritius Rupee</li><li data-value="MXN" class="option">Mexican Peso</li><li data-value="MXV" class="option">Mexican Unidad De Inversion</li><li data-value="MDL" class="option">Moldovan Leu</li><li data-value="MNT" class="option">Mongolian Tugrik</li><li data-value="MAD" class="option">Moroccan Dirham</li><li data-value="MMK" class="option">Myanmar Kyat</li><li data-value="NAD" class="option">Namibian Dollar</li><li data-value="NPR" class="option">Nepalese Rupee</li><li data-value="ANG" class="option">Netherlands Antillian Guilder</li><li data-value="MZN" class="option">New Mozambican Metical</li><li data-value="TWD" class="option">Taiwan Dollar</li><li data-value="TRY" class="option">Turkish Lira</li><li data-value="NZD" class="option">New Zealand Dollar</li><li data-value="NIO" class="option">Nicaraguan Cordoba Oro</li><li data-value="NGN" class="option">Nigerian Naira</li><li data-value="NOK" class="option">Norwegian Krone</li><li data-value="OMR" class="option">Omani Rial</li><li data-value="XAL" class="option">Ounces of Aluminum</li><li data-value="XCP" class="option">Ounces of Copper</li><li data-value="XAU" class="option">Ounces of Gold</li><li data-value="XPD" class="option">Ounces of Palladium</li><li data-value="XPT" class="option">Ounces of Platinum</li><li data-value="XAG" class="option">Ounces of Silver</li><li data-value="PKR" class="option">Pakistan Rupee</li><li data-value="PAB" class="option">Panamanian Balboa</li><li data-value="PGK" class="option">Papua New Guinea Kina</li><li data-value="PYG" class="option">Paraguay Guarani</li><li data-value="PEN" class="option">Peruvian Neuevo Sol</li><li data-value="PHP" class="option">Philippine Peso</li><li data-value="PLN" class="option">Polish Zloty</li><li data-value="GBP" class="option">British Pound</li><li data-value="QAR" class="option">Qatari Rial</li><li data-value="RON" class="option">Romanian Leu</li><li data-value="RUB" class="option">Russian Ruble</li><li data-value="RWF" class="option">Rwanda Franc</li><li data-value="SHP" class="option">Saint Helena Pound</li><li data-value="WST" class="option">Samoa Tala</li><li data-value="STD" class="option">Sao Tome Dobra</li><li data-value="SAR" class="option">Saudi Riyal</li><li data-value="RSD" class="option">Serbian Dinar</li><li data-value="SCR" class="option">Seychelles Rupee</li><li data-value="SLL" class="option">Sierra Leonean Leone</li><li data-value="SGD" class="option">Singapore Dollar</li><li data-value="SKK" class="option">Slovak Koruna</li><li data-value="SBD" class="option">Solomon Islands Dollar</li><li data-value="SOS" class="option">Somali Shilling</li><li data-value="ZAR" class="option">South African Rand</li><li data-value="SDR" class="option">Special Drawing Right</li><li data-value="LKR" class="option">Sri Lanka Rupee</li><li data-value="SDD" class="option">Sudanese Dinar</li><li data-value="SRD" class="option">Suriname Dollar</li><li data-value="SZL" class="option">Swaziland Lilangeni</li><li data-value="SEK" class="option">Swedish Krona</li><li data-value="CHF" class="option">Swiss Franc</li><li data-value="SYP" class="option">Syrian Pound</li><li data-value="TJS" class="option">Tajikistan Somoni</li><li data-value="TZS" class="option">Tanzanian Shilling</li><li data-value="THB" class="option">Thai Baht</li><li data-value="THO" class="option">Thai Offshore Baht</li><li data-value="TOP" class="option">Tongan Pa Anga</li><li data-value="TTD" class="option">Trinidad and Tobago Dollar</li><li data-value="TND" class="option">Tunisian Dinar</li><li data-value="TMM" class="option">Turkmenistan Manat</li><li data-value="UGX" class="option">Uganda Shilling</li><li data-value="UAH" class="option">Ukraine Hryvnia</li><li data-value="AED" class="option">United Arab Emirates Dirham</li><li data-value="UYU" class="option">Uruguayan peso</li><li data-value="UZS" class="option">Uzbekistan Sum</li><li data-value="VUV" class="option">Vanuatu Vatu</li><li data-value="VEB" class="option">Venezuelan Bolivar</li><li data-value="VND" class="option">Vietnamese Dong</li><li data-value="XOF" class="option">CFA BCEAO Franc</li><li data-value="YER" class="option">Yemeni Rial</li><li data-value="ZMK" class="option">Zambian Kwacha</li><li data-value="ZWD" class="option">Zimbabwe Dollar</li></ul></div></td><td width="22%" style="text-align:right;align:right;">    <input class="HS1textarea" style="width:80%;" name="HS1amount" id="HS1amount" value="1" onchange="return getCur2(document.getElementById('HS1from').value, document.getElementById('HS1to').value, document.getElementById('HS1amount').value, document.getElementsByName('HS1tofrom'),'HS1');" onkeyup="return getCur2(document.getElementById('HS1from').value, document.getElementById('HS1to').value, document.getElementById('HS1amount').value, document.getElementsByName('HS1tofrom'),'HS1');"> </td><td width="2%"><font class="HS1label"> is</font></td><td width="22%" style="align:left;text-align:left;"><textarea style="color:#666" class="HS1textarea" cols="15" rows="1" name="HS1result" id="HS1result" readonly=""></textarea></td><td width="22%" style="align:left;text-align:left;"><span width="90%" class="HS1label" id="HS1result_label" name="HS1result_label" style="display:inline">BTC</span></td> </tr><tr style="height:10px;line-height:10px;">  <td style="align:right;text-align:right;line-height:10px;height:10px" colspan="6">  <font class="HS1msg_1"><a href="https://fx-rate.net/BTC/widget/">Rates on 29 Mar 2025</a></font>  </td></tr></tbody></table></form>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="calculate_img">
                        <img src="img/mobile-app.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Bitcoin Calculater Area =================-->


    <!--================Clients Slider Area =================-->
    <section class="clients_slider_area">
        <div class="container">
            <img src="img/banks.png" alt="">

        </div>
    </section>
    <!--================End Clients Slider Area =================-->


</main>
<!-- ================Footer Area ================= -->
@endsection
