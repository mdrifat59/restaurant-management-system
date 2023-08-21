@extends('layouts.master')


 {{-- Section Start  --}}

 @section('content')
 @php
     $cart_array=cartArray()
 @endphp
 <h3>Your Cart Items</h3>
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
                      <tbody id="data"> 

                        {{-- <tr>
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
                            <p class="mb-0" style="font-weight: 500;">BDT. 9.99</p>
                          </td>
                        </tr>
                        <tr> --}}
                          @foreach ($cart_array as $cart_show)
                              
                         
                          <th scope="row" class="border-bottom-0">
                            <div class="d-flex align-items-center">
                              <img src="https://i.imgur.com/Oj1iQUX.webp" class="img-fluid rounded-3"
                                style="width: 120px;" alt="Book">
                              <div class="flex-column ms-4">
                                <p class="mb-2">{{$cart_show['name']}}</p>
                                {{-- <p class="mb-0">{{$cart_show['description']}}</p> --}}
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
          
                              {{-- <input id="form1" min="0" name="quantity" value="1" type="number"
                                class="form-control form-control-sm" style="width: 50px;" /> --}}
                                <div class="qty form-control form-control-sm" style="width: 50px;"><?= count($cart_array) ?></div>
          
                              <button class="btn btn-link px-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                <i class="bi bi-plus btn btn-outline-info text-dark"></i>
                              </button>
                            </div>
                          </td>
                          <td class="align-middle border-bottom-0">
                            <p class="mb-0" style="font-weight: 500;">BDT {{$cart_show['price']}}</p>
                          </td>
                        </tr>
                         @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="3"></th>
                          <th colspan="2">
                              Total : <span id="total">{{Cart::getTotal()}}</span>
                          </th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
                <!-- start commit -->
                {{-- <div class="col-3 bg-secondary">
                  <div class="">
                    <div class="d-flex justify-content-between" style="font-weight: 500;">
                      <p class="mb-2">Subtotal</p>
                      <p class="mb-2">BDT. 23.49</p>
                    </div>
    
                    <div class="d-flex justify-content-between" style="font-weight: 500;">
                      <p class="mb-0">Shipping</p>
                      <p class="mb-0">BDT. 2.99</p>
                    </div>
    
                    <hr class="my-4">
    
                    <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                      <p class="mb-2">Total (tax included)</p>
                      <p class="mb-2">BDT. 26.48</p>
                    </div> --}}
    
                    {{-- <button type="button" class="btn btn-primary btn-block btn-lg" >
                      <div class="d-flex justify-content-between">
                        <span><a href="{{url('/checkout')}}">Checkout </a> </span>
                        <span>$26.48</span>
                      </div>
                    </button> --}}
                    {{-- <div class="text-center">
                      <span><a href="{{url('/checkout')}}" class="btn btn-dark btn-rounded back-button">Checkout  </a></span>
                      <span>BDT. 26.48</span>
                    </div>
    
                  </div>
                </div>
                 --}}

                <!-- end commit -->
              </div>
               
               
      
            </div>
          </div>
        </div>
      </section>
 </div>

 {{-- <script>
  $(document).ready(function () {
    let c = new Cart();
    // c.emptyCart();
    console.log(c.items)
    $("#cartbadge").attr("value", c.totalItems());

    $(".addCartIcon").click(function(){
      $t = $(this);
      let i = {
        id: $t.data("pid"),
        name: $t.data("pname"),
        price: $t.data("pprice"),
        quantity: 1,
      };
      c.addItem(i);
      talk("Item Added To Cart");
      Swal.fire({
position: 'top-end',
icon: 'success',
title: 'Item Added To Cart',
showConfirmButton: false,
timer: 1500
}).then(()=>{
        $("#cartbadge").attr("value", c.totalItems());
        console.log(c.items);
      });
      
      // console.log($(this).data('pid'));
    });
  });
</script> 
<script>

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
</script>  --}}
     
 @endsection

 