<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Barra Tempeh</title>
        <!-- Google Font -->
        <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
        rel="stylesheet"
        />

        <!-- Css Styles -->
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/elegant-icons.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css" />
    </head>

    <body>
        <div id="preloder">
            <div class="loader"></div>
        </div>
        <!-- Header Section Begin -->
        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6"></div>
                        <div class="col-lg-6 col-md-6">
                            @guest
                            <div class="header__top__right">
                                <div class="header__top__right__auth">
                                    <a class="d-inline" href="{{ route('login') }}">
                                        <i class="fa fa-user"></i> Login</a>
                                </div>
                                <div class="header__top__right__auth">
                                    <a href="{{ route('register') }}">
                                        <i class="fa fa-user"></i> Register</a>
                                </div>
                            </div>
                            @else
                            <div class="header__top__right">
                                <div class="header__top__right__auth">
                                    <a class="d-inline" href="#">
                                    <i class="fa fa-user"></i> {{ auth()->user()->name }}</a>
                                </div>
                                <div class="header__top__right__auth">
                                    <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit()"><i class="fa fa-user"></i> Logout</a>
                                    <form action="{{ route('logout') }}" id="logout-form" method="post">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__logo" >
                            <a href="./index.html"
                                ><img src="{{ asset('frontend/img/logo2.png') }}" alt=""
                            /></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu">
                            <ul>
                                <li class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">
                                    <a href="{{ route('homepage') }}">Home</a>
                                </li>
                                <li class="nav-item nav-link {{ request()->is('shop') ? 'active' : '' }}">
                                    <a href="{{ route('shop') }}">Shop</a></li>
                                <li class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">
                                    <a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="header__cart">
                            <ul>
                                <li class="nav-item nav-link {{ request()->is('carts') ? 'active' : '' }}"> 
                                    <a href="{{ route('carts.index')}}">
                                        <i class="fa fa-shopping-bag"></i>
                                        <span>2</span></a
                                    >
                                </li>
                            </ul>
                            <div class="header__cart__price">
                                item: <span>Rp 38000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Section End -->

        @yield('content')

        <!-- Js Plugins -->
        <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
        <script src="{{ asset('frontend/js/mixitup.min.js') }}"></script>
        <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/js/main.js') }}"></script>
    </body>
</html>