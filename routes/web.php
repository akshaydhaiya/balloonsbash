<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('main');
});

Route::view('index.html','main');
Route::view('/about.html','about');
Route::view('/product.html','products');
Route::view('/gallery.html','gallery');



Route::view('/contact.html','contact');
Route::post('/contactus','App\Http\Controllers\ContactController@store');

Route::view('/demo','demo');
