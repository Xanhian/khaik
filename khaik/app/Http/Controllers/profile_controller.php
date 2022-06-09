<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profile_controller extends Controller
{
    public function index()
    {
        return view('profile');
    }
}
