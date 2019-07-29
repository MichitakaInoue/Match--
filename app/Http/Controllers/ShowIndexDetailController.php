<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Bill;

class ShowIndexDetailController extends Controller
{
   public function showIndexDetail ($id){
    Log::debug('ShowIndexDetailController: 案件詳細表示コントローラー');

    Log::debug('ShowIndexDetailController: この案件のid:'.print_r($id, true));

    //なにをしたいのか、
    //案件idは存在する
    //ここでは、その案件の情報の詳細を表示する
    //案件idをもとに引っ張り出してくる

    $bill = \App\Bill::find($id);

   //  Log::debug('この案件情報：'.print_r($bill, true));
   

    return view('Match.indexDetail', ['bill'=>$bill]);
   }
}
