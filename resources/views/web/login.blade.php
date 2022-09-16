@extends('web.layout.master')
@section('content')
    <!-- start Form -->
    <section style="margin: 100px 0">
        <div class="container mt-0 mt-xl-5 vh-80">
            <div class="alert  alert-primary position-absolute alert-dismissible" id="alert" role="alert">
                admin: super_admin@gmail.com / password:123456789 <br>
                client: client_two@gmail.com / password:123456789
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
            <x-messages>
                <x-slot name='type'>primary</x-slot>
            </x-messages>
            <div class="row  justify-content-center align-items-center ">
                <div class="col-md-10 col-lg-6 col-xl-6 mt-3 mt-xl-5  mb-3 d-flex justify-content-center justify-content-xl-start  align-items-center order-lg-2 ">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                        class="img-fluid w-75 " alt="Phone image" />
                </div>
                <div class="col-md-10 col-lg-6 col-xl-5 pt-md-5 order-2 mt-0 mt-xl-5 mb-5">
                    <p class="text-center h1 fw-bold pt-5 mb-3 mx-1 mx-md-4 my-2 ">
                        Login
                    </p>
                    <form action="{{ route('login_info') }}" method="POST">
                        @csrf
                        <!-- Email input -->
                        <div class="d-flex flex-row align-items-center mb-2">
                            <i class="fas fa-envelope fa-lg me-2 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <label class="form-label" for="form3Example3c">Your Email</label>
                                <input type="text" name="email" value="{{ old('email') }}"
                                    id="form3Example3c" class="form-control" />
                            </div>
                            @error('email')
                                <p class="text-danger"> * {{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="d-flex flex-row align-items-center mb-2">
                            <i class="fas fa-lock fa-lg me-2 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <label class="form-label" for="form3Example4c">Password</label>
                                <input type="password" name="password" id="form3Example4c"
                                    class="form-control" />
                            </div>
                            @error('password')
                                <p class="text-danger"> * {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <a href="{{ route('reset_password') }}">Forgot password?</a>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg w-100 btn-block">
                            Sign in
                        </button>

                        {{-- <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                        </div> --}}

                        {{-- <a class="btn btn-primary btn-lg my-2 btn-block" style="background-color: #3b5998" href="#!"
                            role="button">
                            <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                        </a>
                        <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"
                            role="button">
                            <i class="fab fa-twitter me-2"></i>Continue with Twitter</a> --}}
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Form -->
@endsection
