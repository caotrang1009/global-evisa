@extends('layouts.app')

@section('content')
<div class="container d-lg-flex justify-content-between py-2 py-lg-3">
	<div class="order-lg-2 mb-3 mb-lg-0 pt-lg-4">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start">
				<li class="breadcrumb-item"><a class="text-nowrap" href="{{ url('/') }}"><i class="czi-home"></i>{{ __('menu.home') }}</a></li>
				<li class="breadcrumb-item text-nowrap"><a href="{{ route('account', ['account' => __('routes.account')]) }}">{{ __('page.my-account.title') }}</a></li>
				<li class="breadcrumb-item text-nowrap active" aria-current="page">{{ __('page.my-account.sign-in.reset-password') }}</li>
			</ol>
		</nav>
	</div>
	<div class="order-lg-1 pe-lg-4 mb-3 mb-lg-0 pt-lg-4 text-center text-lg-start">
		<h1 class="h3 mb-0">{{ __('page.my-account.title') }}</h1>
	</div>
</div>
<section>
	<form id="frm-reset-password" action="" method="POST">
		@csrf
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-10">
					<h2 class="h3 mb-4">{{ __('page.my-account.sign-in.create-new-password') }}</h2>
					<p>{{ __('page.my-account.sign-in.input-new-password') }}</p>
					<hr>
					<div class="form-group">
						<label class="form-label" for="password">{{ __('page.my-account.new-password') }} <span class="text-danger">*</span></label>
						<input type="password" value="" id="password" name="password" required class="form-control">
					</div>
					<div class="form-group">
						<label class="form-label" for="password_confirmation">{{ __('page.my-account.sign-in.re-enter-new-password') }} <span class="text-danger">*</span></label>
						<input type="password" value="" id="password_confirmation" name="password_confirmation" required class="form-control">
					</div>
					<div class="form-group">
						<button class="btn btn-secondary btn-update" type="button" id="btn-update">{{ __('page.my-account.sign-in.create-password') }}</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</section>

<script>
$(document).ready(function() {
	$("#btn-update").click(function() {
		clearFormError();
		
		var msg = [];
		
		if ($("#password").val() == "") {
			$("#password").addClass("error");
			msg.push("Please enter password.");
		} else if ($("#password").val().length < 6) {
			$("#password").addClass("error");
			msg.push("Password must be at least 6 characters in long.");
		} else {
			$("#password").removeClass("error");
		}
		
		if ($("#password_confirmation").val() == "") {
			$("#password_confirmation").addClass("error");
			msg.push("Passwords do not match.");
		} else if ($("#password_confirmation").val() != $("#password").val()) {
			$("#password_confirmation").addClass("error");
			msg.push("Passwords do not match.");
		} else {
			$("#password_confirmation").removeClass("error");
		}
		
		if (msg.length) {
			messageBox("ERROR", "Error", msg);
		} else {
			$("#frm-reset-password").submit();
		}
	});
});
</script>
@endsection