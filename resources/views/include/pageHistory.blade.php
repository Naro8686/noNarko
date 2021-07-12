@if($home = page('home'))
    <ol class="history d-none d-lg-flex">
        <li><a href="{{$home->url()}}">{{ucfirst($home->seo->title)}}</a></li>
        @if(isset($parentCategory) && $parentCategory->name !== $page->name && page($parentCategory->name)->exists)
            <li>
                <a href="{{page($parentCategory->name)->url()}}">{{ucfirst(page($parentCategory->name)->seo->title)}}</a>
            </li>
        @endif
        <li>{{ucfirst($page->seo->title)}}</li>
    </ol>
@endif
