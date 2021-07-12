<div class="accordion-container">
    <div id="accordion" class="service-categories">
        @foreach($parentCategory->children as $category)
            <div class="card">
                <div class="card-header d-flex @if($category->id === $page->category->id) active @endif" id="heading-{{$category->id}}">
                    <button data-toggle="collapse" data-target="#collapse-{{$category->id}}"
                            aria-expanded="true" aria-controls="collapse-{{$category->id}}">
                        {{$category->name}}
                        @if(count($category->pages))
                            <svg width="13" height="12" viewBox="0 0 13 12" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.50049 12L12.9957 0.75L0.00529766 0.75L6.50049 12Z"/>
                            </svg>
                        @endif
                    </button>
                    <span class="line"></span>
                </div>
                @if(count($category->pages))
                    <div id="collapse-{{$category->id}}" class="collapse @if($category->id === $page->category->id) show @endif"
                         aria-labelledby="heading-{{$category->id}}"
                         data-parent="#accordion">
                        <div class="card-body">
                            @foreach($category->pages as $post)
                                <a @if($page->category->id === $category->id) class="text-underline" @endif href="{{url($post->seo->slug)}}">{{$post->title}}</a>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</div>
