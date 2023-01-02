@extends('layouts.body')
@section('content')
<div class="main-container section-padding">
<div class="container">
<!-- list view Starts-->
<div id="list-view" class="tab-pane mt-5">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-5">
<div class="featured-box">
<figure>
 <a href="#"><img class="img-fluid" src="{{ asset('assets/imgs/img-2.jpg')}}" height="280" width="500" alt=""></a>
</figure>
<div class="feature-content">
<div class="post">
<a href="#">Front-end . </a>
<a href="#">1 Hour Ago</a>
</div>
<h4><a href="{{ route('post-details')}}">Canon SX Powershot</a></h4>
<p class="dsc">
Not long ago I decided to improve the loading times of my website. It already loads pretty fast, but I knew there was still room for improvement and one of them was CSS loading. I will walk you through the process and show you how you can improve your load times as well.

To see how CSS affects the load time of a webpage we first have to know how the browser converts an HTML document into a functional webpage...
</p>
<div class="listing-bottom">
 <a href="{{ route('post-details')}}" class="float-right">Read Full <i class="lni-arrow-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- list view Ends  -->
<!-- Grid view Starts-->
<div id="grid-view" class="tab-pane mt-5">
<div class="row">
@foreach ($posts as $post)
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
<div class="featured-box">
<figure>
 <a href="{{ route('post-details')}}"><img class="img-fluid" src="{{$post['jetpack_featured_media_url']}}" alt=""></a>
</figure>
<div class="feature-content">
<div class="post">
 @foreach ($post['primary_category'] as $category)
   {{$category['name']}}  
 @endforeach
     
{{$post['date'] }}
</div>
<h4><a href="{{ route('post-details')}}">Canon SX Powershot</a></h4>
<p class="dsc">
Not long ago I decided to improve the loading times of my website. It already loads pretty fast, but I knew there was still room for improvement and one of them was CSS loading. I will walk you through the process and show you how you can improve your load times as well.

To see how CSS affects the load time of a webpage we first have to know how the browser converts an HTML document into a functional webpage...
</p>
<div class="listing-bottom">
 <a href="#" class="float-right">Read Full <i class="lni-arrow-right mt-5"></i></a>
</div>
</div>
</div>
</div>
@endforeach 
</div>
</div>
<!-- Grid view Ends -->
 
<section class="mt-5">
<div class="text-center">
<h4 class="text_font">Join our Team of Writers</h4>
<p class="">On dasdas, writers earn a living doing what they love.</p>
<p>Getting started is easy. Just pay a one time $25 fee and everything is ready to go.</p>
<a href="#" class="btn btn-dark mt-4">JOIN US</a>
</div>
</section>

</div>
</div>
@endsection