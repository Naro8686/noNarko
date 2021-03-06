@extends('layouts.app')

@section('content')
    <div class="container about">
        @include('include.proposal',['class'=>'d-block d-lg-none'])
        @include('include.pageHistory')
        <div class="d-flex flex-row flex-wrap justify-content-between">
            <div class="block-1">
                <div class="about-block flex-row h-100">
                    <h1 class="w-100">{{$page->title}}</h1>
                    <div class="w-100 mt-40 mb-40">
                        {!! $page->body !!}
                    </div>
                    <div class="img-container w-100" data-count-cross="3">
                        <div class="ellipse-block" data-count-ellipse="100"></div>
                        <img src="{{asset('img/dummy-image-350x250.gif')}}"
                             data-src="{{asset($page->image)}}" alt="">
                    </div>
                </div>
                @if(count($page->advantages))
                    <div class="advantage-block">
                        <h1>{{page("advantage","title")}}</h1>
                        <div class="mb-5 mt-5">{!! page('advantage','body') !!}</div>
                        <ul class="flex-container">
                            @foreach($page->advantages as $advantage)
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
                <div class="request-block">
                    <h1>{{page('requests','title')}}</h1>
                    <p class="flex-grow-1">{{ Str::limit(strip_tags(page('requests','body')), 350)}}</p>
                    <div id="carousel-request" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($requests as $request)
                                <div class="carousel-item @if($loop->first) active @endif">
                                    <div class="request-item">
                                        <div>
                                            <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                                 data-src="{{asset($request->image)}}"
                                                 alt="">
                                            <div>
                                                <h2>{{$request->title}}</h2>
                                                <p>{{$request->desc}}</p>
                                                <hr>
                                            </div>
                                        </div>
                                        <p class="mb-5">{{Str::limit(strip_tags($request->body),500)}}</p>
                                        <a class="position-absolute" href="{{page('requests')->url()}}"> ????????????
                                            ????????????????????
                                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.43002 6.46512L1.64486 0.364517C1.51105 0.223303 1.33244 0.145508 1.14198 0.145508C0.951529 0.145508 0.772912 0.223303 0.639109 0.364517L0.213071 0.813681C-0.0641539 1.10636 -0.0641539 1.58205 0.213071 1.87429L5.07102 6.99721L0.207681 12.1258C0.0738775 12.267 0 12.4553 0 12.656C0 12.857 0.0738775 13.0452 0.207681 13.1865L0.633718 13.6356C0.767628 13.7768 0.946139 13.8546 1.13659 13.8546C1.32705 13.8546 1.50566 13.7768 1.63947 13.6356L7.43002 7.52941C7.56414 7.38775 7.63781 7.19861 7.63738 6.99755C7.63781 6.7957 7.56414 6.60667 7.43002 6.46512Z"
                                                    fill="currentColor"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carousel-request" role="button"
                           data-slide="prev">
                            <svg class="icon-left" width="15" height="24" viewBox="0 0 15 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.717 11.0635L3.03666 0.383412C2.78964 0.136194 2.45988 0 2.10828 0C1.75667 0 1.42692 0.136194 1.17989 0.383412L0.393363 1.16975C-0.118438 1.68213 -0.118438 2.51491 0.393363 3.02651L9.36188 11.995L0.383412 20.9735C0.136389 21.2207 0 21.5503 0 21.9017C0 22.2535 0.136389 22.583 0.383412 22.8305L1.16994 23.6166C1.41716 23.8638 1.74672 24 2.09832 24C2.44993 24 2.77969 23.8638 3.02671 23.6166L13.717 12.9267C13.9646 12.6787 14.1006 12.3476 14.0998 11.9956C14.1006 11.6422 13.9646 11.3113 13.717 11.0635Z"
                                    fill="currentColor"/>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-request" role="button"
                           data-slide="next">
                            <svg class="icon-right" width="15" height="24" viewBox="0 0 15 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.717 11.0635L3.03666 0.383412C2.78964 0.136194 2.45988 0 2.10828 0C1.75667 0 1.42692 0.136194 1.17989 0.383412L0.393363 1.16975C-0.118438 1.68213 -0.118438 2.51491 0.393363 3.02651L9.36188 11.995L0.383412 20.9735C0.136389 21.2207 0 21.5503 0 21.9017C0 22.2535 0.136389 22.583 0.383412 22.8305L1.16994 23.6166C1.41716 23.8638 1.74672 24 2.09832 24C2.44993 24 2.77969 23.8638 3.02671 23.6166L13.717 12.9267C13.9646 12.6787 14.1006 12.3476 14.0998 11.9956C14.1006 11.6422 13.9646 11.3113 13.717 11.0635Z"
                                    fill="currentColor"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="d-flex justify-content-start">
                        <a href="{{route('requests')}}" class="appButton appButton-bold mr-lg-5 mr-3">?????? ????????????<i
                                class="icon-right-white d-lg-block d-none"></i></a>
                        <button class="appButton appButton-bold"
                                data-toggle="modal"
                                data-target="#modal"
                                data-title="{{page('giveFeedback','title')}}"
                                data-desc="{{page('giveFeedback','body')}}"
                                data-url="{{route('feedback.store')}}"
                                data-btn="???????????????? ????????????????????????"
                                data-type="request">???????????????? ??????????
                        </button>
                    </div>
                </div>
                <div class="cases-block">
                    <h1>{{page('cases','title')}}</h1>
                    <p class="flex-grow-1">{{ Str::limit(strip_tags(page('cases','body')), 350)}}</p>
                    <div id="carousel-cases" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($cases as $case)
                                <div class="carousel-item @if($loop->first) active @endif">
                                    <div class="cases-item">
                                        <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                             data-src="{{asset('img/items/rectangle-2.png')}}"
                                             alt="">
                                        <div>
                                            <div>
                                                <h2>{{$case->title}}</h2>
                                                <p>{{$case->desc}}</p>
                                                <hr>
                                            </div>
                                            <p>{{Str::limit(strip_tags($case->body),500)}}</p>
                                            <a class="position-absolute" href="{{url($case->seo->slug)}}"> ????????????
                                                ????????????????????
                                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.43002 6.46512L1.64486 0.364517C1.51105 0.223303 1.33244 0.145508 1.14198 0.145508C0.951529 0.145508 0.772912 0.223303 0.639109 0.364517L0.213071 0.813681C-0.0641539 1.10636 -0.0641539 1.58205 0.213071 1.87429L5.07102 6.99721L0.207681 12.1258C0.0738775 12.267 0 12.4553 0 12.656C0 12.857 0.0738775 13.0452 0.207681 13.1865L0.633718 13.6356C0.767628 13.7768 0.946139 13.8546 1.13659 13.8546C1.32705 13.8546 1.50566 13.7768 1.63947 13.6356L7.43002 7.52941C7.56414 7.38775 7.63781 7.19861 7.63738 6.99755C7.63781 6.7957 7.56414 6.60667 7.43002 6.46512Z"
                                                        fill="currentColor"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carousel-cases" role="button"
                           data-slide="prev">
                            <svg class="icon-left" width="15" height="24" viewBox="0 0 15 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.717 11.0635L3.03666 0.383412C2.78964 0.136194 2.45988 0 2.10828 0C1.75667 0 1.42692 0.136194 1.17989 0.383412L0.393363 1.16975C-0.118438 1.68213 -0.118438 2.51491 0.393363 3.02651L9.36188 11.995L0.383412 20.9735C0.136389 21.2207 0 21.5503 0 21.9017C0 22.2535 0.136389 22.583 0.383412 22.8305L1.16994 23.6166C1.41716 23.8638 1.74672 24 2.09832 24C2.44993 24 2.77969 23.8638 3.02671 23.6166L13.717 12.9267C13.9646 12.6787 14.1006 12.3476 14.0998 11.9956C14.1006 11.6422 13.9646 11.3113 13.717 11.0635Z"
                                    fill="currentColor"/>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-cases" role="button"
                           data-slide="next">
                            <svg class="icon-right" width="15" height="24" viewBox="0 0 15 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.717 11.0635L3.03666 0.383412C2.78964 0.136194 2.45988 0 2.10828 0C1.75667 0 1.42692 0.136194 1.17989 0.383412L0.393363 1.16975C-0.118438 1.68213 -0.118438 2.51491 0.393363 3.02651L9.36188 11.995L0.383412 20.9735C0.136389 21.2207 0 21.5503 0 21.9017C0 22.2535 0.136389 22.583 0.383412 22.8305L1.16994 23.6166C1.41716 23.8638 1.74672 24 2.09832 24C2.44993 24 2.77969 23.8638 3.02671 23.6166L13.717 12.9267C13.9646 12.6787 14.1006 12.3476 14.0998 11.9956C14.1006 11.6422 13.9646 11.3113 13.717 11.0635Z"
                                    fill="currentColor"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="d-flex justify-content-lg-start justify-content-center">
                        <a href="{{route('cases')}}" class="appButton appButton-bold">?????? ??????????<i
                                class="icon-right-white d-lg-block d-none"></i></a>
                    </div>
                </div>
            </div>
            @include('include.rightBlock')
        </div>
    </div>
    @include('include.seoText',['text' => $page->seoText, 'body' => $page->seoBody])
@endsection
