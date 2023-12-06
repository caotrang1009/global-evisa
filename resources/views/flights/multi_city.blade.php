@extends('layouts.app')

@section('content')
	<section>
		<div class="container">
			<div class="d-flex align-items-baseline">
				<span class="d-block me-3 bg-orange d-lg-block d-none" style="width: 80px; height:20px;"></span>
				<h1 class="web-title text-black text-uppercase mb-0">SEARCH YOUR FLIGHT!</h1>
			</div>
		</div>
	</section>
	<section class="pt-0">
		<div class="container bg-primary position-relative">
			@include('flights.section.quicksearch')
			<div class="position-absolute start-0 d-flex justify-content-center mt-n4-1 w-100">
				<img src="{{ asset('assets/svg/outline/calendar.svg') }}" alt="calendar" width="56px" height="56px">
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			@include('flights.section.slide_price')
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row g-4-3">
				<div class="col-lg-3-5">
					@include('flights.section.selected')
					@include('flights.section.filter')
				</div>
				<div class="col-lg-8-5">					
					@include('flights.section.multi_city')
				</div>
			</div>
		</div>
	</section>
@endsection