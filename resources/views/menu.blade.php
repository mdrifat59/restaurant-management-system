@extends('layouts.master')

@section('title')
  {{ __('Our Menu') }}
@endsection


<!doctype html>
<html lang="en">
<body>
    <div class="container mt-5">
        <h1 class="text-center" id="heading">Our Menu</h1>
        <div class="underline mb-5"></div>
        <div class="categories text-center mb-5">
            <a href="#" class="btn btn-outline-warning mx-1">All</a>
            @foreach ($categories as $category)
              <a href="javascript:void(0)" class="btn btn-outline-warning mx-1">{{ $category->title }}</a>
            @endforeach
             
        </div> 
          <!-- card show -->
        <div class="menu-items mt-5">
            <div class="row">
                @foreach ($food as $food)
                <div class="col-6">
                    <div class="card mb-3 item_data" id="breakfast" style="min-height: 150px;">
                        <div class="row g-0">
                            <div class="col-md-4 col-sm-12">
                                <img src="{{ asset('storage/'.$food->thumbnail) }}" class="img-fluid rounded-start border border-warning border-2 " style="width: 100%; height:150px; object-fit: cover;" alt="...">
                            </div> 
                            <div class="col-md-8">
                                <div class="card-body">
                                    <!-- <h5 class="card-title d-inline">Card title <span class="price">$15.99</span></h5> -->
                                    <div class="card-title">
                                        <h5 class="d-inline">{{$food->name}}</h5>
                                        <span class="price   float-end">Price: <span class="text-danger">{{$food->price}}</span></span>
                                    </div>
                                    <p class="card-text"> {{$food->description}}</p>
                                    <div class="button-container" style="display: flex; justify-content: space-between; align-items: center">
                                        {{-- <a href="javascript:void(0)" type="button" class="btn btn-outline-success addCartIcon"  data-pid="{{$food->id}}"
                                          data-pname="{{$food->title}}"
                                          data-pprice="{{$food->price}}"
                                          data-pamount="1"><i class="bi bi-cart3 cartbadge" id="cartbadge" value="5"></i></a> --}}
                                          <form action="{{url('add-to-cart')}}" method="POST">
                                            @csrf
                                            <div class="add-to-cart">
                                              <input type="hidden" name="quantity" value="1">
                                            <input type="hidden" name="id" value="{{$food->id}}">
                                            <button class="add-to-cart-btn"><i class="bi bi-cart-check-fill"></i>Add To Cart</button>
                                            </div>
                                          </form>
                                        <a href="" type="button" class="btn btn-outline-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          @endforeach
                
                 
            </div> 
        </div>
    </div>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
    {{-- <script src="script.js"></script>  --}}

 
        {{-- <script>
            $(document).ready(function() {
              // When the "Add to Cart" button is clicked
              $(".btn-outline-success").click(function() {
                var foodId = $(this).data("food-id"); // Get the food ID from the data attribute
            
                // Send the food ID to the server using Ajax
                $.ajax({
                  url: "/add-to-cart", // Replace with your server-side route
                  method: "POST",
                  data: {food_id: foodId},
                  success: function(response) {
                    // Handle the success response from the server
                    console.log(response); // You can log the response for debugging purposes
                    // You can also perform additional actions on the page if needed
                  },
                  error: function(error) {
                    // Handle the error response from the server
                    console.error(error); // Log the error for debugging purposes
                  }
                });
              });
            });
            </script> --}}
            
        
</body>

</html>
