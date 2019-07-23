<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Log;
use App\User;
use App\Account;

Log::debug('MatchsControler:　統括コントローラーです');




class MatchsController extends Controller
{
  



  public function showAccount(){//todo あとで消す
    Log::debug('MatchsController:　アカウント情報抽出,フォーム内容保持(showAccount)アクションです');
    // $user = Auth::user()->get();
    // Log::debug('MatchsController: 今ログインしているユーザーの情報について'.print_r($user, true));
    $user = Auth::user();
    // Log::debug('MatchsController: 取得しているユーザー情報'.print_r($user, true));
    $name = $user['name'];
    $email = $user['email'];
    Log::debug('MatchsController: あなたの名前'.print_r($name, true));
    Log::debug('MatchsController: あなたのemail'.print_r($email, true));
    return view('Match.account', ['user'=>$user]);
  }

  
  






}
