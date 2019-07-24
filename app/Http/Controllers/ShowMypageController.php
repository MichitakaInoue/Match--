<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Log;

class ShowMypageController extends Controller
{
    public function showMypage(){
        Log::debug('ShowMypageController: マイページ、管理画面表示アクション');

        $user = Auth::user();
        Log::debug('picについて：'.print_r($user->pic, true)); // /tmp/phpreuf22  
        //storeでpublicで保存させる
        

        return view('Match.mypage', ['user'=>$user]);
    }
}
