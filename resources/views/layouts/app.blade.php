<!doctype html>
<html  lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navigation.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleHome.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" >
        <nav  class="navbar navbar-expand-md navbar-light bg-uas-web shadow-sm">
            <div class="container text-center" >

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>
                    <a class="navbar-brand" href="{{url('/')}}" style="font-weight: bold;font-size: 30px;">
                        Amazing E-Book
                    </a>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item dropdown" style="background: #ffaf1e; margin-right: 20px;">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{strtoupper(Lang::locale())}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="lang/id">ID</a></li>
                                <li><a class="dropdown-item" href="lang/en">EN</a></li>
                            </ul>
                        </li>

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item" style="background: #ffaf1e; margin-right: 20px;" >
                                    <a class="nav-link" href="{{ route('login') }}">@lang('test.home.login')</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item" style="background: #ffaf1e">
                                    <a class="nav-link" href="{{ route('register') }}">@lang('test.home.register')</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item" style="background: #ffaf1e">
                                <a class="nav-link" href="{{ url('logout') }}">@lang('test.home.logout')</a>
                            </li>
                        @endguest

                    </ul>
                </div>
            </div>
        </nav>

        @guest

        @else
            @if(auth()->user()->role_id == '1')
                <div id="nav" style="background: #ffaf1e; color: black">
                    <ul style="margin-top: 15px;">
                            <li><a href="{{url('/')}}">@lang('form.menu.home')</a></li>
                            <li><a href="{{url('cart')}}">@lang('form.menu.cart')</a></li>
                            <li><a href="{{url('profile')}}">@lang('form.menu.profile')</a></li>
                            <li><a href="{{url('account')}}">@lang('form.menu.account')</a></li>

                    </ul>
                </div>
            @elseif(auth()->user()->role_id == '2')
                <div id="nav" style="background: #ffaf1e; color: black">
                    <ul style="margin-top: 15px;">
                        <li><a href="{{url('/')}}">@lang('form.menu.home')</a></li>
                        <li><a href="{{url('cart')}}">@lang('form.menu.cart')</a></li>
                        <li><a href="{{url('profile')}}">@lang('form.menu.profile')</a></li>
                    </ul>
                </div>
            @endif
        @endguest

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="text-center mt-auto" >
            <h5 class="text-black footer" >
                @lang('test.home.copyright') &copy; Amazing E-Book
            </h5>
        </footer>
    </div>
</body>
</html>
