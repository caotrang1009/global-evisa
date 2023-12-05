<div class="row justify-content-center py-5">
	<div class="col-sm-10 col-12">
		<form id="frm_search_flights" class="needs-validation" novalidate>
			@csrf
			<div class="d-flex justify-content-center gap-lg-6 gap-4 direction">
				<button type="button" class="btn btn-orange rounded-3-5 direction-item selected" data-show="oneway-roundtrip">
					One-way/ Round Trip
				</button>
				<button type="button" class="btn bg-white rounded-3-5 direction-item" data-show="multi-city">
					Multi-city
				</button>
				<input type="hidden" id="direction" name="direction" value="oneway-roundtrip">
			</div>
		
			<div class="py-3">
				<div class="row align-items-end g-4 mt-0">
					<div class="col-lg-6">
						<div class="row align-items-end gx-4">
							<div class="col">
								<div class="position-relative select-location-1">
									<label class="fw-semibold headline text-white mb-2">Location 1</label>
									<div class="dropdown">
										<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white px-4 input-search-flight" data-bs-toggle="dropdown" data-bs-auto-close="outside">
											<img src="{{ asset('assets/svg/outline/map.svg') }}" alt="map">
											<input class="form-control border-0 p-0 cursor-pointer" type="text" id="originLocationCode" name="originLocationCode[]" placeholder="Please Select" autocomplete="off" required >
											<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" alt="arrow-bottom">
										</div>
										<div class="dropdown-menu rounded-3-5 p-3 w-100 medium">
											@include('visa.section.countries')
										</div>
									</div>
									<div class="bg-orange btn-exchange border border-white rounded-3 cursor-pointer" data-value="0">
										<img src="{{ asset('assets/svg/outline/exchange.svg') }}" alt="exchange" width="18px" height="18px">
									</div>
								</div>
							</div>
							<div class="col">
								<div class="select-location-2">
									<label class="fw-semibold headline text-white mb-2">Location 2</label>
									<div class="dropdown">
										<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white px-4 input-search-flight" data-bs-toggle="dropdown" data-bs-auto-close="outside">
											<img src="{{ asset('assets/svg/outline/map.svg') }}" alt="map">
											<input class="form-control border-0 p-0 cursor-pointer" type="text" id="destinationLocationCode" name="destinationLocationCode[]" placeholder="Please Select" autocomplete="off" required >
											<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" alt="arrow-bottom">
										</div>
										<div class="dropdown-menu rounded-3-5 p-3 w-100 medium">
											@include('visa.section.countries')
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row align-items-end gx-4">
							<div class="col">
								<div class="select-departure-date">
									<label class="fw-semibold headline fs-6 text-white mb-2">Departure Date</label>
									<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-4 input-search-flight">
										<img src="{{ asset('assets/svg/outline/date.svg') }}" data-icon-name="outline/date" alt="date">
										<input class="form-control border-0 px-0 cursor-pointer datepicker" type="text" id="departureDate" name="departureDate[]" value="{{ date('d/m/Y', strtotime('now')) }}" placeholder="DD/MM/YY" required>
										<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" data-icon-name="outline/arrow-bottom" alt="arrow-bottom">
									</div>
									<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
								</div>
							</div>
							<div class="col round-trip-control">
								<div class="select-return-date">
									<div class="d-flex align-items-center mb-2">
										<label class="fw-semibold headline fs-6 text-white">Round-trip</label>
										<input class="form-check-input mt-0 ms-3" type="checkbox" id="round_trip_check" style="width:1.5rem; height:1.5rem" checked>
									</div>
									<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-4 input-search-flight">
										<img src="{{ asset('assets/svg/outline/date.svg') }}" data-icon-name="outline/date" alt="date">
										<input class="form-control border-0 px-0 cursor-pointer datepicker" type="text" id="returnDate" name="returnDate" value="{{ date('d/m/Y', strtotime('now')) }}" placeholder="DD/MM/YY" required>
										<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" data-icon-name="outline/arrow-bottom" alt="arrow-bottom">
									</div>
									<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
								</div>
							</div>
							<div class="col-2 add-more-flight ps-0">
								<a type="button" class="bg-orange border rounded-3 btn-add">
									<img src="{{ asset('assets/svg/outline/plus-white.svg') }}" alt="outline/plus-white" width="18px" height="18px">
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 mt-0 multi-city-control" style="display: none"> 
						<div class="row align-items-end g-4 mt-0 multi-city-item">
							<div class="col-lg-6">
								<div class="row align-items-end gx-4">
									<div class="col">
										<div class="position-relative select-location-1">
											<label class="fw-semibold headline text-white mb-2">Location 1</label>
											<div class="dropdown">
												<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white px-4 input-search-flight" data-bs-toggle="dropdown" data-bs-auto-close="outside">
													<img src="{{ asset('assets/svg/outline/map.svg') }}" alt="map">
													<input class="form-control border-0 p-0 cursor-pointer" type="text" id="originLocationCodeMultiCity_2" name="originLocationCode[]" placeholder="Please Select" autocomplete="off" required >
													<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" alt="arrow-bottom">
												</div>
												<div class="dropdown-menu rounded-3-5 p-3 w-100 medium">
													@include('visa.section.countries')
												</div>
											</div>
											<div class="bg-orange btn-exchange border border-white rounded-3 cursor-pointer" data-value="0">
												<img src="{{ asset('assets/svg/outline/exchange.svg') }}" alt="exchange" width="18px" height="18px">
											</div>
										</div>
									</div>
									<div class="col">
										<div class="select-location-2">
											<label class="fw-semibold headline text-white mb-2">Location 2</label>
											<div class="dropdown">
												<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white px-4 input-search-flight" data-bs-toggle="dropdown" data-bs-auto-close="outside">
													<img src="{{ asset('assets/svg/outline/map.svg') }}" alt="map">
													<input class="form-control border-0 p-0 cursor-pointer" type="text" id="destinationLocationCodeMultiCity_2" name="destinationLocationCode[]" placeholder="Please Select" autocomplete="off" required >
													<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" alt="arrow-bottom">
												</div>
												<div class="dropdown-menu rounded-3-5 p-3 w-100 medium">
													@include('visa.section.countries')
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="row align-items-end gx-4">
									<div class="col">
										<div class="select-departure-date">
											<label class="fw-semibold headline fs-6 text-white mb-2">Departure Date</label>
											<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-4 input-search-flight">
												<img src="{{ asset('assets/svg/outline/date.svg') }}" data-icon-name="outline/date" alt="date">
												<input class="form-control border-0 px-0 cursor-pointer datepicker" type="text" id="departureDateMultiCity_2" name="departureDate[]" value="{{ date('d/m/Y', strtotime('now')) }}" placeholder="DD/MM/YY" required>
												<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" data-icon-name="outline/arrow-bottom" alt="arrow-bottom">
											</div>
											<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
										</div>
									</div>
									<div class="col-2 add-more-flight ps-0">
										<a type="button" class="bg-orange border rounded-3 btn-add">
											<img src="{{ asset('assets/svg/outline/plus-white.svg') }}" alt="outline/minus-white.svg" data-link="{{ asset('assets/svg') }}" width="18px" height="18px">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 add-more-flight" style="text-align: -webkit-center;">
						<input type="hidden" name="multiCityQty" id="multiCityQty" value="2">
						<a type="button" class="subheading d-flex gap-3 align-items-center justify-content-center text-black text-opacity-8 border rounded-3-5 bg-white fw-800 btn-add-flight">
							<img src="{{ asset('assets/svg/outline/plus-border.svg') }}" alt="plus-border" width="24px" height="24px">
							<span>ADD MORE FLIGHTS</span>
						</a>
					</div>
				</div>
				<div class="row align-items-end g-4 mt-0">
					<div class="col">
						<div class="form-group mb-0 select-location-2">
							<label class="fw-semibold headline text-white mb-2">Class of Passenger</label>
							<div class="dropdown">
								<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white px-4 w-100 input-search-flight" data-bs-toggle="dropdown" data-bs-auto-close="outside">
									<img src="{{ asset('assets/svg/outline/user-firends.svg') }}" alt="map">
									<input class="form-control border-0 p-0 cursor-pointer travel-class-value" type="text" id="origin-input" name="Location1" placeholder="Please Select" autocomplete="off" required >
									<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" alt="arrow-bottom">
								</div>
								<ul class="dropdown-menu dropdown-select dropdown-travel-class border-0 rounded-3 p-0 shadow medium w-100">
									<li><a class="dropdown-item cursor-pointer dashed-line travel-class-item ECONOMY" data-value="ECONOMY">Economy</a></li>
									<li><a class="dropdown-item cursor-pointer dashed-line travel-class-item PREMIUM_ECONOMY" data-value="PREMIUM_ECONOMY">Premium Economy</a></li>
									<li><a class="dropdown-item cursor-pointer dashed-line travel-class-item BUSINESS" data-value="BUSINESS">Buiness</a></li>
									<li><a class="dropdown-item cursor-pointer travel-class-item FIRST" data-value="FIRST">First Class</a></li>
								</ul>
							</div>
							<input type="hidden" id="travelClass" name="travelClass" value="ECONOMY">
						</div>
					</div>
					<div class="col">
						<div class="form-group mb-0 select-location-2">
							<label class="fw-semibold headline text-white mb-2">Number of Passenger</label>
							<div class="dropdown">
								<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white px-4 w-100 input-search-flight" data-bs-toggle="dropdown" data-bs-auto-close="outside">
									<img src="{{ asset('assets/svg/outline/users.svg') }}" alt="map">
									<input class="form-control border-0 p-0 cursor-pointer" type="text" id="origin-input" name="Location1" placeholder="Please Select" autocomplete="off" required >
									<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" alt="arrow-bottom">
								</div>
								<div class="dropdown-menu border-0 rounded-3 py-0 shadow medium w-100">
									<div class="d-flex align-items-center justify-content-between py-2 px-4 dashed-line">
										<div>Adults:</div>
										<div>
											<div class="d-flex align-items-center justify-content-end">
												<span class="cursor-pointer pax-remove" data-value="adult"><img src="{{ asset('assets/svg/outline/minus-circle.svg') }}" alt="minus"></span>
												<span class="text-center adults-text" style="width: 2rem;">1</span>
												<span class="cursor-pointer pax-add" data-value="adult"><img src="{{ asset('assets/svg/outline/plus-circle.svg') }}" alt="plus"></span>
												<input type="hidden" id="adults" name="adults" value="1">
											</div>
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-between py-2 px-4 dashed-line">
										<div>Children:</div>
										<div>
											<div class="d-flex align-items-center justify-content-end">
												<span class="cursor-pointer pax-remove" data-value="children"><img src="{{ asset('assets/svg/outline/minus-circle.svg') }}" alt="minus"></span>
												<span class="text-center children-text" style="width: 2rem;">0</span>
												<span class="cursor-pointer pax-add" data-value="children"><img src="{{ asset('assets/svg/outline/plus-circle.svg') }}" alt="plus"></span>
												<input type="hidden" id="children" name="children" value="0">
											</div>
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-between py-2 px-4">
										<div>Infants:</div>
										<div>
											<div class="d-flex align-items-center justify-content-end">
												<span class="cursor-pointer pax-remove" data-value="infant"><img src="{{ asset('assets/svg/outline/minus-circle.svg') }}" alt="minus"></span>
												<span class="text-center infants-text" style="width: 2rem;">0</span>
												<span class="cursor-pointer pax-add" data-value="infant"><img src="{{ asset('assets/svg/outline/plus-circle.svg') }}" alt="plus"></span>
												<input type="hidden" id="infants" name="infants" value="0">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="text-center mt-4">
				<a href="/flights/search">
					<button type="button" class="btn bg-orange custom-h3 text-white border-2 border-white rounded-3-5 fw-bold w-sm-auto w-100 px-sm-6 btn-search">Seach Your Flights <i class="fal fa-long-arrow-up rotate-45 ms-4"></i></button>
				</a>
			</div>
		</form>
	</div>
</div>

<script src="{{ asset('assets/js/flight/search.airports.js') }}?id={{ filemtime('assets/js/flight/search.airports.js') }}"></script>