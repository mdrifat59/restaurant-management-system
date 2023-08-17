<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu(){
        $categories = Category::all();
        return view ('menu', compact('categories'));
    }
}
