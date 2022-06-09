<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\restaurant_owner_controller;
use App\Http\Controllers\restaurants_controller;
use App\Http\Controllers\view_restaurant_controller;
use App\Http\Controllers\articles_controller;
use App\Http\Controllers\deal_controller;
use App\Http\Controllers\favorite_controller;
use App\Http\Controllers\login_controller;
use App\Http\Controllers\profile_controller;
use App\Http\Controllers\vendor_views_controller;
use App\Http\Controllers\restaurant_time_controller;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('vendor')->group(function () {
    Route::get('/login', [login_controller::class, 'index'])->name('login_vendor');
    Route::get('/register', [restaurants_controller::class, 'index'])->name('register_vendor');
    Route::get('/menu', [articles_controller::class, 'index'])->name('vendor_menu');
    Route::get('/home', [vendor_views_controller::class, 'home'])->name('vendor_home');
    Route::get('/time', [vendor_views_controller::class, 'restaurant_time'])->name('vendor_restaurant');

    Route::post('/menu', [articles_controller::class, 'store'])->name('add_article');
    Route::post('/save_time', [restaurant_time_controller::class, 'save_time'])->name('save_time');
});



Route::get('/', [restaurant_owner_controller::class, 'index'])->name('main');
Route::get('/deals', [deal_controller::class, 'index'])->name('deals');
Route::get('/favorite', [favorite_controller::class, 'index'])->name('favorite');
Route::get('/profile', [profile_controller::class, 'index'])->name('profile');

Route::get('/restaurant/{restaurant_id}', [view_restaurant_controller::class, 'index']);


Route::post('', [restaurants_controller::class, 'store'])->name('save_restaurant');

Route::post('/vendor/login', [login_controller::class, 'login'])->name('login_request');


Route::patch('/editmenu', [articles_controller::class, 'edit'])->name('edit_article');
