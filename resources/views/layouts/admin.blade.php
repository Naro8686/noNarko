<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin | {{ config('app.name', 'NoNarko') }}</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('css/admin/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/admin/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('css/admin/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/admin/bootstrap-select.css')}}" rel="stylesheet">
    <link href="{{asset('css/admin/main.css')}}" rel="stylesheet">
    @stack('css')
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard')}}">
            <img src="{{asset('img/logo.svg')}}" alt="Logo">
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item @if(request()->routeIs('admin.dashboard')) active @endif">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <li class="nav-item @if(request()->routeIs('admin.proposal.*')) active @endif">
            <a class="nav-link" href="{{route('admin.proposal.index')}}">
                <i class="fas fa-fw fa-tasks"></i>
                <span>{{__('Proposals')}}</span></a>
        </li>
        <li class="nav-item @if(request()->routeIs('admin.feedback.*')) active @endif">
            <a class="nav-link" href="{{route('admin.feedback.index')}}">
                <i class="fas fa-fw fa-comment"></i>
                <span>{{__('Feedbacks')}}</span></a>
        </li>
        <li class="nav-item @if(request()->routeIs('admin.slider.*')) active @endif">
            <a class="nav-link" href="{{route('admin.slider.index')}}">
                <i class="fas fa-fw fa-sliders-h"></i>
                <span>{{__('Slider')}}</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item @if(request()->routeIs('admin.pages.*')) active @endif">
            <a class="nav-link @if(!request()->routeIs('admin.pages.*')) collapsed @endif"
               href="#" data-toggle="collapse"
               data-target="#collapsePages"
               aria-expanded="true"
               aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>{{__('Pages')}}</span>
            </a>
            <div id="collapsePages" class="collapse @if(request()->routeIs('admin.pages.*')) show @endif"
                 aria-labelledby="headingPages"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">{{__('Main')}}:</h6>
                    @foreach(pages()->where('seo','<>',null) as $page)
                        <a class="collapse-item @if(request()->routeIs("admin.pages.$page->name")) active @endif"
                           href="{{route("admin.pages.$page->name")}}">{{$page->seo->title}}</a>
                    @endforeach
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">{{__('Other')}}:</h6>
                    <a class="collapse-item @if(request()->routeIs("admin.pages.ourServices")) active @endif"
                       href="{{route("admin.pages.ourServices")}}">Наши услуги</a>
                    <a class="collapse-item @if(request()->routeIs("admin.pages.submitApplication")) active @endif"
                       href="{{route("admin.pages.submitApplication")}}">Оставить заявку</a>
                    <a class="collapse-item @if(request()->routeIs("admin.pages.giveFeedback")) active @endif"
                       href="{{route("admin.pages.giveFeedback")}}">Оставить отзыв</a>
                    <a class="collapse-item @if(request()->routeIs("admin.pages.treatmentSteps")) active @endif"
                       href="{{route("admin.pages.treatmentSteps")}}">Шаги лечения</a>
                    <a class="collapse-item @if(request()->routeIs("admin.pages.advantage")) active @endif"
                       href="{{route("admin.pages.advantage")}}">Преймущества</a>
                    <a class="collapse-item @if(request()->routeIs("admin.pages.error404")) active @endif"
                       href="{{route("admin.pages.error404")}}">404</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        @foreach([
            'fas fa-fw fa-blog'=>\App\Models\Page::BLOG,
            'fas fa-fw fa-newspaper'=>\App\Models\Page::NEWS,
            'fas fa-fw fa-user-shield'=>\App\Models\Page::CASES,
            'fas fa-fw fa-question'=>\App\Models\Page::FAQ,
            'fas fa-fw fa-address-card'=>\App\Models\Page::REQUESTS,
            'fas fa-fw fa-concierge-bell'=>\App\Models\Page::SERVICES,
            'fas fa-fw fa-font'=>\App\Models\Page::ABC,
            'fas fa-fw fa-balance-scale-right'=>\App\Models\Page::ADVANTAGE,
            'fas fa-fw fa-notes-medical'=>\App\Models\Page::WRITE_DOCTOR,
            'fas fa-fw fa-shoe-prints'=>\App\Models\Page::STEPS,
        ] as $icon => $post)
            <li class="nav-item @if(request()->routeIs("admin.$post.*")) active @endif">
                <a class="nav-link" href="{{route("admin.$post.index")}}">
                    <i class="{{$icon}}"></i>
                    <span>{{__(ucfirst($post))}}</span>
                </a>
            </li>
        @endforeach
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <!-- Nav Item - User Information -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                     src="{{asset('img/admin/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                 aria-labelledby="userDropdown">
                                {{--                                <a class="dropdown-item" href="#">--}}
                                {{--                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                                {{--                                    Profile--}}
                                {{--                                </a>--}}
                                {{--                                <a class="dropdown-item" href="#">--}}
                                {{--                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                                {{--                                    Settings--}}
                                {{--                                </a>--}}
                                {{--                                <div class="dropdown-divider"></div>--}}
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

            </nav>
            <!-- End of Topbar -->
            <div class="container">
                @if ($message = session('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if ($message = session('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
            </div>
            <!-- Begin Page Content -->
        @yield('content')
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; 2021</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Delete Item Modal-->
<div class="modal fade" id="deleteItemModal" tabindex="-1" role="dialog" aria-labelledby="deleteItemModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="#" method="POST" class="modal-content">
            @csrf
            @method('DELETE')
            <div class="modal-header">
                <h5 class="modal-title" id="deleteItemModalLabel"></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <h2 class="text-center">Удалить ?</h2>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">{{(__('No'))}}</button>
                <button class="btn btn-danger" type="submit">{{(__('Yes'))}}</button>
            </div>
        </form>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('js/admin/jquery.min.js')}}"></script>
<script src="{{asset('js/admin/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/admin/bootstrap-select.js')}}"></script>
<script src="{{asset('js/admin/i18n/defaults-ru_RU.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('js/admin/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('js/admin/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{asset('js/admin/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/admin/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('js/admin/bs-custom-file-input.min.js')}}"></script>
<script src="{{asset('plugins/ckeditor/ckeditor.js')}}"></script>
<!-- Page level custom scripts -->
<script src="{{asset('js/admin/main.js')}}"></script>
@stack('js')

</body>

</html>
