{{-- 大元のレイアウトその２について --}}
{{-- これを子要素であるchildにつなげている --}}
<html>
<head>
    {{-- bladeの第２引数はデフォルト --}}
    <title>Laravel | @yield('title', 'Home')</title>
</head>


@section('sidebar')
    <p>メインのサイドバー</p>
@show

<div id='container'>
    @yield('content')
</div>

@section('footer')
    <script src="app.js"></script>
@show
</html>