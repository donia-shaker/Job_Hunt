@extends('client.layout.master')
@section('content')
    @if ($do == 'Manage')
        <!-- start My Account Section-->
        <div class="conatiner mx-auto account col-10 my-3 form col-md-9">
            <x-messages>
                <x-slot name='type'>primary</x-slot>
            </x-messages>
            <div
                class="d-flex content justify-content-center justify-content-lg-start flex-column align-items-center flex-wrap flex-lg-row">
                <div class="col-5 col-lg-3 my-5 h-50 profile">
                    @if (isset($personalInfo))
                        <img src='{{ asset('images/' . $personalInfo->avatar) }}' class="rounded-circle w-100 my-5"
                            alt="" />
                        <a href="dashboard?do=Edit"><button class="btn  text-white w-100  main-color"> <i
                                    class="far fa-edit  "></i>
                                Edit Profile Information</button>
                        </a>
                    @else
                        <img src="{{ asset('images/default_image.png') }}" class="rounded-circle w-100 my-5"
                            style="width: 500px;height:300px" alt="" />
                        <a href="dashboard?do=Add"><button class="btn  text-white w-100  main-color"> Add
                                Profile Information</button></a>
                    @endif
                </div>
                <div class='personal-info col-10 col-lg-7 mx-5 my-2  px-lg-5'>
                    <div class="content w-100">
                        <h2 class="fs-1 my-5 color fw-bold">Personal Information</h2>
                        <p class="border-bottom w-75 p-3"><span>Name:</span> <span
                                class="color px-4">{{ $userInfo->name }}</span></p>
                        <p class="border-bottom w-75 p-3"><span>Email:</span> <span
                                class="color px-4">{{ $userInfo->email }}</span></p>
                        @if (isset($personalInfo))
                            <p class="border-bottom w-75 p-3"><span>Job:</span> <span
                                    class="color px-4">{{ $personalInfo->job }}</span></p>
                            <p class="border-bottom w-75 p-3"><span>Phone:</span> <span
                                    class="color px-4">{{ $personalInfo->phone }}</span></p>
                            <p class="border-bottom w-75 p-3"><span>Address:</span> <span
                                    class="px-4">{{ $personalInfo->address }}</span></p>
                        @else
                            <p class="border-bottom w-75 p-3"><span>Job:</span> </p>
                            <p class="border-bottom w-75 p-3"><span>Phone:</span> </p>
                            <p class="border-bottom w-75 p-3"><span>Address:</span> </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- End Personal Section -->
    @elseif ($do == 'Add')
        <x-personal_information action="{{ route('add_info') }}">
            <x-slot name="title">Add Your Profile Information</x-slot>
            <x-slot name="val1">{{ old('name') }}</x-slot>
            <x-slot name="val2">{{ old('address') }}</x-slot>
            <x-slot name="val3">{{ old('job') }}</x-slot>
            <x-slot name="val4">{{ old('phone') }}</x-slot>
            <x-slot name="imageName">addPreviewImage</x-slot>
            <x-slot name="imageId">addPreviewImage</x-slot>
        </x-personal_information>
    @elseif ($do == 'Edit')
        <x-personal_information action="{{ route('update_info') }}">
            <x-slot name="title">Edit Your Profile Information</x-slot>
            <x-slot name="val1">{{ Auth::user()->name }}</x-slot>
            <x-slot name="val2">{{ $personalInfo->address }}</x-slot>
            <x-slot name="val3">{{ $personalInfo->job }}</x-slot>
            <x-slot name="val4">{{ $personalInfo->phone }}</x-slot>
            <x-slot name="imageName">previewImage</x-slot>
            <x-slot name="imageId">previewImage</x-slot>
        </x-personal_information>
    @endif
@endsection
