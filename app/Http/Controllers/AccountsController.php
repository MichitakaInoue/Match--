<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Account;
use App\User;
use Log;


class AccountsController extends Controller
{
    public function account(Request $request){//post送信したときこのactionが呼ばれる

        Log::debug('AccountsController: アカウント更新(account)アクションです。postリクエストがあります');

        $user = Auth::user();//あなたのuser情報
        $postName = $request['name'];//リクエストのname
        $postEmail = $request['email'];//リクエストのemail
        $dbName = $user['name'];//最初に登録したname
        $dbEmail = $user['email'];//最初に登録したemail
        $dbComment = $user['comment'];
    
        Log::debug('AccountsController: アカウント更新、リクエスト(post)の内容(新しいname): '.print_r($postName, true));
        Log::debug('AccountsController: アカウント更新、リクエスト(post)の内容(新しいemail): '.print_r($postEmail, true));
        Log::debug('AccountsController: アカウント更新、DBに保存しているname: '.print_r($dbName, true));
        Log::debug('AccountsController: アカウント更新、DBに保存しているEmail: '.print_r($dbEmail, true));
        
        Log::debug('AccountsController: バリデーションします');

        $request->validate([
            'name'=>'string|max:20',
            'email'=>'email',
            'comment'=>'max:50'
        ]);
        
        Log::debug('バリデーションokでした');
    
        $user->fill($request->all())->save();
        
        Log::debug('AccountsController: DBに挿入完了しました。topにリダイレクトさせます');
        return redirect('/routetop');
      }
}
