<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use App\Models\tbl_article_option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class article_option_controller extends Controller
{
    public function index()
    {
    }

    public function store(Request $request)
    {
        $restaurant_id = Session()->get('owners_restaurant');

        $validated = $request->validate([
            ''
        ]);

        $article_option = new tbl_article_option;
        $article_option->restaurant_id = $restaurant_id;
        $article_option->option_name = $request->option_name;
        $article_option->safe();
    }

    public function edit(Request $request)
    {
    }

    public function delete(Request $request)
    {
        $article = tbl_article_option::find($request->article_id);
        File::delete($article->article_img);

        $article->delete();

        return redirect()->route('vendor_menu')->with('status', 'Food deleted succesfully!');
    }
}
