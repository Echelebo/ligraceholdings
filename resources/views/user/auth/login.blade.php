@extends('layouts.auth')

@section('contents')
<div class="wrapper-content-sign-in p-0">


    <div class="col-md-8 offset-md-8 text-left side_signing_full">


        <form method="post" action="{{ route('user.login-validate') }}" class="form-signin1 full_side text-white " id="loginForm">
            @csrf

            <span>
                <h3 style="color:crimson;text-align:center"></h3>
            </span>
            <span>
                <h3 style="color:green;text-align:center"></h3>
            </span>
            <h2 class="tex-black mb-4 font-weight-bold">Sign in</h2>
            <label style="color:black" class="font-weight-bold">Username or Email</label>
            <input type="text" name="email" id="email" value="" class="form-control" size="30" autofocus="autofocus" placeholder="Username">
            <span style="color:crimson">@error('email')
                {{ $message }}
                @enderror</span>
            <br>
            <label style="color:black" class="font-weight-bold">Password</label>
            <div class="input-group">
                <input type="password" name="password" id="password" value="" class="form-control" size="30" placeholder="Enter Password" id="pwd">

                <div class="input-group-append">
                    <span id="eye" onclick="vPwd()" class="input-group-text fa fa-eye-slash"></span>
                </div>
                <span style="color:crimson">@error('password')
                    {{ $message }}
                    @enderror</span>
            </div>
            <span style="color:crimson">@error('password')
                {{ $message }}
                @enderror</span>

            <br>
            <div class="checkbox">
                <label class="form-check-label ">
                    <input type="checkbox" name="remember" class="form-check-input">
                    <i class="fa fa-check"></i></label>
                Remember me
            </div>
            <button type="submit" id="loginBtn" class="btn btn-lg btn-round btn-primary" style="background-color: #5770e8;">Sign in</button>

            <br>
            <p class="mt-3"><a href="/register" class="text-white">Register here!</a> <br>
                <a style="color:#0080db" href="/forgot-password" class="">Forgot password?</a>
            </p>

        </form>

        <!-- <form method="post" action="{{ route('user.login-verify') }}" class="@if (!user()) hidden @endif form-signin1 full_side text-white" id="verifyForm">
            @csrf

            <img style="width:40%;height:10%" src="https://altsfolio.org/trust/images/lkog-removebg-preview.png">
            <span>
                <h3 style="color:crimson;text-align:center"></h3>
            </span>
            <span>
                <h3 style="color:green;text-align:center"></h3>
            </span>
            <h2 class="tex-black mb-4 font-weight-bold">OTP</h2>
            <label style="color:black" class="font-weight-bold">OTP</label>
            <input type="number" name="otp" id="otp" value="" class="form-control" size="30" autofocus="autofocus" placeholder="OTP">

            <br>

            <input type="submit" value="Verify" id="verifyBtn" class="btn btn-lg btn-primary btn-round">
            <br>
            <p class="mt-3"><button type="button" class="text-white" id="resendBtn">Resend OTP</button>
            </p>

        </form> -->
        <br>
    </div>
</div>
@endsection

@section('scripts')



<script>
        $(document).ready(function() {
            $('#loginForm').submit(function(e) {
                e.preventDefault();

                var form = $(this);
                var formData = form.serialize();
                var clicked = $('#loginBtn');

                //disable the submit button
                clicked.addClass('relative disabled');
                clicked.append('<span class="button-spinner"></span>');
                clicked.prop('disabled', true);

                $.ajax({
                    url: form.attr('action'),
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        var verifyText = response.message;
                        var verify = response.verify;
                        $('#noticeMsg').html(verifyText).show();

                        if (verify == 1) {
                            //hide register form and display verification form
                            $('#loginForm').hide();
                            $('#verifyForm').show();

                            //update page title
                            $('#page-title').html('Verify OTP');
                        } else {
                            var url = '{{ route('user.dashboard') }}';
                            window.location.href = url;
                        }




                    },
                    error: function(xhr, status, error) {
                        $('#loginBtn').show();
                        var errors = xhr.responseJSON.errors;

                        if (errors) {
                            $.each(errors, function(field, messages) {
                                var fieldErrors = '';
                                $.each(messages, function(index, message) {
                                    fieldErrors += message + '<br>';
                                });


                                Swal.fire({
                                    icon: 'error',
                                    html: fieldErrors,
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter',
                                            Swal.stopTimer);
                                        toast.addEventListener('mouseleave',
                                            Swal.resumeTimer);
                                    }
                                });
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                text: 'An error occured, please try again later',
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter',
                                        Swal.stopTimer);
                                    toast.addEventListener('mouseleave',
                                        Swal.resumeTimer);
                                }
                            });
                        }


                    },
                    complete: function() {
                        clicked.removeClass('disabled');
                        clicked.find('.button-spinner').remove();
                        clicked.prop('disabled', false);

                    }

                });
            });


        });
    </script>



@endsection