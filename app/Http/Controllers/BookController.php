<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function book()
    {
        //  return view('admin.booking_table.index');
    }
    public function chefs()
    {
        return view('chefs');
    }
    public function cart()
    {
        return view('cart');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function invoice()
    {
        return view('invoice');
    }
}
