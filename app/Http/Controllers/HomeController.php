<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;


Log::debug('HomeController: homeコントローラーです');

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/Match/top');//logoutさせたらtop(mypage)にリダイレクト
    }
}
