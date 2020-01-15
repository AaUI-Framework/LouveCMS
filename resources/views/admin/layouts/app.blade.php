<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>




    <!-- Fonts -->
    <link href="{{ asset('fonts/css/all.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/framework/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/theme/bootstrap-louve.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/vendor/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/vendor/media.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/vendor/atributes.css') }}" rel="stylesheet">
</head>
<body>

<div class="menu side white">
    <div class="logo text-center">
        <img src="{{ asset('img/logo.png') }}" alt="">
    </div>
    <div class="content">
        <ul>
            <li><a class="true" href="#"><span><i class="fal fa-home"></i></span>Dashboard</a></li>
            <li><a href="#"><span><i class="fal fa-sticky-note"></i></span>Posts</a></li>
            <li><a href="#"><span><i class="fal fa-list"></i></span>Cadastros</a></li>
        </ul>
    </div>
</div>

<div class="menu top transparent">
    <div class="page title">
        <span>{{ $page_title }}</span>
    </div>
    <div class="other informations">
        <label class="switch inline">
            <input type="checkbox" onchange="changemode()">
            <div></div>
        </label>
        <button class="btn with icon grey ml-3"><span><i class="fal fa-cog"></i></span></button>
        <button class="btn with icon grey ml-3"><span><i class="fal fa-sign-out"></i></span></button>
        <a class="user image letter dropdown-toggle ml-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::guard('admin')->user()->letter() }}
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <button class="dropdown-item" type="button">Action</button>
            <button class="dropdown-item" type="button">Another action</button>

        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        if($.cookie('the_cookie') == 'dark'){
            $('.switch input').attr("checked", "checked");
            $('body').addClass('dark');
            $.cookie('the_cookie', 'dark');
            $(".menu.side .logo img").attr('src','{{ asset('img/logo-light.png') }}').fadeIn(400);
        } else {
            $('body').removeClass('dark');
            $.cookie('the_cookie', 'notdark');
            $(".menu.side .logo img").attr('src','{{ asset('img/logo.png') }}').fadeIn(400);
        }
    });

    function changemode() {
        if($.cookie('the_cookie') === 'notdark'){
            $('body').toggleClass('dark');
            $.cookie('the_cookie', 'dark');
            $(".menu.side .logo img").attr('src','{{ asset('img/logo-light.png') }}').fadeIn(400);
        } else {
            $('body').toggleClass('dark');
            $.cookie('the_cookie', 'notdark');
            $(".menu.side .logo img").attr('src','{{ asset('img/logo.png') }}').fadeIn(400);
        }
    }
</script>


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
