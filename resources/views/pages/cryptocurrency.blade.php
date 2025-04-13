@php

use App\Models\Bot;

$bots = Bot::get();

$page_title = 'Cryptocurreny';

@endphp

@extends('layouts.front')

@section('contents')

<main>




    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h4>Our Service</h4>
                <a href="home">Home</a>
                <span>/</span>
                <a class="active" href="/cryptocurrency">cryptocurrency</a>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <!--================Blog Area =================-->


    <section class="pricing-tables content-area">
        <div class="container">
            <!-- Main title -->
            <div class="main-title text-center" style="margin: 35px 0;">
                <h1>CRYPTO CURRENCY</h1>
            </div>
            <div class="row">
                @foreach ($bots as $bot)
                <div class="col-sm-12 col-lg-3 col-md-4">
                    <div class="pricing">
                        <div class="price-header">
                            <div class="title">{{ $bot->name }}</div>
                            <h1 class="price">{{ $bot->daily_min }}%</h1>
                            <div class="text-white">24 Hours</div>
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



    <!--<section class="pricing-tables content-area">
        <div class="container">

            <div class="main-title text-center" style="margin: 35px 0;">
                <h1>CRYPTO CURRENCY</h1>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="pricing">
                        <div class="price-header">
                            <div class="title">SILVER PLAN</div>
                            <h1 class="price">2.5%</h1>
                            <div class="text-white">Daily For 3 Days</div>
                        </div>
                        <div class="content">
                            <ul>
                                <li>Minimum Deposit - $100</li>
                                <li>Maximum Deposit - $2,000</li>
                                <li>Enhanced Security</li>
                                <li>24/7 Support</li>
                            </ul>
                            <div class="button"><a href="/register" class="btn btn-outline pricing-btn">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="pricing">
                        <div class="price-header">
                            <div class="title">GOLD PLAN</div>
                            <h1 class="price">3.5%</h1>
                            <div class="text-white">Daily For 3 Days</div>
                        </div>
                        <div class="content">
                            <ul>
                                <li>Minimum Deposit - $2,000</li>
                                <li>Maximum Deposit - $10,000</li>
                                <li>Enhanced Security</li>
                                <li>24/7 Support</li>
                            </ul>
                            <div class="button"><a href="/register" class="btn btn-outline pricing-btn">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="pricing">
                        <div class="price-header">
                            <div class="title">DIAMOND PLAN</div>
                            <h1 class="price">4.5%</h1>
                            <div class="text-white">AFTER 3 Days</div>
                        </div>
                        <div class="content">
                            <ul>
                                <li>Minimum Deposit - $10,000</li>
                                <li>Maximum Deposit - Infinity</li>
                                <li>Enhanced Security</li>
                                <li>24/7 Support</li>
                            </ul>
                            <div class="button"><a href="/register" class="btn btn-outline pricing-btn">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->


    <section class="main_blog_area p_100">
        <div class="container">
            <div class="row row_disable">
                <div class="col-lg-12 float-md-right">
                    <div class="blog_inner_area">
                        <div class="blog_img">
                            <img class="img-fluid" src="/trust/img/service/service-1.html" alt="">
                        </div>
                        <div class="single_blog_content">
                            <h3>What are cryptocurrencies?</h3>
                            <p>A cryptocurrency is a digital coin, designed to be transferred between people in
                                virtual
                                transactions. Cryptocurrencies exist only as data and not as physical objects;
                                you cannot
                                actually hold a Bitcoin in your hand or keep Ethereum in your safe.</p>
                            <p>Decentralized cryptocurrency is produced by the entire cryptocurrency system
                                collectively, at
                                a rate which is defined when the system is created and which is publicly known.
                                In
                                centralized banking and economic systems such as the Federal Reserve System,
                                corporate
                                boards or governments control the supply of currency by printing units of fiat
                                money or
                                demanding additions to digital banking ledgers.</p>
                            <h5>“Owning a Bitcoin means you have the collective agreement of each and every
                                computer on the
                                Bitcoin network that it is currently owned by you and – more importantly – that
                                it was
                                legitimately created by a miner.”</h5>

                            <p>A cryptocurrency, crypto currency or crypto is a digital asset designed to work
                                as a medium
                                of exchange wherein individual coin ownership records are stored in a ledger
                                existing in a
                                form of computerized database using strong cryptography to secure transaction
                                records, to
                                control the creation of additional coins, and to verify the transfer of coin
                                ownership. It
                                typically does not exist in physical form (like paper money) and is typically
                                not issued by
                                a central authority. Cryptocurrencies typically use decentralized control as
                                opposed to
                                centralized digital currency and central banking systems When a cryptocurrency
                                is minted or
                                created prior to issuance or issued by a single issuer, it is generally
                                considered
                                centralized. When implemented with decentralized control, each cryptocurrency
                                works through
                                distributed ledger technology, typically a blockchain, that serves as a public
                                financial
                                transaction database.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Blog Area =================-->




</main>

@endsection