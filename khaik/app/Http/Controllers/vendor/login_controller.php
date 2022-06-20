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


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();


            $id = Auth::id();
            $owner_info = DB::table('tbl_restaurant_owners')->where('id', $id)->get();
            $restaurant_id = DB::table('tbl_restaurants')->where('owner_id', $id)->get();

            session([
                'owners_id' => $id,
                'owners_name' => $owner_info[0]->name,
                'owners_lastname' => $owner_info[0]->lastname,
                'owners_phonenumber' => $owner_info[0]->phonenumber,
                'owners_email' => $owner_info[0]->email,
                'owners_restaurant' => $restaurant_id[0]->id,
                'owners_restaurant_name' => $restaurant_id[0]->restaurant_name,
            ]);


            return redirect()->route('vendor_home');
        }

        return redirect()->route('login_vendor')->with("status", "Wrong credential");
    }
}
