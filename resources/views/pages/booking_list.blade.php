@extends('pages.booking_layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><b>Booking Event List</b></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('booking_register') }}"> Register New Booking</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered"><table class="table table-bordered">
        <tr style="background-color:#008080; color:white">
            <th>Order ID #</th>
            <th>Client Name</th>
            <th>Contact Number</th>
            <th>Event Name</th>
            <th>Job Status</th>
            <th width="350px">Action</th>
        </tr>
        @foreach ($booking as $b)
        <tr style="background-color:white">
            <td>{{ $b->booking_id }}</td>
            <td>{{ $b->name}}</td>
            <td>{{ $b->contact_number}}</td>
            <td>{{ $b->event_name}}</td>
            <td>{{ $b->status}}</td>
            <td>
                <form action="{{ route('booking_destroy',$b->booking_id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('booking_show',$b->booking_id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('booking_edit',$b->booking_id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $booking->links() !!}
      
@endsection