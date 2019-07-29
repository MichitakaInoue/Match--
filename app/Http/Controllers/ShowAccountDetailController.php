<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class ShowAccountDetailController extends Controller
{
    public function showAccountDetail($id){
        Log::debug('showAccountDetailController:　ユーザーアカウント表示コントローラーです');

        return view('Match.accountDetail');
    }
}