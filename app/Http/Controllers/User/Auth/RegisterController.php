<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    //registration
    public function register()
    {
        $page_title = 'Sign Up';
        //put the referral in session
        if (!session()->get('referred_by')) {
            session()->put('referred_by', request()->ref);
        }

        $ref = session()->get('referred_by');

        //flush the register data
        if (session()->get('register_data')) {
            session()->pull('register_data');
        }

        return view('user.auth.register', compact(
            'page_title',
            'ref',
        ));
    }



    //validate email
    public function registerValidate()
    {
        $request = request();
        $require_strong_password = site('strong_password');

        $request->validate([
            'email' => 'required|email|max:255|unique:users',
            'name' => 'required',
            'username' => 'required|unique:users|min:3|max:10',
            'password' => [
                'required',
                'confirmed',
                ($require_strong_password == 1 ? 'min:8' : 'min:5'),
                function ($attribute, $value, $fail) use ($require_strong_password) {
                    if ($require_strong_password == 1) {
                        if (!preg_match('/\d/', $value)) {
                            $fail('The password must contain a number');
                        } elseif (!preg_match('/[a-z]/', $value)) {
                            $fail('The password must contain a lowercase');
                        } elseif (!preg_match('/[A-Z]/', $value)) {
                            $fail('The password must contain an uppercase');
                        } elseif (!preg_match('/[\W_]/', $value)) {
                            $fail('The password must contain a symbol');
                        }
                    }
                }
            ],
        ], [
            'email.unique' => 'This email is already in use',
            'username.unique' => 'This username is already in use',
        ]);





        //log register data
        $register_data = [
            'email' => $request->email,
            'password' => $request->password,
            'name' => $request->name,
            'username' => $request->username,
            'usdt_wallet' => $request->usdt_wallet,
            'usdt_wallet2' => $request->usdt_wallet2,
            'sq' => $request->sq,
            'sa' => $request->sa,
        ];

        session()->put('register_data', $register_data);
        $msg = 'Your registration was successful';

        if (site('email_v') == 1) {
            //send otp
            $message = "We have received a registration attempt from this email address. Use the the one time passcode below to confirm your registration. If you have not made this request, you can safely ignore this email.";
            sendOtp($request->email, $message);

            $msg = 'Enter the OTP code sent to your email to complete your registration.';
        } else {
            $this->registerUser();
        }


        return response()->json(
            [
                'message' => $msg,
                'verify' => site('email_v')
            ]
        );
    }

    //verify the user
    public function registerVerify()
    {
        $request = request();
        $request->validate(
            [
                'otp' => 'required|numeric',
            ]
        );

        //check if otp is valid
        $register_data = session()->get('register_data');
        if (!validateOtp($request->otp, $register_data['email'])) {
            return response()->json(validationError('Invalid Otp Code'), 422);
        }

        $this->registerUser();

        return response()->json(['message' => 'Otp Code Verified. Redirecting to your dashboard']);
    }


    private function registerUser()
    {
        $register_data = session()->get('register_data');
        $ref = null;
        if (session()->get('referred_by')) {
            $ref = User::where('username', session()->get('referred_by'))->first();
        }

        $pass = $register_data['password'];
        //create new user instance
        $user = new User();
        $user->email = $register_data['email'];
        $user->name = $register_data['name'];
        $user->username = $register_data['username'];
        $user->usdt_wallet = $register_data['usdt_wallet'];
        $user->usdt_wallet2 = $register_data['usdt_wallet2'];
        $user->sq = $register_data['sq'];
        $user->sa = $register_data['sa'];
        $user->password = Hash::make($register_data['password']);
        $user->email_verified_at = site('email_v') == 1 ? now() : null;
        $user->referred_by = $ref->username ?? null;
        $user->save();


        //pull register data from session
        session()->pull('register_data');
        session()->pull('referred_by');

        //login the user in
       // session()->put('user', $user->id);
     //   session()->put('login-otp', 1);

        //send welcome email
        sendWelcomeEmail($user, $pass);

        //notify if referred
        if ($ref) {
            sendNewReferralEmail($ref, $user);
        }
    }
}