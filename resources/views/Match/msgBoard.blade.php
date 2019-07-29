@php
    Log::debug('msgBoard.blade: 連絡掲示板のビューです');
@endphp


@extends('layouts.app')

@section('title', '連絡掲示板' )


@section('content')  
<div class="l-article ">
    <div class="p-topbar u-topbar_chat">
     <section class="c-topbar">
         <div><h1>{{$bill->title}}</h1></div>
         <div class="c-topbar__right">
             <a href=""><img class="c-topbar__right--img" src="{{asset('/storage/img/'.$sale_user->pic)}}" alt=""></a>
             <a href=""><img class="c-topbar__right--img" src="{{asset('/storage/img/'.$buy_user->pic)}}" alt=""></a>
             <h2 class="">参加者:3人</h2>
        </div>
        {{-- <div class="c-topbar__menu">
          <span>・</span>
          <span>・</span>
          <span>・</span>
        </div> --}}
     </section>
    </div>

    <div class="p-article  p-article__chat">
     <section class="c-article">
         {{-- <div class="c-chatBlock__left">
        　 <a href="" class="c-chatBlock__left--img  u-imgWrapper u-imgWrapper__chat--article"><img class="c-img__chat" src="{{asset('/storage/img/'.$sale_user->pic)}}" alt=""></a>
           <div class="c-chatBlock__left--content">
             <h3>{{$sale_user->name}}</h3>
             <div></div>
           </div>
         </div> --}}

          <div class="c-chatBlock">
        　 　<a href="" class="c-chatBlock__img u-imgWrapper"><img class="c-img c-img__chat" src="{{asset('/storage/img/'.$sale_user->pic)}}" alt=""></a>
           　<div class="c-chatBlock__contents">
             　<div class="c-chatBlock__contents--userName"><h3>{{$sale_user->name}}</h3></div>
             　<div class="c-chatBlock__contents--msg"></div>
               <div class="c-chatBlock__contents--time">2:10 AM</div>
          　 </div>
          </div>

          <div class="c-chatBlock">
           　<div class="c-chatBlock__myMsg"></div>
          </div>

         <div class="c-chatBlock__right">
         </div>
     </section>
    </div>
</div> 

<div class="p-sidebar">
  <section>
  </section>
</div>
@endsection

@php
    Log::debug('');
@endphp