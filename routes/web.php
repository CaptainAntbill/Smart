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
    return view('welcome');
});

Route::resource('brand', 'BrandController');
Route::resource('spectrum', 'SpectrumController');
Route::resource('provider', 'ProviderController');
Route::resource('phone', 'PhoneController');
Route::resource('purchase', 'PurchaseController');
