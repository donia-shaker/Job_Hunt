<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,900;1,500&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
    <!-- CSS Normalized -->
    <link rel="stylesheet" href="{{ asset('css/normalized.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/serv.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/cv.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/about-us.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/contact-us.css') }}" />

    <title>JOBHunt</title>
</head>

<body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bd-blue-800 fixed-top shadow">
        <div class="container">
            <a class="navbar-brand  logo" href="#">JOBHunt</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" style="margin-right: 60px" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mt-2">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('index') ? 'active' : ''}}" aria-current="page" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('all_jobs') ? 'active' : ''}}" href="{{route('all_jobs')}}">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('services') ? 'active' : ''}}" href="{{route('services')}}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about_us') ? 'active' : ''}}" href="{{route('about_us')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact_us') ? 'active' : ''}}" href="{{route('contact_us')}}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('partiner') ? 'active' : ''}}" href="{{route('partiner')}}">Partiners</a>
                    </li>
                </ul>
                <div class="acount  pb-4 pb-lg-0">
                    <a href="{{route('login')}}" class="me-2 {{ request()->routeIs('login') ? 'active' : 'text-white'}}"><i class="fas fa-sign-in-alt me-2"></i>Login</a>
                    <a href="{{route('register')}}" class=" me-2 {{ request()->routeIs('register') ? 'active' : 'text-white'}}"><i class="fas fa-user"></i> Signup</a>
                </div>
                <!-- profile -->
                
            </div>
            <div class="dropdown mt-4 mx-2 pb-4 profile" >
                    <a href="{{route('login')}}" class="d-flex align-items-center text-white text-decoration-none ">
                            @if (isset(Auth::user()->personalInfo->avatar))
                            <img src="/images/{{Auth::user()->personalInfo->avatar}}" alt="hugenerd" width="30"
                                height="30" class="rounded-circle" />
                        @else
                            <img src="{{ asset('images/default_image.png') }}" alt="hugenerd" width="30"
                                height="30" class="rounded-circle" />
                        @endif
                    </a>
            </div>
        </div>
    </nav>
    <!-- End  Navbar-->

    @yield('content')

    <!-- start footer -->
    <footer class="py-5 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center pb-5 col-md-4 col-lg-3">
                    <a class="logo" >JOBHunt</a>
                    <p>The most trusted source for jobs.</p>
                    <div class="icon fs-4">
                        <i class="fab fa-facebook-f p-1"></i>
                        <i class="fab fa-twitter p-1"></i>
                        <i class="fab fa-instagram p-1" style="border-radius: 7px"></i>
                        <i class="fab fa-linkedin-in p-1"></i>
                        <i class="fab fa-snapchat-ghostp-1"></i>
                        <i class="fab fa-tiktok p-1"></i>
                    </div>
                </div>

                <div class="boxes col-md-8  col-lg-9 px-sm-3">
                    <div class="row m-auto">
                        <div class="box col-6 col-lg-3 py-2">
                            <h5>TOP CATEGORIES</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group">
                                    <a>Development <span>(67)</span></a>
                                </li>
                                <li class="list-group">
                                    <a>Healthcare <span>(18)</span></a>
                                </li>
                                <li class="list-group">
                                    <a>Finance/Accounting <span>(8)</span></a>
                                </li>
                                <li class="list-group">
                                    <a>Computers/IT <span>(9)</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="box col-6 col-lg-3 py-2">
                            <h5>TOP LOCATIONS</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group">
                                    <a>Aden <span>(51)</span></a>
                                </li>
                                <li class="list-group">
                                    <a>Sana'a <span>(36)</span></a>
                                </li>
                                <li class="list-group">
                                    <a>Ibb <span>(21)</span></a>
                                </li>
                                <li class="list-group">
                                    <a>Taiz <span>(11)</span></a>
                                </li>
                                <li class="list-group">
                                    <a>Hodiedah <span>(10)</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="box col-6 col-lg-3 py-2">
                            <h5>TOP EMPLOYERS</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group">
                                    <a>MSF <span>(17)</span></a>
                                </li>
                                <li class="list-group">
                                    <a>Confidential <span>(14)</span></a>
                                </li>
                                <li class="list-group">
                                    <a>INTERSOS <span>(14)</span></a>
                                </li>
                                <li class="list-group">
                                    <a>Al-Awn Foundation for Development <span>(9)</span></a>
                                </li>
                                <li class="list-group">
                                    <a>SOUL for Development <span>(6)</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="box col-6 col-lg-3 py-2">
                            <h5>Job Finder</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group">
                                    <a>Home </a>
                                </li>
                                <li class="list-group">
                                    <a>Jobs </a>
                                </li>
                                <li class="list-group">
                                    <a>Services </a>
                                </li>
                                <li class="list-group">
                                    <a>Contact Us </a>
                                </li>
                                <li class="list-group">
                                    <a>About Us </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <script src="{{ asset('js/jquery-main.js') }}"></script>
    <script src="{{ asset('js/filter.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    
</body>

</html>
