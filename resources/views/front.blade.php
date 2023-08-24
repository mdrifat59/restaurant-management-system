@extends('layouts.master')

@section('title')
{{ __('Homepage') }}
@endsection

@section('hero')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Restaurantly</span></h1>
          <h2>Delivering great food for more than 18 years!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="{{ url('/book') }}" class="btn-book animated fadeInUp scrollto">Book a Table</a>
            <a href="{{ url('/order') }}" class="btn-book animated fadeInUp scrollto">Order Now</a>
          </div>
        </div>
        {{-- <div class="col-lg-4 d-flex align-items-center d-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="glightbox play-btn"></a>
        </div> --}}

      </div>
    </div>
  </section><!-- End Hero -->
@endsection

@section('content')
<main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Us</h2>
          <p>Why Choose Our Restaurant</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Delicious and Diverse Menu</h4>
              <p> Highlight the variety of mouthwatering dishes you offer, ranging from local favorites to international cuisines, catering to diverse tastes and preferences.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Fresh and Quality Ingredients</h4>
              <p>Emphasize the commitment to using only the freshest and highest-quality ingredients in your dishes, ensuring a delightful dining experience for your customers.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4>Clean and Hygienic Environment</h4>
              <p>Assure customers of a clean and hygienic dining environment, adhering to high sanitation standards for their safety and comfort.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What they're saying about us</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Guided by an unwavering passion for culinary excellence, our CEO & Founder embarked on this journey 18 years ago. With a vision to create a haven where food, warmth, and memories intertwine, their dedication has shaped Restaurantly into a timeless destination for gastronomic indulgence.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('assets/img/testimonials/test1.jpg')}}" class="testimonial-img" alt="">
                <h3>Shakib AL Hasan</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Our Designer, a visionary artist, has infused every corner of Restaurantly with an aesthetic that marries comfort and elegance. With a keen eye for detail, they have woven a tapestry of ambiance that elevates every dining experience, making each visit a feast for the senses.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('assets/img/testimonials/test2.jpg')}}" class="testimonial-img" alt="">
                <h3>Mahmudullah Riyad</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  At the heart of Restaurantly's success is our dedicated Store Owner. Their entrepreneurial spirit and commitment have been instrumental in nurturing our 18-year legacy. Through their leadership, we continue to flourish as a culinary institution, offering memorable experiences that reflect their profound dedication to our patrons and our craft.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('assets/img/testimonials/test3.jpg')}}" class="testimonial-img" alt="">
                <h3>Musfiqur Rahim</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Our invaluable Freelancer has intricately woven their expertise into Restaurantly's fabric. With their creative contributions and tireless efforts over 18 years, they have enri d our journey. Their dedication reflects in every detail, ensuring that our establishment stands as a testament to collaboration, passion, and outstanding craftsmanship.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('assets/img/testimonials/test4.jpg')}}" class="testimonial-img" alt="">
                <h3>MD Rifat</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  At Restaurantly, our Entrepreneur's dynamic spirit fuels our 18-year culinary odyssey. Their bold vision and strategic prowess have guided us through evolving tastes and trends, resulting in a timeless dining experience. Their innovative drive continues to shape our identity as we craft new chapters in our gastronomic voyage.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('assets/img/testimonials/test5.jpg')}}" class="testimonial-img" alt="">
                <h3>Mohammad Arafat Hosen</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->
@endsection

@section('script')

@endsection