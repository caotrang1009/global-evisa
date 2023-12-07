@extends('layouts.app')

@section('content')
<section class="pb-0">
	<div class="container">
		<div class="row">
			<h1 class="web-title text-black text-center text-uppercase mb-0">Payment</h1>
			<div class="step-part mt-5">
				<div class="d-flex justify-content-between text-title stepper-wrapper">
					<a href="{{ url("/flights/information") }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item completed">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">1</div>
						<div class="mt-4 mx-2 step-name text-center fs-sm-4 fs-6">Order Information</div>
					</a>
					<a href="{{ url("/flights/review-information") }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item completed">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">2</div>
						<div class="mt-4 mx-2 step-name text-center fs-sm-4 fs-6">Review Info</div>
					</a>
					<a href="{{ url("/flights/payment") }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item current">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">3</div>
						<div class="mt-4 mx-2 step-name text-center fs-sm-4 fs-6">Payment</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row align-items-end gy-5 gx-4">
			<div class="col-lg-7 col-12">
				<h1 class="web-header2 fw-800 text-uppercase text-decoration-underline text-black mb-4">YOUR ORDER WAS SUCCESSFULLY CANCELED!</h1>
				<div class="mb-4 fw-bold">Order Code: ABCYYZ123654</div>
				<ul class="mb-4">
					<li>If you initiated this cancellation, please be assured that your payment has been voided, and you will not be charged for this transaction.</li>
					<li>If you still wish to proceed with the payment, please follow the link below to make an online payment:
						<div class="d-flex justify-content-center gap-4 my-4">
							<a href="{{ url("/flights/payment-success/online") }}" class="btn btn-orange rounded-3-5 fw-bold text-title fs-6 py-2 px-5 lh-md">Pay with Paypal </a>
							<a href="{{ url("/flights/payment-success/online") }}" class="btn btn-outline-orange rounded-3-5 fw-bold text-title fs-6 py-2 px-5 lh-md">Pay with OnePay</a>
						</div>
					</li>
					<li>If you prefer to complete the payment via bank transfer, please use the following bank details.</li>
				</ul>
				<div class="border-dashed bg-beige rounded-4 p-4-5" id="bank-transfer">
					@include('layouts.sections.bank_transfer')
				</div>
			</div>
			<div class="col-lg-5 col-12">
				<div class="mb-4 text-center">
					<img class="img-fluid" src="{{ asset('assets/images/bg-send-mail-3.png') }}" alt="arrow">
				</div>
				<div class="text-title text-center mt-4"><span class="fw-semibold">Image Credit:</span> Han Le</div>
			</div>
		</div>
	</div>
</section>
@endsection