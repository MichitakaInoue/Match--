<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Account;//モデル
use App\User;//モデル
use Log;


class AccountsController extends Controller
{
    public function account(Request $request){//post送信したときこのactionが呼ばれる

        Log::debug('AccountsController: アカウント更新(account)アクションです。postリクエストがあります');

        $user = Auth::user();//あなたのuser情報
        $postName = $request['name'];//リクエストのname
        $postEmail = $request['email'];//リクエストのemail
        $postPic = $request['pic'];//リクエストのimg
        $dbName = $user['name'];//最初に登録したname
        $dbEmail = $user['email'];//最初に登録したemail
        $dbComment = $user['comment'];
        $dbPic = $user['pic'];
        $filePath = '';//画像保存のためのファイルパス格納　str型が入る
    
        Log::debug('AccountsController: アカウント更新コントローラー、リクエスト(post)の内容(新しいname): '.print_r($postName, true));
        Log::debug('AccountsController: アカウント更新コントローラー、リクエスト(post)の内容(新しいemail): '.print_r($postEmail, true));
        Log::debug('AccountsController: アカウント更新コントローラー、リクエスト(post)の内容(新しいpic): '.print_r($postPic, true));
        Log::debug('AccountsController: アカウント更新コントローラー、リクエスト(post)の内容(新しいemail): '.print_r($postEmail, true));
        Log::debug('AccountsController: アカウント更新コントローラー、DBに保存しているname: '.print_r($dbName, true));
        Log::debug('AccountsController: アカウント更新コントローラー、DBに保存しているEmail: '.print_r($dbEmail, true));
        Log::debug('AccountsController: アカウント更新コントローラー、DBに保存しているpic: '.print_r($dbPic, true));
        
        Log::debug('AccountsController: バリデーションします');

        $request->validate([
            'name'=>'string|max:20',
            'email'=>'email',
            'comment'=>'max:50'
        ]);
        
        Log::debug('バリデーションokでした');

        //https://promidea.co.jp/archives/2377 参照
        
        Log::debug('postしたファイル：'.print_r($request->file('pic'), true));
        if(!($postPic == '')){
            $filePath = $request->file('pic')->store('public/img');//sotreでpublic/img配下に保存する
        }else{
            Log::debug('画像はpostされていません');
            $filePath = $dbPic;
        }
        Log::debug('ファイルパス：'.print_r($filePath, true));

        $user->pic = basename($filePath);
        Log::debug('picカラム：'.print_r($user->pic, true));

        $user->name = $request->name;
        $user->email = $request->email;
        $user->pic = basename($filePath);
        $user->comment = $request->comment;
        $user->save();

        Log::debug('saveしたあとの$user:'.print_r($user, true));//確認

        // $user->fill($request->all())->save(); 一気に入れる場合
        
        Log::debug('AccountsController: DBに挿入完了しました。マイページにリダイレクトさせます');
        return view('Match.mypage', ['user'=>$user]);
      }
}
