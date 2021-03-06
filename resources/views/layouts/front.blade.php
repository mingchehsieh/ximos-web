<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>世茂科技股份有限公司 - @yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <style>
        @section('style')
            body {
                padding-top: 120px;
                background: #FFF;
                letter-spacing: 1px;
                font-family: "Microsoft JhengHei";
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }
            li {
                float: left;
            }
            a {
                color: #00A7C1;
            }
            a:hover {
                color: #008299;
            }
            .child-fixed-width-1100 {
                padding: 0 30px;
            }
            .child-fixed-width-1100>div, .fixed-width-1100 {
                max-width: 1100px;
                margin: 0 auto;
            }
            header {
                height: 50px;
                background: #434343;
                line-height: 50px;
            }
            header>div {
                font-size: 13px;
                color: #FFF;
                overflow: auto;
            }
            .lang li {
                padding-left: 24px;
            }
            .lang a {
                display: block;
                color: white;
                text-decoration: none;
            }
            .lang a:hover {
                color: #00A7C1;
            }
            nav {
                height: 70px;
                background: #FFF;
                line-height: 70px;
                -webkit-box-shadow: 0 1px 5px rgba(0,0,0,0.25);
                -moz-box-shadow: 0 1px 5px rgba(0,0,0,0.25);
                box-shadow: 0 1px 5px rgba(0,0,0,0.25);
            }
            nav>div {
                overflow: auto;
            }
            .menu a {
                display: block;
                color: black;
                text-align: center;
                padding: 0 26px;
                text-decoration: none;
            }
            .menu a:hover {
                color: #2f8095;
            }
            .search-input {
                height: 20px;
                width: 125px;
                margin: auto 7px auto 26px;
                padding: 0 7px;
                border: 1px solid gray;
                border-radius: 10px;
                line-height: 20px;
            }
            .header-fixed {
                width: 100%;
                position: fixed;
                top: 0;
                z-index: 5;
		-webkit-transition: 0.3s;
		-moz-transition: 0.3s;
		-o-transition: 0.3s;
		transition: 0.3s;
            }
            .float-left {
                float:left;
            }
            .float-right {
                float:right;
            }
            footer {
                margin-top: 18px;
                padding: 30px;
            }
            footer>div {
                padding-left: 40px;
                font-size: 13px;
                color: #666;
                overflow: auto;
            }
            footer>div div {
                padding-left: 84px;
            }
            .content {
                background-color: #E5E5E5;
                padding-bottom: 20px;
                overflow: auto;
            }
            .copyright {
                padding-top: 60px;
                padding-bottom: 20px;
                text-align: right;
            }
            .id-button-p,
            .id-button-d {
                display: inline-block;
                border: 0;
                padding: 0 50px;
                width: auto;
                height: 40px;
                border-radius: 3px;
                line-height: 40px;
                font-size: 17px;
                margin-left: 0;
                margin-right: 0;
                color: #FFF;
            }
            .id-button-p:hover,
            .id-button-d:hover {
                text-decoration: none;
                color: #FFF;
            }
            .id-button-p {
                background: #00A7C1;
            }
            .id-button-p:hover {
                background: #008299;
            }
            .id-button-d {
                background: #D9534F;
            }
            .id-button-d:hover {
                background: #C9302C;
            }
            .searchbtn {
                border: 0;
                margin: 0;
                padding: 0;
                background: transparent;
            }
            .hamburger {
                display: none;
            }
            .search2 {
                display: none;
            }
            @media (min-width: 768px) and (max-width: 991px) {
                .search {
                    display: none;
                }
                .search2 {
                    display: inline-block;
                }
                .search-input {
                    color: #000;
                }
            }
            @media (max-width: 767px) {
                .header-tel {
                    display: none;
                }
                .child-fixed-width-1100 {
                    padding: 0 4.16666665vw;
                }
                header.child-fixed-width-1100 {
                    padding: 0 0;
                }
                .lang {
                    width: 100px;
                    font-size: 19px;
                    position:relative;
                }
                .lang li {
                    float: none;
                    display: none;
                    background: #434343;
                    text-align: center;
                    padding: 0;
                }
                .lang li:first-child {
                    display: block;
                    background: transparent;
                }
                .lang li a {
                    display: inline;
                }
                nav.child-fixed-width-1100 {
                    padding:0 0 0 30px;
                }
                .menu {
                    background: #00A7C1;
                    padding: 15px 0;
                }
                .menu li {
                    float: none;
                    width: 240px;
                    text-align: center;
                    padding: 0;
                }
                .menu a {
                    display: block;
                    width: 210px;
                    height: 50px;
                    border-bottom: 1px solid #FFF;
                    text-align: center;
                    margin: 0 auto;
                    text-decoration: none;
                    color: #FFF;
                    font-size: 19px;
                    line-height: 50px;
                }
                .menu li:last-child a {
                    border: 0;
                }
                .menu-s {
                    clear: both;
                    display: none;
                }
                .hamburger {
                    display: block;
                    padding: 26px 30px 26px 0;
                }
                .icon-bar {
                    background: #959595;
                    display: block;
                    height: 3px;
                    margin: 0 auto 3px;
                    width: 30px;
                }
                .search {
                    display: none;

                }
                footer>div {
                    padding-left: 0;
                }
                footer>div div {
                    padding-left: 6.25vw;
                }
                .search-input {
                    color: #000;
                }
                .search2 {
                    display: inline-block;
                }
            }
        @show
    </style>
</head>
<body>
    @yield('modal')
    <div class="header-fixed">
        <header class="child-fixed-width-1100">
            <div>
                <span class="float-left header-tel">
                    {{ __('static.header_tel') }}
                </span>
                <span class="float-right header-lang" onclick="">
                    <ul class="lang">
                        <li>
                            @if (App::getLocale() === 'zh-TW')
                                繁
                            @elseif (App::getLocale() === 'zh-CN')
                                简
                            @elseif (App::getLocale() === 'ja')
                                日文
                            @else
                                English
                            @endif
                        </li>
                        @unless (App::getLocale() === 'zh-TW')
                            <li><a href="{{ url('/lang/set/zh-TW') }}">繁</a></li>
                        @endunless
                        @unless (App::getLocale() === 'zh-CN')
                            <li><a href="{{ url('/lang/set/zh-CN') }}">简</a></li>
                        @endunless
                        @unless (App::getLocale() === 'ja')
                            <li><a href="{{ url('/lang/set/ja') }}">日文</a></li>
                        @endunless
                        @unless (App::getLocale() === 'en')
                            <li><a href="{{ url('/lang/set/en') }}">English</a></li>
                        @endunless
                    </ul>
                </span>
                <span class="float-right search2">
                    <form method="GET" action="/search">
                        <input class="search-input" type="text" name="key" placeholder="{{ __('static.search') }}">
                        <button type="submit" class="searchbtn"><img alt="search" src="/images/search2.png"></button>
                    </form>
                </span>
            </div>
        </header>
        <nav class="child-fixed-width-1100">
            <div>
                <span class="float-left">
                    <a href="/"><img src="/images/logo.png" alt="Ximos Logo"></a>
                </span>
                <span class="float-right search">
                    <form method="GET" action="/search">
                        <input class="search-input" type="text" name="key" placeholder="{{ __('static.search') }}">
                        <button type="submit" class="searchbtn"><img alt="search" src="/images/search.png"></button>
                    </form>
                </span>
                <span class="hamburger float-right">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </span>
                <span class="menu-s float-right">
                    <ul class="menu">
                        <li><a href="/news">{{ __('static.news') }}</a></li>
                        <li><a href="/product">{{ __('static.product') }}</a></li>
                        <li><a href="/about">{{ __('static.about') }}</a></li>
                        <li><a href="/contact">{{ __('static.contact_us') }}</a></li>
                    </ul>
                </span>
            </div>
        </nav>
    </div>
    <div class="content">
        @yield('content')
    </div>
    <footer class="child-fixed-width-1100">
        <div>
            <div class="float-left">
                <h4>{{ __('static.address_header') }}</h4>
                {{ __('static.address') }}<br>
                {{ __('static.station') }}<br>
                {{ __('static.parking_space') }}
            </div>
            <div class="float-left">
                <h4>{{ __('static.contact_us') }}</h4>
                {{ __('static.tel') }}<br>
                {{ __('static.fax') }}<br>
                {{ __('static.open') }}<br>
                {{ __('static.closed') }}
            </div>
            <div class="float-left qrcode">
                <img src="/images/qrcode.png" alt="QR Code">
            </div>
        </div>
        <div class="copyright">© 2017 世茂科技股份有限公司 All Rights Reserved.</div>
    </footer>
    <script src ="/js/app.js"></script>
    <script src ="/js/header.js"></script>
    <script>
        $(document).ready(function() {
            $('.hamburger').on('click', function(e) {
                e.preventDefault();
                $('.menu-s').toggle();
            });
            $('.lang li:first-child').on('click', function(e) {
                e.preventDefault();
                $('.lang li:not(li:first-child)').toggle();
            });
        });
    </script>
    @yield('js')
</body>
</html>
