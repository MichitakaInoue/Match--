@php
    Log::debug('mypage.blade: マイページ（管理画面）のビューです')
@endphp


@extends('layouts.app')



@section('title', 'マイページ')



@section('content')  
   <div class="p-mypage">
    <section class="p-mypage__main">
        <div class="c-article__block  c-article__block--title" style="margin:0;">
            <h3>あなたのプロフィール</h3>
            <p>編集できます</p>
        </div>
        <div class="c-article__block  c-article__profile">
            <div class="c-article__profile--name"><h2>inoue michitka</h2></div>
            <div><a href=""><img class="c-article__profile--left" src="{{asset('/storage/img/'.$user->pic)}}" class="u-img u-img__article" alt=""></a></div>
            <div class="c-article__profile--right"><p>wwwwwwwwwwwwwwwwwwwwwwwwwwwwwww</p></div>
        </div>
        <div class="c-article__block  c-article__block--title">
            <h3>最近のメッセージ</h3>
        </div>
    </section>
    <section class="p-mypage__sidebar">

    </section>
   </div>
@endsection