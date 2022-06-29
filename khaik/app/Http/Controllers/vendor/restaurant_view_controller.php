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
        $menu_options = DB::table('tbl_article_options')->where('restaurant_id', $restaurant_id)->get();



        $menu_items = DB::table('tbl_article_prices')->rightJoin('tbl_articles', 'tbl_articles.id', '=', 'tbl_article_prices.article_id')->where('restaurant_id', $restaurant_id)->get();


        $menu_articles_data = array();
        $menu_articles_option_data = array();
        $menu_articles_likes = array();
        $user_liked_items = array();



        foreach ($menu_options as $menu_option) {
            $articles = DB::table('tbl_article_prices')->rightJoin('tbl_articles', 'tbl_articles.id', '=', 'tbl_article_prices.article_id')->where('restaurant_id', $restaurant_id)->where('article_option', $menu_option->option_name)->get();
            $menu_articles_data[$menu_option->option_name] = $articles;

            foreach ($articles as $article) {

                $menu_option_items = DB::table('tbl_article_prices')->rightJoin('tbl_articles', 'tbl_articles.id', '=', 'tbl_article_prices.article_id')->where('article_item_relations', $article->id)->get(['article_id', 'article_name', 'article_price_number', 'article_price_currency']);
                $menu_articles_option_data[$article->id] = $menu_option_items;
            }
        }

        foreach ($menu_items as $menu_item) {
            $likes =
                DB::table('tbl_article_likes')->where('article_id', $menu_item->id)->where('like_status', 1)->count();
            $menu_articles_likes[$menu_item->id] = $likes;

            if (null !== Session('user_id')) {
                $user_id = Session('user_id');
                $liked_items = DB::table('tbl_article_likes')->where('user_id', $user_id)->where('article_id', $menu_item->id)->pluck('like_status');

                if (count($liked_items) !== 0) {
                    $user_liked_items[$menu_item->id] = $liked_items;
                } else {
                    $user_liked_items[$menu_item->id][0] = 0;
                }
            }
        }
        $open_time = json_decode($restaurant_info[0]->restaurant_opening_time);
        $close_time = json_decode($restaurant_info[0]->restaurant_closing_time);






        return view(
            'vendor.restaurantview',
            [
                'restaurant_info' => $restaurant_info,
                'menu_main_options' => $menu_options,
                'menu_articles' => $menu_articles_data,
                'menu_articles_option' =>   $menu_articles_option_data,
                'menu_item_likes' => $menu_articles_likes,

                'user_liked_items' => $user_liked_items,
                'restaurant_open_time' => $open_time,
                'restaurant_close_time' => $close_time


            ]
        );
    }
}
