@php
    Log::debug('top.blade: トップページのビューです')
@endphp


@extends('layouts.app')



@section('title', 'トップ')



@section('content')
    <section class="c-hero">        
    </section> 
    <section class="p-topHeader">
        <nav class="p-topHeader__nav">
            <ul>
                <li><a href="">New</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Join</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
    </section>

    <section class="c-index c-new">
        <div class="c-newOne">
            <div class="c-newOne__head  c-index__one--head"></div>
            <div class="c-newOne__body  c-index__one--body"></div>
        </div>
        <div class="c-newOne">
            <div class="c-newOne__head"></div>
            <div class="c-newOne__body"></div>
        </div>
        <div class="c-newOne">
            <div class="c-newOne__head"></div>
            <div class="c-newOne__body"></div>
        </div>
        <div class="c-newOne">
            <div class="c-newOne__head"></div>
            <div class="c-newOne__body"></div>
        </div>
        <div class="c-newOne">
            <div class="c-newOne__head"></div>
            <div class="c-newOne__body"></div>
        </div>
        <div class="c-newOne">
            <div class="c-newOne__head"></div>
            <div class="c-newOne__body"></div>
        </div>
    </section>

    <section>

    </section>
@endsection