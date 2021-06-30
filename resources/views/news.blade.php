@extends('layouts.app')

@section('content')
    <div class="container news">
        @include('include.proposal',['class'=>'d-block d-lg-none mb-5'])
        @include('include.pageHistory')
        <h1 class="title">{{$page->title}}</h1>
        <div class="desc">{!! $page->body !!}</div>
        <div class="select__block">
            <div>
                <label class="h3 text-uppercase" for="therapy">Лечение</label>
                <div class="select_box">
                    <select id="therapy">
                        <option>Алкоголизм</option>
                        <option>Алкоголизм</option>
                        <option>Алкоголизм</option>
                        <option>Алкоголизм</option>
                    </select>
                </div>
            </div>
            <div>
                <label class="h3 text-uppercase" for="course">Направление</label>
                <div class="select_box">
                    <select id="course">
                        <option>Алкоголизм</option>
                        <option>Алкоголизм</option>
                        <option>Алкоголизм</option>
                        <option>Алкоголизм</option>
                    </select>
                </div>
            </div>
            <div>
                <label class="h3 text-uppercase" for="view">вид</label>
                <div class="select_box">
                    <select id="view">
                        <option>Онлайн помощь</option>
                        <option>Онлайн помощь</option>
                        <option>Онлайн помощь</option>
                    </select>
                </div>
            </div>
            <div>
                <label class="h3 text-uppercase" for="sphere">Сфера</label>
                <div class="select_box">
                    <select id="sphere">
                        <option>Лечение алкоголизма</option>
                        <option>Лечение алкоголизма</option>
                        <option>Лечение алкоголизма</option>
                    </select>
                </div>
            </div>
        </div>
        <div id="carousel-news" class="carousel slide pointer-event app-carousel" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex flex-wrap flex-row justify-content-between">
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex flex-wrap flex-row justify-content-between">
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                        <div class="block__item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                 data-src="{{asset('img/items/Rectangle.png')}}" alt="">
                            <div>
                                <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has
                                    been the industry's Ipsum is simply dummy text of the </p>
                                <a href="#">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end align-items-center"><a class="carousel-control-prev"
                                                                          href="#carousel-news" role="button"
                                                                          data-slide="prev">
                    <svg class="icon-left" width="15" height="24" viewBox="0 0 15 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.717 11.0635L3.03666 0.383412C2.78964 0.136194 2.45988 0 2.10828 0C1.75667 0 1.42692 0.136194 1.17989 0.383412L0.393363 1.16975C-0.118438 1.68213 -0.118438 2.51491 0.393363 3.02651L9.36188 11.995L0.383412 20.9735C0.136389 21.2207 0 21.5503 0 21.9017C0 22.2535 0.136389 22.583 0.383412 22.8305L1.16994 23.6166C1.41716 23.8638 1.74672 24 2.09832 24C2.44993 24 2.77969 23.8638 3.02671 23.6166L13.717 12.9267C13.9646 12.6787 14.1006 12.3476 14.0998 11.9956C14.1006 11.6422 13.9646 11.3113 13.717 11.0635Z"
                            fill="currentColor"></path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-news" role="button" data-slide="next">
                    <svg class="icon-right" width="15" height="24" viewBox="0 0 15 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.717 11.0635L3.03666 0.383412C2.78964 0.136194 2.45988 0 2.10828 0C1.75667 0 1.42692 0.136194 1.17989 0.383412L0.393363 1.16975C-0.118438 1.68213 -0.118438 2.51491 0.393363 3.02651L9.36188 11.995L0.383412 20.9735C0.136389 21.2207 0 21.5503 0 21.9017C0 22.2535 0.136389 22.583 0.383412 22.8305L1.16994 23.6166C1.41716 23.8638 1.74672 24 2.09832 24C2.44993 24 2.77969 23.8638 3.02671 23.6166L13.717 12.9267C13.9646 12.6787 14.1006 12.3476 14.0998 11.9956C14.1006 11.6422 13.9646 11.3113 13.717 11.0635Z"
                            fill="currentColor"></path>
                    </svg>
                    <span class="sr-only">Next</span>
                </a></div>
        </div>
    </div>
    @include('include.seoText',['text' => $page->seoText, 'body' => $page->seoBody])
@endsection
