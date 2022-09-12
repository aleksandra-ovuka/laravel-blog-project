@props(['post'])


<div class="col-lg-6 col-md-6">
    <div class="single-blog-grid-item"><!-- single blog grid item -->
        <div class="thumb">
            <img src="/assets/img/blog/01.jpg" alt="blog images">
        </div>
        <div class="content">
            <ul class="post-meta">
                <li><a href="#">{{$post->created_at->diffForHumans()}}</a></li>
                <li><a href="#">By Adam helen</a></li>
            </ul>
            <h4 class="title"><a href="blog/{{$post->slug}}">{{$post->title}}</a></h4>
            <a href="#" class="readmore">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
        