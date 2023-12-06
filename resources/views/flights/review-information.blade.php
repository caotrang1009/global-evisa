@extends('layouts.app')

@section('content')
<section>
	<div class="container">
		<div class="d-flex align-items-center">
			<span class="position-absolute me-3 bg-orange d-lg-block d-none" style="width: 80px; height:20px;"></span>
			<h1 class="web-title text-black text-center text-uppercase w-100">REVIEW INFORMATION<br> & ADD-ONS</h1>
		</div>
		<div class="row">
			<div class="step-part mt-5">
				<div class="d-flex justify-content-between text-title stepper-wrapper">
					<a href="/flights/information" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item completed">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">1</div>
						<div class="mt-4 mx-2 step-name text-center fs-sm-4 fs-6">Information Details</div>
					</a>
					<a href="/flights/review-information" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item current">
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
<section class="py-5">
	<div class="container">
		<form action="" id="frm-review">
			@csrf
			<div class="row gy-5">
				<div class="col-lg-7 col-12">
					<div id="review_infor" class="mb-4-5">
						<h2 class="fw-800 custom-h3 text-black mb-3">REVIEW INFO</h2>
						<div class="contact-information border border-primary px-sm-4-5 p-3 rounded-3-5 mb-3">
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown collapsed" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#contact-information">
								<div class="row align-items-center">
									<div class="col-9">
										<div class="d-flex align-items-center">
											<span class="bg-primary d-block me-sm-4-5 me-3" style="width: 40px; height: 12px;"></span>
											<h5 class="fw-800 text-uppercase text-decoration-underline text-black text-title mb-0">YOUR CONTACT INFORMATION</h5>
										</div>
									</div>
									<div class="col-3 text-end">
										<div class="cursor-pointer d-inline-block" style="display: none" role="button">
											<div class="rounded-circle border border-primary" style="width: fit-content">
												<img class="m-2-5" src="{{ asset('assets/svg/solid/arrow-down-blue.svg') }}" alt="arrow" width="14px" height="14px">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="collapse pt-3" id="contact-information" style="">
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black d-flex">First Name</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img class="form-icon" src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="education">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="contact_first_name" name="contact_first_name" value="Lorem Ipsum" placeholder="Enter Value" readonly>
										</div>
										<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
									</div>
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black d-flex">Last Name</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img class="form-icon" src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="education">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="contact_last_name" name="contact_last_name" value="Lorem Ipsum" placeholder="Enter Value" readonly>
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
													<input class="form-control" type="hidden" id="nationality" name="nationality" value="" readonly>
												</div>
												<div class="dropdown-menu rounded-3-5 p-3 w-100 medium">
													@include('visa.section.countries_telephone')
												</div>
												<input class="form-control border-0 px-0 cursor-pointer" type="text" id="contact_phone" name="contact_phone" value="+84 1312312434" placeholder="Enter Value" readonly>
											</div>
											<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
										</div>
									</div>
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Your Email</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img class="form-icon" src="{{ asset('assets/svg/outline/email.svg') }}" data-icon-name="outline/email" alt="email">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="contact_email" name="contact_email" value="loremipisum@gmail.com" placeholder="Enter Value" readonly>
										</div>
										<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="applicant-information border border-primary px-sm-4-5 p-3 rounded-3-5 mb-3">
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown collapsed" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#applicant-information">
								<div class="row align-items-center">
									<div class="col-9">
										<div class="d-flex align-items-center">
											<span class="bg-primary d-block me-sm-4-5 me-3" style="width: 40px; height: 12px;"></span>
											<h5 class="fw-800 text-uppercase text-decoration-underline text-black text-title mb-0">APPLICANT(s)’s INFORMATION</h5>
										</div>
									</div>
									<div class="col-3 text-end">
										<div class="cursor-pointer d-inline-block" style="display: none" role="button">
											<div class="rounded-circle border border-primary" style="width: fit-content">
												<img class="m-2-5" src="{{ asset('assets/svg/solid/arrow-down-blue.svg') }}" alt="arrow" width="14px" height="14px">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="collapse pt-3" id="applicant-information" style="">
								<h5 class="text-black text-opacity-9 text-center fw-bold text-uppercase mb-4">APPLICANT NO.</h5>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">First Name</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img class="form-icon" src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="education">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="first_name" name="first_name" value="Lorem Ipsum" placeholder="Enter Value" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Last Name</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img class="form-icon" src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="education">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="last_name" name="last_name" value="Lorem Ipsum" placeholder="Enter Value" readonly>
										</div>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Title</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img class="form-icon" src="{{ asset('assets/svg/outline/community.svg') }}" data-icon-name="outline/community" alt="community">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="title" name="title" value="Female" placeholder="Please Select" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Day of Birth</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img class="form-icon" src="{{ asset('assets/svg/outline/date.svg') }}" data-icon-name="outline/date" alt="date">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="date_of_birth" name="date_of_birth" value="15/08/1985" placeholder="DD/MM/YY" readonly>
										</div>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Phone Number</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img class="form-icon" src="{{ asset('assets/svg/outline/phone.svg') }}" data-icon-name="outline/phone" alt="phone" width="24px" height="24px">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="phone_number" name="phone_number" value="+84 1312312434" placeholder="Enter Value"readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Email Address</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img class="form-icon" src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="date">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="email" name="email" value="loremipisum@gmail.com" placeholder="Enter Value" readonly>
										</div>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Country of Birth</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img class="form-icon" src="{{ asset('assets/svg/outline/map.svg') }}" data-icon-name="outline/map" alt="date">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="country_of_birth" name="country_of_birth" value="Chile" placeholder="Please Select" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Country of Residency</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img class="form-icon" src="{{ asset('assets/svg/outline/map.svg') }}" data-icon-name="outline/map" alt="date">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="country_of_residency" name="country_of_residency" value="Chile" placeholder="Please Select" readonly>
										</div>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Passport Number</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img class="form-icon" src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="date">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="passport_number" name="passport_number" value="C15C08" placeholder="Enter Value" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Expired Date</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img class="form-icon" src="{{ asset('assets/svg/outline/date.svg') }}" data-icon-name="outline/date" alt="date">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="expired_date" name="expired_date" value="15/09/2027" placeholder="DD/MM/YY" readonly>
										</div>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Issue Date</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img class="form-icon" src="{{ asset('assets/svg/outline/date.svg') }}" data-icon-name="outline/date" alt="date">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="issue_date" name="issue_date" value="15/09/2017" placeholder="DD/MM/YY" readonly>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<div id="trip_convniences" class="mb-4-5">
						<h2 class="fw-800 custom-h3 text-black mb-3">TRIP CONVENIENCES</h2>
						<div class="travel-insurance border border-primary px-sm-4-5 p-3 rounded-3-5 mb-3" >
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#travel-insurance" aria-expanded="false" aria-controls="travel-insurance">
								<div class="row align-items-center">
									<div class="col-9">
										<div class="d-flex align-items-center">
											<span class="bg-primary d-block me-sm-4-5 me-3" style="width: 40px; height: 12px;"></span>
											<h5 class="fw-800 text-uppercase text-decoration-underline text-black text-title mb-0">TRAVEL INSURANCE</h5>
										</div>
									</div>
									<div class="col-3 text-end">
										<div class="cursor-pointer d-inline-block" style="display: none" role="button">
											<div class="rounded-circle border border-primary" style="width: fit-content">
												<img class="m-2-5" src="{{ asset('assets/svg/solid/arrow-down-blue.svg') }}" alt="arrow" width="14px" height="14px">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="collapse travel-insurance pt-3 fw-medium" id="travel-insurance">
								<div class="mb-3">Package 1: from  9 to 173 USD</div>
								<div>Number of days: 9 - 15 days (19 USD)</div>
							</div>
						</div>
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
					<div class="d-flex justify-content-center gap-4 mt-4-5">
						<a href="/flights/information" class="btn btn-primary rounded-3-5 fw-bold text-title fs-5 py-2 w-50">Previous</a>
						<a href="/flights/payment" class="btn btn-primary rounded-3-5 fw-bold text-title fs-5 py-2 w-50">Next</a>
					</div>
				</div>
				<div class="col-lg-5 col-12">
					<div class="border-dashed bg-beige rounded-3 px-md-5 p-4-3 your-flight medium">						
						@include('flights.section.order_summary')
						<div class="d-flex justify-content-between align-items-center fw-bold mt-4">
							<span class="text-black text-opacity-9">Already had an account?</span>
							<a class="text-primary" href="#">Sign In Now!</a>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>
<script>
	$(document).ready(function(){
		var iconDown = "{{ asset('assets/svg/solid/arrow-down-blue.svg') }}";
		var iconUp = "{{ asset('assets/svg/solid/arrow-up-blue.svg') }}";

		$(".toggle-data-dropdown").click(function(){
			$(this).find("img").attr('src', (_, attr) => attr == iconDown ? iconUp : iconDown);
		});
	});
</script>
@endsection