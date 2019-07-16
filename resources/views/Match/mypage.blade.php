@php
    Log::debug('mypage.blade: mypageのビューです')
@endphp


@extends('layouts.app')



@section('title', 'マイページ')



@section('content')
    <section class="c-hero">
        <div>
            <a class="p-profileImg" href=""><img src="" alt=""></a>
        </div>
        <div><h4>michitaka</h4></div>           
    </section> 
    <section class="p-mypage">
        <div class="p-mypage__"></div>
    </section>
@endsection