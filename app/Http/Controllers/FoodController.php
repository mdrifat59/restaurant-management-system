<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Http\Requests\StoreFoodRequest;
use App\Http\Requests\UpdateFoodRequest;
use App\Models\Category;
use App\Models\Subcategory;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categories = Category::all();
        $subcategories = Subcategory::all();
        $food=Food::with(["category","subcategory"])->get();
        // $food=Food::all();
        // dd($food);
        return view('admin.food.index',compact(['food','categories','subcategories']));
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
    public function store(StoreFoodRequest $request)
    {
        //
        // dd($request);  
         Food::create($request->all());
        return back()->with('success','store successfull');
    }

    /**
     * Display the specified resource.
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Food $food)
    {
        //
        $categorys=Category::all();
        $subcategorys=Subcategory::all();
        return view('admin.food.edit',compact('food','categorys','subcategorys'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFoodRequest $request, Food $food)
    {
        //
        $food->update($request->all());
        return redirect()->route('foods.index')->with('success','update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food)
    {
        //
        $food->delete();
        return redirect()->route('foods.index')->with('success','delete complete');
    }
}
