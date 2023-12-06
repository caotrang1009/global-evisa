@extends('layouts.app')

@section('content')

<section>
	<div class="container">
		<div class="row">
			<div class="d-flex">
				<span class="d-block me-3 bg-orange d-lg-block d-none" style="width: 80px; height:20px;"></span>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb visa-breadcrumb text-title mb-2">
						<li class="breadcrumb-item"><a class="btn btn-outline-primary" href="/">Home</a></li>
						<li class="breadcrumb-item"><a class="btn btn-outline-primary" href="/visa/country/belarus">Country</a></li>
						<li class="breadcrumb-item active" aria-current="page"><a class="btn btn-outline-primary px-5" href="/visa">Get your global evisa now!</a></li>
					</ol>
				</nav>
			</div>
			<h1 class="web-title text-black text-uppercase">Get your global evisa now!</h1>
			<h5 class="my-3 text-black text-opacity-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit, lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
			
			@include('visa.section.apply_form')
			@include('visa.section.documents')
			@include('visa.section.how_to_apply')
		</div>
	</div>
</section>

@endsection