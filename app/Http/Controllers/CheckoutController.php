<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request; 
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use PhpParser\Node\Stmt\TryCatch;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // try {
        //     $userOrder = Order::create([
        //         'status' => 'pending',
        //         'user_id' => 1
        //     ]);

        // } catch (\Exception $e) {
        //     dd($e);
        // }


        $users= User::all();
;        return view('checkout',compact('users'));
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
    // public function store(Request $request)
    public function store(Request $request)
    {
        $data = $request->all();
       
        $orderData = Order::create([
            'user_id' => Auth::user()->id,
            'status' => 'Pending'
        ]);
        // $orderData = Auth::user()->order->create([
        //     'date' => new Date(),
        //     'user_id' => Auth::user()->id,
        //     'status' => 'Pending'
        // ]);

        return response()->json(['msg' => $request->all()]);
        // return redirect()->route('front/checkout');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
