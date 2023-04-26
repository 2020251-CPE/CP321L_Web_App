<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="/css/main.css">
 
</head>
<body>
    <div class="container"><!--can be changed to container-fluid-->
        <div class="navbar navbar-expand">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="#">Logo</a>
                <form action="{{route('home')}}" method="get"> 
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active link-light hover-effect" href="{{ route('search', ['page' => 'home']) }}">HOME</a></li>
                    <li class="nav-item"><a class="nav-link link-light hover-effect" href="{{ route('search', ['page' => 'about']) }}">About</a></li>
                    <li class="nav-item"><a class="nav-link link-light hover-effect" href="{{ route('search', ['page' => 'AddictionTest']) }}">Addiction Tests</a></li>
                    <li class="nav-item"><a class="nav-link link-light hover-effect" href="{{ route('search', ['page' => 'AnxietyTest']) }}">Anxiety Tests</a></li>
                </ul>
                </form>
            </div>
        </div>
        <?php $currentUrl = url()->current(); $path = parse_url($currentUrl, PHP_URL_PATH);?>
        @if ($path == '/app/home')
            @include('pages.home')
        @elseif ($path == '/app/about')
            @include('pages.about')
        @elseif ($path == '/app/AddictionTest')
            @include('pages.AddictionTests')
        @elseif ($path == '/app/AnxietyTest')
            @include('pages.AnxietyTest')
        @endif
    </div>
</body>
</html>
