@extends('layouts.app')

@section('content')
<section class=" pb-0">
	<div class="container">
		<div class="row">
			<h1 class="web-title text-black text-center text-uppercase w-100 mb-0">REVIEW & PAYMENT</h1>
			<div class="step-part mt-4">
				<div class="d-flex justify-content-center text-title stepper-wrapper">
					<a href="{{ url("/flights/information") }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item completed">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">1</div>
						<div class="step-name">Order Information</div>
					</a>
					<a href="{{ url("/flights/review-and-payment") }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item current">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">2</div>
						<div class="step-name">Review & Payment</div>
					</a>
					<a href="{{ url("/flights/payment-success/online") }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">3</div>
						<div class="step-name">Confirmation</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="py-5">
	<div class="container">
		<form action="" id="frm-review">
			@csrf
			<div class="row gy-5">
				<div class="col-lg-7 col-12">
					<div id="review_infor" class="mb-4-5">
						<h2 class="fw-800 custom-h3 text-black mb-3">REVIEW INFO</h2>
						<div class="contact-information border border-primary px-sm-5 p-3 rounded-3-5 mb-3">
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown collapsed" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#contact-information">
								<div class="row align-items-center">
									<div class="col-9">
										<div class="d-flex align-items-center">
											<span class="bg-primary d-block me-sm-4-5 me-3" style="width: 40px; height: 12px;"></span>
											<h4 class="headline fw-bold text-uppercase text-decoration-underline text-black mb-0">YOUR CONTACT INFORMATION</h4>
										</div>
									</div>
									<div class="col-3 text-end">
										<div class="cursor-pointer d-inline-block" style="display: none" role="button">
											<div class="rounded-circle border border-primary" style="width: fit-content">
												<img class="m-2-5" src="{{ asset('assets/svg/solid/arrow-down-blue.svg') }}" alt="arrow" width="14px" height="14px">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="collapse pt-3" id="contact-information" style="">
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">First Name</label>
										<div class="fw-semibold">Lorem Ipsum</div>
									</div>
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Last Name</label>
										<div class="fw-semibold">Lorem Ipsum</div>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Your Phone Number</label>
										<div class="fw-semibold">+84 1312312434</div>
									</div>
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Your Email</label>
										<div class="fw-semibold">loremipisum@gmail.com</div>
									</div>
								</div>
							</div>
						</div>
						<div class="applicant-information border border-primary px-sm-5 p-3 rounded-3-5 mb-3">
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown collapsed" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#applicant-information">
								<div class="row align-items-center">
									<div class="col-9">
										<div class="d-flex align-items-center">
											<span class="bg-primary d-block me-sm-4-5 me-3" style="width: 40px; height: 12px;"></span>
											<h4 class="headline fw-bold text-uppercase text-decoration-underline text-black mb-0">APPLICANT(s)’s INFORMATION</h4>
										</div>
									</div>
									<div class="col-3 text-end">
										<div class="cursor-pointer d-inline-block" style="display: none" role="button">
											<div class="rounded-circle border border-primary" style="width: fit-content">
												<img class="m-2-5" src="{{ asset('assets/svg/solid/arrow-down-blue.svg') }}" alt="arrow" width="14px" height="14px">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="collapse pt-3" id="applicant-information" style="">
								<h5 class="text-black text-opacity-9 text-center fw-bold text-uppercase mb-4">APPLICANT NO.</h5>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">First Name</label>
										<div class="fw-semibold">Lorem Ipsum</div>
									</div>
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Last Name</label>
										<div class="fw-semibold">Lorem Ipsum</div>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Title</label>
										<div class="fw-semibold">Female</div>
									</div>
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Day of Birth</label>
										<div class="fw-semibold">15/08/1985</div>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Phone Number</label>
										<div class="fw-semibold">+84 1312312434</div>
									</div>
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Email Address</label>
										<div class="fw-semibold">loremipisum@gmail.com</div>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Country of Birth</label>
										<div class="fw-semibold">Chile</div>
									</div>
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Country of Residency</label>
										<div class="fw-semibold">Chile</div>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Passport Number</label>
										<div class="fw-semibold">C15CO8</div>
									</div>
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Expired Date</label>
										<div class="fw-semibold">15/08/1985</div>
									</div>
								</div>
								<div class="form-group row gx-4 gy-3">
									<div class="col-sm-6">
										<label class="text-black fw-medium medium">Issue Date</label>
										<div class="fw-semibold">15/08/1985</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<div id="trip_convniences" class="mb-4-5">
						<h2 class="fw-800 custom-h3 text-black mb-3">TRIP CONVENIENCES</h2>
						<div class="flight-amenities border border-primary px-sm-5 p-3 rounded-3-5 mb-3">
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#flight-amenities" aria-expanded="false" aria-controls="flight-amenities">
								<div class="row align-items-center">
									<div class="col-9">
										<div class="d-flex align-items-center">
											<span class="bg-primary d-block me-sm-4-5 me-3" style="width: 40px; height: 12px;"></span>
											<h4 class="headline fw-bold text-uppercase text-decoration-underline text-black mb-0">FLIGHT AMENITIES</h4>
										</div>
									</div>
									<div class="col-3 text-end">
										<div class="cursor-pointer d-inline-block" style="display: none" role="button">
											<div class="rounded-circle border border-primary" style="width: fit-content">
												<img class="m-2-5" src="{{ asset('assets/svg/solid/arrow-down-blue.svg') }}" alt="arrow" width="14px" height="14px">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="collapse flight-amenities pt-3 fw-medium" id="flight-amenities">
								<ul>
									<li class="mb-3">
										<h6 class="fw-bold">Airport Services</span></h6>
										<div>Normal: <span class="fw-semibold">25 USD</div>
									</li>
									<li class="mb-3">
										<h6 class="fw-bold">Travel Insurance</h6>
										<div class="mb-2">Package 1: <span class="fw-semibold">from  9 to 173 USD</span></div>
										<div class="mb-2">Number of days: <span class="fw-semibold">9 - 15 days (19 USD)</span></div>
									</li>
								</ul>
							</div>
						</div>
						<div class="rev-e-invoice border border-primary px-sm-5 p-3 rounded-3-5">
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#rev-e-invoice" aria-expanded="false" aria-controls="rev-e-invoice">
								<div class="row align-items-center">
									<div class="col-9">
										<div class="d-flex align-items-center">
											<span class="bg-primary d-block me-sm-4-5 me-3" style="width: 40px; height: 12px;"></span>
											<h4 class="headline fw-bold text-uppercase text-decoration-underline text-black mb-0">E - INVOICE</h4>
										</div>
									</div>
									<div class="col-3 text-end">
										<div class="cursor-pointer d-inline-block" style="display: none" role="button">
											<div class="rounded-circle border border-primary" style="width: fit-content">
												<img class="m-2-5" src="{{ asset('assets/svg/solid/arrow-down-blue.svg') }}" alt="arrow" width="14px" height="14px">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="collapse rev-e-invoice pt-3 fw-medium" id="rev-e-invoice">
								<ul>
									<li class="mb-3">
										<h6 class="fw-bold">Company Name</span></h6>
										<div>ABC Company</div>
									</li>
									<li class="mb-3">
										<h6 class="fw-bold">Company Address</h6>
										<div>40, Thien Phuoc Street, Ward 9, Tan Binh District, Ho Chi Minh City</div>
									</li>
									<li class="mb-3">
										<h6 class="fw-bold">Taxing Code</h6>
										<div>0314795123</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="border-dashed bg-beige rounded-4 p-4-4 mb-4-5 payment-method">
						<div class="row gx-3 gy-4">
							<div class="col-12">
								<h3 class="custom-h3 fw-800 text-black spacing-n1 mb-0">payment methods</h3>
							</div>
							<div class="col-sm-4 col-12">
								<label class="payment-method-item w-100" for="payment_method_1">
									<div class="row">
										<div class="col-2">
											<input class="form-check-input fs-5 me-2 mt-0" type="radio" name="payment_method" id="payment_method_1" value="option1" checked>
										</div>
										<div class="col-10 ps-0">
											<div class="p-3 rounded-4 bg-white payment-method-card cursor-pointer shadow-blue">
												<div class="fw-semibold medium mb-1 text-center method-title text-primary text-decoration-underline fw-800">PayPal:</div>
												<div class="text-center method-icon">
													<img src="{{ asset('assets/images/payment-method/paypal/icon.png') }}" data-link-icon="{{ asset('assets/images/payment-method/paypal') }}" alt="Bank Transfer" height="36px">
													<div class="d-flex gap-2 justify-content-center mt-1 sub-method-icon">
														<img src="{{ asset('assets/images/payment-method/visa/icon.png') }}" data-link-icon="{{ asset('assets/images/payment-method/visa') }}" alt="Bank Transfer" width="22px" height="16px">
														<img src="{{ asset('assets/images/payment-method/american-express-card/icon.png') }}" data-link-icon="{{ asset('assets/images/payment-method/american-express-card') }}" alt="Bank Transfer" width="22px" height="16px">
														<img src="{{ asset('assets/images/payment-method/master-card/icon.png') }}" data-link-icon="{{ asset('assets/images/payment-method/master-card') }}" alt="Bank Transfer" width="22px" height="16px">
														<img src="{{ asset('assets/images/payment-method/jcb-card/icon.png') }}" data-link-icon="{{ asset('assets/images/payment-method/jcb-card') }}" alt="Bank Transfer" width="22px" height="16px">
													</div>
												</div>
											</div>
										</div>
									</div>
								</label>
							</div>
							<div class="col-sm-4 col-12">
								<label class="payment-method-item w-100" for="payment_method_2">
									<div class="row">
										<div class="col-2">
											<input class="form-check-input fs-5 me-2 mt-0" type="radio" name="payment_method" id="payment_method_2" value="option1">
										</div>
										<div class="col-10 ps-0">
											<div class="p-3 rounded-4 bg-white payment-method-card cursor-pointer">
												<div class="fw-semibold medium mb-2 text-black text-center method-title">OnePay:</div>
												<div class="text-center method-icon">
													<img src="{{ asset('assets/images/payment-method/onepay/icon-outline.png') }}" data-link-icon="{{ asset('assets/images/payment-method/onepay') }}" alt="Bank Transfer" height="28px">
													<div class="d-flex gap-2 justify-content-center mt-2 sub-method-icon">
														<img src="{{ asset('assets/images/payment-method/visa/icon-outline.png') }}" data-link-icon="{{ asset('assets/images/payment-method/visa') }}" alt="Bank Transfer" width="22px" height="16px">
														<img src="{{ asset('assets/images/payment-method/american-express-card/icon-outline.png') }}" data-link-icon="{{ asset('assets/images/payment-method/american-express-card') }}" alt="Bank Transfer" width="22px" height="16px">
														<img src="{{ asset('assets/images/payment-method/master-card/icon-outline.png') }}" data-link-icon="{{ asset('assets/images/payment-method/master-card') }}" alt="Bank Transfer" width="22px" height="16px">
														<img src="{{ asset('assets/images/payment-method/jcb-card/icon-outline.png') }}" data-link-icon="{{ asset('assets/images/payment-method/jcb-card') }}" alt="Bank Transfer" width="22px" height="16px">
													</div>
												</div>
											</div>
										</div>
									</div>
								</label>
							</div>
							<div class="col-sm-4 col-12">
								<label class="payment-method-item w-100" for="payment_method_3" data-bs-target="#bank-transfer">
									<div class="row">
										<div class="col-2">
											<input class="form-check-input fs-5 me-2 mt-0" type="radio" name="payment_method" id="payment_method_3" value="option1">
										</div>
										<div class="col-10 ps-0">
											<div class="p-3 rounded-4 bg-white payment-method-card cursor-pointer">
												<div class="fw-semibold medium mb-2 text-black text-center method-title">Bank Transfer:</div>
												<div class="text-center method-icon">
													<img src="{{ asset('assets/images/payment-method/bank/icon-outline.png') }}" data-link-icon="{{ asset('assets/images/payment-method/bank') }}" alt="Bank Transfer" width="40px" height="40px">
												</div>
											</div>
										</div>
									</div>
								</label>
							</div>
							<div class="col-12">
								<div class="medium text-black text-justify"><b class="text-title">Lorem Ipsum:</b> dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</div>
							</div>
						</div>
					</div>
					<div class="border-dashed bg-beige rounded-4 p-4-4 mb-4-5" id="bank-transfer" style="display: none">
						@include('layouts.sections.bank_transfer')
					</div>
					<div class="text-center mt-4-5">
						<a href="{{ url("/flights/payment-success/online") }}" class="btn btn-primary rounded-3-5 fw-bold text-title fs-5 py-2 w-50">Proceed To Payment</a>
					</div>
				</div>
				<div class="col-lg-5 col-12">
					<div class="border-dashed bg-beige rounded-3 px-md-5 p-4-4 your-flight medium">						
						@include('flights.section.order_summary')
						<div class="d-flex justify-content-between align-items-center fw-bold mt-4">
							<span class="text-black text-opacity-9">Already had an account?</span>
							<a class="text-primary" href="#">Sign In Now!</a>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>
<script>
	$(document).ready(function(){
		var iconDown = "{{ asset('assets/svg/solid/arrow-down-blue.svg') }}";
		var iconUp = "{{ asset('assets/svg/solid/arrow-up-blue.svg') }}";

		$(".toggle-data-dropdown").click(function(){
			$(this).find("img").attr('src', (_, attr) => attr == iconDown ? iconUp : iconDown);
		});

		$("input[name='payment_method']").change(function() {
			var parent = $(this).closest("label");
			var img = $(parent).find(".method-icon img");
			
			if ($(this).is(':checked')) {
				inputChecked(parent, img);
				if ($(parent).data("bs-target") !== undefined) {
					$($(parent).data("bs-target")).show(); 
				}

				$('input[name="payment_method"]').not(this).each(function (k, ele) {
					var otherParent = $(ele).closest("label");
					inputUnChecked(otherParent, otherParent.find(".method-icon img"));
					if ($(otherParent).data("bs-target") !== undefined) {
						$($(otherParent).data("bs-target")).hide();
					}
				});
			} else {
				inputUnChecked(parent, img);
			}
		});

		function inputChecked(parent, img) {
			$(parent).find(".method-title").removeClass("fw-bold").removeClass("text-black").addClass("text-primary text-decoration-underline fw-800");
			$(parent).find(".payment-method-card").addClass("shadow-blue");
			var icon = "/icon.png";
			changeImage(img, icon);
		}

		function inputUnChecked(parent, img) {
			$(parent).find(".method-title").removeClass("text-primary text-decoration-underline fw-800").addClass("text-black fw-bold");
			$(parent).find(".payment-method-card").removeClass("shadow-blue");
			var icon = "/icon-outline.png";
			changeImage(img, icon);
		}

		function changeImage(img, icon) {
			$(img).each(function(index, item) {
				$(item).attr("src", $(item).data('link-icon')+icon);
			});
		}

		function updateSvgColor(pathElement, fillColor) {
			if (fillColor!='') {
				fillColor = '-'+fillColor;
			}

			pathElement.each(function(index, item) {
				var iconName = $(item).data('icon-name');
        		var src = `{{ asset('assets/svg/${iconName + fillColor}.svg') }}`;
				
				if ($(item).attr('alt') == 'plus') {
					iconPlus = src;
				} else if($(item).attr('alt') == 'minus') {
					var src = `{{ asset('assets/svg/outline/minus${fillColor}.svg') }}`;
					iconMinus = src;
				}
				$(item).attr('src', src);
			});
		}
	});
</script>
@endsection