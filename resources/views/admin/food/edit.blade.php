@extends('layouts.admin')
@section('title')
    {{ 'Subcategory ' }}
@endsection
@section('content')

<div class="container">
    <div class="row  justify-content-center ">
        <div class="col-5  align-items-center">
            <h3 class="mt-5 mb-5 text-center">Category Update</h3>
         <form action="{{route('foods.update',$food->id)}}" class=" border border-success-subtle p-5" method="post">
            @csrf
            @method('put')
            <!-- Name input -->
            <div class="form-outline mt-5 mb-4">
                <label class="form-label" for="form4Example1">Title</label>
              <input type="text" id="form4Example1" name="title" value="{{$food->title}}" class="form-control" />
            </div>
            <div class="mb-3">
                <label for="">Choose a  Category</label>
                <select name="cat_id" class="form-select" aria-label="Default select example">
                    @forelse ($categorys as $category)
                    <option value="{{$category->id}}" {{$category->id === $food->cat_id ? 'selected' : ''}}>{{$category->title}}</option>
                    @empty
                    <option selected>NO Option here</option> 
                        
                    @endforelse
                  </select>
            </div>
            <div class="mb-3">
                <label for="">Choose a  SubCategory</label>
                <select name="cat_id" class="form-select" aria-label="Default select example">
                    @forelse ($subcategorys as $subcategory)
                    <option value="{{$subcategory->id}}" {{$subcategory->id === $food->subcat_id ? 'selected' : ''}}>{{$subcategory->title}}</option>
                    @empty
                    <option selected>NO Option here</option> 
                        
                    @endforelse
                  </select>
            </div>
            <div class="form-outline mt-5 mb-4">
                <label class="form-label" for="form4Example1">Price</label>
              <input type="text" id="form4Example1" name="price" value="{{$food->price}}" class="form-control" />
            </div>
          
            <!-- Email input -->
            <div class="form-outline mb-5">
                <label class="form-label" for="form4Example2"> Description</label> <br>
                <textarea name="description" id="" cols="50"  rows="10">{{$food->description}}</textarea>
            </div>
           
            <!-- Submit button -->
            <div class="footer d-flex justify-content-between">
            <a href="{{route('foods.index')}}" class="btn btn-primary   mb-4">CENCEL</a>
            <button type="submit" class="btn btn-primary right mb-4">update</button>
        </div>
        </form>
    </div>
    </div>
</div> 



@endsection
