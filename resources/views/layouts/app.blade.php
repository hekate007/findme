<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/images.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html,
        body {
            color: white;
            font-family: 'Nunito', sans-serif;
            font-weight: 500;
            height: 100vh;
            margin: 0;
            background-image: url("/jpg/bg.jpg");
            /*Цвет текста на странице*/
            background-attachment: fixed;
            /* Фон страницы фиксируется */
            background-repeat: repeat-x;
            /* Изображение повторяется по горизонтали */
            -moz-background-size: 100%;
            /* Firefox 3.6+ */
            -webkit-background-size: 100%;
            /* Safari 3.1+ и Chrome 4.0+ */
            -o-background-size: 100%;
            /* Opera 9.6+ */
            background-size: 100%;
            /* Современные браузеры */
        }
    </style>
</head>
<body>
@php
    $user = auth()->user();
@endphp
    <div id="app">
        <div class="page-header sidenav" ref="mySidenav" id="mySidenav">
            <button @click="closeNav" class="btn closebtn">&times;</button>
            @guest
                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                <a href="{{ url('/') }}">#FindMe</a>
            @else
                <a href='{{ url("/home") }}'>Выбор региона</a>
                <a href='{{ url("/myarea") }}'>Пропавшие моего региона</a>
                <a href="{{ url('/slbs') }}">Службы</a>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            @endguest
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <span @click="openNav" class="rounded-circle m-5">
            #FindMe!
        </span>
        <div class="page-main" ref="main" id="main">
            @yield('content')
        </div>
    </div>
</body>
</html>
