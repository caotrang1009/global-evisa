@extends('layouts.app')

@section('content')
<section class="pb-0">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<span class="d-block mb-3 bg-orange d-lg-block d-none" style="width: 80px; height:20px; left: -123px;"></span>
				<h1 class="web-title text-black text-uppercase">GLOBAL EVISA <br> APPLICATION FORM</h1>
			</div>
			<div class="col-sm-3 text-end">
				<a href="#" class="btn btn-primary btn-lg rounded-4 fs-6 fw-semibold px-md-5 px-4 py-3 btn-save-exit">
					<span class="btn-text px-3">Save & Exit</span>
				</a>
			</div>
		</div>
		<div class="row">
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
		<div class="row gy-5 gx-4">
			<div class="col-lg-6 col-12">
				<h1 class="web-header2 fw-800 text-uppercase text-decoration-underline text-black mb-4">YOUR ORDER WAS DONE SUCCESSFULLY!</h1>
				<div class="mb-4 fw-bold">Order Code: ABCYYZ123654</div>
				<div class="mb-4">We have received your payment and will notify you for refund if there are unexpected issues. Please check your email to confirm the receipt information, then contact us for further assistance.</div>
				<a href="{{ url("/flights") }}" class="btn btn-orange rounded-3-5 fw-bold text-title fs-6 py-2 lh-md w-50">Go to my order</a>
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