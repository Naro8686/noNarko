@if(count($sliders))
    <section class="slider bg-blue cross-block" data-count-cross="5">
        <div class="ellipse-block" data-count-ellipse="120"></div>
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @for($i = 0; $i < count($sliders); $i++)
                    <li data-target="#carousel" data-slide-to="{{$i}}" @if($i === 0) class="active" @endif></li>
                @endfor
            </ol>
            <div class="carousel-inner">
                @foreach($sliders as $num => $slider)
                    <div class="carousel-item @if($num === 0) active @endif">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-lg-7">
                                    <div class="slider__text-block">
                                        <h1>{{$slider->title}}</h1>
                                        <p>{{$slider->desc}}</p>
                                        <a href="{{url($slider->button['link'])}}"
                                           class="appButton appButton-bold">{{$slider->button['text']}} <i
                                                class="icon-right-white d-lg-block d-none"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-5 d-lg-flex d-none align-items-center justify-content-start">
                                    <img
                                         data-src="{{asset($slider->img)}}"
                                         src="{{asset('img/dummy-image-350x250.gif')}}"
                                         alt="Third slide">
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </section>
@endif
