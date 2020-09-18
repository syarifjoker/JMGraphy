@extends('pages.booking_layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Booking Event List</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pages.booking_register') }}"> Register New Booking</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered"><table class="table table-bordered">
        <tr>
            <th>Order ID #</th>
            <th>Client Name</th>
            <th>Client Contact Number</th>
            <th>Event Name</th>
            <th>Event Date</th>
            <th>Event Location</th>
            <th>Package</th>
            <th>Job Status</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($booking as $booking)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ ++$booking->name}}</td>
            <td>{{ ++$booking->contact_number}}</td>
            <td>{{ ++$booking->event_name}}</td>
            <td>{{ ++$booking->event_date}}</td>
            <td>{{ ++$booking->event_location}}</td>
            <td>{{ ++$booking->package}}</td>
            <td>{{ ++$booking->status}}</td>
            <td>
                <form action="{{ route('booking.destroy',$booking->booking_id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('pages.booking_show',$blog->booking_id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('pages.booking_edit',$booking_id) }}">Edit</a>
   
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