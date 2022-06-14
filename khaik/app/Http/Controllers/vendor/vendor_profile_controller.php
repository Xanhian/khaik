<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class vendor_profile_controller extends Controller
{
    public function  index()
    {

        return view('vendor.profile');
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('login_vendor');
    }
}
