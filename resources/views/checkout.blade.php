@extends('layouts.master')

@section('content')
<button id="top" type="button" class="btn btn-scroll-top" >
  <i class="fas fa-angle-up"></i>
</button>
<!-- HEADER -->
<!-- Top Header -->
{{-- <header class="bg-light py-2">
  <div class="container d-md-flex top-header align-items-center">
    <div class="d-flex flex-wrap align-items-center">
      <i class="fas fa-phone me-2"></i>
      <a href="tel:+880124567890" class="text-dark text-decoration-none me-4">+88 (012) 34-567890</a>
      <i class="fas fa-envelope me-2"></i>
      <a href="mailto:info@example.com" class="text-dark text-decoration-none me-4">info@example.com</a>
    </div>
    <div class="d-flex flex-wrap align-items-center">
      <i class="fas fa-map-marker-alt me-2"></i>
      <span class="text-dark me-4">Mirpur, Dhaka-1216</span>
      <i class="fas fa-clock me-2"></i>
      <span class="text-dark">9AM to 11PM</span>
    </div>
  </div>
</header> --}}
    <!-- /.top-header -->

<!-- NAVBAR -->
{{-- <nav class="navbar navbar-expand-md bg-light navbar-light shadow-sm sticky-top py-3">
  <div class="container">
    <!-- Navbar Brand -->
    <a class="navbar-brand" href="index.html">
      <img src="./assets/images/logo.png" width="150" alt="" />
    </a><!-- /.navbar-brand -->
    <!-- Navbar Toggler -->
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span><!-- /.navbar-toggler-icon -->
    </button><!-- /.navbar-toggler -->
    <!-- Navbar Collapse -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a><!-- /.nav-link -->
        </li><!-- /.nav-item -->
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a><!-- /.nav-link -->
        </li><!-- /.nav-item -->
        <li class="nav-item">
          <a class="nav-link" href="shop.html">Shop</a><!-- /.nav-link -->
        </li><!-- /.nav-item -->
        <li class="nav-item">
          <a class="nav-link" href="category.html">Category</a><!-- /.nav-link -->
        </li><!-- /.nav-item -->
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a><!-- /.nav-link -->
        </li><!-- /.nav-item -->
      </ul><!-- /.navbar-nav -->
      <ul class="navbar-nav icon-menu ms-auto">
        <li class="nav-item">
          <a class="btn btn-outline-primary rounded-circle" href="#">
            <i class="fas fa-search"></i>
          </a><!-- /.btn -->
        </li><!-- /.nav-item -->
        <li class="nav-item">
          <a class="btn btn-outline-primary rounded-circle position-relative" href="wishlist.html">
            <i class="fas fa-heart"></i>
            <span class="badge bg-primary rounded-circle position-absolute" style="top: -12px; right: -8px;" >0</span>
          </a><!-- /.btn -->
        </li><!-- /.nav-item -->
        <li class="nav-item">
          <a class="btn btn-outline-primary rounded-circle position-relative" href="cart.html">
            <i class="fas fa-shopping-cart"></i>
            <span class="badge bg-primary rounded-circle position-absolute" style="top: -12px; right: -8px;" >0</span>
          </a><!-- /.btn -->
        </li><!-- /.nav-item -->
        <li class="nav-item">
          <a class="btn btn-outline-primary rounded-circle" href="./auth/index.html">
            <i class="fas fa-user"></i>
          </a><!-- /.btn -->
        </li><!-- /.nav-item -->
      </ul><!-- /.navbar-nav -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav> --}}
<!-- /.navbar -->
<!-- CAROUSEL -->
{{-- <div id="demo" class="carousel slide delivary" data-bs-ride="carousel">
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <p class="py-2 m-0 text-center">
        <i class="fas fa-truck-fast"></i>
        <span>Delivery charges will be <span class="badge bg-secondary">Free</span> only in <b>Mirpur</b></span>
      </p>
    </div><!-- /.carousel-item -->
    <div class="carousel-item">
      <p class="py-2 m-0 text-center">
        <i class="fas fa-truck-fast"></i>
        <span>Delivery charges will be <span class="badge bg-secondary">BDT. 60/-</span> only in <b>Dhaka</b></span>
      </p>
    </div><!-- /.carousel-item -->
    <div class="carousel-item">
      <p class="py-2 m-0 text-center">
        <i class="fas fa-truck-fast"></i>
        <span>Delivery charges will be <span class="badge bg-secondary">BDT. 120/-</span> outside <b>Dhaka</b></span>
      </p>
    </div><!-- /.carousel-item -->
  </div><!-- /.carousel-inner -->
</div> --}}
<!-- /.carousel -->
<!-- MAIN CONTENT -->
<div class="py-5"></div>
<h1 class="text-center">Checkout Page</h1>
<main>
  <section>
    <div class="container">
      <form action="{{url('example1')}}" method="POST">
        @csrf
        <div class="row my-3">
          <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7 p-2">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Checkout Form</h4>
              </div>
              <div class="card-body">
                {{-- <fieldset>
                  <legend>Billing Information</legend>
                  <div class="form-group my-2">
                    <label for="name1">Full Name</label>
                    <div class="input-group input-group-sm my-1">
                      <span class="input-group-text" id="inputGroup-sizing-sm">
                        <i class="fas fa-user"></i>
                      </span>
                      <input type="text" class="form-control" id="name1" placeholder="First Name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required />
                      <input type="text" class="form-control" id="name1" placeholder="Last Name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required />
                    </div>
                  </div>
                  <div class="row my-2">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                      <div class="form-group">
                        <label for="email1">Email Address</label>
                        <div class="input-group input-group-sm my-1">
                          <span class="input-group-text" id="inputGroup-sizing-sm">
                            <i class="fas fa-envelope"></i>
                          </span>
                          <input type="email" class="form-control" id="email1" placeholder="someone@example.com" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required />
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                      <div class="form-group">
                        <label for="phone1">Cell Phone</label>
                        <div class="input-group input-group-sm my-1">
                          <span class="input-group-text" id="inputGroup-sizing-sm">
                            <i class="fas fa-phone"></i>
                          </span>
                          <input type="tel" class="form-control" id="phone" name="phone" placeholder="+88 (0XX) XX-XXXXXX" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" oninput="formatPhoneNumber()" maxlength="19" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group my-2">
                    <label for="addressOne1">Address Line-01</label>
                    <div class="input-group input-group-sm my-1">
                      <input type="text" class="form-control" id="addressOne1" placeholder="1234 Main St" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required />
                    </div>
                  </div>
                  <div class="form-group my-2">
                    <label for="addressTwo1">Address Line-02</label>
                    <div class="input-group input-group-sm my-1">
                      <input type="text" class="form-control" id="addressTwo1" placeholder="Apartment or Suite" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                    </div>
                  </div>
                  <div class="row my-2">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                      <div class="form-group">
                        <label for="division1">Division</label>
                        <select class="form-control form-control-sm d-block w-100 my-1" id="division1" required>
                          <option value="">-- Choose One --</option>
                          <option value="1">Barisal</option>
                          <option value="2">Chittagong</option>
                          <option value="3">Dhaka</option>
                          <option value="4">Khulna</option>
                          <option value="5">Mymensingh</option>
                          <option value="6">Rajshahi</option>
                          <option value="7">Rangpur</option>
                          <option value="8">Sylhet</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                      <div class="form-group">
                        <label for="district1">District</label>
                        <select class="form-control form-control-sm d-block w-100 my-1" id="district1" required>
                          <option value="">-- Choose One --</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                      <div class="form-group">
                        <label for="postal1">Postal Code</label>
                        <div class="input-group input-group-sm my-1">
                          <input type="text" class="form-control" id="postal1" placeholder="Ex. 1216" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" maxlength="5" />
                        </div>
                      </div>
                    </div>
                  </div>
                </fieldset> --}}
                <hr>
                <fieldset>
                  <legend>Shipping Information</legend>
                  <div class="form-group my-2">
                    <label for="name2">Full Name</label>
                    <div class="input-group input-group-sm my-1">
                      <span class="input-group-text" id="inputGroup-sizing-sm">
                        <i class="fas fa-user"></i>
                      </span>                                                                            
                      <input type="text" class="form-control" id="name2" placeholder="First Name" value="{{isset(Auth::user()->name) ? Auth::user()->name : ''}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required />
                      {{-- <input type="text" class="form-control" id="name2" placeholder="Last Name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required /> --}}
                    </div>
                  </div>
                  <div class="row my-2">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                      <div class="form-group">
                        <label for="email2">Email Address</label>
                        <div class="input-group input-group-sm my-1">
                          <span class="input-group-text" id="inputGroup-sizing-sm">
                            <i class="fas fa-envelope"></i>
                          </span>
                          <input type="email" class="form-control" id="email2" placeholder="someone@example.com" value="{{isset(Auth::user()->email) ? Auth::user()->email : ''}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required />
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                      <div class="form-group">
                        <label for="phone2">Cell Phone</label>
                        <div class="input-group input-group-sm my-1">
                          <span class="input-group-text" id="inputGroup-sizing-sm">
                            <i class="fas fa-phone"></i>
                          </span>
                          <input type="tel" class="form-control" id="phone2" name="phone" placeholder="+88 (0XX) XX-XXXXXX" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" oninput="formatPhoneNumber()" maxlength="19" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group my-2">
                    <label for="addressOne2">Address Line-01</label>
                    <div class="input-group input-group-sm my-1">
                      <input type="text" class="form-control" id="addressOne2" placeholder="1234 Main St" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required />
                    </div>
                  </div>
                  <div class="form-group my-2">
                    <label for="addressTwo2">Address Line-02</label>
                    <div class="input-group input-group-sm my-1">
                      <input type="text" class="form-control" id="addressTwo2" placeholder="Apartment or Suite" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                    </div>
                  </div>
                  <div class="row my-2">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                      <div class="form-group">
                        <label for="division2">Division</label>
                        <select class="form-control form-control-sm d-block w-100 my-1" id="division2" required>
                          <option value="">-- Choose One --</option>
                          <option value="1">Barisal</option>
                          <option value="2">Chittagong</option>
                          <option value="3">Dhaka</option>
                          <option value="4">Khulna</option>
                          <option value="5">Mymensingh</option>
                          <option value="6">Rajshahi</option>
                          <option value="7">Rangpur</option>
                          <option value="8">Sylhet</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                      <div class="form-group">
                        <label for="district2">District</label>
                        <select class="form-control form-control-sm d-block w-100 my-1" id="district2" required>
                          <option value="">-- Choose One --</option>
                          <option value="6">Dhaka</option>
                          <option value="7">Manikgange</option>
                          <option value="8">Narayangange</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                      <div class="form-group">
                        <label for="postal2">Postal Code</label>
                        <div class="input-group input-group-sm my-1">
                          <input type="text" class="form-control" id="postal2" placeholder="Ex. 1216" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" maxlength="5" />
                        </div>
                      </div>
                    </div>
                  </div>
                </fieldset>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5 p-2">
            <div class="card">
              <div class="card-header">
                <div class="card-title position-relative">
                  <h4 class="me-2">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="ps-2">Cart Summary</span>
                  </h4>
                  <a href="cart.html" class="btn btn-secondary btn-sm position-absolute" style="top: 0; right: 0;" >
                    <i class="fas fa-edit"></i>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <strong>1 x Arzish Ajwa Dates</strong>
                      </td>
                      <td class="text-end" >BDT. 700.00/-</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>1 x Nescafé Coffee Jar</strong>
                      </td>
                      <td class="text-end" >BDT. 195.00/-</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>1 x Lays Potato Chips</strong>
                      </td>
                      <td class="text-end" >BDT. 60.00/-</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>1 x Dove Bar (White)</strong>
                      </td>
                      <td class="text-end" >BDT. 195.00/-</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>1 x Standard Horlicks</strong>
                      </td>
                      <td class="text-end" >BDT. 780.00/-</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>1 x Nestlé Koko Krunch</strong>
                      </td>
                      <td class="text-end" >BDT. 450.00/-</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>1 x Zero Cal</strong>
                      </td>
                      <td class="text-end" >BDT. 200.00/-</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="card-footer">
                <table class="table" >
                  <tbody>
                    <tr>
                      <td class="border-0" >
                        <strong>Grand Total</strong>
                      </td>
                      <td class="text-end border-0" >
                        <b>BDT. 2,700.00/-</b>
                      </td>
                    </tr>
                  </tbody>
                </table> 
              </div>
            </div>
            <div class="card mt-3">
              {{-- <div class="card-body">
                <fieldset>
                  <legend>Payment Method</legend>
                  <div class="custom-control custom-radio mt-3">
                    <input id="cashDelivery" name="paymentMethod" type="radio" class="custom-control-input" checked />
                    <label class="custom-control-label" for="cashDelivery">Cash on Delivery</label>
                  </div>
                  <div class="d-flex mt-3 mb-2">
                    <div class="custom-control payment-icon custom-radio py-0 my-0">
                      <input id="creditCard" name="paymentMethod" type="radio" class="custom-control-input visually-hidden" value="option-1" />
                      <label class="custom-control-label" for="creditCard" title="Credit Card" >
                        <i class="far fa-credit-card pay-icon"></i>
                      </label>
                    </div>
                    <div class="custom-control payment-icon custom-radio py-0 my-0">
                      <input id="debitCard" name="paymentMethod" type="radio" class="custom-control-input visually-hidden" value="option-1" />
                      <label class="custom-control-label" for="debitCard" title="Debit Card" >
                        <i class="fas fa-credit-card pay-icon"></i>
                      </label>
                    </div>
                    <div class="custom-control payment-icon custom-radio py-0 my-0">
                      <input id="stripe" name="paymentMethod" type="radio" class="custom-control-input visually-hidden" value="option-1" />
                      <label class="custom-control-label" for="stripe" title="Stripe" >
                        <i class="fab fa-cc-stripe pay-icon"></i>
                      </label>
                    </div>
                    <div class="custom-control payment-icon custom-radio py-0 my-0">
                      <input id="masterCard" name="paymentMethod" type="radio" class="custom-control-input visually-hidden" value="option-1" />
                      <label class="custom-control-label" for="masterCard" title="Mastercard" >
                        <i class="fab fa-cc-mastercard pay-icon"></i>
                      </label>
                    </div>
                    <div class="custom-control payment-icon custom-radio py-0 my-0">
                      <input id="visaCard" name="paymentMethod" type="radio" class="custom-control-input visually-hidden" value="option-1" />
                      <label class="custom-control-label" for="visaCard" title="Visa" >
                        <i class="fab fa-cc-visa pay-icon"></i>
                      </label>
                    </div>
                    <div class="custom-control payment-icon custom-radio py-0 my-0">
                      <input id="americanExpress" name="paymentMethod" type="radio" class="custom-control-input visually-hidden" value="option-1" />
                      <label class="custom-control-label" for="americanExpress" title="Amrecian Express" >
                        <i class="fab fa-cc-amex pay-icon"></i>
                      </label>
                    </div>
                    <div class="custom-control payment-icon custom-radio py-0 my-0">
                      <input id="payPal" name="paymentMethod" type="radio" class="custom-control-input visually-hidden" value="option-1" />
                      <label class="custom-control-label" for="payPal" title="Paypal" >
                        <i class="fab fa-cc-paypal pay-icon"></i>
                      </label>
                    </div>
                  </div>
                  
                  <div class="row my-2">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="cc-name">Name on card</label>
                        <div class="input-group input-group-sm my-1">
                          <input type="text" class="form-control input-field" id="cc-name" placeholder="John Doe" disabled required />
                        </div>
                        <small class="text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback">
                          Name on card is required
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="cc-number">Credit card number</label>
                        <div class="input-group input-group-sm my-1">
                          <input type="text" class="form-control input-field text-center" id="cc-number" placeholder="XXXX-XXXX-XXXX-XXXX" maxlength="16" disabled required />
                        </div>
                        <div class="invalid-feedback">
                          Credit card number is required
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row my-2">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="cc-expiration">Expiration</label>
                        <div class="input-group input-group-sm my-1">
                          <input type="date" class="form-control input-field" id="cc-expiration" placeholder="" disabled required />
                        </div>
                        <div class="invalid-feedback">
                          Expiration date required
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="cc-cvv">CVV</label>
                        <div class="input-group input-group-sm my-1">
                          <input type="text" class="form-control input-field text-center" id="cc-cvv" placeholder="XXXX" maxlength="4" disabled required />
                        </div>
                        <div class="invalid-feedback">
                          Security code required
                        </div>
                      </div>
                    </div>
                  </div>
                </fieldset>
              </div> --}}
              <div class="card-footer">
                <div class="d-grid">
                  <button type="submit" class="btn btn-outline-primary" >Place Your Order</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
</main>
<!-- FOOTER WIDGETS -->
{{-- <section class="py-5" style="background-color: rgb(228, 227, 227);" >
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
        <div class="position-relative">
          <img src="./assets/images/logo.png" width="250" alt="">
          <p class="text-justify text-xs mt-2 mb-3">
            "Shop fresh groceries from the comfort of your home with Groceria - your one-stop online grocery store. Easy ordering, fast delivery, and quality products guaranteed."
          </p>
          <div class="footer-info">
            <p class="text-xs py-0 my-1">
              <span>
                <i class="fas fa-phone"></i>
              </span>
              <span class="ps-3 pe-2">:</span>
              <span>+88 (012) 34-567890</span>
            </p>
            <p class="text-xs py-0 my-1">
              <span>
                <i class="fas fa-envelope"></i>
              </span>
              <span class="ps-3 pe-2">:</span>
              <span>info@example.com</span>
            </p>
            <p class="text-xs py-0 my-1">
              <span>
                <i class="fas fa-location-dot"></i>
              </span>
              <span class="ps-3 pe-2">:</span>
              <span>Mirpur, Dhaka-1216</span>
            </p>
          </div><!-- /.footer-info -->
        </div>
      </div><!-- /.col -->
      <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
        <div class="row">
          <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <!-- Widget -->
            <div class="widget">
              <h6>Informations</h6>
              <ul class="navbar-nav text-xs mt-3">
                <a href="./info/index.html" class="nav-link py-1">
                  <i class="fas fa-hand-point-right"></i>
                  <span class="ps-2">Disclaimer</span>
                </a><!-- /.nav-link -->
                <a href="./blog/index.html" class="nav-link py-1">
                  <i class="fas fa-hand-point-right"></i>
                  <span class="ps-2">Blog Page</span>
                </a><!-- /.nav-link -->
                <a href="./info/terms.html" class="nav-link py-1">
                  <i class="fas fa-hand-point-right"></i>
                  <span class="ps-2">Terms of Service</span>
                </a>
                <!-- /.nav-link -->
                <a href="./info/faq.html" class="nav-link py-1">
                  <i class="fas fa-hand-point-right"></i>
                  <span class="ps-2">F.A.Q</span>
                </a><!-- /.nav-link -->
              </ul><!-- /.navbar-nav -->
            </div><!-- /.widget -->
          </div><!-- /.col -->
          <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <!-- Widget -->
            <div class="widget">
              <h6>Featured</h6>
              <ul class="navbar-nav text-xs mt-3">
                <a href="category.html" class="nav-link py-1">
                  <i class="fas fa-hand-point-right"></i>
                  <span class="ps-2">Home & Cleaning</span>
                </a><!-- /.nav-link -->
                <a href="category.html" class="nav-link py-1">
                  <i class="fas fa-hand-point-right"></i>
                  <span class="ps-2">Beauty Products</span>
                </a><!-- /.nav-link -->
                <a href="category.html" class="nav-link py-1">
                  <i class="fas fa-hand-point-right"></i>
                  <span class="ps-2">Kitchen Appliances</span>
                </a><!-- /.nav-link -->
                <a href="category.html" class="nav-link py-1">
                  <i class="fas fa-hand-point-right"></i>
                  <span class="ps-2">Health Products</span>
                </a><!-- /.nav-link -->
              </ul><!-- /.navbar-nav -->
            </div><!-- /.widget -->
          </div><!-- /.col -->
          <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <!-- Widget -->
            <div class="widget">
              <h6>Our Policies</h6>
              <ul class="navbar-nav text-xs mt-3">
                <a href="./policy/index.html" class="nav-link py-1">
                  <i class="fas fa-hand-point-right"></i>
                  <span class="ps-2">Privacy Policy</span>
                </a><!-- /.nav-link -->
                <a href="./policy/shipping.html" class="nav-link py-1">
                  <i class="fas fa-hand-point-right"></i>
                  <span class="ps-2">Shipping Policy</span>
                </a><!-- /.nav-link -->
                <a href="./policy/return.html" class="nav-link py-1">
                  <i class="fas fa-hand-point-right"></i>
                  <span class="ps-2">Return Policy</span>
                </a><!-- /.nav-link -->
                <a href="./policy/refund.html" class="nav-link py-1">
                  <i class="fas fa-hand-point-right"></i>
                  <span class="ps-2">Refund Policy</span>
                </a><!-- /.nav-link -->
              </ul><!-- /.navbar-nav -->
            </div><!-- widget -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.col -->
      <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
        <div class="newsletter">
          <h5>Subscribe for Newsletter</h5>
          <form action="" class="form-floating" >
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" placeholder="John Doe" />
              <label for="name">Full Name</label>
            </div><!-- /.form-floating -->
            <div class="form-floating">
              <input type="email" class="form-control" id="email" placeholder="someone@example.com" />
              <label for="email">Email Address</label>
            </div><!-- /.form-floating -->
            <div class="btn-group d-grid mt-3">
              <button type="submit" class="btn btn-outline-primary" >
                <i class="fas fa-envelope"></i>
                <span class="ps-2">Subscribe</span>
              </button><!-- /.btn -->
            </div><!-- /.btn-group -->
          </form><!-- /.form-floating -->
        </div><!-- /.newsletter -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section> --}}
<!-- ./footer-widgets -->

<!-- FOOTER BAR -->
{{-- <footer class="py-2" style="background-color: rgb(228, 227, 227);">
  <div class="container d-md-flex footer-bar align-items-center">
    <div class="d-flex flex-wrap align-items-center">
      <p class="py-0 my-0">
        <span>2023</span>
        <span class="ps-1 pe-1">|</span>
        <span class="pe-1">Created By :</span>
        <a href="https://www.shawon-khan.com" style="text-decoration: none;" target="_blank">Shawon Khan</a>
      </p>
    </div>
    <div class="d-flex social-media flex-wrap align-items-center">
      <a href="https://www.facebook.com/shawonkhan.cupid" class="btn btn-outline-secondary rounded-circle" target="_blank">
        <i class="fab fa-facebook-f"></i>
      </a><!-- /.btn -->
      <a href="https://www.twitter.com/shawonk9999" class="btn btn-outline-secondary rounded-circle" target="_blank">
        <i class="fab fa-twitter"></i>
      </a><!-- /.btn -->
      <a href="https://www.linkedin.com/in/shawonkhan007" class="btn btn-outline-secondary rounded-circle" target="_blank">
        <i class="fab fa-linkedin-in"></i>
      </a><!-- /.btn -->
      <a href="https://www.instagram.com/shawonk9999" class="btn btn-outline-secondary rounded-circle" target="_blank">
        <i class="fab fa-instagram"></i>
      </a><!-- /.btn -->
      <a href="https://www.behance.com/shawonk9999" class="btn btn-outline-secondary rounded-circle" target="_blank">
        <i class="fab fa-behance"></i>
      </a><!-- /.btn -->
      <a href="https://www.github.com/Iamcupid" class="btn btn-outline-secondary rounded-circle" target="_blank">
        <i class="fab fa-github"></i>
      </a><!-- /.btn -->
    </div>
  </div><!-- /.footer-bar -->
</footer> --}}

{{-- This is my page design --}}

  {{-- <div class="py-5"></div> --}}
    {{-- <div class="container my-5 py-5">

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
    
    </div>  --}}
@endsection

