@extends('web.layout.master')
@section('content')
    <!-- Start Details -->
    <div class="container" style="margin-top: 150px">
        <x-messages>
            <x-slot name="type">primary</x-slot>
        </x-messages>
        <div class="row justify-content-around">
            <div class="card mb-5 border-0 d-flex justify-content-around align-items-center" style="max-width: 600px">
                <div class="row g-0">
                    <div class="col-md-4" style="height: 160px">
                        <?php $image = $job->company->image; ?>
                        <img src="{{ asset("images/$image") }}"
                            class="img-fluid rounded-start img-thumbnail shadow p-4 h-100 " alt="company_image" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <span class="text-warning">Part Time</span>
                            <i class="fas fa-star text-warning"></i>
                            <h5 class="card-title">{{ $job->name }}</h5>
                            <p class="card-text">
                                Posted 3 years ago by
                                <span class="text-success">{{ $job->company->name }}</span>
                            </p>
                            <p class="card-text">
                                <small class="text-muted">
                                    <i class="fas fa-map-marker-alt"></i>
                                    {{ $job->city->name }}
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-4 apply fs-5">
                <p class="card-text">
                    Application Ends:
                    <span class="fw-bold text-success">{{ $job->end_date }}</span>
                </p>
                @if (isset(Auth::user()->id))
                    <button class="bg-primary rounded border-0 p-3 w-75 text-white" data-bs-toggle="modal"
                        data-bs-target="#applyJobModal{{ $job->id }}">
                        Apply Now
                    </button>
                @else
                    <button class="bg-primary rounded border-0 p-3 w-75 text-white" data-bs-toggle="modal"
                        data-bs-target="#errorModal{{ $job->id }}">
                        Apply Now
                    </button>
                @endif
            </div>
        </div>
    </div>
    <!-- End Details -->

    {{-- Start Apply Modal --}}
    <x-modal id='applyJobModal{{ $job->id }}'>
        <x-slot name='title'>Apply For Job</x-slot>
        <x-slot name='message'> Are you sure you want to apply for this job?</x-slot>
        <x-slot name='link'>{{ route('apply_job', $job->id) }}</x-slot>
        <x-slot name='action'>
            <button type="button" class="btn btn-primary" 
            style="background-color: rgb(5 44 101) !important;">Yes, Apply</button>
        </x-slot>
    </x-modal>
    {{-- End Apply Modal --}}

    {{-- Start Error Modal --}}
    <x-modal id='errorModal{{ $job->id }}'>
        <x-slot name='title'></x-slot>
        <x-slot name='message'> You Must First Login To Your Account...</x-slot>
        <x-slot name='link'>{{ route('login') }}</x-slot>
        <x-slot name='action'>
            <button type="button" class="btn btn-danger">Go To Login</button>
        </x-slot>
    </x-modal>
    {{-- End Error Modal --}}

    <!-- Start Description -->
    <div class="description my-5 lh-base">
        <div class="container text-start" style="max-width: 800px">
            {!! $job->details !!}
        </div>
    </div>
    <!-- End Description -->
@endsection
