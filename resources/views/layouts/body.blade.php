@extends('layouts.app')
@section('body')
<header id="header-wrap" style="margin-top:%">
@include('layouts.top-nav')
</header>
 
@yield('content')
 
<!-- <a href="#" class="back-to-top">
<i class="lni-chevron-up"></i>
</a> -->

<!-- <div id="preloader">
<div class="loader" id="loader-1"></div>
</div> -->

<!-- scripts starts here -->
<script src="{{ asset('assets/js/jquery-min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.slicknav.js')}}"></script>
<script src="{{ asset('assets/js/main.js')}}"></script>
@section('scripts')
@show
<!-- scripts ends here -->
@endsection