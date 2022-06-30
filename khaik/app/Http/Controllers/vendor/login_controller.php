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
                'owners_verified_status' => $restaurant_id[0]->restaurant_complete_status,
            ]);

            switch ($restaurant_id[0]->restaurant_complete_status) {
                case 1:
                    $status = "Please go to Quick change to set up location and opening & closing time to get verified";

                    break;
                case 2:
                    $status = "Please go to menu to set up your menu to be verified and display your restaurant";

                    break;
                case 3:
                    if (empty($restaurant_id[0]->restaurant_opening_time) || empty($restaurant_id[0]->restaurant_closing_time)) {
                        $status = "Please set up your opening & closing time in quick change";
                    } elseif (empty($restaurant_id[0]->restaurant_longitude) || empty($restaurant_id[0]->restaurant_latitude)) {
                        $status = "Please set up your location in quick change";
                    }
                    $status = "";


                    break;

                case 4:

                    $status = "Welcome back!!";


                    break;
            }



            return redirect()->route('vendor_home')->with('status', $status);
        }

        return redirect()->route('login_vendor')->with("status", "Wrong credential");
    }
}
