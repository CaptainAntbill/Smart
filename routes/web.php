<?php

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
    return view('home');
});

Route::resource('brand', 'BrandController');
Route::resource('spectrum', 'SpectrumController');
Route::resource('provider', 'ProviderController');
Route::resource('phone', 'PhoneController');
Route::resource('purchase', 'PurchaseController');
Route::resource('accessory', 'AccessoryController');
Route::resource('purchase_accessory', 'PurchaseAccessoryController');
Route::resource('client', 'ClientController');
