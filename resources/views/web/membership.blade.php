@extends('web.layout.master')
@section('content')

    <!-- start header -->
    <div class="header member">
      <h1 class="my-5 text-center h1">Know More About Our Partiner</h1>
    </div>
    {{-- start Partiners --}}
    <div class="position-relative" style="top: -300px;" >
      <div class="container py-4" style="margin-bottom: -300px;line-height:2">
        <div class="row justify-content-around bg-white shadow">
          @foreach ($partiners as $partiner)
          <div class="  w-100 p-1 p-md-3 p-lg-5 border-bottom" >
            <div class="row g-0 text-center text-md-start ">
              <div class="col-lg-3 px-4" >
                <img
                  src="{{asset("images/$partiner->image")}}"
                  class="img-fluid shadow p-3 my-3 m-md-0" style="border-radius: 40px; max-width:200px;    height: 200px; "
                  alt="partiner_image"
                />
              </div>
              <div class="col-lg-9 ml-2">
                <div class="card-body">
                  <h2 class="card-title ">{{$partiner->name}}</h2>
                  <p class="card-text mt-4 fs-5">{{$partiner->information}}</p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- End Partiners -->

 @endsection