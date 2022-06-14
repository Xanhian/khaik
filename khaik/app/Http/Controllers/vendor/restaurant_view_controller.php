<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class restaurant_view_controller extends Controller
{
    public function index(Request $request, $restaurant_id)
    {
        $restaurant_info = DB::table('tbl_restaurants')->where('id', '=', $restaurant_id)->get();

        $menu_head_items = DB::table('tbl_article_prices')->rightJoin('tbl_articles', 'tbl_articles.id', '=', 'tbl_article_prices.article_id')->where('restaurant_id', $restaurant_id)->where('article_option', 'Head')->where('article_item_relations', NULL)->get();




        $menu_snack_items = DB::table('tbl_article_prices')->rightJoin('tbl_articles', 'tbl_articles.id', '=', 'tbl_article_prices.article_id')->where('restaurant_id', $restaurant_id)->where('article_option', 'Snacks')->where('article_item_relations', NULL)->get();


        // $menu_drink_items = DB::table('tbl_articles')->where('restaurant_id', $restaurant_id[0]->id)->where('article_option', 'Drinks')->where('article_item_relations', NULL)->get();


        $menu_option_data = array();
        $menu_snack_option_data = array();


        foreach ($menu_head_items as $menu_head_item) {
            $menu_option_items = DB::table('tbl_article_prices')->rightJoin('tbl_articles', 'tbl_articles.id', '=', 'tbl_article_prices.article_id')->where('article_item_relations', $menu_head_item->id)->get(['article_name', 'article_price_number', 'article_price_currency']);
            $menu_option_data[$menu_head_item->id] = $menu_option_items;
        }

        foreach ($menu_snack_items as $menu_snack_item) {
            $menu_snack_option_items = DB::table('tbl_article_prices')->rightJoin('tbl_articles', 'tbl_articles.id', '=', 'tbl_article_prices.article_id')->where('article_item_relations', $menu_snack_item->id)->get(['article_name', 'article_price_number', 'article_price_currency']);
            $menu_snack_option_data[$menu_snack_item->id] = $menu_snack_option_items;
        }

        // foreach ($menu_snack_items as $menu_snack_item) {
        //     $menu_snack_option_items = DB::table('tbl_articles')->where('article_item_relations', $menu_snack_item->id)->pluck('article_name');
        //     $menu_snack_option_data[$menu_snack_item->id] = $menu_snack_option_items;
        // }

        $open_time = json_decode($restaurant_info[0]->restaurant_opening_time);
        $close_time = json_decode($restaurant_info[0]->restaurant_closing_time);





        return view(
            'vendor.restaurantview',
            [
                'restaurant_info' => $restaurant_info,
                'menu_items' => $menu_head_items,
                'menu_option_items' => $menu_option_data,
                'menu_snack_items' => $menu_snack_items,
                'menu_snack_option_items' => $menu_snack_option_data,
                'restaurant_open_time' => $open_time,
                'restaurant_close_time' => $close_time



            ]
        );
    }
}
