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
            <th colspan="3"></th>
            <th colspan="2" class="text-light">
                Total : <span id="total"></span>
            </th> 
            
        </tr>
        <tr>
            <th colspan="4"></th>
            <td>

                {{-- <a href="{{url('front/checkout')}}" class=" btn btn-outline-info">Checkout</a> --}}
                <button id="checkout-btn" class=" btn btn-outline-info">Checkout</button>
                <a href="{{ route('checkout.store')}}" target="_blank" class=" btn btn-outline-info">Checkout test</a>
            </td>
        </tr>
    </tfoot>
</table>

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
<script>
    $(document).ready(function(){
        let c = new Cart();
        let total = c.getTotalPrice();
        $("#total").html(total); 
        $items = "";
        c.items.forEach(item => {
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
        //total amount
        // console.log($items);
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
            // talk("Are you sure you want to remove the item?");
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


    


</script>