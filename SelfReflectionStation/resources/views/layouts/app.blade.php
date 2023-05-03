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
        <!--NAV-->
        <div class="navbar navbar-expand">
            <div >
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

    <div class="container-fluid"><!--can be changed to container-fluid-->
        
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

    <!--FOOTER-->
    <footer class="page-footer">
        <div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">Additional Information</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-1 text-justify" >
                    <h6 class="text-uppercase font-weight-bold">Notice</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In aliquet dolor fringilla libero venenatis maximus. Proin malesuada felis tortor, in sodales felis dignissim at. Nulla sapien eros, porta vulputate accumsan quis, iaculis et lorem. </p>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center">Made by: Angelo Rafael F. Recio | © 2021 Copyright: MyWebsite.com</div>
    </footer>
</body>
</html>
