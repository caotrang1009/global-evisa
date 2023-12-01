@extends('layouts.app')

@section('content')
<form action="/flights/payment">
	@csrf
	<section class="py-5">
		<div class="container">
		<div class="d-flex align-items-center w-100" style="height: 220px">
			<div class="d-flex align-items-center w-100">
				<span class="d-block me-3" style="width: 70px; height: 15px; background-color: #FFA852"></span>
				<div class="d-flex justify-content-center w-100">
					<h1 class="page-title text-secondary text-center d-none d-md-block">REVIEW INFORMATION<br> & ADD-ONS</h1>
					<h2 class="text-secondary text-center d-sm-none fs-1">REVIEW INFORMATION <br> & ADD-ONS</h2>
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
				{{-- Left Element --}}
				<div class="col-lg-6-5">
					<div id="review_infor">
						<h2 class="title-section text-secondary border-2 border-bottom mb-5">REVIEW INFO</h2>
						{{-- Form Contact information --}}
						<div class="contact-information border border-primary px-5 py-3 rounded-3 mb-4" >
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#contact-information-review" aria-expanded="false" aria-controls="contact-information-review">
								<div class="d-flex justify-content-between py-3">
									<div class="d-flex align-items-center">
										<span class="bg-primary d-block me-5 mb-2" style="width: 40px; height: 12px;"></span>
										<h4 class="fw-semibold text-secondary">CONTACT INFORMATION</h4>
									</div>
									<div class="d-flex justify-content-center align-items-center button-control-collapse rounded-circle border border-primary" role="button">
										<i class="fas fa-caret-down fs-4 text-primary"></i>
									</div>
								</div>
							</div>

							<div class="collapse" id="contact-information-review">
								<div class="form-group mb-4">
									<label for="contact_fullname" class="form-label fw-semibold text-secondary">Your Full Name</label>
									<div class="input-group flex-nowrap time-input-height border rounded-3">
										<span class="input-group-text rounded-4 border-0 bg-white" id="addon-wrapping"><i class="fal fa-id-card"></i></span>
										<input type="text" id="contact_fullname" name="contact_fullname" class="form-control rounded-4 border-0" placeholder="Enter your fullname" aria-label="Fullname" aria-describedby="addon-wrapping">
									</div>										
								</div>

								<div class="form-group mb-4">
									<label for="contact_fullname" class="form-label fw-semibold text-secondary">Your Email</label>
									<div class="input-group flex-nowrap time-input-height border rounded-3">
										<span class="input-group-text border-0 bg-white rounded-4" id="addon-wrapping"><i class="fal fa-envelope"></i></span>
										<input type="email" id="contact_fullname" name="contact_fullname" class="form-control rounded-4 border-0" placeholder="Email Address" aria-label="Fullname" aria-describedby="addon-wrapping">
									</div>										
								</div>

								<div class="form-group mb-4">
									<label for="contact_email" class="form-label fw-semibold text-secondary">Your Phone Number</label>
									<div class="input-group time-input-height border rounded-3">
										<span class="input-group-text border-0 bg-white rounded-4" id="addon-wrapping"><i class="fal fa-phone-alt"></i></span>
										<input type="text" id="contact_email" name="contact_email" class="form-control rounded-4 border-0" placeholder="Enter Phone Number" aria-label="Fullname" aria-describedby="addon-wrapping">
									</div>		
								</div>
							</div>
						</div>

						{{-- Passenger Information --}}
						<div class="passenger-information border border-primary px-5 py-3 rounded-3 mb-4">
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#passengers-review" aria-expanded="false" aria-controls="passengers-review">
								<div class="d-flex justify-content-between py-3">
									<div class="d-flex align-items-center">
										<span class="bg-primary d-block me-5 mb-2" style="width: 40px; height: 12px;"></span>
										<h4 class="fw-semibold text-secondary">PASSENGER(S)' INFORMATION</h4>
									</div>
									<div class="d-flex justify-content-center align-items-center button-control-collapse rounded-circle border border-primary" role="button">
										<i class="fas fa-caret-down fs-4 text-primary"></i>
									</div>
								</div>
							</div>

							<div class="collapse" id="passengers-review">
								<h5 class="text-center my-3">APPLICANT NO.</h5>
								<div class="my-3">
									<div class="d-flex justify-content-between">
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
									<div class="d-flex justify-content-between">
										<div class="mb-3">
											<label for="" class="form-label fw-bold">Gender <span class="color-icon-form" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="This bottom tooltip is themed via CSS variables"><i class="fas fa-question-circle"></i></span></label>
											<div class="select-location-1">
												<div type="button" data-bs-toggle="dropdown" aria-expanded="false" class="">
													<div class="input-group mb-3 input-search-flight border rounded-3" style="min-width: 300px">
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
											<label for="" class="form-label fw-bold">Date of birth<span class="color-icon-form" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="This bottom tooltip is themed via CSS variables"><i class="fas fa-question-circle"></i></span></label>
											<input type="text" class="form-control input-custom ps-5 border rounded-3" id="" style="min-width: 300px" placeholder="DD/MM/YYYY">
											<span class="input-addon"><i class="far fa-calendar"></i></span>
										</div>
									</div>
									<div class="d-flex justify-content-between">
										<div class="mb-3">
											<label for="" class="form-label fw-bold">Phone Number <span class="color-icon-form" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="This bottom tooltip is themed via CSS variables"><i class="fas fa-question-circle"></i></span></label>
											<div class="d-flex">
												<input type="text" class="form-control input-custom border rounded-3 me-1" style="max-width: 68px" id="" placeholder="+84">
												<div>
													<input type="text" class="form-control input-custom ps-5 border rounded-3" id="" placeholder="Enter Value" style="max-width: 230px" readonly>
													<span class="input-addon"><i class="fas fa-phone-alt"></i></span>
												</div>
											</div>
										</div>
										<div class="mb-3">
											<label for="" class="form-label fw-bold">Email Address <span class="color-icon-form" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="This bottom tooltip is themed via CSS variables"><i class="fas fa-question-circle"></i></span></label>
											<input type="email" class="form-control input-custom ps-5 border rounded-3" id="" style="min-width: 300px" placeholder="example@gmail.com" readonly>
											<span class="input-addon"><i class="far fa-envelope"></i></span>
										</div>
									</div>
									<div class="d-flex justify-content-between">
										<div class="mb-3">
											<label for="" class="form-label fw-bold">Country of Birth <span class="color-icon-form" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="This bottom tooltip is themed via CSS variables"><i class="fas fa-question-circle"></i></span></label>
											<div class="select-location-1">
												<div type="button" aria-expanded="false">
													<div class="input-group mb-3 border rounded-3 input-search-flight min-width-custom">
														<span class="input-group-text border-0 bg-white rounded-3" id="basic-addon1"><i class="far fa-map-marker-alt"></i></span>
														<input type="text" id="originLocation" name="originLocation[]" class="form-control border-0" placeholder="Vietnam" readonly="">
													</div>
												</div>
											</div>
										</div>
										<div class="mb-3">
											<label for="" class="form-label fw-bold">Country of Residency <span class="color-icon-form" role="button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="This bottom tooltip is themed via CSS variables"><i class="fas fa-question-circle"></i></span></label>
											<div class="select-location-1">
												<div type="button" aria-expanded="false">
													<div class="input-group mb-3 border rounded-3 input-search-flight min-width-custom">
														<span class="input-group-text border-0 bg-white rounded-3" id="basic-addon1"><i class="far fa-map-marker-alt"></i></span>
														<input type="text" id="originLocation" name="originLocation[]" class="form-control border-0" placeholder="Vietnam" readonly="">
													</div>
												</div>
										
											</div>
										</div>
									</div>
									<div class="d-flex justify-content-between">
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
								</div>
							</div>
						</div>

						{{-- Flight AMENDITIES --}}
						<h2 class="title-section text-secondary border-2 border-bottom my-5">FLIGHT AMENDITIES</h2>

						{{-- LUGGAGE --}}
						<div class="luggage-box border border-primary px-5 py-3 rounded-3 mb-4" >
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#luggage-amendities" aria-expanded="false" aria-controls="luggage-amendities">
								<div class="d-flex justify-content-between py-3">
									<div class="d-flex align-items-center">
										<span class="bg-primary d-block me-5 mb-2" style="width: 40px; height: 12px;"></span>
										<h4 class="fw-semibold text-secondary">LUGGAGE</h4>
									</div>
									<div class="d-flex justify-content-center align-items-center button-control-collapse rounded-circle border border-primary" role="button">
										<i class="fas fa-caret-down fs-4 text-primary"></i>
									</div>
								</div>
							</div>

							<div class="collapse" id="luggage-amendities">
								<div class="luggage-passenger">
									<h5 class="fw-bold text-secondary">Passenger Number.</h5>
									<div class="d-flex justify-content-between mb-4">
										<p><i class="fal fa-suitcase me-3 fs-5"></i>  Including baggage: <strong>0000kg</strong></p>
										<p>Total baggage: 0000kg</p>
									</div>
									<div class="border rounded-3 p-2 mb-3">
										<label for="inlineRadio1" class="w-100 cursor-pointer">
											<div class="d-flex align-items-center ms-3">
												<input class="form-check-input fs-4 me-5 mt-2" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
												<i class="far fa-suitcase-rolling fs-4 me-5 mt-2"></i>
												<span class="mt-2">No additional baggae</span>
											</div>
										</label>
									</div>

									<div class="border rounded-3 p-2 mb-3">
										<label for="inlineRadio2" class="w-100 cursor-pointer">
											<div class="d-flex justify-content-between">
												<div class="d-flex align-items-center ms-3">
													<input class="form-check-input fs-4 me-5 mt-2" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option1">
													<i class="fal fa-luggage-cart fs-4 me-5 mt-2"></i>
													<span class="mt-2">+10 KG</span>
												</div>
												<span class="mt-2 me-5 text-primary">$10</span>
											</div>
										</label>
									</div>

									<div class="border rounded-3 p-2 mb-3">
										<label for="inlineRadio3" class="w-100 cursor-pointer">
											<div class="d-flex justify-content-between">
												<div class="d-flex align-items-center ms-3">
													<input class="form-check-input fs-4 me-5 mt-2" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option1">
													<i class="fal fa-luggage-cart fs-4 me-5 mt-2"></i>
													<span class="mt-2">+20 KG</span>
												</div>
												<span class="mt-2 me-5 text-primary">$20</span>
											</div>
										</label>
									</div>

									<div class="border rounded-3 p-2 mb-3">
										<label for="inlineRadio4" class="w-100 cursor-pointer">
											<div class="d-flex justify-content-between">
												<div class="d-flex align-items-center ms-3">
													<input class="form-check-input fs-4 me-5 mt-2" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option1">
													<i class="fal fa-luggage-cart fs-4 me-5 mt-2"></i>
													<span class="mt-2">+30 KG</span>
												</div>
												<span class="mt-2 me-5 text-primary">$30</span>
											</div>
										</label>
									</div>

									<div class="border rounded-3 p-2 mb-3">
										<label for="inlineRadio5" class="w-100">
											<div class="d-flex justify-content-between">
												<div class="d-flex align-items-center ms-3">
													<input class="form-check-input fs-4 me-5 mt-2" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option1">
													<i class="fal fa-luggage-cart fs-4 me-5 mt-2"></i>
													<span class="mt-2">+40 KG</span>
												</div>
												<span class="mt-2 me-5 text-primary">$40</span>
											</div>
										</label>
									</div>
									<div class="d-flex justify-content-between mb-4 mt-5">
										<button class="btn bg-white border rounded-4 fw-semibold px-5" style="height: 2.5rem;" type="button"><span class="text-decoration-underline">SEE MORE </span>-></button>
										<button class="btn bg-white border rounded-4 fw-semibold px-4" style="height: 2.5rem;"> ADD MORE PASSENGER(S) <i class="fal fa-plus-circle ms-3"></i></button>
									</div>
								</div>
							</div>
						</div>

						{{-- Seat --}}
						<div class="seat-select border border-primary px-5 py-3 rounded-3 mb-4" >
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#select_seat" aria-expanded="false" aria-controls="select_seat">
								<div class="d-flex justify-content-between py-3">
									<div class="d-flex align-items-center">
										<span class="bg-primary d-block me-5 mb-2" style="width: 40px; height: 12px;"></span>
										<h4 class="fw-semibold text-secondary">Seat</h4>
									</div>
									<div class="d-flex justify-content-center align-items-center button-control-collapse rounded-circle border border-primary" role="button">
										<i class="fas fa-caret-down fs-4 text-primary"></i>
									</div>
								</div>
							</div>
							<div class="collapse" id="select_seat">
								<div class="ratio ratio-1x1" style="height: 2000px">
									<img src="http://localhost:8000/assets/images/airplane.png" alt="airplane-img">
								</div>
								<div class="d-flex justify-content-center mb-3">
									<button class="passenger-select-seat btn time-input-height border border-2 rounded-4 me-5 fw-semibold active" type="button">
										Passenger 1: Full Name
									</button>
									<button class="passenger-select-seat btn time-input-height border border-2 rounded-4 fw-semibold" type="button">
										Passenger 2: Full Name
									</button>
								</div>
								<div class="text-center">
									<p class="fs-4">Total Price: <span class="fw-semibold fs-3 text-primary">000,000,000</span> Currency</p>
								</div>
							</div>
						</div>

						{{-- Seat Upgrade Options --}}
						<div class="seat-upgrade option border border-primary px-5 py-3 rounded-3 mb-4" >
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#seat-upgrade-options" aria-expanded="false" aria-controls="seat-upgrade-options">
								<div class="d-flex justify-content-between py-3">
									<div class="d-flex align-items-center">
										<span class="bg-primary d-block me-5 mb-2" style="width: 40px; height: 12px;"></span>
										<h4 class="fw-semibold text-secondary">Seat Upgrade Options</h4>
									</div>
									<div class="d-flex justify-content-center align-items-center button-control-collapse rounded-circle border border-primary" role="button">
										<i class="fas fa-caret-down fs-4 text-primary"></i>
									</div>
								</div>
							</div>
							<div class="collapse" id="seat-upgrade-options">
								<div class="upgrade-options">
									<div class="w-100 d-flex justify-content-center mb-5">
										<label class="options-label" for="upgrade_options_1">
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input fs-2 me-4" type="radio" name="upgrade_options" id="upgrade_options_1" value="option1">
												</div>
												<div class="border border rounded-4 advantage-card">
													<div class="border-bottom rounded-top-4 px-3 pt-3 advantage-title">
														<h4 class="fw-bold text-secondary text-center">CURRENT BUSINESS SEAT</h4>
													</div>
													<div class="p-4">
														<div class="button-show-advantage btn d-flex justify-content-center align-items-center border rounded-4 mb-3">
															<span class="advantage-span"><i class="fal fa-suitcase-rolling fs-5 me-3"></i> Checked Baggage (included)</span>
														</div>	
														<div class="button-show-advantage btn d-flex justify-content-center align-items-center border rounded-4 mb-3">
															<span class="advantage-span"><i class="fal fa-suitcase fs-5 me-3"></i> Carry-on Baggage (included)</span>
														</div>	
														<div class="button-show-advantage btn d-flex justify-content-center align-items-center border rounded-4 mb-3">
															<span class="advantage-span"><i class="fal fa-sack-dollar fs-5 me-3"></i> Refund (fee)</span>
														</div>	
														<div class="button-show-advantage btn d-flex justify-content-center align-items-center border rounded-4 mb-3">
															<span class="advantage-span"><i class="fal fa-exchange-alt fs-5 me-3"></i> Voluntary Change (included)</span>
														</div>	
														<div class="button-show-advantage btn d-flex justify-content-center align-items-center border rounded-4 mb-3">
															<span class="advantage-span"><img src="{{ asset('assets/images/community.png') }}" class="me-3" alt="">Change your seat (included)</span>
														</div>	
														<div class="button-show-advantage btn d-flex justify-content-center align-items-center border rounded-4 mb-3">
															<span class="advantage-span"><img src="{{ asset('assets/images/meal.png') }}" class="me-3" alt="">Meal (included)</span>
														</div>	
														<div class="button-show-advantage btn d-flex justify-content-center align-items-center border rounded-4 mb-3">
															<span class="advantage-span"><i class="fal fa-ellipsis-v-alt fa-rotate-90 fs-5 me-3"></i> More amendities</span>
														</div>	
														<h4 class="fw-bold text-secondary mb-0 text-end">+0$</h4>
													</div>
												</div>
											</div>
										</label>
									</div>
									<div class="w-100 d-flex justify-content-center mb-5">
										<label class="options-label" for="upgrade_options_2">
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input fs-2 me-4" type="radio" name="upgrade_options" id="upgrade_options_2" value="option2">
												</div>
												<div class="border border rounded-4 advantage-card">
													<div class="border-bottom rounded-top-4 px-3 pt-3 advantage-title">
														<h4 class="fw-bold text-secondary text-center">BUSINESS FLEX</h4>
													</div>
													<div class="p-4">
														<div class="button-show-advantage btn d-flex justify-content-center align-items-center border rounded-4 mb-3">
															<span class="advantage-span"><i class="fal fa-suitcase-rolling fs-5 me-3"></i> Checked Baggage (included)</span>
														</div>	
														<div class="button-show-advantage btn d-flex justify-content-center align-items-center border rounded-4 mb-3">
															<span class="advantage-span"><i class="fal fa-suitcase fs-5 me-3"></i> Carry-on Baggage (included)</span>
														</div>	
														<div class="button-show-advantage btn d-flex justify-content-center align-items-center border rounded-4 mb-3">
															<span class="advantage-span"><i class="fal fa-sack-dollar fs-5 me-3"></i> Refund (fee)</span>
														</div>	
														<div class="button-show-advantage btn d-flex justify-content-center align-items-center border rounded-4 mb-3">
															<span class="advantage-span"><i class="fal fa-exchange-alt fs-5 me-3"></i> Voluntary Change (included)</span>
														</div>	
														<div class="button-show-advantage btn d-flex justify-content-center align-items-center border rounded-4 mb-3">
															<span class="advantage-span"><img src="{{ asset('assets/images/community.png') }}" class="me-3" alt="">Change your seat (included)</span>
														</div>	
														<div class="button-show-advantage btn d-flex justify-content-center align-items-center border rounded-4 mb-3">
															<span class="advantage-span"><img src="{{ asset('assets/images/meal.png') }}" class="me-3" alt="">Meal (included)</span>
														</div>	
														<div class="button-show-advantage btn d-flex justify-content-center align-items-center border rounded-4 mb-3">
															<span class="advantage-span"><i class="fal fa-ellipsis-v-alt fa-rotate-90 fs-5 me-3"></i> More amendities</span>
														</div>	
														<h4 class="fw-bold text-secondary mb-0 text-end">+20$</h4>
													</div>
												</div>
											</div>
										</label>
									</div>
								</div>
							</div>
						</div>

						{{-- Meal Options --}}
						<div class="meal-option border border-primary px-5 py-3 rounded-3 mb-4" >
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#select_meal_option" aria-expanded="false" aria-controls="select_meal_option">
								<div class="d-flex justify-content-between py-3">
									<div class="d-flex align-items-center">
										<span class="bg-primary d-block me-5 mb-2" style="width: 40px; height: 12px;"></span>
										<h4 class="fw-semibold text-secondary">Meal Option</h4>
									</div>
									<div class="d-flex justify-content-center align-items-center button-control-collapse rounded-circle border border-primary" role="button">
										<i class="fas fa-caret-down fs-4 text-primary"></i>
									</div>
								</div>
							</div>
							<div class="collapse" id="select_meal_option">
								{{-- Food slider --}}
								<div>
									<h4 class="fw-semibold text-center text-secondary my-4"> FOOD MENU <br> PASSENGER 1</h4>
									<div class="mb-5">
										<div class="d-flex align-items-center show-food-swiper gap-3">
											<div class="">
												<div class="swiper-custom-button-small rounded-circle swiper-custom-prev d-flex justify-content-center align-items-center border-primary text-primary border">
													<i class="fal fa-chevron-left"></i>
												</div>
											</div>
											<div class="w-md-85">
												<div class="swiper foodSwiper">
													<div class="swiper-wrapper">
														<div class="swiper-slide">
															<div class="swiper-card p-3 border rounded">
																<div class="sp-card-header">
																	<div class="ratio ratio-4x3">
																		<a href="#"><img src="https://rewildingeurope.com/wp-content/uploads/2017/11/SZA-20140807_091951-1.jpg" alt="img"></a>
																	</div>
																</div>
																<div class="sp-card-body text-start">
																	<h4 class="my-3 line-clamp-1"> <a href="#"> Lorem Ipsum Food Name </a></h4>
																	<div class="d-flex justify-content-between my-4">
																		<div>
																			<button class="btn fw-semibold text-secondary border py-1" style="width: 7rem" type="button">$10</button>
																		</div>
																		<div>
																			<button class="btn fw-semibold text-secondary border bg-secondary bg-opacity-25 py-1" style="width: 7rem" type="button">Description</button>
																		</div>
																	</div>
																	<p class="line-clamp-5 small text-muted">
																		It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
																	</p>
																	<div>
																		<button type="button" class="btn w-100 rounded-3 btn-outline-primary fw-semibold">SELECT</button>
																	</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="swiper-card p-3 border rounded">
																<div class="sp-card-header">
																	<div class="ratio ratio-4x3">
																		<a href="#"><img src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2017/07/29/11/ha-long-bay-0.jpg" alt="img"></a>
																	</div>
																</div>
																<div class="sp-card-body text-start">
																	<h4 class="my-3 line-clamp-1"> <a href="#"> Lorem Ipsum </a></h4>
																	<div class="d-flex justify-content-between my-4">
																		<div>
																			<button class="btn fw-semibold text-secondary border py-1" style="width: 7rem" type="button">$10</button>
																		</div>
																		<div>
																			<button class="btn fw-semibold text-secondary border bg-secondary bg-opacity-25 py-1" style="width: 7rem" type="button">Description</button>
																		</div>
																	</div>
																	<p class="line-clamp-5 small text-muted">
																		It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
																	</p>
																	<div>
																		<button type="button" class="btn w-100 rounded-3 btn-outline-primary fw-semibold">SELECT</button>
																	</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="swiper-card p-3 border rounded">
																<div class="sp-card-header">
																	<div class="ratio ratio-4x3">
																		<a href="#"><img src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2017/07/29/11/ha-long-bay-0.jpg" alt="img"></a>
																	</div>
																</div>
																<div class="sp-card-body text-start">
																	<h4 class="my-3 line-clamp-1"> <a href="#"> Lorem Ipsum </a></h4>
																	<div class="d-flex justify-content-between my-4">
																		<div>
																			<button class="btn fw-semibold text-secondary border py-1" style="width: 7rem" type="button">$10</button>
																		</div>
																		<div>
																			<button class="btn fw-semibold text-secondary border bg-secondary bg-opacity-25 py-1" style="width: 7rem" type="button">Description</button>
																		</div>
																	</div>
																	<p class="line-clamp-5 small text-muted">
																		It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
																	</p>
																	<div>
																		<button type="button" class="btn w-100 rounded-3 btn-outline-primary fw-semibold">SELECT</button>
																	</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="swiper-card p-3 border rounded">
																<div class="sp-card-header">
																	<div class="ratio ratio-4x3">
																		<a href="#"><img src="https://i.insider.com/5a60e93955ac56190a8b46f4?width=600&format=jpeg&auto=webp" alt="img"></a>
																	</div>
																</div>
																<div class="sp-card-body text-start">
																	<h4 class="my-3 line-clamp-1"> <a href="#"> Lorem Ipsum </a></h4>
																	<div class="d-flex justify-content-between my-4">
																		<div>
																			<button class="btn fw-semibold text-secondary border py-1" style="width: 7rem" type="button">$10</button>
																		</div>
																		<div>
																			<button class="btn fw-semibold text-secondary border bg-secondary bg-opacity-25 py-1" style="width: 7rem" type="button">Description</button>
																		</div>
																	</div>
																	<p class="line-clamp-5 small text-muted">
																		It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
																	</p>
																	<div>
																		<button type="button" class="btn w-100 rounded-3 btn-outline-primary fw-semibold">SELECT</button>
																	</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="swiper-card p-3 border rounded">
																<div class="sp-card-header">
																	<div class="ratio ratio-4x3">
																		<a href="#"><img src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2017/07/29/11/ha-long-bay-0.jpg" alt="img"></a>
																	</div>
																</div>
																<div class="sp-card-body text-start">
																	<h4 class="my-3 line-clamp-1"><a href="#">Lorem Ipsum</a></h4>
																	<div class="d-flex justify-content-between my-4">
																		<div>
																			<button class="btn fw-semibold text-secondary border py-1" style="width: 7rem" type="button">$10</button>
																		</div>
																		<div>
																			<button class="btn fw-semibold text-secondary border bg-secondary bg-opacity-25 py-1" style="width: 7rem" type="button">Description</button>
																		</div>
																	</div>
																	<p class="line-clamp-5 small text-muted">
																		It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
																	</p>
																	<div>
																		<button type="button" class="btn w-100 rounded-3 btn-outline-primary fw-semibold">SELECT</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="">
												<div class="swiper-custom-button-small rounded-circle swiper-custom-next d-flex justify-content-center align-items-center border-primary text-primary border">
													<i class="fal fa-chevron-right"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

									{{-- Drink Slider --}}
								<div>
									<h4 class="fw-semibold text-center text-secondary my-4"> DRINKS MENU <br> PASSENGER 1</h4>
									<div class="mb-5">
										<div class="d-flex align-items-center show-drink-swiper gap-3">
											<div class="">
												<div class="swiper-custom-button-small rounded-circle drink-swiper-custom-prev d-flex justify-content-center align-items-center border-primary text-primary border">
													<i class="fal fa-chevron-left"></i>
												</div>
											</div>
											<div class="w-md-85">
												<div class="swiper drinkSwiper">
													<div class="swiper-wrapper">
														<div class="swiper-slide">
															<div class="swiper-card p-3 border rounded">
																<div class="sp-card-header">
																	<div class="ratio ratio-4x3">
																		<a href="#"><img src="https://rewildingeurope.com/wp-content/uploads/2017/11/SZA-20140807_091951-1.jpg" alt="img"></a>
																	</div>
																</div>
																<div class="sp-card-body text-start">
																	<h4 class="my-3 line-clamp-1"> <a href="#"> Lorem Ipsum Food Name </a></h4>
																	<div class="d-flex justify-content-between my-4">
																		<div>
																			<button class="btn fw-semibold text-secondary border py-1" style="width: 7rem" type="button">$10</button>
																		</div>
																		<div>
																			<button class="btn fw-semibold text-secondary border bg-secondary bg-opacity-25 py-1" style="width: 7rem" type="button">Description</button>
																		</div>
																	</div>
																	<p class="line-clamp-5 small text-muted">
																		It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
																	</p>
																	<div>
																		<button type="button" class="btn w-100 rounded-3 btn-outline-primary fw-semibold">SELECT</button>
																	</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="swiper-card p-3 border rounded">
																<div class="sp-card-header">
																	<div class="ratio ratio-4x3">
																		<a href="#"><img src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2017/07/29/11/ha-long-bay-0.jpg" alt="img"></a>
																	</div>
																</div>
																<div class="sp-card-body text-start">
																	<h4 class="my-3 line-clamp-1"> <a href="#"> Lorem Ipsum </a></h4>
																	<div class="d-flex justify-content-between my-4">
																		<div>
																			<button class="btn fw-semibold text-secondary border py-1" style="width: 7rem" type="button">$10</button>
																		</div>
																		<div>
																			<button class="btn fw-semibold text-secondary border bg-secondary bg-opacity-25 py-1" style="width: 7rem" type="button">Description</button>
																		</div>
																	</div>
																	<p class="line-clamp-5 small text-muted">
																		It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
																	</p>
																	<div>
																		<button type="button" class="btn w-100 rounded-3 btn-outline-primary fw-semibold">SELECT</button>
																	</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="swiper-card p-3 border rounded">
																<div class="sp-card-header">
																	<div class="ratio ratio-4x3">
																		<a href="#"><img src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2017/07/29/11/ha-long-bay-0.jpg" alt="img"></a>
																	</div>
																</div>
																<div class="sp-card-body text-start">
																	<h4 class="my-3 line-clamp-1"> <a href="#"> Lorem Ipsum </a></h4>
																	<div class="d-flex justify-content-between my-4">
																		<div>
																			<button class="btn fw-semibold text-secondary border py-1" style="width: 7rem" type="button">$10</button>
																		</div>
																		<div>
																			<button class="btn fw-semibold text-secondary border bg-secondary bg-opacity-25 py-1" style="width: 7rem" type="button">Description</button>
																		</div>
																	</div>
																	<p class="line-clamp-5 small text-muted">
																		It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
																	</p>
																	<div>
																		<button type="button" class="btn w-100 rounded-3 btn-outline-primary fw-semibold">SELECT</button>
																	</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="swiper-card p-3 border rounded">
																<div class="sp-card-header">
																	<div class="ratio ratio-4x3">
																		<a href="#"><img src="https://i.insider.com/5a60e93955ac56190a8b46f4?width=600&format=jpeg&auto=webp" alt="img"></a>
																	</div>
																</div>
																<div class="sp-card-body text-start">
																	<h4 class="my-3 line-clamp-1"> <a href="#"> Lorem Ipsum </a></h4>
																	<div class="d-flex justify-content-between my-4">
																		<div>
																			<button class="btn fw-semibold text-secondary border py-1" style="width: 7rem" type="button">$10</button>
																		</div>
																		<div>
																			<button class="btn fw-semibold text-secondary border bg-secondary bg-opacity-25 py-1" style="width: 7rem" type="button">Description</button>
																		</div>
																	</div>
																	<p class="line-clamp-5 small text-muted">
																		It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
																	</p>
																	<div>
																		<button type="button" class="btn w-100 rounded-3 btn-outline-primary fw-semibold">SELECT</button>
																	</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="swiper-card p-3 border rounded">
																<div class="sp-card-header">
																	<div class="ratio ratio-4x3">
																		<a href="#"><img src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2017/07/29/11/ha-long-bay-0.jpg" alt="img"></a>
																	</div>
																</div>
																<div class="sp-card-body text-start">
																	<h4 class="my-3 line-clamp-1"><a href="#">Lorem Ipsum</a></h4>
																	<div class="d-flex justify-content-between my-4">
																		<div>
																			<button class="btn fw-semibold text-secondary border py-1" style="width: 7rem" type="button">$10</button>
																		</div>
																		<div>
																			<button class="btn fw-semibold text-secondary border bg-secondary bg-opacity-25 py-1" style="width: 7rem" type="button">Description</button>
																		</div>
																	</div>
																	<p class="line-clamp-5 small text-muted">
																		It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
																	</p>
																	<div>
																		<button type="button" class="btn w-100 rounded-3 btn-outline-primary fw-semibold">SELECT</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="">
												<div class="swiper-custom-button-small rounded-circle drink-swiper-custom-next d-flex justify-content-center align-items-center border-primary text-primary border">
													<i class="fal fa-chevron-right"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="text-end">
									<button class="btn bg-white border rounded-4 fw-semibold px-4" style="height: 2.5rem;"> ADD MORE PASSENGER(S) <i class="fal fa-plus-circle ms-3"></i></button>
								</div>
							</div>
						</div>
						
						{{-- TRIP CONVENIENCES --}}
						<h2 class="title-section text-secondary border-2 border-bottom my-5 overflow-hidden">TRIP CONVENIENCES</h2>
						
						{{-- TRAVEL INSURANCE --}}
						<div class="seat-select border border-primary px-5 py-3 rounded-3 mb-4" >
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#travel-insurance" aria-expanded="false" aria-controls="travel-insurance">
								<div class="d-flex justify-content-between py-3">
									<div class="d-flex align-items-center">
										<span class="bg-primary d-block me-5 mb-2" style="width: 40px; height: 12px;"></span>
										<h4 class="fw-semibold text-secondary">TRAVEL INSURANCE</h4>
									</div>
									<div class="d-flex justify-content-center align-items-center button-control-collapse rounded-circle border border-primary" role="button">
										<i class="fas fa-caret-down fs-4 text-primary"></i>
									</div>
								</div>
							</div>
							<div class="collapse travel-insurance" id="travel-insurance">
								<div class="ms-3 py-4">
									<div class="form-check">
										<input class="form-check-input fs-4 p-2 me-3" type="checkbox" value="" name="flight_insurance" id="flight_insurance">
										<label class="form-check-label fs-4 text-decoration-underline" for="flight_insurance">
											Late flight insurance - 12 $ per person.
										</label>
									</div>
								</div>
								<div>
									<p style="font-weight: 400; line-height: 1.5rem;">
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum pariatur debitis provident magni omnis cupiditate molestiae alias quibusdam totam culpa voluptatum, nemo, iusto deleniti sunt ex cum accusantium officiis cumque.
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum pariatur debitis provident magni omnis cupiditate molestiae alias quibusdam totam culpa voluptatum, nemo, iusto deleniti sunt ex cum accusantium officiis cumque.
									</p>
								</div>

								<div>
									<p class="text-primary fw-semibold more-information-button" data-current-text="More Information" data-set-text="Less Information" role="button" data-bs-toggle="collapse" data-bs-target="#more_info_travel_insurance" aria-expanded="false" aria-controls="more_info_travel_insurance">
										<i class="fas fa-plus text-primary"></i> <span class="more-information-text">More Information</span>
									</p>
									<div class="collapse" id="more_info_travel_insurance">
										<p>
											Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia, quaerat deleniti modi sequi molestiae pariatur deserunt nihil provident ratione hic voluptates illum vero enim animi iure assumenda exercitationem, architecto velit.
										</p>
										<p>
											Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio sit rem molestiae laudantium magnam enim necessitatibus. Quidem nihil iste error facilis perferendis blanditiis enim veniam adipisci voluptates. Possimus, esse sint.
										</p>
									</div>
								</div>
							</div>
						</div>

						{{-- LUGGAGE INSURANCE --}}
						<div class="seat-select border border-primary px-5 py-3 rounded-3 mb-4" >
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#luggage_insurance" aria-expanded="false" aria-controls="luggage_insurance">
								<div class="d-flex justify-content-between py-3">
									<div class="d-flex align-items-center">
										<span class="bg-primary d-block me-5 mb-2" style="width: 40px; height: 12px;"></span>
										<h4 class="fw-semibold text-secondary">LUGGAGE INSURANCE</h4>
									</div>
									<div class="d-flex justify-content-center align-items-center button-control-collapse rounded-circle border border-primary" role="button">
										<i class="fas fa-caret-down fs-4 text-primary"></i>
									</div>
								</div>
							</div>
							<div class="collapse luggage_insurance" id="luggage_insurance">
								<div class="ms-3 py-4">
									<div class="form-check">
										<input class="form-check-input fs-4 p-2 me-3" type="checkbox" value="" name="luggage_insurance_input" id="luggage_insurance_input">
										<label class="form-check-label fs-4 text-decoration-underline" for="luggage_insurance_input">
											Baggage insurance policies - 12 $ per person.
										</label>
									</div>
								</div>
								<div>
									<p style="font-weight: 400; line-height: 1.5rem;">
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum pariatur debitis provident magni omnis cupiditate molestiae alias quibusdam totam culpa voluptatum, nemo, iusto deleniti sunt ex cum accusantium officiis cumque.
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum pariatur debitis provident magni omnis cupiditate molestiae alias quibusdam totam culpa voluptatum, nemo, iusto deleniti sunt ex cum accusantium officiis cumque.
									</p>
								</div>

								<div>
									<p class="text-primary fw-semibold more-information-button" data-current-text="More Information" data-set-text="Less Information" role="button" data-bs-toggle="collapse" data-bs-target="#more_info_luggage_insurance" aria-expanded="false" aria-controls="more_info_luggage_insurance">
										<i class="fas fa-plus text-primary"></i> <span class="more-information-text">More Information</span>
									</p>
									<div class="collapse" id="more_info_luggage_insurance">
										<p>
											Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia, quaerat deleniti modi sequi molestiae pariatur deserunt nihil provident ratione hic voluptates illum vero enim animi iure assumenda exercitationem, architecto velit.
										</p>
										<p>
											Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio sit rem molestiae laudantium magnam enim necessitatibus. Quidem nihil iste error facilis perferendis blanditiis enim veniam adipisci voluptates. Possimus, esse sint.
										</p>
									</div>
								</div>
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
				</div>
				{{-- Right Element --}}
				<div class="col-lg-5-5">
					<div class="border border-primary rounded-4 mb-5 your-flight headline">
						@include('flights.section.order_summary')
						<a href="{{ url('/flights/payment') }}" class="btn btn-orange btn-lg rounded-4 py-3 fw-bold text-title fs-6 w-100 btn-payment mt-4">Go To Next Page</a>
					</div>
				</div>
			</div>
		</div>
	</section>

</form>
<script>
	$(document).ready(function(){
		$('.passenger-select-seat').on('click', function(){
			if ($(this).hasClass('active') === false) {
				$('.passenger-select-seat.active').removeClass('active');
				$(this).addClass('active');
			}
		})

		$('.options-label').on('click', function() {
			let selectCard = $(this).find('.advantage-card')
			let getSelectedCard = $(this).find('.advantage-card.selected');
			if (getSelectedCard.length == 0) {
				$('.advantage-card.selected').removeClass('active selected');
				$(selectCard).addClass('active selected');
			}
		})

		$('.more-information-button').on('click', function(){
			let currentText = $(this).attr('data-current-text');
			let showText = $(this).attr('data-set-text');
			$(this).attr('data-current-text', showText);
			$(this).find('.more-information-text').html(showText);
			$(this).attr('data-set-text', currentText);
		});

		$('.btn-show-detail').on('click', function(){
			let currentText = $(this).attr('data-current-text');
			let showText = $(this).attr('data-change-text');
			let currenIcon = $(this).attr('data-icon-current');
			let changeIcon = $(this).attr('data-icon-change');
			$(this).attr('data-current-text', showText);
			$(this).attr('data-change-text', currentText);
			$(this).attr('data-icon-current', changeIcon);
			$(this).attr('data-icon-change', currenIcon);
		
			$(this).find('.flight-detail-text').html(showText);
			$(this).find('i').attr('class', changeIcon);
		});

		$('.toggle-data-dropdown').on('click', function(){
			let currenIcon = $(this).attr('data-icon-current');
			let changeIcon = $(this).attr('data-icon-change');

			$(this).attr('data-icon-current', changeIcon);
			$(this).attr('data-icon-change', currenIcon);

			$(this).find('.button-control-collapse i').attr('class', changeIcon);
		});

		var swiper = new Swiper(".foodSwiper", {
				slidesPerView: 2,
				spaceBetween: 40,
				loop: true,
				navigation: {
				nextEl: ".swiper-custom-next",
				prevEl: ".swiper-custom-prev",
			},
		});

		var swiper = new Swiper(".drinkSwiper", {
				slidesPerView: 2,
				spaceBetween: 40,
				loop: true,
				navigation: {
				nextEl: ".drink-swiper-custom-next",
				prevEl: ".drink-swiper-custom-prev",
			},
		});



	});
</script>
@endsection