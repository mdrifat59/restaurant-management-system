@extends('layouts.master')

@section('content')
<div class="py-5"></div>
<div class="py-5"></div>
<div class="container">
<h3>Your Cart Items</h3>
<table class="table table-responsive table-striped table-hover">
    <tr>
        <th class="text-light">Product ID</th>
        <th class="text-light">Product Name</th>
        <th class="text-light">Product Quantity</th>
        <th class="text-light">Product Price</th>        
        <th class="text-light">Total Price</th>        
        <th class="text-light">Action</th>
    </tr>
    <tbody id="data">

      
    </tbody>
    <tfoot>
      <tr>
        
      </tr>
        <tr>
            <th colspan="3"></th>
            <th colspan="2" class="text-light">
                Total : <span id="total"></span>
            </th> 
            
        </tr>
        {{-- <tr>
            <th colspan="4"></th>
            <td> --}}

                {{-- <a href="{{url('front/checkout')}}" class=" btn btn-outline-info">Checkout</a> --}}
                {{-- <button id="checkout-btn" class=" btn btn-outline-info">Checkout</button>
                <a href="{{ route('checkout.store')}}" target="_blank" class=" btn btn-outline-info">Checkout test</a>
              </td>
            </tr> --}}
       
    </tfoot>
</table>

<button id="top" type="button" class="btn btn-scroll-top" >
    <i class="fas fa-angle-up"></i>
  </button> 
  <!-- MAIN CONTENT -->
  <div class="py-5"></div>
  {{-- <h1 class="text-center">Checkout Page</h1> --}}
  <main>
    <section>
      <div class="container">
        <form action="{{url('/example2')}}" method="POST">
          @csrf
          <div class="row my-3">
            <div class="col-3"></div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-7 col-xl-7 col-xxl-7 p-2">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Checkout Form</h4>
                </div>
                <div class="card-body"> 
                  <hr>
                  <fieldset>
                    <legend>Shipping Information</legend>
                    <div class="form-group my-2">
                      <label for="name2">Full Name</label>
                      <div class="input-group input-group-sm my-1">
                        <span class="input-group-text" id="inputGroup-sizing-sm">
                          <i class="fas fa-user"></i>
                        </span>                                                                            
                        <input type="text" class="form-control" id="name2" placeholder="First Name" value="{{isset(Auth::user()->name) ? Auth::user()->name : ''}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"   />
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
                            <input type="email" class="form-control" id="email2" placeholder="someone@example.com" value="{{isset(Auth::user()->email) ? Auth::user()->email : ''}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"   />
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
                      <label for="addressOne2">Billing Address</label>
                      <div class="input-group input-group-sm my-1">
                        <input type="text" class="form-control" name="billing_address" id="bAddress" placeholder="1234 Main St" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"  />
                      </div>
                    </div>

                    <input id="userId" type="hidden" value="{{$userId}}">

                    <div class="form-group my-2">
                      <label for="addressTwo2">Shipping Address</label>
                      <div class="input-group input-group-sm my-1">
                        <input type="text" class="form-control" name="shipping_address" id="sAddress" placeholder="Apartment or Suite" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                      </div>
                    </div>
                    <div class="form-group my-2">
                      <label for="addressTwo2"> Comment :</label>
                      <div class="input-group input-group-sm my-1">
                        {{-- <input type="text" class="form-control" name="shipping_address" id="addressTwo2" placeholder="Apartment or Suite" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" /> --}}
                        <textarea name="comment" id="comment" cols="40" rows="3" placeholder="comment"></textarea>
                      </div>
                    </div>
                    <div class="card mt-5"> 
                      <div class="card-footer">
                        <div class="d-grid">
                          <button type="submit" id="orderbtn" class="btn btn-outline-primary" >Place Your Order</button>
                        </div>
                      </div>
                    </div>
                    {{-- <div class="row my-2">
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
                    </div> --}}
                  </fieldset>
                </div>
              </div>
            </div>
            <div class="col-3"></div>
            {{-- <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5 p-2">
              <div class="card">
                <div class="card-header">
                  <div class="card-title position-relative">
                    <h4 class="me-2">
                      <i class="fas fa-shopping-cart"></i>
                      <span class="ps-2">Cart Summary</span>
                    </h4> --}}
                    {{-- <a href="cart.html" class="btn btn-secondary btn-sm position-absolute" style="top: 0; right: 0;" >
                      <i class="fas fa-edit"></i>
                    </a> --}}
                  {{-- </div>
                </div> --}}
                {{-- <div class="card-body">
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
                </div> --}}
                {{-- <div class="card-footer">
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
                </div> --}}
                {{-- <table>
                  <tr>
                    <td class="text-dark">Total : <span id="total"></span></td> 
                  </tr>
                </table>
              </div> --}}
              {{-- <div class="card mt-3"> 
                <div class="card-footer">
                  <div class="d-grid">
                    <button type="submit" class="btn btn-outline-primary" >Place Your Order</button>
                  </div>
                </div>
              </div> --}}
            {{-- </div> --}}
          </div>
        </form>
      </div>
    </section>
  </main>

</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <script>
    $(document).ready(function () {
        let c = new Cart();
        let total = c.getTotalPrice();
        $("#total").html(total);    
        //console.table(c.items);
        $items = "";
        c.items.forEach(item => {
            $items += "<tr>";
            $items += "<td>"+item.id+"</td>";
            $items += "<td>"+item.name+"</td>";
            $items += "<td>"+item.quantity+"</td>";
            $items += "<td>"+item.price+"</td>";            
            $items += "<td> <a class='removeCart' data-pid='"+item.id+"'><i class='bi bi-trash'></i></a> </td>";
            $items += "</tr>";
        });        
        $("#data").html($items);
        //remove single cart item
        $("#data").on("click",'a.removeCart',function(){
            let cart = new Cart();
            talk("Are you sure you want to remove the item?");
            let c = confirm("Are you sure you want to remove");
            if(c){
                let pid = $(this).data("pid");
                cart.removeItem(pid);
                $(this).parent().parent().remove();
                $("#total").html(cart.getTotalPrice());
                talk("Item removed successfully from your cart");
            }
        });
    });
</script> --}}
