<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{!! asset('assets/css/font-awesome.min.css') !!}">
    <!--bootstrap css-->
    <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!}">
    <!--animate css-->
    <link rel="stylesheet" href="{!! asset('assets/css/animate-wow.css') !!}">
    <!--main css-->
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/bootstrap-select.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/slick.min.css') !!}">
    <!--responsive css-->
    <link rel="stylesheet" href="{!! asset('assets/css/responsive.css') !!}">
    <title>@yield('title')</title>
</head>
<body>
    @include('partials.header')
    @include('partials.modal')
    @include('partials.sidebar')

    @yield('content')

    @include('partials.footer')
    
    <!--main js--> 
      <script src="assets/js/jquery-1.12.4.min.js"></script> 
      <!--bootstrap js--> 
      <script src="assets/js/bootstrap.min.js"></script> 
      <script src="assets/js/bootstrap-select.min.js"></script>
      <script src="assets/js/slick.min.js"></script> 
      <script src="assets/js/wow.min.js"></script>
      <!--custom js--> 
      <script src="assets/js/custom.js"></script>
</body>
</html>