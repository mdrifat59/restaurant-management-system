@extends('layouts.admin')
@section('title')
    {{ 'category ' }}
@endsection
@section('content')
    <div class="row text-right d-flex justify-content-end mr-5 ">
        <div class="col-3 mt-5 mb-5">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Add Category
            </button>
        </div>
        <div class="col-1">

        </div>
    </div>

    <table class="table table-dark table-striped table-hover container">
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
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $category->title }}</td>
                    <td>
                        {{ $category->description }}
                    </td>
                    <td>{{ $category->created_at->diffforhumans() }}</td>
                    <td class="d-flex align-items-center">
                        <a href="{{ route('categorys.edit', $category->id) }}"><i
                                class="bi bi-pencil-square text-info mr-2 "></i></a> |
                        <form action="{{ route('categorys.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="#" onclick="del(event, this)">
                                <i class="bi bi-trash text-danger ml-2"></i>
                            </a>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">{{ __('No Data Found') }}</td>
                </tr>
            @endforelse
        </tbody>
    </table>


    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <form action="{{ route('categorys.store') }}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Category Add Form</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Category Title:</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Description:</label> <br>
                            <textarea name="description" id="" cols="50" rows="10"></textarea>
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
@section('script')
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script> --}}
    <script>
      function del(e,t){
        e.preventDefault();
        let c = confirm("Are you sure you want to delete?");
            if(!c) return;            
            t.closest('form').submit();
      }
    </script>

    
@endsection
