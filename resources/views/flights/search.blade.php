@extends('layouts.app')

@section('content')
	<section>
		<div class="container">
			<div class="d-flex align-items-baseline">
				<span class="d-block me-4" style="width: 6.25rem; height: 1.25rem; background-color: #EB9444"></span>
				<h1 class="mb-1 text-uppercase" style="font-size: 5rem; font-weight:800">SEARCH YOUR FLIGHT!</h1>
			</div>
		</div>
	</section>
	@include('flights.section.quicksearch')
	@include('flights.section.slide_price')
	<section>
		<div class="container">
			<div class="row g-4">
				@include('flights.section.filter')
				@include('flights.section.offers')
			</div>
		</div>
	</section>
@endsection