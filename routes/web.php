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
    return view('Match/top');
});


//サンプルのルーティング
Route::get('/sample', function(){
    return view('layout/sample');
});



//トップページリンク
Route::get('/routetop', function(){
    return view('/Match/top');
});


//mypageリンク
Route::get('/routemypage', function(){
    return view('Match/mypage');
});
Route::get('/routemypage', 'ShowMypageController@showMypage');

//案件投稿リンク
Route::get('/routepost', function(){
    return view('Match/post');
});

//アカウンﾄ登録リンク
Route::get('/routeaccount', function(){
    return view('Match/account');
});
//カウント情報取得アクションルーティング
Route::get('/routeaccount', 'showAccountsController@showAccount');


//案件一覧表示ルーティング
Route::get('/routeindex', function(){
    return view('Match/index');
});
Route::get('/routeindex', 'ShowBillsController@showBills');




//案件投稿ルーティング
Route::post('/routepost', 'BillsController@bills')->name('Bills.bills');

//アカウント作成ルーティング
Route::post('/routeaccount', 'AccountsController@account')->name('Accounts.account');








Auth::routes();




Route::get('/home', 'HomeController@index')->name('top'); //ログアウトしたら　ビューはtopのものを使い回す




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
