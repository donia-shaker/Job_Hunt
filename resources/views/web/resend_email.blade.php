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
    <main>
        <div class="m-auto d-flex justify-content-center" >
            <img src="{{asset('images/resend_email.png')}}" alt="resend_email"  class="m-auto w-50 w-sm-75 " >
        </div>
        <div class="text-center">

            <p class="text-danger">يرجى مراجعة الايميل المستخدم في عملية انشاء حساب لتفعيل حسابك</p>
            <h3 class="text-primary"> هل تريد اعادة ارسال الايميل</h1>
    
    
                <div class="">
                    <form action="{{route('resend_email')}}" method="POST">
                        @csrf
                        <input type="hidden" name="name" value="{{ $email_data['name'] }}">
                        <input type="hidden" name="email" value="{{$email_data['email']}}">
                        <input type="hidden" name="activation_url" value="{{$email_data['activation_url']}}">
                        <button type="submit" class="btn btn-primary mt-4 ">اعادة ارسال الايميل </button>
                    </form>
                </div>
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