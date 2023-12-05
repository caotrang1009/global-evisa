<section class="pt-0">
	<div class="container">
		<div class="row">
			<div class="step-part mt-5">
				<div class="d-flex justify-content-between text-title stepper-wrapper">
					<a href="{{ url('visa/apply/step1') }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item completed">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">1</div>
						<div class="mt-4 mx-2 step-name text-center fs-sm-4 fs-6">Order Information</div>
					</a>
					<a href="{{ url('visa/apply/step2') }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item completed">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">2</div>
						<div class="mt-4 mx-2 step-name text-center fs-sm-4 fs-6">Payment</div>
					</a>
					<a href="{{ url('visa/apply/step3') }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item current">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">3</div>
						<div class="mt-4 mx-2 step-name text-center fs-sm-4 fs-6">Confirmation</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-12">
				<h1 class="web-header2 fw-800 text-uppercase text-black">YOUR ORDER WAS DONE SUCCESSFULLY!</h1>
				<div class="my-4 fw-bold">Order Code: ABCYYZ123654</div>
				<p>We have received your payment and will notify you for refund if there are unexpected issues. Please check your email to confirm the receipt information, then contact us for further assistance.</p>
				<a href="{{ url('/visa') }}" class="btn btn-orange btn-lg rounded-4 py-3 px-6 fw-bold text-title fs-6 btn-visa-search">Go to my order</a>
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