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
        <form class="c-form" method="POST" action="{{route('Matchs.account')}}">
            @csrf
            <div class="">
                <input style="width: 100%; height:50px; margin-bottom:20px;"  value="{{$user->name}}" type="text" placeholder="登録する名前">
                @error('')
                <!-- $messageと書いておくだけで、自動的にlaravelからエラーがあっったら自動的にメッセージを入れてくれる -->
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="">
                <input style="width: 100%; height:50px; margin-bottom:20px;" name="name"  value="{{old('name')}}" type="text" placeholder="新しい名前">
                @error('user_name')
                <!-- $messageと書いておくだけで、自動的にlaravelからエラーがあっったら自動的にメッセージを入れてくれる -->
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <input style="width: 100%; height:50px; margin-bottom:20px;"  value="{{$user->email}}"  type="text" placeholder="メールアドレス">
                @error('')
                <!-- $messageと書いておくだけで、自動的にlaravelからエラーがあっったら自動的にメッセージを入れてくれる -->
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            <input style="width: 100%; height:50px; margin-bottom:20px;" name="email"  value="{{old('email')}}"  type="text" placeholder="新しいメールアドレス">
                @error('email')
                <!-- $messageと書いておくだけで、自動的にlaravelからエラーがあっったら自動的にメッセージを入れてくれる -->
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror



            <input style="width: 100%; height:50px; margin-bottom:20px;" name="comment"  value="{{old('comment')}}" type="text" placeholder="一言">
                @error('content')
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