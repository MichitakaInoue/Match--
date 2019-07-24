@php
    Log::debug('acount.blade: アカウント登録画面のビューです')
@endphp

{{-- アカウント登録ページは認証付きで --}}

@extends('layouts.app')



@section('title', 'アカウント')



@section('content')  
    <section class="c-hero">
    </section>
    <section class="p-jobForm">
        <form class="c-form" method="POST" enctype="multipart/form-data" action="{{route('Accounts.account')}}">
            @csrf
            <div class="">
                <input style="width: 100%; height:50px; margin-bottom:20px;" name="name"  value="{{$dbName}}" type="text" placeholder="あなたの名前">
                @error('name')
                <!-- $messageと書いておくだけで、自動的にlaravelからエラーがあっったら自動的にメッセージを入れてくれる -->
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
           

            <input style="width: 100%; height:50px; margin-bottom:20px;" name="email"  value="{{$dbEmail}}"  type="text" placeholder="あなたのメールアドレス">
                @error('email')
                <!-- $messageと書いておくだけで、自動的にlaravelからエラーがあっったら自動的にメッセージを入れてくれる -->
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror


            <input style="width: 100%; height:50px; margin-bottom:20px;" name="comment"  value="{{$dbComment}}" type="text" placeholder="一言">
                @error('comment')
                <!-- $messageと書いておくだけで、自動的にlaravelからエラーがあっったら自動的にメッセージを入れてくれる -->
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            <input type="hidden" name="MAX_FILE_SIZE" value="3145728">
            <input type="file" name="pic">

            <button>投稿する</button>
        </form>
    </section>
@endsection