<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use App\Models\tbl_restaurants_deals;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class deal_controller extends Controller
{
    public function index()
    {

        $deals = DB::table('tbl_restaurants_deals')->get();
        return view('vendor.deal', [
            'deals' => $deals
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'deal_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'deal_name' => 'required',
            'deal_description' => 'required'
        ]);

        $deal_photo_name_convert = str_replace(' ', '', $request->file('deal_img')->getClientOriginalName());
        $deal_photo_name = time() . '_' .  date('YmdHi') . $deal_photo_name_convert;
        $deal_photo_path = "storage/" . $request->file('deal_img')->storeAs('deals', $deal_photo_name, 'public');

        $restaurant_id = Session::get('owners_restaurant');

        $deal = new tbl_restaurants_deals;
        $deal->restaurant_id = $restaurant_id;
        $deal->deal_photo = $deal_photo_path;
        $deal->deal_name = $request->deal_name;
        $deal->deal_description = $request->deal_description;
        $deal->save();


        return redirect()->route('vendor_deals');
    }

    public function edit(Request $request)
    {

        $edit_deal = tbl_restaurants_deals::find($request->deal_id);
        if ($edit_deal->deal_name !== $request->edit_deal_name) {
            $edit_deal->deal_name = $request->edit_deal_name;
        }
        if ($edit_deal->deal_description !== $request->edit_description) {
            $edit_deal->deal_description = $request->edit_description;
        }

        $edit_deal->save();

        return redirect()->route('vendor_deals');
    }
}
