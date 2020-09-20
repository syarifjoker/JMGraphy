@extends('pages.booking_layout')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('booking.store') }}" method="POST">
@csrf
    <!--<label for="order_id">Order ID:</label>
    <input type="text" id="order_id" name="order_id"><br><br>-->
    <label for="name">Client Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="name">Client Contact Number:</label>
    <input type="text" id="contact_number" name="contact_number"><br><br>
    <label for="event_name">Event Name:</label>
    <input type="text" id="event_name" name="event_name"><br><br>
    <label for="event_date">Event Date:</label>
    <input type="date" id="event_date" name="event_date"><br><br>
    <label for="event_type">Event Location:</label>
    <input type="text" id="event_type" name="event_location"><br><br>
    <label for="package">Package:</label>
    <input type="text" id="package" name="package"><br><br>
    <label for="package">Job Status:</label>
    <input type="text" id="status" name="status"><br><br>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
<form>
@endsection