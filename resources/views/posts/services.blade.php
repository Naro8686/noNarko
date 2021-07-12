@extends('layouts.app')

@section('content')
    <div class="container services">
        @include('include.pageHistory')
        <div class="flexbox mt-100">
            <div class="box d-none d-lg-flex align-items-end"><h2 class="text-uppercase">Выберите тип услуги</h2></div>
            <div class="box"><h1 class="mb-sm-5 mb-lg-0 mb-0 w-100">{{$page->title}}</h1></div>
        </div>
        <div class="flexbox">
            <div class="box mb-5">
                @includeWhen(isset($parentCategory),'include.serviceCategories')
            </div>
            <div class="box">
                <div class="mt-lg-5 mt-0">{!! $page->body !!}</div>
                @if($page->advantages()->exists())
                    <div class="mt-100 advantage-block">
                        <h1 class="mb-lg-5 mb-4">{{page('advantage','title')}}</h1>
                        <div class="mb-lg-5 mb-4">{!! page('advantage','body') !!}</div>
                        <ul class="flex-container">
                            @foreach($page->advantages()->get() as $advantage)
                                <li class="flex-item" data-count-cross="3">
                                    <a href="javascript:void(0)">
                                        <svg width="84" height="84" viewBox="0 0 84 84" fill="#FFFFFF"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M71.8742 44.8417H65.3779C66.0401 46.6546 66.4018 48.611 66.4018 50.6502V75.2022C66.4018 76.0523 66.2539 76.8684 65.9846 77.6273H76.7243C80.7362 77.6273 83.9998 74.3635 83.9998 70.3518V56.9674C84 50.2813 78.5604 44.8417 71.8742 44.8417Z"/>
                                            <path
                                                d="M17.5982 50.6503C17.5982 48.611 17.96 46.6547 18.6221 44.8418H12.1259C5.43967 44.8418 0 50.2815 0 56.9677V70.3521C0 74.3638 3.2637 77.6276 7.27553 77.6276H18.0154C17.7462 76.8683 17.5982 76.0524 17.5982 75.2023V50.6503Z"/>
                                            <path
                                                d="M49.4254 38.5244H34.5741C27.8879 38.5244 22.4482 43.9641 22.4482 50.6503V75.2023C22.4482 76.5415 23.534 77.6275 24.8734 77.6275H59.1261C60.4655 77.6275 61.5513 76.5417 61.5513 75.2023V50.6503C61.5513 43.9641 56.1116 38.5244 49.4254 38.5244Z"/>
                                            <path
                                                d="M41.9999 6.37219C33.9588 6.37219 27.417 12.914 27.417 20.9552C27.417 26.4095 30.4274 31.1731 34.8732 33.6741C36.9819 34.8602 39.4129 35.5381 41.9999 35.5381C44.5868 35.5381 47.0179 34.8602 49.1266 33.6741C53.5725 31.1731 56.5828 26.4093 56.5828 20.9552C56.5828 12.9142 50.0409 6.37219 41.9999 6.37219Z"/>
                                            <path
                                                d="M16.3924 19.9646C10.3787 19.9646 5.48633 24.857 5.48633 30.8707C5.48633 36.8844 10.3787 41.7767 16.3924 41.7767C17.9179 41.7767 19.3705 41.4608 20.69 40.8928C22.9715 39.9105 24.8526 38.1718 26.0167 35.9939C26.8337 34.4653 27.2985 32.7215 27.2985 30.8707C27.2985 24.8571 22.4061 19.9646 16.3924 19.9646Z"/>
                                            <path
                                                d="M67.6072 19.9646C61.5935 19.9646 56.7012 24.857 56.7012 30.8707C56.7012 32.7216 57.166 34.4655 57.983 35.9939C59.147 38.172 61.0282 39.9107 63.3096 40.8928C64.6292 41.4608 66.0818 41.7767 67.6072 41.7767C73.621 41.7767 78.5133 36.8844 78.5133 30.8707C78.5133 24.857 73.621 19.9646 67.6072 19.9646Z"/>
                                        </svg>
                                    </a>
                                    <h3 class="text-uppercase text-center">{{$advantage->title}}</h3>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @foreach($page->blog()->get() as $blog)
                    <div class="blog-container">
                        <h1 class="title text-center mt-5 mb-5">{{$blog->title}}</h1>
                        <div class="d-flex justify-content-center mb-5">
                            <img class="img-fluid img-thumbnail" src="{{asset($blog->image)}}" alt="post">
                        </div>
                        <div class="desc">{!! $blog->body !!}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('include.seoText',['text' => $page->seo->text, 'body' => $page->seo->body])
@endsection
