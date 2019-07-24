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
        $filePath = '';//画像保存のためのファイルパス格納　str型が入る
    
        Log::debug('AccountsController: アカウント更新、リクエスト(post)の内容(新しいname): '.print_r($postName, true));
        Log::debug('AccountsController: アカウント更新、リクエスト(post)の内容(新しいemail): '.print_r($postEmail, true));
        Log::debug('AccountsController: アカウント更新、リクエスト(post)の内容(新しいpic): '.print_r($postPic, true));
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

        //https://promidea.co.jp/archives/2377 参照
        
        Log::debug('postしたファイル：'.print_r($request->file('pic'), true));
        $filePath = $request->file('pic')->store('public/img');//sotreでpublic/img配下に保存する
        Log::debug('ファイルパス：'.print_r($filePath, true));
        
        // User::create(['pic'=> basename($filePath)]);//これでは別でカラムが作られるだけ

        $user->pic = basename($filePath);
        Log::debug('picカラム：'.print_r($user->pic, true));


        // $filePath = $postPic->store('public');//storage/app/publicに保存させる
        // $newFilePath = str_replace('public/', '', $filePath);
        // $user->pic = str_replace('public/', '', $filePath);


        // Log::debug('ファイルパス: '.print_r($filePath, true));//public/TAO3SwhY3URRDv37UUc49daLCYSB0xbmXPruhary.jpeg 
        // Log::debug('str_replaceしたやつ：'.print_r($user->pic, true));//TAO3SwhY3URRDv37UUc49daLCYSB0xbmXPruhary.jpeg  
        // Log::debug('tmpファイル：'.print_r($postPic['pathName'], true));
        
        //一つ一つ入れていく　picがtmpに保存されるので

        $user->name = $request->name;
        $user->email = $request->email;
        $user->pic = basename($filePath);
        $user->comment = $request->comment;
        $user->save();

        Log::debug('saveしたあとの$user:'.print_r($user, true));//確認

        // $user->fill($request->all())->save(); 一気に入れる
        
        Log::debug('AccountsController: DBに挿入完了しました。マイページにリダイレクトさせます');
        return view('Match.mypage', ['user'=>$user]);
        // return view('Match.mypage', ['newFilePath'=>$newFilePath]);
      }
}
