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

//top表示ルーティング
//loclahost:ポート番号 の場合　デフォルトでtopにすること
Route::get('/', function () {
    return view('Match/top');
});


//トップページリンク
Route::get('/routetop', function(){
    return view('/Match/top');
});
Route::get('/routetop', 'ShowTopController@showTop')->name('top');



//mypageリンク
Route::get('/routemypage', function(){
    return view('Match/mypage');
});
Route::get('/routemypage', 'ShowMypageController@showMypage')->name('mypage');



//案件投稿リンク
Route::get('/routepost', function(){
    return view('Match/post');
});
//案件投稿ルーティング
Route::post('/routepost', 'BillsController@bills')->name('Bills.bills');


//アカウンﾄ登録リンク
Route::get('/routeaccount', function(){
    return view('Match/account');
});
//カウント情報取得アクションルーティング
Route::get('/routeaccount', 'showAccountsController@showAccount')->name('account');
//アカウント作成ルーティング
Route::post('/routeaccount', 'AccountsController@account')->name('Accounts.account');



//案件一覧表示ルーティング
Route::get('/routeindex', function(){
    return view('Match/index');
});
Route::get('/routeindex', 'ShowBillsController@showBills')->name('index');


//案件詳細表示ルーティング
Route::get('/routeindexDetail/{id}', 'ShowIndexDetailController@showIndexDetail')->name('indexDetail');












Auth::routes();




Route::get('/home', 'HomeController@index')->name('top'); //ログアウトしたら　ビューはtopのものを使い回す




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
