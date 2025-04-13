@php

use App\Models\Bot;

$bots = Bot::get();

$page_title = 'Stock';

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
                <a class="active" href="/stock">Stock &amp; Forex</a>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <!--================Blog Area =================-->




    <section class="pricing-tables content-area">
        <div class="container">
            <!-- Main title -->
            <div class="main-title text-center" style="margin: 35px 0;">
                <h1>STOCK AND FOREX TRADE</h1>
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
                    <h1>STOCK AND FOREX TRADE</h1>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="pricing">
                            <div class="price-header">
                                <div class="title">STANDARD PLAN</div>
                                <h1 class="price">2%</h1>
                                <div class="text-white">Daily For 7 Days</div>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>Minimum Deposit - $1,000</li>
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
                                <div class="title">PREMIUM PLAN</div>
                                <h1 class="price">3.5%</h1>
                                <div class="text-white">Daily For 7 Days</div>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>Minimum Deposit - $10,000</li>
                                    <li>Maximum Deposit - $30,000</li>
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
                                <div class="title">DELUXE PLAN</div>
                                <h1 class="price">5%</h1>
                                <div class="text-white">Daily for 7 Days</div>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>Minimum Deposit - $30,000</li>
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
                            <h3>What is the stock market?</h3>
                            <p>As the name suggests, the stock market is a marketplace for the trading of stocks
                                or shares.
                                There are many stock markets around the world, and the UK’s main exchange is The
                                London
                                Stock Exchange (LSE).</p>
                            <p>To form a market index, company shares are grouped together, and their value is
                                combined as a
                                weighted average (the bigger the company the larger its effect on the value of
                                the index)
                                resulting in a figure. Generally, companies of similar size and value are
                                grouped together.

                                Often you hear the market being up or down. This relates to stock market indices
                                rising and
                                falling.</p>
                            <h5>“If a company you hold shares in pays dividends, you’ll receive dividend
                                payments. If a
                                company is successful and manages to grow profits over time, the amount it pays
                                out as a
                                dividend can increase.”</h5>

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