<?php

namespace App\Http\Controllers;

use App\Models\tbl_users_favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class favorite_controller extends Controller
{
    public function index()
    {
        $user_id = Session('user_id');
        $favorite_list = DB::table('tbl_users_favorites')->leftJoin('tbl_restaurants', 'restaurant_id', '=', 'tbl_restaurants.id')->where('user_id', $user_id)->where('favorite_status_id', 1)->get();



        return view('favorite', [
            'favorite_restaurants' => $favorite_list,
        ]);
    }

    public function favorite(Request $request)
    {
        $user_id = Session('user_id');
        $favorite_restaurant_check = tbl_users_favorite::where('restaurant_id', $request->restaurant_id)->orderBy('created_at', 'desc')->first();


        if (isset($favorite_restaurant_check)) {
            if ($favorite_restaurant_check->favorite_status_id == 1) {
                return redirect()->route('main');
            }
        } else {
            $favorite_restaurant = new tbl_users_favorite;
            $favorite_restaurant->user_id = $user_id;
            $favorite_restaurant->restaurant_id = $request->restaurant_id;
            $favorite_restaurant->favorite_status_id = 1;
            $favorite_restaurant->save();
        }



        return redirect()->route('main');
    }

    public function favorite_delete(Request $request)
    {
        $user_id = Session('user_id');
        $favorite_restaurant = tbl_users_favorite::firstWhere('restaurant_id', $request->restaurant_id);
        $favorite_restaurant->favorite_status_id = 2;
        $favorite_restaurant->save();

        return redirect()->route('favorite');
    }
}
