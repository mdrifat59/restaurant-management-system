<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function events()
    {
        return view('events');
    }
}
