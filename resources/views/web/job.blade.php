@extends('web.layout.master')
@section('content')
    <!-- Start Search Job -->
    <div class=" job-page-content">
        <div class=" container d-flex flex-column mx-auto mb-1 text-center">
            <h2 class="card-title mb-5">Start Search For Your Job</h2>
            <form class="d-flex justify-content-center">
                <input id="search" class="form-control me-2 w-75 py-3" type="search" placeholder="Search"
                    aria-label="Search" />
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
            {{-- <div class=" ">
          <form action="" class="d-flex">
            <div id="cities" class="my-3 col-3 d-flex">
              <h5 class="w-100">City:</h5>
              <select
                id="city"
                class=""
                aria-label="Default select example "
              >
                <option selected>All</option>
                <option value="Sanaa">Sanaa</option>
                <option value="Taiz">Taiz</option>
                <option value="Aden">Aden</option>
              </select>
            </div>
            <div id="companies" class="my-3 col-4 d-flex">
              <h5 class=""> Company:</h5>
              <select
                id="company"
                class=""
                aria-label="Default select example col-6"
              >
                <option selected>All</option>
                <option value="Microsoft">Microsoft</option>
                <option value="NonStop">NonStop</option>
                <option value="Mencap">Mencap</option>
              </select>
            </div>
          </form>
        </div> --}}
        </div>
    </div>

    <!-- End Search Job -->

    <!-- Start Jobs Cards -->
    <div class="container  ">
        <div class=" job-page-content my-5  ">
            <div class="jobs-cards ">
                <!-- start card one -->
                @foreach ($Jobs as $job)
                    <div class="one col-11  mx-auto mb-4">
                        <a href="{{ route('job_details', $job->id) }}" class="text-decoration-none">
                            <div class="card mb-3 shadow ">
                                <div class="row g-0">
                                    <div class="col-md-3">
                                        <?php $image = $job->company->image; ?>
                                        <img src="{{ asset("images/$image") }}" alt="company_image"
                                            class="img-fluid rounded-start img-thumbnail" />
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card-body">
                                            <span class="text-warning">Part Time</span>
                                            <h5 class="card-title">
                                                {{ $job->name }}
                                            </h5>
                                            <p class="card-text">
                                                Posted 3 years ago by
                                                <span class="text-success">{{ $job->company->name }}</span>
                                            </p>
                                            <small class="text-muted"><i class="fas fa-map-marker-alt"></i>
                                                <span class="working-city">{{ $job->city->name }}</span></small>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-4 px-2">
                                        <span class="text-danger fw-bold fs-md-5">Application ends:</span>
                                        <p class="fs-5">{{ $job->end_date }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- End Jobs Cards -->
@endsection
