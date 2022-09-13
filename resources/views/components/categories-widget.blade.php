@props(['category'])
                            
                                <li class="cat-item">
                                    <a  href="{{route('blog', ['category' => $category->name ])}}">
                                {{$category->name}}
                                    </a>
                            </li>
                           
                        