@extends('layouts.master')

@section('content')

<h3>Your Cart Items</h3>
<table class="table table-responsive table-striped table-hover">
    <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Product Quantity</th>
        <th>Product Price</th>        
        <th>Action</th>
    </tr>
    <tbody id="data">
        
    </tbody>
    <tfoot>
        <tr>
            <th colspan="3"></th>
            <th class="text-light" colspan="2">
                Total : <span id="total"></span>
            </th>
        </tr> 
    </tfoot>
</table>
<div class="container">
    <div class="row"> 
        <div class="col">
            <a href="#" class="btn btn-outline-success float-end mb-3">Proceed To Checkout</a>
        </div> 
    </div> 
</div>
    
@endsection

@section('script')
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
            $items += "<td class='text-light'>"+item.id+"</td>";
            $items += "<td class='text-light'>"+item.name+"</td>";
            $items += "<td class='text-light'>"+item.quantity+"</td>";
            $items += "<td class='text-light'>"+item.price+"</td>";            
            $items += "<td class='text-light'> <a class='removeCart' data-pid='"+item.id+"'><i class='bi bi-trash'></i></a> </td>";
            $items += "</tr>";
        });   
        $("#data").html($items);
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
    }); 
</script>
    
@endsection