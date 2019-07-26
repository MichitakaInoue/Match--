@php
    Log::debug('post.blade: 案件一覧画面のビューです')
@endphp


@extends('layouts.app')



@section('title', '案件一覧')



@section('content')  
    <section class="p-indexHeader">
        <nav class="c-nav">
            <ul>
                <li><a href="">すべて</a></li>
                <li><a href="">単発案件</a></li>
                <li><a href="">レベニューシェア案件</a></li>
            </ul>
        </nav>
    </section>


    <div class="p-bills">

       <div class="p-bill p-bill__large">

           @foreach ($bill as $key=>$val)      
              <section class="p-bill__one p-bill__large--one">
                <div class="c-index">
                  <div class="c-index__main">
                    <a href=""><img class="c-index__main--img" src="{{ asset('/storage/img/'.$val->pic) }}" alt=""></a>
                    <a href="{{route('indexDetail', $val->id)}}"><p class="c-index__main--detail">{{$val->bill_comment}}</p></a>
               　 </div>
                  <div class="c-index__price">{{$val->price}}</div>
                  <div class="c-index__bottom">♡♡</div>
                </div>
               </section>
           @endforeach

           {{-- <section class="p-bill__one p-bill__large--one">
             <div class="c-index">
               <div class="c-index__main">
                 <a href=""><img class="c-index__main--img" src="{{ asset('') }}" alt=""></a>
                 <p  class="c-index__main--detail">wwwwwwwwwwwwwww</p>
            　 </div>
               <div class="c-index__price">4000</div>
               <div class="c-index__bottom">♡♡</div>
             </div>
            </section> --}}


           {{-- <div class="p-bill__one p-bill__large--one">
           </div>
           <div class="p-bill__one p-bill__large--one">
           </div> --}}
        </div>


       {{-- <section class="p-bill p-bill__small">
           <div class="p-bill__one p-bill__small--one">
           </div>
           <div class="p-bill__one p-bill__small--one">
           </div>
           <div class="p-bill__one p-bill__small--one">
           </div>
           <div class="p-bill__one p-bill__small--one">
           </div>
       </section> --}}

    </div>

@endsection