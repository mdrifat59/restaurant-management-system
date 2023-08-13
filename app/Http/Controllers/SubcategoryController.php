<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Http\Requests\StoreSubcategoryRequest;
use App\Http\Requests\UpdateSubcategoryRequest;
use App\Models\Category;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $subcategorys=subcategory::all();
        $categorys=Category::all();
        return view('admin.subcategory.index',compact(['subcategorys','categorys']));
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
    public function store(StoreSubcategoryRequest $request)
    {
        //
        // dd($request);
        Subcategory::create($request->all());
        return back()->with('successs','subcategory create successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subcategory $subcategory)
    {
        //
        return view('admin.subcategory.edit',compact('subcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubcategoryRequest $request, Subcategory $subcategory)
    {
        //
        $subcategory->update($request->all());
        return redirect()->route('subcategorys.index')->with('success','update successfull');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory)
    {
        //
         $subcategory->delete();
         return redirect()->route('subcategorys.index')->with('success','delete complete');
    }
}
