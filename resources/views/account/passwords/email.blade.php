@extends('layouts.app')

@section('content')
<div class="container d-lg-flex justify-content-between py-2 py-lg-3">
	<div class="order-lg-2 mb-3 mb-lg-0 pt-lg-4">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start">
				<li class="breadcrumb-item"><a class="text-nowrap" href="{{ url('/') }}"><i class="czi-home"></i>{{ __('menu.home') }}</a></li>
				<li class="breadcrumb-item text-nowrap"><a href="{{ url('/account') }}">{{ __('page.my-account.title') }}</a></li>
				<li class="breadcrumb-item text-nowrap active" aria-current="page">{{ __('page.my-account.sign-in.password-recovery') }}</li>
			</ol>
		</nav>
	</div>
	<div class="order-lg-1 pe-lg-4 mb-3 mb-lg-0 pt-lg-4 text-center text-lg-start">
		<h1 class="h3 mb-0">{{ __('page.my-account.title') }}</h1>
	</div>
</div>
<section>
	<form id="frm-password-recovery" action="" method="POST">
		@csrf
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-10">
					<h2 class="h3 mb-4">{{ __('page.my-account.sign-in.forgot-your-password') }}</h2>
					<p>{{ __('page.my-account.sign-in.three-easy-steps') }}</p>
					<ol>
						<li>{{ __('page.my-account.sign-in.step-1') }}</li>
						<li>{{ __('page.my-account.sign-in.step-2') }}</li>
						<li>{{ __('page.my-account.sign-in.step-3') }}</li>
					</ol>
					<hr>
					<div class="form-group">
						<label class="form-label" for="email">{{ __('page.my-account.sign-in.enter-your-email-address') }}</label>
						<div class="input-group">
							<input type="text" class="form-control" value="" id="email" name="email" required placeholder="{{ __('page.my-account.email-address') }}">
							<div class="input-group-append ms-2"><button class="btn btn-secondary" type="button" id="btn-getpass">{{ __('page.my-account.sign-in.get-new-password') }}</button></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</section>

<script>
$(document).ready(function() {
	$("#btn-getpass").click(function() {
		clearFormError();
		
		var msg = [];
		
		if ($("#email").val() == "") {
			$("#email").addClass("error");
			msg.push("Please enter valid email address.");
		} else {
			$("#email").removeClass("error");
		}
		
		if (msg.length) {
			messageBox("ERROR", "Error", msg);
		} else {
			$("#frm-password-recovery").submit();
		}
	});
});
</script>
@endsection