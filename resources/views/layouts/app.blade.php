<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>An Lạc Viên</title>
    <!-- Scripts -->
    <script async src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script async src="{{asset("/js/html5shiv.js")}}"></script>
   <script async src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{asset("/css/icon/css/all.css")}}" rel="stylesheet">
    <link href="{{asset("/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("/css/prettyPhoto.css")}}" rel="stylesheet">
    <link href="{{asset("/css/animate.css")}}" rel="stylesheet">
    <link href="{{asset("/css/main.css")}}" rel="stylesheet">
    <link href="{{asset("/css/responsive.css")}}" rel="stylesheet">
    <style>
        .search-point{
            position: relative;
            animation: searchpoint 0.7s 100;
        }
        @keyframes searchpoint{
            0% {background: #fff;}
            100% {background: #daf04e}
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <b>AN LẠC VIÊN</b>
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
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">ĐĂNG NHẬP</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-uppercase" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        ĐĂNG XUẤT
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script async src="{{asset("/js/jquery.js")}}"></script>
    <script async src="{{asset("/js/jquery-ui.min.js")}}"></script>
    <script async src="{{asset("/js/bootstrap.min.js")}}"></script>
    <script async src="{{asset("/js/jquery.scrollUp.min.js")}}"></script>
    <script async src="{{asset("/js/jquery.prettyPhoto.js")}}"></script>
    <script async src="{{asset("/js/main.js")}}"></script>
    <script async src="{{asset("/js/typeahead.bundle.js")}}"></script>
    <script async src="{{asset("/js/bloodhound.js")}}"></script>

    @yield('js')
</body>
</html>
