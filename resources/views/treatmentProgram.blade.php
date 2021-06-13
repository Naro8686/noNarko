@extends('layouts.app')

@section('content')
    <div class="container treatment_program">
        <ol class="history d-none d-lg-flex">
            <li><a href="{{route('home')}}">Главная</a></li>
            <li>О программе лечения</li>
        </ol>
        <h1 class="title mt-100">О программе лечения</h1>
        <p class="desc"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
            the industry's standard dummy text ever since the.</p>
        <div class="treatment-stages-block">
            <ul class="timeline">
                <li>
                    <h2>Lorem Ipsum is simply dummy</h2>
                    <ul>
                        <li><a href="#">- Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.</a></li>
                        <li><a href="#">- When an unknown printer took a galley of type and scrambled.</a></li>
                        <li><a href="#">- It has survived not only five centuries, but also the leap into
                                electronic</a></li>
                        <li><a href="#">- Typesetting, remaining essentially unchanged.</a></li>
                        <li><a href="#">- It was popularised in the 1960s with the release of</a></li>
                        <li><a href="#">- Letraset sheets containing Lorem Ipsum passages, and more recently
                                with desktop</a></li>
                    </ul>
                    <a class="up active" href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M12.9365 18.6672L23.6166 7.98685C23.8638 7.73983 24 7.41008 24 7.05847C24 6.70686 23.8638 6.37711 23.6166 6.13009L22.8303 5.34356C22.3179 4.83176 21.4851 4.83176 20.9735 5.34356L12.005 14.3121L3.02651 5.33361C2.77929 5.08658 2.44974 4.95019 2.09832 4.95019C1.74652 4.95019 1.41696 5.08658 1.16955 5.33361L0.383411 6.12014C0.136194 6.36735 -7.63515e-08 6.69691 -9.17207e-08 7.04852C-1.0709e-07 7.40013 0.136194 7.72988 0.383411 7.9769L11.0733 18.6672C11.3213 18.9148 11.6524 19.0508 12.0044 19.05C12.3578 19.0508 12.6887 18.9148 12.9365 18.6672Z"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="24" height="24" fill="white" transform="translate(24) rotate(90)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a class="down" href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M12.9365 18.6672L23.6166 7.98685C23.8638 7.73983 24 7.41008 24 7.05847C24 6.70686 23.8638 6.37711 23.6166 6.13009L22.8303 5.34356C22.3179 4.83176 21.4851 4.83176 20.9735 5.34356L12.005 14.3121L3.02651 5.33361C2.77929 5.08658 2.44974 4.95019 2.09832 4.95019C1.74652 4.95019 1.41696 5.08658 1.16955 5.33361L0.383411 6.12014C0.136194 6.36735 -7.63515e-08 6.69691 -9.17207e-08 7.04852C-1.0709e-07 7.40013 0.136194 7.72988 0.383411 7.9769L11.0733 18.6672C11.3213 18.9148 11.6524 19.0508 12.0044 19.05C12.3578 19.0508 12.6887 18.9148 12.9365 18.6672Z"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="24" height="24" fill="white" transform="translate(24) rotate(90)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </li>
                <li>
                    <h2>Lorem Ipsum is simply dummy</h2>
                    <ul>
                        <li><a href="#">- Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.</a></li>
                        <li><a href="#">- When an unknown printer took a galley of type and scrambled.</a></li>
                        <li><a href="#">- It has survived not only five centuries, but also the leap into
                                electronic</a></li>
                        <li><a href="#">- Typesetting, remaining essentially unchanged.</a></li>
                        <li><a href="#">- It was popularised in the 1960s with the release of</a></li>
                        <li><a href="#">- Letraset sheets containing Lorem Ipsum passages, and more recently
                                with desktop</a></li>
                    </ul>
                    <a class="up active" href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M12.9365 18.6672L23.6166 7.98685C23.8638 7.73983 24 7.41008 24 7.05847C24 6.70686 23.8638 6.37711 23.6166 6.13009L22.8303 5.34356C22.3179 4.83176 21.4851 4.83176 20.9735 5.34356L12.005 14.3121L3.02651 5.33361C2.77929 5.08658 2.44974 4.95019 2.09832 4.95019C1.74652 4.95019 1.41696 5.08658 1.16955 5.33361L0.383411 6.12014C0.136194 6.36735 -7.63515e-08 6.69691 -9.17207e-08 7.04852C-1.0709e-07 7.40013 0.136194 7.72988 0.383411 7.9769L11.0733 18.6672C11.3213 18.9148 11.6524 19.0508 12.0044 19.05C12.3578 19.0508 12.6887 18.9148 12.9365 18.6672Z"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="24" height="24" fill="white" transform="translate(24) rotate(90)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a class="down" href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M12.9365 18.6672L23.6166 7.98685C23.8638 7.73983 24 7.41008 24 7.05847C24 6.70686 23.8638 6.37711 23.6166 6.13009L22.8303 5.34356C22.3179 4.83176 21.4851 4.83176 20.9735 5.34356L12.005 14.3121L3.02651 5.33361C2.77929 5.08658 2.44974 4.95019 2.09832 4.95019C1.74652 4.95019 1.41696 5.08658 1.16955 5.33361L0.383411 6.12014C0.136194 6.36735 -7.63515e-08 6.69691 -9.17207e-08 7.04852C-1.0709e-07 7.40013 0.136194 7.72988 0.383411 7.9769L11.0733 18.6672C11.3213 18.9148 11.6524 19.0508 12.0044 19.05C12.3578 19.0508 12.6887 18.9148 12.9365 18.6672Z"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="24" height="24" fill="white" transform="translate(24) rotate(90)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </li>
                <li>
                    <h2>Lorem Ipsum is simply dummy</h2>
                    <ul>
                        <li><a href="#">- Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.</a></li>
                        <li><a href="#">- When an unknown printer took a galley of type and scrambled.</a></li>
                        <li><a href="#">- It has survived not only five centuries, but also the leap into
                                electronic</a></li>
                        <li><a href="#">- Typesetting, remaining essentially unchanged.</a></li>
                        <li><a href="#">- It was popularised in the 1960s with the release of</a></li>
                        <li><a href="#">- Letraset sheets containing Lorem Ipsum passages, and more recently
                                with desktop</a></li>
                    </ul>
                    <a class="up active" href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M12.9365 18.6672L23.6166 7.98685C23.8638 7.73983 24 7.41008 24 7.05847C24 6.70686 23.8638 6.37711 23.6166 6.13009L22.8303 5.34356C22.3179 4.83176 21.4851 4.83176 20.9735 5.34356L12.005 14.3121L3.02651 5.33361C2.77929 5.08658 2.44974 4.95019 2.09832 4.95019C1.74652 4.95019 1.41696 5.08658 1.16955 5.33361L0.383411 6.12014C0.136194 6.36735 -7.63515e-08 6.69691 -9.17207e-08 7.04852C-1.0709e-07 7.40013 0.136194 7.72988 0.383411 7.9769L11.0733 18.6672C11.3213 18.9148 11.6524 19.0508 12.0044 19.05C12.3578 19.0508 12.6887 18.9148 12.9365 18.6672Z"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="24" height="24" fill="white" transform="translate(24) rotate(90)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a class="down" href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M12.9365 18.6672L23.6166 7.98685C23.8638 7.73983 24 7.41008 24 7.05847C24 6.70686 23.8638 6.37711 23.6166 6.13009L22.8303 5.34356C22.3179 4.83176 21.4851 4.83176 20.9735 5.34356L12.005 14.3121L3.02651 5.33361C2.77929 5.08658 2.44974 4.95019 2.09832 4.95019C1.74652 4.95019 1.41696 5.08658 1.16955 5.33361L0.383411 6.12014C0.136194 6.36735 -7.63515e-08 6.69691 -9.17207e-08 7.04852C-1.0709e-07 7.40013 0.136194 7.72988 0.383411 7.9769L11.0733 18.6672C11.3213 18.9148 11.6524 19.0508 12.0044 19.05C12.3578 19.0508 12.6887 18.9148 12.9365 18.6672Z"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="24" height="24" fill="white" transform="translate(24) rotate(90)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </li>
                <li>
                    <h2>Lorem Ipsum is simply dummy</h2>
                    <ul>
                        <li><a href="#">- Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.</a></li>
                        <li><a href="#">- When an unknown printer took a galley of type and scrambled.</a></li>
                        <li><a href="#">- It has survived not only five centuries, but also the leap into
                                electronic</a></li>
                        <li><a href="#">- Typesetting, remaining essentially unchanged.</a></li>
                        <li><a href="#">- It was popularised in the 1960s with the release of</a></li>
                        <li><a href="#">- Letraset sheets containing Lorem Ipsum passages, and more recently
                                with desktop</a></li>
                    </ul>
                    <a class="up active" href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M12.9365 18.6672L23.6166 7.98685C23.8638 7.73983 24 7.41008 24 7.05847C24 6.70686 23.8638 6.37711 23.6166 6.13009L22.8303 5.34356C22.3179 4.83176 21.4851 4.83176 20.9735 5.34356L12.005 14.3121L3.02651 5.33361C2.77929 5.08658 2.44974 4.95019 2.09832 4.95019C1.74652 4.95019 1.41696 5.08658 1.16955 5.33361L0.383411 6.12014C0.136194 6.36735 -7.63515e-08 6.69691 -9.17207e-08 7.04852C-1.0709e-07 7.40013 0.136194 7.72988 0.383411 7.9769L11.0733 18.6672C11.3213 18.9148 11.6524 19.0508 12.0044 19.05C12.3578 19.0508 12.6887 18.9148 12.9365 18.6672Z"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="24" height="24" fill="white" transform="translate(24) rotate(90)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a class="down" href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M12.9365 18.6672L23.6166 7.98685C23.8638 7.73983 24 7.41008 24 7.05847C24 6.70686 23.8638 6.37711 23.6166 6.13009L22.8303 5.34356C22.3179 4.83176 21.4851 4.83176 20.9735 5.34356L12.005 14.3121L3.02651 5.33361C2.77929 5.08658 2.44974 4.95019 2.09832 4.95019C1.74652 4.95019 1.41696 5.08658 1.16955 5.33361L0.383411 6.12014C0.136194 6.36735 -7.63515e-08 6.69691 -9.17207e-08 7.04852C-1.0709e-07 7.40013 0.136194 7.72988 0.383411 7.9769L11.0733 18.6672C11.3213 18.9148 11.6524 19.0508 12.0044 19.05C12.3578 19.0508 12.6887 18.9148 12.9365 18.6672Z"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="24" height="24" fill="white" transform="translate(24) rotate(90)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </li>
                <li>
                    <h2>Lorem Ipsum is simply dummy</h2>
                    <ul>
                        <li><a href="#">- Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.</a></li>
                        <li><a href="#">- When an unknown printer took a galley of type and scrambled.</a></li>
                        <li><a href="#">- It has survived not only five centuries, but also the leap into
                                electronic</a></li>
                        <li><a href="#">- Typesetting, remaining essentially unchanged.</a></li>
                        <li><a href="#">- It was popularised in the 1960s with the release of</a></li>
                        <li><a href="#">- Letraset sheets containing Lorem Ipsum passages, and more recently
                                with desktop</a></li>
                    </ul>
                    <a class="up active" href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M12.9365 18.6672L23.6166 7.98685C23.8638 7.73983 24 7.41008 24 7.05847C24 6.70686 23.8638 6.37711 23.6166 6.13009L22.8303 5.34356C22.3179 4.83176 21.4851 4.83176 20.9735 5.34356L12.005 14.3121L3.02651 5.33361C2.77929 5.08658 2.44974 4.95019 2.09832 4.95019C1.74652 4.95019 1.41696 5.08658 1.16955 5.33361L0.383411 6.12014C0.136194 6.36735 -7.63515e-08 6.69691 -9.17207e-08 7.04852C-1.0709e-07 7.40013 0.136194 7.72988 0.383411 7.9769L11.0733 18.6672C11.3213 18.9148 11.6524 19.0508 12.0044 19.05C12.3578 19.0508 12.6887 18.9148 12.9365 18.6672Z"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="24" height="24" fill="white" transform="translate(24) rotate(90)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a class="down" href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M12.9365 18.6672L23.6166 7.98685C23.8638 7.73983 24 7.41008 24 7.05847C24 6.70686 23.8638 6.37711 23.6166 6.13009L22.8303 5.34356C22.3179 4.83176 21.4851 4.83176 20.9735 5.34356L12.005 14.3121L3.02651 5.33361C2.77929 5.08658 2.44974 4.95019 2.09832 4.95019C1.74652 4.95019 1.41696 5.08658 1.16955 5.33361L0.383411 6.12014C0.136194 6.36735 -7.63515e-08 6.69691 -9.17207e-08 7.04852C-1.0709e-07 7.40013 0.136194 7.72988 0.383411 7.9769L11.0733 18.6672C11.3213 18.9148 11.6524 19.0508 12.0044 19.05C12.3578 19.0508 12.6887 18.9148 12.9365 18.6672Z"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="24" height="24" fill="white" transform="translate(24) rotate(90)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </li>
                <li>
                    <h2>Lorem Ipsum is simply dummy</h2>
                    <ul>
                        <li><a href="#">- Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.</a></li>
                        <li><a href="#">- When an unknown printer took a galley of type and scrambled.</a></li>
                        <li><a href="#">- It has survived not only five centuries, but also the leap into
                                electronic</a></li>
                        <li><a href="#">- Typesetting, remaining essentially unchanged.</a></li>
                        <li><a href="#">- It was popularised in the 1960s with the release of</a></li>
                        <li><a href="#">- Letraset sheets containing Lorem Ipsum passages, and more recently
                                with desktop</a></li>
                    </ul>
                    <a class="up active" href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M12.9365 18.6672L23.6166 7.98685C23.8638 7.73983 24 7.41008 24 7.05847C24 6.70686 23.8638 6.37711 23.6166 6.13009L22.8303 5.34356C22.3179 4.83176 21.4851 4.83176 20.9735 5.34356L12.005 14.3121L3.02651 5.33361C2.77929 5.08658 2.44974 4.95019 2.09832 4.95019C1.74652 4.95019 1.41696 5.08658 1.16955 5.33361L0.383411 6.12014C0.136194 6.36735 -7.63515e-08 6.69691 -9.17207e-08 7.04852C-1.0709e-07 7.40013 0.136194 7.72988 0.383411 7.9769L11.0733 18.6672C11.3213 18.9148 11.6524 19.0508 12.0044 19.05C12.3578 19.0508 12.6887 18.9148 12.9365 18.6672Z"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="24" height="24" fill="white" transform="translate(24) rotate(90)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a class="down" href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M12.9365 18.6672L23.6166 7.98685C23.8638 7.73983 24 7.41008 24 7.05847C24 6.70686 23.8638 6.37711 23.6166 6.13009L22.8303 5.34356C22.3179 4.83176 21.4851 4.83176 20.9735 5.34356L12.005 14.3121L3.02651 5.33361C2.77929 5.08658 2.44974 4.95019 2.09832 4.95019C1.74652 4.95019 1.41696 5.08658 1.16955 5.33361L0.383411 6.12014C0.136194 6.36735 -7.63515e-08 6.69691 -9.17207e-08 7.04852C-1.0709e-07 7.40013 0.136194 7.72988 0.383411 7.9769L11.0733 18.6672C11.3213 18.9148 11.6524 19.0508 12.0044 19.05C12.3578 19.0508 12.6887 18.9148 12.9365 18.6672Z"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="24" height="24" fill="white" transform="translate(24) rotate(90)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    @include('include.seoText')
@endsection
