@extends('customer.layout.master')
@section('content')
        <!-- start My Account Section-->
        <div class="conatiner account form col-md-10">
          <div
            class="d-md-flex content justify-content-lg-around align-items-center mx-auto flex-wrap row"
          >
            <div class="col-md-3 shadow h-50 profile">
              <img
                src="/images/personal.png"
                class="rounded-circle w-100"
                alt=""
              />
              <i class="far fa-edit fs-3 text-primary position-relative"></i>
            </div>
            <form class="col-md-5">
              <div class="mb-3">
                <div class="row my-2">
                  <div class="col">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="First name"
                      aria-label="First name"
                    />
                  </div>
                  <div class="col">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Last name"
                      aria-label="Last name"
                    />
                  </div>
                </div>
                <label for="inputAddress" class="form-label my-2"
                  >Address</label
                >
                <input
                  type="text"
                  class="form-control my-2"
                  id="inputAddress"
                  placeholder="1234 Main St"
                />
                <label for="exampleInputEmail1" class="form-label"
                  >Email address</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                />
                <div id="emailHelp" class="form-text">
                  We'll never share your email with anyone else.
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="exampleInputPassword1"
                />
              </div>
              <div class="mb-3 form-check">
                <input
                  type="checkbox"
                  class="form-check-input"
                  id="exampleCheck1"
                />
                <label class="form-check-label" for="exampleCheck1"
                  >Check me out</label
                >
              </div>
              <button type="submit" class="btn btn-primary w-100">
                Submit
              </button>
            </form>
          </div>
        </div>

        <!-- End Personal Section -->
      </div>
    </div>

    <!-- start navbar -->
    <!-- <nav
      class="navbar navbar-expand-lg navbar-light bd-blue-800 fixed-top shadow"
    >
      <div class="container">
        <a class="navbar-brand logo" href="#">Jobhunt</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 mt-2">
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="index"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
        </div>
        <div class="acount text-end">
          <a href="#" class="me-2"
            ><i class="fas fa-sign-in-alt me-2"></i>Login</a
          >
          <a href="#"><i class="fas fa-user"></i> Signout</a>
        </div>
      </div>
    </nav> -->
    <!-- End  Navbar-->

    <!-- start sidebar -->
    <!-- <div class="container-fluid">
      <div class="row">
        <div class="col-md-2 bg-light d-none d-md-block sidebar">
          <div class="sidebar-left">
            <ul class="nav flex-column">
              <div class="nav-item h-50 profile">
                <img
                  src="/images/personal.png"
                  class="rounded-circle w-25 d-inline"
                  alt=""
                />
                <p class="d-inline">Donia Shaker</p>
              </div>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >My Account</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Education</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Skills</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Experience</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Courses</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div> -->
    <!-- End sidebar -->

    <!-- start My Account Section-->
    <!-- <div class="conatiner account">
      <div class="d-md-flex justify-content-evenly mx-auto flex-wrap row">
        <div class="col-3 shadow h-50 profile">
          <img
            src="/images/personal.png"
            class="rounded-circle w-100"
            alt=""
          />
          <i class="far fa-edit fs-3 text-primary position-relative"></i>
        </div>
        <form class="col-6">
          <div class="mb-3">
            <div class="row my-2">
              <div class="col">
                <input
                  type="text"
                  class="form-control"
                  placeholder="First name"
                  aria-label="First name"
                />
              </div>
              <div class="col">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Last name"
                  aria-label="Last name"
                />
              </div>
            </div>
            <label for="inputAddress" class="form-label my-2">Address</label>
            <input
              type="text"
              class="form-control my-2"
              id="inputAddress"
              placeholder="1234 Main St"
            />
            <label for="exampleInputEmail1" class="form-label"
              >Email address</label
            >
            <input
              type="email"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
            />
            <div id="emailHelp" class="form-text">
              We'll never share your email with anyone else.
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"
              >Password</label
            >
            <input
              type="password"
              class="form-control"
              id="exampleInputPassword1"
            />
          </div>
          <div class="mb-3 form-check">
            <input
              type="checkbox"
              class="form-check-input"
              id="exampleCheck1"
            />
            <label class="form-check-label" for="exampleCheck1"
              >Check me out</label
            >
          </div>
          <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
      </div>
    </div> -->

    <!-- End Personal Section -->
   @endsection
