<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class view_deal_controller extends Controller
{
    public function index()
    {

        $deals = DB::table('tbl_restaurants_deals')->rightJoin('tbl_restaurants', 'tbl_restaurants_deals.restaurant_id', '=', 'tbl_restaurants.id')->where('tbl_restaurants_deals.restaurant_id', '!=', null)->latest('tbl_restaurants_deals.created_at')->get();


        return view('deal', [
            'deals' => $deals
        ]);
    }
}
