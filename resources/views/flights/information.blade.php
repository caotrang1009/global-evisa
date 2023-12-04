@extends('layouts.app')

@section('content')
<section>
	<div class="container">
		<div class="d-flex align-items-center">
			<span class="position-absolute me-3 bg-orange d-lg-block d-none" style="width: 80px; height:20px;"></span>
			<h1 class="web-title page-title text-black text-center text-uppercase w-100">FILL IN <br> INFORMATION DETAILS</h1>
		</div>
		<div class="row">
			<div class="step-part flight mt-5">
				<div class="d-flex justify-content-between text-title stepper-wrapper">
					<a href="{{ url('flights/information') }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item current">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">1</div>
						<div class="mt-4 mx-2 step-name text-center fs-sm-4 fs-6">Information Details</div>
					</a>
					<a href="{{ url('flights/review-information') }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">2</div>
						<div class="mt-4 mx-2 step-name text-center fs-sm-4 fs-6">Review Info</div>
					</a>
					<a href="{{ url('flights/payment') }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">3</div>
						<div class="mt-4 mx-2 step-name text-center fs-sm-4 fs-6">Payment</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<form action="" id="frm-order">
			@csrf
			<div class="row gy-5">
				<div class="col-lg-7 col-12">
					<div class="border-dashed bg-beige rounded-3-5 p-md-5 p-4 mb-4-5">
						<h2 class="fw-800 custom-h1 text-black mb-4">CONTACT INFORMATION</h2>
						<div class="form-group row gy-3 gx-4">
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black d-flex" for="contact_first_name">
									<span>First Name</span>
									<img class="ms-2" src="{{ asset('assets/svg/icon/info.svg') }}" alt="info" width="24px" height="24px">
								</label>
								<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3 input-order-info">
									<img src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="education">
									<input class="form-control border-0 px-0 cursor-pointer" type="text" id="contact_first_name" name="contact_first_name" placeholder="Enter Value" required>
								</div>
								<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
							</div>
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black d-flex" for="contact_last_name">
									<span>Last Name</span>
									<img class="ms-2" src="{{ asset('assets/svg/icon/info.svg') }}" alt="info" width="24px" height="24px">
								</label>
								<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3 input-order-info">
									<img src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="education">
									<input class="form-control border-0 px-0 cursor-pointer" type="text" id="contact_last_name" name="contact_last_name" placeholder="Enter Value" required>
								</div>
								<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
							</div>
						</div>
						<div class="form-group row gy-3 gx-4">
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black" for="contact_phone">Your Phone Number</label>
								<div class="dropdown">
									<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3 input-order-info">
										<img src="{{ asset('assets/svg/outline/phone.svg') }}" data-icon-name="outline/phone" alt="phone">
										<div class="d-flex align-items-center gap-2 cursor-pointer bg-white" data-bs-toggle="dropdown" data-bs-auto-close="outside">
											<span class="medium text-black text-opacity-7 nationality">+84</span>
											<img class="cursor-pointer" src="{{ asset('assets/svg/icon/direction-up.svg') }}" data-icon-name="icon/direction-up" alt="direction-up" style="max-width: none">
											<input class="form-control" type="hidden" id="nationality" name="nationality" value="" required>
										</div>
										<div class="dropdown-menu rounded-3-5 p-3 w-100 medium">
											@include('visa.section.countries_telephone')
										</div>
										<input class="form-control border-0 px-0 cursor-pointer" type="text" id="contact_phone" name="contact_phone" placeholder="Enter Value" required>
									</div>
									<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
								</div>
							</div>
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black" for="contact_email">Your Email</label>
								<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3 input-order-info">
									<img src="{{ asset('assets/svg/outline/email.svg') }}" data-icon-name="outline/email" alt="email">
									<input class="form-control border-0 px-0 cursor-pointer" type="text" id="contact_email" name="contact_email" placeholder="Enter Value" required>
								</div>
								<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
							</div>
						</div>
						<div class="small"><b>Note<span class="text-danger">*</span>:</b> Please be careful - Passenger information must match your passport or photo ID</div>
					</div>
					<div class="border-dashed bg-beige rounded-3-5 p-md-5 p-4 mb-4-5">
						<h2 class="fw-800 custom-h1 text-black mb-4">PASSENGER INFORMATION</h2>
						<div class="form-group row gy-3 gx-4">
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black d-flex" for="first_name">
									<span>First Name</span>
									<img class="ms-2" src="{{ asset('assets/svg/icon/info.svg') }}" alt="info" width="24px" height="24px">
								</label>
								<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3 input-order-info">
									<img src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="education">
									<input class="form-control border-0 px-0 cursor-pointer" type="text" id="first_name" name="first_name" placeholder="Enter Value" required>
								</div>
								<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
							</div>
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black d-flex" for="last_name">
									<span>Last Name</span>
									<img class="ms-2" src="{{ asset('assets/svg/icon/info.svg') }}" alt="info" width="24px" height="24px">
								</label>
								<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3 input-order-info">
									<img src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="education">
									<input class="form-control border-0 px-0 cursor-pointer" type="text" id="last_name" name="last_name" placeholder="Enter Value" required>
								</div>
								<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
							</div>
						</div>
						<div class="form-group row gy-3 gx-4">
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black" for="gender">Gender</label>
								<div class="dropdown">
									<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3 input-order-info" data-bs-toggle="dropdown" data-bs-auto-close="outside">
										<img src="{{ asset('assets/svg/outline/gender.svg') }}" data-icon-name="outline/gender" alt="gender">
										<input class="form-control border-0 px-0 cursor-pointer" type="text" id="gender" name="gender" placeholder="Please Select" required>
										<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" data-icon-name="outline/arrow-bottom" alt="arrow-bottom">
									</div>
									<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
									<ul class="dropdown-menu dropdown-select border-secondary rounded-3-5 shadow w-100" style="--bs-border-opacity: 0.5;">
										<li><a class="dropdown-item cursor-pointer selected">Mr</a></li>
										<li><a class="dropdown-item cursor-pointer">Ms</a></li>
										<li><a class="dropdown-item cursor-pointer">Master</a></li>
										<li><a class="dropdown-item cursor-pointer">Miss</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black" for="date_of_birth">Day of Birth</label>
								<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3 input-order-info">
									<img src="{{ asset('assets/svg/outline/date.svg') }}" data-icon-name="outline/date" alt="date">
									<input class="form-control border-0 px-0 cursor-pointer datepicker" type="text" id="date_of_birth" name="date_of_birth" placeholder="DD/MM/YY" required>
									<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" data-icon-name="outline/arrow-bottom" alt="arrow-bottom">
								</div>
								<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
							</div>
						</div>
						<div class="form-group row gy-3 gx-4">
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black" for="phone_number">Phone Number</label>
								<div class="dropdown">
									<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3 input-order-info">
										<img src="{{ asset('assets/svg/outline/phone.svg') }}" data-icon-name="outline/phone" alt="phone">
										<div class="d-flex align-items-center gap-2 cursor-pointer bg-white" data-bs-toggle="dropdown" data-bs-auto-close="outside">
											<span class="medium text-black text-opacity-7 nationality">+84</span>
											<img class="cursor-pointer" src="{{ asset('assets/svg/icon/direction-up.svg') }}" data-icon-name="icon/direction-up" alt="direction-up" style="max-width: none">
											<input class="form-control" type="hidden" id="nationality" name="nationality" value="" required>
										</div>
										<div class="dropdown-menu rounded-3-5 p-3 w-100 medium">
											@include('visa.section.countries_telephone')
										</div>
										<input class="form-control border-0 px-0 cursor-pointer" type="text" id="phone_number" name="phone_number" placeholder="Enter Value" required>
									</div>
									<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
								</div>
							</div>
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black" for="email">Email Address</label>
								<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3 input-order-info">
									<img src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="date">
									<input class="form-control border-0 px-0 cursor-pointer" type="text" id="email" name="email" placeholder="Enter Value" required>
								</div>
								<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
							</div>
						</div>
						<div class="form-group row gy-3 gx-4">
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black" for="country_of_birth">Country of Birth</label>
								<div class="dropdown">
									<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3 input-order-info" data-bs-toggle="dropdown" data-bs-auto-close="outside">
										<img src="{{ asset('assets/svg/outline/map.svg') }}" data-icon-name="outline/map" alt="date">
										<input class="form-control border-0 px-0 cursor-pointer" type="text" id="country_of_birth" name="country_of_birth" placeholder="Please Select" required>
										<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" data-icon-name="outline/arrow-bottom" alt="arrow-bottom">
									</div>
									<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
									<div class="dropdown-menu rounded-3-5 p-3 w-100 medium">
										@include('visa.section.countries')
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black" for="country_of_residency">Country of Residency</label>
								<div class="dropdown">
									<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3 input-order-info" data-bs-toggle="dropdown" data-bs-auto-close="outside">
										<img src="{{ asset('assets/svg/outline/map.svg') }}" data-icon-name="outline/map" alt="date">
										<input class="form-control border-0 px-0 cursor-pointer" type="text" id="country_of_residency" name="country_of_residency" placeholder="Please Select" required>
										<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" data-icon-name="outline/arrow-bottom" alt="arrow-bottom">
									</div>
									<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
									<div class="dropdown-menu rounded-3-5 p-3 w-100 medium">
										@include('visa.section.countries')
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row gy-3 gx-4">
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black" for="passport_number">Passport Number</label>
								<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3 input-order-info">
									<img src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="date">
									<input class="form-control border-0 px-0 cursor-pointer" type="text" id="passport_number" name="passport_number" placeholder="Enter Value" required>
								</div>
								<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
							</div>
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black" for="expired_date">Expired Date</label>
								<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3 input-order-info">
									<img src="{{ asset('assets/svg/outline/date.svg') }}" data-icon-name="outline/date" alt="date">
									<input class="form-control border-0 px-0 cursor-pointer datepicker" type="text" id="expired_date" name="expired_date" placeholder="DD/MM/YY" required>
									<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" data-icon-name="outline/arrow-bottom" alt="arrow-bottom">
								</div>
								<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
							</div>
						</div>
						<div class="form-group row gy-3 gx-4">
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black" for="issue_date">Issue Date</label>
								<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3 input-order-info">
									<img src="{{ asset('assets/svg/outline/date.svg') }}" data-icon-name="outline/date" alt="date">
									<input class="form-control border-0 px-0 cursor-pointer datepicker" type="text" id="issue_date" name="issue_date" placeholder="DD/MM/YY" required>
									<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" data-icon-name="outline/arrow-bottom" alt="arrow-bottom">
								</div>
								<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
							</div>
						</div>
						<div class="small"><b>Note<span class="text-danger">*</span>:</b> If there are any other passengers,  all information collected will be the same.</div>
					</div>
					<div class="confirm">
						<div class="form-check mb-3">
							<input class="form-check-input mt-0" type="checkbox" value="" id="correct_info" name="correct_info" style="width:1.5rem; height:1.5rem" checked required>
							<label class="form-check-label ms-3 cursor-pointer" for="correct-info">I would like to confirm that the above information is correct.</label>
						</div>
						<div class="form-check">
							<input class="form-check-input mt-0" type="checkbox" value="" id="term" name="term" style="width:1.5rem; height:1.5rem" checked required>
							<label class="form-check-label ms-3 cursor-pointer" for="term">
								I have read and agree to the <a href="#" class="fw-bold text-title text-primary text-decoration-underline">Terms and Conditions</a> as well as the company's <a href="#" class="fw-bold text-title text-primary text-decoration-underline">Policies</a>.
							</label>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-12">
					<div class="border-dashed bg-beige rounded-3-5 p-md-5 p-4 your-flight medium">
						@include('flights.section.order_summary')
						<a href="{{ url('/flights/review-information') }}" class="btn btn-orange btn-lg rounded-4 py-3 fw-bold text-title fs-6 w-100 btn-payment mt-4">Go To Review Info Page</a>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>

<script>
	$(document).ready(function () {	
		var validator = $("#frm-order").validate({
			highlight: function(input){
				var parent = $(input).parent(".input-order-info");
				parent.addClass('error');
				updateSvgColor(parent.find('img'), 'red');
			},
			errorPlacement: function(error, input){
				if (error.text() != '') {
					$(input).parent(".input-order-info").next("span").show();
					$(input).parent(".input-order-info").next("span").html(error.text())
				}
			},
			invalidHandler: function(event, validator) {
				$(".spinner").addClass("d-none");
				$('.spinner .center-div').loader('spinner').hide();
			}
		});

		$(document).on('blur', 'input', function () {
			if ($(this).valid()) {
				var parent = $(this).parent(".input-order-info");
				parent.removeClass('error');
				parent.next("span").hide();
				updateSvgColor(parent.find('img'), '');
			}
		})

		function updateSvgColor(pathElement, fillColor) {
			if (fillColor!='') {
				fillColor = '-'+fillColor;
			}

			pathElement.each(function(index, item) {
				var iconName = $(item).data('icon-name');
				var src = `{{ asset('assets/svg/${iconName + fillColor}.svg') }}`;
				
				if ($(item).attr('alt') == 'plus') {
					iconPlus = src;
				} else if($(item).attr('alt') == 'minus') {
					var src = `{{ asset('assets/svg/outline/minus${fillColor}.svg') }}`;
					iconMinus = src;
				}
				$(item).attr('src', src);
			});
		}
	});
</script>
@endsection