<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu(){
        $categories = Category::all();
        $subcategory=Subcategory::all();
        $food=Food::all();
        return view ('menu', compact('categories','subcategory','food'));
    }
}
