@extends('layouts.auth')

@section('contents')
<div class="wrapper-content-sign-in p-0">


    <div class="col-md-8 offset-md-8 text-left side_signing_full">


        <script language=javascript>
            function checkform() {
                if (document.mainform.username.value == '') {
                    alert("Please type your username!");
                    document.mainform.username.focus();
                    return false;
                }
                if (document.mainform.password.value == '') {
                    alert("Please type your password!");
                    document.mainform.password.focus();
                    return false;
                }
                return true;
            }
        </script>



        <form method="post" action="{{ route('user.login-validate') }}" class="form-signin1 full_side text-white @if (user()) hidden @endif " id="loginForm">
            @csrf
            <img style="width:40%;height:10%" src="https://altsfolio.org/trust/images/lkog-removebg-preview.png">
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
            <input type="submit" value="Login" id="loginBtn" class="btn btn-lg btn-primary btn-round">
            <br>
            <p class="mt-3"><a href="/register" class="text-white">Register here!</a> <br>
                <a style="color:#0080db" href="/forgot-password" class="">Forgot password?</a>
            </p>

        </form>

        <form method="post" action="{{ route('user.login-verify') }}" class="@if (!user()) hidden @endif form-signin1 full_side text-white" id="verifyForm">
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

        </form>
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
                        var url = '{{ route('
                        user.dashboard ') }}';
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


        //otp form
        $('#verifyForm').submit(function(e) {
            e.preventDefault();

            var form = $(this);
            var formData = form.serialize();
            var clicked = $('#verifyBtn');

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
                    $('#noticeMsg').html(verifyText).show();
                    var url = '{{ route('
                    user.dashboard ') }}';
                    window.location.href = url;

                },
                error: function(xhr, status, error) {
                    $('#verifyBtn').show();
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


<script>
    const resendBtn = document.getElementById('resendBtn');
    const loginBtn = document.getElementById('loginBtn');
    let isClickable = true;
    let countdown;

    function startCountdown() {
        if (isClickable) {
            isClickable = false;
            resendBtn.disabled = true;

            let secondsLeft = 120; // 2 minutes
            countdown = setInterval(() => {
                if (secondsLeft > 0) {
                    const minutes = Math.floor(secondsLeft / 60);
                    const seconds = secondsLeft % 60;
                    const formattedTime = `${minutes}:${seconds.toString().padStart(2, '0')}`;
                    resendBtn.textContent = `Resend Again in ${formattedTime}`;
                    secondsLeft--;
                } else {
                    resendBtn.textContent = 'Resend OTP';
                    resendBtn.disabled = false;
                    isClickable = true;
                    clearInterval(countdown);
                }
            }, 1000); // Update every 1 second
        }
    }

    resendBtn.addEventListener('click', () => {
        startCountdown();
        // Define the CSRF token
        var csrfToken = '{{ csrf_token() }}';

        // Add the CSRF token to the request headers
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        // Send the AJAX request
        $.ajax({
            url: "{{ route('user.resend-otp') }}",
            type: 'POST',
            dataType: 'json',
            success: function(response) {
                var verifyText = response.message;
                Swal.fire({
                    icon: 'success',
                    text: verifyText,
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
            },
            error: function(xhr, status, error) {
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
                                toast.addEventListener('mouseenter', Swal
                                    .stopTimer);
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer);
                            }
                        });
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        text: 'An error occurred, please try again later',
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer);
                            toast.addEventListener('mouseleave', Swal.resumeTimer);
                        }
                    });
                }
            }
        });




    });

    loginBtn.addEventListener('click', () => {
        startCountdown();
    });
</script>
@endsection