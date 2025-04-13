@php

use App\Models\Bot;

$bots = Bot::get();

$page_title = 'Real Estate';

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
                <a class="active" href="/realestate">Real Estate</a>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <!--================Blog Area =================-->





    <section class="pricing-tables content-area">
        <div class="container">
            <!-- Main title -->
            <div class="main-title text-center" style="margin: 35px 0;">
                <h1>REAL ESTATE</h1>
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
                @endforeachs




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
                    <h1>REAL ESTATE</h1>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-4">
                        <div class="pricing">
                            <div class="price-header">
                                <div class="title">SILVER PLAN</div>
                                <h1 class="price">10%</h1>
                                <div class="text-white">Daily For 10</div>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>Minimum Deposit - $5000</li>
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
                                <div class="title">PRO-GOLD PLAN</div>
                                <h1 class="price">20%</h1>
                                <div class="text-white">Daily For 10 Days</div>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>Minimum Deposit - $10,000</li>
                                    <li>Maximum Deposit - $50,000</li>
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
                                <h1 class="price">50%</h1>
                                <div class="text-white">Daily For 10 Days</div>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>Minimum Deposit - $50,000</li>
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
                            <h3>Real Estate</h3>
                            <p>Real estate trading is the wild side of real estate investment. Like day traders,
                                who are
                                distinct from buy-and-hold investors, real estate traders are an entirely
                                different breed
                                from buy-and-rent landlords. Real estate traders buy properties with the
                                intention of
                                holding them for a short period of time, often no more than three to four
                                months, after
                                which they hope to sell them for a profit. This technique is also called
                                flipping properties
                                and is based on buying properties that are either significantly undervalued or
                                in a very hot
                                market.</p>
                            <p>As property flippers we often forgo putting any money into a house for
                                improvements; the
                                investment has to have the intrinsic value to turn a profit without alteration
                                or we won’t
                                consider it. Flipping in this manner is a short-term cash investment. To take
                                advantage of
                                potentially large returns, We have to have cash on hand, as traditional
                                financing doesn’t
                                generally work for this type of transaction.
                            </p>
                            <p>A second class of property flipper also exists. These investors make their money
                                by buying
                                reasonably priced properties and adding value by renovating them. This can be a
                                longer-term
                                investment depending on the extent of the improvements. The limiting feature of
                                this
                                investment is that it is time intensive and often only allows investors to take
                                on one or
                                two properties at a time hence we try to avoid properties with high maintenance
                                cost and
                                focus more on properties with high undervalue</p>
                            <h5>“Real estate trading has a shorter time period during which capital and effort
                                are tied up
                                in a property. Depending on market conditions, there can be significant returns
                                even on this
                                shorter time frame.”</h5>

                            <p>Despite the magnitude and complexity of the real estate market, many people tend
                                to think the
                                industry consists merely of brokers and salespeople. However, millions of people
                                in fact
                                earn a living through real estate, not only in sales but also in appraisals,
                                property
                                management, financing, construction, development, counseling, education, and
                                several other
                                fields. Many professionals and businesses—including accountants, architects,
                                banks, title
                                insurance companies, surveyors, and lawyers—also depend on the real estate
                                industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Blog Area =================-->


</main>


@endsection