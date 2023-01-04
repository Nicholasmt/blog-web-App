@extends('layouts.body')
@section('content')
<div class="main-container section-padding">
<div class="container">
<!-- list view Starts-->
<div id="list-view" class="tab-pane mt-5">
<div class="row">
@foreach ($posts->chunk(20) as $group)
@foreach ($group as $post_content)
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-5">
<div class="featured-box">
<figure>
 <a href="{{ route('post-details',$post_content['id'])}}"><img class="img-fluid" src="{{$post_content['jetpack_featured_media_url']}}" height="280" width="500" alt=""></a>
</figure>
<div class="feature-content">
<div class="post">
{{$post_content['primary_category']['name']}} -
<?php $dateformat = new DateTime($post_content['date']); ?>
{{$dateformat->format('d')}} {{$dateformat->format('F')}} {{$dateformat->format('Y') }} 
 <!-- {{$post_content['date']}} -->
</div>
<h4><a href="{{ route('post-details',$post_content['id'])}}">{!!$post_content['title']['rendered'] !!}</a></h4>
<p class="dsc">
<?php
$content = strip_tags($post_content['content']['rendered'])
?>
 {!! substr($content,0,400) !!}  
 @if (strlen($content) > 400)... <a href="{{ route('post-details',$post_content['id'])}}" class="">Read Full <i class="lni-arrow-right mt-5"></i></a>@endif
</p>
<div class="listing-bottom">
 <!-- <a href="#" class="float-right">Read Full <i class="lni-arrow-right"></i></a> -->
</div>
</div>
</div>
</div>
@break
@endforeach
@endforeach
</div>
</div>
<!-- list view Ends  -->
<!-- Grid view Starts-->
<div id="grid-view" class="tab-pane mt-5">
<div class="row">
@foreach ($posts->chunk(20) as $group)
@foreach ($group as $post)
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
<div class="featured-box">
<figure>
 <a href="{{ route('post-details',$post['id'])}}"><img class="img-fluid" src="{{$post['jetpack_featured_media_url']}}" alt=""></a>
</figure>
<div class="feature-content">
<div class="post">
 {{$post['primary_category']['name']}} - 
 <?php $dateformat = new DateTime($post['date']); ?>
{{$dateformat->format('d')}} {{$dateformat->format('F')}} {{$dateformat->format('Y') }} 
 <!-- {{$post['date']}} -->
</div>
<h4>
<a href="{{ route('post-details',$post['id'])}}">
{{$post['title']['rendered']}}  
</a>
</h4>
<p class="dsc">
<?php
$content = strip_tags($post['content']['rendered'])
?>
 {!! substr($content,0,200) !!}  
 @if (strlen($content) > 200)... <a href="{{ route('post-details',$post['id'])}}" class="">Read Full <i class="lni-arrow-right mt-5"></i></a>@endif
 </p>
<div class="listing-bottom">
 
</div>
</div>
</div>
</div>
@endforeach 
@endforeach
</div>
<div class="justify-center">
    {{$posts->links()}}
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