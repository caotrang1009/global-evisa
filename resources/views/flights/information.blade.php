@extends('layouts.app')

@section('content')
<form action="/flights/review-information">
	@csrf
	<section class="py-5">
		<div class="container">
		<div class="d-flex align-items-center w-100" style="height: 220px">
			<div class="d-flex align-items-center w-100">
				<span class="d-block me-3" style="width: 70px; height: 15px; background-color: #FFA852"></span>
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
		<div class="row">
			<div class="col-lg-7">
				<div class="border rounded-4 px-3 py-3 mb-5">
					<p class="fs-2 fw-bold text-secondary">CONTACT INFORMATION</p>
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
				<div class="border rounded-4 px-3 py-3">
					<p class="fs-2 fw-bold text-secondary">PASSENGER INFORMATION</p>
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
			<div class="col-lg-5">
				<div class="border rounded-4 px-4 py-3 mb-5">
					<p class="fs-2 fw-bold text-secondary">FLIGHT DETAIL</p>
					<div class="mx-3">
						<div class="dashed-line my-4"></div>
						<p class="fw-bold fs-4 text-secondary">• Flight 1 - Saturday, 30th Sep 2023</p>
						<div class="d-flex justify-content-between align-items-end flex-wrap">
							<div>
								<label for="" class="form-label fw-bold">From Country 1</label>
								<div class="select-location-1 mt-2">
									<div type="button">
										<div class="input-group mb-3 input-search-flight" style="max-width: 190px">
											<span class="input-group-text" id="basic-addon1"><i class="far fa-map-marker-alt"></i></span>
											<input type="text" id="originLocation" name="originLocation[]" class="form-control input-custom"
												placeholder="Location 1" readonly>
										</div>
									</div>
								</div>
							</div>
							<span
								class="bg-btn-search mb-1 rounded-3 d-flex justify-content-center align-items-center btn-add-flight-small text-white mb-3"><i
									class="fas fa-arrow-right"></i></span>
							<div>
								<label for="" class="form-label fw-bold">To Country 2 </label>
								<div class="select-location-1 mt-2">
									<div type="button" aria-expanded="false">
										<div class="input-group mb-3 input-search-flight" style="max-width: 190px">
											<span class="input-group-text" id="basic-addon1"><i class="far fa-map-marker-alt"></i></span>
											<input type="text" id="originLocation" name="originLocation[]" class="form-control input-custom"
												placeholder="Location 2" readonly>
										</div>
									</div>
								</div>
							</div>
						</div>
						<p class="fw-bold fs-5 text-secondary my-3">• Flight Departure - Monday, 18th Sep 2023</p>
						<div style="font-size: 12px" class="my-3">
							<img width="35" height="35" src="https://www.gstatic.com/flights/airline_logos/70px/dark/TG.png" alt="logo">
						<span>Vietnam Airlines</span>
						</div>
						<div>
						<div class="d-flex justify-content-between align-items-center">
							<p>Departure Time: </p>
							<p>9:30</p>
						</div>
						<div class="d-flex justify-content-between align-items-center">
							<p>Arrival Time:  </p>
							<p>10:30</p>
						</div>
						<div class="d-flex justify-content-between align-items-center">
							<p>Estimate Time: </p>
							<p>1 hours</p>
						</div>
						<div class="d-flex justify-content-between align-items-center">
							<p>1 stop at Country’s Name</p>
							<p>1h30m</p>
						</div>
						</div>
					</div>
					<div class="mx-3">
						<div class="dashed-line my-4"></div>
						<p class="fw-bold fs-4 text-secondary">• Flight 2 - Saturday, 30th Sep 2023</p>
						<div class="d-flex justify-content-between align-items-end flex-wrap">
							<div>
								<label for="" class="form-label fw-bold">From Country 1</label>
								<div class="select-location-1 mt-2">
									<div type="button">
										<div class="input-group mb-3 input-search-flight" style="max-width: 190px">
											<span class="input-group-text" id="basic-addon1"><i class="far fa-map-marker-alt"></i></span>
											<input type="text" id="originLocation" name="originLocation[]" class="form-control input-custom"
												placeholder="Location 1" readonly>
										</div>
									</div>
								</div>
							</div>
							<span
								class="bg-btn-search mb-1 rounded-3 d-flex justify-content-center align-items-center btn-add-flight-small text-white mb-3"><i
									class="fas fa-arrow-right"></i></span>
							<div>
								<label for="" class="form-label fw-bold">To Country 2 </label>
								<div class="select-location-1 mt-2">
									<div type="button" aria-expanded="false">
										<div class="input-group mb-3 input-search-flight" style="max-width: 190px">
											<span class="input-group-text" id="basic-addon1"><i class="far fa-map-marker-alt"></i></span>
											<input type="text" id="originLocation" name="originLocation[]" class="form-control input-custom"
												placeholder="Location 2" readonly>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div style="font-size: 12px" class="my-3">
							<img width="35" height="35" src="https://www.gstatic.com/flights/airline_logos/70px/dark/TG.png" alt="logo">
						<span>Vietnam Airlines</span>
						</div>
						<div>
						<div class="d-flex justify-content-between align-items-center">
							<p>Departure Time: </p>
							<p>9:30</p>
						</div>
						<div class="d-flex justify-content-between align-items-center">
							<p>Arrival Time:  </p>
							<p>10:30</p>
						</div>
						<div class="d-flex justify-content-between align-items-center">
							<p>Estimate Time: </p>
							<p>1 hours</p>
						</div>
						<div class="d-flex justify-content-between align-items-center">
							<p>1 stop at Country’s Name</p>
							<p>1h30m</p>
						</div>
						</div>
					</div>
					<div class="">
						<div class="dashed-line my-4"></div>
						<p class="fw-bold fs-4 text-secondary">• Flight 3 - Saturday, 30th Sep 2023</p>
						<div class="d-flex justify-content-between align-items-end flex-wrap">
							<div>
								<label for="" class="form-label fw-bold">From Country 1</label>
								<div class="select-location-1 mt-2">
									<div type="button">
										<div class="input-group mb-3 input-search-flight" style="max-width: 190px">
											<span class="input-group-text" id="basic-addon1"><i class="far fa-map-marker-alt"></i></span>
											<input type="text" id="originLocation" name="originLocation[]" class="form-control input-custom"
												placeholder="Location 1" readonly>
										</div>
									</div>
								</div>
							</div>
							<span
								class="bg-btn-search mb-1 rounded-3 d-flex justify-content-center align-items-center btn-add-flight-small text-white mb-3"><i
									class="fas fa-arrow-right"></i></span>
							<div>
								<label for="" class="form-label fw-bold">To Country 2 </label>
								<div class="select-location-1 mt-2">
									<div type="button" aria-expanded="false">
										<div class="input-group mb-3 input-search-flight" style="max-width: 190px">
											<span class="input-group-text" id="basic-addon1"><i class="far fa-map-marker-alt"></i></span>
											<input type="text" id="originLocation" name="originLocation[]" class="form-control input-custom"
												placeholder="Location 2" readonly>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div style="font-size: 12px" class="my-3">
						<img width="35" height="35" src="https://www.gstatic.com/flights/airline_logos/70px/dark/TG.png" alt="logo">
						<span class="fw-bold ms-2">United Airlines</span>
						</div>
						<div>
						<div class="d-flex justify-content-between align-items-center">
							<p>Departure Time: </p>
							<p>9:30</p>
						</div>
						<div class="d-flex justify-content-between align-items-center">
							<p>Arrival Time:  </p>
							<p>10:30</p>
						</div>
						<div class="d-flex justify-content-between align-items-center">
							<p>Estimate Time: </p>
							<p>1 hours</p>
						</div>
						<div class="d-flex justify-content-between align-items-center">
							<p>1 stop at Country’s Name</p>
							<p>1h30m</p>
						</div>
						</div>
					</div>
					<div class="d-flex justify-content-center my-4">
						<button type="submit" class="bg-btn-search btn-submit-custom rounded-4 fw-semibold">Go To Next Page</button>
					</div>	
				</div>
			</div>
		</div>
		</div>
	</section>
</form>

@endsection