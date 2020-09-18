@extends('layouts.app')

@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form  method="POST" action="{{ route('login') }}" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                @csrf
					<span class="login100-form-title">
						Sign In
					</span>
                    
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
						<input class="input100 @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail Address">
						<span class="focus-input100"></span>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100 @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" placeholder="Password">
						<span class="focus-input100"></span>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
					</div>

				<div class="text-right p-t-13 p-b-23">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
				</div>

				<div class="container-login100-form-btn">
					<button type="submit" class="login100-form-btn">
						Sign in
					</button>
				</div>

				<div class="flex-col-c p-t-170 p-b-40">
					<span class="txt1 p-b-9">
						Don’t have an account?
					</span>

					<a href="#" class="txt3">
						Sign up now
					</a>
				</div>
			</form>
		</div>
	</div>
</div>



<!--===============================================================================================-->
<script src="loginPage/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="loginPage/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="loginPage/vendor/bootstrap/js/popper.js"></script>
	<script src="loginPage/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="loginPage/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="loginPage/vendor/daterangepicker/moment.min.js"></script>
	<script src="loginPage/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="loginPage/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="loginPage/js/main.js"></script>
@endsection
