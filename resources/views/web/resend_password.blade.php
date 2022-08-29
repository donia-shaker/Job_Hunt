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
    <x-messages><x-slot name="type">primary</x-slot></x-messages>
    <main class="d-flex align-items-center flex-column flex-md-row justify-content-evenly">
        <div class="text-center mx-5">

            <h3 class="text-center h2 fw-bold my-4 mb-5 pb-5">Reset Your Password</h1>


                <div class="mt-5">
                    <form action="{{route('send_email')}}" method="POST" class="mt-5">
                        @csrf
                        <div class="d-flex flex-row align-items-center mt-5">
                            <i class="fas fa-envelope fa-lg me-2 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input type="text" name="email" value="{{ old('email') }}"
                                    placeholder="email@gmail.com" id="form3Example3c" class="form-control" />
                            </div>
                            @error('email')
                                <p class="alert alert-danger"> * {{ $message }}</p>
                            @enderror
                        </div>
                        <p class="text-muted mt-4">*We Will Send The Link to Reset Your Password To This Email</p>
                        <button type="submit" class="btn btn-primary mt-4 w-100 "> ارسال الايميل </button>
                    </form>
                </div>
        </div>

        <div class=" mb-5 d-none d-md-flex">
            <img src="{{ asset('images/reset_password.png') }}" alt="resend_email" class="w-75 ">
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
