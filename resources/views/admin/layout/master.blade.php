<!DOCTYPE html>
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="../../assets/" data-template="vertical-menu-template-semi-dark">

  
<!--  , Sat, 26 Mar 2022 16:44:24 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - CRM | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>
    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/css/rtl/theme-semi-dark.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src="{{ URL::asset('assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.  -->
    <script src="{{ URL::asset('assets/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ URL::asset('assets/js/config.js') }}"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->

</head>

<body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">







            <!-- Menu -->


            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme"
                style="background-color: rgb(5 44 101) !important;">


                <div class="app-brand demo ">
                    <a href="/index" class="app-brand-link">
                        <span class=" text-center"
                            style="color: yellow;
    font-size: 30px;
    font-weight: 600;">JobHunt</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>



                <ul class="menu-inner py-1">






                    <!-- Forms & Tables -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">ادارة المستخدمين</span>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('show_users')}}" class="menu-link">
                            <div>عرض المستخدمين</div>
                        </a>
                    </li>



                    <!-- Misc -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Jobs Part </span></li>
                    <li class="menu-item ">
                        <a href="{{ route('jobs') }}" class="menu-link">
                            <i class='menu-icon tf-icons bx bx-layout'></i>
                            <div> الوظائف المتاحة</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                      <a href="{{ route('ended_jobs') }}" class="menu-link">
                          <i class='menu-icon tf-icons bx bx-layout'></i>
                          <div> الوظائف منتهية الوقت</div>
                      </a>
                  </li>

                  <li class="menu-item ">
                    <a href="{{ route('complated_jobs') }}" class="menu-link">
                        <i class='menu-icon tf-icons bx bx-layout'></i>
                        <div> الوظائف المكتملة</div>
                    </a>
                </li>

                    <!-- Misc -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text"> Companies Part</span>
                    <li class="menu-item ">
                        <a href="{{ route('companies') }}" class="menu-link">
                            <i class='menu-icon tf-icons bx bx-layout'></i>
                            <div>ادارة الشركات</div>
                        </a>
                    </li>

                    <li class="menu-item ">
                        <a href="{{ route('companies') }}" class="menu-link">
                            <i class='menu-icon tf-icons bx bx-layout'></i>
                            <div>ادارة شركائنا</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase"><span class="menu-header-text"> Cities Part</span>
                    <li class="menu-item ">
                        <a href="{{ route('cities') }}" class="menu-link">
                            <i class='menu-icon tf-icons bx bx-layout'></i>
                            <div>ادارة المدن</div>
                        </a>
                    </li>
                </ul>



            </aside>
            <!-- / Menu -->



            <!-- Layout container -->
            <div class="layout-page">





                <!-- Navbar -->




                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">

                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>


                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item navbar-search-wrapper mb-0">
                                <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                                    <i class="bx bx-search bx-sm"></i>
                                    <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                                </a>
                            </div>
                        </div>
                        <!-- /Search -->
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ URL::asset('assets/img/avatars/1.png') }}" alt
                                            class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ URL::asset('assets/img/avatars/1.png') }}" alt
                                                            class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">{{Auth::user()->name}}</span>
                                                    <small class="text-muted"></small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('logout')}}" target="_blank">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->


                        </ul>
                    </div>


                    <!-- Search Small Screens -->
                    <div class="navbar-search-wrapper search-input-wrapper  d-none">
                        <input type="text" class="form-control search-input container-xxl border-0"
                            placeholder="Search..." aria-label="Search...">
                        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                    </div>


                </nav>



                <!-- / Navbar -->


                @yield('content')
                @yield('javascript')

                <!-- Core JS -->
                <!-- build:js assets/vendor/js/core.js -->
                <script src="{{ URL::asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
                <script src="{{ URL::asset('assets/vendor/libs/popper/popper.js') }}"></script>
                <script src="{{ URL::asset('assets/vendor/js/bootstrap.js') }}"></script>
                <script src="{{ URL::asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

                <script src="{{ URL::asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
                <script src="{{ URL::asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
                <script src="{{ URL::asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

                <script src="{{ URL::asset('assets/vendor/js/menu.js') }}"></script>
                <!-- endbuild -->

                <!-- Vendors JS -->
                <script src="{{ URL::asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

                <!-- Main JS -->
                <script src="{{ URL::asset('assets/js/main.js') }}"></script>

                <!-- Page JS -->
                <script src="{{ URL::asset('assets/js/dashboards-crm.js') }}"></script>

</body>


<!--  , Sat, 26 Mar 2022 16:46:23 GMT -->

</html>
