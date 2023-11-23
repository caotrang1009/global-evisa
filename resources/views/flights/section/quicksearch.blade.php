<section class="bg-primary">
	<div class="container bg-beige rounded-3 px-5 py-4">
		<form id="frm-search" method="GET" autocomplete="off">
			<div class="row g-5 gx-sm-6 align-items-center">
				<div class="col-sm-7 border-line">
					<div class="row g-4">
						<div class="col-6">
							<div class="input-curve">
								<div class="curve-control curve-right">
									<div class="d-flex align-items-center border rounded-4 px-1 py-2 gap-3 bg-white">
										<i class="fal fa-plane-departure fs-5 text-secondary ps-2"></i>
										<div class="pe-1 pt-1">
											<h6 class="text-black fw-semibold crop-text-1 originLocationCode">Noi Bai International Airport</h3>
											<small class="originTerminal">Terminal 3</small>
										</div>
									</div>
								</div>
								<button type="button" class="btn-exchange curve-text border-0 bg-transparent" data-value="0">
									<i class="fal fa-exchange text-white"></i>
								</button>
							</div>
						</div>
						<div class="col-6">
							<div class="input-curve">
								<div class="curve-control curve-left">
									<div class="d-flex align-items-center border rounded-4 px-1 py-2 gap-3 bg-white">
										<i class="fal fa-plane-arrival fs-5 text-secondary ps-2"></i>
										<div class="pe-1 pt-1">
											<h6 class="text-black fw-semibold crop-text-1 destinationLocationCode">Kuala Lumpur International Airport</h3>
											<small class="destinationTerminal">Terminal 4</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="row g-3">
						<div class="col">
							<div class="d-flex align-items-center border rounded-4 px-1 py-2 gap-3 bg-white datepicker">
								<i class="fal fa-calendar-check fs-5 text-secondary ps-2"></i>
								<div class="pe-1 pt-1">
									<h6 class="text-black fw-semibold crop-text-1">29th Sep 2023</h3>
									<small>Friday</small>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="d-flex align-items-center border rounded-4 px-1 py-2 gap-3 bg-white datepicker">
								<i class="fal fa-calendar-minus fs-5 text-secondary ps-2"></i>
								<div class="pe-1 pt-1">
									<h6 class="text-black fw-semibold crop-text-1">29th Oct 2023</h3>
									<small>Sunday</small>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-7 border-line">
					<div class="row g-4">
						<div class="col-6">
							<h5 class="text-black fw-semibold mb-3">Number of Passenger</h5>
							<div class="dropdown">
								<div class="d-flex align-items-center border rounded-4 px-1 py-2 gap-3 bg-white form-select" data-bs-toggle="dropdown" data-bs-auto-close="outside">
									<i class="fal fa-users fs-5 text-secondary ps-2"></i>
									<input id="originLocationCode" name="originLocationCode" class="w-100 border-0 me-2 text-truncate" placeholder="Please Select" autocomplete="off">
								</div>
								<div class="dropdown-menu border-0 shadow p-4 w-100">
									<div class="row align-items-center">
										<div class="col"><span class="form-label">Adults:</span></div>
										<div class="col text-right">
											<div class="d-flex justify-content-end">
												<span class="pax-remove" data-value="adult"><i class="fal fa-minus-circle fs-5"></i></span>
												<span class="text-center adults-text" style="width: 2rem;">1</span>
												<span class="pax-add" data-value="adult"><i class="fal fa-plus-circle fs-5"></i></span>
												<input type="hidden" id="adults" name="adults" value="1">
											</div>
										</div>
									</div>
									<div class="row align-items-center mt-3">
										<div class="col"><span class="form-label">Children:</span></div>
										<div class="col text-right">
											<div class="d-flex justify-content-end">
												<span class="pax-remove" data-value="children"><i class="fal fa-minus-circle fs-5"></i></span>
												<span class="text-center children-text" style="width: 2rem;">0</span>
												<span class="pax-add" data-value="children"><i class="fal fa-plus-circle fs-5"></i></span>
												<input type="hidden" id="children" name="children" value="0">
											</div>
										</div>
									</div>
									<div class="row align-items-center mt-3">
										<div class="col"><span class="form-label">Infants:</span></div>
										<div class="col text-right">
											<div class="d-flex justify-content-end">
												<span class="pax-remove" data-value="infant"><i class="fal fa-minus-circle fs-5"></i></span>
												<span class="text-center infants-text" style="width: 2rem;">0</span>
												<span class="pax-add" data-value="infant"><i class="fal fa-plus-circle fs-5"></i></span>
												<input type="hidden" id="infants" name="infants" value="0">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6">
							<h5 class="text-black fw-semibold mb-3">Class of Passenger</h5>
							<div class="dropdown">
								<div class="d-flex align-items-center border rounded-4 px-1 py-2 gap-3 bg-white" data-bs-toggle="dropdown">
									<i class="fal fa-user-friends fs-5 text-secondary ps-2"></i>
									<input id="originLocationCode" name="originLocationCode" class="w-100 border-0 me-2 text-truncate" placeholder="Please Select" autocomplete="off">
								</div>
								<ul class="dropdown-menu dropdown-select border-0 shadow w-100">
									<li><a class="dropdown-item cursor-pointer direction-item selected">Economy</a></li>
									<li><a class="dropdown-item cursor-pointer direction-item">Premium Economy</a></li>
									<li><a class="dropdown-item cursor-pointer direction-item">Buiness</a></li>
									<li><a class="dropdown-item cursor-pointer direction-item">First Class</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<a class="btn btn-orange btn-lg rounded-4 text-uppercase fw-bold fs-4 w-100 btn-search" data-bs-toggle="modal" data-bs-target="#modalSearch">
						<span class="btn-text">Search</span><i class="fal fa-long-arrow-up icon-sm ms-3" style="transform: rotate(45deg);"></i>
					</a>
				</div>
			</div>
			<div class="modal fade" id="modalSearch" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered  modal-xl">
					<div class="modal-content">
						<div class="modal-body">
							<div class="d-flex justify-content-center gap-5 ms-md-4 pb-4 mb-4 flex-wrap border-bottom">
								<button type="button" class="btn rounded-3 bg-white bg-btn-search border text-white input-select-type fw-semibold btn-search-type selected" data-show="oneway-roundtrip">
									One-way/ Round Trip
								</button>
								<button type="button" class="btn rounded-3 bg-white border input-select-type btn-search-type" data-show="multi-city">
									Multi-city
								</button>
							</div>
				
							{{-- Search flight one-way and round-trip --}}
							<div class="show-search-flight-oneway-roundtrip" >
								<div class="d-flex flex-wrap justify-content-center gap-4">
									<div class="select-location d-flex justify-content-center align-items-end flex-wrap">
										<div class="select-location-1">
											<div type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
												<p class="mb-2">Location 1</p>
												<div class="input-group mb-3 input-search-flight border rounded-3">
													<span class="input-group-text border-0 bg-transparent" id="basic-addon1"><i class="fal fa-map-marked-alt"></i></span>
													<input type="text" id="originLocation" name="originLocation[]" class="form-control border-0" placeholder="Please Select" aria-label="Text input with 2 dropdown buttons">
													<button class="btn btn-light dropdown-toggle bg-transparent border-0"></button>
												</div>
											</div>
											{{-- Data dropdown 1 --}}
											<div class="dropdown-menu mx-0 rounded-3 shadow data-dropdown-location" data-bs-theme="light">
												<input type="search" class="form-control" autocomplete="false" placeholder="Enter input">
												<div id="most-popular">
													<p class="ms-3 fw-semibold my-2">Most Popular</p>
													<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="New York - NYC" data-location-type="originLocation"><i class="fal fa-globe-europe"></i> New York - NYC</div>
													<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="BangKok - BKK" data-location-type="originLocation"><i class="fal fa-globe-europe"></i> BangKok - BKK</div>
													<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="Singapore - SIN" data-location-type="originLocation"><i class="fal fa-globe-europe"></i> Singapore - SIN</div>
												</div>
												<div id="alphabetically">
													<p class="ms-3 fw-semibold my-2">Alphabetically</p>
													<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="New York - NYC" data-location-type="originLocation"><i class="fal fa-globe-europe"></i> New York - NYC</div>
													<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="BangKok - BKK" data-location-type="originLocation"><i class="fal fa-globe-europe"></i> BangKok - BKK</div>
													<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="Singapore - SIN" data-location-type="originLocation"><i class="fal fa-globe-europe"></i> Singapore - SIN</div>
												</div>
											</div>
										</div>
										<div class="swap-location">
											<button class="btn btn-warning mx-3 mb-3 bg-btn-search btn-add-flight-small rounded-3">
												<i class="far fa-retweet-alt text-white"></i>
											</button>
										</div>
										<div class="select-location-2">
											<div type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
												<p class="mb-2">Location 2</p>
												<div class="input-group mb-3 input-search-flight border rounded-3">
													<span class="input-group-text border-0 bg-transparent" id="basic-addon1"><i class="fal fa-map-marked-alt"></i></span>
													<input type="text" id="destinationLocation" name="destinationLocation[]" class="form-control border-0" placeholder="Please Select" aria-label="">
													<button class="btn btn-light dropdown-toggle bg-transparent border-0" ></button>
												</div>
											</div>
											{{-- data dropdown 2 --}}
											<div class="dropdown-menu mx-0 rounded-3 shadow data-dropdown-location" data-bs-theme="light">
												<input type="search" class="form-control" autocomplete="false" placeholder="Enter input">
												<div id="most-popular">
													<p class="ms-3 fw-semibold my-2">Most Popular</p>
													<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="New York - NYC" data-location-type="destinationLocation"><i class="fal fa-globe-europe"></i> New York - NYC</div>
													<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="BangKok - BKK" data-location-type="destinationLocation"><i class="fal fa-globe-europe"></i> BangKok - BKK</div>
													<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="Singapore - SIN" data-location-type="destinationLocation"><i class="fal fa-globe-europe"></i> Singapore - SIN</div>
												</div>
												<div id="alphabetically">
													<p class="ms-3 fw-semibold my-2">Alphabetically</p>
													<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="New York - NYC" data-location-type="destinationLocation"><i class="fal fa-globe-europe"></i> New York - NYC</div>
													<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="BangKok - BKK" data-location-type="destinationLocation"><i class="fal fa-globe-europe"></i> BangKok - BKK</div>
													<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="Singapore - SIN" data-location-type="destinationLocation"><i class="fal fa-globe-europe"></i> Singapore - SIN</div>
												</div>
											</div>
										</div>
									</div>
									<div class="">
										<div class="select-times d-flex flex-wrap gap-5">
											<div class="input-group-time">
												<p class="mb-2">Departure Date</p>
												<div class="input-group mb-3 input-search-flight border rounded-3">
													<span class="input-group-text border-0 bg-transparent" id="basic-addon1"><i class="fal fa-calendar-alt"></i></span>
													<input id="departureDate" name="departureDate" class="form-control border-0 datepicker bg-transparent" placeholder="DD/MM/YY" autocomplete="off" value="">
												</div>
											</div>
											<div class="input-group-time">
												<div class="">
													<label class="form-check-label mb-2 me-1" for="round_trip_check">
														Round Trip 
													</label>
													<input class="form-check-input border-white" type="checkbox" value="" id="round_trip_check" checked>
												</div>
												<div class="input-group mb-3 input-search-flight border rounded-3">
													<span class="input-group-text border-0 bg-transparent" id="basic-addon1"><i class="fal fa-calendar-alt"></i></span>
													<input id="departureDate" name="departureDate" class="form-control border-0 datepicker bg-transparent" placeholder="DD/MM/YY" autocomplete="off" value="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							{{-- End search one-way and round-trip  --}}
							
							{{-- Search flight multi-city --}}
							<div id="multi_city_section" class="show-search-flight-multi-city" style="display: none;">
								<div id="search_multi_flight">
									@for ($i = 0; $i < 3; $i++)
										<div class="multi-city-counter" id="multi_city_flight_{{ $i }}">
											{{-- Search row --}}
											<div class="d-flex justify-content-center gap-4">
												<div class="select-location d-flex justify-content-center align-items-end flex-wrap">
													{{-- select location 1 --}}
													<div class="select-location-1">
														<div type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
															<p class="mb-2">Location 1</p>
															<div class="input-group mb-3 input-search-flight border rounded-3">
																<span class="input-group-text border-0 bg-transparent" id="basic-addon1"><i class="fal fa-map-marked-alt"></i></span>
																<input type="text" id="originLocation_{{ $i }}" name="originLocation[{{ $i }}]" class="form-control border-0" placeholder="Please Select" aria-label="Text input with 2 dropdown buttons">
																<button class="btn btn-light dropdown-toggle bg-transparent border-0"></button>
															</div>
														</div>
														{{-- Data dropdown 1 --}}
														<div class="dropdown-menu mx-0 rounded-3 shadow data-dropdown-location" data-bs-theme="light">
															<input type="search" class="form-control" autocomplete="false" placeholder="Enter input">
															<div id="most-popular">
																<p class="ms-md-3 fw-semibold my-2">Most Popular</p>
																<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="New York - NYC" data-location-type="originLocation_{{ $i }}"><i class="fal fa-globe-europe"></i> New York - NYC</div>
																<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="BangKok - BKK" data-location-type="originLocation_{{ $i }}"><i class="fal fa-globe-europe"></i> BangKok - BKK</div>
																<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="Singapore - SIN" data-location-type="originLocation_{{ $i }}"><i class="fal fa-globe-europe"></i> Singapore - SIN</div>
															</div>
															<div id="alphabetically">
																<p class="ms-md-3 fw-semibold my-2">Alphabetically</p>
																<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="New York - NYC" data-location-type="originLocation_{{ $i }}"><i class="fal fa-globe-europe"></i> New York - NYC</div>
																<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="BangKok - BKK" data-location-type="originLocation_{{ $i }}"><i class="fal fa-globe-europe"></i> BangKok - BKK</div>
																<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="Singapore - SIN" data-location-type="originLocation_{{ $i }}"><i class="fal fa-globe-europe"></i> Singapore - SIN</div>
															</div>
														</div>
													</div>
													{{-- btn swap --}}
													<div class="swap-location">
														<button class="btn btn-warning mx-3 mb-3 bg-btn-search btn-add-flight-small">
															<i class="far fa-retweet-alt text-white"></i>
														</button>
													</div>
													{{-- select location 2 --}}
													<div class="select-location-2">
														<div type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
															<p class="mb-2">Location 2</p>
															<div class="input-group mb-3 input-search-flight border rounded-3">
																<span class="input-group-text border-0 bg-transparent" id="basic-addon1"><i class="fal fa-map-marked-alt"></i></span>
																<input type="text" id="destinationLocation_{{ $i }}" name="destinationLocation[{{ $i }}]" class="form-control border-0" placeholder="Please Select" aria-label="">
																<button class="btn btn-light dropdown-toggle bg-transparent border-0" ></button>
															</div>
														</div>
														{{-- data dropdown 2 --}}
														<div class="dropdown-menu mx-0 rounded-3 shadow data-dropdown-location" data-bs-theme="light">
															<input type="search" class="form-control" autocomplete="false" placeholder="Enter input">
															<div id="most-popular">
																<p class="ms-3 fw-semibold my-2">Most Popular</p>
																<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="New York - NYC" data-location-type="destinationLocation_{{ $i }}"><i class="fal fa-globe-europe"></i> New York - NYC</div>
																<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="BangKok - BKK" data-location-type="destinationLocation_{{ $i }}"><i class="fal fa-globe-europe"></i> BangKok - BKK</div>
																<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="Singapore - SIN" data-location-type="destinationLocation_{{ $i }}"><i class="fal fa-globe-europe"></i> Singapore - SIN</div>
															</div>
															<div id="alphabetically">
																<p class="ms-3 fw-semibold my-2">Alphabetically</p>
																<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="New York - NYC" data-location-type="destinationLocation_{{ $i }}"><i class="fal fa-globe-europe"></i> New York - NYC</div>
																<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="BangKok - BKK" data-location-type="destinationLocation_{{ $i }}"><i class="fal fa-globe-europe"></i> BangKok - BKK</div>
																<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="Singapore - SIN" data-location-type="destinationLocation_{{ $i }}"><i class="fal fa-globe-europe"></i> Singapore - SIN</div>
															</div>
														</div>
													</div>
													{{-- Select departure date --}}
													<div class="select-times ms-5">
														<div class="d-flex">
															<div class="input-group-time ms-5">
																<p class="mb-2">Departure Date</p>
																<div class="input-group mb-3 input-search-flight border rounded-3">
																	<span class="input-group-text border-0 bg-transparent" id="basic-addon1"><i class="fal fa-calendar-alt"></i></span>
																	<input id="departureDate" name="departureDate" class="form-control border-0 datepicker bg-transparent" placeholder="DD/MM/YY" autocomplete="off" value="">
																</div>
															</div>
															{{-- btn add flight --}}
															<div class="addFlights align-self-end">
																@if ($i < 2)
																	<button type="button" class="btn btn-warning mx-2 mb-3 bg-btn-search btn-add-flight-small btn-add-flight">
																		<i class="fal fa-plus text-white"></i>
																	</button>
																@else
																	<button type="button" class="btn btn-warning mx-2 mb-3 bg-btn-search btn-add-flight-small btn-remove-flight" data-remove-flight="multi_city_flight_{{ $i }}">
																		<i class="fal fa-times text-white"></i>
																	</button>
																@endif
															</div>
														</div>
													</div>
												</div>
											</div>
											{{-- End search row --}}
										</div>
									@endfor
								</div>
								<div class="text-center mt-4">
									<span role="button" class="btn btn-more-flight bg-white fw-semibold time-input-height ps-4 pe-5"><img class="me-3" src="{{ asset('assets/svg/plus_01.svg') }}" width="38" height="38" alt=""> ADD MORE FLIGHTS</span>
								</div>
							</div>
							{{-- End search multi city --}}
							{{-- Select passenger --}}
							<div class="d-flex flex-wrap justify-content-center gap-4 my-3">
								<div class="w-50">
									<div class="">
										<p class="mb-2 ms-md-3"> Class of Passenger</p>
										<div class="input-group mb-3 border rounded-3">
											<span class="input-group-text border-0 bg-transparent" id="basic-addon1"><i class="fal fa-user-friends"></i></span>
											<select class="form-select border-0 time-input-height bg-transparent" id="inputGroupSelect03" aria-label="Example select with button addon">
												<option selected="">Please select</option>
												<option class="py-3 border-bottom border-dashed" value="1">Economy</option>
												<option value="2">Premium Economy </option>
												<option value="3">Business</option>
												<option value="4">First Class</option>
											</select>
										</div>
									</div>
								</div>
								<div class="w-50">
									<div class="dropdown">
										<div type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside">
											<p class="mb-2">Number Of Passenger</p>
											<div class="input-group mb-3 border rounded-3">
												<span class="input-group-text border-0 bg-transparent" id="basic-addon1"><i class="fal fa-user-friends"></i></span>
												<input type="text" id="originLocation" name="originLocation[]" class="form-control border-0 bg-transparent" placeholder="Please Select" readonly>
											</div>
										</div>
										{{-- Data dropdown 1 --}}
										<div class="dropdown-menu border-0 shadow p-4 w-100">
											<div class="row align-items-center">
												<div class="col"><span class="form-label">Adults:</span></div>
												<div class="col text-right">
													<div class="d-flex justify-content-end">
														<span class="pax-remove" data-value="adult"><i class="fal fa-minus-circle fs-5"></i></span>
														<span class="text-center adults-text" style="width: 2rem;">1</span>
														<span class="pax-add" data-value="adult"><i class="fal fa-plus-circle fs-5"></i></span>
														<input type="hidden" id="adults" name="adults" value="1">
													</div>
												</div>
											</div>
											<div class="row align-items-center mt-3">
												<div class="col"><span class="form-label">Children:</span></div>
												<div class="col text-right">
													<div class="d-flex justify-content-end">
														<span class="pax-remove" data-value="children"><i class="fal fa-minus-circle fs-5"></i></span>
														<span class="text-center children-text" style="width: 2rem;">0</span>
														<span class="pax-add" data-value="children"><i class="fal fa-plus-circle fs-5"></i></span>
														<input type="hidden" id="children" name="children" value="0">
													</div>
												</div>
											</div>
											<div class="row align-items-center mt-3">
												<div class="col"><span class="form-label">Infants:</span></div>
												<div class="col text-right">
													<div class="d-flex justify-content-end">
														<span class="pax-remove" data-value="infant"><i class="fal fa-minus-circle fs-5"></i></span>
														<span class="text-center infants-text" style="width: 2rem;">0</span>
														<span class="pax-add" data-value="infant"><i class="fal fa-plus-circle fs-5"></i></span>
														<input type="hidden" id="infants" name="infants" value="0">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							{{-- End select passenger --}}
							<div class="text-center border-top pt-4">
								<a href="{{ url('flights/search') }}" class="btn text-white border-white fw-semibold px-5 bg-btn-search time-input-height btn-search px-4">Seach Your Flights <i class="fal fa-arrow-up rotate-45 ms-3"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>

<script>
	$(document).ready(function() {
		$(".btn-search").hover(function() {
			$(this).find(".btn-text").text('change your search');
			}, function(){
			$(this).find(".btn-text").text('search');
		});
		$('.btn-search-type').on('click', function(){
			let selectedBtn = $(this);
			let prevBtn = $('.btn-search-type.selected');
			let searchType = selectedBtn.data('show');
			if (searchType != prevBtn.data('show')) {
				prevBtn.removeClass('bg-btn-search text-white selected fw-semibold');
				selectedBtn.addClass('bg-btn-search text-white selected fw-semibold');
				$(`.show-search-flight-${prevBtn.data('show')}`).hide();
				$(`.show-search-flight-${searchType}`).fadeIn();
			}
		});

		$('.btn-select-location').on('click', function(){
			let selectedType = $(this).data('location-type');
			$(`#${selectedType}`).val($(this).data('location'));
			console.log(selectedType);
		});

		$('.btn-more-flight, .btn-add-flight').on('click', function(){
			let countFlights = $('.multi-city-counter').length;
			console.log(countFlights);
			let originNode = document.getElementById(`multi_city_flight_${countFlights-1}`);
			let getCloneNode = originNode.cloneNode(true);
			getCloneNode.id = `multi_city_flight_${countFlights}`;
			
			$(getCloneNode).find(`#originLocation_${countFlights-1}`).attr('id', `originLocation_${countFlights}`);
			$(getCloneNode).find(`.btn-remove-flight`).attr('data-remove-flight', `multi_city_flight_${countFlights}`);
			$('#search_multi_flight').append(getCloneNode);
			
		})
		$(document).on("click", ".btn-remove-flight", function(){
			let removeId = $(this).data('remove-flight')
			$(`#${removeId}`).remove();
		})
	});
</script>