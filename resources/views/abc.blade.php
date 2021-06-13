@extends('layouts.app')

@section('content')
    <div class="container abc">
        <ol class="history d-none d-lg-flex">
            <li><a href="{{route('home')}}">Главная</a></li>
            <li>Азбука наркомана</li>
        </ol>
        <h1 class="title mt-4">Азбука наркомана</h1>
        <p class="desc"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
            the industry's standard dummy text ever since the.</p>
        <div class="flexbox mt-5">
            <div class="box flex-column">
                <label class="abc-search">
                    <img alt="search" src="{{asset('img/icon/search.svg')}}">
                    <input class="w-100" type="text" name="search">
                </label>
                <div class="abc-navigation text-uppercase">
                    <a href="#">А</a> <a href="#">Б</a> <a href="#">В</a> <a href="#">Г</a> <a href="#">д</a> <a
                        href="#">Е</a> <a href="#">Ж</a> <a href="#">З</a> <a href="#">И</a> <a href="#">Й</a> <a
                        href="#">К</a> <a href="#">Л</a> <a href="#">М</a> <a href="#">Н</a> <a href="#">О</a> <a
                        href="#">П</a> <a href="#">Р</a> <a href="#">С</a> <a href="#">Т</a> <a href="#">У</a> <a
                        href="#">Ф</a> <a href="#">Х</a> <a href="#">Ц</a> <a href="#">Ч</a> <a href="#">Ш</a> <a
                        href="#">Щ</a> <a href="#">Э</a> <a href="#">Ю</a> <a href="#">Я</a></div>
            </div>
            <div class="box"></div>
        </div>
        <div class="flexbox">
            <div class="box mb-5">
                <div class="accordion-container">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header d-flex" id="heading-1">
                                <button data-toggle="collapse" data-target="#collapse-1"
                                        aria-expanded="true" aria-controls="collapse-1">Лечение наркомании
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="currentColor"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.50049 12L12.9957 0.75L0.00529766 0.75L6.50049 12Z"/>
                                    </svg>
                                </button>
                                <span class="line"></span>
                            </div>
                            <div id="collapse-1" class="collapse" aria-labelledby="heading-1"
                                 data-parent="#accordion">
                                <div class="card-body">
                                    <a href="#">Вывод из запоя </a>
                                    <a href="#">Вывод из запоя на дому </a>
                                    <a href="#">Вывод из запоя в стационаре</a>
                                    <a href="#">Прерывание запоя</a>
                                    <a href="#">Лечение алкоголизма в стационаре</a>
                                    <a href="#">Лечение женского алкоголизма</a>
                                    <a href="#">Лечение пивного алкоголизма</a>
                                    <a href="#">Лечение пивного алкоголизма</a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex" id="heading-2">
                                <button data-toggle="collapse" data-target="#collapse-2"
                                        aria-expanded="true" aria-controls="collapse-2">Лечение наркомании
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="currentColor"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.50049 12L12.9957 0.75L0.00529766 0.75L6.50049 12Z"/>
                                    </svg>
                                </button>
                                <span class="line"></span>
                            </div>
                            <div id="collapse-2" class="collapse" aria-labelledby="heading-2"
                                 data-parent="#accordion">
                                <div class="card-body">
                                    <a href="#">Вывод из запоя </a>
                                    <a href="#">Вывод из запоя на дому </a>
                                    <a href="#">Вывод из запоя в стационаре</a>
                                    <a href="#">Прерывание запоя</a>
                                    <a href="#">Лечение алкоголизма в стационаре</a>
                                    <a href="#">Лечение женского алкоголизма</a>
                                    <a href="#">Лечение пивного алкоголизма</a>
                                    <a href="#">Лечение пивного алкоголизма</a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex" id="heading-3">
                                <button data-toggle="collapse" data-target="#collapse-3"
                                        aria-expanded="true" aria-controls="collapse-3">Лечение игровой зависимости
                                </button>
                                <span class="line"></span>
                            </div>
                            <div id="collapse-3" class="collapse" aria-labelledby="heading-3"
                                 data-parent="#accordion">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex" id="heading-4">
                                <button data-toggle="collapse" data-target="#collapse-4"
                                        aria-expanded="true" aria-controls="collapse-4">Принудительное лечение
                                    наркозависимых
                                </button>
                                <span class="line"></span>
                            </div>
                            <div id="collapse-4" class="collapse" aria-labelledby="heading-4"
                                 data-parent="#accordion">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex" id="heading-5">
                                <button data-toggle="collapse" data-target="#collapse-5"
                                        aria-expanded="true" aria-controls="collapse-5">Принудительное лечение
                                    алкоголиков
                                </button>
                                <span class="line"></span>
                            </div>
                            <div id="collapse-5" class="collapse" aria-labelledby="heading-5"
                                 data-parent="#accordion">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex" id="heading-6">
                                <button data-toggle="collapse" data-target="#collapse-6"
                                        aria-expanded="true" aria-controls="collapse-6">Принудительное лечение игроманов
                                </button>
                                <span class="line"></span>
                            </div>
                            <div id="collapse-6" class="collapse" aria-labelledby="heading-6"
                                 data-parent="#accordion">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex" id="heading-7">
                                <button data-toggle="collapse" data-target="#collapse-7"
                                        aria-expanded="true" aria-controls="collapse-7">Реабилитация наркозависимых
                                </button>
                                <span class="line"></span>
                            </div>
                            <div id="collapse-7" class="collapse" aria-labelledby="heading-7"
                                 data-parent="#accordion">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex" id="heading-8">
                                <button data-toggle="collapse" data-target="#collapse-8"
                                        aria-expanded="true" aria-controls="collapse-8">Реабилитация алкоголиков
                                </button>
                                <span class="line"></span>
                            </div>
                            <div id="collapse-8" class="collapse" aria-labelledby="heading-8"
                                 data-parent="#accordion">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex" id="heading-9">
                                <button data-toggle="collapse" data-target="#collapse-9"
                                        aria-expanded="true" aria-controls="collapse-9">Реабилитация игроманов
                                </button>
                                <span class="line"></span>
                            </div>
                            <div id="collapse-9" class="collapse" aria-labelledby="heading-9"
                                 data-parent="#accordion">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex" id="heading-10">
                                <button data-toggle="collapse" data-target="#collapse-10"
                                        aria-expanded="true" aria-controls="collapse-10">Дистанционные услуги
                                </button>
                                <span class="line"></span>
                            </div>
                            <div id="collapse-10" class="collapse" aria-labelledby="heading-10"
                                 data-parent="#accordion">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <h1>Лечение психики после употребления наркотиков</h1>
                <p class="mt-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply
                    dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                    make a type specimen book. It has survived not only five centuries, but also the leap into
                    electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply
                    dummy text of the printing and typesetting industry. Lorem Ipsum has been the </p>

                <p class="mt-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum
                    has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply
                    dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                    make a type specimen book.</p>
                <p class="mt-100">
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                    only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                </p>
                <ul class="mt-100">
                    <li>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry
                    </li>
                    <li>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry
                    </li>
                    <li>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry
                    </li>
                    <li>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry
                    </li>
                    <li>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry
                    </li>
                    <li>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry
                    </li>
                </ul>
                <p class="mt-100">
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                    only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                    Ipsum.
                </p>
                <p class="mt-100">
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                    only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                </p>

            </div>
        </div>
    </div>
    @include('include.seoText')
@endsection
