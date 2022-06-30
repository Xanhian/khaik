<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use App\Models\tbl_restaurant;
use App\Models\tbl_restaurant_owner;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class vendor_profile_controller extends Controller
{
    public function  index()
    {

        return view('vendor.profile');
    }

    public function edit(Request $request)
    {
        $owners_id = Session::get("owners_id");
        $owner = tbl_restaurant_owner::find($owners_id);

        if (isset($request->name)) {
            if ($owner->name !== $request->name) {
                $owner->name = $request->name;
            }
        }
        if (isset($request->lastname)) {
            if ($owner->lastname !== $request->lastname) {
                $owner->lastname = $request->lastname;
            }
        }
        if (isset($request->mobilenumber)) {
            if ($owner->mobilenumber !== $request->mobilenumber) {
                $owner->mobilenumber = $request->mobilenumber;
            }
        }
        if (isset($request->email)) {
            if ($owner->email !== $request->email) {
                $owner->email = $request->email;
            }
        }
        //$owner->save();
        return redirect()->route('vendor.profile');
    }

    public function logout()
    {
        $restaurant_id = session("owners_restaurant");
        $location = tbl_restaurant::find($restaurant_id);
        $location->restaurant_custom_status = null;
        $location->save();

        Session::flush();

        Auth::logout();

        return redirect()->route('login_vendor');
    }
}
