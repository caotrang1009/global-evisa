@extends('layouts.app')

@section('content')
<section>
	<div class="container">
		<div class="d-flex align-items-center">
			<span class="position-absolute me-3 bg-orange d-lg-block d-none" style="width: 80px; height:20px;"></span>
			<h1 class="web-title text-black text-center text-uppercase w-100">FILL IN <br> INFORMATION DETAILS</h1>
		</div>
		<div class="row">
			<div class="step-part mt-5">
				<div class="d-flex justify-content-between text-title stepper-wrapper">
					<a href="/flights/information" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item current">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">1</div>
						<div class="mt-4 mx-2 step-name text-center fs-sm-4 fs-6">Information Details</div>
					</a>
					<a href="/flights/review-information" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">2</div>
						<div class="mt-4 mx-2 step-name text-center fs-sm-4 fs-6">Review Info</div>
					</a>
					<a href="/flights/payment" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item">
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
			<div class="row g-sm-5 g-4">
				<div class="col-lg-7 col-12">
					<div class="border-dashed bg-beige rounded-3-5 px-md-5 p-4 mb-4-5">
						<h2 class="fw-800 custom-h3 text-black mb-4">PASSENGER INFORMATION</h2>
						<div class="form-group row gx-4 gy-3">
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black d-flex">
									<span>Surname</span>
									<img class="ms-2" src="{{ asset('assets/svg/icon/info.svg') }}" alt="info" width="24px" height="24px">
								</label>
								<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
									<img class="form-icon" src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="education">
									<input class="form-control border-0 px-0 cursor-pointer" type="text" id="surname" name="surname" placeholder="Enter Value" required>
								</div>
								<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
							</div>
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black d-flex">
									<span>Given names</span>
									<img class="ms-2" src="{{ asset('assets/svg/icon/info.svg') }}" alt="info" width="24px" height="24px">
								</label>
								<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
									<img class="form-icon" src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="education">
									<input class="form-control border-0 px-0 cursor-pointer" type="text" id="given_names" name="given_names" placeholder="Enter Value" required>
								</div>
								<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
							</div>
						</div>
						<div class="form-group row gx-4 gy-3">
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black">Title</label>
								<div class="dropdown">
									<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info" data-bs-toggle="dropdown" data-bs-auto-close="outside">
										<img class="form-icon" src="{{ asset('assets/svg/outline/community.svg') }}" data-icon-name="outline/community" alt="community">
										<input class="form-control border-0 px-0 cursor-pointer" type="text" id="title" name="title" placeholder="Please Select" required>
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
								<label class="h6 fw-semibold text-title text-black">Day of Birth</label>
								<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
									<img class="form-icon" src="{{ asset('assets/svg/outline/date.svg') }}" data-icon-name="outline/date" alt="date">
									<input class="form-control border-0 px-0 cursor-pointer datepicker" type="text" id="date_of_birth" name="date_of_birth" placeholder="DD/MM/YY" required>
									<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" data-icon-name="outline/arrow-bottom" alt="arrow-bottom">
								</div>
								<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
							</div>
						</div>
						<div class="form-group row gx-4 gy-3">
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black">Nationality</label>
								<div class="dropdown">
									<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info" data-bs-toggle="dropdown" data-bs-auto-close="outside">
										<img class="form-icon" src="{{ asset('assets/svg/outline/map.svg') }}" data-icon-name="outline/map" alt="date">
										<input class="form-control border-0 px-0 cursor-pointer" type="text" id="nationality" name="nationality" placeholder="Please Select" required>
										<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" data-icon-name="outline/arrow-bottom" alt="arrow-bottom">
									</div>
									<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
									<div class="dropdown-menu rounded-3-5 p-3 w-100 medium">
										@include('visa.section.countries')
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black">Passport Number</label>
								<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
									<img class="form-icon" src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="date">
									<input class="form-control border-0 px-0 cursor-pointer" type="text" id="passport_number" name="passport_number" placeholder="Enter Value" required>
								</div>
								<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
							</div>
						</div>
						<div class="form-group row gx-4 gy-3">
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black">Country of issue</label>
								<div class="dropdown">
									<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info" data-bs-toggle="dropdown" data-bs-auto-close="outside">
										<img class="form-icon" src="{{ asset('assets/svg/outline/map.svg') }}" data-icon-name="outline/map" alt="date">
										<input class="form-control border-0 px-0 cursor-pointer" type="text" id="passport_issue_country" name="passport_issue_country" placeholder="Please Select" required>
										<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" data-icon-name="outline/arrow-bottom" alt="arrow-bottom">
									</div>
									<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
									<div class="dropdown-menu rounded-3-5 p-3 w-100 medium">
										@include('visa.section.countries')
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black">Expired Date</label>
								<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
									<img class="form-icon" src="{{ asset('assets/svg/outline/date.svg') }}" data-icon-name="outline/date" alt="date">
									<input class="form-control border-0 px-0 cursor-pointer datepicker" type="text" id="expired_date" name="expired_date" placeholder="DD/MM/YY" required>
									<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" data-icon-name="outline/arrow-bottom" alt="arrow-bottom">
								</div>
								<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
							</div>
						</div>
						<div class="small"><b>Note<span class="text-danger">*</span>:</b> If there are any other passengers,  all information collected will be the same.</div>
					</div>
					<div class="border-dashed bg-beige rounded-3-5 px-md-5 p-4 mb-4-5">
						<h2 class="fw-800 custom-h3 text-black mb-3">Travel Insurance</h2>
						<div class="d-flex gap-4 mb-3">
							<div class="form-check select-insurance add" role="button">
								<input class="form-check-input mt-0" type="checkbox" value="" id="add_insurance" name="add_insurance" style="width:1.5rem; height:1.5rem" checked>
								<label class="form-check-label text-black text-opacity-9 fw-semibold ms-3 cursor-pointer" for="add_insurance">Add insurance</label>
							</div>
							<div class="form-check select-insurance close" role="button">
								<input class="form-check-input mt-0" type="checkbox" value="" id="no_insurance" name="no_insurance" style="width:1.5rem; height:1.5rem">
								<label class="form-check-label text-black text-opacity-9 fw-semibold ms-3 cursor-pointer" for="no_insurance">No insurance</label>
							</div>
						</div>
						<div class="mb-3 medium">
							<label class="fw-semibold">Choose the best insurance package for you
								<span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="The difference between the packages is the Limit of Liability">
									<img class="ms-2" src="{{ asset('assets/svg/icon/info.svg') }}" alt="info" width="24px" height="24px">
								</span>
							</label>
							<div class="my-2">
								<div class="form-check mb-2">
									<input type="radio" class="form-check-input mt-0 input-package" name="package[]" id="package_id_0_0" value="Package 1" style="width:1.25rem; height:1.25rem" checked>
									<label class="form-check-label ms-2 cursor-pointer" for="package_id_0_0">Package 1 (from 9 to 173 USD)</label>
								</div>
								<div class="form-check">
									<input type="radio" class="form-check-input mt-0 input-package" name="package[]" id="package_id_1_0" value="Package 2" style="width:1.25rem; height:1.25rem">
									<label class="form-check-label ms-2 cursor-pointer" for="package_id_1_0">Package 2 (from 15 to 295 USD)</label>
								</div>
							</div>
							<div>You can see details of the Limit of Liability <a class="link text-semantic-blue fst-italic fw-medium" href="#" target="_blank">here</a></div>
						</div>
						<div class="row gx-4 gy-3">
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black spacing-n1">Number of days<span class="text-danger">*</span></label>
								<div class="dropdown">
									<select name="number_of_days[]" class="form-select form-control number_of_days border rounded-3 bg-white px-3 medium">
										<option class="1" value="1 - 5 days" usd_fee="9" vnd_fee="180000" selected>1 - 5 days (9 USD)</option>
										<option class="1" value="6 - 8 days" usd_fee="12" vnd_fee="240000">6 - 8 days (12 USD)</option>
										<option class="1" value="9 - 15 days" usd_fee="19" vnd_fee="380000">9 - 15 days (19 USD)</option>
										<option class="1" value="16 - 20 days" usd_fee="22" vnd_fee="433000">16 - 20 days (22 USD)</option>
										<option class="1" value="21 - 24 days" usd_fee="26" vnd_fee="520000">21 - 24 days (26 USD)</option>
										<option class="1" value="25 - 31 days" usd_fee="31" vnd_fee="620000">25 - 31 days (31 USD)</option>
									</select>
								</div>
							</div>
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black spacing-n1">Upload a photo of Passport (optional)</label>
								<div class="d-flex gap-2 align-items-center justify-content-center border rounded-3 bg-white px-3 input-order-info">
									<span>Upload a photo</span>
									<img class="my-2" src="{{ asset('assets/svg/outline/exchange-black.svg') }}" alt="exchange" width="20px" height="20px">
								</div>
								<input type="file" name="passport[0]" class="invisible passport" style="height: 0px;">
							</div>
						</div>
						<div class="text-black fw-semibold mt-n2">Total: <span class="text-semantic-blue"><span id="usd_fee">9.00</span> USD </span> I <span id="vnd_fee">180,000</span> VND</div>
					</div>
					<div class="border-dashed bg-beige rounded-3-5 px-md-5 p-4 mb-4-5">
						<h2 class="fw-800 custom-h3 text-black mb-4">CONTACT INFORMATION</h2>
						<div class="form-group row gx-4 gy-3">
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black d-flex">
									<span>First Name</span>
									<img class="ms-2" src="{{ asset('assets/svg/icon/info.svg') }}" alt="info" width="24px" height="24px">
								</label>
								<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
									<img class="form-icon" src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="education">
									<input class="form-control border-0 px-0 cursor-pointer" type="text" id="contact_first_name" name="contact_first_name" placeholder="Enter Value" required>
								</div>
								<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
							</div>
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black d-flex">
									<span>Last Name</span>
									<img class="ms-2" src="{{ asset('assets/svg/icon/info.svg') }}" alt="info" width="24px" height="24px">
								</label>
								<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
									<img class="form-icon" src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="education">
									<input class="form-control border-0 px-0 cursor-pointer" type="text" id="contact_last_name" name="contact_last_name" placeholder="Enter Value" required>
								</div>
								<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
							</div>
						</div>
						<div class="form-group row gx-4 gy-3">
							<div class="col-sm-6">
								<label class="h6 fw-semibold text-title text-black">Your Phone Number</label>
								<div class="dropdown">
									<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
										<img class="form-icon" src="{{ asset('assets/svg/outline/phone.svg') }}" data-icon-name="outline/phone" alt="phone">
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
								<label class="h6 fw-semibold text-title text-black">Your Email</label>
								<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
									<img class="form-icon" src="{{ asset('assets/svg/outline/email.svg') }}" data-icon-name="outline/email" alt="email">
									<input class="form-control border-0 px-0 cursor-pointer" type="text" id="contact_email" name="contact_email" placeholder="Enter Value" required>
								</div>
								<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
							</div>
						</div>
						<div class="form-group row gx-4 gy-3">
							<div class="col-12">
								<label class="h6 fw-semibold text-title text-black">Special request <small class="fst-italic fw-medium"> (For example: Meals; Wheelchair services; Services for the blind and deaf; Additional  chair purchases)</small></label>
								<textarea class="form-control cursor-pointer border rounded-3 bg-white input-order-info" name="special_request" id="special_request" placeholder="Type of special request or comment (optional)" cols="30" rows="5"></textarea>
							</div>
						</div>
						<div class="small"><b>Note<span class="text-danger">*</span>:</b> Please be careful - Passenger information must match your passport or photo ID</div>
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
					<div class="text-center mt-4">
						<a href="/flights/review-information" class="btn btn-primary rounded-3-5 fw-bold text-title fs-5 py-2 w-50">Next</a>
					</div>
				</div>
				<div class="col-lg-5 col-12">
					<div class="border-dashed bg-beige rounded-3-5 px-md-5 p-4-3 your-flight medium">
						@include('flights.section.order_summary')
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