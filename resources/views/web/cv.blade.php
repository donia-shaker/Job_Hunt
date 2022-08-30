@extends('web.layout.master')
@section('content')
    <!-- Start Cv -->
    <div class="conatiner cv p-lg-5 mb-5 position-relative" style="margin-top: 80px">
      <a href=""><button
        class="btn btn-primary main-color position-absolute bottom-0 start-50 translate-middle-x p-3 w-25">
        Download
    </button></a>
        <div class="content w-sm-100 border-5 shadow p-3 mx-auto" download>
            <div class="d-md-flex justify-content-start mx-auto g-sm-2 row align-items-center my-5">
                <div class="col-md-3 h-150 mx-lg-4">
                    <img src="{{ asset("images/$userProfile->avatar") }}" class="rounded-circle" alt="user_profile" />
                </div>
                <div class="name text-black col-md-6 my-2">
                    <h3>{{ $userProfile->user->name }}</h3>
                    <p>{{ $userProfile->job }}</p>
                </div>
            </div>
            <div class="row left mx-lg-5">
                <div class="info py-md-4">
                    <h3>Personal Information:</h3>
                    <ul>
                        <li>Date of Birth: <span>June 14, 1997</span></li>
                        <li>
                            Current Address:
                            <span>
                                {{ $userProfile->address }}
                            </span>
                        </li>
                        <li>Email: <span>{{ $userProfile->user->email }}</span></li>
                    </ul>
                </div>
                <div class="education py-4">
                    <h3>Education:</h3>
                    <ul>
                        @foreach ($Educations as $education)
                            <li>{{ $education->name }} <br>{{ $education->place }}
                                from ({{ $education->start }}) to ({{ $education->end }})</li>
                        @endforeach
                    </ul>
                </div>
                <div class="skills py-4">
                    <h3>Skills:</h3>
                    <ul>
                        @foreach ($Skills as $skill)
                            <li>{{ $skill->name }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="exp py-4">
                    <h3>Cources:</h3>
                    <ul>
                        @foreach ($Courses as $course)
                            <li>{{ $course->name }} <br>{{ $course->place }}
                                from ({{ $course->start }}) to ({{ $course->end }})</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- End Cv -->
    <!-- Start Footer -->
@endsection
