@php
    Log::debug('indexDetail.blade: 案件詳細のビューです');
@endphp


@extends('layouts.app')



@section('title', '案件詳細')


@section('content')  
<div class="p-mypage">
  <div class="p-article">
    <section>
      <div class="c-article__block  c-article__block--title" style="margin:0;">
          <h3>案件詳細</h3>
          <p></p>
      </div>
      <div class="c-article__block  c-article__profile">
          <div class="c-article__profile--name"><h2>{{$bill->title}}</h2></div>
          <div class="c-article__profile--right"><p>{{$bill->bill_content}}</p></div>
      </div>
      <div class="c-article__block  c-article__block--title">
      </div>
    　<form method="POST" action="{{route('msgBoard', $bill->id)}}">
        @csrf
       <input type="submit" name="submit" value="応募する">
      </form>
    </section>
  </div>
  
  <div class="p-mypage__sidebar">
    <section>

    </section>
  </div>
 </div> 
@endsection

@php
    Log::debug('');
@endphp