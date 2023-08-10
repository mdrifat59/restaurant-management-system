@extends('layouts.admin')
@section('title')
    {{('Employee Add')}}
@endsection
@section('content')

<div class="row">
    <div class="col m-5">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Role Add
      </button>

    </div>
</div>
 



    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <form action="{{ route('roles.store') }}" method="post">
        @csrf
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Role Add Form</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Role Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
           <div class="mb-3">
            <label for="" class="form-label">Status</label>
            <select name="status" class="form-select" aria-label="Default select example">
              <option selected>Open this select menu</option>
              <option value="1">Enable</option>
              <option value="2">Disable</option> 
            </select>
           </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submint</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection