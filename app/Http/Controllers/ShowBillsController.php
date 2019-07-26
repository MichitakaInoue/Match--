<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Log;
use DB;
use App\Bill;
use App\User;



class ShowBillsController extends Controller
{
    public function showBills(){
        Log::debug('ShowBillsController: 案件一覧表示コントローラー');
        $bill = '';//すべての案件情報
        $bill_uid = '';//案件情報に紐付いたユーザーid
        $bill_cnt = '';//投稿された案件数


        $bill = DB::table('bills')->get();//billsテーブルをすべて取得

        // $bill_uid = $bill->select('user_id', '');
        
        //bill
        //何をしたいのか
        //案件一覧ページでは案件そのものの情報->ループで回すだけ
        //個数を数える->arrayのキーに個数分数字をインクリメントすること
        //案件にはその投稿ユーザーの画像を表示させる
        //select 'user_id' from bills WHERE user_id = そのusersテーブルのid
        //ループさせるにはforeachでkeyとvalに分解できる状態の変数にしなければならない
        //ではbillで投稿したとき(accountsController)に直接投稿者のpicをDBにinsertしてはどうか
        
        // $bill_uid = $bill[0]->user_id; //ユーザーid個別の取り出し方
        

        Log::debug('案件に紐づくuser_id:'.print_r($bill_uid, true));
        $bill_cnt = count($bill);
        Log::debug('配列$billの個数:'.print_r($bill_cnt, true));

       

        
        Log::debug('案件の詳細データすべて:'.print_r($bill, true));
        // [items:protected] => Array
        // (
        //     [0] => stdClass Object
        //         (
        //             [id] => 2
        //             [title] => fwqfr
        //             [price] => 444
        //             [bill_content] => fwqfqf
        //             [bill_comment] => fwqef
        //             [user_id] => 1
        //             [category_id] => 0
        //             [delte_flg] => 0
        //             [created_at] => 2019-07-25 13:22:56
        //             [updated_at] => 2019-07-25 13:22:56
        //         )

        // )

        return view('Match.index', ['bill'=>$bill]);
    }
}
