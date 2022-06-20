<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class view_deal_controller extends Controller
{
    public function index()
    {

        $deals = DB::table('tbl_restaurants_deals')->get();
        return view('deal', [
            'deals' => $deals
        ]);
    }
}
