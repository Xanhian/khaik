<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class vendor_views_controller extends Controller
{
    public function home()
    {
        $restaurant_id = session()->get('owners_restaurant');

        $restaurant_info = DB::table('tbl_restaurants')->where('id', $restaurant_id)->get();

        return view('vendor.home', [
            'restaurant_info' => $restaurant_info,
        ]);
    }

    public function menu()
    {
        return view('vendor.menu');
    }

    public function deals()
    {
        return view('vendor.deal');
    }

    public function restaurant_time()
    {
        return view('vendor.restaurant');
    }
}
