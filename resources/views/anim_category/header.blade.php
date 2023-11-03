<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('tittle')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

        

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('/anime/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/anime/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/anime/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/anime/css/plyr.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/anime/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/anime/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/anime/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/anime/css/style.css') }}" type="text/css">
</head>

    <style type="text/css">
        .user {
            display: inline-block;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }
    </style>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="{{ url('') }}">
                            <img src="{{ asset('/anime/img/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="{{ route('home') }}">Homepage</a></li>
                                <li><a href="{{ url('/category') }}">All Anime <span
                                            class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/category') }}">All Anime</a></li>
                                        <li><a href="{{ url('/anim_detail') }}">Anime Details</a></li>
                                        <li><a href="{{ url('/anim_watch') }}">Anime Watching</a></li>
                                        <li class="{{ request()->routeIs('anim') ? 'active' : '' }}"><a
                                                href="{{ url('/anim_blog') }}">Blog Details</a></li>
                                        <li><a href="{{ route('register') }}">Sign Up</a></li>
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                    </ul>
                                </li>
                                <li><a class="{{ request()->routeIs('anim_blog') ? 'active' : '' }}"
                                        href="{{ url('/anim_blog') }}">Our Blog</a></li>
                                <li><a href="{{ url('#') }}">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="{{ url('#') }}" class="search-switch"><span class="icon_search"></span></a>
                        <a href="{{ route('login') }}">
                            @if (auth()->check() && auth()->user()->Profile)
                                <img class="user"src="{{ \Illuminate\Support\Facades\Storage::url(auth()->user()->Profile) }}"
                                    alt="">
                            @else
                                <span class="icon_profile"></span>
                            @endif

                        </a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    @yield('anim_category')

    @include('anim_category.footer')

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="{{ asset('/anime/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/anime/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/anime/js/player.js') }}"></script>
    <script src="{{ asset('/anime/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('/anime/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('/anime/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('/anime/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/anime/js/main.js') }}"></script>


</body>

</html>
