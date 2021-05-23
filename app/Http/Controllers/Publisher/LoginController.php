<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('publisher.login');
    }
    public function loginByUsernameForm()
    {
        return view('publisher.login.username');
    }
    public function loginWithUsername(Request $request)
    {
        $request->validate([
            'username' => 'required|max:50',
            'password' => 'required|max:50'
        ]);

        if(Auth::guard('publisher')->attempt(['username' => $request->username, 'password' => $request->password]))
        {
            return "You are login successfully";
        }else{
            echo "<p style='color:red'>failed to login in the system</p>";
        }
    }
    //Register by phone number
    public function loginByphoneForm()
    {
        return view('publisher.login.phone');
    }
    public function loginWithphone(Request $request)
    {
        $request->validate([
            'phone' => 'required|max:50',
            'password' => 'required|max:50'
        ]);

        if(Auth::guard('publisher')->attempt(['phone' => $request->phone, 'password' => $request->password]))
        {
            return "You are login successfully by phone";
        }else{
            echo "<p style='color:red'>failed to login in the system</p>";
        }
    }
    public function loginByFacebook()
    {
        // $user = Socialite::driver('facebook')->user();

        // dd($user);

    }
}
