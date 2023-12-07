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
	</div>
</section>
<section class="pt-0">
	<div class="container">
		<div class="row">
			<div class="step-part mt-5">
				<div class="d-flex justify-content-between text-title stepper-wrapper">
					<a href="{{ url("/visa/information") }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item completed">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">1</div>
						<div class="mt-4 mx-2 step-name text-center fs-sm-4 fs-6">Order Information</div>
					</a>
					<a href="{{ url("/visa/payment") }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item current">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">2</div>
						<div class="mt-4 mx-2 step-name text-center fs-sm-4 fs-6">Payment</div>
					</a>
					<a href="{{ url("/visa/payment-success/online") }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item">
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
		<form action="" id="frm-review">
			<div class="row gy-5">
				<div class="col-lg-7 col-12">
					<div id="review-info" class="mb-4-5">
						<h2 class="fw-800 custom-h3 text-black mb-3">Customer’s order review</h2>
						<div class="order-information border border-primary px-sm-5 p-3 rounded-3-5 mb-3">
							<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown collapsed" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#order-information">
								<div class="row align-items-center">
									<div class="col-9">
										<div class="d-flex align-items-center">
											<span class="bg-primary d-block me-sm-4-5 me-3" style="width: 40px; height: 12px;"></span>
											<h4 class="headline fw-bold text-uppercase text-decoration-underline text-black mb-0">YOUR ORDER INFORMATION</h4>
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
							<div class="collapse pt-3" id="order-information" style="">
								@include('visa.review.order_info')
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
							<div class="collapse py-3" id="applicant-information" style="">
								@include('visa.review.applicant')
							</div>
						</div>
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
								@include('visa.review.contact_info')
							</div>
						</div>
					</div>
					<div class="border-dashed bg-beige rounded-4 p-4-5 mb-4-5 payment-method">
						<div class="row gx-3 gy-4">
							<div class="col-12">
								<h3 class="custom-h3 fw-800 text-black spacing-n1 mb-0">payment methods</h3>
							</div>
							<div class="col-sm-4 col-12">
								<label class="payment-method-item w-100" for="payment_method_1" data-bs-target="#bank-transfer">
									<div class="row">
										<div class="col-2">
											<input class="form-check-input fs-5 me-2 mt-0" type="radio" name="payment_method" id="payment_method_1" value="option1">
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
								<label class="payment-method-item w-100" for="payment_method_3">
									<div class="row">
										<div class="col-2">
											<input class="form-check-input fs-5 me-2 mt-0" type="radio" name="payment_method" id="payment_method_3" value="option1">
										</div>
										<div class="col-10 ps-0">
											<div class="p-3 rounded-4 bg-white payment-method-card cursor-pointer">
												<div class="fw-semibold medium mb-1 text-black text-center method-title">PayPal:</div>
												<div class="text-center method-icon">									
													<img src="{{ asset('assets/images/payment-method/paypal/icon-outline.png') }}" data-link-icon="{{ asset('assets/images/payment-method/paypal') }}" alt="Bank Transfer" height="36px">
													<div class="d-flex gap-2 justify-content-center mt-1 sub-method-icon">
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
							<div class="col-12">
								<div class="medium text-black text-justify"><b class="text-title">Lorem Ipsum:</b> dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</div>
							</div>
						</div>
					</div>
					<div class="border-dashed bg-beige rounded-4 p-4-5 mb-4-5" id="bank-transfer" style="display: none">
						@include('layouts.sections.bank_transfer')
					</div>
					<div class="confirm">
						<div class="form-check mb-3">
							<input class="form-check-input mt-0" type="checkbox" value="" id="correct_info" name="correct_info" style="width:1.5rem; height:1.5rem" checked required>
							<label class="form-check-label ms-3 cursor-pointer" for="correct-info">I would like to confirm that the above information is correct.</label>
						</div>
						<div class="form-check">
							<input class="form-check-input mt-0" type="checkbox" value="" id="term" name="term" style="width:1.5rem; height:1.5rem" checked required>
							<label class="form-check-label ms-3 cursor-pointer" for="term">
								I have read and agree to the <a href="#" class="fw-bold text-title text-primary text-decoration-underline">Terms and Conditions</a> as well as the company's <a href="#" class="fw-bold text-title text-primary text-decoration-underline">Policies</a>.
							</label>
						</div>
					</div>
					<div class="text-center mt-4-5">
						<a href="{{ url("/visa/payment-success/online") }}" class="btn btn-primary rounded-3-5 fw-bold text-title fs-5 py-2 px-6">Proceed To Payment</a>
					</div>
				</div>
				<div class="col-lg-5 col-12">
					<div class="border-dashed bg-beige rounded-3-5 text-title py-4-5 px-4 mb-4">
						@include('visa.section.order_summary')
					</div>
				</div>
			</div>
		</form>
	</div>
</section>

<script>
	$(document).ready(function () {		
		var iconDown = "{{ asset('assets/svg/solid/arrow-down-blue.svg') }}";
		var iconUp = "{{ asset('assets/svg/solid/arrow-up-blue.svg') }}";
		
		var validator = $("#frm-order").validate({
			highlight: function(input){
				var parent = $(input).parent(".input-visa-search");
				parent.addClass('error');
				updateSvgColor(parent.find('img'), 'red');
			},
			errorPlacement: function(error, input){
				if (error.text() != '') {
					$(input).parent(".input-visa-search").next("span").show();
					$(input).parent(".input-visa-search").next("span").html(error.text())
				}
			},
			invalidHandler: function(event, validator) {
				$(".spinner").addClass("d-none");
				$('.spinner .center-div').loader('spinner').hide();
			}
		});

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