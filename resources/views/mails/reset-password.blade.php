@extends('mails.template')

@section('content')
	<p class="text-primary fs-h5 fw-extrabold">PASWORD RESET!</p>
	<p>
		<span class="fw-semibold mb-3">Dear <span class="text-primary">Customer’s name,</span></span> <br>
		We just received your request for a forgotten password for the following account:<br>
		Registered email: <b>JeniferD1@gmail.com</b> <br>
		To reset your password, please visit the following address: <a class="text-uppercase fw-semibold" style="color:#3B7ACC;text-decoration-line: underline;" href="#">RESET LINK</a>
	</p>
	<p style="margin-bottom:0px">If this was a mistake, please ignore this email and nothing will happen.</p>
@endsection	