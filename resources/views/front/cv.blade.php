@extends('front.layout.master')
@section('content')
    <!-- Start Cv -->
    <div class="conatiner cv p-lg-5 my-5 position-relative">
      <div class="content w-sm-100 border-5 shadow p-3 mx-auto">
        <div
          class="d-md-flex justify-content-start mx-auto g-sm-2 row align-items-center my-5"
        >
          <div class="col-md-3 h-150 mx-lg-4">
            <img
              src="/images/personal.png"
              class="rounded-circle"
              alt=""
            />
          </div>
          <div class="name text-black col-md-6 my-2">
            <h3>Donia Shaker Mohammed Zaid</h3>
            <p>FullStake Web Developer</p>
          </div>
        </div>
        <div class="row left mx-lg-5">
          <div class="info py-md-4">
            <h3>Personal Information:</h3>
            <ul>
              <li>Name: <span>Donia Shaker Mohamed</span></li>
              <li>Date of Birth: <span>June 14, 1997</span></li>
              <li>
                Current Address:
                <span>
                  Cairo St(East of Sana’a University), Sana’a, Yemen.
                </span>
              </li>
              <li>Email: <span>donia.shaker11@gmail.com </span></li>
            </ul>
          </div>
          <div class="education py-4">
            <h3>Education:</h3>
            <ul>
              <li>
                Bachelor Degree in Communication and Electronic, Sana’a
                University, Faculty of Engineering, 2015 - 2020.
              </li>
            </ul>
          </div>
          <div class="skills py-4">
            <h3>Skills:</h3>
            <ul>
              <li>FrontEnd Developer</li>
              <li>BacktEnd Developer</li>
              <li>Ux/Ui Designer</li>
              <li>Have Many Porogram Languages (php - python - js - c++)</li>
            </ul>
          </div>
          <div class="exp py-4">
            <h3>Experiance:</h3>
            <ul>
              <li>Working as a Freelancer</li>
              <li>Have an Experiance in Microsoft Company</li>
              <li>Have an Experiance in Google Company</li>
              <li>Have Many Porogram Languages (php - python - js - c++)</li>
            </ul>
          </div>
        </div>
      </div>
      <a href=""
        ><button
          class="btn btn-primary main-color position-absolute bottom-0 start-50 translate-middle-x p-3 w-25"
        >
          Download
        </button></a
      >
    </div>

    <!-- End Cv -->
    <!-- Start Footer -->
 @endsection
