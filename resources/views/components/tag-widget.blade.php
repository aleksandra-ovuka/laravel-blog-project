@props(['post'])

<div class="widget widget_tag_cloud"><!-- widget -->
        <h4 class="widget-title">Tags</h4>


                        @foreach($post->take(3)->pluck('tags') as $mtag)
                        @php $ntag= explode(' ', $mtag) @endphp
                        @foreach ($ntag as $stag)
                            <div class="tagcloud">
                                <a href="blog?tag={{$stag}}"> {{$stag}}</a>
                    @endforeach
                    @endforeach
                    
                            </div>
</div>