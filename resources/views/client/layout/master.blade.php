<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/all.min.css" />
    <!-- CSS Normalized -->
    <link rel="stylesheet" href="/css/normalized.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/dashboard.css" />
    @livewireStyles
    <title>JOBHunt</title>
</head>

<body>
    <!-- start sidebar -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 main-color">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <!-- <span class="fs-5 d-none d-sm-inline">Menu</span> -->
                    </a>
                    <div class=" text-center my-3">
                        <span class=" text-center "
                            style="color: yellow;font-size: 30px;font-weight: 600;">JOBHunt</span>
                    </div>
                    <ul class="nav nav-pills my-2 fs-6 flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item my-3">
                            <a href="{{ route('index') }}" class="nav-link align-middle px-0 {{ request()->routeIs('index') ? 'active' : 'text-white'}}">
                                <i class="fas fa-home"></i>
                                <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li class="w-100 my-3">
                            <a href="{{ route('dashboard') }}" class="nav-link px-0 {{ request()->routeIs('dashboard') ? 'second-color' : 'text-white'}}">
                                <i class="fas fa-user-alt"></i>
                                <span class="ms-1 d-none d-sm-inline">Personal Information</span>
                            </a>
                        </li>
                        <li class="w-100 my-3">
                            <a href="{{ route('education',Auth()->user()->id) }}" class="nav-link px-0 {{ request()->routeIs('education') ? 'second-color' : 'text-white'}}"">
                                <i class="fas fa-user-graduate"></i>
                                <span class="d-none d-sm-inline">Education</span>
                            </a>
                        </li>
                        <li class="w-100 my-3">
                            <a href="{{route('courses',Auth()->user()->id)}}" class="nav-link px-0 {{ request()->routeIs('courses') ? 'second-color' : 'text-white'}}"">
                                <i class="fas fa-graduation-cap"></i>
                                <span class="d-none d-sm-inline">Courses</span>
                            </a>
                        </li>
                        <li class="my-3">
                            <a href=" {{route('skills',Auth()->user()->id)}}" class="nav-link px-0 align-middle {{ request()->routeIs('skills') ? 'second-color' : 'text-white'}}"">
                                <i class="fas fa-puzzle-piece"></i>
                                <span class="ms-1 d-none d-sm-inline">Skills</span></a>
                        </li>
                        <li class="my-3">
                            <a href=" {{route('cv',Auth()->user()->id)}}" class="nav-link px-0 align-middle {{ request()->routeIs('cv') ? 'second-color' : 'text-white'}}"">
                                <i class="fas fa-list"></i>
                                <span class="ms-1 d-none d-sm-inline">CV</span></a>
                        </li>
                        <li class="my-3">
                            <a href="{{ route('logout') }}" class="nav-link px-0 align-middle {{ request()->routeIs('logout') ? 'second-color' : 'text-white'}}"">
                                <i class="fas fa-sign-out-alt"></i>
                                <span class="ms-1 d-none d-sm-inline">Logout</span></a>
                        </li>
                    </ul>
                    <hr />
                    <div class=" pb-4 my-3">
                        @if (isset($personalInfo))
                            <img src='{{ asset("images/$personalInfo->avatar") }}' alt="hugenerd" width="30"
                                height="30" class="rounded-circle" />
                        @else
                            <img src="{{ asset('images/default_image.png') }}" alt="hugenerd" width="30"
                                height="30" class="rounded-circle" />
                        @endif
                        <span class="d-none d-sm-inline mx-1">{{ Auth::user()->name }}</span>
                    </div>
                </div>
            </div>
            <!-- end aside -->

            @yield('content')
        </div>
    </div>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ URL::asset('js/axios.min.js') }}"></script>
    <script src="{{asset('js/functions.js')}}"></script>
    @yield('javaScript')
    @livewireScripts
</body>
</html>
