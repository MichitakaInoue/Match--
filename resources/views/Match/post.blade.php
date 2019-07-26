@php
    Log::debug('post.blade: 案件投稿画面のビューです')
@endphp


@extends('layouts.app')



@section('title', '案件投稿')



@section('content')  
    <section class="c-hero">
    </section>
    <section class="p-jobForm">
        <form class="c-form" method="POST" action="{{route('Bills.bills')}}">
            @csrf
            <div class="">
                <input style="width: 100%; height:50px; margin-bottom:20px;" name="title" value="" type="text" placeholder="タイトル">
                @error('title')
                <!-- $messageと書いておくだけで、自動的にlaravelからエラーがあっったら自動的にメッセージを入れてくれる -->
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            
            <input style="width: 100%; height:50px; margin-bottom:20px;" name="price"  value=""  type="text" placeholder="金額">
                @error('price')
                <!-- $messageと書いておくだけで、自動的にlaravelからエラーがあっったら自動的にメッセージを入れてくれる -->
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror


            <input style="width: 100%; height:50px; margin-bottom:20px;" name="bill_comment"  value="" type="bill_comment" placeholder="コメント">

            <input style="width: 100%; height:50px; margin-bottom:20px;" name="bill_content"  value="" type="text" placeholder="説明">
                @error('content')
                <!-- $messageと書いておくだけで、自動的にlaravelからエラーがあっったら自動的にメッセージを入れてくれる -->
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            <input style="width: 100%; height:50px; margin-bottom:20px;" name="category_name"  value="" type="category_name"  placeholder="カテゴリ">
            <button>投稿する</button>
        </form>
    </section>
@endsection