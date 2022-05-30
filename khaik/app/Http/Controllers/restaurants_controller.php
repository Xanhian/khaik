<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\tbl_restaurant;
use LaravelQRCode\Facades\QRCode;

class restaurants_controller extends Controller
{
    //
    public function index()
    {
        $restaurants_category = DB::table('tbl_restaurants_categories')->get();
        $owners_info_script = DB::table('tbl_restaurant_owners')->where('name', '=', 'Fanny')->get();

        session(['owners_id' => $owners_info_script[0]->id]);
        session(['owners_name' => $owners_info_script[0]->name]);
        session(['owners_email' => $owners_info_script[0]->email]);


        return view('vendor.restaurant', ['restaurants_category' => $restaurants_category]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'restaurant_name' => 'required|max:100',
            'restaurant_description' => 'required|max:255',
            'restaurant_phonenumber' => 'required|numeric',
            'restaurant_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'restaurant_addres' => 'required|max:100',
            'restaurant_place' => 'required|max:100',
            'restaurant_country' => 'required|max:100',


            'sunday.*' => 'required',
            'sunday.open' => 'required_without_all:sunday.default,closed|exclude_if:sunday.default,closed',
            'sunday.close' => 'required_without_all:sunday.default,closed|exclude_if:sunday.default,closed',

            'monday.*' => 'required',
            'monday.open' => 'required_without_all:monday.default,closed|exclude_if:monday.default,closed',
            'monday.close' => 'required_without_all:monday.default,closed|exclude_if:monday.default,closed',

            'tuesday.*' => 'required',
            'tuesday.open' => 'required_without_all:tuesday.default,closed|exclude_if:tuesday.default,closed',
            'tuesday.close' => 'required_without_all:tuesday.default,closed|exclude_if:tuesday.default,closed',

            'wednesday.*' => 'required',
            'wednesday.open' => 'required_without_all:wednesday.default,closed|exclude_if:wednesday.default,closed',
            'wednesday.close' => 'required_without_all:wednesday.default,closed|exclude_if:wednesday.default,closed',
            'thursday.*' => 'required',
            'thursday.open' => 'required_without_all:thursday.default,closed|exclude_if:thursday.default,closed',
            'thursday.close' => 'required_without_all:thursday.default,closed|exclude_if:thursday.default,closed',
            'friday.*' => 'required',
            'friday.open' => 'required_without_all:friday.default,closed|exclude_if:friday.default,closed',
            'friday.close' => 'required_without_all:friday.default,closed|exclude_if:friday.default,closed',
            'saturday.*' => 'required',
            'saturday.open' => 'required_without_all:saturday.default,closed|exclude_if:saturday.default,closed',
            'saturday.close' => 'required_without_all:saturday.default,closed|exclude_if:saturday.default,closed',


            'restaurant_category' => 'required',
            'facebook_link' => 'required|url'





        ], [
            'sunday.open.required_without_all' => ':attribute field can not be empty or you must check the closed box.',
            'sunday.close.required_without_all' => ':attribute field can not be empty or you must check the closed box.',   'monday.open.required_without_all' => ':attribute field can not be empty or you must check the closed box.',
            'monday.close.required_without_all' => ':attribute field can not be empty or you must check the closed box.',   'tuesday.open.required_without_all' => ':attribute field can not be empty or you must check the closed box.',
            'tuesday.close.required_without_all' => ':attribute field can not be empty or you must check the closed box.',   'wednesday.open.required_without_all' => ':attribute field can not be empty or you must check the closed box.',
            'wednesday.close.required_without_all' => ':attribute field can not be empty or you must check the closed box.',
            'thursday.open.required_without_all' => ':attribute field can not be empty or you must check the closed box.',
            'thursday.close.required_without_all' => ':attribute field can not be empty or you must check the closed box.',
            'friday.open.required_without_all' => ':attribute field can not be empty or you must check the closed box.',
            'friday.close.required_without_all' => ':attribute field can not be empty or you must check the closed box.',
            'saturday.open.required_without_all' => ':attribute field can not be empty or you must check the closed box.',
            'saturday.close.required_without_all' => ':attribute field can not be empty or you must check the closed box.',
            'facebook_link.url' => 'The :attribute must be a valid url ! *Do not forget the https://.....',


        ]);


        $restaurant_header_photo_name_convert = str_replace(' ', '', $request->file('restaurant_image')->getClientOriginalName());
        $restaurant_header_photo_name = time() . '_' .  date('YmdHi') . $restaurant_header_photo_name_convert;
        $restaurant_header_photo_path = "storage/" . $request->file('restaurant_image')->storeAs('images', $restaurant_header_photo_name, 'public');


        if (isset($validated['sunday']['default'])) {
            $sunday_open = $validated['sunday']['default'];
            $sunday_close = $validated['sunday']['default'];
        } else {
            $sunday_open = $request->sunday['open'];
            $sunday_close = $request->sunday['close'];
        }
        if (isset($validated['monday']['default'])) {
            $monday_open = $validated['monday']['default'];
            $monday_close = $validated['monday']['default'];
        } else {
            $monday_open = $request->monday['open'];
            $monday_close = $request->monday['close'];
        }
        if (isset($validated['tuesday']['default'])) {
            $tuesday_open = $validated['tuesday']['default'];
            $tuesday_close = $validated['tuesday']['default'];
        } else {
            $tuesday_open = $request->tuesday['open'];
            $tuesday_close = $request->tuesday['close'];
        }
        if (isset($validated['wednesday']['default'])) {
            $wednesday_open = $validated['wednesday']['default'];
            $wednesday_close = $validated['wednesday']['default'];
        } else {
            $wednesday_open = $request->wednesday['open'];
            $wednesday_close = $request->wednesday['close'];
        }
        if (isset($validated['thursday']['default'])) {
            $thursday_open = $validated['thursday']['default'];
            $thursday_close = $validated['thursday']['default'];
        } else {
            $thursday_open = $request->thursday['open'];
            $thursday_close = $request->thursday['close'];
        }
        if (isset($validated['friday']['default'])) {
            $friday_open = $validated['friday']['default'];
            $friday_close = $validated['friday']['default'];
        } else {
            $friday_open = $request->friday['open'];
            $friday_close = $request->friday['close'];
        }
        if (isset($validated['saturday']['default'])) {
            $saturday_open = $validated['saturday']['default'];
            $saturday_close = $validated['saturday']['default'];
        } else {
            $saturday_open = $request->saturday['open'];
            $saturday_close = $request->saturday['close'];
        }

        $opening_data = [
            'sunday' => $sunday_open,
            'monday' => $monday_open,
            'tuesday' => $tuesday_open,
            'wednesday' => $wednesday_open,
            'thursday' => $thursday_open,
            'friday' => $friday_open,
            'saturday' => $saturday_open,
        ];

        $closing_data = [
            'sunday' => $sunday_close,
            'monday' => $monday_close,
            'tuesday' => $tuesday_close,
            'wednesday' => $wednesday_close,
            'thursday' => $thursday_close,
            'friday' => $friday_close,
            'saturday' => $saturday_close,
        ];

        $json_opening_data = json_encode($opening_data);
        $json_closing_data = json_encode($closing_data);

        $restaurant_qr_path = 'storage/restaurants_qr/' . time() . '.png';



        $create_restaurant = new tbl_restaurant;
        $create_restaurant->owner_id = $request->owners_id;
        $create_restaurant->restaurant_name = $request->restaurant_name;
        $create_restaurant->restaurant_description = $request->restaurant_description;
        $create_restaurant->restaurant_phonenumber = $request->restaurant_phonenumber;
        $create_restaurant->restaurant_header_photo = $restaurant_header_photo_path;
        $create_restaurant->restaurant_addres = $request->restaurant_addres;
        $create_restaurant->restaurant_place = $request->restaurant_place;
        $create_restaurant->restaurant_country = $request->restaurant_country;
        $create_restaurant->restaurant_longitude = $request->longitude;
        $create_restaurant->restaurant_latitude = $request->latitude;
        $create_restaurant->restaurant_opening_time = $json_opening_data;
        $create_restaurant->restaurant_closing_time = $json_closing_data;
        $create_restaurant->restaurant_facebook_link = $request->facebook_link;
        $create_restaurant->restaurant_Qr = $restaurant_qr_path;
        $create_restaurant->save();


        $restaurant_id = DB::table('tbl_restaurants')->where('owner_id', '=', '3')->where('restaurant_name', '=', $request->restaurant_name)->get('id');

        $restaurant_link = str_replace(' ', '_', $request->restaurant_name);
        $restaurant_qr = QRCode::url('khaik.com/restaurant/' . $restaurant_id[0]->id . '/' .  $restaurant_link)->setSize(10)->setMargin(2)->setErrorCorrectionLevel('H')->setOutfile($restaurant_qr_path)->png();

        return redirect('addrestaurant')->with('status', 'Your restaurant has been created succesfully!');
    }
}
