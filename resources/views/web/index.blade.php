@extends('web.layout.master')
@section('content')

    <!-- start slider -->
    <main
      id="carouselExampleDark"
      class="carousel carousel-dark slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleDark"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleDark"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleDark"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img
            src="/images/slide-1.jpeg"
            class="d-block w-100"
            alt="..."
          />
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="/images/slide-2.jpeg" class="d-block" />
        </div>
        <div class="carousel-item">
          <img src="/images/slide-3.jpeg" class="d-block" />
        </div>
      </div>
      <div class="overlay"></div>
      <div class="carousel-caption d-none d-md-block">
        <h2>The Easiest Way to Get Your New Job</h2>
        <p>Find Jobs, Employment & Career Opportunities.</p>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleDark"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleDark"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </main>
    <!-- End Slider -->

    <!-- start lastest Job -->
    <div class="jobs bg-light">
      <div class="container my-5 ">
        <h2
          class="my-5 bg-primary p-3 w-25 text-center mx-auto rounded-pill text-white shadow"
        >
          Last Jobs
        </h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-md-5">
          <a href="details">
            <div class="col">
              <div
                class="card h-75 shadow my-3 py-3 d-flex flex-column align-items-center"
              >
                <img
                  src="/images/job-1.jpg"
                  class="card-img-top w-50 py-3"
                  alt="..."
                />
                <div class="card-body text-center">
                  <span class="text-warning mb-2">Freelance</span>
                  <h5 class="card-title">Assistant / Store Keeper</h5>
                  <p class="card-text fw-light">Los Angeles, CA</p>
                </div>
                <div class="card-footer bg-white border-0">
                  <button type="button" class="btn btn-primary">
                    Browse Job
                  </button>
                </div>
              </div>
            </div></a
          >
          <a href="details">
            <div class="col">
              <div
                class="card h-75 shadow my-3 py-3 d-flex flex-column align-items-center"
              >
                <img
                  src="/images/job-2.jpg"
                  class="card-img-top w-50 py-3"
                  alt="..."
                />
                <div class="card-body text-center">
                  <span class="text-warning mb-2">Freelance</span>

                  <h5 class="card-title">Finance Manager & Health</h5>
                  <p class="card-text fw-light">Los Angeles, CA</p>
                </div>
                <div class="card-footer bg-white border-0">
                  <button type="button" class="btn btn-primary">
                    Browse Job
                  </button>
                </div>
              </div>
            </div></a
          >
          <a href="details">
            <div class="col">
              <div
                class="card h-75 shadow my-3 py-3 d-flex flex-column align-items-center"
              >
                <img
                  src="/images/job-3.jpg"
                  class="card-img-top w-50 py-3"
                  alt="..."
                />
                <div class="card-body text-center">
                  <span class="text-warning mb-2">Freelance</span>
                  <h5 class="card-title">General Ledger Accountant</h5>
                  <p class="card-text fw-light">Los Angeles, CA</p>
                </div>
                <div class="card-footer bg-white border-0">
                  <button type="button" class="btn btn-primary">
                    Browse Job
                  </button>
                </div>
              </div>
            </div></a
          >
          <a href="details">
            <div class="col">
              <div
                class="card h-75 shadow my-3 py-3 d-flex flex-column align-items-center"
              >
                <img
                  src="/images/job-1.jpg"
                  class="card-img-top w-50 py-3"
                  alt="..."
                />
                <div class="card-body text-center">
                  <span class="text-warning mb-2">Freelance</span>
                  <h5 class="card-title">Assistant / Store Keeper</h5>
                  <p class="card-text fw-light">Los Angeles, CA</p>
                </div>
                <div class="card-footer bg-white border-0">
                  <button type="button" class="btn btn-primary">
                    Browse Job
                  </button>
                </div>
              </div>
            </div></a
          >
          <a href="details">
            <div class="col">
              <div
                class="card h-75 shadow my-3 py-3 d-flex flex-column align-items-center"
              >
                <img
                  src="/images/job-2.jpg"
                  class="card-img-top w-50 py-3"
                  alt="..."
                />
                <div class="card-body text-center">
                  <span class="text-warning mb-2">Freelance</span>
                  <h5 class="card-title">ACB Product Sales Specialist</h5>
                  <p class="card-text fw-light">Los Angeles, CA</p>
                </div>
                <div class="card-footer bg-white border-0">
                  <button type="button" class="btn btn-primary">
                    Browse Job
                  </button>
                </div>
              </div>
            </div></a
          >
          <a href="details">
            <div class="col">
              <div
                class="card h-75 shadow my-3 py-3 d-flex flex-column align-items-center"
              >
                <img
                  src="/images/job-3.jpg"
                  class="card-img-top w-50 py-3"
                  alt="..."
                />
                <div class="card-body text-center">
                  <span class="text-warning mb-2">Freelance</span>
                  <h5 class="card-title">Senior/ Staff Nurse</h5>
                  <p class="card-text fw-light">Los Angeles, CA</p>
                </div>
                <div class="card-footer bg-white border-0">
                  <button type="button" class="btn btn-primary">
                    Browse Job
                  </button>
                </div>
              </div>
            </div></a
          >
        </div>
        <a href="jobs" class="">
          <button
            class="my-1 bg-primary p-2 w-25 fs-4 rounded-pill text-white shadow border-0 mt-5 position-relative top-50 start-50 translate-middle"
          >
            More
          </button></a
        >
      </div>
    </div>
    <!-- End lastest Job -->
    <div class="container my-5">
      <div
        class="row d-flex justify-content-md-between justify-content-center flex-wrap align-items-center"
      >
        <div class="col">
          <img class="mx-auto" src="/images/job-1.jpg" alt="" />
        </div>
        <div class="col">
          <img src="/images/job-2.jpg" alt="" />
        </div>
        <div class="col">
          <img src="/images/job-3.jpg" alt="" />
        </div>
        <div class="col">
          <img
            src="/images/job-4.png"
            style="width: 150px"
            alt=""
          />
        </div>
        <div class="col">
          <img src="/images/job-3.jpg" alt="" />
        </div>
      </div>
    </div>
    <!-- Start Footer -->
 @endsection