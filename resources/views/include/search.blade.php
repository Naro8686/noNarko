<ul class="list-group">
    @foreach($links as $link)
        <li class="list-group-item"><a href="{{$link->url()}}">{{$link->title}}</a> </li>
    @endforeach
</ul>
