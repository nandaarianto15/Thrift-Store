<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');


Route::get('/pria', 'App\Http\Controllers\PriaController@index');


//atasan
Route::get('/kaos', function () {
    return view('produkpria.shirt');
});
Route::get('/polo', function () {
    return view('produkpria.polo');
});
Route::get('/sweater', function () {
    return view('produkpria.sweater');
});
Route::get('/kemeja', function () {
    return view('produkpria.kemeja');
});

//outwear
Route::get('/hoodie', function () {
    return view('produkpria.hoodie');
});
Route::get('/bomber', function () {
    return view('produkpria.boomber');
});
Route::get('/varsity', function () {
    return view('produkpria.varsity');
});

//pants
Route::get('/jeans', function () {
    return view('produkpria.jeans');
});
Route::get('/chino', function () {
    return view('produkpria.chino');
});
Route::get('/sweatpants', function () {
    return view('produkpria.sweatpants');
});
Route::get('/ankle', function () {
    return view('produkpria.ankle');
});
Route::get('/cargo', function () {
    return view('produkpria.cargo');
});

Route::get('/navproduk', function () {
    return view('partials.navproduk', );
});

//detail pesanan
Route::get('pesan/{id}', 'App\Http\Controllers\PesanController@index');
Route::post('pesan/{id}', 'App\Http\Controllers\PesanController@pesan');
Route::get('check-out', 'App\Http\Controllers\CheckoutController@check_out');
Route::delete('check-out/{id}', 'App\Http\Controllers\CheckoutController@delete');
Route::get('konfirmasi-check-out', 'App\Http\Controllers\CheckoutController@konfirmasi');

//QR page
Route::get('qr/{id}', 'App\Http\Controllers\QRController@index');
// Route::get('qr', 'App\Http\Controllers\QRController@detail');


//Profil page
Route::get('/profile', 'App\Http\Controllers\ProfilController@index');
Route::post('/profile', 'App\Http\Controllers\ProfilController@update');

//your shopping
Route::get('shop', 'App\Http\Controllers\ShopController@index');
Route::get('shop', 'App\Http\Controllers\ShopController@search');
Route::get('detail_barang/{id}', 'App\Http\Controllers\ShopController@detail');