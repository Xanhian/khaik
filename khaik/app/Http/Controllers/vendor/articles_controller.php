<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use App\Models\tbl_article;
use App\Models\tbl_article_price;
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

        $article_category = DB::table('tbl_article_categories')->get();




        $menu_head_items = DB::table('tbl_article_prices')->rightJoin('tbl_articles', 'tbl_articles.id', '=', 'tbl_article_prices.article_id')->where('restaurant_id', $restaurant_id)->where('article_item_relations', NULL)->get();

        // $menu_snack_items = DB::table('tbl_article_prices')->rightJoin('tbl_articles', 'tbl_articles.id', '=', 'tbl_article_prices.article_id')->where('restaurant_id', $restaurant_id)->where('article_option', 'Snacks')->where('article_item_relations', NULL)->get();


        // $menu_drink_items = DB::table('tbl_articles')->where('restaurant_id', $restaurant_id[0]->id)->where('article_option', 'Drinks')->where('article_item_relations', NULL)->get();


        $menu_option_data = array();
        // $menu_snack_option_data = array();




        // foreach ($menu_head_items as $menu_head_item) {
        //     $menu_option_items = DB::table('tbl_article_prices')->rightJoin('tbl_articles', 'tbl_articles.id', '=', 'tbl_article_prices.article_id')->where('article_item_relations', $menu_head_item->id)->get(['article_id', 'article_name', 'article_price_number', 'article_price_currency']);
        //     $menu_option_data[$menu_head_item->id] = $menu_option_items;
        // }

        foreach ($menu_head_items as $menu_head_item) {
            $menu_option_items = DB::table('tbl_article_prices')->rightJoin('tbl_articles', 'tbl_articles.id', '=', 'tbl_article_prices.article_id')->where('article_item_relations', $menu_head_item->id)->get(['article_id', 'article_name', 'article_price_number', 'article_price_currency']);
            $menu_option_data[$menu_head_item->id] = $menu_option_items;
        }

        foreach ($menu_head_items as $menu_head_item) {
            if ($menu_head_item->article_option == 'Snacks') {
                $menu_option_data[$menu_head_item->id] = $menu_head_item;
            }
        }

        return $menu_option_data[$menu_head_item->id]->article_name;


        // foreach ($menu_snack_items as $menu_snack_item) {
        //     $menu_snack_option_items = DB::table('tbl_article_prices')->rightJoin('tbl_articles', 'tbl_articles.id', '=', 'tbl_article_prices.article_id')->where('article_item_relations', $menu_snack_item->id)->get(['article_id', 'article_name', 'article_price_number', 'article_price_currency']);
        //     $menu_snack_option_data[$menu_snack_item->id] = $menu_snack_option_items;
        // }

        // foreach ($menu_snack_items as $menu_snack_item) {
        //     $menu_snack_option_items = DB::table('tbl_articles')->where('article_item_relations', $menu_snack_item->id)->pluck('article_name');
        //     $menu_snack_option_data[$menu_snack_item->id] = $menu_snack_option_items;
        // }





        // return view(
        //     'vendor.menu',
        //     [
        //         'article_category' => $article_category,
        //         'menu_items' => $menu_head_items,
        //         'menu_option_items' => $menu_option_data,
        //         'menu_snack_items' => $menu_snack_items,
        //         'menu_snack_option_items' => $menu_snack_option_data



        //     ]
        // );
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

            'article_category' => 'required'
        ]);

        $article_photo_name_convert = str_replace(' ', '', $request->file('article_photo')->getClientOriginalName());
        $article_photo_name = time() . '_' .  date('YmdHi') . $article_photo_name_convert;
        $article_photo_path = "storage/" . $request->file('article_photo')->storeAs('articles', $article_photo_name, 'public');


        $article = new tbl_article;
        $article->restaurant_id = $request->restaurant_id;
        $article->article_category_id = $request->article_category;
        $article->article_name = $request->article_name;
        $article->article_description = $request->article_description;
        $article->article_img =
            $article_photo_path;
        $article->article_option = $request->menu_category;
        $article->save();



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
        if ($article_price->article_price_number !==  $request->article_price) {
            $article_price->article_price_number = $request->article_price;
        }



        $article->save();
        $article_price->save();
        $article_options = tbl_article::where('article_item_relations', $request->article_id)->get();


        $i = 0;
        if (isset($request->article_option_nam)) {
            foreach ($request->article_option_name as $article_option_test) {


                $validated = $request->validate([

                    'article_option_price.*' => 'required',

                ]);


                if (isset($request->article_option_id[$i])) {
                    $article_options_test = tbl_article::updateOrCreate(
                        ['id' => $request->article_option_id[$i]],
                        ['article_name' => $article_option_test]
                    );
                    $article_options_currency = tbl_article_price::updateOrCreate(
                        ['article_id' => $request->article_option_id[$i]],
                        [
                            'article_price_number' => $request->article_option_price[$i],
                            'article_price_currency' => $request->article_option_currency[$i]
                        ]
                    );
                } elseif (!isset($request->article_option_id[$i])) {




                    $article = new tbl_article;
                    $article->restaurant_id = $request->restaurant_id;
                    $article->article_category_id = $request->article_category;
                    $article->article_name
                        = $article_option_test;
                    $article->article_description = $request->article_description;
                    $article->article_img = "oa";
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
}
