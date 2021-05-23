<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registerByUsernameForm()
    {
        return view('publisher.register.username');
    }
    public function registerWithUsername(Request $request)
    {
        $request->validate([
            'username' => 'bail|required|max:30|min:3',
            'password' => 'required|confirmed|min:6|max:20'
        ]);

        Publisher::create([
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);
        $request->session()->flash('created-status');
        return redirect()->back();
    }
    //Register by phone

    public function registerByphoneForm()
    {
        return view('publisher.register.phone');
    }
    public function registerWithphone(Request $request)
    {
        $request->validate([
            'phone' => 'bail|required|max:30|min:11',
            'password' => 'required|confirmed|min:6|max:20'
        ]);

        Publisher::create([
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ]);
        $request->session()->flash('created-status');
        return redirect()->back();
    }
}
