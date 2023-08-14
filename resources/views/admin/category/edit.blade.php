@extends('layouts.admin')
@section('title')
    {{('Edit-Category ')}}
@endsection
@section('content')
 


    <!-- Button trigger modal -->


<!-- Modal --> 
    <div class="container">
        <div class="row  justify-content-center ">
            <div class="col-5  align-items-center">
                <h3 class="mt-5 mb-5 text-center">Category Update</h3>
             <form action="{{route('categorys.update',$category->id)}}" class=" border border-success-subtle p-5" method="post">
                @csrf
                @method('put')
                <!-- Name input -->
                <div class="form-outline mt-5 mb-4">
                    <label class="form-label" for="form4Example1">Title</label>
                  <input type="text" id="form4Example1" name="title" value="{{$category->title}}" class="form-control" />
                </div>
              
                <!-- Email input -->
                <div class="form-outline mb-5">
                    <label class="form-label" for="form4Example2"> Description</label> <br>
                    <textarea name="description" id="" cols="50"  rows="10">{{$category->description}}</textarea>
                </div>
               
                <!-- Submit button -->
                <div class="footer d-flex justify-content-between">
                <a href="{{route('categorys.index')}}" class="btn btn-primary   mb-4">CENCEL</a>
                <button type="submit" class="btn btn-primary right mb-4">update</button>
            </div>
            </form>
        </div>
        </div>
    </div> 

      
     
@endsection