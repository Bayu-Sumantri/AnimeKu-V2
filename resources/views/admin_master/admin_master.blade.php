<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AnimeKu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('/admin/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('/admin/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('/admin/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- aos js -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- sweetalert2 -->
    <link rel="stylesheet" href="sweetalert2.min.css">

    <!-- {{-- user_pp --}} -->
    {{-- <link rel="stylesheet" href="{{ assets("/admin/css/user.css") }}" > --}}





    <!-- Template Stylesheet -->
    <link href="{{ asset('/admin/css/style.css') }}" rel="stylesheet">
    <style type="text/css">
        .user {
            display: inline-block;
            width: 150px;
            height: 150px;
            border-radius: 50%;

            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        @include('sweetalert::alert')

        <div class="container-fluid position-relative d-flex p-0">
            <!-- Spinner Start -->
            <div id="spinner"
                class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->


            @include('admin_master.sidebar')


            <!-- Content Start -->
            <div class="content">
                <!-- Navbar Start -->
                <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                    <a href="{{ url('index.html') }}" class="navbar-brand d-flex d-lg-none me-4">
                        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                    </a>
                    <a href="{{ url('#') }}" class="sidebar-toggler flex-shrink-0">
                        <i class="fa fa-bars"></i>
                    </a>
                    <form class="d-none d-md-flex ms-4">
                        <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                    </form>
                    <div class="navbar-nav align-items-center ms-auto">
                        <div class="nav-item dropdown">
                            <a href="{{ url('#') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                @if (auth()->user()->Profile)
                                    <img class="rounded-circle"
                                        src="{{ \Illuminate\Support\Facades\Storage::url(auth()->user()->Profile) }}"
                                        alt="" style="width: 40px; height: 40px;">
                                @else
                                    <img class="rounded-circle" src="{{ asset('/admin/img/user.jpg') }}" alt=""
                                        style="width: 40px; height: 40px;">
                                @endif
                                <span class="d-none d-lg-inline-flex">{{ auth()->user()->name }}</span>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                                <a href="{{ url('profil') }}" class="dropdown-item">My Profile</a>
                                <a href="{{ url('settings') }}" class="dropdown-item">Settings</a>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="dropdown-item">Log Out</<button>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Navbar End -->


                <!-- Sale & Revenue Start -->

                <!-- Sale & Revenue End -->


                <!-- Sales Chart Start -->



                @yield('admin_master')
                <!-- Widgets End -->


                <!-- Footer Start -->
                @include('admin_master.footer')
                <!-- Footer End -->
            </div>



        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="{{ url('#') }}" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
                class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/admin/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('/admin/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('/admin/lib/waypoints/waypoints.min.js') }}   "></script>
    <script src="{{ asset('/admin/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/admin/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('/admin/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('/admin/js/main.js') }}"></script>



    <!-- aos js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>
