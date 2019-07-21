<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Log;

Log::debug('AccountsModel: アカウント作成　accountのmodel');



class Account extends Model
{
    protected $fillable = ['user_name', 'email', 'comment', 'pic'];

    public function user(){//アカウント（親モデル）からuser（子モデル）を引っ張ってくる
        return $this->belongsTo('App\User');
    }
}
