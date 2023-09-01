<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        if ($order) {
            $orders = $request->input('orders', []);
            $details = [];

            foreach ($orders as $row) {
                $menu_id = $row['menu_id'];
                $qty = $row['qty'];


                $details[] = [
                    'order_id' => $order->id,
                    'menu_id' => $menu_id,
                    'quantity' => $qty,
                ];
            }


            Order_details::insert($details);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Order created successfully!',

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderDetail $orderDetail)
    {
        //
    }
}
