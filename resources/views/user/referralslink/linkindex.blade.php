@extends('layouts.user')

@section('contents')
    <div class="container-fluid">

  <!-- start page title -->
  <div class="row">
    <div class="col-12">
      <div class="page-title-box d-flex align-items-center justify-content-between">
        <h4 class="mb-0">Promotional Tools</h4>

        <div class="page-title-right">
          <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
            <li class="breadcrumb-item active">Promotional Tools</li>
          </ol>
        </div>

      </div>
    </div>
  </div>
  <!-- end page title -->
  <div class="col-md-12">
    <div class="card">
      <h5 class="card-header bg-primary text-white">Promotional Tools</h5>
      <div class="card-body">

        <div class="row">
          <div class="col-md-12">
            <img src="http://primetimeholdingsltd.comimages/125x125.gif">
            <textarea class="form-control" rows="5"
              spellcheck="false">&lt;a href="{{ route('user.register', ['ref' => user()->username ?? 'notset']) }}"&gt; &lt;img src="http://ligraceholdings.comimages/125x125.gif" alt="" width="125" height="125" /&gt; &lt;/a&gt;</textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <img src="http://primetimeholdingsltd.comimages/468x60.gif">
            <textarea class="form-control" rows="5"
              spellcheck="false">&lt;a href="{{ route('user.register', ['ref' => user()->username ?? 'notset']) }}"&gt; &lt;img src="http://ligraceholdings.comimages/468x60.gif" alt="" width="468" height="60" /&gt; &lt;/a&gt;</textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <img src="http://primetimeholdingsltd.comimages/728x90.gif">
            <textarea class="form-control" rows="5"
              spellcheck="false">&lt;a href="{{ route('user.register', ['ref' => user()->username ?? 'notset']) }}"&gt; &lt;img src="http://ligraceholdings.comimages/728x90.gif" alt="" width="728" height="90" /&gt; &lt;/a&gt;</textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <img src="http://primetimeholdingsltd.comimages/1200x150.gif">
            <textarea class="form-control" rows="5"
              spellcheck="false">&lt;a href="{{ route('user.register', ['ref' => user()->username ?? 'notset']) }}"&gt; &lt;img src="http://ligraceholdings.comimages/1200x150.gif" alt="" width="1200" height="150" /&gt; &lt;/a&gt;</textarea>
          </div>
        </div>
        <br><br><br>
      </div>
    </div>
  </div>
@endsection
