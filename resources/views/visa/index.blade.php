@extends('layouts.app')

@section('content')

<section>
	<div class="container">
		<div class="row">
			<h1 class="web-title text-black text-uppercase">Get your global evisa now!</h1>
			<h5 class="text-black text-opacity-9 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
			@include('visa.section.apply_form')
			@include('visa.section.documents')
			@include('visa.section.how_to_apply')
		</div>
	</div>
</section>

@endsection