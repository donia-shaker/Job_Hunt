@extends('client.layout.master')
@section('content')
        <!-- start My Account Section-->
        <div class="conatiner mx-auto account col-10 my-3 form col-md-9">
          <x-messages><x-slot name='type'>primary</x-slot></x-messages>
          <div
            class="d-flex content justify-content-center justify-content-lg-start flex-column align-items-center flex-wrap flex-lg-row"
          >
            <div class="col-5 col-lg-3 my-5 h-50 profile">
              @if (isset($personalInfo))
              <img
              src='{{asset("images/$personalInfo->avatar")}}'
              class="rounded-circle w-100 my-5"
              alt=""
            />
            <a href=""><button class="btn  text-white w-100  main-color"> <i class="far fa-edit  "></i> Edit Profile Information</button></a>
          
              @else
              <img
              src="{{asset('images/default_image.png')}}"
              class="rounded-circle w-100 my-5"
              style="width: 500px;height:300px"
              alt=""
            />
            <a href=""><button class="btn  text-white w-100  main-color"> Add Profile Information</button></a>
              @endif
              </div>
            <div class='personal-info col-10 col-lg-7 mx-5 my-2  px-lg-5'>
              <div class="content w-100">
              <h2 class="fs-1 my-5 color fw-bold">Personal Information</h2>
              <p class="border-bottom w-75 p-3"><span>Name:</span> <span class="color px-4">{{$userInfo->name}}</span></p>
              <p class="border-bottom w-75 p-3"><span>Email:</span> <span class="color px-4">{{$userInfo->email}}</span></p>
              @if (isset($personalLnfo))
              <p class="border-bottom w-75 p-3"><span>Phone:</span> <span class="color px-4">{{$personalLnfo->phone}}</span></p>
              <p class="border-bottom w-75 p-3"><span>Address:</span> <span class="px-4">{{$personalLnfo->address}}</span></p>
              @else
              <p class="border-bottom w-75 p-3"><span>Phone:</span> </p>
              <p class="border-bottom w-75 p-3"><span>Address:</span> </p>
              @endif
              </div>
            </div>
            {{-- <form class=" col-10 col-lg-7 mx-5 px-lg-5  ">
              <div class="mb-3">
                <div class="row my-2">
                  <div class="col">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="First name"
                      aria-label="First name"
                    />
                  </div>
                  <div class="col">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Last name"
                      aria-label="Last name"
                    />
                  </div>
                </div>
                <label for="inputAddress" class="form-label my-2"
                  >Address</label
                >
                <input
                  type="text"
                  class="form-control my-2"
                  id="inputAddress"
                  placeholder="1234 Main St"
                />
                <label for="exampleInputEmail1" class="form-label"
                  >Email address</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                />
                <div id="emailHelp" class="form-text">
                  We'll never share your email with anyone else.
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="exampleInputPassword1"
                />
              </div>
              <div class="mb-3 form-check">
                <input
                  type="checkbox"
                  class="form-check-input"
                  id="exampleCheck1"
                />
                <label class="form-check-label" for="exampleCheck1"
                  >Check me out</label
                >
              </div>
              <button type="submit" class="btn btn-primary w-100">
                Submit
              </button>
            </form> --}}
          </div>
        </div>

        <!-- End Personal Section -->
      </div>
    </div>
@endsection
