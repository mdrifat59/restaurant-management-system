 @extends('layouts.master')
 @section('content')
 <div class="py-5"></div>
     <div class="container">
      <div class="row">
        @forelse ($food as $food)
            <div class="col-6">
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    {{-- @if (count($food->thumbnail))
        @foreach ($product->images as $image)
           @if ($loop->first)
           <div class="product-img">
           <img src="{{asset("storage/".$image->name)}}" class="card-img-top" alt="...">
        </div>
           @endif 
        @endforeach            
        @endif --}}
                    <img src=" #" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{$food->name}}</h5>
                      <p class="card-text"> {{$food->description}}</p>
                      <p class="card-text"><small class="text-body-secondary">Price: {{$food->price}}</small></p>
                      <div class="button-container" style="display: flex; justify-content: space-between; align-items: center">
                        <a href="javascript:void(0)" type="button" title="add {{$food->name}} to your bag"  class="btn btn-outline-success addCartIcon"  data-pid="{{$food->id}}"
                          data-pname="{{$food->name}}"
                          data-pprice="{{$food->price}}"
                          data-pamount="1"><i class="bi bi-cart3 cartbadge" id="cartbadge" value="5"></i></a>
                          {{-- <form action="{{url('add-to-cart')}}" method="POST">
                            @csrf
                            <div class="add-to-cart">
                              <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="id" value="{{$food->id}}">
                            <button class="add-to-cart-btn"><i class="bi bi-cart-check-fill"></i>Add To Cart</button>
                            </div>
                          </form> --}}
                        {{-- <a href="{{url('/checkout')}}" type="button" class="btn btn-outline-success">Order</a> --}}
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        @empty
            
        @endforelse
      </div>
     </div>
     {{-- {{$food->links()}} --}}
     @endsection
     @section('script')
<script>
    $(document).ready(function () {
        $("#mainh1").click(function(){
            alert("You clicked me");
        })
    });
  </script>
 @endsection
