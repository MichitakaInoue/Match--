<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Log;

class showAccountsController extends Controller
{
    public function showAccount(){//todo あとで消す

      Log::debug('showAccountsController:　アカウント情報抽出,フォーム内容保持(showAccount)アクションです');

      $user = Auth::user();
      $dbName = $user['name'];//最初に登録したname
      $dbEmail = $user['email'];//最初に登録したemail
      $dbComment = $user['comment'];
      $dbPic = $user->pic;

      Log::debug('あなたの画像：'.print_r($dbPic, true));
      Log::debug('showAccountsController: あなたの名前(DB)'.print_r($dbName, true));
      Log::debug('showAccountsController: あなたのemail(DB)'.print_r($dbEmail, true));
      return view('Match.account', ['user'=>$user, 'dbName'=>$dbName, 'dbEmail'=>$dbEmail, 'dbComment'=>$dbComment]);//view側へ渡すデータ
    }   
}
