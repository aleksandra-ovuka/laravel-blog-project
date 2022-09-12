
<x-layout>

<!-- breadcrumb area start -->

<x-breadcrump-area/>

<!-- breadcrumb area end -->



<div class="page-content-area padding-top-120 padding-bottom-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
@foreach ($posts as $post)

                <x-post-card :post="$post"/>
                </div>
    </div><!-- //. single blog grid item -->
</div>
                                      
@endforeach
               <div class="col-lg-12">
                 <div class="blog-pagination margin-top-10"><!-- blog pagination -->

                                <x-pagination/>
                      </div><!-- //. blog pagination -->
                    </div>
                </div>
            </div>
            
            
            <div class="col-lg-4">
    <div class="sidebar widget-area"><!-- widget search area -->

        <x-search/>
            

              </div><!-- //. widget -->
                        <div class="widget widget_categories"><!-- widget  -->
                                                        <x-categories-widget/>
                        </div>
                        <div class="widget widget_popular_posts"><!-- widget  -->
                            
                            <ul>
                                
                                <x-popular-post-item/>
                            </ul>
                        </div>
                        <div class="widget widget_tag_cloud"><!-- widget tags-->

                            <x-tag-widget :post='$post'/>
                      </div>
    
                    </div>
            </div>
        </div>
    </div>


</x-layout>
