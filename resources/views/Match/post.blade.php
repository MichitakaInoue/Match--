@php
    Log::debug('post.blade: 案件投稿画面のビューです')
@endphp


@extends('layouts.app')



@section('title', '案件投稿')



@section('content')  
    <section class="c-hero">
    </section>
    <section class="p-jobForm">
        <form class="c-form" action="post">
            <div class="">
                <label for="">
                    <input style="width: 100%; height:50px; margin-bottom:20px;" type="text" placeholder="タイトル">
                </label>
            </div>
            <input style="width: 100%; height:50px; margin-bottom:20px;" type="text" placeholder="金額">
            <input style="width: 100%; height:50px; margin-bottom:20px;" type="text" placeholder="説明">
            <input style="width: 100%; height:50px; margin-bottom:20px;" type="text" placeholder="">
            <input style="width: 100%; height:50px; margin-bottom:20px;" type="text" placeholder="">
            <button>投稿する</button>
        </form>
    </section>
@endsection