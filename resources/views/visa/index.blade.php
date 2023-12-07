@extends('layouts.app')

@section('content')

<section>
	<div class="container">
		<div class="row">
			<span class="d-block me-3 bg-orange d-lg-block d-none" style="width: 80px; height:20px;"></span>
			<h1 class="web-title text-black text-uppercase">Get your global evisa now!</h1>
			<h5 class="my-3 text-black text-opacity-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit, lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
			
			@include('visa.section.apply_form')
			@include('visa.section.documents')
			@include('visa.section.how_to_apply')
		</div>
	</div>
</section>

@endsection