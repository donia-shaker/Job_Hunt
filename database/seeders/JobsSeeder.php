<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Jobs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jobs::create([
            'name' => [
                'ar' => 'مصمم جرافكس',
                'en' => 'Junior Digital Graphic Designer'
            ],
            'detailes' => [
                'ar' => '<div class="description my-5 lh-base">
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
              </div>',
                'en' => '
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
                '
            ],
            'start_date' =>  Carbon::create('2022', '06', '11'),
            'end_date' =>  Carbon::create('2023', '06', '18'),
            'city' => 'Aden',
            'company_id' => 1
        ]);

        Jobs::create([
            'name' => [
                'ar' => 'Finance Manager & Health',
                'en' => 'Finance Manager & Health'
            ],
            'city' => 'Taiz',
            'detailes' => [
                'ar' => '<div class="description my-5 lh-base">
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
              </div>',
                'en' => '
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
                '
            ],
            'start_date' =>  Carbon::create('2022', '06', '11'),
            'end_date' =>  Carbon::create('2023', '06', '18'),
            'company_id' => 2
        ]);

        Jobs::create([
            'name' => [
                'ar' => 'General Ledger Accountant',
                'en' => 'General Ledger Accountant'
            ],
            'city' => 'Taiz',
            'detailes' => [
                'ar' => '<div class="description my-5 lh-base">
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
              </div>',
                'en' => '
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
                '
            ],
            'start_date' =>  Carbon::create('2022', '06', '11'),
            'end_date' =>  Carbon::create('2023', '06', '18'),
            'company_id'=>3
        ]);

        Jobs::create([
            'name' => [
                'ar' => 'General Ledger Accountant',
                'en' => 'General Ledger Accountant'
            ],
            'city' => 'Sanaa',
            'detailes' => [
                'ar' => '<div class="description my-5 lh-base">
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
              </div>',
                'en' => '
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
                '
            ],
            'start_date' =>  Carbon::create('2022', '06', '11'),
            'end_date' =>  Carbon::create('2023', '06', '18'),
            'company_id' => 3
        ]);

        Jobs::create([
            'name' => [
                'ar' => 'ACB Product Sales Specialist',
                'en' => 'ACB Product Sales Specialist'
            ],
            'city' => 'Aden',
            'detailes' => [
                'ar' => '<div class="description my-5 lh-base">
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
              </div>',
                'en' => '
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
                '
            ],
            'start_date' =>  Carbon::create('2022', '06', '11'),
            'end_date' =>  Carbon::create('2023', '06', '18'),
            'company_id' => 1
        ]);

        Jobs::create([
            'name' => [
                'ar' => 'مصمم جرافكس',
                'en' => 'Junior Digital Graphic Designer'
            ],
            'city' => 'Sanaa',
            'detailes' => [
                'ar' => '<div class="description my-5 lh-base">
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
              </div>',
                'en' => '
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
                '
            ],
            'start_date' =>  Carbon::create('2022', '06', '11'),
            'end_date' =>  Carbon::create('2023', '06', '18'),
            'company_id' => 1
        ]);

        Jobs::create([
            'name' => [
                'ar' => 'Finance Manager & Health',
                'en' => 'Finance Manager & Health'
            ],
            'city' => 'Taiz',
            'detailes' => [
                'ar' => '<div class="description my-5 lh-base">
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
              </div>',
                'en' => '
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
                '
            ],
            'start_date' =>  Carbon::create('2022', '06', '11'),
            'end_date' =>  Carbon::create('2023', '06', '18'),
            'company_id' => 2
        ]);

        Jobs::create([
            'name' => [
                'ar' => 'General Ledger Accountant',
                'en' => 'General Ledger Accountant'
            ],
            'city' => 'Taiz',
            'detailes' => [
                'ar' => '<div class="description my-5 lh-base">
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
              </div>',
                'en' => '
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
                '
            ],
            'start_date' =>  Carbon::create('2022', '06', '11'),
            'end_date' =>  Carbon::create('2023', '06', '18'),
            'company_id'=>3
        ]);

        Jobs::create([
            'name' => [
                'ar' => 'General Ledger Accountant',
                'en' => 'General Ledger Accountant'
            ],
            'city' => 'Sanaa',
            'detailes' => [
                'ar' => '<div class="description my-5 lh-base">
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
              </div>',
                'en' => '
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
                '
            ],
            'start_date' =>  Carbon::create('2022', '06', '11'),
            'end_date' =>  Carbon::create('2023', '06', '18'),
            'company_id' => 3
        ]);
    }
}
