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
       <section class="p-bill p-bill__large">
           <div class="p-bill__one p-bill__large--one">
               <div class="c-index__one--head"></div>
               <div class="c-index__one--img"><a href=""><img src="" alt=""></a></div>
               <div class="c-index__one--middle"></div>
               <div class="c-inex__one--bottom"></div>
           </div>
           <div class="p-bill__one p-bill__large--one">
           </div>
           <div class="p-bill__one p-bill__large--one">
           </div>
       </section>
       <section class="p-bill p-bill__small">
           <div class="p-bill__one p-bill__small--one">
           </div>
           <div class="p-bill__one p-bill__small--one">
           </div>
           <div class="p-bill__one p-bill__small--one">
           </div>
           <div class="p-bill__one p-bill__small--one">
           </div>
       </section>
    </div>
@endsection