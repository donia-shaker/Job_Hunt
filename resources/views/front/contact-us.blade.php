@extends('front.layout.master')
@section('content')

    <!-- start contact us -->
    <div class="contact-us">
      <div class="container">
        <!-- strat top part -->
        <div class="top-part">
          <div class="text text-center mb-5">
            <h1 class="mb-2">We'd love to hear from you</h1>
            <p class="fs-5">Get in touch with us</p>
          </div>
          <div class="cards mx-auto w-md-75 p-1">
            <div class="d-flex justify-content-evenly flex-wrap mx-lg-5">
              <div class="box main-color mx-3 p-5 my-5 text-center img-rounded">
                <a href="">
                  <i class="fas fa-globe-americas p-4 bg-white fs-1"></i>
                  <p class="fw-bold mt-3 fs-5">San Francisco, CA</p>
                </a>
              </div>
              <div class="box main-color p-5 my-5 text-center img-rounded">
                <a href="">
                  <i class="fas fa-phone p-4 bg-white fs-1"></i>
                  <p class="fw-bold mt-3 fs-5">(0124) - 456 - 789</p>
                </a>
              </div>
              <div class="box main-color p-5 my-5 text-center img-rounded">
                <a href="">
                  <i class="far fa-envelope p-4 bg-white fs-1"></i>
                  <p class="fw-bold mt-3 fs-5">office@jobhunt.com</p>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- end top part -->

        <!-- start form part -->
        <div class="form-part mx-auto">
          <h1 class="text-center">Contact Us</h1>
          <form action="" class="row d-flex flex-column align-items-center">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Name</label
              >
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="your name"
              />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Email
              </label>
              <input
                type="email"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="name@example.com"
              />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">
                textarea</label
              >
              <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                rows="3"
              ></textarea>
            </div>
            <button
              type="submit"
              class="btn rounded-3 w-50 mb-5 fs-5 p-2 main-color text-white"
            >
              Send Message
            </button>
          </form>
        </div>
      </div>

      <!-- end top part -->
    </div>
    <!-- End contact us -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
   @endsection


