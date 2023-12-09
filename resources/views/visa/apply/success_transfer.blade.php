@extends('layouts.app')

@section('content')
<section class="pb-0">
	<div class="container">
		<div class="row">
			<h1 class="web-title text-black text-center text-uppercase mb-0">Confirmation</h1>
			<div class="step-part mt-4">
				<div class="d-flex justify-content-center text-title stepper-wrapper">
					<a href="{{ url("/visa/information") }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item completed">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">1</div>
						<div class="step-name">Order Information</div>
					</a>
					<a href="{{ url("/visa/payment") }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item completed">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">2</div>
						<div class="step-name">Payment</div>
					</a>
					<a href="{{ url("/visa/payment-success/online") }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item current">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">3</div>
						<div class="step-name">Confirmation</div>
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
				<h1 class="web-header2 fw-800 text-uppercase text-decoration-underline text-black mb-4">YOUR ORDER WAS CREATED SUCCESSFULLY!</h1>
				<div class="mb-4 fw-bold">Order Code: ABCYYZ123654</div>
				<div class="mb-4">We are delighted to inform you that your order has been placed successfully! In order for us to proceed your order swiftly, kindly make the payment using the provided bank transfer details below.</div>
				<div class="border-dashed bg-beige rounded-4 p-4-5 mb-4-5" id="bank-transfer">
					@include('layouts.sections.bank_transfer')
				</div>
				<a href="{{ url("/visa") }}" class="btn btn-primary rounded-3-5 fw-bold text-title fs-6 py-2 lh-md w-50">Go to my order</a>
			</div>
			<div class="col-lg-5 col-12">
				<div class="mb-4 text-center">
					<img class="img-fluid" src="{{ asset('assets/images/bg-send-mail-2.png') }}" alt="arrow">
				</div>
			</div>
		</div>
	</div>
</section>
@endsection