@extends('layouts.app')

@section('content')
@php
	$step = (empty($step)) ? 'step1' : $step;
@endphp

<section class="pb-0">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<span class="d-block mb-3 bg-orange d-lg-block d-none" style="width: 80px; height:20px; left: -123px;"></span>
				<h1 class="web-title page-title text-black text-uppercase">GLOBAL EVISA <br> APPLICATION FORM</h1>
			</div>
			<div class="col-sm-3 text-end">
				<a href="#" class="btn btn-primary btn-lg rounded-4 fs-6 fw-semibold px-md-5 px-4 py-3 btn-save-exit">
					<span class="btn-text px-3">Save & Exit</span>
				</a>
			</div>
		</div>
	</div>
</section>
@include('visa.apply.'.$step)

@endsection