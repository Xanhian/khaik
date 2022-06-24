<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\Models\tbl_article_like;
use App\Models\tbl_user;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class user_controller extends Controller
{
    public function index()
    {
        return view('signup');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'phonenumber' => 'required',
            'email' => 'required|unique:tbl_restaurant_owners',
            'password' => 'required',
            'repassword' => 'required|same:password',
        ]);

        $user = new tbl_user;
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->phonenumber = $request->phonenumber;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;

        $user->save();

        auth('users')->login($user);
        return view('main');
    }

    public function login_index()
    {
        return view('login');
    }

    public function login_request(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        if (Auth::guard('users')->attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::guard('users')->user();

            session([
                'user_id' => $user->id,
                'user_name' => $user->name,
                'user_lastname' => $user->lastname,
                'user_phonenumber' => $user->phonenumber,
                'user_email' => $user->email,

            ]);

            return redirect()->route('profile');
        }



        return redirect()->route('user_login')->with("status", "Wrong credential");
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('main');
    }

    public function edit(Request $request)
    {
        $user_id = Session('user_id');
        $edit_user = tbl_user::find($user_id);

        if (isset($request->name)) {
            if ($request->name !== $edit_user->name) {
                $edit_user->name = $request->name;
            }
        }

        if (isset($request->lastname)) {
            if ($request->lastname !== $edit_user->lastname) {
                $edit_user->lastname = $request->lastname;
            }
        }
        if (isset($request->mobilenumber)) {
            if ($request->mobilenumber !== $edit_user->phonenumber) {
                $edit_user->phonenumber = $request->mobilenumber;
            }
        }
        if (isset($request->email)) {
            if ($request->email !== $edit_user->email) {
                $edit_user->email = $request->email;
            }
        }

        $edit_user->save();
        return redirect()->route('profile');
    }


    public function article_like()
    {
        $user_id = Session('user_id');

        $article_like = new tbl_article_like;
        $article_like->user_id = $user_id;
        $article_like->article_id = $request->article_id;
        $article_like->status_id = 1;
    }
}
