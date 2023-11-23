@extends('layouts.app')

@section('content')
<section class="pb-0">
	<div class="container">
		<div class="row">
			<span class="d-block me-3 bg-orange" style="width: 80px; height:20px;"></span>
		</div>
	</div>
</section>
<section class="pt-0 visa" style="margin-top: -1.25rem">
	<div class="container">
		<div class="row">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb visa-breadcrumb mb-4 text-title">
					<li class="breadcrumb-item"><a class="btn btn-outline-primary" href="/">Home</a></li>
					<li class="breadcrumb-item"><a class="btn btn-outline-primary" href="{{ url('/visa/country/belarus') }}">Country</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a class="btn btn-outline-primary px-5" href="{{ url('visa') }}">Get your global evisa now!</a></li>
				</ol>
			</nav>
			<h1 class="page-title text-secondary text-uppercase text-title">Get your global evisa now!</h1>
			<h5 class="my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
			
			@include('visa.section.apply_form')
			@include('visa.section.documents')
			@include('visa.section.how_to_apply')
		</div>
	</div>
</section>

@endsection