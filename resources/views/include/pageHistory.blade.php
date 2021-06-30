@if($home = page('home'))
    <ol class="history d-none d-lg-flex">
        <li><a href="{{$home->url()}}">{{$home->seoTitle}}</a></li>
        <li>{{$page->seoTitle}}</li>
    </ol>
@endif
