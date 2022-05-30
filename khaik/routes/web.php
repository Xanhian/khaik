<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\restaurant_owner_controller;
use App\Http\Controllers\restaurants_controller;
use App\Http\Controllers\view_restaurant_controller;
use App\Http\Controllers\articles_controller;


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


Route::get('/', [restaurant_owner_controller::class, 'getOwnerInfo']);
Route::get('/addrestaurant', [restaurants_controller::class, 'index']);
Route::get('/addmenu', [articles_controller::class, 'index']);
Route::get('/restaurant/{restaurant_id}/{restaurant_name}', [view_restaurant_controller::class, 'index']);

Route::post('', [restaurants_controller::class, 'store'])->name('save_restaurant');
