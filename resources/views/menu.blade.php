@extends('layouts.master')

@section('title')
  {{ __('Our Menu') }}
@endsection


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- fontawesome -->
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"> --}}
    <!-- stylesheet -->
    <link rel="stylesheet" href="style.css">


    <title>Menu</title>
</head>

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
                    <div class="card mb-3 " id="breakfast" style="min-height: 150px;">
                        <div class="row g-0">
                            <div class="col-md-4 col-sm-12">
                                <img src="images/item-1.jpeg" class="img-fluid rounded-start border border-warning border-2" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <!-- <h5 class="card-title d-inline">Card title <span class="price">$15.99</span></h5> -->
                                    <div class="card-title">
                                        <h5 class="d-inline">{{$food->title}}</h5>
                                        <span class="price   float-end">Price: <span class="text-danger">{{$food->price}}</span></span>
                                    </div>
                                    <p class="card-text"> {{$food->description}}</p>
                                    <div class="button-container" style="display: flex; justify-content: space-between; align-items: center">
                                        <a href="{{url('/cart')}}" type="button" class="btn btn-outline-success">Add to Cart</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="script.js"></script>


</body>

</html>
