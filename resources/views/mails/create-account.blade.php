@extends('mails.template')

@section('content')
	<p class="text-primary fs-h5 fw-extrabold">CREATE AN ACCOUNT SUCCESSFULLY !</p>
	<p>
		<span class="fw-semibold mb-3">Hi <span class="text-primary">Customer’s name,</span></span> <br>
		Welcome to Global eVISA!<br>
		We’d like to inform that you created an account successfully with user name: <b>Username</b> <br>
		Please click the button to verify your email.
	</p>
	<a class="bg-primary text-uppercase fw-extrabold" href="#" style="padding:.75rem 1.25rem;border-radius:10px;color:white !important">VERIFY</a>
@endsection
