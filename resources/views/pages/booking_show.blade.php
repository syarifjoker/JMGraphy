@extends('pages.booking_layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Event Details</h2>
            </div>
        </div>
    </div>
   <br>
   <br>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Order ID #:</strong>
                {{ $booking->booking_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Client Name:</strong>
                {{ $booking->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Client Contact Number:</strong>
                {{ $booking->contact_number }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Event Name:</strong>
                {{ $booking->event_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Event Date:</strong>
                {{ $booking->event_date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Event Location:</strong>
                {{ $booking-> event_location }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Event Type:</strong>
                {{ $booking-> event_type }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Package:</strong>
                {{ $booking-> package }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Job Status:</strong>
                {{ $booking-> status }}
            </div>
        </div>
        <br>
        <br>
        <br>

        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('booking_list') }}"> Back</a>
        </div>
    </div>
@endsection