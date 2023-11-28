<div class="step-2">
	<form action="" id="frm-order">
		<h2 class="fw-800 text-uppercase text-black text-title ms-5 mb-0 pb-2">Customer’s order review</h2>
		<div class="order-information border border-primary px-sm-5 p-3 rounded-collapse my-4">
			<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown collapsed" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#order-information">
				<div class="row">
					<div class="col-9">
						<div class="d-flex align-items-center">
							<span class="bg-primary d-block me-sm-5 me-3" style="width: 72px; height: 12px;"></span>
							<h4 class="fw-800 text-uppercase text-decoration-underline text-black text-title mb-0">YOUR ORDER INFORMATION</h4>
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
			<div class="collapse py-3" id="order-information" style="">
				<div class="row justify-content-center">
					<div class="col-lg-7 col-12">
						@include('visa.review.order_info')
					</div>
				</div>
			</div>
		</div>
		<div class="applicant-information border border-primary px-sm-5 p-3 rounded-collapse my-4">
			<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown collapsed" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#applicant-information">
				<div class="row">
					<div class="col-9">
						<div class="d-flex align-items-center">
							<span class="bg-primary d-block me-sm-5 me-3" style="width: 72px; height: 12px;"></span>
							<h4 class="fw-800 text-uppercase text-decoration-underline text-black text-title mb-0">APPLICANT(s)’s INFORMATION</h4>
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
				<div class="row justify-content-center">
					<div class="col-lg-9 col-12">
						@include('visa.review.applicant')
					</div>
				</div>
			</div>
		</div>
		<div class="contact-information border border-primary px-sm-5 p-3 rounded-collapse my-4">
			<div role="button" data-icon-change="fas fa-caret-up fs-4 text-primary" class="toggle-data-dropdown collapsed" data-icon-current="fas fa-caret-down fs-4 text-primary" data-bs-toggle="collapse" data-bs-target="#contact-information">
				<div class="row">
					<div class="col-9">
						<div class="d-flex align-items-center">
							<span class="bg-primary d-block me-sm-5 me-3" style="width: 72px; height: 12px;"></span>
							<h4 class="fw-800 text-uppercase text-decoration-underline text-black text-title mb-0">YOUR CONTACT INFORMATION</h4>
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
			<div class="collapse py-3" id="contact-information" style="">
				<div class="row justify-content-center">
					<div class="col-lg-7 col-12">
						@include('visa.review.contact_info')
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<div class="payment">
	<div class="row g-5 mt-0">
		<div class="col-lg-7 col-12">
			<div class="border-dashed bg-beige rounded-4 px-5 p-4 mb-4">
				<div class="row gx-3 gy-4">
					<div class="col-12">
						<h2 class="fw-800 text-title text-black text-uppercase mb-4">payment methods</h2>
					</div>
					<div class="col-12 text-center">
						<label class="payment-method-item w-md-50 w-100" for="payment_method_1" data-bs-target="#bank-transfer">
							<div class="row">
								<div class="col-2">
									<input class="form-check-input fs-5 me-2 mt-0" type="radio" name="payment_method" id="payment_method_1" value="option1">
								</div>
								<div class="col-10 ps-0">
									<div class="px-4 py-3 rounded-4 bg-white payment-method-card cursor-pointer">
										<h5 class="fw-bold mb-3 text-black text-start method-title">Bank Transfer:</h5>
										<div class="method-icon">
											<img src="{{ asset('assets/images/payment-method/bank/icon-outline.png') }}" data-link-icon="{{ asset('assets/images/payment-method/bank') }}" alt="Bank Transfer" width="80px" height="80px">
										</div>
									</div>
								</div>
							</div>
						</label>
					</div>
					<div class="col-sm-6 col-12">
						<label class="payment-method-item w-100" for="payment_method_2">
							<div class="row">
								<div class="col-2">
									<input class="form-check-input fs-5 me-2 mt-0" type="radio" name="payment_method" id="payment_method_2" value="option1">
								</div>
								<div class="col-10 ps-0">
									<div class="px-4 py-3 rounded-4 bg-white payment-method-card cursor-pointer">
										<h5 class="fw-bold mb-3 text-black method-title">OnePay:</h5>
										<div class="text-center method-icon">
											<img src="{{ asset('assets/images/payment-method/onepay/icon-outline.png') }}" data-link-icon="{{ asset('assets/images/payment-method/onepay') }}" alt="Bank Transfer" height="56px">
											<div class="d-flex gap-2 justify-content-center mt-3 sub-method-icon">
												<img src="{{ asset('assets/images/payment-method/visa/icon-outline.png') }}" data-link-icon="{{ asset('assets/images/payment-method/visa') }}" alt="Bank Transfer" width="28px" height="20px">
												<img src="{{ asset('assets/images/payment-method/american-express-card/icon-outline.png') }}" data-link-icon="{{ asset('assets/images/payment-method/american-express-card') }}" alt="Bank Transfer" width="28px" height="20px">
												<img src="{{ asset('assets/images/payment-method/master-card/icon-outline.png') }}" data-link-icon="{{ asset('assets/images/payment-method/master-card') }}" alt="Bank Transfer" width="28px" height="20px">
												<img src="{{ asset('assets/images/payment-method/jcb-card/icon-outline.png') }}" data-link-icon="{{ asset('assets/images/payment-method/jcb-card') }}" alt="Bank Transfer" width="28px" height="20px">
											</div>
										</div>
									</div>
								</div>
							</div>
						</label>
					</div>
					<div class="col-sm-6 col-12">
						<label class="payment-method-item w-100" for="payment_method_3">
							<div class="row">
								<div class="col-2">
									<input class="form-check-input fs-5 me-2 mt-0" type="radio" name="payment_method" id="payment_method_3" value="option1">
								</div>
								<div class="col-10 ps-0">
									<div class="px-4 py-3 rounded-4 bg-white payment-method-card cursor-pointer">
										<h5 class="fw-bold mb-3 text-black method-title">PayPal:</h5>
										<div class="text-center method-icon">									
											<img src="{{ asset('assets/images/payment-method/paypal/icon-outline.png') }}" data-link-icon="{{ asset('assets/images/payment-method/paypal') }}" alt="Bank Transfer" height="56px">
											<div class="d-flex gap-2 justify-content-center mt-3 sub-method-icon">
												<img src="{{ asset('assets/images/payment-method/visa/icon-outline.png') }}" data-link-icon="{{ asset('assets/images/payment-method/visa') }}" alt="Bank Transfer" width="28px" height="20px">
												<img src="{{ asset('assets/images/payment-method/american-express-card/icon-outline.png') }}" data-link-icon="{{ asset('assets/images/payment-method/american-express-card') }}" alt="Bank Transfer" width="28px" height="20px">
												<img src="{{ asset('assets/images/payment-method/master-card/icon-outline.png') }}" data-link-icon="{{ asset('assets/images/payment-method/master-card') }}" alt="Bank Transfer" width="28px" height="20px">
												<img src="{{ asset('assets/images/payment-method/jcb-card/icon-outline.png') }}" data-link-icon="{{ asset('assets/images/payment-method/jcb-card') }}" alt="Bank Transfer" width="28px" height="20px">
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
			<div class="border-dashed bg-beige rounded-4 p-5 mb-4" id="bank-transfer" style="display: none">
				@include('visa.section.bank_transfer')
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
		</div>
		<div class="col-lg-5 col-12">
			<div class="border-dashed bg-beige rounded-3-5 text-title py-sm-5 p-4 mb-4">
				@include('visa.section.order_summary')
				<a href="{{ url('/visa/apply/step3') }}" class="btn btn-orange btn-lg rounded-4 py-3 fw-bold text-title fs-6 w-100 btn-payment">Confirm your Payment</a>
			</div>
			<div class="secured">
				<div class="d-flex align-items-center gap-2 pb-3">
					<img src="{{ asset('assets/svg/outline/shield-check.svg') }}" alt="Bank Transfer" width="40px" height="40px">
					<div>
						<div class="medium fw-semibold text-title">Your data is secured by us!</div>
						<div class="small">For more details please read <span class="text-title text-primary fw-bold">Global eVISA Security Policies</span></div>
					</div>
				</div>
				<div class="d-flex align-items-center gap-3 pt-4">
					<a href="{{ url('/visa/apply/step1') }}" class="btn btn-primary btn-lg rounded px-5">
						<img src="{{ asset('assets/svg/icon/direction-left.svg') }}" alt="Bank Transfer">
					</a>
					<div class="medium fw-semibold text-title text-primary">Back to previous step</div>
				</div>
			</div>
		</div>
	</div>
</div>

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

		$('input.form-control').on('blur', function () {
			if ($(this).valid()) {
				var parent = $(this).parent(".input-visa-search");
				parent.removeClass('error');
				parent.next("span").hide();
				updateSvgColor(parent.find('img'), '');
			}
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