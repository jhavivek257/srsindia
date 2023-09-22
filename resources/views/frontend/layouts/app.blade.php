<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>SRSIndia – Shree Rani Sati Group</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="description" content="Your one-stop solution for Distribution Network, Modern Trade, Online Marketing, CFA Operations, Business Consultancy, and Brand Development.">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('frontend/images/favicon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontend/images/favicon.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('frontend/images/favicon.png')}}">
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/font-icons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/theme-vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/custom.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive.css')}}" />
</head>
<body data-mobile-nav-style="classic">
    <!-- start header -->
    @include('frontend.layouts.header')
    <!-- end header -->

    @yield('content')

    <!-- end footer section-->
    @include('frontend.layouts.footer')
    <!-- start scroll to top -->
    <!-- <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a> -->
    <!-- end scroll to top -->
    <!-- javascript -->
    <script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/theme-vendors.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/custom.js')}}"></script>
</body>
</html>