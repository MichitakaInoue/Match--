<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Bill;
use App\User;
use Log;

class BillsController extends Controller
{
    public function bills (Request $request){//案件投アクション　ただ登録するだけなのでsave モデルとかは使わなくてもいい
        Log::debug('BillsController: 案件投稿(bills)アクションです');

        $user = Auth::user();
        $u_pic = $user->pic;

        Log::debug('BillsController: 案件投稿内容のデータをバリデーションします');
        
        $request->validate([
          'title'=>'required|string|max:255',
          'price'=>'required|integer',
          'bill_content'=>'required|max:300',
          'bill_comment'=>'max:100|'
        ]);
  
        Log::debug('BillsController: バリデーション成功しました');
        
        $bill = new Bill;//modelをインスタンス化
        Log::debug('BillsController: DBに案件の内容を挿入します。挿入するデータの内容'.print_r($bill, true) );
  
        $bill->title = $request->title;
        $bill->price = $request->price;
        $bill->bill_content = $request->bill_content;
        $bill->bill_comment = $request->bill_comment;
        $bill->user_id = $user->id;
        $bill->pic = $u_pic;
        $bill->save();
        
        Log::debug('保存したbill: '.print_r($bill, true));
        Log::debug('BillsController: DBに挿入完了しました。topにリダイレクトさせます');
        return redirect('/routetop');
    }
}
