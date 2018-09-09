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
})->name('welcome');

Auth::routes();

Route::get('/', 'SystemController@ping');

Route::get('/commodities', 'CommodityController@index');
Route::get('/commodities/{commodity}', 'CommodityController@show');


Route::get('/traders', 'TraderController@index');
Route::get('/trades', 'TradeController@index');