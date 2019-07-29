<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Bill;
use \App\User;
use Log;

class ShowMsgBoardController extends Controller
{
    public function showMsgBoard(Request $request, $id){

        Log::debug('ShowMsgBoardController:掲示板表示コントローラーです');
        Log::debug('ShowMsgBoardController: postです。応募がありました');
        Log::debug('渡ってきた案件id:'.print_r($id, true));

        $bill = '';
        $sale_user = '';
        $buy_user = '';

        $bill = \App\Bill::find($id);  
        $sale_user = \App\User::find($bill->user_id);
        $buy_user = Auth::user();

        return view('Match.msgBoard', ['bill'=>$bill, 'sale_user'=>$sale_user, 'buy_user'=>$buy_user]);
        // return redirect('/routeboard/bill_id/'.$id);
    }
}
