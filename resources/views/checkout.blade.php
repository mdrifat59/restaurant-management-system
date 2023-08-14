@extends('layouts.master')

@section('content')
    <html>
        <head>
            <style>
            .gradient-custom {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            }

            .card-custom {
            border-bottom-left-radius: 10% 50%;
            border-top-left-radius: 10% 50%;
            background-color: #f8f9fa ;
            }


            .input-custom {
            background-color: white ;
            }

            .white-text {
            color: hsl(52, 0%, 98%);
            font-weight: 100 ;
            font-size: 14px;
            }

            .back-button {
            background-color: hsl(52, 0%, 98%);
            font-weight: 700;
            color: black ;
            margin-top: 50px ;}
            </style>
        </head>
        <body>
            <div class="row mt-3 mx-3" style="margin-top:25px ;">
                <div class="col-md-3">
                  <div style="margin-top: 50px; margin-left: 10px;" class="text-center">
                    <i id="animationDemo" data-mdb-animation="slide-right" data-mdb-toggle="animation"
                      data-mdb-animation-reset="true" data-mdb-animation-start="onScroll"
                      data-mdb-animation-on-scroll="repeat" class="fas fa-3x fa-shipping-fast text-white"></i>
                    <h3 class="mt-3 text-white">Welcome</h3>
                    {{-- <p class="white-text">You are 30 seconds away from compleating your order!</p> --}}
                  </div>
                  <div class="text-center">
                    <a href="{{url('/cart')}}" class="btn btn-white btn-rounded back-button">Go back </a>
                  </div>
              
              
                </div>
                <div class="col-md-9 justify-content-center">
                  <div class="card card-custom pb-4">
                    <div class="card-body mt-0 mx-5">
                      <div class="text-center mb-3 pb-2 mt-3">
                        <h4 style="color: #495057 ;">Delivery Details</h4>
                      </div>
              
                      <form class="mb-0">
              
                        <div class="row mb-4">
                          <div class="col">
                            <div class="form-outline">
                              <input type="text" id="form9Example1" class="form-control input-custom" />
                              <label class="form-label" for="form9Example1">First name</label>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                              <input type="text" id="form9Example2" class="form-control input-custom" />
                              <label class="form-label" for="form9Example2">Last name</label>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-4">
                          <div class="col">
                            <div class="form-outline">
                              <input type="text" id="form9Example3" class="form-control input-custom" />
                              <label class="form-label" for="form9Example3">City</label>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                              <input type="text" id="form9Example4" class="form-control input-custom" />
                              <label class="form-label" for="form9Example4">Address</label>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-4">
                          <div class="col">
                            <div class="form-outline">
                              <input type="number" id="form9Example6" class="form-control input-custom" />
                              <label class="form-label" for="form9Example6">Phone No.</label>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                              <input type="email" id="typeEmail" class="form-control input-custom" />
                              <label class="form-label" for="typeEmail">Email</label>
                            </div>
                          </div>
                        </div>
              
                        <div class="float-end ">
                          <!-- Submit button -->
                          {{-- <button type="submit" class="btn btn-primary btn-rounded"
                            style="background-color: #0062CC ;">Place order</button> --}}
                            <a href="{{url('/invoice')}}" class="btn btn-primary btn-rounded back-button">Place order</a>
                        </div>
              
                      </form>
                    </div>
                  </div>
                </div>
              </div>
         </body>
    </html>
@endsection