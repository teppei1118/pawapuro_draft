<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>@yield('title')｜nodoame.net</title>
    <meta name="description" itemprop="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('pageCss')

    <title>Hello, world!</title>
</head>
<body>
@yield('header')
<div class="contents">
    <!-- コンテンツ -->
    <div class="main">
        @yield('content')
    </div>

    <!-- 共通メニュー -->
    <div class="sub">
        @yield('submenu')
    </div>
    @yield('pageJs')
</div>

@yield('footer')
</body>
</html>