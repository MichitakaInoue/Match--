<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Log;
use App\User;
use App\Bill;
use App\Account;

Log::debug('MatchsControler:　統括コントローラーです');




class MatchsController extends Controller
{
  

  public function bills (Request $request){//案件投アクション　ただ登録するだけなのでsave モデルとかは使わなくてもいい
      Log::debug('MatchsController: 案件投稿(bills)アクションです');
      Log::debug('MatchsController: 案件投稿内容のデータをバリデーションします');
      
      $request->validate([
        'title'=>'required|string|max:255',
        'price'=>'required|integer',
        'bill_content'=>'required|nullable|max:300',
        'bill_comment'=>'nullable|max:100|'
      ]);

      Log::debug('MatchsController: バリデーション成功しました');
      
      $bill = new Bill;//modelをインスタンス化
      Log::debug('MatchsController: DBに案件の内容を挿入します。挿入するデータの内容'.print_r($bill, true) );

      $bill->fill($request->all())->save();
      
      Log::debug('MatchController: DBに挿入完了しました。topにリダイレクトさせます');
      return redirect('/routetop');
  }


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

  
  public function account(Request $request){//post送信したとき
    Log::debug('MatchsController: アカウント更新(account)アクションです。postリクエストがあります');
    Log::debug('MatchsController: バリデーションします');
    Log::debug('MatchController: 案件投稿、リクエストの内容(新しいname): '.print_r($request['name'], true));
    Log::debug('MatchController: 案件投稿、リクエストの内容(新しいemail): '.print_r($request['email'], true));

    $request->validate([
      'name'=>'string|max:20',
      'email'=>'email',
      'comment'=>'max:50'
    ]);

    $user = Auth::user();
    Log::debug('MatchConrtoller: あなたのユーザー情報について： '.print_r($user, true));

    $user->fill($request->all())->save();
    
    Log::debug('MatchController: DBに挿入完了しました。topにリダイレクトさせます');
    return redirect('/routetop');
  }







}
