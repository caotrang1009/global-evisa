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
					<a href="{{ url("/visa/information") }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item current">
						<div class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-beige step-counter">1</div>
						<div class="mt-4 mx-2 step-name text-center fs-sm-4 fs-6">Order Information</div>
					</a>
					<a href="{{ url("/visa/payment") }}" class="position-relative d-flex flex-column align-items-center cursor-pointer stepper-item">
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
		<div class="row justify-content-center">			
			<form action="" id="frm-order">
				<div class="row g-sm-5 g-4">
					<div class="col-lg-7 col-12">
						<div class="border-dashed bg-beige rounded-3-5 px-md-5 p-4-5 mb-4-5">
							<h2 class="custom-h3 fw-800 text-black spacing-n1 mb-4">ORDER INFORMATION</h2>
							@include('visa.section.order_info')
							<div class="form-group row">
								<div class="col-7">
									<label class="fw-bold text-title">Service Fees:<img class="ms-2" src="{{ asset('assets/svg/icon/info.svg') }}" alt="info" width="24px" height="24px"></label>
								</div>
								<div class="col-5">
									40 USD per person
								</div>
							</div>
							<div class="form-group row">
								<div class="col-7">
									<label class="fw-bold text-title">Admin and Government Fees:<img class="ms-2" src="{{ asset('assets/svg/icon/info.svg') }}" alt="info" width="24px" height="24px"></label>
								</div>
								<div class="col-5">
									50 USD per person
								</div>
							</div>
							<div class="form-group row mb-0">
								<div class="col-12">
									<div class="fw-bold text-title mb-2">Processing Time and Fees:</div>
									<div class="form-check align-items-stretch">
										<input class="form-check-input me-3" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										<label class="form-check-label" for="flexRadioDefault1">Normal - Within 3 days - 0 USD per person</label>
									</div>
									<div class="form-check align-items-stretch">
										<input class="form-check-input me-3" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
										<label class="form-check-label" for="flexRadioDefault2">Urgent - Within 1 day - 25 USD per person</label>
									</div>
									<div class="form-check align-items-stretch">
										<input class="form-check-input me-3" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
										<label class="form-check-label" for="flexRadioDefault3">Super Urgent - Within 5 hours - 55 USD per person</label>
									</div>
								</div>
							</div>
						</div>
						<div class="border-dashed bg-beige rounded-3-5 px-md-5 p-4-5 mb-4-5 applicant">
							<div class="row align-items-center justify-content-center mb-4">
								<div class="col-9">
									<h2 class="custom-h3 fw-800 text-black spacing-n1 mb-0">APPLICANT NO.</h2>
								</div>
								<div class="col-3 text-end">
									<div class="d-inline-block">
										<div class="delete-person cursor-pointer" style="display: none">
											<div class="rounded-circle border icon-hover" style="width: fit-content">
												<img class="m-2" src="{{ asset('assets/svg/outline/trash.svg') }}" data-icon-name="outline/trash" alt="trash" width="16px" height="16px">
											</div>
										</div>
									</div>
								</div>
							</div>
							@include('visa.section.applicant')
						</div>
						<div class="border-dashed bg-beige rounded-3-5 px-md-5 p-4 mb-4">
							<div class="row align-items-center justify-content-center">
								<div class="col-10">
									<h2 class="custom-h3 fw-800 text-black spacing-n1 mb-0">ADD-ON SERVICES</h2>
								</div>
								<div class="col-2 text-end">
									<div class="add-on-services cursor-pointer d-inline-block" data-bs-toggle="collapse" href="#add-on-services">
										<div class="rounded-circle border icon-hover" style="width: fit-content">
											<img class="m-2" src="{{ asset('assets/svg/outline/plus.svg') }}" data-icon-name="outline/plus" alt="plus" width="16px" height="16px">
										</div>
									</div>
								</div>
							</div>
							<div id="add-on-services" class="mt-3 collapse">
								<div class="form-check align-items-stretch">
									<input class="form-check-input me-2" type="checkbox" value="" id="travel_insurance" name="travel_insurance" required>
									<label class="form-check-label" for="travel_insurance"><span class="fw-semibold me-2">Travel Insurance:</span>50 USD per person</label>
								</div>
							</div>				
						</div>
						<div class="border-dashed bg-beige rounded-3-5 px-md-5 p-4 mb-4 add-another-person">
							<div class="row align-items-center justify-content-center">
								<div class="col-10">
									<h2 class="custom-h3 fw-800 text-black spacing-n1 mb-0">ADD ANOTHER PERSON</h2>
								</div>
								<div class="col-2 text-end">
									<div class="add-person cursor-pointer d-inline-block">
										<div class="rounded-circle border icon-hover" style="width: fit-content">
											<img class="m-2" src="{{ asset('assets/svg/outline/plus.svg') }}" data-icon-name="outline/plus" alt="plus" width="16px" height="16px">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="border-dashed bg-beige rounded-3-5 px-md-5 p-4-5 mb-4">
							<h2 class="custom-h3 fw-800 text-black spacing-n1 mb-4">CONTACT INFORMATION</h2>
							@include('visa.section.contact_info')
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
						<div class="border-dashed bg-beige rounded-3-5 text-title py-4-5 px-4 mb-4">
							@include('visa.section.order_summary')
							<a href="{{ url("/visa/payment") }}" class="btn btn-orange btn-lg rounded-3 py-2 lh-md fw-bold text-title fs-6 w-100 mt-4 btn-order-info">Next</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<script src="{{ asset('assets/js/flight.js') }}?id={{ filemtime('assets/js/flight.js') }}"></script>
<script>
	$(document).ready(function () {		
		var iconPlus = "{{ asset('assets/svg/outline/plus.svg') }}";
		var iconMinus = "{{ asset('assets/svg/outline/minus.svg') }}";
		var applicant = $(".applicant").first().prop('outerHTML');
		
		var validator = $("#frm-order").validate({
			highlight: function(input){
				var parent = $(input).parent(".input-order-info");
				parent.addClass('error');
				updateSvgColor(parent.find('img'), 'red');
			},
			errorPlacement: function(error, input){
				if (error.text() != '') {
					$(input).parent(".input-order-info").next("span").show();
					$(input).parent(".input-order-info").next("span").html(error.text())
				}
			},
			invalidHandler: function(event, validator) {
				$(".spinner").addClass("d-none");
				$('.spinner .center-div').loader('spinner').hide();
			}
		});

		$(".add-on-services").click(function(){
			$(this).find("img").attr('src', (_, attr) => attr == iconPlus ? iconMinus : iconPlus);
			$(this).find("img").attr('alt', (_, alt) => alt == 'plus' ? 'minus' : 'plus');
		});

		$(".add-person").click(function() {
			$(".add-another-person").hide();
			$(".applicant").last().after(applicant);
			$(".applicant").last().find(".delete-person").show();

			initLoadElement();
		});

		$(document).on('click', '.delete-person', function () {
			$(".add-another-person").show();
			$(".applicant").last().remove();
		})

		$(document).on('blur', 'input', function () {
			if ($(this).valid()) {
				var parent = $(this).parent(".input-order-info");
				parent.removeClass('error');
				parent.next("span").hide();
				updateSvgColor(parent.find('img'), '');
			}
		})

		$(document).on('mouseenter', '.icon-hover', function () {
			updateSvgColor($(this).find('img'), 'white');
		}).on('mouseleave', '.icon-hover', function () {
			updateSvgColor($(this).find('img'), '');
		});

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