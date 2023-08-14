@extends('layouts.master')


 {{-- Section Start  --}}

 @section('content')
 <div>
    <section class="h-100 h-custom">
        <div class="container h-100 py-5">
          <div class="row d-flex justify-content-center align-items-center h-100 ">
            <div class="col">
              <div class="row">
                <div class="col-9">
                  <div class="table-responsive">
                    <table class="table bg-light">
                      <thead>
                        <tr>
                          <th scope="col" class="h5">Shopping Bag</th>
                          <th scope="col">Format</th>
                          <th scope="col">Quantity</th>
                          <th scope="col">Price</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">
                            <div class="d-flex align-items-center">
                              <img src="https://i.imgur.com/2DsA49b.webp" class="img-fluid rounded-3"
                                style="width: 120px;" alt="Book">
                              <div class="flex-column ms-4">
                                <p class="mb-2">Thinking, Fast and Slow</p>
                                <p class="mb-0">Daniel Kahneman</p>
                              </div>
                            </div>
                          </th>
                          <td class="align-middle">
                            <p class="mb-0" style="font-weight: 500;">Digital</p>
                          </td>
                          <td class="align-middle">
                            <div class="d-flex flex-row">
                              <button class="btn btn-link px-2 "
                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                <i class="bi bi-dash btn btn-outline-info text-dark"></i>
                              </button>
          
                              <input id="form1" min="0" name="quantity" value="2" type="number"
                                class="form-control form-control-sm" style="width: 50px;" />
          
                              <button class="btn btn-link px-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                <i class="bi bi-plus btn btn-outline-info text-dark"></i>
                              </button>
                            </div>
                          </td>
                          <td class="align-middle">
                            <p class="mb-0" style="font-weight: 500;">$9.99</p>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row" class="border-bottom-0">
                            <div class="d-flex align-items-center">
                              <img src="https://i.imgur.com/Oj1iQUX.webp" class="img-fluid rounded-3"
                                style="width: 120px;" alt="Book">
                              <div class="flex-column ms-4">
                                <p class="mb-2">Homo Deus: A Brief History of Tomorrow</p>
                                <p class="mb-0">Yuval Noah Harari</p>
                              </div>
                            </div>
                          </th>
                          <td class="align-middle border-bottom-0">
                            <p class="mb-0" style="font-weight: 500;">Paperback</p>
                          </td>
                          <td class="align-middle border-bottom-0">
                            <div class="d-flex flex-row">
                              <button class="btn btn-link px-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                <i class="bi bi-dash btn btn-outline-info text-dark"></i>
                              </button>
          
                              <input id="form1" min="0" name="quantity" value="1" type="number"
                                class="form-control form-control-sm" style="width: 50px;" />
          
                              <button class="btn btn-link px-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                <i class="bi bi-plus btn btn-outline-info text-dark"></i>
                              </button>
                            </div>
                          </td>
                          <td class="align-middle border-bottom-0">
                            <p class="mb-0" style="font-weight: 500;">$13.50</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-3 bg-secondary">
                  <div class="">
                    <div class="d-flex justify-content-between" style="font-weight: 500;">
                      <p class="mb-2">Subtotal</p>
                      <p class="mb-2">$23.49</p>
                    </div>
    
                    <div class="d-flex justify-content-between" style="font-weight: 500;">
                      <p class="mb-0">Shipping</p>
                      <p class="mb-0">$2.99</p>
                    </div>
    
                    <hr class="my-4">
    
                    <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                      <p class="mb-2">Total (tax included)</p>
                      <p class="mb-2">$26.48</p>
                    </div>
    
                    <button type="button" class="btn btn-primary btn-block btn-lg">
                      <div class="d-flex justify-content-between">
                        <span>Checkout</span>
                        <span>$26.48</span>
                      </div>
                    </button>
    
                  </div>
                </div>
              </div>
               
               
      
            </div>
          </div>
        </div>
      </section>
 </div>
     
 @endsection

 