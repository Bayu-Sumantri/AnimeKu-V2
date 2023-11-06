<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AnimeKu | Stream</title>

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
    <link rel="stylesheet" href="{{ asset('/anime/css/user.css') }}" type="text/css">

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

</head>

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
                        <a href="{{ url('./index.html') }}">
                            <img src="{{ asset('/anime/img/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="{{ url('/') }}">Homepage</a></li>
                                <li><a href="{{ url('/category') }}">All Anime</a></li>
                                <li><a href="{{ url('/anim_blog') }}">Our Blog</a></li>
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

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="{{ asset('/anime/img/hero/kny.png') }}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Fantasi , Aksi</div>
                                <h2>Kimetsu No Yaiba S3: Katanakaji no Sato Hen</h2>
                                <p>After 30 days of battling demons in the land of Katanakaji...</p>
                                <a href="{{ url('#') }}"><span>Watch Now</span> <i
                                        class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="{{ asset('/anime/img/hero/hero-1.jpg') }}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Action, Fantasy, Supernatural</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="{{ url('#') }}"><span>Watch Now</span> <i
                                        class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="{{ asset('/anime/img/hero/oshinoko.png') }}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Drama, Supernatural</div>
                                <h2>Oshi no Ko</h2>
                                <p>As a supporting actor for Dr. Ai Hoshino</p>
                                <a href="{{ url('#') }}"><span>Watch Now</span> <i
                                        class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Trending Now</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="{{ url('#') }}" class="primary-btn">View All <span
                                            class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($animeku->take(35) as $row)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg">
                                            <img style="height: 325px;"
                                                src="{{ \Illuminate\Support\Facades\Storage::url($row->Gambar_anime) }}">
                                            <div class="ep">18 / 18</div>
                                        </div>
                                        <div class="product__item__text">
                                            <ul>
                                                <li>{{ $row->Genre }}</li>
                                            </ul>
                                            <h5><a
                                                    href="{{ route('AnimeKu_detail', $row->id) }}">{{ $row->judul }}</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>



                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Top Views</h5>
                            </div>
                            <ul class="filter__controls">
                                <li class="active" data-filter="*">Day</li>
                                <li data-filter=".week">Week</li>
                                <li data-filter=".month">Month</li>
                                <li data-filter=".years">Years</li>
                            </ul>
                            <div class="filter__gallery">
                                <div class="product__sidebar__view__item set-bg mix day years"
                                    data-setbg="{{ asset('/anime/img/sidebar/tv-1.jpg') }}">
                                    <div class="ep">18 / ?</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    <h5><a href="{{ url('#') }}">Boruto: Naruto next generations</a></h5>
                                </div>
                                <div class="product__sidebar__view__item set-bg mix month week"
                                    data-setbg="{{ asset('/anime/img/sidebar/tv-2.jpg') }}">
                                    <div class="ep">18 / ?</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    <h5><a href="{{ url('#') }}">The Seven Deadly Sins: Wrath of the Gods</a>
                                    </h5>
                                </div>
                                <div class="product__sidebar__view__item set-bg mix week years"
                                    data-setbg="{{ asset('/anime/img/sidebar/tv-3.jpg') }}">
                                    <div class="ep">18 / ?</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    <h5><a href="{{ url('#') }}">Sword art online alicization war of
                                            underworld</a></h5>
                                </div>
                                <div class="product__sidebar__view__item set-bg mix years month"
                                    data-setbg="{{ asset('/anime/img/sidebar/tv-4.jpg') }}">
                                    <div class="ep">18 / ?</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    <h5><a href="{{ url('#') }}">Fate/stay night: Heaven's Feel I. presage
                                            flower</a></h5>
                                </div>
                                <div class="product__sidebar__view__item set-bg mix day"
                                    data-setbg="{{ asset('/anime/img/sidebar/tv-5.jpg') }}">
                                    <div class="ep">18 / ?</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    <h5><a href="{{ url('#') }}">Fate stay night unlimited blade works</a></h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="{{ url('#') }}" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="{{ url('./index.html') }}"><img src="{{ asset('/anime/img/logo.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="{{ route('home') }}">Homepage</a></li>
                            <li><a href="{{ url('/category') }}">Categories</a></li>
                            <li><a href="{{ route('anim_blog') }}">Our Blog</a></li>
                            <li><a href="">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i
                            class="fa fa-heart" aria-hidden="true"></i> by <a href="https://instagram.com/sumantri7968"
                            target="_blank">Banh_Code</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

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
