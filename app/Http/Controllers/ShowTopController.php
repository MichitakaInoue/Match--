<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class ShowTopController extends Controller
{
    public function showTop(){
        Log::debug('top画面表示コントローラー');

        return view('Match.top');
    }
}
