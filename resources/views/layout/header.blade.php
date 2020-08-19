<header class="header shop">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="top-left">
                        <ul class="list-main">
                            <li><i class="ti-mobile"></i> 0366 908 087</li>
                            <li><i class="ti-email"></i> vnenjoytravel@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="right-content">
                        <ul class="list-main">
                            <li><i class="ti-location-pin"></i> 99 Tô Hiến Thành, Sơn Trà, Đà Nẵng</li>
                            <li><i class="ti-alarm-clock"></i> <a href="">24/7</a></li>
                            <li><i class="ti-user"></i> <a href="{{ url('/profile') }}">Tài khoản</a></li>
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        @if (Auth::user()->is_admin <> 0)
                                        @if (Request::is('use-as-admin'))
                                        <a class="dropdown-item" href="{{ route('home') }}">
                                            {{ __('Xem với tư cách người dùng') }}
                                        </a>
                                        @else
                                        <a class="dropdown-item" href="{{ route('admin') }}">
                                            {{ __('Xem với tư cách admin') }}
                                        </a>
                                        @endif

                                        @endif
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middle-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12">
                    <div class="logo">
                        <a href="{{ url('/') }}">ENJOY TRAVEL VN</a>
                    </div>
                    <div class="search-top">
                        <div class="top-search"><a href="#"><i class="ti-search"></i></a></div>
                        <div class="search-top">
                            <form class="search-form"  action="/search" method="get">
                                <input type="search" placeholder="Search here..." id="search" name="search">
                                <button value="search" type="submit"><i class="ti-search"></i></button>
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                    <div class="mobile-nav"></div>
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="search-bar-top">
                        <div class="search-bar">
                            <form action="/search" method="get">
                                <input name="search" placeholder="Nhập tên sản phẩm....." type="search" id="search" name="search">
                                <button class="btnn"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-12">
                    <div class="right-bar">
                        <div class="sinlge-bar">
                            <a href="{{ url('/favorite-tour') }}" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="sinlge-bar">
                            <a href="{{ url('/profile') }}" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="sinlge-bar">
                            <a href="{{ url('/tours') }}" class="single-icon"><i class="ti-clipboard"></i></a>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-12">
                        <div class="menu-area">
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">
                                    <div class="nav-inner">
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li class="{{ Request::is('/') ? 'active' : '' }}">
                                                <a href="{{ url('/') }}">TRANG CHỦ</a></li>
                                            <li class="{{ Request::is('about-us') ? 'active' : '' }}"><a href="{{ url('/about-us') }}">GIỚI THIỆU</a></li>
                                            <li class="{{ Request::is('news') || Request::is('news/*') ? 'active' : '' }}"><a href="{{ url('/news') }}">TIN TỨC</a></li>
                                            <li class="{{  Request::is('product*')? 'active' : '' }}"><a href="{{ url('/products') }}">SẢN PHẨM</a>
                                            </li>

                                            <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ url('/contact') }}">LIÊN HỆ</a></li>
                                            <li class="{{ Request::is('book-tour-histories') || Request::is('chat-with-admin') || Request::is('profile') ? 'active' : '' }}"><a href="#">KHÁC<i class="ti-angle-down"></i><span class="new">New</span></a>
                                                <ul class="dropdown">
                                                    <li><a href="{{ url('/tours') }}">Lịch sử đặt tour</a></>
                                                    <li><a href="{{ url('/profile') }}">Trang cá nhân</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
