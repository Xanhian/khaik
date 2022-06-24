<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use App\Models\tbl_article;
use App\Models\tbl_article_option;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\tbl_restaurant;
use App\Models\tbl_restaurants_connected_category;
use App\Models\tbl_restaurant_owner;
use Illuminate\Support\Facades\Hash;
use LaravelQRCode\Facades\QRCode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class restaurants_controller extends Controller
{

    public function index()
    {

        $restaurants_category = DB::table('tbl_restaurants_categories')->get();



        return view('vendor.restaurantsignup', ['restaurants_category' => $restaurants_category]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'phonenumber' => 'required',
            'email' => 'required|unique:tbl_restaurant_owners',
            'password' => 'required',
            'repassword' => 'required|same:password',



            'restaurant_name' => 'required|max:100',
            'restaurant_description' => 'required|max:255',
            'restaurant_phonenumber' => 'required|numeric',
            'restaurant_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'restaurant_addres' => 'required|max:100',
            'restaurant_place' => 'required|max:100',
            'restaurant_country' => 'required|max:100',

            'restaurant_category' => 'required',
            'facebook_link' => 'required|url'


        ]);


        $restaurant_header_photo_name_convert = str_replace(' ', '', $request->file('restaurant_image')->getClientOriginalName());
        $restaurant_header_photo_name = time() . '_' .  date('YmdHi') . $restaurant_header_photo_name_convert;
        $restaurant_header_photo_path = "storage/" . $request->file('restaurant_image')->storeAs('images', $restaurant_header_photo_name, 'public');

        $restaurant_qr_path = 'storage/restaurants_qr/' . time() . '.png';

        $owner = new tbl_restaurant_owner;
        $owner->name = $request->firstname;
        $owner->lastname = $request->lastname;
        $owner->password =  Hash::make($request->password);
        $owner->phonenumber = $request->phonenumber;
        $owner->email = $request->email;
        $owner->save();


        $owners_info_script = DB::table('tbl_restaurant_owners')->where('name', '=', $request->firstname)->where('lastname', $request->lastname)->where('email', $request->email)->get();







        $create_restaurant = new tbl_restaurant;
        $create_restaurant->owner_id = $owners_info_script[0]->id;
        $create_restaurant->restaurant_name = $request->restaurant_name;
        $create_restaurant->restaurant_description = $request->restaurant_description;
        $create_restaurant->restaurant_phonenumber = $request->restaurant_phonenumber;
        $create_restaurant->restaurant_header_photo = $restaurant_header_photo_path;
        $create_restaurant->restaurant_addres = $request->restaurant_addres;
        $create_restaurant->restaurant_place = $request->restaurant_place;
        $create_restaurant->restaurant_country = $request->restaurant_country;
        $create_restaurant->restaurant_facebook_link = $request->facebook_link;
        $create_restaurant->restaurant_Qr = $restaurant_qr_path;
        $create_restaurant->restaurant_complete_status = 1;
        $create_restaurant->total_views = 0;

        $create_restaurant->save();



        $restaurant_id_get = DB::table('tbl_restaurants')->where('owner_id', '=', $owners_info_script[0]->id)->where('restaurant_name', '=', $request->restaurant_name)
            ->pluck('id');
        $restaurant_id =
            $restaurant_id_get[0];
        session(['owners_restaurant' => $restaurant_id]);






        foreach ($request->restaurant_category as $restaurant_category) {

            $restaurants_categories = new tbl_restaurants_connected_category;
            $restaurants_categories->restaurant_id = $restaurant_id;
            $restaurants_categories->restaurant_category_id =
                $restaurant_category;
            $restaurants_categories->save();
        }

        $default_menu_option = array('Main Course', 'Snacks', 'Drinks');
        for ($i = 0; $i < 3; $i++) {

            $restaurant_menu_option = new tbl_article_option;
            $restaurant_menu_option->restaurant_id = $restaurant_id;
            $restaurant_menu_option->option_name = $default_menu_option[$i];
            $restaurant_menu_option->save();
        }



        $url = URL::to("/");
        $restaurant_link = str_replace(' ', '_', $request->restaurant_name);
        $restaurant_qr = QRCode::url($url . '/restaurant/' . $restaurant_id  . '/' .  $restaurant_link)->setSize(10)->setMargin(2)->setErrorCorrectionLevel('H')->setOutfile($restaurant_qr_path)->png();


        auth('vendors')->login($owner);
        return redirect()->route('vendor_home')->with('status', 'Your restaurant has been created succesfully!');
    }

    public function edit(Request $request)
    {
        $restaurant_id = session('owners_restaurant');
        $edit_restaurant = tbl_restaurant::find($restaurant_id);



        if ($edit_restaurant->restaurant_name !== $request->edit_restaurant_name) {
            $edit_restaurant->restaurant_name = $request->edit_restaurant_name;
        }

        if ($edit_restaurant->restaurant_description !== $request->edit_restaurant_description) {

            $edit_restaurant->restaurant_description = $request->edit_restaurant_description;
        }

        if (isset($request->edit_restaurant_phonenumber)) {
            if ($edit_restaurant->restaurant_phonenumber !== $request->edit_restaurant_phonenumber) {
                $edit_restaurant->restaurant_phonenumber = $request->edit_restaurant_phonenumber;
            }
        }


        if ($edit_restaurant->restaurant_addres !== $request->edit_restaurant_addres) {
            $edit_restaurant->restaurant_addres = $request->edit_restaurant_addres;
        }
        if ($edit_restaurant->restaurant_place !== $request->edit_restaurant_place) {
            $edit_restaurant->restaurant_place = $request->edit_restaurant_place;
        }

        if (isset($request->edit_restaurant_country)) {
            if ($edit_restaurant->restaurant_country !== $request->edit_restaurant_country) {
                $edit_restaurant->restaurant_country = $request->edit_restaurant_country;
            }
        }





        $edit_restaurant->save();
    }
}
