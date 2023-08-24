@extends('layouts.master')

@section('content')
  <div class="py-5"></div>
    <div class="container my-5 py-5">

      <!--Section: Design Block-->
      <section>
    
        <div class="row">
          <div class="col-2"></div>
          <div class="col-md-8 mb-6">
            <div class="card mb-4">
              <div class="card-header py-3">
                <h5 class="mb-0 text-font text-uppercase">Delivery address </h5>
              </div>
              <div class="card-body">
                <form>
    
                  <div class="row mb-4">
                    <div class="col">
                      <div class="form-outline">
                        <label class="form-label" for="form11Example1">First name </label>
                        <input type="text" name="name" id="form11Example1" class="form-control" />
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-outline">
                        <label class="form-label" for="form11Example2">Last name</label>
                        <input type="text" name="name" id="form11Example2" class="form-control" />
                      </div>
                    </div>
                  </div>
    
                  <!-- Text input -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form11Example4">Address</label>
                    <input type="text" name="address" id="form11Example4" class="form-control" />
                  </div>
    
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form11Example5">Email</label>
                    <input type="email" name="email" id="form11Example5" class="form-control" />
                  </div>
    
                  <!-- Number input -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form11Example6">Phone</label>
                    <input type="number" name="phone" id="form11Example6" class="form-control" />
                  </div>
    
                  <!-- Message input -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form11Example7">Additional information</label>
                    <textarea class="form-control" name="description" id="form11Example7" rows="4"></textarea>
                  </div>
    
                  <!-- Checkbox -->
                  <div class="form-check d-flex justify-content-center mb-2">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form11Example8" checked />
                    <label class="form-check-label" for="form11Example8">
                      Create an account?
                    </label>
                  </div>
                </form>
              </div>
    
            </div>
            <div class="text-center">
              <span><a href="{{url('/invoice')}}" class="btn btn-success btn-rounded back-button col-md-5">Place Order </a></span>
            </div>
    
          </div>
      <div class="col-2"></div>
        </div>
    
      </section>
      <!--Section: Design Block-->
    
    </div> 
@endsection

