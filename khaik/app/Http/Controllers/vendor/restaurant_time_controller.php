<?php


namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;

use App\Models\tbl_restaurant;
use Illuminate\Http\Request;

class restaurant_time_controller extends Controller
{
    public function save_time(Request $request)
    {
        $validated = $request->validate([
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
        ]);


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
        $restaurant_id = session()->get('owners_restaurant');



        $restaurant = tbl_restaurant::find($restaurant_id);
        $restaurant->restaurant_opening_time = $json_opening_data;
        $restaurant->restaurant_closing_time = $json_closing_data;
        $restaurant->save();

        return view('vendor.home');
    }
}
