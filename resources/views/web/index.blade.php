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
                <img src="/images/slide-2.jpeg" class="d-block" alt="slider-image"/>
            </div>
            <div class="carousel-item">
                <img src="/images/slide-3.jpeg" class="d-block" alt="slider-image"/>
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
            <h2 class="my-5 bg-primary p-3 w-25 text-center mx-auto text-white shadow" style="border-radius: 40px; min-width:250px">
                Last Jobs
            </h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-md-5">
                @foreach ($jobs as $job)
                    <?php $image = $job->company->image; ?>
                    <a href="{{ route('job_details', $job->id) }}">
                        <div class="col">
                            <div class="card h-75 shadow my-3 py-3 d-flex flex-column align-items-center">
                                <img src="{{ asset("images/$image") }}" class="card-img-top w-50 py-3"
                                    alt="company_image" />
                                <div class="card-body text-center">
                                    <span class="text-warning mb-2">Freelance</span>
                                    <h5 class="card-title">{{ $job->name }}</h5>
                                    <p class="card-text fw-light">{{ $job->city->name }}</p>
                                </div>
                                <div class="card-footer bg-white border-0">
                                    <button type="button" class="btn btn-primary">
                                        Browse Job
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <a href="{{route('all_jobs')}}">
                <button class="my-1 bg-primary p-3 w-25 fs-4 text-white shadow border-0 mt-5 position-relative top-50 start-50 translate-middle" style="border-radius: 40px; min-width:250px">
                    More
                </button>
            </a>
        </div>
    </div>
    <!-- End lastest Job -->
    <div class="bg-light">
    <div class="container py-5">
        <div class="row d-flex justify-content-center m-auto flex-nowrap align-items-center py-5" style="overflow-x: scroll;">
            @foreach ($partiners as $partiner)
            <div class="col text-center">
                <img class="mx-auto" src="{{asset("images/$partiner->image")}}" alt="" style="width:150px"/>
            </div>
            @endforeach
        </div>
    </div>
</div>
    <!-- Start Footer -->
@endsection
