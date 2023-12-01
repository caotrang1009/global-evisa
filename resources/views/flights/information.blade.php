@extends('layouts.app')

@section('content')
<form action="/flights/review-information">
	@csrf
	<section class="py-5">
		<div class="container">
		<div class="d-flex align-items-center w-100" style="height: 220px">
			<div class="d-flex align-items-center w-100">
				<div class="d-flex justify-content-center w-100">
				<h1 class="page-title text-secondary text-center d-none d-md-block">FILL IN <br> INFORMATION DETAILS</h1>
				<h2 class="text-secondary text-center d-sm-none fs-1">FILL IN <br> INFORMATION DETAILS</h2>
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
							<div role="button" class="border border-primary rounded-circle d-flex justify-content-center align-items-center step-button" style="width: 5rem; height: 5rem">
								<span class="fw-semibold text-primary fs-4 step-number">2</span>
								<h4 class="step-name d-none d-sm-block">Review Information</h4>
							</div>
						</a>
						<div class="step-line"></div>
						<a href="/flights/payment">
							<div role="button" class="border border-primary rounded-circle d-flex justify-content-center align-items-center step-button" style="width: 5rem; height: 5rem">
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
		<div class="row g-sm-5 g-4">
			<div class="col-lg-6-5">
				<div class="border border-primary rounded-4 p-md-5 p-4 mb-5">
					<h4 class="fw-bold text-black mb-0">CONTACT INFORMATION</h4>
					<div class="my-3">
				
						<div class="d-flex justify-content-between flex-wrap">
						<div class="mb-3">
							<label for="" class="form-label fw-bold">Family Name <span class="color-icon-form" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="This bottom tooltip is themed via CSS variables"><i class="fas fa-question-circle"></i></span></label>
							<input type="text" class="form-control input-custom ps-5 border rounded-3 min-width-custom" id="" placeholder="Enter Value">
							<span class="input-addon"><i class="far fa-user-circle"></i></span>
						</div>
						<div class="mb-3">
							<label for="" class="form-label fw-bold">Given Name <span class="color-icon-form" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="This bottom tooltip is themed via CSS variables"><i class="fas fa-question-circle"></i></span></label>
							<input type="text" class="form-control input-custom ps-5 border rounded-3 min-width-custom" id="" placeholder="Enter Value">
							<span class="input-addon"><i class="far fa-user"></i></span>
						</div>
						</div>
						<div class="d-flex justify-content-between flex-wrap">
						<div class="mb-3">
							<label for="" class="form-label fw-bold">Phone Number <span class="color-icon-form" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="This bottom tooltip is themed via CSS variables"><i class="fas fa-question-circle"></i></span></label>
							<div class="d-flex">
							<input type="text" class="form-control input-custom border rounded-3 me-1" style="max-width: 68px" id="" placeholder="+84">
							<div>
								<input type="text" class="form-control input-custom ps-5 border rounded-3" id="" placeholder="Enter Value" style="max-width: 230px">
								<span class="input-addon"><i class="fas fa-phone-alt"></i></span>
							</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="form-label fw-bold">Email Address <span class="color-icon-form" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="This bottom tooltip is themed via CSS variables"><i class="fas fa-question-circle"></i></span></label>
							<input type="email" class="form-control input-custom ps-5 border rounded-3 min-width-custom" id="" placeholder="Enter Value">
							<span class="input-addon"><i class="far fa-envelope"></i></span>
						</div>
						</div>
						<p class="fs-6"><strong>Note*</strong> Please be careful - Passenger information must match your passport or photo ID</p>
					
					</div>
				</div>
				<div class="border border-primary rounded-4 p-md-5 p-4">
					<h4 class="fw-bold text-black mb-0">PASSENGER INFORMATION</h4>
					<div class="my-3">
						<div class="d-flex justify-content-between flex-wrap">
						<div class="mb-3">
							<label for="" class="form-label fw-bold">Family Name <span class="color-icon-form" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="This bottom tooltip is themed via CSS variables"><i class="fas fa-question-circle"></i></span></label>
							<input type="text" class="form-control input-custom ps-5 border rounded-3" id="" style="min-width: 300px" placeholder="Enter Value">
							<span class="input-addon">
								<i class="fal fa-money-check-edit"></i>
							</span>
						</div>
						<div class="mb-3">
							<label for="" class="form-label fw-bold">Given Name <span class="color-icon-form" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="This bottom tooltip is themed via CSS variables"><i class="fas fa-question-circle"></i></span></label>
							<input type="text" class="form-control input-custom ps-5 border rounded-3" id="" style="min-width: 300px" placeholder="Enter Value">
							<span class="input-addon">
							<i class="fal fa-money-check-edit"></i>
							</span>
						</div>
						</div>
						<div class="d-flex justify-content-between flex-wrap">
							<div class="mb-3">
								<label for="" class="form-label fw-bold">Gender <span class="color-icon-form" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="This bottom tooltip is themed via CSS variables"><i class="fas fa-question-circle"></i></span></label>
								<div class="select-location-1">
									<div type="button" data-bs-toggle="dropdown" aria-expanded="false" class="">
										<div class="input-group input-search-flight border rounded-3" style="min-width: 300px">
											<span class="input-group-text border-0 bg-white rounded-3" id="basic-addon1"><i class="fal fa-venus-mars"></i></span>
											<input type="text" id="originLocation" name="originLocation[]" class="form-control border-0" placeholder="Please Select" readonly="">
											<button class="btn btn-light dropdown-toggle bg-white border-0"></button>
										</div>
									</div>
									
									<div class="dropdown-menu mx-0 rounded-3 shadow data-dropdown-location" style="min-width: 300px;" data-bs-theme="light">
										<div class="border-bottom">
											<p class="ms-3 my-2">Femail</p>
										</div>
										<div class="border-bottom">
											<p class="ms-3 my-2">Male</p>
										</div>
										<div>
											<p class="ms-3 my-2">Other</p>
										</div>

									</div>
								</div>
							</div>
						<div class="mb-3">
							<label for="" class="form-label fw-bold"> Date of birth<span class="color-icon-form" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="This bottom tooltip is themed via CSS variables"><i class="fas fa-question-circle"></i></span></label>
							<input type="text" class="form-control input-custom ps-5 border rounded-3" id="" style="min-width: 300px" placeholder="DD/MM/YYYY">
							<span class="input-addon"><i class="far fa-calendar"></i></span>
						</div>
						</div>
						<div class="d-flex justify-content-between flex-wrap">
						<div class="mb-3">
							<label for="" class="form-label fw-bold">Phone Number <span class="color-icon-form" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="This bottom tooltip is themed via CSS variables"><i class="fas fa-question-circle"></i></span></label>
							<div class="d-flex">
							<input type="text" class="form-control input-custom border rounded-3 me-1" style="max-width: 68px" id="" placeholder="+84">
							<div>
								<input type="text" class="form-control input-custom ps-5 border rounded-3" id="" placeholder="Enter Value" style="max-width: 230px">
								<span class="input-addon"><i class="fas fa-phone-alt"></i></span>
							</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="form-label fw-bold">Email Address <span class="color-icon-form" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="This bottom tooltip is themed via CSS variables"><i class="fas fa-question-circle"></i></span></label>
							<input type="email" class="form-control input-custom ps-5 border rounded-3" id="" style="min-width: 300px" placeholder="Enter Value">
							<span class="input-addon"><i class="far fa-envelope"></i></span>
						</div>
						</div>
						<div class="d-flex justify-content-between flex-wrap">
							<div class="mb-3">
								<label for="" class="form-label fw-bold">Country of Birth <span class="color-icon-form" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="This bottom tooltip is themed via CSS variables"><i class="fas fa-question-circle"></i></span></label>
								<div class="select-location-1">
								<div type="button" data-bs-toggle="dropdown" aria-expanded="false" class="">
									<div class="input-group input-search-flight min-width-custom border rounded-3">
									<span class="input-group-text border-0 bg-white rounded-3" id="basic-addon1"><i class="far fa-map-marker-alt"></i></span>
									<input type="text" id="originLocation" name="originLocation[]" class="form-control border-0" placeholder="Please Select" aria-label="Text input with 2 dropdown buttons">
									<button class="btn btn-light dropdown-toggle bg-white border-0"></button>
									</div>
								</div>
								
								<div class="dropdown-menu mx-0 rounded-3 shadow data-dropdown-location min-width-custom" data-bs-theme="light" style="">
									<input type="search" class="form-control" autocomplete="false" placeholder="Enter input">
									<div id="most-popular">
									<p class="ms-3 fw-semibold my-2">Most Popular</p>
									<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="New York - NYC" data-location-type="originLocation"><i class="fas fa-globe-europe"></i> New York - NYC</div>
									<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="BangKok - BKK" data-location-type="originLocation"><i class="fas fa-globe-europe"></i> BangKok - BKK</div>
									<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="Singapore - SIN" data-location-type="originLocation"><i class="fas fa-globe-europe"></i> Singapore - SIN</div>
									</div>
									<div id="alphabetically">
									<p class="ms-3 fw-semibold my-2">Alphabetically</p>
									<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="New York - NYC" data-location-type="originLocation"><i class="fas fa-globe-europe"></i> New York - NYC</div>
									<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="BangKok - BKK" data-location-type="originLocation"><i class="fas fa-globe-europe"></i> BangKok - BKK</div>
									<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="Singapore - SIN" data-location-type="originLocation"><i class="fas fa-globe-europe"></i> Singapore - SIN</div>
									</div>
								</div>
								</div>
							</div>
						<div class="mb-3">
							<label for="" class="form-label fw-bold">Country of Residency <span class="color-icon-form" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="This bottom tooltip is themed via CSS variables"><i class="fas fa-question-circle"></i></span></label>
							<div class="select-location-1">
								<div type="button" data-bs-toggle="dropdown" aria-expanded="false" class="">
									<div class="input-group input-search-flight min-width-custom border rounded-3">
									<span class="input-group-text border-0 bg-white rounded-3" id="basic-addon1"><i class="far fa-map-marker-alt"></i></span>
									<input type="text" id="originLocation" name="originLocation[]" class="form-control border-0" placeholder="Please Select" aria-label="Text input with 2 dropdown buttons">
									<button class="btn btn-light dropdown-toggle bg-white border-0"></button>
									</div>
								</div>
							{{-- Data dropdown 1 --}}
							<div class="dropdown-menu mx-0 rounded-3 shadow data-dropdown-location min-width-custom" data-bs-theme="light">
								<input type="search" class="form-control" autocomplete="false" placeholder="Enter input">
								<div id="most-popular">
								<p class="ms-3 fw-semibold my-2">Most Popular</p>
								<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="New York - NYC" data-location-type="originLocation"><i class="fas fa-globe-europe"></i> New York - NYC</div>
								<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="BangKok - BKK" data-location-type="originLocation"><i class="fas fa-globe-europe"></i> BangKok - BKK</div>
								<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="Singapore - SIN" data-location-type="originLocation"><i class="fas fa-globe-europe"></i> Singapore - SIN</div>
								</div>
								<div id="alphabetically">
								<p class="ms-3 fw-semibold my-2">Alphabetically</p>
								<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="New York - NYC" data-location-type="originLocation"><i class="fas fa-globe-europe"></i> New York - NYC</div>
								<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="BangKok - BKK" data-location-type="originLocation"><i class="fas fa-globe-europe"></i> BangKok - BKK</div>
								<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="Singapore - SIN" data-location-type="originLocation"><i class="fas fa-globe-europe"></i> Singapore - SIN</div>
								</div>
							</div>
							</div>
						</div>
						</div>
						<div class="d-flex justify-content-between flex-wrap">
						<div class="mb-3">
							<label for="" class="form-label fw-bold">Passport Number <span class="color-icon-form" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="This bottom tooltip is themed via CSS variables"><i class="fas fa-question-circle"></i></span></label>
							<input type="text" class="form-control input-custom ps-5 border rounded-3 min-width-custom" id="" placeholder="Enter Value">
							<span class="input-addon">
								<i class="fal fa-money-check-edit"></i>
							</span>
						</div>
						<div class="mb-3">
							<label for="" class="form-label fw-bold">Expired Date<span class="color-icon-form" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="This bottom tooltip is themed via CSS variables"><i class="fas fa-question-circle"></i></span></label>
							<input type="email" class="form-control input-custom ps-5 border rounded-3" id="" style="min-width: 300px" placeholder="DD/MM/YYYY">
							<span class="input-addon"><i class="far fa-calendar"></i></span>
						</div>
						</div>
						<p class="fs-6"><strong>Note*</strong> If there are any other passengers,  all information collected will be the same. </p>
					</div>
				</div>
				<div class="confirm mt-5">
					<div class="form-check">
						<input class="form-check-input p-2 me-3" type="checkbox" value="" name="confirm-information" id="confirm-information">
						<label class="form-check-label" for="confirm-information">
							I would like to confirm that the above information is correct.
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input p-2 me-3" type="checkbox" value="" name="confirm-terms" id="confirm-terms">
						<label class="form-check-label" for="confirm-terms">
							I have read and agree to the <a href="#" class="text-primary text-decoration-underline fw-semibold"> Terms and Conditions</a> as well as the company's <a href="#" class="text-primary text-decoration-underline fw-semibold">Policies</a> .
						</label>
					</div>
				</div>
			</div>
			<div class="col-lg-5-5">
				<div class="border border-primary rounded-4 mb-5 your-flight headline">
					@include('flights.section.order_summary')
					<a href="{{ url('/flights/review-information') }}" class="btn btn-orange btn-lg rounded-4 py-3 fw-bold text-title fs-6 w-100 btn-payment mt-4">Go To Next Page</a>
				</div>
			</div>
		</div>
		</div>
	</section>
</form>

@endsection