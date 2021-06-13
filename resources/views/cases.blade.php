@extends('layouts.app')

@section('content')
    <div class="container cases">
        <ol class="history d-none d-lg-flex">
            <li><a href="{{route('home')}}">Главная</a></li>
            <li>Успешные кейсы лечения</li>
        </ol>
        <h1 class="title mt-100">Успешные кейсы лечения</h1>
        <p class="desc"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
            the industry's standard dummy text ever since the.</p>
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
        <div id="carousel-collapse" class="carousel slide pointer-event app-carousel" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex flex-column">
                        <div class="mb-5 cases-item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}" data-src="{{asset('img/items/rectangle-2.png')}}"
                                 alt="">
                            <div>
                                <div>
                                    <h2>Лечение психики после употребления наркотиков</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry</p>
                                    <hr>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                    an
                                    unknown printer took a galley of type and scrambled it to make a type
                                    specimen
                                    book.Lorem Ipsum is simply dummy text of the printing and...has been the
                                    industry's standard dummy text ever since the 1500s, when an unknown. Lorem
                                    Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry's standard...</p>
                                <a class="position-absolute" href="#"> Читать польностью
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.43002 6.46512L1.64486 0.364517C1.51105 0.223303 1.33244 0.145508 1.14198 0.145508C0.951529 0.145508 0.772912 0.223303 0.639109 0.364517L0.213071 0.813681C-0.0641539 1.10636 -0.0641539 1.58205 0.213071 1.87429L5.07102 6.99721L0.207681 12.1258C0.0738775 12.267 0 12.4553 0 12.656C0 12.857 0.0738775 13.0452 0.207681 13.1865L0.633718 13.6356C0.767628 13.7768 0.946139 13.8546 1.13659 13.8546C1.32705 13.8546 1.50566 13.7768 1.63947 13.6356L7.43002 7.52941C7.56414 7.38775 7.63781 7.19861 7.63738 6.99755C7.63781 6.7957 7.56414 6.60667 7.43002 6.46512Z"
                                              fill="currentColor"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="mb-5 cases-item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}" data-src="{{asset('img/items/rectangle-2.png')}}"
                                 alt="">
                            <div>
                                <div>
                                    <h2>Лечение психики после употребления наркотиков</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry</p>
                                    <hr>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                    an
                                    unknown printer took a galley of type and scrambled it to make a type
                                    specimen
                                    book.Lorem Ipsum is simply dummy text of the printing and...has been the
                                    industry's standard dummy text ever since the 1500s, when an unknown. Lorem
                                    Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry's standard...</p>
                                <a class="position-absolute" href="#"> Читать польностью
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.43002 6.46512L1.64486 0.364517C1.51105 0.223303 1.33244 0.145508 1.14198 0.145508C0.951529 0.145508 0.772912 0.223303 0.639109 0.364517L0.213071 0.813681C-0.0641539 1.10636 -0.0641539 1.58205 0.213071 1.87429L5.07102 6.99721L0.207681 12.1258C0.0738775 12.267 0 12.4553 0 12.656C0 12.857 0.0738775 13.0452 0.207681 13.1865L0.633718 13.6356C0.767628 13.7768 0.946139 13.8546 1.13659 13.8546C1.32705 13.8546 1.50566 13.7768 1.63947 13.6356L7.43002 7.52941C7.56414 7.38775 7.63781 7.19861 7.63738 6.99755C7.63781 6.7957 7.56414 6.60667 7.43002 6.46512Z"
                                              fill="currentColor"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="mb-5 cases-item">
                            <img src="{{asset('img/dummy-image-350x250.gif')}}" data-src="{{asset('img/items/rectangle-2.png')}}"
                                 alt="">
                            <div>
                                <div>
                                    <h2>Лечение психики после употребления наркотиков</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry</p>
                                    <hr>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                    an
                                    unknown printer took a galley of type and scrambled it to make a type
                                    specimen
                                    book.Lorem Ipsum is simply dummy text of the printing and...has been the
                                    industry's standard dummy text ever since the 1500s, when an unknown. Lorem
                                    Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum
                                    has been the industry's standard...</p>
                                <a class="position-absolute" href="#"> Читать польностью
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.43002 6.46512L1.64486 0.364517C1.51105 0.223303 1.33244 0.145508 1.14198 0.145508C0.951529 0.145508 0.772912 0.223303 0.639109 0.364517L0.213071 0.813681C-0.0641539 1.10636 -0.0641539 1.58205 0.213071 1.87429L5.07102 6.99721L0.207681 12.1258C0.0738775 12.267 0 12.4553 0 12.656C0 12.857 0.0738775 13.0452 0.207681 13.1865L0.633718 13.6356C0.767628 13.7768 0.946139 13.8546 1.13659 13.8546C1.32705 13.8546 1.50566 13.7768 1.63947 13.6356L7.43002 7.52941C7.56414 7.38775 7.63781 7.19861 7.63738 6.99755C7.63781 6.7957 7.56414 6.60667 7.43002 6.46512Z"
                                              fill="currentColor"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="d-flex justify-content-end align-items-center"><a class="carousel-control-prev"
                                                                          href="#carousel-collapse" role="button"
                                                                          data-slide="prev">
                    <svg class="icon-left" width="15" height="24" viewBox="0 0 15 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.717 11.0635L3.03666 0.383412C2.78964 0.136194 2.45988 0 2.10828 0C1.75667 0 1.42692 0.136194 1.17989 0.383412L0.393363 1.16975C-0.118438 1.68213 -0.118438 2.51491 0.393363 3.02651L9.36188 11.995L0.383412 20.9735C0.136389 21.2207 0 21.5503 0 21.9017C0 22.2535 0.136389 22.583 0.383412 22.8305L1.16994 23.6166C1.41716 23.8638 1.74672 24 2.09832 24C2.44993 24 2.77969 23.8638 3.02671 23.6166L13.717 12.9267C13.9646 12.6787 14.1006 12.3476 14.0998 11.9956C14.1006 11.6422 13.9646 11.3113 13.717 11.0635Z"
                              fill="currentColor"></path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-collapse" role="button" data-slide="next">
                    <svg class="icon-right" width="15" height="24" viewBox="0 0 15 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.717 11.0635L3.03666 0.383412C2.78964 0.136194 2.45988 0 2.10828 0C1.75667 0 1.42692 0.136194 1.17989 0.383412L0.393363 1.16975C-0.118438 1.68213 -0.118438 2.51491 0.393363 3.02651L9.36188 11.995L0.383412 20.9735C0.136389 21.2207 0 21.5503 0 21.9017C0 22.2535 0.136389 22.583 0.383412 22.8305L1.16994 23.6166C1.41716 23.8638 1.74672 24 2.09832 24C2.44993 24 2.77969 23.8638 3.02671 23.6166L13.717 12.9267C13.9646 12.6787 14.1006 12.3476 14.0998 11.9956C14.1006 11.6422 13.9646 11.3113 13.717 11.0635Z"
                              fill="currentColor"></path>
                    </svg>
                    <span class="sr-only">Next</span>
                </a></div>
        </div>
    </div>
    @include('include.seoText')
@endsection
