<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
                <li>menu</li>
                <li>menu</li>
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


</body>
</html>