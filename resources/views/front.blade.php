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

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Specials</h2>
          <p>Check Our Specials</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Set Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Mixed Seasonal Fruit</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Korean chowmein</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Fruit Cake</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Thai Thik Soup</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Set Menu</h3>
                    <p class="fst-italic">A set menu is a multi-course menu for a fixed price, and includes very few — if any — choices by customers. </p>
                    <p>The selection of dishes is “set” in advance by the chef. Some courses may have 1–2 options, but many set menus have no options at all; customers order the set menu or nothing at all. Other terms for this are: prix fixe menu, tasting menu, set meal, and table d'hôte.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('assets/img/specials-1.png')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Mixed Seasonal Fruits</h3>
                    <p class="fst-italic">Mixed Fruits is exactly what it appears to be – a mix of assorted fruits!</p>
                    <p>While a blend of sliced peaches, strawberries, pineapple, mangoes, dates, apricots and grapes is absolutely heavenly, you can opt for a different selection of fruits depending on the recipe requirement, individual taste and seasonal availability.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('assets/img/specials-2.png')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Korean chowmein</h3>
                    <p class="fst-italic">Korean noodles are noodles or noodle dishes in Korean cuisine, and are collectively referred to as "guksu" in native Korean or "myeon" in hanja character.</p>
                    <p>Noodles in Korea can be made from sweet potato starch, wheat flour, buckwheat, corn flour, rice flour, and acorn flour to name a few. In general, a number of Korean noodle dishes offer a variation on the meats, broths, vegetables, and noodles used.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('assets/img/specials-3.png')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Fruit Cake</h3>
                    <p class="fst-italic">Fruitcake is an ancient goody, with the oldest versions a sort of energy bar made by the Romans to sustain their soldiers in battle. </p>
                    <p>The Roman fruitcake was a mash of barley, honey, wine and dried fruit, often pomegranate seeds.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('assets/img/specials-4.png')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Thai Thik Soup</h3>
                    <p class="fst-italic">Thai thick soup, also known as "Tom Kha," is a rich and creamy soup that originates from Thailand. It is traditionally made with coconut milk, galangal (a type of ginger), lemongrass, kaffir lime leaves, and other aromatic herbs and spices.</p>
                    <p>The soup often includes vegetables, such as mushrooms, and can be prepared with chicken, shrimp, or tofu as the main protein. The combination of flavors creates a harmonious blend of sweet, sour, and savory, making it a popular and comforting dish in Thai cuisine.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('assets\img\thai soup.jpg')}}" alt="" class="rounded img-fluid" width="200">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

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
                  Our invaluable Freelancer has intricately woven their expertise into Restaurantly's fabric. With their creative contributions and tireless efforts over 18 years, they have enriched our journey. Their dedication reflects in every detail, ensuring that our establishment stands as a testament to collaboration, passion, and outstanding craftsmanship.
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

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Restaurant</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('assets/img/gallery/rsz_rest1.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('assets/img/gallery/rsz_rest1.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('assets/img/gallery/rsz_rest3.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('assets/img/gallery/rsz_rest3.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('assets/img/gallery/rsz_rest2.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('assets/img/gallery/rsz_rest2.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('assets/img/gallery/rsz_rest3.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('assets/img/gallery/rsz_rest3.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('assets/img/gallery/rsz_rest2.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('assets/img/gallery/rsz_rest2.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('assets/img/gallery/rsz_rest3.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('assets/img/gallery/rsz_rest3.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('assets/img/gallery/rsz_rest1.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('assets/img/gallery/rsz_rest1.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('assets/img/gallery/rsz_rest2.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('assets/img/gallery/rsz_rest2.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  11:00 AM - 2300 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection

@section('script')

@endsection