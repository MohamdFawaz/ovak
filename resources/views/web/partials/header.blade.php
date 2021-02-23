<!Doctype html>
<html lang="{{app()->getLocale()}}" @if(app()->getLocale() == 'ar') dir="rtl" @else dir="ltr" @endif>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    @if('title')
        @yield('title')
    @else
        <title>{{__('front.head.title.name')}} | {{__('front.header.home')}}</title>
    @endif
    <link rel="icon" href="{{asset('static/assets/images/icon.png')}}" width="60">
    <meta property="og:title" content="Ovak Estate">
    <meta property="og:description" content="Present the perfect advise for the real estate seekers and the consultancy you need Own variable Advanced knowledge">
    <meta property="og:image" content="{{asset('static/assets/images/logo.png')}}">
    <meta property="og:url" content="https//www.ovakestate.com">
    <meta property="twitter:title" content="Ovak Estate">
    <meta property="twitter:description" content="Present the perfect advise for the real estate seekers and the consultancy you need Own variable Advanced knowledge">
    <meta property="twitter:image" content="{{asset('static/assets/images/logo.png')}}">
    <meta property="twitter:url" content="https//www.ovakestate.com">
    @if(app()->getLocale() == 'ar')
        <link name="custom-style" rel="stylesheet" href="{{asset('static/assets/styles/css-rtl/custom.css')}}">
        <link rel="stylesheet" href="{{asset('static/assets/styles/css-rtl/bootstrap.min.css')}}">
    @else
        <link name="custom-style" rel="stylesheet" href="{{asset('static/assets/styles/css-ltr/custom.css')}}">
        <link rel="stylesheet" href="{{asset('static/assets/styles/css-ltr/bootstrap.min.css')}}">
    @endif
    <link rel="stylesheet" href="{{asset('static/assets/styles/css/select.min.css?v=1.3')}}">
    <link rel="stylesheet" href="{{asset('static/assets/styles/css/slick.css?v=1.3')}}">
    <link rel="stylesheet" href="{{asset('static/assets/styles/css/slick-theme.css?v=1.3')}}">
    <link rel="stylesheet" href="{{asset('static/assets/styles/css/all.min.css?v=1.3')}}">
    <link rel="stylesheet" href="{{asset('static/assets/styles/css/main.css?v=1.3')}}">
</head>
<body id="body" data-spy="scroll" data-target=".footer" data-offset="50">
<div class="return-top">
    <button onclick="topFunction()" id="top" class="ovak-button">
        <i class="white-color fa fa-angle-double-up"></i>
    </button>
</div>
