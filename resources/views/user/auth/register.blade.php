@extends('layouts.auth')

@section('contents')
<div class="wrapper-content-sign-in p-0">



    <div class="col-md-8 offset-md-8 text-left side_signing_full">








        <form method="post" action="{{ route('user.register-validate') }}" id="registerForm" class="form-signin1 full_side text-white">

            @csrf

            <img style="width:40%;height:10%" src="https://altsfolio.org/trust/images/lkog-removebg-preview.png">
            <span>
                <h3 style="color:crimson;text-align:center"></h3>
            </span>
            <span>
                <h3 style="color:green;text-align:center"></h3>
            </span>
            <h2 class="tex-black mb-4 font-weight-bold">Register</h2>

            <label style="color:black" class="font-weight-bold">Your Full Name</label>
            <input type="text" name="name" value="" style="color:black" class="form-control" size="30" placeholder="Full Name">
            <span style="color:crimson">@error('name')
                {{ $message }}
                @enderror</span>
            <br>
            <label style="color:black" class="font-weight-bold">Your Username</label>
            <input type="text" name="username" value="" style="color:black" class="form-control" size="30" placeholder="Username">
            <span style="color:crimson">
                @error('username')
                {{ $message }}
                @enderror
            </span>
            <br>
            <label style="color:black" class="font-weight-bold">Define Password</label>
            <input type="password" name="password" value="" style="color:black" class="form-control" size="30" placeholder="Define Password">
            <span style="color:crimson">
                @error('password')
                {{ $message }}
                @enderror
            </span>
            <br>
            <label style="color:black" class="font-weight-bold">Retype Password</label>
            <input type="password" name="password_confirmation" value="" style="color:black" class="form-control" size="30" placeholder="Retype Password">
            <span style="color:crimson" @error('password_confirmation')
                {{ $message }}
                @enderror></span>
            <br>


            <label style="color:black" class="font-weight-bold">Account ID</label>
            <input type="text" style="color:black" class="form-control" name="usdt_wallet" value="">
            <span style="color:crimson"></span>
            <br>
            <label style="color:black" class="font-weight-bold">Account ID</label>
            <input type="text" style="color:black" class="form-control" name="usdt_wallet2" value="">
            <span style="color:crimson"></span>
            <br>
            <label style="color:black" class="font-weight-bold">Your E-mail Address</label>
            <input type="text" name="email" value="" style="color:black" class="form-control" size="30" placeholder="E-mail Address">
            <span style="color:crimson">
                @error('email')
                {{ $message }}
                @enderror
            </span>
            <br>
            <label style="color:black" class="font-weight-bold">Retype Your E-mail</label>
            <input type="text" name="email_confirmation" value="" style="color:black" class="form-control" size="30" placeholder="Retype E-mail">
            <span style="color:crimson">
                @error('email_confirmation')
                {{ $message }}
                @enderror
            </span>
            <br>
            <label style="color:black" class="font-weight-bold">Secret question</label>
            <input type="text" name="sq" value="" style="color:black" class="form-control" size="30" placeholder="Secret question">
            <span style="color:crimson"></span>
            <br>
            <label style="color:black" class="font-weight-bold">Secret answer</label>
            <input type="text" name="sa" value="" style="color:black" class="form-control" size="30" placeholder="Secret answer">
            <span style="color:crimson"></span>
            <br>

            <p>Your Upline: @if ($ref == NULL) n/a @else {{ $ref }} @endif</p>


            <input type="checkbox" id="agreeTerms" name="agree" value="1"> I agree with <a href="/tos">Terms and conditions</a>
            <input type="submit" value="Register" class="btn btn-lg btn-primary btn-round" style="background:#0080DB;color:white">

        </form>
    </div>
</div>

@endsection

@section('scripts')
<script>
    (function() {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const ref = urlParams.get('ref')
        document.getElementById('upline').value = ref;
    })();
</script>


@endsection