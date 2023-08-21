<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use Cart;

class CartController extends Controller
{
    public function add_to_cart(Request $request){
        $quantity=$request->quantity;
        $id=$request->id;
        $food=Food::where('id',$id)->first();
        $data['quantity']=$quantity;
        $data['id']=$food->id;
        $data['name']=$food->name;
        $data['price']=$food->price;
        $data['description']=$food->description;

        Cart::add($data);
        
        cartArray();
        return redirect()->back();
    }
}
