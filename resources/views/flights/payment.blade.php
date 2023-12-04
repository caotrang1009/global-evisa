@extends('layouts.app')

@section('content')
<section>
	<div class="container">
		<div class="d-flex align-items-center">
			<span class="position-absolute me-3 bg-orange d-lg-block d-none" style="width: 80px; height:20px;"></span>
			<h1 class="web-title page-title text-black text-center text-uppercase w-100">PAYMENT</h1>
		</div>
		<div class="row">
			<div class="step-part flight mt-5">
				<div class="d-flex justify-content-between text-title stepper-wrapper">
					<a href="{{ url('flights/information') }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item completed">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">1</div>
						<div class="mt-4 mx-2 step-name text-center fs-sm-4 fs-6">Information Details</div>
					</a>
					<a href="{{ url('flights/review-information') }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item completed">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">2</div>
						<div class="mt-4 mx-2 step-name text-center fs-sm-4 fs-6">Review Info</div>
					</a>
					<a href="{{ url('flights/payment') }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item current">
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
		<div class="row gy-5">
			<div class="col-lg-7 col-12">
				<div class="select-payment-method payment-method border border-primary rounded-3-5 mb-5">
					<div class="row gx-3 gy-4">
						<div class="col-12">							
							<h2 class="fw-800 custom-h1 text-black mb-4">PAYMENT METHOD</h2>
						</div>
						<div class="col-sm-6 col-12">
							<label class="payment-method-item w-100" for="payment_method_1" data-bs-target="#bank-transfer">
								<div class="row">
									<div class="col-2">
										<input class="form-check-input fs-5 me-2 mt-0" type="radio" name="payment_method" id="payment_method_1" value="option1">
									</div>
									<div class="col-10 ps-0">
										<div class="p-4 rounded-4 bg-white payment-method-card cursor-pointer">
											<h5 class="fw-semibold mb-3 text-black text-center method-title">Credit or Debit Card:</h5>											
											<div class="d-flex justify-content-between flex-wrap method-icon">
												<img src="{{ asset('assets/images/visa.png') }}" alt="Visa Card" height="52px">
												<img src="{{ asset('assets/images/master.png') }}" alt="Master Card" height="52px">
											</div>
										</div>
									</div>
								</div>
							</label>
						</div>
						<div class="col-sm-6 col-12">
							<label class="payment-method-item w-100" for="payment_method_2">
								<div class="row">
									<div class="col-2">
										<input class="form-check-input fs-5 me-2 mt-0" type="radio" name="payment_method" id="payment_method_2" value="option1">
									</div>
									<div class="col-10 ps-0">
										<div class="p-4 rounded-4 bg-white payment-method-card cursor-pointer">
											<h5 class="fw-semibold mb-3 text-black text-center method-title">Other Types of Payment:</h5>
											<div class="d-flex justify-content-between flex-wrap method-icon">
												<img src="{{ asset('assets/images/pp.png') }}" alt="Pay Pal" height="52px">
												<img src="{{ asset('assets/images/ae.png') }}" alt="America Express" height="52px">
											</div>
										</div>
									</div>
								</div>
							</label>
						</div>
						<div class="col-12">
							<div class="medium text-black text-justify"><strong>Lorem ipsum dolor</strong> dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<a href="{{ url('/flights') }}" class="btn btn-primary btn-lg rounded-4 py-3 px-7 fw-bold text-title fs-6">Proceed To Payment</a>
				</div>
				<div class="confirm pt-5">
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
				<div class="border border-primary rounded-3-5 p-md-5 p-4 your-flight medium">
					@include('flights.section.order_summary')
				</div>
				<div class="mt-5">
					<div class="d-flex">
						<div class="me-3">
							<i class="fal fa-shield-check fs-1"></i>
						</div>
						<div>
							<p class="fw-bold mb-0">Your data is secured by us!</p>
							<p class="small mb-0">For more details please read <a href="#" class="text-primary fw-bold text-decoration-underline">Global eVISA Security Policies</a></p>
						</div>
					</div>
					<div class="d-flex align-items-center mt-4">
						<a href="/flights/review-information" role="button" class="btn btn-primary time-input-height d-flex align-items-center px-5"><i class="fal fa-long-arrow-left fs-1 text-white"></i></a>
						<span class="text-primary fw-semibold ms-4">Back to previous step</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection