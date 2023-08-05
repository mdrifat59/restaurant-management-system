@extends('layouts.master')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
<section class="py-5 overflow-hidden bg-dark" id="home">
    <div class="container">
      <div class="row flex-center">
        <div class="col-md-5 col-lg-6 order-0 order-md-1 mt-8 mt-md-0"><a class="img-landing-banner" href="#!"><img class="img-fluid" src="assets\img\hero-header.png" alt="hero-header" /></a></div>
        <div class="col-md-7 col-lg-6 py-8 text-md-start text-center">
          <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-8 text-light">Are you starving?</h1>
          <h1 class="text-800 mb-5 fs-4">Within a few clicks, find meals that<br class="d-none d-xxl-block" />are accessible near you</h1>
          <div class="card w-xxl-75">
            <div class="card-body">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active mb-3" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="bi bi-bicycle"></i> Delivery</button>
                  <button class="nav-link mb-3" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="bi bi-bag"></i> Pickup</button>
                </div>
              </nav>
              <div class="tab-content mt-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <form class="row gx-2 gy-2 align-items-center">
                    <div class="col">
                      <div class="input-group-icon"><i class="fas fa-map-marker-alt text-danger input-box-icon"></i>
                        <label class="visually-hidden" for="inputDelivery">Address</label>
                        <input class="form-control input-box form-foodwagon-control" id="inputDelivery" type="text" placeholder="Enter Your Address" />
                      </div>
                    </div>
                    <div class="d-grid gap-3 col-sm-auto">
                      <button class="btn btn-danger" type="submit"><i class="bi bi-geo-alt-fill"></i> Find Food</button>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                  <form class="row gx-4 gy-2 align-items-center">
                    <div class="col">
                      <div class="input-group-icon"><i class="fas fa-map-marker-alt text-danger input-box-icon "></i>
                        <label class="visually-hidden" for="inputPickup">Address</label>
                        <input class="form-control input-box form-foodwagon-control " id="inputPickup" type="text" placeholder="Enter Your Address" />
                      </div>
                    </div>
                    <div class="d-grid gap-3 col-sm-auto">
                      <button class="btn btn-danger" type="submit"><i class="bi bi-geo-alt-fill"></i> Find Food</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>