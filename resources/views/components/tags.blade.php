@props (['tagsCsv'])

@php

$tags= explode(' ',$tagsCsv)

@endphp

    @foreach($tags as $tag)

    <li class="cat">
        <i class="fas fa-tags"></i>
           <a href="blog/tag={{$tag}}">{{$tag}}</a> 
    </li>
@endforeach
</ul>