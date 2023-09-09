<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (auth()->check()) {
            $userId = null;
            $userName = null;

            $user = Auth::user();

            if ($user) {
                $userId = $user->id;
                $userName = $user->name;
                $userEmail = $user->email;
            }

            return view('cart', [
                'userId' => $userId,
                'userName' => $userName,
                'userEmail' => $userEmail
            ]);
        }

        return redirect()->route('register');

      
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
        //...... order........

        $user_id = $request->input('user_id');
        $total = $request->input('total');
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

        //...... order_details........

        if ($order) {
            $orders = $request->input('orders', []);
            $details = [];

            foreach ($orders as $row) {
                $food_id = $row['food_id'];
                $qty = $row['qty'];


                $details[] = [
                    'order_id' => $order->id,
                    'food_id' => $food_id,
                    'quantity' => $qty,
                ];
            }


            OrderDetail::insert($details);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Order created successfully!',

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
