<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\Models\tbl_restaurant_owner;
use Illuminate\Contracts\Session\Session;

class main_controller extends Controller
{
    //
    public function index()
    {


        $restaurants_info = DB::table('tbl_restaurants')->get();

        return view('main', ['restaurants_info' => $restaurants_info]);
    }

    public function filter(Request $request)
    {
    }
}
