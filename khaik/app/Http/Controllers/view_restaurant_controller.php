<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_restaurant;
use Illuminate\Support\Facades\DB;

class view_restaurant_controller extends Controller
{
    public function index(Request $request, $restaurant_id)

    {
        $restaurant_info = DB::table('tbl_restaurants')->where('id', '=', $restaurant_id)->get();

        $menu_options = DB::table('tbl_article_options')->where('restaurant_id', $restaurant_id)->get();

        $menu_items = DB::table('tbl_article_prices')->rightJoin('tbl_articles', 'tbl_articles.id', '=', 'tbl_article_prices.article_id')->where('restaurant_id', $restaurant_id)->get();


        $menu_articles_data = array();
        $menu_articles_option_data = array();




        foreach ($menu_options as $menu_option) {
            $articles = DB::table('tbl_article_prices')->rightJoin('tbl_articles', 'tbl_articles.id', '=', 'tbl_article_prices.article_id')->where('restaurant_id', $restaurant_id)->where('article_option', $menu_option->option_name)->get();
            $menu_articles_data[$menu_option->option_name] = $articles;

            foreach ($articles as $article) {

                $menu_option_items = DB::table('tbl_article_prices')->rightJoin('tbl_articles', 'tbl_articles.id', '=', 'tbl_article_prices.article_id')->where('article_item_relations', $article->id)->get(['article_id', 'article_name', 'article_price_number', 'article_price_currency']);
                $menu_articles_option_data[$article->id] = $menu_option_items;
            }
        }

        $open_time = json_decode($restaurant_info[0]->restaurant_opening_time);
        $close_time = json_decode($restaurant_info[0]->restaurant_closing_time);


        $name =   tbl_restaurant::find($restaurant_id)->increment('total_views', 1);




        return view(
            'restaurant',
            [
                'restaurant_info' => $restaurant_info,
                'menu_main_options' => $menu_options,
                'menu_articles' => $menu_articles_data,
                'menu_articles_option' =>   $menu_articles_option_data,

                'restaurant_open_time' => $open_time,
                'restaurant_close_time' => $close_time



            ]
        );
    }
}
