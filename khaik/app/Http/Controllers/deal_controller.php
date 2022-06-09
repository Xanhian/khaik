<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deal_controller extends Controller
{
    public function index()
    {
        return view('vendor.deal');
    }
}
