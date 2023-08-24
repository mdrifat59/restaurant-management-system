@extends('layouts.master')
<div class="py-5"></div>

<!-- ======= Book A Table Section ======= -->
<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Reservation</h2>
        <p>Book a Table</p>
      </div>

      <form action="{{route('booking.store')}}" method="post">
        @csrf
        <div class="row">
          <input type="hidden" name="user_id" value="{{isset(Auth::user()->id) ? Auth::user()->id : '' }}" id="">
          <div class="col-lg-4 col-md-6 form-group">
            <input type="text" name="title" class="form-control border border-warning bg-dark text-light border-1" value="{{isset(Auth::user()->name) ? Auth::user()->name : '' }}"  placeholder="Your Name "  >
          
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control border border-warning bg-dark text-light border-1" name="email" value="{{isset(Auth::user()->email) ? Auth::user()->email : '' }}"  placeholder="Your Email"  >
          
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input type="text" class="form-control border border-warning bg-dark text-light border-1" name="phone" value="{{isset(Auth::user()->phone) ? Auth::user()->phone : '' }}"  placeholder="Your Phone"   >
          
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="datetime" name="date" class="form-control border border-warning bg-dark text-light border-1"   placeholder="Date"  >
          
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="time" class="form-control border border-warning bg-dark text-light border-1" name="start_time"   placeholder="Time" >
          
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="number" class="form-control border border-warning bg-dark text-light border-1" name="participant"   placeholder="# of people" > 
          </div>
          <div class="sub d-flex justify-content-center">   
          <div class="col-lg-4 col-md-6 form-group mt-3 me-4">
            <select class="form-select border border-warning bg-dark text-light border-1" name="even_type" aria-label="Disabled select example" >
              <option selected>Select Party-type</option>
              <option value="General">General</option>
              <option value="Marriage">Marriage</option>
              <option value="Party">Party</option>
              <option value="Birthday">Birthday</option>
              <option value="Anniversary">Anniversary</option>
            </select> 
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 ms-4">
            <input type="text" class="form-control border border-warning bg-dark text-light border-1" name="transaction_id"   placeholder="Transaction_id" > 
          </div>
        </div>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control border border-warning bg-dark text-light border-1" name="description" rows="5" placeholder="Message"></textarea>
           
        </div> 
        <div class="text-center mt-3"><button type="submit" class="btn border border-warning bg-success-subtle border-2"  >Book a Table</button></div>
      </form> 

    </div>
  </section>
  <!-- End Book A Table Section -->