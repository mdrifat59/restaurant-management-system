@extends('layouts.master')

@section('title')
  {{ __('Our Menu') }}
@endsection

<!-- ======= Menu Section ======= -->
{{-- @include('partials.admin.header') --}}
{{-- @include('partials.admin.sidebar') --}}
<section id="menu" class="menu section-bg pt-160">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Menu</h2>
        <p>Check Our Tasty Menu</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex d-content-center">
          <ul id="menu-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-starters">Starters</li>
            <li data-filter=".filter-salads">Salads</li>
            <li data-filter=".filter-specialty">Specialty</li>
          </ul>
        </div>
      </div>

      <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-6 menu-item filter-starters">
          <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Lobster Bisque</a><span>&#2547; 250</span>
          </div>
          <div class="menu-ingredients">
            A bisque is a smooth, creamy French style of soup, traditionally made from crustaceans like lobster, crab or crayfish.
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <img src="{{asset('assets/img/menu/bread-barrel.jpg')}}" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Bread Barrel</a><span>&#2547; 650</span>
          </div>
          <div class="menu-ingredients">
            A cylindrical loaf baked in a special ridged tin so that it is marked like a caterpillar with short segments along its length, for ease of slicing.
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-starters">
          <img src="{{asset('assets/img/menu/cake.jpg')}}" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Crab Cake</a><span>&#2547; 799</span>
          </div>
          <div class="menu-ingredients">
            A delicate crab cake served on a toasted roll with lettuce and tartar sauce
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-salads">
          <img src="{{asset('assets/img/menu/caesar.jpg')}}" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Caesar Selections</a><span>&#2547; 899</span>
          </div>
          <div class="menu-ingredients">
            a popular salad made with romaine lettuce, croutons, Parmesan cheese, lemon juice, olive oil, Worcestershire sauce
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <img src="{{asset('assets/img/menu/tuscan-grilled.jpg')}}" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Tuscan Grilled</a><span>&#2547; 999</span>
          </div>
          <div class="menu-ingredients">
            Grilled chicken with provolone, artichoke hearts, and roasted red pesto
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-starters">
          <img src="{{asset('assets/img/menu/mozzarella.jpg')}}" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Mozzarella Stick</a><span>&#2547; 500</span>
          </div>
          <div class="menu-ingredients">
            sticks of mozzarella cheese that are coated in seasoned Italian breadcrumbs, then deep fried until golden brown
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-salads">
          <img src="{{asset('assets/img/menu/greek-salad.jpg')}}" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Greek Salad</a><span>&#2547; 420</span>
          </div>
          <div class="menu-ingredients">
            Fresh spinach, crisp romaine, tomatoes, and Greek olives
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-salads">
          <img src="{{asset('assets/img/menu/spinach-salad.jpg')}}" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Spinach Salad</a><span>&#2547; 400</span>
          </div>
          <div class="menu-ingredients">
            Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <img src="{{asset('assets/img/menu/lobster-roll.jpg')}}" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Lobster Roll</a><span>&#2547; 999</span>
          </div>
          <div class="menu-ingredients">
            Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- End Menu Section -->