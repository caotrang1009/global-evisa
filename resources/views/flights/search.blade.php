@extends('layouts.app')

@section('content')
	<section>
		<div class="container">
			<div class="d-flex align-items-baseline">
				<span class="d-block me-3 bg-orange d-lg-block d-none" style="width: 80px; height:20px;"></span>
				<h1 class="web-title text-black text-uppercase mb-0">SEARCH YOUR FLIGHT!</h1>
			</div>
			<div class="mt-4">
				<div class="bg-primary position-relative px-4 py-4-5">
					@include('flights.section.quicksearch')
					<div class="position-absolute start-0 d-flex justify-content-center mt-2 w-100">
						<img src="{{ asset('assets/svg/outline/calendar.svg') }}" alt="calendar" width="56px" height="56px">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				@include('flights.section.slide_price')
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row g-4-3">
				<div class="col-lg-3-5 d-sm-block d-none">
					<div class="border rounded-4 p-4 small" id="filter">
						<div class="d-flex justify-content-between align-items-center">
							<div class="reset text-decoration-underline small">Reset</div>
							<h2 class="web-header1 fw-800 text-uppercase text-black text-opacity-9 mb-0">Filter</h2>
							<div class="close"><img src="{{ asset('assets/svg/solid/remove-circle.svg') }}" alt="remove-circle" width="32px" height="32px"></div>
						</div>
						@include('flights.section.filter')
					</div>
				</div>
				<div class="col-lg-8-5 col-12">					
					@include('flights.section.offers')
				</div>
			</div>
			<div class="row">
				<div class="position-fixed d-sm-none d-flex justify-content-center bottom-10 z-3">
					<div class="row text-nowrap">
						<div class="col-6 shadow bg-beige py-2 rounded-start-5 border border-orange">
							<div class="d-flex gap-1 align-items-center justify-content-center cursor-pointer" data-bs-toggle="modal" data-bs-target="#sortModal">
								<img src="{{ asset('assets/svg/outline/sort-arrow-down.svg') }}" alt="sort-arrow-down" width="20px" height="20px">
								<span class="fw-bold text-orange mb-0">Sort</span>
							</div>
						</div>
						<div class="col-6 shadow bg-beige py-2 rounded-end-5 border border-start-0 border-orange">
							<div class="d-flex gap-1 align-items-center justify-content-center cursor-pointer" data-bs-toggle="modal" data-bs-target="#filterModal">
								<img src="{{ asset('assets/svg/outline/filter.svg') }}" alt="filter" width="20px" height="20px">
								<span class="fw-bold text-orange mb-0">Filter</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="sortModal" tabindex="-1" aria-labelledby="sortModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-fullscreen h-auto bottom-0 position-absolute">
				<div class="modal-content rounded-top-3">
					<div class="modal-header justify-content-between align-items-center bg-primary rounded-top-3 border-0">
						<h2 class="custom-h1 fw-800 text-uppercase text-white mb-0 spacing-n1">Sort</h2>
						<div class="close" data-bs-dismiss="modal" aria-label="Close"><img src="{{ asset('assets/svg/solid/remove-circle.svg') }}" alt="remove-circle" width="32px" height="32px"></div>
					</div>
					<div class="modal-body fw-medium"></div>
					<div class="bg-white sticky-bottom d-sm-none d-block">
						<div class="p-3 shadow-lg">
							<div class="btn btn-primary fw-semibold rounded-3 w-100" data-bs-dismiss="modal" aria-label="Close">See Flight</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-fullscreen h-75 bottom-0 position-absolute">
				<div class="modal-content rounded-top-3">
					<div class="modal-header justify-content-between align-items-center bg-primary rounded-top-3 border-0">
						<div class="reset text-decoration-underline small text-white">Reset</div>
						<h2 class="custom-h1 fw-800 text-uppercase text-white mb-0 spacing-n1">Filter</h2>
						<div class="close" data-bs-dismiss="modal" aria-label="Close"><img src="{{ asset('assets/svg/solid/remove-circle.svg') }}" alt="remove-circle" width="32px" height="32px"></div>
					</div>
					<div class="modal-body fw-medium text-black text-opacity-9 p-0">
						<div class="filter-options-modal">
							<div class="border-bottom p-3">
								<h5 class="fw-bold mb-3">
									Prices
								</h5>
								<div class="price"></div>
							</div>
							<div class="border-bottom p-3">
								<h5 class="fw-bold mb-3">
									Airlines
								</h5>
								<div class="airlines"></div>
							</div>
							<div class="border-bottom p-3">
								<h5 class="fw-bold mb-3">
									Number of stops
								</h5>
								<div class="stops"></div>
							</div>
							<div class="border-bottom p-3">
								<h5 class="fw-bold mb-3">
									Take-off Time
								</h5>
								<div class="depart-time"></div>
							</div>
							<div class="border-bottom p-3">
								<h5 class="fw-bold mb-3">
									Landing Time
								</h5>
								<div class="landing-time"></div>
							</div>
							<div class="p-3">
								<h5 class="fw-bold mb-3">
									Flight Duration 
								</h5>
								<div class="duration"></div>
							</div>
							<div class="bg-white sticky-bottom d-sm-none d-block">
								<div class="p-3 shadow-lg">
									<div class="btn btn-primary fw-semibold rounded-3 w-100" data-bs-dismiss="modal" aria-label="Close">See Flight</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection