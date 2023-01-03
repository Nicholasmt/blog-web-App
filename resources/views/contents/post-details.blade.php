@extends('layouts.body')
@section('content')
<div class="main-container section-padding">
<div class="container">

<!-- post details -->
<div class="blog-post single-post mt-5 ml-5">
<div class="meta card-body">
<span class="meta-part mt-5"> By Ryan Jackson</span>
<h2 class="post-title"> {{$post_detail['title']['rendered']}} </h2>
</div>
<img class="img-fluid card-body" src="{{$post_detail['jetpack_featured_media_url']}}" height="280" width="500" alt="">
<div class="post-content">
<div class="entry-summary">
<p>{!!$post_detail['content']['rendered']!!}</p>
</div>
</div>
</div>
<!-- post details ends -->

<!-- More Articles Starts-->
<div id="grid-view" class="tab-pane mt-5">
<div>
<h5 class="post-text">More Articles</h5>
</div>
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
{{$post['primary_category']['name']}}
 {{$post['date']}}
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
</p>
<div class="listing-bottom">
 
</div>
</div>
</div>
</div>     
@endforeach
@endforeach
</div>
</div>
<!-- More Articles Ends-->
</div>
</div>
    
@endsection