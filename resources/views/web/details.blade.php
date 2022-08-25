@extends('web.layout.master')
@section('content')
    <!-- Start Details -->
    <div class="container" style="margin-top: 100px">
      <div class="row justify-content-around">
        <div
          class="card mb-5 border-0 d-flex justify-content-around align-items-center"
          style="max-width: 600px"
        >
          <div class="row g-0">
            <div class="col-md-4" style="height: 160px">
              <img
                src="/images/job-2.jpg"
                class="img-fluid rounded-start img-thumbnail shadow p-4 h-100 w-100"
                alt="..."
              />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <span class="text-warning">Part Time</span>
                <i class="fas fa-star text-warning"></i>

                <h5 class="card-title">Junior Digital Graphic Designer</h5>
                <p class="card-text">
                  Posted 3 years ago by Mencap Co
                  <span class="text-success">Mencap Co</span>
                </p>
                <p class="card-text">
                  <small class="text-muted"
                    ><i class="fas fa-map-marker-alt"></i> Brooklyn , NY
                    USA</small
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-4 apply fs-5">
          <p>
            Application ends:
            <span class="fw-bold text-success">December 15, 2022</span>
          </p>
          <button class="bg-primary rounded border-0 p-3 w-75 text-white">
            Apply Now
          </button>
        </div>
      </div>
    </div>
    <!-- End Details -->

    <!-- Start Description -->
    <div class="description my-5 lh-base">
      <div class="container text-start" style="max-width: 800px">
        <h2>Job Description</h2>
        <p>
          Due to ongoing growth, this fun & energetic International corporate
          based on the outskirts of Oxford, is seeking a UX/UI Designer to join
          an innovative team, focused on delivering exciting User Experiences
          and great functionality, across both Web & Mobile platforms.
        </p>
        <p>
          The UX/UI Designer will be working with a world-class team of
          designers, engineers, and product managers to develop innovative user
          experiences that will shape the industry’s pioneering products.
        </p>
        <div class="part-two">
          <h3>Responsibilities Include:</h3>
          <ul>
            <li>
              Partnering with product and engineering to translate business and
              user goals into elegant and practical designs that can deliver on
              key business and user metrics
            </li>

            <li>
              Collaborating with internal stakeholders and team members to
              brainstorm new products, features and functionalities that enhance
              the mobile and web experiences
            </li>
            <li>Giving and soliciting feedback with designers</li>
          </ul>
        </div>
        <!-- start part Three -->
        <div class="part-three">
          <h3>Background, Skills & Experience</h3>
          <ul>
            <li>
              Circa 3+ years experience designing for web and mobile platforms
            </li>
            <li>
              Through your online portfolio, you are able to share your UX/UI
              design capabilities by showcasing your design chops and
              demonstrates originality, innovation and strong problem solving
              skills
            </li>
            <li>
              Prototyping skills – experience with Axure or similar is useful
            </li>
            <li>
              Demonstrable experience with end-to-end product design, including
              consumer product/s
            </li>
            <li>
              Talent for managing multiple projects simultaneously, from concept
              through to completion
            </li>
            <li>
              You are comfortable designing within iOS and Android native
              guideles, and have portfolio examples to show it
            </li>
            <li>
              Excellent communicator who has conviction to champion of view, but
              can also successfully collaborate with others
            </li>
            <li>A Degree in Design or related field is preferred</li>
            <li>You enjoy a fast paced and dynamic working environment</li>
          </ul>
        </div>
        <!-- End Part Three -->
      </div>
    </div>
    <!-- End Description -->
 @endsection