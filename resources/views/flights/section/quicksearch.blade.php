<form id="frm-search" class="mb-2" action="" method="GET" autocomplete="off">
	<div class="row gx-sm-3 g-0">
		<div class="col-4 col-sm-auto">
			<div class="dropdown position-static">
				<button type="button" class="form-select border-0 bg-transparent text-nowrap text-truncate" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
					<i class="fal fa-exchange me-3"></i><span class="direction-text"></span>
				</button>
				<ul class="dropdown-menu dropdown-select dropdown-direction border-0 rounded-3 shadow">
					<li><a class="dropdown-item cursor-pointer direction-item round-trip" data-value="round-trip">Round-trip</a></li>
					<li><a class="dropdown-item cursor-pointer direction-item one-way" data-value="one-way">One-way</a></li>
					<li><a class="dropdown-item cursor-pointer direction-item multi-city" data-value="multi-city">Multi-city</a></li>
				</ul>
				<input type="hidden" id="direction" name="direction" value="round-trip">
			</div>
		</div>
		<div class="col-4 col-sm-auto">
			<div class="dropdown position-static">
				<button type="button" class="form-select border-0 bg-transparent text-nowrap text-truncate" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
					<i class="fal fa-user me-3"></i><span class="pax-text"></span>
				</button>
				<div class="dropdown-menu border-0 rounded-3 shadow p-3">
					<div class="row align-items-center">
						<div class="col"><span class="form-label">Adults</span><br><small class="text-muted">From 12</small></div>
						<div class="col text-right">
							<div class="d-flex flex-row">
								<button type="button" class="btn btn-sm rounded btn-outline-secondary m-auto pax-remove" data-value="adult">-</button>
								<span class="form-label text-center d-inline m-auto adults-text" style="width: 2rem;">1</span>
								<button type="button" class="btn btn-sm rounded btn-outline-secondary m-auto pax-add" data-value="adult">+</button>
								<input type="hidden" id="adults" name="adults" value="1">
							</div>
						</div>
					</div>
					<div class="row align-items-center mt-3">
						<div class="col"><span class="form-label">Children</span><br><small class="text-muted">Aged 2-11</small></div>
						<div class="col text-right">
							<div class="d-flex flex-row">
								<button type="button" class="btn btn-sm rounded btn-outline-secondary m-auto pax-remove" data-value="children">-</button>
								<span class="form-label text-center d-inline m-auto children-text" style="width: 2rem;">0</span>
								<button type="button" class="btn btn-sm rounded btn-outline-secondary m-auto pax-add" data-value="children">+</button>
								<input type="hidden" id="children" name="children" value="0">
							</div>
						</div>
					</div>
					<div class="row align-items-center mt-3">
						<div class="col"><span class="form-label">Infants</span><br><small class="text-muted">Under 2</small></div>
						<div class="col text-right">
							<div class="d-flex flex-row">
								<button type="button" class="btn btn-sm rounded btn-outline-secondary m-auto pax-remove" data-value="infant">-</button>
								<span class="form-label text-center d-inline m-auto infants-text" style="width: 2rem;">0</span>
								<button type="button" class="btn btn-sm rounded btn-outline-secondary m-auto pax-add" data-value="infant">+</button>
								<input type="hidden" id="infants" name="infants" value="0">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-4 col-sm-auto">
			<div class="dropdown position-static">
				<button type="button" class="form-select border-0 bg-transparent text-nowrap text-truncate" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
					<i class="fal fa-loveseat me-3"></i><span class="travel-class-value"></span>
				</button>
				<ul class="dropdown-menu dropdown-select dropdown-travel-class border-0 rounded-3 shadow">
					<li><a class="dropdown-item cursor-pointer travel-class-item ECONOMY" data-value="ECONOMY">Economy</a></li>
					<li><a class="dropdown-item cursor-pointer travel-class-item PREMIUM_ECONOMY" data-value="PREMIUM_ECONOMY">Premium economy</a></li>
					<li><a class="dropdown-item cursor-pointer travel-class-item BUSINESS" data-value="BUSINESS">Business</a></li>
					<li><a class="dropdown-item cursor-pointer travel-class-item FIRST" data-value="FIRST">First</a></li>
				</ul>
				<input type="hidden" id="travelClass" name="travelClass" value="ECONOMY">
			</div>
		</div>
	</div>
	<div class="row g-3 g-sm-2 mt-1 mt-sm-2">
		<div class="col-sm-6">
			<div class="row g-1">
				<div class="col-6">
					<div class="input-curve">
						<div class="curve-control curve-right">
							<div class="autocomplete-wrapper form-floating dropdown">
								<input id="originLocationCode" name="originLocationCode[]" class="form-control border-0 rounded-3 ps-4 text-truncate" placeholder="Where from?"  data-bs-toggle="dropdown" data-bs-auto-close="outside" value="">
								<label for="originLocationCode" class="ms-2 ps-3"><i class="far fa-map-marker-alt pe-2"></i>Where from?</label>
								<div class="dropdown-menu rounded-3-5 p-3 w-100 medium">
									@include('layouts.sections.countries')
								</div>
							</div>
						</div>
						<button type="button" class="btn-exchange curve-text border-0 bg-transparent" data-value="0">
							<i class="fal fa-exchange"></i>
						</button>
					</div>
				</div>
				<div class="col-6">
					<div class="input-curve">
						<div class="curve-control curve-left">
							<div class="autocomplete-wrapper form-floating dropdown">
								<input id="destinationLocationCode" name="destinationLocationCode[]" class="form-control border-0 rounded-3 ps-4 text-truncate" placeholder="Where to?"  data-bs-toggle="dropdown" data-bs-auto-close="outside" value="">
								<label for="destinationLocationCode" class="ms-2 ps-3"><i class="far fa-map-marker-alt pe-2"></i>Where to?</label>
								<div class="dropdown-menu rounded-3-5 p-3 w-100 medium">
									@include('layouts.sections.countries')
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col round-trip-part">
			<div class="row g-1">
				<div class="col">
					<div class="input-curve round-trip-control-input">
						<div class="curve-control curve-right">
							<div class="form-floating">
								<input id="departureDate" name="departureDate[]" class="form-control border-0 rounded-3 ps-4 datepicker" placeholder="Departure date" autocomplete="off" value="{{ date('d/m/Y', strtotime('now')) }}">
								<label for="departureDate" class="ms-2 ps-3"><i class="far fa-calendar-alt pe-2"></i> Departure date</label>
							</div>
						</div>
						<div class="curve-text border-0 bg-transparent round-trip-control">
							<i class="fal fa-arrow-right"></i>
						</div>
					</div>
				</div>
				<div class="col round-trip-control">
					<div class="input-curve round-trip-control-input">
						<div class="curve-control curve-left">
							<div class="form-floating">
								<input id="returnDate" name="returnDate" class="form-control border-0 rounded-3 ps-4 datepicker" placeholder="Return date" autocomplete="off" value="{{ date('d/m/Y', strtotime('now')) }}">
								<label for="returnDate" class="ms-2 ps-3"><i class="far fa-calendar-alt pe-2"></i> Return date</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 mb-2 mt-0 multi-city-control" style="display: none">
			<div class="row g-3 mt-0 multi-city-item">
				<div class="col-sm-6">
					<div class="row g-1">
						<div class="col-6">
							<div class="input-curve">
								<div class="curve-control curve-right">
									<div class="autocomplete-wrapper form-floating dropdown">
										<input id="originLocationCodeMultiCity_2" name="originLocationCode[]" class="form-control border-0 rounded-3 ps-4 text-truncate" placeholder="Where from?"  data-bs-toggle="dropdown" data-bs-auto-close="outside" value="">
										<label for="originLocationCode" class="ms-2 ps-3"><i class="far fa-map-marker-alt pe-2"></i>Where from?</label>
										<div class="dropdown-menu rounded-3-5 p-3 w-100 medium">
											@include('layouts.sections.countries')
										</div>
									</div>
								</div>
								<button type="button" class="btn-exchange curve-text border-0 bg-transparent" data-value="0">
									<i class="fal fa-exchange"></i>
								</button>
							</div>
						</div>
						<div class="col-6">
							<div class="input-curve">
								<div class="curve-control curve-left">
									<div class="autocomplete-wrapper form-floating dropdown">
										<input id="destinationLocationCodeMultiCity_2" name="destinationLocationCode[]" class="form-control border-0 rounded-3 ps-4 text-truncate" placeholder="Where to?"  data-bs-toggle="dropdown" data-bs-auto-close="outside" value="">
										<label for="destinationLocationCode" class="ms-2 ps-3"><i class="far fa-map-marker-alt pe-2"></i>Where to?</label>
										<div class="dropdown-menu rounded-3-5 p-3 w-100 medium">
											@include('layouts.sections.countries')
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col">
					<div class="curve-control curve-right">
						<div class="form-floating">
							<input id="departureDateMultiCity_2" name="departureDate[]" class="form-control border-0 rounded-3 ps-4 datepicker" placeholder="Departure date" autocomplete="off" value="{{ date('d/m/Y', strtotime('now')) }}">
							<label for="departureDate" class="ms-2 ps-3"><i class="far fa-calendar-alt pe-2"></i> Departure date</label>
						</div>
					</div>
				</div>
				<div class="col-2 remove-flight">
					<div class=" d-flex align-items-center h-100">
						<a type="button" class="bg-orange border rounded-3 btn-remove">
							<img src="{{ asset('assets/svg/outline/minus-white.svg') }}" alt="outline/minus-white.svg" width="18px" height="18px">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-10 col-12 text-lg-start text-center add-more-flight" style="display: none">
			<input type="hidden" name="multiCityQty" id="multiCityQty" value="2">
			<button type="button" class="btn text-uppercase fs-6 px-5 border border-2 rounded-3 fw-bold bg-white h-100 btn-add-flight">
				<i class="fas fa-plus me-3"></i>
				<span>ADD MORE FLIGHTS</span>
			</button>
		</div>
		<div class="col-lg-2">
			<a href="{{ url('/flights/search') }}" class="btn bg-orange d-flex align-items-center justify-content-center text-white text-uppercase border-2 border-white rounded-3 fw-bold fs-5 w-100 h-100 btn-search">Search<i class="fal fa-long-arrow-up fs-6 rotate-45 ms-3"></i></a>
		</div>
	</div>
</form>

<script src="{{ asset('assets/js/flight/search.airports.js') }}?id={{ filemtime('assets/js/flight/search.airports.js') }}"></script>