
<x-layout>
<!-- breadcrumb area start -->
    <x-breadcrump-area/>
<!-- breadcrumb area end -->

<!-- post area start -->
<div class="page-content-area padding-top-120 padding-bottom-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                    <div class="single-post-details-item"><!-- blog single content -->
                        <div class="thumb">
                            <img src="/assets/img/blog/blog-details.jpg" alt="blog image">
                        </div>
                        <div class="entry-content">
                            <ul class="post-meta">
                                <li><a href="#"><i class="far fa-calendar-alt"></i> {{$post->created_at->diffForHumans()}}</a></li>
                                <li><a href="#"><i class="far fa-user"></i> Admin</a></li>
                                <x-tags :tagsCsv='$post->tags'/>
                            </ul>
                            <h4 class="title">{{$post->title}}  </h4>
                            <p> 
                            {{$post->body}}
                            </p>
                        </div>
                        <div class="entry-footer"><!-- entry footer -->
                            <div class="left">
                                <ul class="tags">
                                    <li class="title">Tags: </li>
                                    <x-tags :tagsCsv='$post->tags'/>
                                </ul>
                            </div>
                            <div class="right">
                                <ul class="social-share">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div><!-- //. entry footer -->
    <!-- post area end-->

    <!-- comments area start-->

    <x-comments-area/>

    <!-- comments area end-->

    <!-- widget area start-->
 <div class="col-lg-4">
    <div class="sidebar widget-area"><!-- widget area -->


    <x-search/>
    <x-tag-widget :post='$post'/>
    <x-categories-widget/>
    <x-popular-post-item/>
   

    </div>
 </div>
</div>
</div>
</div>
    <!-- widget area end-->



</x-layout>

