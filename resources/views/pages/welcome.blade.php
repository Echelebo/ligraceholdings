@php


$page_title = 'Welcome';

@endphp

@extends('layouts.front')


@section('contents')

<main>



      <!--================Banner Area =================-->
      <section class="banner_area">
          <div class="container">
              <div class="banner_text">
                  <h4>Registration</h4>
                  <a href="/">Home</a>
                  <span>/</span>
                  <a class="active" href="#">Registration</a>
              </div>
          </div>
      </section>
      <!--================End Banner Area =================-->

      <!--================Bitcoin About Area =================-->
      <section class="bitcoin_about_area p_100">
          <div class="container">

              <h3>Registration completed:</h3><br>

              Thank you for joining our program.<br>
              You are now an official member of this program. You can login to your account to start investing with us and use all the services that are available for our members.
              <br>
              <br>

              <b>Important:</b> Do not provide your login and password to anyone!

          </div>
      </section>
  </main>

  @endsection