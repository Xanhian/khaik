<?php

namespace App\Http\Controllers;

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


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();


            $id = Auth::id();
            session(['owners_id' => $id]);
            $restaurant_id = DB::table('tbl_restaurants')->where('owner_id', $id)->get('id');

            session(['owners_restaurant' => $restaurant_id[0]->id]);


            return redirect()->route('vendor_home');
        }

        return redirect()->route('login_vendor');
    }
}
