@extends('layouts.app')

@section('content')
    <div class="container about">
        @include('include.proposal',['class'=>'d-block d-lg-none'])
        <ol class="history d-none d-lg-flex">
            <li><a href="{{route('home')}}">Главная</a></li>
            <li>О компании</li>
        </ol>
        <div class="d-flex flex-row flex-wrap justify-content-between">
            <div class="block-1">
                <div class="about-block flex-row h-100">
                    <h1 class="w-100">О нас</h1>
                    <p class="mb-lg-2 w-75 d-none d-lg-block"> Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the.</p>
                    <p class="w-100 ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        Letraset sheets. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, Letraset sheets.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        Letraset sheets.
                        <span class="font-weight-bold">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        Letraset sheets.
                       </span>
                    </p>
                    <div class="img-container w-100" data-count-cross="3">
                        <div class="ellipse-block" data-count-ellipse="100"></div>
                        <img src="{{asset('img/dummy-image-350x250.gif')}}"
                             data-src="{{asset('img/items/smiley-coworkers-posing-together.png')}}" alt="">
                    </div>
                </div>
                <div class="advantage-block">
                    <h1>Преймущества компании</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the.</p>
                    <ul class="flex-container">
                        <li class="flex-item" data-count-cross="3">
                            <a href="#">
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
                            <h3 class="text-uppercase text-center">опытная команда</h3>
                        </li>
                        <li class="flex-item" data-count-cross="3">
                            <a href="#">
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
                            <h3 class="text-uppercase text-center">опытная команда</h3>
                        </li>
                        <li class="flex-item" data-count-cross="3">
                            <a href="#">
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
                            <h3 class="text-uppercase text-center">опытная команда</h3>
                        </li>
                        <li class="flex-item" data-count-cross="3">
                            <a href="#">
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
                            <h3 class="text-uppercase text-center">опытная команда</h3>
                        </li>
                        <li class="flex-item" data-count-cross="3">
                            <a href="#">
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
                            <h3 class="text-uppercase text-center">опытная команда</h3>
                        </li>
                        <li class="flex-item" data-count-cross="3">
                            <a href="#">
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
                            <h3 class="text-uppercase text-center">опытная команда</h3>
                        </li>
                    </ul>
                </div>
                <div class="request-block">
                    <h1>Отзывы клиентов</h1>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the.
                    </p>
                    <div id="carousel-request" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="request-item">
                                    <div>
                                        <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                             data-src="{{asset('img/request/sad-lonely-woman-with-wavy-foxy-hair-touches-cheeks%202.png')}}"
                                             alt="">
                                        <div>
                                            <h2>Лариса Иванова</h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry</p>
                                            <hr>
                                        </div>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book.Lorem Ipsum is simply dummy text of the printing and...has been the
                                        industry's standard dummy text ever since the 1500s, when an unknown. Lorem
                                        Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                        has been the industry's standard...</p>
                                    <a class="position-absolute" href="#"> Читать польностью
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
                        <a href="services.html" class="appButton appButton-bold mr-lg-5 mr-3">все услуги<i
                                class="icon-right-white d-lg-block d-none"></i></a>
                        <button class="appButton appButton-bold" data-toggle="modal" data-target="#modal"
                                data-title="отзыв"
                                data-btn="получить консультацию"
                                data-type="request">Написать отзыв
                        </button>
                    </div>
                </div>
                <div class="cases-block">
                    <h1>Успешные кейсы</h1>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the.
                    </p>
                    <div id="carousel-cases" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="cases-item">
                                    <img src="{{asset('img/dummy-image-350x250.gif')}}"
                                         data-src="{{asset('img/items/rectangle-2.png')}}"
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
                                                <path
                                                    d="M7.43002 6.46512L1.64486 0.364517C1.51105 0.223303 1.33244 0.145508 1.14198 0.145508C0.951529 0.145508 0.772912 0.223303 0.639109 0.364517L0.213071 0.813681C-0.0641539 1.10636 -0.0641539 1.58205 0.213071 1.87429L5.07102 6.99721L0.207681 12.1258C0.0738775 12.267 0 12.4553 0 12.656C0 12.857 0.0738775 13.0452 0.207681 13.1865L0.633718 13.6356C0.767628 13.7768 0.946139 13.8546 1.13659 13.8546C1.32705 13.8546 1.50566 13.7768 1.63947 13.6356L7.43002 7.52941C7.56414 7.38775 7.63781 7.19861 7.63738 6.99755C7.63781 6.7957 7.56414 6.60667 7.43002 6.46512Z"
                                                    fill="currentColor"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
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
                        <a href="services.html" class="appButton appButton-bold">все услуги<i
                                class="icon-right-white d-lg-block d-none"></i></a>
                    </div>
                </div>
            </div>
            <div class="block-2">
                <h2>Новости</h2>
                <div class="block__item">
                    <img src="{{asset('img/dummy-image-350x250.gif')}}" data-src="{{asset('img/items/Rectangle.png')}}"
                         alt="">
                    <div>
                        <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                        <hr>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's Ipsum is simply dummy text of the </p>
                        <a href="news.html">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                    </div>
                </div>
                <h2>Популярное в блоге</h2>
                <div class="block__item">
                    <img src="{{asset('img/dummy-image-350x250.gif')}}" data-src="{{asset('img/items/Rectangle.png')}}"
                         alt="">
                    <div>
                        <h3 class="text-uppercase">Лечение психики после употребления наркотиков</h3>
                        <hr>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's Ipsum is simply dummy text of the </p>
                        <a href="blog.html">Читать полностью <i class="icon-right-orange d-lg-block d-none"></i></a>
                    </div>
                </div>
                <h2>Мы в соц сетях</h2>
                <div class="social">
                    <a href="#" target="_blank">
                        <svg class="vk" width="42" height="24" viewBox="0 0 42 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M34.2913 13.6433C33.6232 12.8105 33.8143 12.44 34.2913 11.6957C34.2999 11.6872 39.815 4.16538 40.3833 1.61449L40.3867 1.61279C40.6691 0.683183 40.3867 0 39.0213 0H34.503C33.3528 0 32.8225 0.586314 32.5384 1.24231C32.5384 1.24231 30.2379 6.67718 26.9836 10.2002C25.9332 11.2181 25.4477 11.5444 24.8743 11.5444C24.5919 11.5444 24.1528 11.2181 24.1528 10.2885V1.61279C24.1528 0.497941 23.8308 0 22.8786 0H15.7742C15.0527 0 14.6239 0.520035 14.6239 1.00438C14.6239 2.06144 16.2511 2.30447 16.4199 5.27852V11.7314C16.4199 13.1453 16.1599 13.4053 15.583 13.4053C14.0471 13.4053 10.3192 7.94837 8.11006 1.70286C7.66409 0.491144 7.22846 0.00169934 6.06963 0.00169934H1.54969C0.260004 0.00169934 0 0.588013 0 1.244C0 2.40304 1.53592 8.1659 7.14236 15.7795C10.8788 20.9764 16.1409 23.7924 20.9277 23.7924C23.805 23.7924 24.1563 23.167 24.1563 22.0913C24.1563 17.1255 23.8963 16.6564 25.3375 16.6564C26.0056 16.6564 27.1558 16.9827 29.8419 19.4894C32.912 22.4618 33.4165 23.7924 35.135 23.7924H39.6532C40.9412 23.7924 41.5938 23.167 41.2184 21.9332C40.3592 19.3382 34.553 14.0001 34.2913 13.6433Z"/>
                        </svg>
                    </a>
                    <a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="#" target="_blank">
                        <svg class="youtube" width="30" height="36" viewBox="0 0 30 36"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M29.4032 17.7512C29.0409 16.177 27.7533 15.0158 26.2035 14.843C22.5343 14.4331 18.8187 14.4311 15.1213 14.4331C11.4224 14.4311 7.70756 14.4331 4.03722 14.843C2.48819 15.0162 1.20133 16.1774 0.839397 17.7512C0.32357 19.9927 0.317383 22.4396 0.317383 24.7477C0.317383 27.0558 0.317383 29.5023 0.83321 31.7438C1.19514 33.3176 2.482 34.4788 4.03181 34.652C7.70137 35.0623 11.4162 35.0639 15.1147 35.0623C18.8137 35.0642 22.5277 35.0623 26.1985 34.652C27.7475 34.4788 29.0351 33.3176 29.3971 31.7438C29.9125 29.5023 29.9152 27.0558 29.9152 24.7477C29.9148 22.4392 29.9187 19.9927 29.4032 17.7512ZM8.75971 19.4885H6.61752V30.8715H4.62767V19.4885H2.52454V17.6239H8.75971V19.4885ZM14.1643 30.8719H12.3744V29.795C11.6633 30.6101 10.9881 31.0076 10.3304 31.0076C9.75386 31.0076 9.35712 30.7741 9.17809 30.2741C9.08065 29.9756 9.02033 29.5031 9.02033 28.8063V21.0008H10.8087V28.2684C10.8087 28.6876 10.8087 28.9052 10.825 28.964C10.8679 29.2417 11.0036 29.3824 11.2433 29.3824C11.6022 29.3824 11.9773 29.1059 12.374 28.5449V21.0008H14.1639L14.1643 30.8719ZM20.9594 27.9092C20.9594 28.8221 20.8979 29.4799 20.7784 29.8982C20.5394 30.6325 20.0611 31.0076 19.3496 31.0076C18.7132 31.0076 18.0991 30.6542 17.5009 29.9156V30.8723H15.7126V17.6239H17.5009V21.9505C18.0786 21.2394 18.6919 20.8798 19.3496 20.8798C20.0611 20.8798 20.5398 21.2545 20.7784 21.9934C20.8987 22.3905 20.9594 23.0432 20.9594 23.9778V27.9092ZM27.7096 26.2623H24.1324V28.012C24.1324 28.9257 24.4313 29.382 25.0462 29.382C25.4866 29.382 25.743 29.1427 25.845 28.6647C25.8617 28.5677 25.8853 28.1702 25.8853 27.4529H27.71V27.7139C27.71 28.2904 27.6879 28.6875 27.6717 28.8662C27.6118 29.2622 27.471 29.6214 27.2541 29.9377C26.7588 30.6546 26.0248 31.008 25.0906 31.008C24.1549 31.008 23.4426 30.6712 22.9256 29.9972C22.5463 29.5031 22.3514 28.7251 22.3514 27.676V24.2187C22.3514 23.1635 22.5243 22.3917 22.9044 21.8929C23.421 21.2173 24.1328 20.8809 25.0466 20.8809C25.944 20.8809 26.6555 21.2173 27.1567 21.8929C27.5313 22.3917 27.7104 23.1635 27.7104 24.2187V26.2623H27.7096Z"/>
                            <path
                                d="M25.0303 22.49C24.4325 22.49 24.1328 22.9467 24.1328 23.8592V24.7725H25.9212V23.8592C25.9208 22.9467 25.6219 22.49 25.0303 22.49Z"/>
                            <path
                                d="M18.3921 22.49C18.0974 22.49 17.7989 22.6292 17.5 22.925V28.9413C17.7985 29.2406 18.0974 29.3821 18.3921 29.3821C18.9079 29.3821 19.1701 28.9413 19.1701 28.05V23.8368C19.1701 22.9467 18.9079 22.49 18.3921 22.49Z"/>
                            <path
                                d="M19.3921 13.5229C20.0514 13.5229 20.7374 13.1223 21.457 12.2979V13.386H23.2647V3.41016H21.457V11.0347C21.0564 11.6008 20.6767 11.8807 20.3151 11.8807C20.0731 11.8807 19.9308 11.7376 19.8913 11.4573C19.8693 11.3981 19.8693 11.1781 19.8693 10.7547V3.41016H18.0674V11.2984C18.0674 12.0029 18.1277 12.4797 18.2275 12.7817C18.4092 13.2871 18.8102 13.5229 19.3921 13.5229Z"/>
                            <path
                                d="M6.80698 7.96478V13.3864H8.81151V7.96478L11.2228 0H9.19587L7.82819 5.25688L6.40522 0H4.2959C4.71854 1.24085 5.15819 2.48788 5.58083 3.72989C6.22387 5.59677 6.62524 7.00427 6.80698 7.96478Z"/>
                            <path
                                d="M13.9097 13.5231C14.8152 13.5231 15.519 13.1824 16.0182 12.5019C16.3975 12.0027 16.5793 11.2162 16.5793 10.1559V6.66266C16.5793 5.5962 16.3979 4.81666 16.0182 4.31282C15.519 3.63034 14.8156 3.28967 13.9097 3.28967C13.0087 3.28967 12.3053 3.63034 11.805 4.31282C11.421 4.81666 11.2393 5.5962 11.2393 6.66266V10.1559C11.2393 11.2162 11.421 12.0027 11.805 12.5019C12.3049 13.1824 13.0087 13.5231 13.9097 13.5231ZM13.047 6.30034C13.047 5.37734 13.3269 4.9172 13.9097 4.9172C14.4924 4.9172 14.7716 5.37696 14.7716 6.30034V10.4966C14.7716 11.4196 14.4924 11.8813 13.9097 11.8813C13.3269 11.8813 13.047 11.4196 13.047 10.4966V6.30034Z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="text-seo">
            <h1>СЕО текст </h1>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
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
                dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
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
                dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            </p>
        </div>
    </div>
@endsection