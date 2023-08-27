@php
    $cart_array=cartArray()
@endphp
<!-- ======= Header ======= -->

<header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xxl d-flex align-items-center d-content-lg-between justify-content-between ">

      <h1 class="logo me-auto me-lg-0"><a href="{{url('/')}}">Restaurantly</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{url('/about')}}">About</a></li>
          <li><a class="nav-link scrollto" href="{{url('/menu')}}">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="{{url('/events')}}">Events</a></li>
          <li><a class="nav-link scrollto" href="{{url('/chefs')}}">Chefs</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li>
            <a class="nav-link scrollto cartbadge position-relative"  href="{{url('/cart')}}">
              <i class="bi bi-cart3 cartbadge" id="cartbadge" value="0"></i>
              {{-- <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
          </svg>  --}}
        <!-- bage add -->
        <span class="posit ion-absolute top-2 start-100 translate-middle p-1 bg-danger border border-light rounded cartbadge ">
          
          {{-- <span class="visually-hidden">New alerts</span> --}}
        </span>
        </a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <div class=" d-flex ">
        <a href="{{ route('booking.create') }}" class="book-a-table-btn scrollto d-none d-lg-flex ">Book a table</a>
        <a href="{{ url('/menu') }}" class="book-a-table-btn scrollto d-none d-lg-flex">Order Now</a>
      </div>

    </div>
  </header><!-- End Header -->