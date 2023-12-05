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
					<a href="{{ url('flights/information') }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item completed">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">1</div>
						<div class="mt-4 mx-2 step-name text-center fs-sm-4 fs-6">Information Details</div>
					</a>
					<a href="{{ url('flights/review-information') }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item current">
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
<section class="py-5">
	<div class="container">
		<form action="" id="frm-review">
			@csrf
			<div class="row gy-5">
				<div class="col-lg-7 col-12">
					<div id="review_infor">
						<h2 class="fw-800 custom-h3 text-black mb-4">REVIEW INFO</h2>
						<div class="contact-information border border-primary px-sm-4-5 p-3 rounded-3-5 my-3-5">
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
							<div class="collapse py-3" id="contact-information" style="">
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black d-flex">First Name</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="education">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="contact_first_name" name="contact_first_name" value="Lorem Ipsum" placeholder="Enter Value" required>
										</div>
										<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
									</div>
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black d-flex">Last Name</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="education">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="contact_last_name" name="contact_last_name" value="Lorem Ipsum" placeholder="Enter Value" required>
										</div>
										<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Your Phone Number</label>
										<div class="dropdown">
											<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
												<img src="{{ asset('assets/svg/outline/phone.svg') }}" data-icon-name="outline/phone" alt="phone">
												<div class="d-flex align-items-center gap-2 cursor-pointer bg-white" data-bs-toggle="dropdown" data-bs-auto-close="outside">
													<span class="medium text-black text-opacity-7 nationality">+84</span>
													<img class="cursor-pointer" src="{{ asset('assets/svg/icon/direction-up.svg') }}" data-icon-name="icon/direction-up" alt="direction-up" style="max-width: none">
													<input class="form-control" type="hidden" id="nationality" name="nationality" value="" required>
												</div>
												<div class="dropdown-menu rounded-3-5 p-3 w-100 medium">
													@include('visa.section.countries_telephone')
												</div>
												<input class="form-control border-0 px-0 cursor-pointer" type="text" id="contact_phone" name="contact_phone" value="+84 1312312434" placeholder="Enter Value" required>
											</div>
											<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
										</div>
									</div>
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Your Email</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img src="{{ asset('assets/svg/outline/email.svg') }}" data-icon-name="outline/email" alt="email">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="contact_email" name="contact_email" value="loremipisum@gmail.com" placeholder="Enter Value" required>
										</div>
										<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="applicant-information border border-primary px-sm-4-5 p-3 rounded-3-5 my-3-5">
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
							<div class="collapse py-3" id="applicant-information" style="">
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">First Name</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="education">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="first_name" name="first_name" value="Lorem Ipsum" placeholder="Enter Value" >
										</div>
									</div>
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Last Name</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="education">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="last_name" name="last_name" value="Lorem Ipsum" placeholder="Enter Value" >
										</div>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Gender</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img src="{{ asset('assets/svg/outline/gender-female.svg') }}" data-icon-name="outline/gender-female" alt="gender">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="gender" name="gender" value="Female" placeholder="Please Select" >
										</div>
									</div>
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Day of Birth</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img src="{{ asset('assets/svg/outline/date.svg') }}" data-icon-name="outline/date" alt="date">
											<input class="form-control border-0 px-0 cursor-pointer datepicker" type="text" id="date_of_birth" name="date_of_birth" value="15/08/1985" placeholder="DD/MM/YY" >
										</div>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Phone Number</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img src="{{ asset('assets/svg/outline/phone.svg') }}" data-icon-name="outline/phone" alt="phone" width="24px" height="24px">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="phone_number" name="phone_number" value="+84 1312312434" placeholder="Enter Value">
										</div>
									</div>
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Email Address</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="date">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="email" name="email" value="loremipisum@gmail.com" placeholder="Enter Value" >
										</div>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Country of Birth</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img src="{{ asset('assets/svg/outline/map.svg') }}" data-icon-name="outline/map" alt="date">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="country_of_birth" name="country_of_birth" value="Chile" placeholder="Please Select" >
										</div>
									</div>
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Country of Residency</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img src="{{ asset('assets/svg/outline/map.svg') }}" data-icon-name="outline/map" alt="date">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="country_of_residency" name="country_of_residency" value="Chile" placeholder="Please Select" >
										</div>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Passport Number</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img src="{{ asset('assets/svg/outline/education.svg') }}" data-icon-name="outline/education" alt="date">
											<input class="form-control border-0 px-0 cursor-pointer" type="text" id="passport_number" name="passport_number" value="C15C08" placeholder="Enter Value" >
										</div>
									</div>
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Expired Date</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img src="{{ asset('assets/svg/outline/date.svg') }}" data-icon-name="outline/date" alt="date">
											<input class="form-control border-0 px-0 cursor-pointer datepicker" type="text" id="expired_date" name="expired_date" value="15/09/2027" placeholder="DD/MM/YY" >
										</div>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="h6 fw-semibold text-title text-black">Issue Date</label>
										<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
											<img src="{{ asset('assets/svg/outline/date.svg') }}" data-icon-name="outline/date" alt="date">
											<input class="form-control border-0 px-0 cursor-pointer datepicker" type="text" id="issue_date" name="issue_date" value="15/09/2017" placeholder="DD/MM/YY" >
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<div id="flight_amedities" class="d-none">
						<h2 class="fw-800 custom-h3 text-black mb-4">FLIGHT AMENDITIES</h2>
						<div class="luggage-box border border-primary px-sm-4-5 p-3 rounded-3-5 my-3-5">
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#luggage-amendities" aria-expanded="false" aria-controls="luggage-amendities">
								<div class="row align-items-center">
									<div class="col-9">
										<div class="d-flex align-items-center">
											<span class="bg-primary d-block me-sm-4-5 me-3" style="width: 40px; height: 12px;"></span>
											<h5 class="fw-800 text-uppercase text-decoration-underline text-black text-title mb-0">LUGGAGE</h5>
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
						<div class="seat-select border border-primary px-sm-4-5 p-3 rounded-3-5 my-3-5" >
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#select_seat" aria-expanded="false" aria-controls="select_seat">
								<div class="row align-items-center">
									<div class="col-9">
										<div class="d-flex align-items-center">
											<span class="bg-primary d-block me-sm-4-5 me-3" style="width: 40px; height: 12px;"></span>
											<h5 class="fw-800 text-uppercase text-decoration-underline text-black text-title mb-0">SEAT</h5>
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
						<div class="seat-upgrade option border border-primary px-sm-4-5 p-3 rounded-3-5 my-3-5" >
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#seat-upgrade-options" aria-expanded="false" aria-controls="seat-upgrade-options">
								<div class="row align-items-center">
									<div class="col-9">
										<div class="d-flex align-items-center">
											<span class="bg-primary d-block me-sm-4-5 me-3" style="width: 40px; height: 12px;"></span>
											<h5 class="fw-800 text-uppercase text-decoration-underline text-black text-title mb-0">Seat Upgrade Options</h5>
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
						<div class="meal-option border border-primary px-sm-4-5 p-3 rounded-3-5 my-3-5" >
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#select_meal_option" aria-expanded="false" aria-controls="select_meal_option">
								<div class="row align-items-center">
									<div class="col-9">
										<div class="d-flex align-items-center">
											<span class="bg-primary d-block me-sm-4-5 me-3" style="width: 40px; height: 12px;"></span>
											<h5 class="fw-800 text-uppercase text-decoration-underline text-black text-title mb-0">Meal Option</h5>
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
							<div class="collapse" id="select_meal_option">
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
					</div>
					<div id="trip_convniences" class="my-5">
						<h2 class="fw-800 custom-h3 text-black mb-4">TRIP CONVENIENCES</h2>
						<div class="travel-insurance border border-primary px-sm-4-5 p-3 rounded-3-5 my-3-5" >
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
							<div class="collapse travel-insurance" id="travel-insurance">
								<div class="form-check my-4">
									<input class="form-check-input mt-0" type="checkbox" value="" id="flight_insurance" name="flight_insurance" style="width:1.5rem; height:1.5rem">
									<label class="form-check-label ms-3 cursor-pointer fs-5 text-decoration-underline fw-medium" for="flight_insurance">Late flight insurance - 12 $ per person</label>
								</div>
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum pariatur debitis provident magni omnis cupiditate molestiae alias quibusdam totam culpa voluptatum, nemo, iusto deleniti sunt ex cum accusantium officiis cumque.
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum pariatur debitis provident magni omnis cupiditate molestiae alias quibusdam totam culpa voluptatum, nemo, iusto deleniti sunt ex cum accusantium officiis cumque.
								</p>
								<div>
									<p class="text-primary fw-semibold more-information-button" data-current-text="+ More Information" data-set-text="- Less Information" role="button" data-bs-toggle="collapse" data-bs-target="#more_info_travel_insurance" aria-expanded="false" aria-controls="more_info_travel_insurance">
										+ More Information
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
						<div class="luggage-insurance border border-primary px-sm-4-5 p-3 rounded-3-5 my-3-5" >
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#luggage_insurance" aria-expanded="false" aria-controls="luggage_insurance">
								<div class="row align-items-center">
									<div class="col-9">
										<div class="d-flex align-items-center">
											<span class="bg-primary d-block me-sm-4-5 me-3" style="width: 40px; height: 12px;"></span>
											<h5 class="fw-800 text-uppercase text-decoration-underline text-black text-title mb-0">LUGGAGE INSURANCE</h5>
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
							<div class="collapse luggage_insurance" id="luggage_insurance">
								<div class="form-check my-4">
									<input class="form-check-input mt-0" type="checkbox" value="" id="luggage_insurance_input" name="luggage_insurance_input" style="width:1.5rem; height:1.5rem">
									<label class="form-check-label ms-3 cursor-pointer fs-5 text-decoration-underline fw-medium" for="luggage_insurance_input">Baggage insurance policies - 12 $ per person.</label>
								</div>
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum pariatur debitis provident magni omnis cupiditate molestiae alias quibusdam totam culpa voluptatum, nemo, iusto deleniti sunt ex cum accusantium officiis cumque.
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum pariatur debitis provident magni omnis cupiditate molestiae alias quibusdam totam culpa voluptatum, nemo, iusto deleniti sunt ex cum accusantium officiis cumque.
								</p>
								<div>
									<p class="text-primary fw-semibold more-information-button" data-current-text="+ More Information" data-set-text="- Less Information" role="button" data-bs-toggle="collapse" data-bs-target="#more_info_luggage_insurance" aria-expanded="false" aria-controls="more_info_luggage_insurance">
										+ More Information
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
					<div class="border-dashed bg-beige rounded-3-5 px-md-5 p-4 your-flight medium">
						@include('flights.section.order_summary')
						<a href="{{ url('/flights/payment') }}" class="btn btn-orange btn-lg rounded-4 py-3 fw-bold text-title fs-6 w-100 btn-payment mt-4">Go To Payment Page</a>
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
			$(this).text(showText);
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

		$(".toggle-data-dropdown").click(function(){
			$(this).find("img").attr('src', (_, attr) => attr == iconDown ? iconUp : iconDown);
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