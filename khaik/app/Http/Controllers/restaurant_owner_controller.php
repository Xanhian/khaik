<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\Models\tbl_restaurant_owner;
use Illuminate\Contracts\Session\Session;

class restaurant_owner_controller extends Controller
{
    //
    public function getOwnerinfo()
    {
        // $owners_info_script = DB::table('tbl_restaurant_owners')->where('name', '=', 'Haley')->get();

        // session(['owners_id' => $owners_info_script[0]->pluck('id')]);
        // session(['owners_name' => $owners_info_script[0]->name]);


        return view('restaurant');
    }
}