@extends('layouts.auth')

@section('contents')
<div class="wrapper-content-sign-in p-0">



    <div class="col-md-8 offset-md-8 text-left side_signing_full">








        <form method=post onsubmit="return checkform()" name="regform" class="form-signin1 full_side text-white"><input type="hidden" name="form_id" value="17442237502276"><input type="hidden" name="form_token" value="082f1bb1868568f0538a0599f6a40f14">
            <input type=hidden name=a value="signup">
            <input type=hidden name=action value="signup">
            <img style="width:40%;height:10%" src="altlog-removebg-preview.png">
            <span>
                <h3 style="color:crimson;text-align:center"></h3>
            </span>
            <span>
                <h3 style="color:green;text-align:center"></h3>
            </span>
            <h2 class="tex-black mb-4">Register</h2>

            <label style="color:black" class="font-weight-bold">Your Full Name</label>
            <input type=text name=fullname value="" style="color:black" class="form-control" size=30 placeholder="Full Name">
            <span style="color:crimson"></span>
            <br>
            <label style="color:black" class="font-weight-bold">Your Username</label>
            <input type=text name=username value="" style="color:black" class="form-control" size=30 placeholder="Username">
            <span style="color:crimson"></span>
            <br>
            <label style="color:black" class="font-weight-bold">Define Password</label>
            <input type=password name=password value="" style="color:black" class="form-control" size=30 placeholder="Define Password">
            <span style="color:crimson"></span>
            <br>
            <label style="color:black" class="font-weight-bold">Retype Password</label>
            <input type=password name=password2 value="" style="color:black" class="form-control" size=30 placeholder="Retype Password">
            <span style="color:crimson"></span>
            <br>


            <label style="color:black" class="font-weight-bold">Account ID</label>
            <input type=text style="color:black" class="form-control" name="pay_account[1000][Account ID]" value="">
            <span style="color:crimson"></span>
            <br>
            <label style="color:black" class="font-weight-bold">Account ID</label>
            <input type=text style="color:black" class="form-control" name="pay_account[1001][Account ID]" value="">
            <span style="color:crimson"></span>
            <br>
            <label style="color:black" class="font-weight-bold">Account ID</label>
            <input type=text style="color:black" class="form-control" name="pay_account[1002][Account ID]" value="">
            <span style="color:crimson"></span>
            <br>
            <label style="color:black" class="font-weight-bold">Your E-mail Address</label>
            <input type=text name=email value="" style="color:black" class="form-control" size=30 placeholder="E-mail Address">
            <span style="color:crimson"></span>
            <br>
            <label style="color:black" class="font-weight-bold">Retype Your E-mail</label>
            <input type=text name=email1 value="" style="color:black" class="form-control" size=30 placeholder="Retype E-mail">
            <span style="color:crimson"></span>
            <br>
            <label style="color:black" class="font-weight-bold">Secret question</label>
            <input type=text name=sq value="" style="color:black" class="form-control" size=30 placeholder="Secret question">
            <span style="color:crimson"></span>
            <br>
            <label style="color:black" class="font-weight-bold">Secret answer</label>
            <input type=text name=sa value="" style="color:black" class="form-control" size=30 placeholder="Secret answer">
            <span style="color:crimson"></span>
            <br>

            <p>Your Upline:(n/a)</p>



            <input type=checkbox name=agree value=1> I agree with <a href="?a=rules">Terms and conditions</a>
            <input type=submit value="Register" class="btn btn-lg btn-primary btn-round" style="background:#0080DB;color:white">
            </table>
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


@endsection