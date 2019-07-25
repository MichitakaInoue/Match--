<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Log;
use App\Bill;

class ShowBillsController extends Controller
{
    public function showBills(){
        Log::debug('ShowBillsController: 案件一覧表示コントローラー');

        //やりたいこと　Billsのデータをすべて表示する。
        //認証はなし
        //ユーザーからみた案件の関係　1対多
        //案件からみたユーザーの関係　多対1

        $bill = new BIll;
        Log::debug('案件の詳細データすべて:'.print_r($bill, true));

        return view('Match.index', ['bill'=>$bill]);
    }
}
