@extends('layouts.admin')

@section('content')
{{-- table show --}}
<div class="container">
    <table class="table table-dark table-striped table-hover container">
        <thead>
            <tr>
                <th scope="col">SL</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Event-Type</th>
                <th scope="col">Date</th>
                <th scope="col">Start_Time</th>
                <th scope="col">Participant</th>
                <th scope="col">Transaction_ID</th>
                <th scope="col">Status</th>
                <th scope="col">Admin Massage</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($booking as $book) 
                <tr style="color: black">
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $book->title}}</td>
                    <td>{{ $book->email}}</td>
                    <td>{{ $book->phone}}</td>
                    <td>{{ $book->even_type}}</td>
                    <td>{{ $book->date}}</td>
                    <td>{{ $book->start_time}}</td>
                    <td>{{ $book->participant}}</td>
                    <td>{{ $book->transaction_id}}</td>
                    <td> {{ $book->status}}</td>
                    <td>{{ $book->admin_massage}}</td> 
                    {{-- <td>{{ $book->created_at->diffforhumans() }}</td> --}}
                    <td class="d-flex align-items-center">
                        <a href="{{route('booking.edit', $book->id)}}"><i
                                class="bi bi-pencil-square text-info mr-2 "></i></a> |
                        <form action="#" method="POST">
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

</div>
    
@endsection