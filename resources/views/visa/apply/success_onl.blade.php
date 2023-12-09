@extends('layouts.app')

@section('content')
<section class="pb-0">
	<div class="container">
		<div class="row">
			<h1 class="web-title text-black text-center text-uppercase w-100 mb-0">Confirmation</h1>
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
		<div class="row gy-5 gx-4">
			<div class="col-lg-6 col-12">
				<h1 class="web-header2 fw-800 text-uppercase text-decoration-underline text-black mb-4">YOUR ORDER WAS CREATED SUCCESSFULLY!</h1>
				<div class="mb-4 fw-bold">Order Code: ABCYYZ123654</div>
				<div class="mb-4">We have received your payment and will notify you for refund if there are unexpected issues. Please check your email to confirm the receipt information, then contact us for further assistance.</div>
				<a href="{{ url("/flights") }}" class="btn btn-primary rounded-3-5 fw-bold text-title fs-6 py-2 lh-md w-50">Go to my order</a>
			</div>
			<div class="col-lg-6 col-12">
				<div class="mb-4 text-center">
					<img class="img-fluid" src="{{ asset('assets/images/bg-send-mail.png') }}" alt="arrow">
				</div>
				<div class="text-title text-center mt-4"><span class="fw-semibold">Image Credit:</span> Thanh Tran</div>
			</div>
		</div>
	</div>
</section>
@endsection