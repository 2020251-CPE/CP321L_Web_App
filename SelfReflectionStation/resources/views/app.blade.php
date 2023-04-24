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
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active link-light hover-effect" href="#landingPG">HOME</a></li>
                    <li class="nav-item"><a class="nav-link link-light hover-effect" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link link-light hover-effect" href="#">Addiction Tests</a></li>
                    <li class="nav-item"><a class="nav-link link-light hover-effect" href="#">Anxiety Tests</a></li>
                </ul>

        </div>
        <div class="main row" id="landingPG">
            <div class="col-lg-12">
                <h1 class="display-4">Self Reflection Station</h1>
            </div>
            <div class="col-lg-4">PIC HERE</div>
            <div class="col-lg-8">
                <div><p>INTRODUCTION</p></div>
                <div><blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris volutpat lorem sed ex cursus posuere. Vivamus odio neque, vestibulum ullamcorper quam non, placerat volutpat sem. Morbi hendrerit luctus justo. Nam consequat mi ac enim convallis varius. Quisque commodo neque massa, nec varius leo pharetra hendrerit. Integer placerat massa et vehicula commodo. Ut sagittis nulla non nulla hendrerit pretium. In id dolor auctor, pulvinar ante ac, venenatis neque.</blockquote></div>
            </div>
        </div>

    </div>
</body>
</html>
