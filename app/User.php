<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Log;


Log::debug('UserModel: Userのモデルです');


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','comment'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    

    //ユーザーの案件投稿モデルとのリレーション
    //モデルを使うタイミングはここ
    //例えばログイン中のユーザーが登録したデータだけ抽出する場合、
    //joinのsqlを実行する必要があるが、ORMをつかう場合、そのようなsqlを書く代わりに
    //モデル内にテーブル同士の関係性を定義してORMが使えるようにする(リレーション)
    //https://readouble.com/laravel/5.8/ja/eloquent.html
    public function bills(){ //紐づけたいモデルの複数形にする
        //userから見たときにbillsはどういう関係かhasmany
        //これでアクションの中で
        //$bills = User::find(1)->bills;
        //foreach($bills as $bill)のように使うことができるようになる
        return $this->hasMany('App\Bill');
    }


    //ユーザーのアカウント作成モデルとのリレーション
    // public function accounts(){
    //     return $this->hasOne('App\Account');
    // }
}
