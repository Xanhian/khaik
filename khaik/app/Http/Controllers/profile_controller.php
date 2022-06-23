<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profile_controller extends Controller
{
    public function index()
    {



        return view('profile');
    }
}
