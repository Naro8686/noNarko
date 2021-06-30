<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('img/logo.svg')}}" type="image/x-icon">
    <title>{{$seo->title}} | {{config('app.name', 'NoNarko')}}</title>
    <meta name="keywords" content="{{$seo->keywords}}">
    <meta name="description" content="{{$seo->description}}">
    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}">
    <!--   End Plugins-->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/media.css')}}">
    @stack('css')
</head>
<body>
<!-- Modal -->
@include('include.modal.proposalAndRequest')
<!-- End Modal -->
<header>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="{{route('home')}}">
                    <img alt="logo" src="{{asset('img/logo.svg')}}">
                </a>
            </div>
            <ul class="d-lg-flex d-none">
                <li><a @if(request()->routeIs('home')) class="active"
                       @endif href="{{page('home')->url()}}">{{page('home')->seoTitle}}</a></li>
                <li><a @if(request()->routeIs('about')) class="active"
                       @endif href="{{page('about')->url()}}">{{page('about')->seoTitle}}</a></li>
                <li><a @if(request()->routeIs('blog')) class="active"
                       @endif href="{{page('blog')->url()}}">{{page('blog')->seoTitle}}</a></li>
                <li><a @if(request()->routeIs('faq')) class="active"
                       @endif href="{{page('faq')->url()}}">{{page('faq')->seoTitle}}</a></li>
                <li><a @if(request()->routeIs('contacts')) class="active"
                       @endif href="{{page('contacts')->url()}}">{{page('contacts')->seoTitle}}</a></li>
            </ul>
            <div class="menu d-lg-flex d-none">
                <label class="search-head-lg">
                    <img class="mr-1" alt="search" src="{{asset('img/icon/search.svg')}}">
                    <input type="text" placeholder="поиск">
                </label>
                <a href="{{page('writeToDoctor')->url()}}" class="appButton">{{page('writeToDoctor','seoTitle')}}</a>
            </div>
            <div class="menu-mobile">
                <button class="search-2">
                    <img alt="search" src="{{asset('img/icon/search-2.svg')}}">
                </button>
                <button class="navbar-button" type="button" data-toggle="collapse" data-target="#navbarMenu"
                        aria-controls="navbarMenu" aria-expanded="false" aria-label="navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</header>
<section class="collapse navbar-collapse" id="navbarMenu">
    <ul class="nav navbar-nav p-2">
        <li><a href="{{page('services')->url()}}">{{page('services','seoTitle')}}</a></li>
        <li><a href="{{page('treatmentProgram')->url()}}">{{page('treatmentProgram','seoTitle')}}</a></li>
        <li><a href="{{page('abc')->url()}}">{{page('abc','seoTitle')}}</a></li>
        <li><a href="{{page('cases')->url()}}">{{page('cases','seoTitle')}}</a></li>
        <li><a href="{{page('requests')->url()}}"{{page('requests','seoTitle')}}</a></li>
    </ul>
</section>
<section class="map d-lg-flex d-none">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <ul>
                <li><a href="{{page('services')->url()}}">{{page('services','seoTitle')}}</a></li>
                <li><a href="{{page('treatmentProgram')->url()}}">{{page('treatmentProgram','seoTitle')}}</a></li>
                <li><a href="{{page('abc')->url()}}">{{page('abc','seoTitle')}}</a></li>
                <li><a href="{{page('cases')->url()}}">{{page('cases','seoTitle')}}</a></li>
                <li><a href="{{page('requests')->url()}}"{{page('requests','seoTitle')}}</a></li>
            </ul>
            <div>
                <img class="mr-2" alt="call" src="{{asset('img/icon/phone-call.svg')}}">
                <a href="tel:{{$contacts->phone}}">{{$contacts->phone}}</a>
            </div>
        </div>
    </div>
</section>
<!-- Slider -->
@include('include.slider',['sliders',$sliders])
<!-- end Slider -->
<main>
    @yield('content')
</main>
<footer>
    <div class="container">
        <ul>
            <li><a href="{{page('home')->url()}}">{{page('home','seoTitle')}}</a></li>
            <li><a href="{{page('about')->url()}}">{{page('about','seoTitle')}}</a></li>
            <li><a href="{{page('blog')->url()}}">{{page('blog','seoTitle')}}</a></li>
            <li><a href="{{page('news')->url()}}">{{page('news','seoTitle')}}</a></li>
            <li><a href="{{page('faq')->url()}}">{{page('faq','seoTitle')}}</a></li>
            <li><a href="{{page('cases')->url()}}">{{page('cases','seoTitle')}}</a></li>
        </ul>
        <ul>
            <li><a href="{{page('services')->url()}}">{{page('services','seoTitle')}}</a></li>
            <li><a href="{{page('cases')->url()}}">{{page('cases','seoTitle')}}</a></li>
            <li><a href="{{page('prices')->url()}}">{{page('prices','seoTitle')}}</a></li>
            <li><a href="{{page('requests')->url()}}">{{page('requests','seoTitle')}}</a></li>
            <li><a href="{{page('contacts')->url()}}">{{page('contacts','seoTitle')}}</a></li>
            <li><a href="{{page('abc')->url()}}">{{page('abc','seoTitle')}}</a></li>
        </ul>
        <ul>
            <li><h2>Контакты</h2></li>
            <li><a href="tel:{{$contacts->phone}}">{{$contacts->phone}}</a></li>
            <li>{{$contacts->address}}</li>
            <li><a href="mailto:{{$contacts->email}}">{{$contacts->email}}</a></li>
            <li class="social">
                @foreach($contacts->social as $key => $social)
                    <a href="{{$social['link']}}" target="_blank">
                        @switch($key)
                            @case('vk')
                            <svg width="23" height="14" viewBox="0 0 23 14" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.0859 7.53367C18.714 7.07867 18.8204 6.87624 19.0859 6.46953C19.0907 6.46489 22.1603 2.35503 22.4766 0.961244L22.4785 0.960316C22.6357 0.452387 22.4785 0.0791016 21.7185 0.0791016H19.2037C18.5636 0.0791016 18.2684 0.399459 18.1103 0.757887C18.1103 0.757887 16.8299 3.72746 15.0186 5.65239C14.434 6.2086 14.1637 6.38689 13.8446 6.38689C13.6874 6.38689 13.443 6.2086 13.443 5.70067V0.960316C13.443 0.351173 13.2638 0.0791016 12.7338 0.0791016H8.7796C8.37804 0.0791016 8.13941 0.363245 8.13941 0.627887C8.13941 1.20546 9.04506 1.33824 9.13898 2.96324V6.48903C9.13898 7.2616 8.99427 7.40367 8.67322 7.40367C7.81835 7.40367 5.74349 4.42203 4.51391 1.00953C4.26569 0.347459 4.02322 0.0800301 3.37824 0.0800301H0.86253C0.144713 0.0800301 0 0.400387 0 0.758816C0 1.3921 0.854863 4.54089 3.9753 8.70089C6.05496 11.5405 8.98373 13.0791 11.648 13.0791C13.2494 13.0791 13.4449 12.7374 13.4449 12.1496C13.4449 9.43632 13.3002 9.18003 14.1024 9.18003C14.4742 9.18003 15.1144 9.35832 16.6094 10.728C18.3182 12.352 18.599 13.0791 19.5555 13.0791H22.0702C22.7871 13.0791 23.1503 12.7374 22.9414 12.0632C22.4632 10.6453 19.2315 7.72867 19.0859 7.53367Z"/>
                            </svg>
                            @break

                            @case('instagram')
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.9683 5.66522C18.9238 4.64137 18.7605 3.93748 18.5266 3.32755C18.2853 2.68013 17.9141 2.10049 17.4277 1.61863C16.9525 1.12928 16.377 0.74903 15.7459 0.508176C15.1409 0.270998 14.4504 0.105429 13.4406 0.060287C12.4234 0.0113222 12.1004 0 9.5203 0C6.94019 0 6.61725 0.0113222 5.60374 0.056464C4.594 0.101606 3.89981 0.267322 3.29843 0.504353C2.65979 0.74903 2.08814 1.12546 1.61293 1.61863C1.13032 2.10049 0.755453 2.68395 0.517773 3.32388C0.283864 3.93748 0.120577 4.63755 0.0760577 5.6614C0.0277677 6.69289 0.0166016 7.02035 0.0166016 9.63652C0.0166016 12.2527 0.0277677 12.5801 0.0722873 13.6078C0.116807 14.6317 0.280239 15.3356 0.514148 15.9455C0.755453 16.5929 1.13032 17.1725 1.61293 17.6544C2.08814 18.1438 2.66356 18.524 3.29466 18.7649C3.89981 19.002 4.59023 19.1676 5.60011 19.2127C6.61348 19.258 6.93657 19.2692 9.51667 19.2692C12.0968 19.2692 12.4197 19.258 13.4332 19.2127C14.443 19.1676 15.1372 19.002 15.7385 18.7649C17.0157 18.2642 18.0254 17.2403 18.5192 15.9455C18.753 15.3319 18.9164 14.6317 18.9609 13.6078C19.0054 12.5801 19.0166 12.2527 19.0166 9.63652C19.0166 7.02035 19.0128 6.69289 18.9683 5.66522ZM17.257 13.5325C17.2161 14.4736 17.0602 14.9818 16.9303 15.3206C16.611 16.16 15.9539 16.8263 15.126 17.1501C14.7919 17.2818 14.2871 17.4399 13.3626 17.4812C12.3603 17.5265 12.0597 17.5377 9.52407 17.5377C6.98848 17.5377 6.6841 17.5265 5.68538 17.4812C4.75728 17.4399 4.25611 17.2818 3.922 17.1501C3.51001 16.9957 3.135 16.751 2.83062 16.431C2.51506 16.1186 2.27376 15.7421 2.12149 15.3244C1.99156 14.9856 1.83567 14.4736 1.79492 13.5364C1.75026 12.52 1.73923 12.215 1.73923 9.64402C1.73923 7.073 1.75026 6.76435 1.79492 5.75183C1.83567 4.81076 1.99156 4.30258 2.12149 3.9638C2.27376 3.54591 2.51506 3.16581 2.83439 2.85702C3.1424 2.53706 3.51364 2.29238 3.92577 2.13813C4.25988 2.00638 4.76483 1.84831 5.68915 1.80685C6.69149 1.76171 6.99225 1.75038 9.5277 1.75038C12.0671 1.75038 12.3677 1.76171 13.3664 1.80685C14.2945 1.84831 14.7957 2.00638 15.1298 2.13813C15.5418 2.29238 15.9168 2.53706 16.2211 2.85702C16.5367 3.16948 16.778 3.54591 16.9303 3.9638C17.0602 4.30258 17.2161 4.81444 17.257 5.75183C17.3015 6.76818 17.3127 7.073 17.3127 9.64402C17.3127 12.215 17.3015 12.5162 17.257 13.5325Z"/>
                                <path
                                    d="M9.51948 4.68604C6.82438 4.68604 4.6377 6.90313 4.6377 9.63604C4.6377 12.369 6.82438 14.5861 9.51948 14.5861C12.2147 14.5861 14.4013 12.369 14.4013 9.63604C14.4013 6.90313 12.2147 4.68604 9.51948 4.68604ZM9.51948 12.847C7.77103 12.847 6.35279 11.4091 6.35279 9.63604C6.35279 7.86302 7.77103 6.4251 9.51948 6.4251C11.2681 6.4251 12.6862 7.86302 12.6862 9.63604C12.6862 11.4091 11.2681 12.847 9.51948 12.847Z"/>
                                <path
                                    d="M15.7336 4.49105C15.7336 5.12921 15.2233 5.64665 14.5938 5.64665C13.9644 5.64665 13.4541 5.12921 13.4541 4.49105C13.4541 3.85274 13.9644 3.33545 14.5938 3.33545C15.2233 3.33545 15.7336 3.85274 15.7336 4.49105Z"/>
                            </svg>
                            @break

                            @case('youtube')
                            <svg width="17" height="20" viewBox="0 0 17 20" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.0298 9.77317C15.8303 8.90652 15.1214 8.26723 14.2682 8.17207C12.2481 7.94641 10.2025 7.94535 8.16689 7.94641C6.13044 7.94535 4.08526 7.94641 2.06455 8.17207C1.21174 8.26744 0.503256 8.90673 0.303996 9.77317C0.0200077 11.0073 0.0166016 12.3544 0.0166016 13.6251C0.0166016 14.8958 0.0166016 16.2427 0.30059 17.4768C0.49985 18.3433 1.20833 18.9826 2.06157 19.0779C4.08185 19.3038 6.12703 19.3047 8.16328 19.3038C10.1997 19.3049 12.2445 19.3038 14.2654 19.0779C15.1182 18.9826 15.8271 18.3433 16.0264 17.4768C16.3102 16.2427 16.3117 14.8958 16.3117 13.6251C16.3114 12.3542 16.3136 11.0073 16.0298 9.77317ZM4.66451 10.7297H3.48513V16.9966H2.38963V10.7297H1.23175V9.70313H4.66451V10.7297ZM7.64 16.9968H6.65456V16.4039C6.26307 16.8527 5.89137 17.0715 5.52925 17.0715C5.21184 17.0715 4.99342 16.9429 4.89486 16.6677C4.84121 16.5033 4.808 16.2432 4.808 15.8595V11.5623H5.79259V15.5634C5.79259 15.7942 5.79259 15.914 5.80153 15.9464C5.82516 16.0993 5.89989 16.1767 6.03187 16.1767C6.22943 16.1767 6.43593 16.0245 6.65435 15.7156V11.5623H7.63979L7.64 16.9968ZM11.381 15.3657C11.381 15.8683 11.3472 16.2304 11.2814 16.4607C11.1498 16.865 10.8865 17.0715 10.4948 17.0715C10.1444 17.0715 9.80632 16.8769 9.47699 16.4703V16.997H8.4924V9.70313H9.47699V12.0851C9.79504 11.6936 10.1327 11.4956 10.4948 11.4956C10.8865 11.4956 11.15 11.7019 11.2814 12.1087C11.3476 12.3274 11.381 12.6867 11.381 13.2013V15.3657ZM15.0974 14.459H13.128V15.4223C13.128 15.9253 13.2925 16.1765 13.631 16.1765C13.8735 16.1765 14.0146 16.0448 14.0708 15.7816C14.08 15.7282 14.093 15.5094 14.093 15.1145H15.0976V15.2581C15.0976 15.5756 15.0854 15.7942 15.0765 15.8925C15.0435 16.1105 14.966 16.3083 14.8466 16.4824C14.5739 16.8771 14.1698 17.0717 13.6555 17.0717C13.1403 17.0717 12.7482 16.8863 12.4635 16.5152C12.2547 16.2432 12.1474 15.8148 12.1474 15.2373V13.3339C12.1474 12.7529 12.2426 12.328 12.4518 12.0534C12.7363 11.6815 13.1282 11.4963 13.6312 11.4963C14.1253 11.4963 14.517 11.6815 14.7929 12.0534C14.9992 12.328 15.0978 12.7529 15.0978 13.3339V14.459H15.0974Z"/>
                                <path
                                    d="M13.622 12.3818C13.2929 12.3818 13.1279 12.6333 13.1279 13.1357V13.6385H14.1125V13.1357C14.1123 12.6333 13.9477 12.3818 13.622 12.3818Z"/>
                                <path
                                    d="M9.96769 12.3818C9.80547 12.3818 9.64112 12.4585 9.47656 12.6213V15.9336C9.64091 16.0984 9.80547 16.1763 9.96769 16.1763C10.2517 16.1763 10.396 15.9336 10.396 15.4429V13.1233C10.396 12.6333 10.2517 12.3818 9.96769 12.3818Z"/>
                                <path
                                    d="M10.5184 7.44502C10.8814 7.44502 11.259 7.22447 11.6552 6.7706V7.36965H12.6504V1.87744H11.6552V6.0751C11.4347 6.38677 11.2256 6.54089 11.0266 6.54089C10.8933 6.54089 10.815 6.46213 10.7932 6.30779C10.7811 6.27521 10.7811 6.15408 10.7811 5.92097V1.87744H9.78906V6.22029C9.78906 6.60817 9.82227 6.87065 9.8772 7.03692C9.97725 7.31516 10.198 7.44502 10.5184 7.44502Z"/>
                                <path
                                    d="M3.5895 4.385V7.36986H4.6931V4.385L6.02065 0H4.90471L4.15173 2.89417L3.36832 0H2.20703C2.43971 0.683147 2.68176 1.3697 2.91445 2.05349C3.26847 3.08129 3.48945 3.85619 3.5895 4.385Z"/>
                                <path
                                    d="M7.49948 7.44503C7.99806 7.44503 8.38551 7.25748 8.66034 6.8828C8.86918 6.60797 8.96924 6.17496 8.96924 5.59123V3.66803C8.96924 3.08089 8.86939 2.65172 8.66034 2.37433C8.38551 1.99859 7.99827 1.81104 7.49948 1.81104C7.00346 1.81104 6.61622 1.99859 6.34075 2.37433C6.12935 2.65172 6.0293 3.08089 6.0293 3.66803V5.59123C6.0293 6.17496 6.12935 6.60797 6.34075 6.8828C6.61601 7.25748 7.00346 7.44503 7.49948 7.44503ZM7.02453 3.46856C7.02453 2.9604 7.17866 2.70707 7.49948 2.70707C7.8203 2.70707 7.974 2.96019 7.974 3.46856V5.77878C7.974 6.28694 7.8203 6.54112 7.49948 6.54112C7.17866 6.54112 7.02453 6.28694 7.02453 5.77878V3.46856Z"/>
                            </svg>
                            @break
                        @endswitch
                    </a>
                @endforeach
            </li>
        </ul>
        <ul>
            <li><a class="logo" href="{{dynamicRoute('home')}}"><img src="{{asset('img/logo.svg')}}" alt="logo"></a></li>
            <li>
                <button type="button" class="appButton appButton-block"
                        data-toggle="modal"
                        data-target="#modal"
                        data-title="ЗАЯВКУ"
                        data-btn="Оставить заявку"
                        data-type="proposal">
                    ОСТАВИТЬ ЗАЯвКУ
                </button>
            </li>
            <li><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p></li>
        </ul>
    </div>
</footer>
<!--   Start Plugins-->
<script src="{{asset('js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>
<!--   End Plugins-->
<script src="{{asset('js/main.js')}}"></script>
@stack('js')
</body>
</html>
