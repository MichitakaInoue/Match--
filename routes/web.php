<?php

use Illuminate\Support\Facades\Log;
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

Log::debug('Routing: ルーティングです');


Route::get('/', function () {
    return view('top/top');
});


//サンプルのルーティング
Route::get('/sample', function(){
    return view('layout/sample');
});


//モック　top
Route::get('/top', function(){
    return view('top/top');
});





Auth::routes();




Route::get('/home', 'HomeController@index')->name('top'); //ログアウトしたら　ビューはtopのものを使い回す



