<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Log;


Log::debug('BillModel: Billのmodelです');



class Bill extends Model //model　素のphpの場合と全く同じ
{
    //変更(CRUD)させたいカラムをfillable
    protected $fillable = ['title', 'price', 'bill_content', 'bill_comment'];

    
    //リレーションusersと紐づけている
    //billから見たusersとの関係性
    public function uer(){
        return $this->belongsTo('App\User');
    }
}
