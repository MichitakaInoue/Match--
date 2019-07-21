@php
    Log::debug('profDetail.blade: プロフィール詳細のビューです')
@endphp


@extends('layouts.app')



@section('title', 'プロフィール詳細')



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