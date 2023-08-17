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
            
            {{-- <a href="#" class="btn btn-outline-warning mx-1">Lunch</a>
            <a href="#" class="btn btn-outline-warning mx-1">Shakes</a>
            <a href="#" class="btn btn-outline-warning mx-1">Dinner</a> --}}
        </div>
        {{-- <div class="categories text-center">
            <a href="#" class="btn btn-outline-warning mx-1">All</a>
            <a href="#" class="btn btn-outline-warning mx-1">Breakfast</a>
            <a href="#" class="btn btn-outline-warning mx-1">Lunch</a>
            <a href="#" class="btn btn-outline-warning mx-1">Shakes</a>
            <a href="#" class="btn btn-outline-warning mx-1">Dinner</a>
        </div> --}}
        <div class="menu-items mt-5">
            <div class="card mb-3 col-md-6" id="breakfast" style="max-width: 660px;">
                <div class="row g-0">
                    <div class="col-md-4 col-sm-12">
                        <img src="images/item-1.jpeg" class="img-fluid rounded-start border border-warning border-2" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <!-- <h5 class="card-title d-inline">Card title <span class="price">$15.99</span></h5> -->
                            <div class="card-title">
                                <h5 class="d-inline">Buttermilk Pancakes</h5>
                                <span class="price text-warning">$15.99</span>
                            </div>
                            <p class="card-text">I'm baby woke mlkshk wolf bitters live-edge blue bottle, hammock freegan copper mug whatever cold-pressed</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 col-md-6" id="dinner" style="max-width: 660px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/item-2.jpeg" class="img-fluid rounded-start border border-warning border-2" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <!-- <h5 class="card-title d-inline">Card title <span class="price">$15.99</span></h5> -->
                            <div class="card-title">
                                <h5 class="d-inline">Diner Double</h5>
                                <span class="price text-warning">$23.99</span>
                            </div>
                            <p class="card-text">vaporware iPhone mumblecore selvage raw denim slow-carb leggings gochujang helvetica man braid jianbing. Marfa thundercats</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 col-md-6" id="shakes" style="max-width: 660px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/item-3.jpeg" class="img-fluid rounded-start border border-warning border-2" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <!-- <h5 class="card-title d-inline">Card title <span class="price">$15.99</span></h5> -->
                            <div class="card-title">
                                <h5 class="d-inline">Godzilla Milkshake</h5>
                                <span class="price text-warning">$13.99</span>
                            </div>
                            <p class="card-text">ombucha chillwave fanny pack 3 wolf moon street art photo booth before they sold out organic viral.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 col-md-6" id="breakfast" style="max-width: 660px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/item-4.jpeg" class="img-fluid rounded-start border border-warning border-2" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <!-- <h5 class="card-title d-inline">Card title <span class="price">$15.99</span></h5> -->
                            <div class="card-title">
                                <h5 class="d-inline">Country Delight</h5>
                                <span class="price text-warning">$6.99</span>
                            </div>
                            <p class="card-text">Shabby chic keffiyeh neutra snackwave pork belly shoreditch. Prism austin mlkshk truffaut,</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 col-md-6" id="lunch" style="max-width: 660px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/item-5.jpeg" class="img-fluid rounded-start border border-warning border-2" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <!-- <h5 class="card-title d-inline">Card title <span class="price">$15.99</span></h5> -->
                            <div class="card-title">
                                <h5 class="d-inline">Egg Attack</h5>
                                <span class="price text-warning">$20.99</span>
                            </div>
                            <p class="card-text">franzen vegan pabst bicycle rights kickstarter pinterest meditation farm-to-table 90's pop-up</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 col-md-6" id="shakes" style="max-width: 660px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/item-6.jpeg" class="img-fluid rounded-start border border-warning border-2" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <!-- <h5 class="card-title d-inline">Card title <span class="price">$15.99</span></h5> -->
                            <div class="card-title">
                                <h5 class="d-inline">Oreo Dream</h5>
                                <span class="price text-warning">$22.99</span>
                            </div>
                            <p class="card-text">Portland chicharrones ethical edison bulb, palo santo craft beer chia heirloom iPhone everyday</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 col-md-6" id="breakfast" style="max-width: 660px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/item-7.jpeg" class="img-fluid rounded-start border border-warning border-2" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <!-- <h5 class="card-title d-inline">Card title <span class="price">$15.99</span></h5> -->
                            <div class="card-title">
                                <h5 class="d-inline">Bacon Overflow</h5>
                                <span class="price text-warning">$18.99</span>
                            </div>
                            <p class="card-text">carry jianbing normcore freegan. Viral single-origin coffee live-edge, pork belly cloud bread iceland put a bird</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 col-md-6" id="lunch" style="max-width: 660px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/item-8.jpeg" class="img-fluid rounded-start border border-warning border-2" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <!-- <h5 class="card-title d-inline">Card title <span class="price">$15.99</span></h5> -->
                            <div class="card-title">
                                <h5 class="d-inline">American Classic</h5>
                                <span class="price text-warning">$12.99</span>
                            </div>
                            <p class="card-text">on it tumblr kickstarter thundercats migas everyday carry squid palo santo leggings. Food truck truffaut</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 col-md-6" id="shakes" style="max-width: 660px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/item-9.jpeg" class="img-fluid rounded-start border border-warning border-2" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <!-- <h5 class="card-title d-inline">Card title <span class="price">$15.99</span></h5> -->
                            <div class="card-title">
                                <h5 class="d-inline">Quarantine Buddy</h5>
                                <span class="price text-warning">$16.99</span>
                            </div>
                            <p class="card-text">skateboard fam synth authentic semiotics. Live-edge lyft af, edison bulb yuccie crucifix microdosing.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 col-md-6" id="dinner" style="max-width: 660px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/item-10.jpeg" class="img-fluid rounded-start border border-warning border-2" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <!-- <h5 class="card-title d-inline">Card title <span class="price">$15.99</span></h5> -->
                            <div class="card-title">
                                <h5 class="d-inline">Steak Dinner</h5>
                                <span class="price text-warning">$39.99</span>
                            </div>
                            <p class="card-text">skateboard fam synth authentic semiotics. Live-edge lyft af, edison bulb yuccie crucifix microdosing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="script.js"></script>


</body>

</html>
