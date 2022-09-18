@extends('web.layout.master')
@section('content')
    <!-- start slider -->
    <main id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="/images/slide-1.jpeg" class="d-block w-100" alt="slider-image" />
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="/images/slide-2.jpeg" class="d-block" alt="slider-image" />
            </div>
            <div class="carousel-item">
                <img src="/images/slide-3.jpeg" class="d-block" alt="slider-image" />
            </div>
        </div>
        <div class="overlay"></div>
        <div class="carousel-caption position-absolute w-100" style="left: 0px">
            <h2>The Easiest Way to Get Your New Job</h2>
            <p>Find Jobs, Employment & Career Opportunities.</p>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </main>
    <!-- End Slider -->

    <!-- start lastest Job -->
    <div class="jobs bg-light">
        <div class="container py-5 ">
            <h2 class="my-5 pb-0 text-center mx-auto " style="font-size: 44px;
            font-weight: 500;
            text-shadow: 3px 0px 2px #3f69a8;color:#3f69a8">
                Features Jobs
            </h2>
            <div class="row row-cols-1 row-cols-md-2 my-5 containers row-cols-lg-3 g-md-5">
                @foreach ($jobs as $job)
                    <?php $image = $job->company->image; ?>
                    <a href="{{ route('job_details', $job->id) }}" class="col mb-3">
                        <div class="card shadow py-3 h-100 d-flex flex-column align-items-center">
                            <img src="{{ asset("images/$image") }}" class="card-img-top w-50 py-1" alt="company_image" />
                            <div class="card-body text-center">
                                <div class="row card-body " style="min-height: 115px">
                                    <span class="text-warning ">Part Time</span>
                                    <h5 class="card-title hover">
                                        {{ $job->name }}
                                    </h5>
                                    <p class="card-text ">
                                        Posted 3 years ago by
                                        <span class="text-success comp">{{ $job->company->name }}</span>
                                    </p>

                                </div>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <button type="button" class="btn btn-primary">
                                    Browse Job
                                </button>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <a href="{{ route('all_jobs') }}" class="position-relative" style="left: 45%">
                <span class="my-1  position-relative  " style="font-size: 36px;
                font-weight: 500;
                text-shadow: 3px 0px 2px #3f69a8; color:#3f69a8">
                    More <svg xmlns="http://www.w3.org/2000/svg" width="38" height="28" fill="currentColor"
                        class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                </span>
            </a>
        </div>
    </div>
    <!-- End lastest Job -->
@endsection
