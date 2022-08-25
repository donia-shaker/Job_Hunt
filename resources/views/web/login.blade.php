@extends('web.layout.master')
@section('content')

    <!-- start Form -->
    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
          <div class="d-none d-lg-block col-lg-7 col-xl-6">
            <img
              src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
              class="img-fluid"
              alt="Phone image"
            />
          </div>
          <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <form action="{{route('login_info')}}" method="POST">
              @csrf
              <!-- Email input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form1Example13"
                  >Email address</label
                >
                <input
                  type="text"
                  name="email"
                  id="form1Example3"
                  class="form-control form-control-lg"
                />
                @error('email')
              <span class="alert alert-danger">{{ $message }}</span>
              @enderror
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form1Example23">Password</label>
                <input
                  type="text"
                  id="form1Example23"
                  name="password"
                  class="form-control form-control-lg"
                />
              </div>

              <div
                class="d-flex justify-content-around align-items-center mb-4"
              >
                <a href="#!">Forgot password?</a>
              </div>

              <!-- Submit button -->
              <button
                type="submit"
                class="btn btn-primary btn-lg w-100 btn-block"
              >
                Sign in
              </button>

              <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
              </div>

              <a
                class="btn btn-primary btn-lg my-2 btn-block"
                style="background-color: #3b5998"
                href="#!"
                role="button"
              >
                <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
              </a>
              <a
                class="btn btn-primary btn-lg btn-block"
                style="background-color: #55acee"
                href="#!"
                role="button"
              >
                <i class="fab fa-twitter me-2"></i>Continue with Twitter</a
              >
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Form -->

 @endsection