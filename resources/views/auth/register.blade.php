@extends('layouts.app')

@section('content')
<div class="wrapper wrapper--w680">
    <div class="card card-4">
        <div class="card-body">
            <h2 class="title">Registration Form</h2>
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <div class="row">
                    <div>
                        <div class="input-group">
                            <label class="label">Name</label>
                            <input id="name" class="input--style-4 @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" size="40" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <div class="input-group">
                            <label class="label">E-mail Address</label>
                            <input id="email" class="input--style-4 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" size="30" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <div class="input-group">
                            <label class="label">Password</label>
                            <input id="password" class="input--style-4 @error('password') is-invalid @enderror" type="password" name="password" size="30" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <div class="input-group">
                            <label class="label">Confirm Password</label>
                            <input id="password-confirm" type="password" class="input--style-4" name="password_confirmation" required autocomplete="new-password" size="30">
                        </div>
                    </div>
                </div>
                <!--<div class="input-group">
                    <label class="label">Subject</label>
                    <div class="rs-select2 js-select-simple select--no-search">
                        <select name="subject">
                            <option disabled="disabled" selected="selected">Choose option</option>
                            <option>Subject 1</option>
                            <option>Subject 2</option>
                            <option>Subject 3</option>
                        </select>
                        <div class="select-dropdown"></div>
                    </div>
                </div>-->
                <div class="p-t-15">
                    <button class="btn btn--radius-2 btn--blue" type="submit">{{ __('Register') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
@endsection
