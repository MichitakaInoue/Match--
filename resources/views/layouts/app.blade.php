<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   {{-- タイトル動的に変える --}}
   <title>@yield('title', 'laravel')</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Notable&display=swap" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>






<body>
    <header id="l-header">
        <h1><a href="{{route('top')}}">Match</a></h1>
        <nav class=c-nav>
            <ul>
                @auth
                {{-- <li><a href="route{{'mypage'}}">mypage</a></li>  だとroutemypageでgetしてくれる --}}
                {{-- <li><a href="{{route('mypage')}}">mypage</a></li> ではルーティングのnameの値を取る ->name(mypage)とする --}}
                <li><a href="{{route('mypage')}}">mypage</a></li>  
                <li><a href="{{route('account')}}">account</a></li>   
                <li><a href="{{route('Bills.bills')}}">post</a></li>
                @endauth 
                <li><a href="{{route('index')}}">jobs</a></li>         
                @guest
                    <li><a  href="{{ route('login') }}">signin</a></li>
                   @if (Route::has('register'))
                        <li><a  href="{{ route('register') }}">signup</a></li>
                   @endif
                   @else
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a></li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                @endguest
                @auth
                <li><a href="">exit</a></li>
                @endauth
            </ul>
        </nav>
        <div class="c-hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>




    <div id="l-main">
        @yield('content')
    </div>




    <footer id="l-footer">
        
    </footer>




    @if(session('flash_message'))
            <div class="alert alert-primary text-center" role="alert">
                {{session('flash_message')}}
            </div>
    @endif

</body>




</html>
