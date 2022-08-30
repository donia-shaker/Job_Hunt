<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
    <title>Resend Email</title>
</head>

<body>
    <main class="d-flex align-items-center flex-column flex-md-row justify-content-evenly">
        <div class="text-center mx-2 ">

            <h3 class="text-center h2 fw-bold my-4 mb-5 pb-3"> Your New Password</h1>


                <div class="mt-3">
                    <form action="{{route('new_password')}}" method="POST" class="mt-5 " style="width: 350px;
                    text-align: start;">
                        @csrf
                        <input type="hidden" name="id" value="{{$userInfo->id}}">
                        <div class="d-flex flex-row align-items-center mt-3 mb-3">
                            <i class="fas fa-envelope fa-lg me-2 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <label class="form-label" for="form3Example4c">Email</label>
                                <input type="text" name="email" value="{{$userInfo->email}}"
                                    placeholder="email@gmail.com" id="form3Example3c" class="form-control" />
                            </div>
                            @error('email')
                                <p class="alert alert-danger"> * {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="d-flex flex-row align-items-center mb-3">
                            <i class="fas fa-lock fa-lg me-2 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <label class="form-label" for="form3Example4c">Password</label>
                                <input type="text" name="password" id="form3Example4c"
                                    class="form-control" />
                            </div>
                            @error('password')
                                <p class="alert alert-danger"> * {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="d-flex flex-row align-items-center mb-3">
                            <i class="fas fa-key fa-lg me-2 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <label class="form-label" for="form3Example4cd">Repeat your password</label>
                                <input name="confirm_pass" type="text" id="form3Example4cd"
                                    class="form-control" />
                            </div>
                            @error('confirm_pass')
                                <p class="alert alert-danger"> * {{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mt-4 w-100 "> ارسال الايميل </button>
                    </form>
                </div>
        </div>

        <div class=" mb-5 d-none d-md-block " style="width: 40%">
            <img src="{{ asset('images/reset_password.png') }}" alt="resend_email" class="w-100 ">
        </div>
    </main>
    <!-- End Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/jquery-main.js') }}"></script>
    <script src="{{ asset('js/filter.js') }}"></script>
</body>

</html>
