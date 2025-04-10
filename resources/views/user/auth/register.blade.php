@extends('layouts.auth')

@section('contents')
<div class="wrapper-content-sign-in p-0">



    <div class="col-md-8 offset-md-8 text-left side_signing_full">




        <script language=javascript>
            function checkform() {
                if (document.regform.fullname.value == '') {
                    alert("Please enter your full name!");
                    document.regform.fullname.focus();
                    return false;
                }


                if (document.regform.username.value == '') {
                    alert("Please enter your username!");
                    document.regform.username.focus();
                    return false;
                }
                if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
                    alert("For username you should use English letters and digits only!");
                    document.regform.username.focus();
                    return false;
                }
                if (document.regform.password.value == '') {
                    alert("Please enter your password!");
                    document.regform.password.focus();
                    return false;
                }
                if (document.regform.password.value != document.regform.password2.value) {
                    alert("Please check your password!");
                    document.regform.password2.focus();
                    return false;
                }


                if (document.regform.email.value == '') {
                    alert("Please enter your e-mail address!");
                    document.regform.email.focus();
                    return false;
                }
                if (document.regform.email.value != document.regform.email1.value) {
                    alert("Please retype your e-mail!");
                    document.regform.email.focus();
                    return false;
                }

                for (i in document.regform.elements) {
                    f = document.regform.elements[i];
                    if (f.name && f.name.match(/^pay_account/)) {
                        if (f.value == '') continue;
                        var notice = f.getAttribute('data-validate-notice');
                        var invalid = 0;
                        if (f.getAttribute('data-validate') == 'regexp') {
                            var re = new RegExp(f.getAttribute('data-validate-regexp'));
                            if (!f.value.match(re)) {
                                invalid = 1;
                            }
                        } else if (f.getAttribute('data-validate') == 'email') {
                            var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
                            if (!f.value.match(re)) {
                                invalid = 1;
                            }
                        }
                        if (invalid) {
                            alert('Invalid account format. Expected ' + notice);
                            f.focus();
                            return false;
                        }
                    }
                }

                if (document.regform.agree.checked == false) {
                    alert("You have to agree with the Terms and Conditions!");
                    return false;
                }

                return true;
            }

            function IsNumeric(sText) {
                var ValidChars = "0123456789";
                var IsNumber = true;
                var Char;
                if (sText == '') return false;
                for (i = 0; i < sText.length && IsNumber == true; i++) {
                    Char = sText.charAt(i);
                    if (ValidChars.indexOf(Char) == -1) {
                        IsNumber = false;
                    }
                }
                return IsNumber;
            }
        </script>




        <form method="post" action="{{ route('user.register-validate') }}" id="registerForm" class="form-signin1 full_side text-white">

            @csrf

            <img style="width:40%;height:10%" src="https://altsfolio.org/trust/images/lkog-removebg-preview.png">
            <span>
                <h3 style="color:crimson;text-align:center"></h3>
            </span>
            <span>
                <h3 style="color:green;text-align:center"></h3>
            </span>
            <h2 class="tex-black mb-4">Register</h2>

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



@section('scripts')
<script>
    (function() {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const ref = urlParams.get('ref')
        document.getElementById('upline').value = ref;
    })();
</script>

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

                    if (verify == 1) {
                        //hide register form and display verification form
                        $('#registerForm').hide();
                        $('#verifyForm').show();

                        //update page title
                        $('#page-title').html('Verify Email');
                    } else {
                        var url = '{{ route('
                        user.dashboard ') }}';
                        window.location.href = url;
                    }




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
                    var url = '{{ route('
                    user.dashboard ') }}';
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