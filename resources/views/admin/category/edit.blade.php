@extends('layouts.admin')
@section('title')
    {{('Edit-Category ')}}
@endsection
@section('content')

{{-- <div class="row text-right d-flex justify-content-end mr-5 ">
    <div class="col-3 mt-5 mb-5">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Add Category 
      </button> 
    </div>
    <div class="col-1">

    </div>
</div> --}}
 
{{-- <table class="table table-dark table-striped table-hover container">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Title</th>
      <th scope="col">Discription</th>
      <th scope="col">Created Time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($categorys as $category)
        <tr style="color: black">
          <td scope="row">{{$loop->iteration}}</td>
          <td>{{$category->title}}</td>
          <td>
             {{$category->description}}
          </td>
          <td>{{$category->created_at->diffforhumans()}}</td>
          <td><a href="#"><i class="bi bi-pencil-square text-info mr-2"></i></a> | <a href="#"><i class="bi bi-trash text-danger ml-2"></i></a></td>
        </tr>
    @empty
        <tr>
          <td colspan="6" class="text-center">{{__('No Data Found')}}</td>
        </tr>
    @endforelse 
  </tbody>
</table> --}}


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