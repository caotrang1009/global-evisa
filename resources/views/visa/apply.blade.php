@extends('layouts.app')

@section('content')
@php
	$step = (empty($step)) ? 'step1' : $step;
	$step_completed = array(0, 0, 0);
	if ($step == 'step1') {
		$step_completed[0] = 1;
	} else if ($step == 'step2') {
		$step_completed = array(1, 1, 0);
	} else if ($step == 'step3') {
		$step_completed = array(1, 1, 1);
	}
@endphp
<section class="pb-0">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-6">
				<span class="d-md-block d-none me-3 bg-orange" style="width: 80px; height:20px;"></span>
			</div>
			<div class="col-6 text-end pe-5">
				<a href="#" class="btn btn-primary btn-lg rounded-4 fs-6 fw-semibold px-md-5 px-4 btn-save-exit">
					<span class="btn-text">Save & Exit</span>
				</a>
			</div>
		</div>
	</div>
</section>
<section class="pt-0 visa mt-lg-n5 mt-0">
	<div class="container">
		<div class="row">
			<h1 class="page-title text-secondary text-uppercase text-title">GLOBAL EVISA <br> APPLICATION FORM</h1>
			<div class="step-part mt-5">
				<div class="d-flex justify-content-between text-title stepper-wrapper">
					<a href="{{ url('visa/apply/step1') }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item {{$step_completed[0]}} {{ ($step_completed[0]) ? 'completed' : '' }}">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige border border-orange step-counter">1</div>
						<div class="h4 mt-4 mx-2 step-name text-center d-md-block d-none">Order Information</div>
					</a>
					<a href="{{ url('visa/apply/step2') }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item {{$step_completed[1]}} {{ ($step_completed[1]) ? 'completed' : '' }}">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige border border-orange step-counter">2</div>
						<div class="h4 mt-4 mx-2 step-name text-center d-md-block d-none">Payment</div>
					</a>
					<a href="{{ url('visa/apply/step3') }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item {{$step_completed[2]}} {{ ($step_completed[2]) ? 'completed' : '' }}">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige border border-orange step-counter">3</div>
						<div class="h4 mt-4 mx-2 step-name text-center d-md-block d-none">Confirmation</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="pt-0">
	<div class="container">
		<div class="row justify-content-center">
			@include('visa.apply.'.$step)
		</div>
	</div>
</section>

@endsection