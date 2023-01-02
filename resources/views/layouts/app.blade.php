<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="site_url" content="{{url('')}}">
   <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Blog</title>

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/line-icons.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slicknav.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css')}}">
<link rel="icon" href="{{ asset('assets/imgs/favicon.png')}}" type="image/x-icon">
@section('header')
@show
</head>

<body>
   @yield('body') 
</body>
</html>