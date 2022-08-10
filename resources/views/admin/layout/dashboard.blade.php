<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/all.min.css" />
    <!-- CSS Normalized -->
    <link rel="stylesheet" href="/css/normalized.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/dashboard.css" />

    <title>Job Finder</title>
  </head>
  <body>
    <!-- start sidebar -->
    <div class="container-fluid">
      <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 main-color">
          <div
            class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100"
          >
            <a
              href="/"
              class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none"
            >
              <!-- <span class="fs-5 d-none d-sm-inline">Menu</span> -->
            </a>
            <div class="dropdown pb-4">
              <a
                href="#"
                class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                id="dropdownUser1"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <img
                  src="/images/personal.png"
                  alt="hugenerd"
                  width="30"
                  height="30"
                  class="rounded-circle"
                />
                <span class="d-none d-sm-inline mx-1">Donia Shaker</span>
              </a>
            </div>
            <ul
              class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
              id="menu"
            >
              <li class="nav-item">
                <a
                  href="index"
                  class="nav-link align-middle text-white px-0"
                >
                  <i class="fas fa-home"></i>
                  <span class="ms-1 d-none d-sm-inline">Home</span>
                </a>
              </li>
              <li>
                <ul
                  class="collapse show nav flex-column ms-1"
                  id="submenu1"
                  data-bs-parent="#menu"
                >
                  <li class="w-100">
                    <a href="dashboard" class="nav-link text-white px-0">
                      <i class="fas fa-user-alt"></i>
                      <span class="ms-1 d-none d-sm-inline">Account</span>
                    </a>
                  </li>
                  <li class="w-100">
                    <a href="#" class="nav-link second-color px-0">
                      <i class="fas fa-user-graduate"></i>
                      <span class="d-none d-sm-inline">Education</span>
                    </a>
                  </li>
                  <li>
                    <a href="courses" class="nav-link text-white px-0">
                      <i class="fas fa-graduation-cap"></i>
                      <span class="d-none d-sm-inline">Courses</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a
                  href="skills"
                  class="nav-link px-0 text-white align-middle"
                >
                  <i class="fas fa-puzzle-piece"></i>
                  <span class="ms-1 d-none d-sm-inline">Skills</span></a
                >
              </li>
              <li>
                <a
                  href="index"
                  data-bs-toggle="collapse"
                  class="nav-link px-0 text-white align-middle"
                >
                  <i class="fas fa-sign-out-alt"></i>
                  <span class="ms-1 d-none d-sm-inline">Logout</span></a
                >
              </li>
            </ul>
            <hr />
          </div>
        </div>
      <!-- end aside -->

       @yield('content')     

      <!-- footer -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>