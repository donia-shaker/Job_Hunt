@extends('web.layout.master')
@section('content')
    <!-- start sign up -->
    <x-messages>
        <x-slot name='type'>primary</x-slot>
    </x-messages>
    <section class="mb-5 border-0" style="margin-top: 100px">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class=" text-black" style="border-radius: 25px">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <p class="text-center h1 fw-bold mb-3 mx-1 mx-md-4 my-2 mt-2">
                                        Register
                                    </p>

                                    <form class="mx-1 mx-md-1" action="{{ route('save_user') }}" method="POST">
                                        @csrf

                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="fas fa-user fa-lg me-2 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example1c">Your Name</label>
                                                <input type="text" id="form3Example1c" name="name"
                                                    class="form-control" value="{{ old('name') }}" />
                                                @error('name')
                                                    <p class="text-danger"> * {{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="fas fa-envelope fa-lg me-2 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example3c">Your Email</label>
                                                <input type="text" name="email" value="{{ old('email') }}"
                                                    id="form3Example3c" class="form-control" />
                                                @error('email')
                                                    <p class="text-danger"> * {{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="fas fa-lock fa-lg me-2 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example4c">Password</label>
                                                <input type="password" name="password" id="form3Example4c"
                                                    class="form-control" />
                                                @error('password')
                                                    <p class="text-danger"> * {{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="fas fa-key fa-lg me-2 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example4cd">Repeat your password</label>
                                                <input name="confirm_pass" type="password" id="form3Example4cd"
                                                    class="form-control" />
                                                @error('confirm_pass')
                                                    <p class="text-danger"> * {{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div>
                                            <div class="form-check d-flex justify-content-center mb-2">
                                                <input class="form-check-input me-2" type="checkbox" name="privacyPolicy"
                                                    id="form2Example3" />
                                                <label class="form-check-label" for="form2Example3">
                                                    I agree all statements in
                                                    <a href="#!" class="text-primary ">Terms of service</a>
                                                </label>
                                            </div>
                                            @error('privacyPolicy')
                                                <p class="text-danger"> * {{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="d-flex justify-content-center mx-2 mb-1 mb-lg-4">
                                            <button type="submit" class="btn btn-primary w-100 my-3 btn-lg">
                                                Register
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div
                                    class="col-md-10 col-lg-6 col-xl-7 d-flex justify-content-center align-items-center order-1 order-lg-2">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                                        class="img-fluid w-75" alt="Sample image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end sign up -->
@endsection
