<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('order');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_id = $request->input('user_id');
        $total = $request->input('grandtotal');
        $status = $request->input('status');
        $billing_address = $request->input('bAddress');
        $shipping_address = $request->input('sAddress');
        $comment = $request->input('comment');


        $order = Order::create([
            'user_id' => $user_id,
            'status' => $status,
            'total' => $total,
            'billing_address' => $billing_address,
            'shipping_address' => $shipping_address,
            'comment' => $comment,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
