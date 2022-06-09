<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class favorite_controller extends Controller
{
    public function index()
    {
        return view('favorite');
    }
}
