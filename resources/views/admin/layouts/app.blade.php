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


    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/3ecf640728.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/framework/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/theme/bootstrap-louve.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/vendor/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/vendor/media.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/vendor/atributes.css') }}" rel="stylesheet">
</head>
<body>

<div class="dark menu side white">
    <div class="logo text-center">
        <img src="{{ asset('img/logo-mini.png') }}" alt="">
    </div>
    <div class="content">
        <ul>
            <li><a class="true" href="#"><span><i class="fas fa-home"></i></span>Dashboard</a></li>
            <li><a href="#"><span><i class="fas fa-sticky-note"></i></span>Posts</a></li>
            <li><a href="#"><span><i class="fas fa-list"></i></span>Cadastros</a></li>
        </ul>
    </div>
</div>

<div class="menu top transparent">
    <div class="page title">
        <span>{{ $page_title }}</span>
    </div>
    <div class="other informations">
        <button class="btn with icon grey"><span><i class="fas fa-cog"></i></span></button>
    </div>
</div>


{{--<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @if(!Auth::guard('admin')->check() && !Auth::guard('web')->check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @elseif(Auth::guard('admin')->check())
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::guard('admin')->user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('admin.logout') }}">
                                    {{ __('Logout') }}
                                </a>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>--}}
</body>
</html>
