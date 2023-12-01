@extends('layouts.app')

@section('content')
<form>
	<section class="py-5">
		<div class="container">
		<div class="d-flex align-items-center w-100" style="height: 220px">
			<div class="d-flex align-items-center w-100">
				<span class="d-block me-3" style="width: 70px; height: 15px; background-color: #FFA852"></span>
				<div class="d-flex justify-content-center w-100">
					<h1 class="page-title text-secondary text-center d-none d-md-block">PAYMENT</h1>
					<h2 class="text-secondary text-center d-sm-none fs-1">PAYMENT</h2>
				</div>
			</div>
		</div>
		</div>
	</section>

	<section class="pb-6">
		<div class="container">
			<div class="row justify-content-center">
					<div class="step-container w-md-75">
						<a href="/flights/information">
							<div role="button" class="border border-primary rounded-circle d-flex justify-content-center align-items-center step-button active" style="width: 5rem; height: 5rem">
								<span class="fw-semibold text-primary fs-4 step-number">1</span>
								<h4 class="step-name d-none d-sm-block">Order Information</h4>
							</div>
						</a>
						<div class="step-line"></div>
						<a href="/flights/review-information">
							<div role="button" class="border border-primary rounded-circle d-flex justify-content-center align-items-center step-button active" style="width: 5rem; height: 5rem">
								<span class="fw-semibold text-primary fs-4 step-number">2</span>
								<h4 class="step-name d-none d-sm-block">Review Information</h4>
							</div>
						</a>
						<div class="step-line"></div>
						<a href="/flights/payment">
							<div role="button" class="border border-primary rounded-circle d-flex justify-content-center align-items-center step-button active" style="width: 5rem; height: 5rem">
								<span class="fw-semibold text-primary fs-4 step-number">3</span>
								<h4 class="step-name d-none d-sm-block">Payment</h4>
							</div>
						</a>
					</div>
			  </div>
		</div>
	</section>

	<section class="py-5">
		<div class="container">
			<div class="row">
				{{-- Left Element --}}
				<div class="col-lg-6-5">
					<div class="select-payment-method border border-primary px-5 py-3 rounded-3 mb-5" >
						<h2 class="my-4 fw-bold text-secondary">PAYMENT METHOD</h2>
						<div class="d-flex justify-content-between mb-5 flex-wrap">
							<label class="payment-method-label" for="payment_method_1">
								<div class="d-flex">
									<div>
										<input class="form-check-input fs-5 me-2 mt-0" type="radio" name="upgrade_options" id="payment_method_1" value="option1">
									</div>
									<div class="border rounded-3 p-4 payment-method-card">
										<h5 class="fw-bold mb-4">Credit or Debit Card:</h5>
										<div class="d-flex justify-content-between gap-3 flex-wrap">
											<img class="me-5" src="{{ asset('assets/images/visa.png') }}" alt="Visa Card">
											<img src="{{ asset('assets/images/master.png') }}" alt="Master Card">
										</div>
									</div>
								</div>
							</label>
							<label class="payment-method-label" for="payment_method_2">
								<div class="d-flex">
									<div>
										<input class="form-check-input fs-5 me-2 mt-0" type="radio" name="upgrade_options" id="payment_method_2" value="option1">
									</div>
									<div class="border rounded-3 p-4 payment-method-card">
										<h5 class="fw-bold mb-4">Credit or Debit Card:</h5>
										<div class="d-flex justify-content-between gap-3 flex-wrap">
											<img class="me-sm-5" src="{{ asset('assets/images/pp.png') }}" alt="Pay Pal">
											<img src="{{ asset('assets/images/ae.png') }}" alt="America Express">
										</div>
									</div>
								</div>
							</label>
						</div>
						<p class="mb-5">
							<strong>Lorem ipsum dolor</strong> sit amet consectetur adipisicing elit. Sunt, dicta voluptatem corporis voluptate quas ullam, magnam vero nisi facilis animi exercitationem dolores rerum cum? Quae ipsum cum reprehenderit necessitatibus odio!
						</p>
					</div>

					<div class="card-information border border-primary px-5 py-3 rounded-3 my-5 pb-5" >
						<h2 class="my-4 fw-bold text-secondary">CARD INFORMATION</h2>
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label fw-bold">Card Holder Name</label>
							<input type="text" class="form-control rounded-3 time-input-height" id="exampleFormControlInput1" placeholder="some thing in here">
						</div>
						<div class="d-flex gap-3 flex-sm-wrap flex-nowrap">
							<div>
								<label class="form-label fw-bold" for="input_card_number" style="width: 16rem">Card Number</label>
								<div class="input-group time-input-height border rounded-3">
									<input type="text" class="form-control border-0 rounded-3" id="input_card_number" placeholder="Enter your card" aria-label="">
									<button type="button" class="btn"><i class="fal fa-eye-slash"></i></button>
								</div>
							</div>

							<div>
								<label class="form-label fw-bold" for="expired_month">Expired Month</label>
								<div class="input-group time-input-height border rounded-3" style="width: 8.75rem">
									<select class="form-select form-control border-0 rounded-3" id="expired_month">
										<option selected>...</option>
										<option value="1">One</option>
										<option value="2">Two</option>
										<option value="3">Three</option>
									</select>
								</div>
							</div>

							<div>
								<label class="form-label fw-bold" for="expired_year">Expired Year</label>
								<div class="input-group time-input-height border rounded-3" style="width: 8.75rem">
									<select class="form-select form-control border-0 rounded-3" id="expired_year">
										<option selected>...</option>
										<option value="1">One</option>
										<option value="2">Two</option>
										<option value="3">Three</option>
									</select>
								</div>
							</div>

							<div>
								<label class="form-label fw-bold" for="input_security_c" style="width: 8.75rem">Security Code</label>
								<div class="input-group time-input-height border rounded-3">
									<input type="text" class="form-control border-0 rounded-3" id="input_security_c" aria-label="">
									<button type="button" class="btn"><i class="fal fa-eye-slash"></i></button>
								</div>
							</div>
						</div>
					</div>

					<div class="add-payment-card border border-primary px-5 pt-3 pb-5 rounded-3 mb-4" >
						<div role="button" data-bs-toggle="collapse" data-bs-target="#add_another_card" aria-expanded="false" aria-controls="add_another_card">
							<div class="d-flex justify-content-between py-3 mt-3">
								<h2 class="fw-bold text-secondary">ADD ANOTHER CARD</h2>
								<div class="d-flex justify-content-center align-items-center button-control-collapse rounded-circle border border-primary" role="button">
									<i class="fas fa-plus fs-4 text-primary"></i>
								</div>
							</div>
						</div>

						<div class="collapse" id="add_another_card">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label fw-bold">Card Holder Name</label>
								<input type="text" class="form-control rounded-3 time-input-height" id="exampleFormControlInput1" placeholder="some thing in here">
							</div>
							<div class="d-flex gap-3 flex-sm-wrap flex-nowrap">
								<div>
									<label class="form-label fw-bold" for="input_card_number" style="width: 16rem">Card Number</label>
									<div class="input-group time-input-height border rounded-3">
										<input type="text" class="form-control border-0 rounded-3" id="input_card_number" placeholder="Enter your card" aria-label="">
										<button type="button" class="btn"><i class="fal fa-eye-slash"></i></button>
									</div>
								</div>
	
								<div>
									<label class="form-label fw-bold" for="expired_month">Expired Month</label>
									<div class="input-group time-input-height border rounded-3" style="width: 8.75rem">
										<select class="form-select form-control border-0 rounded-3" id="expired_month">
											<option selected>...</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
								</div>
	
								<div>
									<label class="form-label fw-bold" for="expired_year">Expired Year</label>
									<div class="input-group time-input-height border rounded-3" style="width: 8.75rem">
										<select class="form-select form-control border-0 rounded-3" id="expired_year">
											<option selected>...</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
								</div>
	
								<div>
									<label class="form-label fw-bold" for="input_security_c" style="width: 8.75rem">Security Code</label>
									<div class="input-group time-input-height border rounded-3">
										<input type="text" class="form-control border-0 rounded-3" id="input_security_c" aria-label="">
										<button type="button" class="btn"><i class="fal fa-eye-slash"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				{{-- Right Element --}}
				<div class="col-lg-5-5">
					<div class="border border-primary rounded-4 mb-5 your-flight headline">
						@include('flights.section.order_summary')
						<a href="{{ url('/flights') }}" class="btn btn-orange btn-lg rounded-4 py-3 fw-bold text-title fs-6 w-100 btn-payment mt-4">Back To Home</a>
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

</form>
<script>
	$(document).ready(function () {
		
	});
</script>
@endsection