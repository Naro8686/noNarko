<div class="carousel-inner">
    @foreach($posts->chunk(16) as $chunks)
        <div class="carousel-item @if($loop->first) active @endif">
            <div class="d-flex flex-wrap flex-row justify-content-between">
                @foreach($chunks as $post)
                    <div class="block__item">
                        <img src="{{asset('img/dummy-image-350x250.gif')}}"
                             data-src="{{asset($post->image)}}" alt="blog">
                        <div>
                            <h3 class="text-uppercase">{{Str::limit($post->title,58)}}</h3>
                            <hr>
                            <p>{{Str::limit(strip_tags($post->body),150)}}</p>
                            <a href="{{url($post->seo->slug)}}">Читать полностью <i
                                    class="icon-right-orange d-lg-block d-none"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
@if(count($posts) > 16)
    <div class="d-flex justify-content-end align-items-center">
        <a class="carousel-control-prev"
           href="#carousel-posts" role="button"
           data-slide="prev">
            <svg class="icon-left" width="15" height="24" viewBox="0 0 15 24" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13.717 11.0635L3.03666 0.383412C2.78964 0.136194 2.45988 0 2.10828 0C1.75667 0 1.42692 0.136194 1.17989 0.383412L0.393363 1.16975C-0.118438 1.68213 -0.118438 2.51491 0.393363 3.02651L9.36188 11.995L0.383412 20.9735C0.136389 21.2207 0 21.5503 0 21.9017C0 22.2535 0.136389 22.583 0.383412 22.8305L1.16994 23.6166C1.41716 23.8638 1.74672 24 2.09832 24C2.44993 24 2.77969 23.8638 3.02671 23.6166L13.717 12.9267C13.9646 12.6787 14.1006 12.3476 14.0998 11.9956C14.1006 11.6422 13.9646 11.3113 13.717 11.0635Z"
                    fill="currentColor"></path>
            </svg>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-posts" role="button" data-slide="next">
            <svg class="icon-right" width="15" height="24" viewBox="0 0 15 24" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13.717 11.0635L3.03666 0.383412C2.78964 0.136194 2.45988 0 2.10828 0C1.75667 0 1.42692 0.136194 1.17989 0.383412L0.393363 1.16975C-0.118438 1.68213 -0.118438 2.51491 0.393363 3.02651L9.36188 11.995L0.383412 20.9735C0.136389 21.2207 0 21.5503 0 21.9017C0 22.2535 0.136389 22.583 0.383412 22.8305L1.16994 23.6166C1.41716 23.8638 1.74672 24 2.09832 24C2.44993 24 2.77969 23.8638 3.02671 23.6166L13.717 12.9267C13.9646 12.6787 14.1006 12.3476 14.0998 11.9956C14.1006 11.6422 13.9646 11.3113 13.717 11.0635Z"
                    fill="currentColor"></path>
            </svg>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endif
