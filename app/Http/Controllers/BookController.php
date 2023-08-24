<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function book()
    {
        return view('book_table');
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
    public function special()
    {
        return view('special');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function contact()
    {
        return view('contact');
    }
}
