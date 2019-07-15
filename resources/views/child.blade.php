
{{-- layoutのwelcomeから継承してきたこれをルーティングで表示させてみる --}}
@extends('layout.welcome')

@section('title', 'マイページ')


  {{-- @parentで親テンプレートが直接そのまま入ってくる --}}
@section('sidebar')
    @parent
    <p>メインのサイドバーに追加されるところ</p>
@endsection


@section('content')
    <p>メインコンテンツ</p>
    @include('common.error', ['text' => 'エラー'])
@endsection

@section('footer')
    @parent
    <script src="dashboard.js"></script>
@endsection


