<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use App\Models\tbl_article;
use App\Models\tbl_article_option;
use App\Models\tbl_article_price;
use App\Models\tbl_restaurant;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class articles_controller extends Controller
{

    public function index()
    {

        $restaurant_id = session()->get('owners_restaurant');





        $menu_options = DB::table('tbl_article_options')->where('restaurant_id', $restaurant_id)->get();




        $menu_articles_data = array();
        $menu_articles_option_data = array();




        foreach ($menu_options as $menu_option) {
            $articles = DB::table('tbl_article_prices')->rightJoin('tbl_articles', 'tbl_articles.id', '=', 'tbl_article_prices.article_id')->where('restaurant_id', $restaurant_id)->where('article_option', $menu_option->id)->get();
            $menu_articles_data[$menu_option->option_name] = $articles;

            foreach ($articles as $article) {

                $menu_option_items = DB::table('tbl_article_prices')->rightJoin('tbl_articles', 'tbl_articles.id', '=', 'tbl_article_prices.article_id')->where('article_item_relations', $article->id)->get(['article_id', 'article_name', 'article_price_number', 'article_price_currency']);
                $menu_articles_option_data[$article->id] = $menu_option_items;
            }
        }


        return view(
            'vendor.menu',
            [


                'menu_main_options' => $menu_options,
                'menu_articles' => $menu_articles_data,
                'menu_articles_option' =>   $menu_articles_option_data




            ]
        );
    }

    public function store_option(Request $request)
    {
        $restaurant_id = Session()->get('owners_restaurant');

        $validated = $request->validate([
            'option_name' => 'required',
        ]);

        $article_option = new tbl_article_option;
        $article_option->restaurant_id = $restaurant_id;
        $article_option->option_name = $request->option_name;
        $article_option->save();
        return redirect()->route('vendor_menu')->with('status', 'Food deleted succesfully!');
    }

    public function store(Request $request)
    {




        $validated = $request->validate([
            'article_name' => 'required|max:100',
            'article_description' => 'required|max:255',
            'article_name' => 'required|max:100',
            'article_price' => 'required',
            'article_photo'
            => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'article_option.*' => 'required_without:article_option.*',
            'article_option_price.*' => 'required',


        ]);

        $article_photo_name_convert = str_replace(' ', '', $request->file('article_photo')->getClientOriginalName());
        $article_photo_name = time() . '_' .  date('YmdHi') . $article_photo_name_convert;
        $article_photo_path = "storage/" . $request->file('article_photo')->storeAs('articles', $article_photo_name, 'public');
        $restaurant_id = Session()->get('owners_restaurant');

        $article = new tbl_article;
        $article->restaurant_id = $restaurant_id;

        $article->article_name = $request->article_name;
        $article->article_description = $request->article_description;
        $article->article_img =
            $article_photo_path;
        $article->article_option = $request->menu_category;
        $article->save();

        $restaurant_id = Session()->get('owners_restaurant');
        $restaurant = tbl_restaurant::find($restaurant_id);
        if ($restaurant->restaurant_complete_status < 4) {
            $restaurant->restaurant_complete_status = 3;
        }

        $restaurant->save();

        $article_id = DB::table('tbl_articles')->where('article_name', '=', $request->article_name)->where('restaurant_id', '=', $request->restaurant_id)->where('article_img', '=', $article_photo_path)->get('id');


        $article_price = new tbl_article_price;
        $article_price->article_id =
            $article_id[0]->id;
        $article_price->article_price_number
            = $request->article_price;
        $article_price->article_price_currency = $request->article_currency;
        $article_price->save();




        $i = 0;
        if (isset($request->article_option_name)) {
            foreach ($request->article_option_name as $option_name) {

                $article = new tbl_article;
                $article->restaurant_id = $request->restaurant_id;
                $article->article_category_id = $request->article_category;
                $article->article_name = $option_name;
                $article->article_description = $request->article_description;
                $article->article_img = $article_photo_path;
                $article->article_option = $request->menu_category;
                $article->article_item_relations = $article_id[0]->id;
                $article->save();

                $article_option_id = DB::table('tbl_articles')->where('article_item_relations', '=', $article_id[0]->id)->get('id');

                $article_price = new tbl_article_price;
                $article_price->article_id = $article_option_id[$i]->id;
                $article_price->article_price_number = $request->article_option_price[$i];
                $article_price->article_price_currency = $request->article_option_currency[$i];
                $article_price->save();

                $i++;
            }
        }

        return redirect()->route('vendor_menu')->with('status', 'Food added succesfully!');
    }

    public function edit(Request $request)
    {
        $article = tbl_article::find($request->article_id);

        $article_price = tbl_article_price::firstWhere('article_id', $request->article_id);

        if (isset($request->article_name)) {
            if ($article->article_name !== $request->article_name) {
                $article->article_name = $request->article_name;
            }
        }


        if ($article->article_description !== $request->article_description) {
            $article->article_description = $request->article_description;
        }
        if (isset($request->article_photo)) {
            echo ("article chaneg");
            $article_photo_name_convert = str_replace(' ', '', $request->file('article_photo')->getClientOriginalName());
            $article_photo_name = time() . '_' .  date('YmdHi') . $article_photo_name_convert;
            $article_photo_path = "storage/" . $request->file('article_photo')->storeAs('articles', $article_photo_name, 'public');
            $article->article_img = $article_photo_path;
        }

        if (isset($request->menu_category)) {
            if ($article->article_option !== $request->menu_category) {
                $article->article_option = $request->menu_category;
            }
        }
        if ($article_price->article_price_number !==  $request->article_price) {
            $article_price->article_price_number = $request->article_price;
        }



        $article->save();
        $article_price->save();

        $i = 0;

        if (isset($request->article_option_name)) {
            foreach ($request->article_option_name as $article_option_test) {


                $validated = $request->validate([

                    'article_option_price.*' => 'required',

                ]);


                if (isset($request->article_option_id[$i])) {
                    $article_options_edit = tbl_article::updateOrCreate(
                        ['id' => $request->article_option_id[$i]],
                        [
                            'article_name' => $article_option_test,
                            'article_option' => $request->menu_category,




                        ]
                    );



                    $article_options_currency = tbl_article_price::updateOrCreate(
                        ['article_id' => $request->article_option_id[$i]],
                        [
                            'article_price_currency' => $request->article_option_currency[$i],

                            'article_price_number' => $request->article_option_price[$i]
                        ]
                    );
                } elseif (!isset($request->article_option_id[$i])) {




                    $article = new tbl_article;
                    $article->restaurant_id = $request->restaurant_id;
                    $article->article_category_id = $request->article_category;
                    $article->article_name
                        = $article_option_test;
                    $article->article_description = $request->article_description;
                    $article->article_img = NULL;
                    $article->article_option = $request->menu_category;
                    $article->article_item_relations =
                        $request->article_id;
                    $article->save();

                    $article_option_id = DB::table('tbl_articles')->where('article_item_relations', '=', $request->article_id)->get('id');

                    $article_price = new tbl_article_price;
                    $article_price->article_id = $article_option_id[$i]->id;
                    $article_price->article_price_number = $request->article_option_price[$i];
                    $article_price->article_price_currency = $request->article_option_currency[$i];
                    $article_price->save();
                }

                $i++;
            }
        }


        return redirect()->route('vendor_menu')->with('status', 'Food changed succesfully!');
    }

    public function delete(Request $request)
    {
        $article = tbl_article::find($request->article_id);
        File::delete($article->article_img);

        $article->delete();

        return redirect()->route('vendor_menu')->with('status', 'Food deleted succesfully!');
    }

    public function delete_option(Request $request)
    {
        $article_option = tbl_article_option::find($request->option_id);
        $article_option->delete();

        return redirect()->route('vendor_menu')->with('status', 'Option deleted succesfully!');
    }

    public function option_edit(Request $request)
    {
        $option = tbl_article_option::find($request->option_id);
        $option->option_name = $request->option_name;
        $option->save();

        return redirect()->back()->with('status', 'Option name changed succesfully');
    }
}
