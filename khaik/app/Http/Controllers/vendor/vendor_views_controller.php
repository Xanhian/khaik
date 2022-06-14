<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class vendor_views_controller extends Controller
{
    public function home()
    {

        return view('vendor.home');
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
