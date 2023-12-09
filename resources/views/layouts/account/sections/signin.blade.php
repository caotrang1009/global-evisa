@php
	$countries = $countries ?? \App\Models\Country::where('active', 1)->orderBy('name')->get();
@endphp

<form id="frm-singin" action="{{ url('account/signin') }}" method="POST" autocomplete="off">
	@csrf
	<div class="modal fade" id="modal-signin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Signin" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="row g-0">
					<div class="col-md-6 col-lg-5 d-none d-md-block">
						<img class="img-fluid rounded-start" src="{{ asset('assets/images/account/signin.webp') }}">
					</div>
					<div class="col-md-6 col-lg-7">
						<div class="modal-header border-0">
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body p-4 p-lg-5">
							<h4>{{ __('flight.pricing-flights.sign-in.title') }}</h4>
							<div class="row mt-4">
								<div class="col-sm-12">
									<div class="form-group">
										<label class="form-label" for="email">{{ __('page.my-account.sign-in.email-address') }}</label>
										<div class="input-with-icon">
											<i class="fa fa-envelope"></i>
											<input class="form-control" type="text" id="email" name="email" value="" required placeholder="{{ __('page.my-account.email-address') }}">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label class="form-label" for="password">{{ __('page.my-account.sign-in.password') }}</label>
										<div class="input-with-icon">
											<i class="fa fa-unlock"></i>
											<input class="form-control" type="password" id="password" name="password" value="" required placeholder="{{ __('page.my-account.sign-in.password') }}">
										</div>
									</div>
								</div>
							</div>
							<div class="mt-2">
								<button class="btn btn-secondary btn-signin w-100" type="button" id="btn-signin">{{ __('auth.sign-in') }}</button>
							</div>
							<div class="mt-4"><a class="link-hover text-danger" href="{{ url('/account/forgot-password') }}">{{ __('page.my-account.sign-in.forgot-password') }}</a></div>
							<div class="mt-2"><a class="link-hover cursor-pointer" data-bs-toggle="modal" data-bs-target="#modal-signup">{{ __('flight.pricing-flights.sign-in.register-here') }}</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-signup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Signup" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="row g-0">
					<div class="col-md-6 col-lg-5 d-none d-md-block">
						<img class="img-fluid rounded-start" src="{{ asset('assets/images/account/signup.webp') }}">
					</div>
					<div class="col-md-6 col-lg-7">
						<div class="modal-header border-0">
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body p-4 p-lg-5">
							<h4>{{ __('flight.pricing-flights.sign-up.title') }}</h4>
							<div class="row mt-4">
								<div class="col-sm-6">
									<div class="form-group">
										<label class="form-label" for="reg_fullname">{{ __('page.my-account.fullname') }}</label>
										<input class="form-control" type="text" id="reg_fullname" name="reg_fullname" value="" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="form-label" for="reg_country_id">{{ __('page.my-account.nationality') }}</label>
										<select class="form-select" id="reg_country_id" name="reg_country_id" required>
											<option value="0">{{ __('page.my-account.select-your-nationality') }}</option>
											@foreach ($countries as $country)
											<option value="{{ $country->id }}">{{ $country->name }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="form-label" for="reg_email">{{ __('page.my-account.sign-in.email-address') }}</label>
										<input class="form-control" type="text" id="reg_email" name="reg_email" value="" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="form-label" for="reg_phone">{{ __('page.my-account.phone-number') }}</label>
										<input class="form-control reg_telinput" type="text" id="reg_phone" name="reg_phone" value="" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="form-label" for="reg_password">{{ __('page.my-account.sign-in.password') }}</label>
										<input class="form-control" type="password" id="reg_password" name="reg_password" value="" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="form-label" for="reg_password_confirmation">{{ __('page.my-account.confirm-password') }}</label>
										<input class="form-control" type="password" id="reg_password_confirmation" name="reg_password_confirmation" value="" required>
									</div>
								</div>
							</div>
							<div class="mt-2">
								<button class="btn btn-secondary btn-signup w-100" type="button" id="btn-signup">{{ __('auth.sign-up') }}</button>
							</div>
							<div class="mt-4"><a class="link-hover cursor-pointer" data-bs-toggle="modal" data-bs-target="#modal-signin">{{ __('flight.pricing-flights.sign-up.sign-in-here') }}</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<input type="hidden" id="task" name="task" value="" />
	<input type="hidden" id="signin_from" name="signin_from" value="modal" />
</form>

<script>
$(document).ready(function() {
	$("#reg_country_id").val({{ old('reg_country_id') }});

	var reg_telinput = document.querySelector(".reg_telinput");
	var reg_iti = intlTelInput(reg_telinput, {
		placeholderNumberType: "MOBILE",
		utilsScript: "{{ asset('assets/js/telinput/js/utils.js') }}"
	});
	
	$("#btn-signin").click(function() {
		clearFormError();
		
		var msg = [];
		
		if ($("#email").val() == "") {
			$("#email").addClass("error");
			msg.push("Please enter valid email address.");
		} else {
			$("#email").removeClass("error");
		}
		
		if ($("#password").val() == "") {
			$("#password").addClass("error");
			msg.push("Please enter password.");
		} else {
			$("#password").removeClass("error");
		}
		
		if (msg.length) {
			messageBox("ERROR", "Error", msg);
		} else {
			$("#task").val("signin");
			$("#frm-singin").submit();
		}
	});
	
	$('#btn-signup').click(function() {
		clearFormError();
		
		var msg = [];
		
		if ($("#reg_fullname").val() == "") {
			$("#reg_fullname").addClass("error");
			msg.push("Please enter your name.");
		} else {
			$("#reg_fullname").removeClass("error");
		}
		
		if ($("#reg_country_id").val() == 0) {
			$("#reg_country_id").addClass("error");
			msg.push("Please select your nationality.");
		} else {
			$("#reg_country_id").removeClass("error");
		}
		
		if ($("#reg_email").val() == "") {
			$("#reg_email").addClass("error");
			msg.push("Please enter valid email address.");
		} else {
			$("#reg_email").removeClass("error");
		}
		
		if ($("#reg_phone").val() == "") {
			$("#reg_phone").addClass("error");
			msg.push("Please enter your phone number.");
		} else {
			$("#reg_phone").removeClass("error");
		}
		
		if ($("#reg_password").val() == "") {
			$("#reg_password").addClass("error");
			msg.push("Please enter password.");
		} else if ($("#reg_password").val().length < 6) {
			$("#reg_password").addClass("error");
			msg.push("Password must be at least 6 characters in long.");
		} else {
			$("#reg_password").removeClass("error");
		}
		
		if ($("#reg_password_confirmation").val() == "") {
			$("#reg_password_confirmation").addClass("error");
			msg.push("Passwords do not match.");
		} else if ($("#reg_password_confirmation").val() != $("#reg_password").val()) {
			$("#reg_password_confirmation").addClass("error");
			msg.push("Passwords do not match.");
		} else {
			$("#reg_password_confirmation").removeClass("error");
		}
		
		if (msg.length) {
			messageBox("ERROR", "Error", msg);
		} else {
			$("#reg_phone").val(reg_iti.getNumber());
			$("#task").val("signup");
			$("#frm-singin").submit();
		}
	});
});
</script>