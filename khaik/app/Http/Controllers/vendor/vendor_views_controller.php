<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class vendor_views_controller extends Controller
{
    public function home()
    {
        $restaurant_id = session()->get('owners_restaurant');

        $restaurant_info = DB::table('tbl_restaurants')->where('id', $restaurant_id)->get();

        $restaurant_favorite_count = DB::table('tbl_users_favorites')->where('restaurant_id', $restaurant_id)->where('favorite_status_id', 1)->count();
        $articles = DB::table('tbl_articles')->where('restaurant_id', $restaurant_id)->get();

        $article_like_count = array();

        $message = DB::table('tbl_restaurants_messages')->where('restaurant_id', $restaurant_id)->latest()->get();


        foreach ($articles as $article) {
            $like_count = DB::table('tbl_article_likes')->where('article_id', $article->id)->where('like_status', 1)->count();
            $article_like_count[$article->id] = $like_count;
        }

        if (count($article_like_count) !== 0) {
            $most_liked_item_count = max(array_values($article_like_count));

            $most_liked_item_id = array_search($most_liked_item_count, $article_like_count);
            $most_liked_article = DB::table('tbl_articles')->where('id',  $most_liked_item_id)->get('article_name');
            $most_liked_article =
                $most_liked_article[0]->article_name;
            return view('vendor.home', [
                'restaurant_info' => $restaurant_info,
                'favorite_count' => $restaurant_favorite_count,
                'like_article' => $most_liked_article,
                'messages' => $message,
            ]);
        }


        $most_liked_article = "Nothing";


        return view('vendor.home', [
            'restaurant_info' => $restaurant_info,
            'favorite_count' => $restaurant_favorite_count,
            'like_article' => $most_liked_article,
            'messages' => $message,

        ]);
    }

    public function restaurant_time()
    {
        return view('vendor.restaurant');
    }
}
