<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use Log;

class BillsController extends Controller
{
    public function bills (Request $request){//案件投アクション　ただ登録するだけなのでsave モデルとかは使わなくてもいい
        Log::debug('BillsController: 案件投稿(bills)アクションです');
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
  
        $bill->fill($request->all())->save();
        
        Log::debug('BillsController: DBに挿入完了しました。topにリダイレクトさせます');
        return redirect('/routetop');
    }
}
