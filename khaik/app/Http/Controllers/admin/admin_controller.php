<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\tbl_admin;
use App\Models\tbl_report;
use App\Models\tbl_restaurant;
use App\Models\tbl_restaurant_owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class admin_controller extends Controller
{

    public function index()
    {
        return view('admin.login');
    }



    public function store(Request $request)
    {
        $admin = new tbl_admin;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->auth_level = $request->auth_level;
        $admin->save();

        return redirect()->back();
    }




    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);



        if (Auth::guard('admins')->attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::guard('admins')->user();

            session(["admin_id" => $user->id]);

            return redirect()->route('admin_home');
        }

        return redirect()->route('admin')->with("status", "Wrong credential");
    }


    public function destroy()
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('main');
    }

    public function home()
    {

        $reports = DB::table('tbl_reports')->rightJoin('tbl_restaurants', 'tbl_restaurants.id', '=', 'tbl_reports.restaurant_id')->where('status', Null)->where('restaurant_id', '!=', null)->count();

        $data = DB::table('tbl_restaurants')->where('restaurant_complete_status', 3)->count();


        return view('admin.home', [
            'reports' => $reports,
            'restaurants' => $data
        ]);
    }


    public function aprove()
    {
        $data = DB::table('tbl_restaurants')->where('restaurant_complete_status', 3)->get();

        return view('admin.aprove', [
            'data' => $data,
        ]);
    }



    public function aprove_accept(Request $request)
    {
        $restaurant = tbl_restaurant::find($request->restaurant_id);
        $restaurant->restaurant_complete_status = 4;
        $restaurant->save();
        return redirect()->back();
    }

    public function denied(Request $request)
    {
        $validated =
            $request->validate([
                'restaurant_reason' => 'required',
            ]);
        $restaurant = tbl_restaurant::find($request->restaurant_id);
        $restaurant->restaurant_complete_status = 1;

        $restaurant->save();

        $url = 'https://fcm.googleapis.com/fcm/send';
        $FcmToken =
            tbl_restaurant_owner::whereNotNull('fcm_token')->pluck('fcm_token')->all();

        $serverKey = env('FCM_SERVER_KEY');



        $data = [
            "registration_ids" => $FcmToken,
            "notification" => [
                "title" => "Restaurant Dissaprove",
                "body" => $request->restaurant_reason,
            ]
        ];
        $encodedData = json_encode($data);

        $headers = [
            'Authorization:key=' . $serverKey,
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);

        // Execute post
        $result = curl_exec($ch);

        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }


        curl_close($ch);



        return redirect()->back();
    }

    public function report_index()
    {
        $data = DB::table('tbl_reports')->rightJoin('tbl_restaurants', 'tbl_restaurants.id', '=', 'tbl_reports.restaurant_id')->where('status', Null)->where('restaurant_id', '!=', null)->get(['tbl_reports.id', 'restaurant_id', 'restaurant_name', 'reason', 'status']);

        return view('admin.report', [
            'data' => $data,
        ]);
    }

    public function report_solve(Request $request)
    {

        $user = tbl_report::find($request->report_id);
        $user->status = 1;
        $user->save();

        return redirect()->back();
    }

    public function add_user()
    {
        $admin_id = session('admin_id');
        $data = DB::table('tbl_admins')->where('id', '!=', $admin_id)->get(['id', 'email', 'auth_level']);

        return view('admin.account', [
            'data' => $data
        ]);
    }

    public function delete_user(Request $request)

    {
        if ($request->auth_level < 1) {
            $user = tbl_admin::find($request->admin_id);
            $user->delete();

            return redirect()->back();
        }

        return redirect()->route('admin_adduser');
    }

    public function index_notification()
    {
        return view('admin.notification');
    }
}
