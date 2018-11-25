<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class VerifyOTPController extends Controller
{
    public function showOTPVerificationPage(){

        return view('verify-otp');
    }

    public function verify(Request $request){

        //dd(request('OTP'));
        if($request->otp == Cache::get('OTP')){

            Auth::user()->update(['eVerified' => true]);
            //return response(null,201);
            return redirect('home');
        }
        return 'Not Ok';
    }
}
