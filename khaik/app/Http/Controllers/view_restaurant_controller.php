<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_restaurant;
use Illuminate\Support\Facades\DB;

class view_restaurant_controller extends Controller
{
    public function index(Request $request, $restaurant_id, $restaurant_name)
    {
        $restaurant_info = DB::table('tbl_restaurants')->where('id', '=', $restaurant_id)->get();

        return view('restaurant', ['restaurant_info' => $restaurant_info]);
    }
}
