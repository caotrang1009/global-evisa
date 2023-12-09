@extends('layouts.app')

@section('content')
<section class=" pb-0">
	<div class="container">
		<div class="row">
			<h1 class="web-title text-black text-center text-uppercase w-100">REVIEW INFORMATION & ADD-ONS</h1>
			<div class="step-part mt-4">
				<div class="d-flex justify-content-center text-title stepper-wrapper">
					<a href="{{ url("/flights/information") }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item completed">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">1</div>
						<div class="mt-3 step-name text-center fs-6">Order Information</div>
					</a>
					<a href="{{ url("/flights/review-information") }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item current">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">2</div>
						<div class="mt-3 step-name text-center fs-6">Review Info</div>
					</a>
					<a href="{{ url("/flights/payment") }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">3</div>
						<div class="mt-3 step-name text-center fs-6">Payment</div>
					</a>
					<a href="{{ url("/flights/payment-success/online") }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">4</div>
						<div class="mt-3 step-name text-center fs-6">Confirmation</div>
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
						<div class="contact-information border border-primary px-sm-5 p-3 rounded-3-5 mb-3">
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown collapsed" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#contact-information">
								<div class="row align-items-center">
									<div class="col-9">
										<div class="d-flex align-items-center">
											<span class="bg-primary d-block me-sm-4-5 me-3" style="width: 40px; height: 12px;"></span>
											<h4 class="headline fw-bold text-uppercase text-decoration-underline text-black mb-0">YOUR CONTACT INFORMATION</h4>
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
										<label class="text-black fw-medium medium">First Name</label>
										<div class="fw-semibold">Lorem Ipsum</div>
									</div>
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Last Name</label>
										<div class="fw-semibold">Lorem Ipsum</div>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Your Phone Number</label>
										<div class="fw-semibold">+84 1312312434</div>
									</div>
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Your Email</label>
										<div class="fw-semibold">loremipisum@gmail.com</div>
									</div>
								</div>
							</div>
						</div>
						<div class="applicant-information border border-primary px-sm-5 p-3 rounded-3-5 mb-3">
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown collapsed" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#applicant-information">
								<div class="row align-items-center">
									<div class="col-9">
										<div class="d-flex align-items-center">
											<span class="bg-primary d-block me-sm-4-5 me-3" style="width: 40px; height: 12px;"></span>
											<h4 class="headline fw-bold text-uppercase text-decoration-underline text-black mb-0">APPLICANT(s)’s INFORMATION</h4>
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
										<label class="text-black fw-medium medium">First Name</label>
										<div class="fw-semibold">Lorem Ipsum</div>
									</div>
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Last Name</label>
										<div class="fw-semibold">Lorem Ipsum</div>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Title</label>
										<div class="fw-semibold">Female</div>
									</div>
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Day of Birth</label>
										<div class="fw-semibold">15/08/1985</div>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Phone Number</label>
										<div class="fw-semibold">+84 1312312434</div>
									</div>
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Email Address</label>
										<div class="fw-semibold">loremipisum@gmail.com</div>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Country of Birth</label>
										<div class="fw-semibold">Chile</div>
									</div>
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Country of Residency</label>
										<div class="fw-semibold">Chile</div>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Passport Number</label>
										<div class="fw-semibold">C15CO8</div>
									</div>
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Expired Date</label>
										<div class="fw-semibold">15/08/1985</div>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Issue Date</label>
										<div class="fw-semibold">15/08/1985</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<div id="trip_convniences" class="mb-4-5">
						<h2 class="fw-800 custom-h3 text-black mb-3">TRIP CONVENIENCES</h2>
						<div class="travel-insurance border border-primary px-sm-5 p-3 rounded-3-5 mb-3" >
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#travel-insurance" aria-expanded="false" aria-controls="travel-insurance">
								<div class="row align-items-center">
									<div class="col-9">
										<div class="d-flex align-items-center">
											<span class="bg-primary d-block me-sm-4-5 me-3" style="width: 40px; height: 12px;"></span>
											<h4 class="headline fw-bold text-uppercase text-decoration-underline text-black mb-0">TRAVEL INSURANCE</h4>
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
								<div class="mb-3">Package 1: <span class="fw-semibold">from  9 to 173 USD</span></div>
								<div class="mb-3">Number of days: <span class="fw-semibold">9 - 15 days (19 USD)</span></div>
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
						<a href="{{ url("/flights/information") }}" class="btn btn-primary rounded-3-5 fw-bold text-title fs-5 py-2 w-50">Previous</a>
						<a href="{{ url("/flights/payment") }}" class="btn btn-primary rounded-3-5 fw-bold text-title fs-5 py-2 w-50">Next</a>
					</div>
				</div>
				<div class="col-lg-5 col-12">
					<div class="border-dashed bg-beige rounded-3 px-md-5 p-4-4 your-flight medium">						
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