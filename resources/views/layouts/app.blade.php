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
    <header class="p-header">
        <h1>Match</h1>
        <nav class=c-nav>
            <ul>
                <li>menu</li>
                <li>menu</li>
                @guest
                    <li><a  href="{{ route('login') }}">signin</a></li>
                   @if (Route::has('register'))
                        <li><a  href="{{ route('register') }}">signup</a></li>
                   @endif
                   @else
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                    
                @endguest
            </ul>
        </nav>
        <div class="c-hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>


    <main class="p-main">
        @yield('content')
    </main>



    <footer class="p-footer">
        
    </footer>

    @if(session('flash_message'))
            <div class="alert alert-primary text-center" role="alert">
                {{session('flash_message')}}
            </div>
    @endif

</body>




</html>
