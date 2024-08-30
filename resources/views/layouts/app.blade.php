<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
<head>

    <meta charset="utf-8" />
    <title>BAWS | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('') }}assets/images/baws-favicon.png">

    <!-- Layout config Js -->
    <script src="{{ asset('') }}assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('') }}assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('') }}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('') }}assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('') }}assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <style>
        a.active {
            color:#212529;
        }
        .navbar-landing .navbar-nav .nav-item .nav-link:hover {
            color:#212529 !important;
        }
    </style>
@stack('style')
</head>

<body>

<nav class="navbar navbar-expand-lg bg-white navbar-landing" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{ asset('') }}assets/images/baws-hdr-logo.png" class="card-logo card-logo-dark" alt="logo dark" height="60">
                    <img src="{{ asset('') }}assets/images/baws-hdr-logo.png" class="card-logo card-logo-light" alt="logo light" height="60">
                </a>
                <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                </div>
                <p class="me-5">
                    <i class="text-success fs-20 ri-mail-line"></i>
                    <span class="text-muted">Email Address</span><br>
                    <span class="text-dark fw-bold">contact@baws.org.pk</span>
                 </p>
                 <p class="me-5">
                    <i class="text-success fs-20 ri-phone-line"></i>
                    <span class="text-muted">Phone Number</span><br>
                    <span class="text-dark fw-bold">+92 333 3105644</span>
                 </p>
                <div class="text-end">
                    <a href="{{ route('register') }}" class="btn btn-success fw-bold px-4" style="background-color: #74ba49; border-color:#74ba49;">BECOME A MEMBER</a>
                </div>

            </div>
        </nav>

        <div class="navbar navbar-expand-lg navbar-landing w-75 mx-auto p-2" id="navbar" style="background-color: #74ba49;">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                        <li class="nav-item">
                            <a class="nav-link fs-14 text-white text-uppercase" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                        <div class="btn-group">
                            <a class="nav-link fs-14 dropdown-toggle text-white text-uppercase" href="javascript:;" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                                <div class="dropdown-menu dropdownmenu-success">
                                    <a class="dropdown-item text-uppercase" href="https://baws.org.pk/governing-bodies/">Governing Bodies</a>
                                    <a class="dropdown-item text-uppercase" href="https://baws.org.pk/history/">History</a>
                                    <a class="dropdown-item text-uppercase" href="https://baws.org.pk/founders/">Founders</a>
                                </div>
                                </div>
                        </li>
                        <li class="nav-item">
                        <div class="btn-group">
                            <a class="nav-link fs-14 dropdown-toggle text-white text-uppercase" href="javascript:;" data-bs-toggle="dropdown" aria-expanded="false">Our Initiative</a>
                                <div class="dropdown-menu dropdownmenu-success">
                                    <a class="dropdown-item text-uppercase" href="https://baws.org.pk/business-support-system/">Business Support System</a>
                                    <a class="dropdown-item text-uppercase" href="https://baws.org.pk/#">Education Fund</a>
                                    <a class="dropdown-item text-uppercase" href="https://baws.org.pk/#">Health Faculty</a>
                                </div>
                                </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-14 text-white text-uppercase" href="https://baws.org.pk/events-archive/">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-14 text-white text-uppercase" href="https://baws.org.pk/donate/">Donate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-14 text-white text-uppercase" href="https://baws.org.pk/contact-us/">Contact Us</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a class="nav-link fs-14 text-white text-uppercase" onclick="$('#logout-form').submit();" href="javascript:void(0);">Logout</a>
                        </li>
                        <form action="{{ route('logout') }}" id="logout-form" method="post">
                          @csrf
                          @method('POST')
                        </form>
                        @endauth
                    </ul>
                </div>
        
        </div>

        @yield('content')


        <!-- Start footer -->
        <footer class="custom-footer bg-dark py-5 position-relative" style="background-image: url('{{ asset('') }}assets/images/footer-bg.png')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mt-4 text-center">
                        <div>
                            <div>
                                <img src="{{ asset('') }}assets/images/baws-footer-logo.png" alt="logo light" height="150" width="250">
                            </div>
                            
                            <div class="mt-4">
                                <ul class="list-inline mb-0 footer-social-link">
                                    <li class="list-inline-item">
                                        <a href="https://www.facebook.com/bawspk" class="avatar-xs d-block">
                                            <div class="avatar-title rounded-circle">
                                                <i class="ri-facebook-fill"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://twitter.com/baws" class="avatar-xs d-block">
                                            <div class="avatar-title rounded-circle">
                                                <i class="ri-twitter-fill"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="avatar-xs d-block">
                                            <div class="avatar-title rounded-circle">
                                                <i class="ri-whatsapp-fill"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="mt-4">
                                <p class="copy-rights mb-0">
                                    Copyright © BAWS <script> document.write(new Date().getFullYear()) </script>. All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('') }}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('') }}assets/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('') }}assets/libs/feather-icons/feather.min.js"></script>
    <script src="{{ asset('') }}assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{ asset('') }}assets/js/plugins.js"></script>

    <!-- particles js -->
    <script src="{{ asset('') }}assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="{{ asset('') }}assets/js/pages/particles.app.js"></script>
    <!-- password-addon init -->
    <script src="{{ asset('') }}assets/js/pages/password-addon.init.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @yield('scripts')
</body>
</html>