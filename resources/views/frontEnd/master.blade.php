<!DOCTYPE html><!--  Last Published: Thu Apr 04 2024 11:05:06 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="65d986a046f288ded9cd27e8" data-wf-site="65d986a046f288ded9cd27e2">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="{{$website->description}}">
    <meta name="keywords" content="{{$website->keywords}}"/>
    <meta property="og:title" content="{{$website->name}}">
    <meta property="og:description" content="{{$website->description}}">
    <meta property="og:image" content="{{$website->website_logo}}">
    <meta property="og:url" content="{{$website->url}}">
    <link rel="icon" href="{{asset($website->fav_icon)}}" type="image/x-icon">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="{{asset('homePage')}}/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="{{asset('homePage')}}/css/components.css" rel="stylesheet" type="text/css">
    <link href="{{asset('homePage')}}/css/trade-centre-nq.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>

    <link href="{{asset($website->fav_icon)}}" rel="apple-touch-icon">
</head>
<body>
<div class="header-wrapper">
@include('frontEnd.inc.header')

@yield('content')

@include('frontEnd.inc.footer')

<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=65d986a046f288ded9cd27e2" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{asset('homePage')}}/js/trade-centre-nq.js" type="text/javascript"></script>
</body>
</html>
