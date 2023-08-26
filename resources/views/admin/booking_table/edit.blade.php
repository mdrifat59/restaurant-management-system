@extends('layouts.admin')

 @section('content')
 <div class="container">
    <div class="row  justify-content-center ">
        <div class="col-5  align-items-center">
            <h3 class="mt-5 mb-5 text-center">Booking Table Update</h3>
         <form action="{{route('booking.update', $book->id)}}" class=" border border-success-subtle p-5" method="post">
            @csrf
            @method('put')
            <!-- Name input -->
            <div class="form-outline mt-5 mb-4">
                <label class="form-label" for="form4Example1">Title</label>
              <input type="text" id="form4Example1" name="title" value="{{$book->title}}" class="form-control" />
            </div>
            <div class="form-outline mt-5 mb-4">
                <label class="form-label" for="form4Example1">Status</label>
                <select class="form-select border border-warning bg-dark text-light border-1" name="status" aria-label="Disabled select example" >
                    <option >Status</option>
                    <option value="Pending">Pending</option>
                    <option value="Conform">Conform</option>
                    <option value="Cencel">Cencel</option> 
                  </select> 
            </div>
            <div class="form-outline mt-5 mb-4">
                <label class="form-label" for="form4Example1">Transaction_ID</label> 
                <input type="text" class="form-control border border-warning bg-dark text-light border-1" name="transaction_id" value="{{$book->transaction_id}}"   placeholder="Transaction_id" >
            </div>
            <div class="form-outline mt-5 mb-4">
                <label class="form-label" for="form4Example1">Admin Massage</label> 
                <input type="text" class="form-control border border-warning bg-dark text-light border-1" name="admin_massage" value="{{$book->admin_massage}}"   placeholder="Admin Massage" >
            </div>   
           
           
            <!-- Submit button -->
            <div class="footer d-flex justify-content-between">
            {{-- <a href="{{route('booking.index')}}" class="btn btn-primary   mb-4">CENCEL</a> --}}
            <button type="submit" class="btn btn-primary right mb-4">update</button>
        </div>
        </form>
    </div>
    </div>
</div> 
 @endsection