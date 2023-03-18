<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Opedia Technologies</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend') }}/assets/images/favicon.ico">

        <!-- App css -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" >
        <link href="{{ asset('backend') }}/plugins/summernote/summernote-bs4.css" rel="stylesheet" />
        <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend') }}/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend') }}/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">


        <link href="{{ asset('backend') }}/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="{{ asset('backend') }}/assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="/dashboard" class="logo">
                            <span>
                                <img src="{{ asset('backend') }}/assets/images/logo.png" alt="" height="22">
                            </span>
                            <i>
                                <img src="{{ asset('backend') }}/assets/images/logo_sm.png" alt="" height="28">
                            </i>
                        </a>
                    </div>

                    <!-- User box -->
                    <div class="user-box">
                        {{-- <div class="user-img">
                            <img src="{{ asset('backend') }}/assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>
                        <h5><a href="#">Maxine Kennedy</a> </h5>
                        <p class="text-muted">Admin Head</p> --}}
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul class="metismenu" id="side-menu">
                            <li>
                                <a href="/dashboard">
                                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill pull-right">5</span> <span> Dashboard </span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="{{ route('index') }}">
                                    <i class="fi-air-play"></i><span> Visit Site </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fi-disc"></i><span class="badge badge-info pull-right"> {{ count(viewStatus()) }}</span> <span> Message </span> </a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li><a href="{{ route('message.index') }}">{{ __('Message') }}</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fi-disc"></i><span class="badge badge-warning pull-right"> {{ count(getEmail()) }}</span> <span> Subscriber </span></a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li><a href="{{ route('email.index') }}">{{ __('Subscriber List') }}</a></li>
                                </ul>
                            </li>
                            
                            {{-- <li>
                                <a href="javascript: void(0);"><i class="fi-disc"></i><span> Service </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li><a href="{{ route('service.create') }}">{{ __('Add Service') }}</a></li>
                                    <li><a href="{{ route('service.index') }}">{{ __('List Service') }}</a></li>
                                </ul>
                            </li> --}}



                            <li>
                                <a href="javascript: void(0);"><i class="fi-disc"></i><span> Services </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li>
                                        <a href="javascript: void(0);"><span> Service Category </span> <span class="menu-arrow"></span></a>
                                        <ul class="nav-second-level collapse" aria-expanded="false">
                                            <li><a href="{{ route('serviceCategory.create') }}">{{ __('Add Service Category') }}</a></li>
                                            <li><a href="{{ route('serviceCategory.index') }}">{{ __('List Service Category') }}</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);"><span> Service </span> <span class="menu-arrow"></span></a>
                                        <ul class="nav-second-level collapse" aria-expanded="false">
                                            <li><a href="{{ route('service.create') }}">{{ __('Add Service') }}</a></li>
                                            <li><a href="{{ route('service.index') }}">{{ __('List Service') }}</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            {{-- Team --}}
                             <li>
                                <a href="javascript: void(0);"><i class="fi-disc"></i><span>Service Details </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li><a href="{{ route('blogDetails.create') }}">{{ __('Add service Details') }}</a></li>
                                    <li><a href="{{ route('blogDetails.index') }}">{{ __('List service Details') }}</a></li>
                                </ul>
                            </li>
                            {{-- Team --}}




                            {{-- <li>
                                <a href="javascript: void(0);"><i class="fi-disc"></i><span> SubCategory </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li><a href="{{ route('subcategory.create') }}">{{ __('Add SubCategory') }}</a></li>
                                    <li><a href="{{ route('subcategory.index') }}">{{ __('List SubCategory') }}</a></li>
                                </ul>

                            </li> --}}

                            <li>
                                <a href="javascript: void(0);"><i class="fi-disc"></i><span> Portfolios </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li>
                                        <a href="javascript: void(0);"><span> Category </span> <span class="menu-arrow"></span></a>
                                        <ul class="nav-second-level collapse" aria-expanded="false">
                                            <li><a href="{{ route('category.create') }}">{{ __('Add Category') }}</a></li>
                                            <li><a href="{{ route('category.index') }}">{{ __('List Category') }}</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);"></i><span> Portfolio </span> <span class="menu-arrow"></span></a>
                                        <ul class="nav-second-level collapse" aria-expanded="false">
                                            <li><a href="{{ route('portfolio.create') }}">{{ __('Add Portfolio') }}</a></li>
                                            <li><a href="{{ route('portfolio.index') }}">{{ __('List Portfolio') }}</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            {{-- Training --}}
                            <li>
                                <a href="javascript: void(0);"><i class="fi-disc"></i><span> Training </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li><a href="{{ route('training.create') }}">{{ __('Add Training') }}</a></li>
                                    <li><a href="{{ route('training.index') }}">{{ __('List Training') }}</a></li>
                                </ul>
                            </li>
                            {{-- Training --}}
                            {{-- Team --}}
                            <li>
                                <a href="javascript: void(0);"><i class="fi-disc"></i><span> Teams </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li><a href="{{ route('team.create') }}">{{ __('Add Team') }}</a></li>
                                    <li><a href="{{ route('team.index') }}">{{ __('List Team') }}</a></li>
                                </ul>
                            </li>
                            {{-- Team --}}


                            {{-- Team --}}
                             <li>
                                <a href="javascript: void(0);"><i class="fi-disc"></i><span> Blog </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li><a href="{{ route('blog.create') }}">{{ __('Add Blog') }}</a></li>
                                    <li><a href="{{ route('blog.index') }}">{{ __('List Blog') }}</a></li>
                                </ul>
                            </li>
                            {{-- Team --}}


                            {{-- Gallery --}}
                            <li>
                                <a href="javascript: void(0);"><i class="fi-disc"></i><span> Gallery </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li><a href="{{ route('gallery.create') }}">{{ __('Add Gallery') }}</a></li>
                                    <li><a href="{{ route('gallery.index') }}">{{ __('List Gallery') }}</a></li>
                                </ul>
                            </li>
                            {{-- Gallery --}}



                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->
            </div>
            <!-- Left Sidebar End -->


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="hide-phone app-search">
                                <form>
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li>


                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-speech-bubble noti-icon"></i>
                                    <span class="badge badge-custom badge-pill noti-icon-badge">{{ count(viewStatus()) }}</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Chat</h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        @forelse (viewStatus() as $vStatus)
                                        <a href="{{ route('message.index') }}" class="dropdown-item notify-item">
                                            <p class="notify-details">{{ $vStatus->fname }}</p>
                                            <p class="text-muted font-13 mb-0 user-msg">{{ $vStatus->message }}</p>
                                        </a>
                                        @empty

                                        @endforelse
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ asset('backend') }}/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1">{{ Auth::user()->name }}<i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>


                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-cog"></i> <span>Settings</span>
                                    </a>


                                    <a class="dropdown-item notify-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i><span>{{ __('Logout') }}</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Welcome to Opedia admin panel !</li>
                                    </ol>
                                </div>
                            </li>
                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->


                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">
                        @yield('content')
                    </div> <!-- container -->
                </div> <!-- content -->

                <footer class="footer text-right">
                    2018 © Opediatech. - Coderthemes.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>
        <script src="{{ asset('backend') }}/assets/js/popper.min.js"></script>
        <script src="{{ asset('backend') }}/assets/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="{{ asset('backend') }}/assets/js/metisMenu.min.js"></script>
        <script src="{{ asset('backend') }}/assets/js/waves.js"></script>
        <script src="{{ asset('backend') }}/assets/js/jquery.slimscroll.js"></script>
        <!-- Required datatable js -->
        <script src="{{ asset('backend') }}/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ asset('backend') }}/plugins/datatables/dataTables.bootstrap4.min.js"></script>



        <script src="{{ asset('backend') }}/plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Dashboard Init -->
        <script src="{{ asset('backend') }}/assets/pages/jquery.dashboard.init.js"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <!-- App js -->

        <script src="{{ asset("") }}ckeditor.js"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

        <script src="{{ asset('backend') }}/assets/js/jquery.core.js"></script>
        <script src="{{ asset('backend') }}/assets/js/jquery.app.js"></script>

        @yield('backend_footer_script')

        <script>
              $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            $('#selection-datatable').DataTable();



        CKEDITOR.replace("editor",{
            extraPlugins : ['font', 'richcombo', 'floatpanel', 'panelbutton', 'colorbutton', 'justify']

        })
        CKEDITOR.replace("maintitledesc",{
            extraPlugins : ['font', 'richcombo', 'floatpanel', 'panelbutton', 'colorbutton', 'justify']

        })
        CKEDITOR.replace("blog__title_desc",{
            extraPlugins : ['font', 'richcombo', 'floatpanel', 'panelbutton', 'colorbutton', 'justify']

        })
        CKEDITOR.replace("quote_desc",{
            extraPlugins : ['font', 'richcombo', 'floatpanel', 'panelbutton', 'colorbutton', 'justify']

        })
        CKEDITOR.replace("details_desc",{
            extraPlugins : ['font', 'richcombo', 'floatpanel', 'panelbutton', 'colorbutton', 'justify']

        })



        </script>

        @if (Session::has('success'))
            <script>
                toastr.success("{!! Session::get('success') !!}")
            </script>
        @endif

        @if (Session::has('fail'))
            <script>
                toastr.success("{!! Session::get('fail') !!}")
            </script>
        @endif




    </body>
</html>
