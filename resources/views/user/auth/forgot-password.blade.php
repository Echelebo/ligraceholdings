@extends('layouts.auth')

@section('contents')
<div class="wrapper-content-sign-in p-0">


    <div class="col-md-8 offset-md-8 text-left side_signing_full">

        <h3>Forgot your password:</h3><br>




        <form method="post" action="{{ route('user.forgot-password.send') }}" id="registerForm" class="form-signin1 full_side text-white ">
            @csrf

            <span>
                <h3 style="color:crimson;text-align:center"></h3>
            </span>
            <span>
                <h3 style="color:green;text-align:center"></h3>
            </span>
            <h2 class="tex-black mb-4 font-weight-bold">Forgot Password</h2>
            <label style="color:black" class="font-weight-bold">Email</label>
            <input type="email" name="email" id="email" value="" class="form-control" size="30" autofocus="autofocus" placeholder="Email">
            <span style="color:crimson">@error('email')
                {{ $message }}
                @enderror</span>
            <br>


            <button type="submit" id="registerBtn" class="btn btn-lg btn-primary btn-round" style="background-color: #5770e8;">Send</button>
            <br>
            <p class="mt-3"><a href="/login" class="text-white" >Back to login!</a>
            </p>

        </form>

        <form method="post" action="{{ route('user.forgot-password.validate') }}" id="verifyForm" class="hidden form-signin1 full_side text-white">
            @csrf

            <img style="width:40%;height:10%" src="https://altsfolio.org/trust/images/lkog-removebg-preview.png">
            <span>
                <h3 style="color:crimson;text-align:center"></h3>
            </span>
            <span>
                <h3 style="color:green;text-align:center"></h3>
            </span>
            <h2 class="tex-black mb-4 font-weight-bold">Reset password</h2>
            <label style="color:black" class="font-weight-bold">OTP</label>
            <input type="number" name="otp" id="otp" value="" class="form-control" size="30" autofocus="autofocus" placeholder="OTP">
            <span style="color:crimson">@error('otp')
                {{ $message }}
                @enderror</span>
            <br>

            <label style="color:black" class="font-weight-bold">Password</label>
            <input type="password" name="password" id="password" value="" class="form-control" size="30" autofocus="autofocus" placeholder="Password">
            <span style="color:crimson">@error('password')
                {{ $message }}
                @enderror</span>
            <br>

            <label style="color:black" class="font-weight-bold">Confirm password</label>
            <input type="password" name="password_confirmation" id="confirm-password" value="" class="form-control" size="30" autofocus="autofocus" placeholder="Confirm password">

            <span style="color:crimson">@error('password_confirmation')
                {{ $message }}
                @enderror</span>
            <br>
            <button type="submit" id="verifyBtn" class="btn btn-lg btn-primary btn-round" style="background-color: #5770e8;">Save</button>

            <br>
            <p class="mt-3"><a href="/login" class="text-white">Back to login</a>
            </p>

        </form>
        <br><br>

    </div>
</div>

@endsection


@section('scripts')
<script>
    $(document).ready(function() {
        $('#registerForm').submit(function(e) {
            e.preventDefault(); // Prevent default form submission

            var form = $(this);
            var formData = form.serialize(); // Serialize form data as JSON

            var clicked = $('#registerBtn');

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
                    toastNotify('success', verifyText);

                    //hide register form and display verification form
                    $('#registerForm').hide();
                    $('#verifyForm').show();

                    //update page title
                    $('#page-title').html('Set New Password');




                },
                error: function(xhr, status, error) {
                    $('#registerBtn').show();
                    var errors = xhr.responseJSON.errors;

                    if (errors) {
                        $.each(errors, function(field, messages) {
                            var fieldErrors = '';
                            $.each(messages, function(index, message) {
                                fieldErrors += message + '<br>';
                            });


                            toastNotify('error', fieldErrors);
                        });
                    } else {
                        toastNotify('error', 'An error occured, please try again later');

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
            e.preventDefault(); // Prevent default form submission

            var form = $(this);
            var formData = form.serialize(); // Serialize form data as JSON

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
                    toastNotify('success', verifyText);
                    var url = "{{ route('user.login') }}";
                    window.location.href = url;

                },
                error: function(xhr, status, error) {
                    $('#registerBtn').show();
                    var errors = xhr.responseJSON.errors;

                    if (errors) {
                        $.each(errors, function(field, messages) {
                            var fieldErrors = '';
                            $.each(messages, function(index, message) {
                                fieldErrors += message + '<br>';
                            });

                            toastNotify('error', fieldErrors);

                        });
                    } else {
                        toastNotify('error', 'An error occured, please try again later');

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