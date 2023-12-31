<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $booking=Booking::all();
        return view('admin.booking_table.index',compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('book_table');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingRequest $request)
    {
        Booking::create($request->all());
        return back()->with('success','Booking successfull');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
         //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        // $booking=Booking::all();
        // dd($booking); 
        // return view('admin.booking_table.edit',compact('booking'));
        return view('admin.booking_table.edit')->with('book',$booking);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
         $booking->update($request->all());
        return redirect()->route('booking.index')->with('success','update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
