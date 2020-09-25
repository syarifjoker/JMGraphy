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
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="name">Client Name:</label>
                <input type="text" id="name" name="name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="name">Client Contact Number:</label>
                <input type="text" id="contact_number" name="contact_number" size="10">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="event_name">Event Name:</label>
                <input type="text" id="event_name" name="event_name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="event_date">Event Date:</label>
                <input type="date" id="event_date" name="event_date">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="event_location">Event Location:</label>
                    <select name="event_location" id="event_location">
                        <option>--- Select Event Location ---</option>
                        <option value="Johor">Johor</option>
                        <option value="Kedah">Kedah</option>
                        <option value="Kelantan">Kelantan</option>
                        <option value="Melaka">Melaka</option>
                        <option value="Negeri Sembilan">Negeri Sembilan</option>
                        <option value="Pahang">Pahang</option>
                        <option value="Pulau Pinang">Pulau Pinang</option>
                        <option value="Perak">Perak</option>
                        <option value="Perlis">Perlis</option>
                        <option value="Sabah">Sabah</option>
                        <option value="Sarawak">Sarawak</option>
                        <option value="Selangor">Selangor</option>
                        <option value="Terengganu">Terengganu</option>
                        <option value="WP Kuala Lumpur">WP Kuala Lumpur</option>
                        <option value="WP Labuan">WP Labuan</option>
                        <option value="WP Putrajaya">WP Putrajaya</option>
                    </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="package">Package:</label>
                    <select name="package" id="package">
                        <option>--- Select Event Location ---</option>
                        <option value="Wedding Service">Wedding Service</option>
                        <option value="Official Service">Official Service</option>
                        <option value="Unofficial Service">Unofficial Service</option>
                        <option value="PPCP Service">PPCP Service</option>
                        <option value="Graphic Design Service">Graphic Design Service</option>
                    </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="package">Job Status:</label>
                    <select name="status" id="status">
                        <option>--- Select Event Location ---</option>
                        <option value="New Entry">New Entry</option>
                        <option value="Editing Process">Editing Process</option>
                        <option value="Packaging and Delivering">Packaging and Delivering</option>
                        <option value="Complete">Complete</option>
                        <option value="Canceled">Canceled</option>
                    </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
<form>
@endsection