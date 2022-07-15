<?php

namespace App\Http\Controllers;

use App\Models\tbl_restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\Models\tbl_restaurant_owner;
use Illuminate\Contracts\Session\Session;
use PhpParser\Node\Stmt\Echo_;

class main_controller extends Controller
{
    //
    public function index()
    {


        $restaurants = DB::table('tbl_restaurants')->get(['id', 'restaurant_opening_time', 'restaurant_closing_time']);
        $today = strtolower(date("l"));
        $time_now = time();



        $restaurant_state = array();


        $today_state = array();

        foreach ($restaurants as $restaurant) {
            $time_open = json_decode($restaurant->restaurant_opening_time);
            $restaurant_state_open[$restaurant->id] = (array) $time_open;
            $time_close = json_decode($restaurant->restaurant_closing_time);
            $restaurant_state_close[$restaurant->id] = (array) $time_close;
        }

        foreach ($restaurants as $restaurant) {

            foreach ($restaurant_state_open[$restaurant->id] as $day) {
                $key_day = $restaurant_state_open[$restaurant->id];
                $key_day_close = $restaurant_state_close[$restaurant->id];



                switch ($key_day[$today]) {
                    case $key_day["sunday"]:
                        if ($key_day["sunday"] == "closed") {
                            $today_state[$restaurant->id] = "closed";
                        } else {
                            if ($time_now >= strtotime($key_day["sunday"]) && $time_now <= strtotime($key_day_close["sunday"])) {
                                $today_state[$restaurant->id] = "open";
                            } else {
                                $today_state[$restaurant->id] = "closed";
                            }
                        }
                        break;
                    case $key_day["monday"]:
                        if ($key_day["monday"] == "closed") {
                            $today_state[$restaurant->id] = "closed";
                        } else {
                            if ($time_now >= strtotime($key_day["monday"]) && $time_now <= strtotime($key_day_close["monday"])) {
                                $today_state[$restaurant->id] = "open";
                            } else {
                                $today_state[$restaurant->id] = "closed";
                            }
                        }
                        break;
                    case $key_day["tuesday"]:
                        if ($key_day["tuesday"] == "closed") {
                            $today_state[$restaurant->id] = "closed";
                        } else {

                            if ($time_now >= strtotime($key_day["tuesday"]) && $time_now <= strtotime($key_day_close["tuesday"])) {
                                $today_state[$restaurant->id] = "open";
                            } else {
                                $today_state[$restaurant->id] = "closed";
                            }
                        }
                        break;
                    case $key_day["wednesday"]:
                        if ($key_day["wednesday"] == "closed") {
                            $today_state[$restaurant->id] = "closed";
                        } else {
                            if ($time_now >= strtotime($key_day["wednesday"]) && $time_now <= strtotime($key_day_close["wednesday"])) {
                                $today_state[$restaurant->id] = "open";
                            } else {
                                $today_state[$restaurant->id] = "closed";
                            }
                        }
                        break;
                    case $key_day["thursday"]:
                        if ($key_day["thursday"] == "closed") {
                            $today_state[$restaurant->id] = "closed";
                        } else {
                            if ($time_now >= strtotime($key_day["thursday"]) && $time_now <= strtotime($key_day_close["thursday"])) {
                                $today_state[$restaurant->id] = "open";
                            } else {
                                $today_state[$restaurant->id] = "closed";
                            }
                        }
                        break;
                    case $key_day["friday"]:
                        if ($key_day["friday"] == "closed") {
                            $today_state[$restaurant->id] = "closed";
                        } else {
                            if ($time_now >= strtotime($key_day["friday"]) && $time_now <= strtotime($key_day_close["friday"])) {
                                $today_state[$restaurant->id] = "open";
                            } else {
                                $today_state[$restaurant->id] = "closed";
                            }
                        }
                        break;
                    case $key_day["saturday"]:
                        if ($key_day["saturday"] == "closed") {
                            $today_state[$restaurant->id] = "closed";
                        } else {
                            if ($time_now >= strtotime($key_day["saturday"]) && $time_now <= strtotime($key_day_close["saturday"])) {
                                $today_state[$restaurant->id] = "open";
                            } else {
                                $today_state[$restaurant->id] = "closed";
                            }
                        }
                        break;
                }
            }
        }

        $categories =  DB::table('tbl_restaurants_categories')->get();

        $new_restaurants = DB::table('tbl_restaurants')->latest()->take(5)->get(); //Discovery view

        $restaurants_by_category = array();



        foreach ($categories as $category) {
            $restaurants = DB::table('tbl_restaurants_connected_categories')->rightJoin('tbl_restaurants', 'tbl_restaurants_connected_categories.restaurant_id', '=', 'tbl_restaurants.id')->where('restaurant_category_id', $category->id)->where('restaurant_complete_status', 4)->latest('tbl_restaurants.created_at')->take(3)->get();
            $restaurants_by_category[$category->id] = $restaurants;
        }




        return view('main', [
            'categories' => $categories,
            'restaurants_info' => $restaurants_by_category,
            'discover_restaurants' => $new_restaurants,
            'today_state' => $today_state
        ]);
    }

    public function filter_index()
    {
        return view('search');
    }
    public function filter(Request $request)
    {


        switch ($request->filter) {
            case 'location':


                $lat = $request->lat;
                $lon = $request->lon;

                if (empty($lat) || empty($lon)) {
                    return view('search', [
                        'results' => 'nothing',

                        'status' => 'Please allow location access to search for restaurants',
                    ]);

                    return redirect()->back()->with([
                        'results' => 'nothing',

                        'status' => 'Please allow location access to search for restaurants',
                    ]);
                }

                $data = DB::table("tbl_restaurants")->rightJoin('tbl_articles', 'tbl_restaurants.id', '=', 'tbl_articles.restaurant_id')
                    ->select(
                        'tbl_restaurants.id',
                        'restaurant_name',
                        'restaurant_header_photo',
                        'restaurant_addres',
                        'total_views',
                        'article_name',
                        'article_img',
                        DB::raw("tbl_restaurants.id as restaurant_id, 6371 * acos(cos(radians(" . $lat . ")) 
                * cos(radians(tbl_restaurants.restaurant_latitude)) 
                * cos(radians(tbl_restaurants.restaurant_longitude) - radians(" . $lon . ")) 
                + sin(radians(" . $lat . ")) 
                * sin(radians(tbl_restaurants.restaurant_latitude))) AS distance")
                    )->groupBy('restaurant_id', 'restaurant_name', 'restaurant_header_photo', 'restaurant_addres')->where('restaurant_complete_status', 4)->orderBy('distance', 'asc')->get();

                $articles = DB::table("tbl_restaurants")->rightJoin('tbl_articles', 'tbl_restaurants.id', '=', 'tbl_articles.restaurant_id')
                    ->select(
                        'tbl_restaurants.id',
                        'restaurant_name',
                        'restaurant_header_photo',
                        'restaurant_addres',
                        'total_views',
                        'article_name',
                        'article_img',
                        DB::raw("tbl_restaurants.id as restaurant_id, 6371 * acos(cos(radians(" . $lat . ")) 
                * cos(radians(tbl_restaurants.restaurant_latitude)) 
                * cos(radians(tbl_restaurants.restaurant_longitude) - radians(" . $lon . ")) 
                + sin(radians(" . $lat . ")) 
                * sin(radians(tbl_restaurants.restaurant_latitude))) AS distance")
                    )->groupBy('tbl_articles.id')->get();
                $distance = array();
                foreach ($data as $date) {
                    if ($date->distance !== null) {
                        if ($date->distance <= 20) {
                            $distance[$date->id] = ["state" => "nearby", "distance" => $date->distance];
                        } else {
                            $distance[$date->id] =
                                ["state" => "far", "distance" => $date->distance];
                        }
                    } else {
                        $distance[$date->id] = "error";
                    }
                }



                return view('search', [
                    'results' => $data,
                    'articles' => $articles,
                    'distance' => $distance
                ]);
                break;

            case 'favorite':
                $data = DB::table('tbl_users_favorites')->rightJoin('tbl_restaurants', 'tbl_users_favorites.restaurant_id', '=', 'tbl_restaurants.id')->rightJoin('tbl_articles', 'tbl_restaurants.id', '=', 'tbl_articles.restaurant_id')->select('tbl_users_favorites.restaurant_id', 'restaurant_name', 'restaurant_header_photo', 'restaurant_addres', 'article_name', 'article_img', DB::raw('count(*) as total'))->where('restaurant_complete_status', 4)->where('favorite_status_id', 1)->groupBy('restaurant_id', 'restaurant_name', 'restaurant_header_photo', 'restaurant_addres')->orderBy('total', 'desc')->get();


                $articles =
                    DB::table('tbl_users_favorites')->rightJoin('tbl_restaurants', 'tbl_users_favorites.restaurant_id', '=', 'tbl_restaurants.id')->rightJoin('tbl_articles', 'tbl_restaurants.id', '=', 'tbl_articles.restaurant_id')->select('tbl_users_favorites.restaurant_id', 'restaurant_name', 'restaurant_header_photo', 'restaurant_addres', 'article_name', 'article_img', DB::raw('count(*) as total'))->where('restaurant_complete_status', 4)->where('favorite_status_id', 1)->groupBy('tbl_articles.id')->orderBy('total', 'desc')->get();


                return view('search', [
                    'results' => $data,
                    'articles' => $articles

                ]);


                break;


            case 'visited':
                $data = DB::table('tbl_restaurants')->rightJoin('tbl_articles', 'tbl_restaurants.id', '=', 'tbl_articles.restaurant_id')->orderBy('total_views', 'desc')->where('restaurant_complete_status', 4)->select('tbl_restaurants.id', 'restaurant_name', 'restaurant_header_photo', 'restaurant_addres', 'total_views', 'article_name', 'article_img', DB::raw('tbl_restaurants.id as restaurant_id'))->groupBy('restaurant_id', 'restaurant_name', 'restaurant_header_photo', 'restaurant_addres')->get(['*']);

                $articles = DB::table('tbl_restaurants')->rightJoin('tbl_articles', 'tbl_restaurants.id', '=', 'tbl_articles.restaurant_id')->orderBy('total_views', 'desc')->select('tbl_restaurants.id', 'restaurant_name', 'restaurant_header_photo', 'restaurant_addres', 'total_views', 'article_name', 'article_img', DB::raw('tbl_restaurants.id as restaurant_id'))->where('restaurant_complete_status', 4)->groupBy('tbl_articles.id')->get(['*']);




                return view('search', [
                    'results' => $data,
                    'articles' => $articles,
                    'filter' => 'visit'

                ]);

                break;
        }
        if ($request->search !== null) {
            $restaurants = DB::table(
                'tbl_restaurants_connected_categories'
            )->rightJoin('tbl_restaurants', 'tbl_restaurants_connected_categories.restaurant_id', '=', 'tbl_restaurants.id')
                ->rightJoin('tbl_restaurants_categories', 'tbl_restaurants_connected_categories.restaurant_category_id', '=', 'tbl_restaurants_categories.id')->rightJoin('tbl_articles', 'tbl_restaurants.id', '=', 'tbl_articles.restaurant_id')->rightJoin('tbl_article_options', 'tbl_articles.article_option', '=', 'tbl_article_options.id')
                ->groupBy('tbl_restaurants_connected_categories.restaurant_id')
                ->where('restaurant_name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('restaurant_category_name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('article_name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('option_name', 'LIKE', '%' . $request->search . '%')
                ->where('restaurant_complete_status', 4)
                ->get(['restaurant_name', 'tbl_restaurants_connected_categories.restaurant_id', 'restaurant_addres', 'restaurant_header_photo', 'article_name', 'article_img']);

            $articles =
                DB::table('tbl_restaurants_connected_categories')
                ->rightJoin('tbl_restaurants', 'tbl_restaurants_connected_categories.restaurant_id', '=', 'tbl_restaurants.id')->rightJoin('tbl_restaurants_categories', 'tbl_restaurants_connected_categories.restaurant_category_id', '=', 'tbl_restaurants_categories.id')
                ->rightJoin('tbl_articles', 'tbl_restaurants.id', '=', 'tbl_articles.restaurant_id')
                ->rightJoin('tbl_article_options', 'tbl_articles.article_option', '=', 'tbl_article_options.id')
                ->where('restaurant_name', 'LIKE', '%' . $request->search . '%')
                ->orWhere(
                    'restaurant_category_name',
                    'LIKE',
                    '%' . $request->search . '%'
                )->orWhere('article_name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('option_name', 'LIKE', '%' . $request->search . '%')
                ->where('restaurant_complete_status', 4)
                ->groupBy('tbl_articles.id')

                ->get(['restaurant_name', 'tbl_restaurants_connected_categories.restaurant_id', 'restaurant_addres', 'restaurant_header_photo', 'article_name', 'article_img']);




            if (count($restaurants) == 0) {
                $restaurants = "nothing";
            }


            return view('search', [
                'results' => $restaurants,
                'articles' => $articles
            ]);
        } else {

            $restaurants = "nothing";

            return view('search', [
                'results' => $restaurants
            ]);
        }
    }

    public function test()
    {
        return view('test');
    }

    public function camera()
    {
        return view('test');
    }
}
