
  <div class="widget widget_popular_posts"><!-- widget  -->
    <h4 class="widget-title">Popular Posts</h4>
    <ul>


     
<li class="single-popular-post-item"><!-- single popular post item -->
    <div class="thumb">
        <img src="/assets/img/popular-post/01.jpg" alt="popular post image">
    </div>
    <div class="content">
        @if (isset($post))
        <span class="time">{{$post->created_at->diffForHumans()}}</span>
        <h4 class="title"><a href="blog/{{$post->slug}}">{{$post->title}}</a></h4>
        @endif
    </div>
</li><!-- //. single popular post item -->
    </ul>
   
</div>