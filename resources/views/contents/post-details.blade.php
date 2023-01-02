@extends('layouts.body')
@section('content')
<div class="main-container section-padding">
<div class="container">

<!-- post details -->
<div class="blog-post single-post mt-5 ml-5">
<div class="meta card-body">
<span class="meta-part mt-5"> By Ryan Jackson</span>
<h2 class="post-title"> Eum Iriure Dolor Duis Autem</h2>
</div>
<img class="img-fluid card-body" src="{{ asset('assets/imgs/img-2.jpg')}}" height="280" width="500" alt="">
<div class="post-content">
<div class="entry-summary">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi qui fuga quam hic possimus nihil iure assumenda odio at reprehenderit magni debitis cupiditate quidem nobis <strong>Helvetica</strong> repellendus doloribus, rerum aut in! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias repellat autem accusantium cupiditate animi consectetur. Beatae quia labore, sunt fugit accusantium. Deleniti excepturi ducimus error, ipsam voluptates eius sint odio!</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetuer</strong> adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. <strong>Investigationes</strong> demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram</p>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
</div>
</div>
</div>
<!-- post details ends -->

<!-- Grid view Starts-->
<div id="grid-view" class="tab-pane mt-5">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
<div>
<h5 class="post-text">More Articles</h5>
</div>
<div class="featured-box">
<figure>
<a href="#"><img class="img-fluid" src="{{ asset('assets/imgs/img-2.jpg')}}" alt=""></a>
</figure>
<div class="feature-content">
<div class="post">
<a href="#">Front end - </a>
<a href="#">2 Months Ago</a>
</div>
<h4><a href="#">Canon SX Powershot</a></h4>
<p class="dsc">
Not long ago I decided to improve the loading times of my website. It already loads pretty fast, but I knew there was still room for improvement and one of them was CSS loading. I will walk you through the process and show you how you can improve your load times as well.

To see how CSS affects the load time of a webpage we first have to know how the browser converts an HTML document into a functional webpage...
</p>
<div class="listing-bottom">
 <a href="#" class="float-right"> read more <i class="lni-arrow-right mt-5"></i></a>
</div>
</div>
</div>
</div>
 
</div>
</div>
<!-- Grid view Ends -->
</div>
</div>
    
@endsection