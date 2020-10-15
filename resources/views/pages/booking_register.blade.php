@extends('pages.booking_layout')

@section('content')
<div class="card card-5">
        <div class="card-heading">
            <h2 class="title">Event Registration Form</h2>
        </div>
        <div class="card-body">
        
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
            <!--<div class="form-row m-b-55">
                    <div class="name">Order ID</div>
                    <div class="value">
                        <div class="input-group-desc">
                            <input class="input--style-5" type="text"  id="order_id" name="order_id">
                        </div>
                    </div>
                </div> -->
                <div class="form-row m-b-55">
                    <div class="name">Client Name</div>
                    <div class="value">
                        <div class="input-group-desc">
                            <input class="input--style-5" type="text" id="name" name="name">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="name">Client Contact Number</div>
                    <div class="value">
                        <div class="input-group">
                            <input class="input--style-5" type="text" id="contact_number" name="contact_number">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="name">Event Name</div>
                    <div class="value">
                        <div class="input-group">
                            <input class="input--style-5" type="text" id="event_name" name="event_name">
                        </div>
                    </div>
                </div>
                <div class="form-row m-b-55">
                    <div class="name">Event Date</div>
                    <div class="value">
                        <div class="row row-refine">
                            <div class="col-3">
                                <div class="input-group-desc">
                                    <input class="input--style-5" type="date" id="event_date" name="event_date">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="name">Event Location</div>
                    <div class="value">
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="event_location" id="event_location">
                                    <option disabled="disabled" selected="selected">--- Select Event Location ---</option>
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
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="name">Package</div>
                    <div class="value">
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="package" id="package">
                                    <option disabled="disabled" selected="selected">--- Select Event Location ---</option>
                                    <option value="Wedding Service">Wedding Service</option>
                                    <option value="Official Service">Official Service</option>
                                    <option value="Unofficial Service">Unofficial Service</option>
                                    <option value="PPCP Service">PPCP Service</option>
                                    <option value="Graphic Design Service">Graphic Design Service</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="name">Job Status</div>
                    <div class="value">
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="status" id="status">
                                    <option disabled="disabled" selected="selected">--- Select Event Location ---</option>
                                    <option value="New Entry">New Entry</option>
                                    <option value="Editing Process">Editing Process</option>
                                    <option value="Packaging and Delivering">Packaging and Delivering</option>
                                    <option value="Complete">Complete</option>
                                    <option value="Canceled">Canceled</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection