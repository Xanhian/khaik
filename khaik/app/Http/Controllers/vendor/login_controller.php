<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class login_controller extends Controller
{
    public function index()
    {
        return view('vendor.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);



        if (Auth::guard('vendors')->attempt($credentials)) {
            $request->session()->regenerate();


            $owner = Auth::guard('vendors')->user();

            $restaurant_id = DB::table('tbl_restaurants')->where('owner_id', $owner->id)->get();


            session([
                'owners_id' => $owner->id,
                'owners_name' => $owner->name,
                'owners_lastname' => $owner->lastname,
                'owners_phonenumber' => $owner->phonenumber,
                'owners_email' => $owner->email,
                'owners_restaurant' => $restaurant_id[0]->id,
                'owners_restaurant_name' => $restaurant_id[0]->restaurant_name,
            ]);


            return redirect()->route('vendor_home');
        }

        return redirect()->route('login_vendor')->with("status", "Wrong credential");
    }
}
