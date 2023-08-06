@extends('layouts.master')

@section('title')
  {{ __('Events') }}
@endsection

<!-- ======= Events Section ======= -->
<section id="events" class="events">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Events</h2>
        <p>Organize Your Events in our Restaurant</p>
      </div>

      <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="row event-item">
              <div class="col-lg-6">
                <img src="{{asset('assets/img/event-birthday.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>Birthday Parties</h3>
                <div class="price">
                  <p><span>&#2547; 10,000</span></p>
                </div>
                <p class="fst-italic">
                    Make your special day unforgettable at our restaurant! Celebrate your birthday with us and indulge in delicious cuisine, delightful ambiance, and warm hospitality. Our dedicated team will ensure every detail is taken care of, from customizing the menu to arranging personalized decorations.
                </p>
                <ul>
                  <li><i class="bi bi-check-circled"></i>Personalized packages for a unique celebration.</li>
                  <li><i class="bi bi-check-circled"></i>Experienced event planners for a stress-free experience.</li>
                  <li><i class="bi bi-check-circled"></i>Delectable menus with diverse cuisine options.</li>
                </ul>
                <p>
                    Let us be a part of your joyous occasion and create lasting memories together. Book your birthday party with us today!
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="row event-item">
              <div class="col-lg-6">
                <img src="{{asset('assets/img/event-private.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>Private Parties</h3>
                <div class="price">
                  <p><span>&#2547; 30,000</span></p>
                </div>
                <p class="fst-italic">
                    Host your next private party with us! Enjoy exclusive use of our stylish venue, personalized menus, and dedicated event planners. Create unforgettable memories with friends, family, or colleagues in a private and intimate setting.
                </p>
                <ul>
                  <li><i class="bi bi-check-circled"></i>Exclusive use of our stylish venue.</li>
                  <li><i class="bi bi-check-circled"></i>Intimate setting for memorable gatherings.</li>
                  <li><i class="bi bi-check-circled"></i>Book now for a private and unforgettable experience.</li>
                </ul>
                <p>
                    Whether it's a birthday celebration, anniversary, or corporate event, we have the perfect space to make your occasion special. Book your private party today!
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="row event-item">
              <div class="col-lg-6">
                <img src="{{asset('assets/img/event-custom.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>Custom Parties</h3>
                <div class="price">
                  <p><span>&#2547; 15,000</span></p>
                </div>
                <p class="fst-italic">
                    Create Your Perfect Celebration! Our restaurant offers custom parties that cater to your unique desires. From intimate gatherings to extravagant events, we provide tailored packages to suit your taste and budget. Our expert team will handle all the details, including personalized menus, decorations, and entertainment.
                </p>
                <ul>
                  <li><i class="bi bi-check-circled"></i>Tailored packages for your dream celebration.</li>
                  <li><i class="bi bi-check-circled"></i>Expert team to handle all the details.</li>
                  <li><i class="bi bi-check-circled"></i>Book now for a one-of-a-kind party.</li>
                </ul>
                <p>
                    Whether it's a birthday, anniversary, or any special occasion, let us turn your vision into a reality. Book your custom party with us today and make memories that last a lifetime!
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>
  <!-- End Events Section -->