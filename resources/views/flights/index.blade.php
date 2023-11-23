@extends('layouts.app')

@section('content')
{{-- Section Hero --}}
<section class="pt-5 mt-5">
	<div class="container">
		<div class="d-flex align-items-center">
			<div>
				<h1 class="page-title text-secondary">BOOK YOUR FLIGHT!</h1>
				<div class="d-flex align-items-center">
					<span class="d-block me-3 sub-line-title"></span>
					<h4 class="page-sub-title">Where do you wanna go?</h4>
				</div>
			</div>
		</div>
	</div>
</section>

{{-- Section Search --}}
<section class="py-5">
	<div class="container bg-primary p-5">
		<form action="/flights/search">
			@csrf
			<div class="d-flex justify-content-center gap-5 ms-md-4 mb-3 flex-wrap">
				<button type="button" class="btn rounded-3 bg-white bg-btn-search border-white text-white input-select-type fw-semibold btn-search-type selected" data-show="oneway-roundtrip">
					One-way/ Round Trip
				</button>
				<button type="button" class="btn rounded-3 bg-white border-white input-select-type btn-search-type" data-show="multi-city">
					Multi-city
				</button>
			</div>

			{{-- Search flight one-way and round-trip --}}
			<div class="show-search-flight-oneway-roundtrip" >
				<div class="d-flex flex-wrap justify-content-center gap-5">
					<div class="select-location d-flex justify-content-center align-items-end flex-wrap">
						<div class="select-location-1">
							<div type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
								<p class="text-white mb-2">Location 1</p>
								<div class="input-group mb-3 input-search-flight border rounded-3">
									<span class="input-group-text border-0 rounded-start-3" id="basic-addon1"><i class="fas fa-map-marked-alt"></i></span>
									<input type="text" id="originLocation" name="originLocation[]" class="form-control border-0" placeholder="Please Select" aria-label="Text input with 2 dropdown buttons">
									<button class="btn btn-light dropdown-toggle bg-white rounded-end-3"></button>
								</div>
							</div>
							{{-- Data dropdown 1 --}}
							<div class="dropdown-menu mx-0 rounded-3 shadow data-dropdown-location" data-bs-theme="light">
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
						<div class="swap-location">
							<button class="btn btn-warning mx-3 mb-3 bg-btn-search btn-add-flight-small">
								<i class="far fa-retweet-alt text-white"></i>
							</button>
						</div>
						<div class="select-location-2">
							<div type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
								<p class="text-white mb-2">Location 2</p>
								<div class="input-group mb-3 input-search-flight border rounded-3">
									<span class="input-group-text border-0 rounded-start-3" id="basic-addon1"><i class="fas fa-map-marked-alt"></i></span>
									<input type="text" id="destinationLocation" name="destinationLocation[]" class="form-control border-0" placeholder="Please Select" aria-label="">
									<button class="btn btn-light dropdown-toggle bg-white rounded-end-3" ></button>
								</div>
							</div>
							{{-- data dropdown 2 --}}
							<div class="dropdown-menu mx-0 rounded-3 shadow data-dropdown-location" data-bs-theme="light">
								<input type="search" class="form-control" autocomplete="false" placeholder="Enter input">
								<div id="most-popular">
									<p class="ms-3 fw-semibold my-2">Most Popular</p>
									<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="New York - NYC" data-location-type="destinationLocation"><i class="fas fa-globe-europe"></i> New York - NYC</div>
									<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="BangKok - BKK" data-location-type="destinationLocation"><i class="fas fa-globe-europe"></i> BangKok - BKK</div>
									<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="Singapore - SIN" data-location-type="destinationLocation"><i class="fas fa-globe-europe"></i> Singapore - SIN</div>
								</div>
								<div id="alphabetically">
									<p class="ms-3 fw-semibold my-2">Alphabetically</p>
									<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="New York - NYC" data-location-type="destinationLocation"><i class="fas fa-globe-europe"></i> New York - NYC</div>
									<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="BangKok - BKK" data-location-type="destinationLocation"><i class="fas fa-globe-europe"></i> BangKok - BKK</div>
									<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="Singapore - SIN" data-location-type="destinationLocation"><i class="fas fa-globe-europe"></i> Singapore - SIN</div>
								</div>
							</div>
						</div>
					</div>
					<div class="">
						<div class="select-times d-flex flex-wrap gap-5">
							<div class="input-group-time">
								<p class="text-white mb-2">Departure Date</p>
								<div class=" input-search-flight">
									<input id="departureDate1" name="departureDate" class="form-control ps-4 rounded-3 datepicker time-input-height" placeholder="Departure date" autocomplete="off" value="">
								</div>
							</div>
							<div class="input-group-time">
								<div class="">
									<label class="form-check-label text-white mb-2 me-1" for="round_trip_check">
										Round Trip 
									</label>
									<input class="form-check-input border-white" type="checkbox" value="" id="round_trip_check" checked>
								</div>
								<div class="input-search-flight">
									<input id="returnDate" name="returnDate" class="form-control show-return-date ps-4 rounded-3 datepicker time-input-height" placeholder="Return date" autocomplete="off" value="">
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
							<div class="d-flex justify-content-center gap-5">
								<div class="select-location d-flex justify-content-center align-items-end flex-wrap">
									{{-- select location 1 --}}
									<div class="select-location-1">
										<div type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
											<p class="text-white mb-2">Location 1</p>
											<div class="input-group mb-3 input-search-flight border rounded-3">
												<span class="input-group-text border-0 rounded-start-3" id="basic-addon1"><i class="fas fa-map-marked-alt"></i></span>
												<input type="text" id="originLocation_{{ $i }}" name="originLocation[{{ $i }}]" class="form-control border-0" placeholder="Please Select" aria-label="Text input with 2 dropdown buttons">
												<button class="btn btn-light dropdown-toggle bg-white rounded-end-3"></button>
											</div>
										</div>
										{{-- Data dropdown 1 --}}
										<div class="dropdown-menu mx-0 rounded-3 shadow data-dropdown-location" data-bs-theme="light">
											<input type="search" class="form-control" autocomplete="false" placeholder="Enter input">
											<div id="most-popular">
												<p class="ms-md-3 fw-semibold my-2">Most Popular</p>
												<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="New York - NYC" data-location-type="originLocation_{{ $i }}"><i class="fas fa-globe-europe"></i> New York - NYC</div>
												<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="BangKok - BKK" data-location-type="originLocation_{{ $i }}"><i class="fas fa-globe-europe"></i> BangKok - BKK</div>
												<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="Singapore - SIN" data-location-type="originLocation_{{ $i }}"><i class="fas fa-globe-europe"></i> Singapore - SIN</div>
											</div>
											<div id="alphabetically">
												<p class="ms-md-3 fw-semibold my-2">Alphabetically</p>
												<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="New York - NYC" data-location-type="originLocation_{{ $i }}"><i class="fas fa-globe-europe"></i> New York - NYC</div>
												<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="BangKok - BKK" data-location-type="originLocation_{{ $i }}"><i class="fas fa-globe-europe"></i> BangKok - BKK</div>
												<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="Singapore - SIN" data-location-type="originLocation_{{ $i }}"><i class="fas fa-globe-europe"></i> Singapore - SIN</div>
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
											<p class="text-white mb-2">Location 2</p>
											<div class="input-group mb-3 input-search-flight border rounded-3">
												<span class="input-group-text border-0 rounded-start-3" id="basic-addon1"><i class="fas fa-map-marked-alt"></i></span>
												<input type="text" id="destinationLocation_{{ $i }}" name="destinationLocation[{{ $i }}]" class="form-control border-0" placeholder="Please Select" aria-label="">
												<button class="btn btn-light dropdown-toggle bg-white rounded-end-3" ></button>
											</div>
										</div>
										{{-- data dropdown 2 --}}
										<div class="dropdown-menu mx-0 rounded-3 shadow data-dropdown-location" data-bs-theme="light">
											<input type="search" class="form-control" autocomplete="false" placeholder="Enter input">
											<div id="most-popular">
												<p class="ms-3 fw-semibold my-2">Most Popular</p>
												<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="New York - NYC" data-location-type="destinationLocation_{{ $i }}"><i class="fas fa-globe-europe"></i> New York - NYC</div>
												<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="BangKok - BKK" data-location-type="destinationLocation_{{ $i }}"><i class="fas fa-globe-europe"></i> BangKok - BKK</div>
												<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="Singapore - SIN" data-location-type="destinationLocation_{{ $i }}"><i class="fas fa-globe-europe"></i> Singapore - SIN</div>
											</div>
											<div id="alphabetically">
												<p class="ms-3 fw-semibold my-2">Alphabetically</p>
												<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="New York - NYC" data-location-type="destinationLocation_{{ $i }}"><i class="fas fa-globe-europe"></i> New York - NYC</div>
												<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="BangKok - BKK" data-location-type="destinationLocation_{{ $i }}"><i class="fas fa-globe-europe"></i> BangKok - BKK</div>
												<div type="button" class="dropdown-item cursor-pointer ps-3 py-1 btn-select-location" data-location="Singapore - SIN" data-location-type="destinationLocation_{{ $i }}"><i class="fas fa-globe-europe"></i> Singapore - SIN</div>
											</div>
										</div>
									</div>
									{{-- Select departure date --}}
									<div class="select-times ms-5">
										<div class="d-flex">
											<div class="input-group-time ms-5">
												<p class="text-white mb-2">Departure Date</p>
												<div class="mb-3 input-search-flight">
													<input id="departureDate{{ $i+2 }}" name="departureDate" class="form-control rounded-3 ps-4 datepicker time-input-height" placeholder="Departure date" autocomplete="off" value="">
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
			<div class="d-flex justify-content-center gap-5 my-3">
				<div class="w-44">
					<div class="">
						<p class="text-white mb-2 ms-md-3"> Class of Passenger</p>
						<div class="input-group mb-3 ms-md-3 border rounded-3">
							<span class="input-group-text border-0 rounded-start-3" id="basic-addon1"><i class="fal fa-user-friends"></i></span>
							<select class="form-select border-0 time-input-height rounded-end-3" id="inputGroupSelect03" aria-label="Example select with button addon">
								<option selected="">Please select</option>
								<option class="py-3 border-bottom border-dashed" value="1">Economy</option>
								<option value="2">Premium Economy </option>
								<option value="3">Business</option>
								<option value="4">First Class</option>
							</select>
						</div>
					</div>
				</div>
				<div class="w-44">
					<div type="button" class="ms-3" data-bs-toggle="dropdown" data-bs-auto-close="outside">
						<p class="text-white mb-2">Number Of Passenger</p>
						<div class="input-group mb-3 time-input-height border rounded-3">
							<span class="input-group-text border-0 rounded-start-3" id="basic-addon1"><i class="fal fa-user-friends"></i></span>
							<input type="text" id="originLocation" name="originLocation[]" class="form-control border-0" placeholder="Please Select" readonly>
							<button class="btn btn-light bg-white rounded-end-3"></button>
						</div>
					</div>
					{{-- Data dropdown 1 --}}
					<div class="dropdown-menu mx-0 shadow w-25 ms-5" data-bs-theme="light">
						<div>
							<div class="d-flex justify-content-between mx-3 align-items-center py-3 border-bottom">
								<p class="mb-0">Adult:</p>
								<div class="d-flex gap-3">
									<span role="button"><i class="fal fa-minus-circle fs-4"></i></span>
									<p class="mb-0">1</p>
									<span role="button"><i class="fal fa-plus-circle fs-4"></i></span>
								</div>
							</div>
							<div class="d-flex justify-content-between mx-3 align-items-center py-3 border-bottom">
								<p class="mb-0">Children:</p>
								<div class="d-flex gap-3">
									<span role="button"><i class="fal fa-minus-circle fs-4"></i></span>
									<p class="mb-0">0</p>
									<span role="button"><i class="fal fa-plus-circle fs-4"></i></span>
								</div>
							</div>
							<div class="d-flex justify-content-between mx-3 align-items-center py-3">
								<p class="mb-0">Infants:</p>
								<div class="d-flex gap-3">
									<span role="button"><i class="fal fa-minus-circle fs-4"></i></span>
									<p class="mb-0">0</p>
									<span role="button"><i class="fal fa-plus-circle fs-4"></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			{{-- End select passenger --}}
			<div class="text-center">
				<a href="/flights/search">
					<button type="button" class="btn text-white border-white rounded-3 fw-semibold px-5 bg-btn-search time-input-height btn-search px-4">Seach Your Flights <i class="fal fa-arrow-up rotate-45 ms-3"></i></button>
				</a>
			</div>
		</form>
	</div>
</section>

{{-- Section Top Destination --}}
<section class="py-5">
	<div class="container">
		<span class="d-block me-3 sub-line-title"></span>
		<div class="d-flex flex-wrap justify-content-between align-items-center">
			<div class="my-5">
				<h2 class="title-section text-secondary">TOP DESTINATION</h2>
				<h4 class="sub-title-section">Best Location</h4>
			</div>
			<div class="w-md-50 text-end">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
			</div>
		</div>
		<div class="d-md-flex flex-wrap">
			<div class="w-md-40">
				<div class="mb-5 ratio ratio-1x1" style="height: 400px">
					<img src="https://i.pinimg.com/564x/75/e7/cb/75e7cbe7167e6c69a2b25ed305ba125a.jpg" alt="image" class="img-fluid hover-brightness h-100">
					<div class="position-absolute w-auto h-auto text-white top-70 start-5">
						<h3><a href="#" class="text-white text-decoration-none">Title of post</a></h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>
				<div class="ratio ratio-1x1" style="height: 400px">
					<img src="https://i.pinimg.com/564x/ef/72/f0/ef72f06f748709e57ae2d4e45ed54497.jpg" alt="image" class="img-fluid hover-brightness h-100">
					<div class="position-absolute w-auto h-auto text-white top-70 start-5">
						<h3><a href="#" class="text-white text-decoration-none">Title of post</a></h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>
			</div>
			<div class="w-md-60 ps-md-5">
				<div class="w-100 h-100 ratio ratio-1x1">
					<img src="https://images.unsplash.com/photo-1505300639033-a5cd978a6239?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fCUyM2x1Y2V8ZW58MHx8MHx8fDA%3D&w=1000&q=80" alt="image" class="hover-brightness">
					<div class="position-absolute w-auto h-auto text-white top-85 start-5">
						<h3><a href="#" class="text-white text-decoration-none">Title of post</a></h3>
						<p>There are many variations of passages of </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

{{-- How it works --}}
<section class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="me-3 ratio ratio-1x1 h-100">
					<img src="https://images.unsplash.com/photo-1505300639033-a5cd978a6239?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fCUyM2x1Y2V8ZW58MHx8MHx8fDA%3D&w=1000&q=80" alt="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex flex-column align-items-end">
					<span class="d-block position-absolute sub-line-title"></span>
					<div class="d-flex flex-wrap justify-content-between align-items-center">
						<div class="my-5">
							<h2 class="title-section text-secondary border-2 border-bottom">HOW IT WORKS</h2>
							<h4 class="sub-title-section justify-content-end d-flex align-items-center"><i class="fas fa-circle dot-icon me-4"></i> BEST LOCATIONS</h4>
						</div>
					</div>
					<div class="list-group-services ms-5">
						<a href="#" class="text-decoration-none text-black">
							<div class="d-flex rounded-4 p-3 mb-3 group-post-content">
							
								<div>
									<div class="mt-1 me-4">
										<div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-3" style="width: 64px; height: 64px">
											<i class="fal fa-search-location fs-2"></i>
										</div>
									</div>
								</div>
								<div class="resume">
									<h4>Find your destination</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
								</div>
							</div>
						</a>
						
						<a href="#" class="text-decoration-none text-black">
							<div class="d-flex rounded-4 p-3 mb-3 group-post-content">
							
								<div>
									<div class="mt-1 me-4">
										<div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-3" style="width: 64px; height: 64px">
											<i class="fal fa-search-location fs-2"></i>
										</div>
									</div>
								</div>
								<div class="resume">
									<h4>Find your destination</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
								</div>
							</div>
						</a>

						<a href="#" class="text-decoration-none text-black">
							<div class="d-flex rounded-4 p-3 mb-3 group-post-content">
							
								<div>
									<div class="mt-1 me-4">
										<div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-3" style="width: 64px; height: 64px">
											<i class="fal fa-search-location fs-2"></i>
										</div>
									</div>
								</div>
								<div class="resume">
									
									<h4>Find your destination</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
								</div>
							</div>
						</a>

						<a href="#" class="text-decoration-none text-black">
							<div class="d-flex rounded-4 p-3 mb-3 group-post-content">
							
								<div>
									<div class="mt-1 me-4">
										<div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-3" style="width: 64px; height: 64px">
											<i class="fal fa-search-location fs-2"></i>
										</div>
									</div>
								</div>
								<div class="resume">
									<h4>Find your destination</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-5">
	<div class="container">
		<span class="d-block me-3 sub-line-title"></span>
		<div class="d-flex flex-wrap justify-content-between align-items-center">
			<div class="my-5">
				<h2 class="title-section text-secondary border-2 border-bottom">TOUR PACKAGES</h2>
				<h4 class="sub-title-section d-flex align-items-center"><i class="fas fa-circle dot-icon me-4"></i> OUR DESTINATIONS</h4>
			</div>
			<div class="w-md-50 text-end">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
			</div>
		</div>
		<div class="show-carousel align-items-center">
			<div class="row align-items-center">
				<div class="col-md-1 d-none d-sm-flex justify-content-center">
					<div class="swiper-custom-button rounded-circle swiper-custom-prev d-flex justify-content-center align-items-center bg-primary bg-opacity-50 text-white">
						<i class="fal fa-chevron-left"></i>
					</div>
				</div>
				<div class="col-md-10">
					<div class="swiper mySwiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="swiper-card p-3 border rounded">
									<div class="sp-card-header">
										<div class="ratio ratio-1x1">
											<a href="#"><img src="https://rewildingeurope.com/wp-content/uploads/2017/11/SZA-20140807_091951-1.jpg" alt="img"></a>
										</div>
									</div>
									<div class="sp-card-body text-start">
										<h4 class="my-3"> <a href="#"> Lorem Ipsum </a></h4>
										<h5 class="mb-3">Author</h5>
										<p class="line-clamp-5 small text-muted">
											It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
										</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="swiper-card p-3 border rounded">
									<div class="sp-card-header">
										<div class="ratio ratio-1x1">
											<a href="#"><img src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2017/07/29/11/ha-long-bay-0.jpg" alt="img"></a>
										</div>
									</div>
									<div class="sp-card-body text-start">
										<h4 class="my-3"> <a href="#"> Lorem Ipsum </a></h4>
										<h5 class="mb-3">Author</h5>
										<p class="line-clamp-5 small text-muted">
											It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
										</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="swiper-card p-3 border rounded">
									<div class="sp-card-header">
										<div class="ratio ratio-1x1">
											<a href="#"><img src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2017/07/29/11/ha-long-bay-0.jpg" alt="img"></a>
										</div>
									</div>
									<div class="sp-card-body text-start">
										<h4 class="my-3"> <a href="#"> Lorem Ipsum </a></h4>
										<h5 class="mb-3">Author</h5>
										<p class="line-clamp-5 small text-muted">
											It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
										</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="swiper-card p-3 border rounded">
									<div class="sp-card-header">
										<div class="ratio ratio-1x1">
											<a href="#"><img src="https://i.insider.com/5a60e93955ac56190a8b46f4?width=600&format=jpeg&auto=webp" alt="img"></a>
										</div>
									</div>
									<div class="sp-card-body text-start">
										<h4 class="my-3"> <a href="#"> Lorem Ipsum </a></h4>
										<h5 class="mb-3">Author</h5>
										<p class="line-clamp-5 small text-muted">
											It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
										</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="swiper-card p-3 border rounded">
									<div class="sp-card-header">
										<div class="ratio ratio-1x1">
											<a href="#"><img src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2017/07/29/11/ha-long-bay-0.jpg" alt="img"></a>
										</div>
									</div>
									<div class="sp-card-body text-start">
										<h4 class="my-3"><a href="#">Lorem Ipsum</a></h4>
										<h5 class="mb-3">Author</h5>
										<p class="line-clamp-5 small text-muted">
											It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-1 d-none d-sm-flex justify-content-center">
					<div class="swiper-custom-button rounded-circle swiper-custom-next d-flex justify-content-center align-items-center bg-primary bg-opacity-50 text-white">
						<i class="fal fa-chevron-right"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function () {
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

		$('#round_trip_check').on('change', function(){
			if ($(this).is(':checked')){
				$('.show-return-date').removeClass('d-none');
			} else {
				$('.show-return-date').addClass('d-none');
			}
		})

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
@endsection