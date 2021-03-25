<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <link rel="shortcut icon" href="favicon.png" type="image/png">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="/css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/fonts.css" rel="stylesheet" type="text/css" media="all" />

    <!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>

<body>
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="/">Blog</a></h1>
            </div>
            <div id="menu">
                <ul>
                    <li class="{{ Request::path() === '/' ? 'current_page_item' : ''}}"><a href="/" accesskey="1"
                            title="">Homepage</a></li>
                    <li class="{{ Request::path() === 'articles' ? 'current_page_item' : ''}}"><a href="/articles"
                            accesskey="4" title="">Articles</a></li>
                    <li class="{{ Request::path() === 'articles/create' ? 'current_page_item' : ''}}"><a
                            href="/articles/create" accesskey="4" title="">New Article</a></li>
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="#" role="button" v-pre>
                            {{ Auth::user()->name }}
                        </a> </li>
                    <li>
                        <div class="nav-link" aria-labelledby="navbarDropdown">
                            <a class="nav-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
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
    </div>
    @yield('content')
    <div id="copyright" class="container">
        <p>&copy; Untitled. All rights reserved. | Created by Seppe Geuens | Design by <a href="http://templated.co"
                rel="nofollow">TEMPLATED</a>.</p>
    </div>
</body>

</html>