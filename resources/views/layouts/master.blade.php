<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title') | {{ config('app.name') }}</title>
      {{-- CSRF --}}
      <meta name="csrf-token" content="{{ csrf_token() }}">

    
  <meta content="" name="description">
  <meta content="" name="keywords">
    

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
@yield('style')
  <!-- =======================================================
  * Template Name: Restaurantly - v3.1.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  @include('partials.front.topbar')

  @include('partials.front.header')

  @yield('hero')

  @yield('content')

  @include('partials.front.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center d-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('js/cart.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- jquery cnd -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

  <script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>




<script>
   var cart = new Cart();
$(document).ready(function(){

$("#cartbadge").html(cart.totalItems());



$(".addCartIcon").click(function(){ 
  $t = $(this); 
  let i = {
    id: $t.data("pid"),
    name: $t.data("pname"),
    price: $t.data("pprice"),
    quantity: 1,
  };
  cart.addItem(i);
  alert("Food add to cart");
});
$("#cartbadge").html(cart.totalItems());


 
  let total = cart.getTotalPrice();
    $("#total").html(total); 
    $items = "";
    cart.items.forEach(item => {
        $items += "<tr>";
            $items += "<td class='text-light'>" + item.id + "</td>";
            $items += "<td class='text-light'>" + item.name + "</td>";
            $items += "<td><input class='pq ' type='number' value='" + item.quantity + "'></td>";
            $items += "<td class='pp text-light'>" + item.price + "</td>";
            $items += "<td class='pnp text-light'>" + (item.price * item.quantity) + "</td>";
            $items += "<td class='text-light'> <a class='removeCart' data-pid='" + item.id + "'><i class='bi bi-trash'></i></a> </td>";
            $items += "</tr>";
    });   
    $("#data").html($items);
    
    function total_amount() {
            let tm = 0;
            $.each($(".pnp"), function(i, e) {
                tm += Number(e.innerHTML);
            });
            $("#total").html(tm);
        }
         //change quantity
         $("#data").on('change', ".pq", function() {
            let $t = $(this);
            let q = $t.val();
            let p = $t.parent().parent().find('.pp').html();
            //console.log(p);
            let pnp = q * p;
            $(this).parent().parent().find('.pnp').html(pnp);
            total_amount();
        })
    $("#data").on("click",'a.removeCart',function(){
        let cart = new Cart();
       
        let c = confirm("Are you sure you want to remove");
        if(c){
            let pid = $(this).data("pid");
            cart.removeItem(pid);
            $(this).parent().parent().remove();
            $("#total").html(cart.getTotalPrice());
            talk("Item removed successfully from your cart");
        }
    });

    $('#checkout-btn').click(function(e) {
        // console.log(JSON.parse(localStorage.cartItems));
        let cartData = JSON.parse(localStorage.cartItems);
        // console.log(localStorage.cartItems);
        $.ajax({
            url: "http://127.0.0.1:8000/api/hello",
            type: "post",
            data: {data: [...cartData]},
            dataType: "json",
            success: function (response) {
                console.log('data send success', response);
            },
            error: function (xhr, status, error ) {
                console.log('Error ', error);
            }
        });
    })

}); 


$(document).on('click', '#orderbtn', function(event) {
            event.preventDefault();

            // alert("hi");

            let cart = new Cart();
            let items = cart.getItems();
            let order = [];

            items.forEach(e => {
                let food_id = e.id;
                let name = e.name;
                let price = e.price;
                let qty = e.quantity;


                order.push({
                  food_id: food_id,
                    name: name,
                    price: price,
                    qty: qty
                })
                // console.log(order);
            })

            var user_id = $('#userId').val();
            let total = cart.getTotalPrice();
            let status = "pending";
            // alert(total)


            $.ajax({
                url: "{{ route('order.store') }}",
                type: 'post',
                data: {
                    orders: order,
                    total: total,
                    comment: $('#comment').val(),
                    bAddress: $('#bAddress').val(),
                    sAddress: $('#sAddress').val(),
                    user_id: user_id,
                    status: 'pending',

                },
                success: function(response) {

                    if (response.status === 'success') {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: response.message,
                            showConfirmButton: false,
                            timer: 1500,
                            customClass: {
                                container: 'custom-swal-container',
                            },
                        }).then(() => {
                            cart.emptyCart();
                            location.reload();
                        });
                    }

                },
                error: function(xhr, status, error) {

                    console.error(xhr.responseText);
                }
            });
          
          
          
          })




</script>

  

  @yield('script')
  <!--  sslcommerz ar script file  -->
  <script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>
{{-- sslcommer ar script file --}}
<script>
  var obj = {};
  obj.cus_name = $('#customer_name').val();
  obj.cus_phone = $('#mobile').val();
  obj.cus_email = $('#email').val();
  obj.cus_addr1 = $('#address').val();
  obj.amount = $('#total_amount').val();

  $('#sslczPayBtn').prop('postdata', obj);

  (function (window, document) {
      var loader = function () {
          var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
          // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
          script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR SANDBOX
          tag.parentNode.insertBefore(script, tag);
      };

      window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
  })(window, document);
</script>

</body>

</html>