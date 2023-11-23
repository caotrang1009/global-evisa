<div class="step-1 px-5">
	<form action="" id="frm-order">
		<div class="row g-5">
			<div class="col-lg-8 col-12">
				<div class="border-dashed bg-beige rounded-4 px-lg-6 px-md-5 p-4 mb-4">
					<h2 class="fw-800 text-title text-black text-uppercase mb-4">ORDER INFORMATION</h2>
					@include('visa.section.order_info')
					<table class="table table-borderless" style="--bs-table-bg: #FFFCF7">
						<tr>
							<td width="55%"><span class="fw-semibold text-title">Service Fees:</span><img class="ms-2" src="{{ asset('assets/svg/icon-info.svg') }}" alt="info"></td>
							<td>40 USD per person</td>
						</tr>
						<tr>
							<td><span class="fw-semibold text-title">Admin and Government Fees:</span><img class="ms-2" src="{{ asset('assets/svg/icon-info.svg') }}" alt="info"></td>
							<td>50 USD per person</td>
						</tr>
						<tr>
							<td colspan="2">
								<div class="fw-semibold text-title">Processing Time and Fees:</div>
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
							</td>
						</tr>
					</table>
				</div>
				<div class="border-dashed bg-beige rounded-4 px-lg-6 px-md-5 p-4 mb-4">
					<div class="d-flex justify-content-between align-items-center">
						<h2 class="fw-800 text-title text-black text-uppercase mb-0">ADD-ON SERVICES</h2>
						<div class="add-on-services cursor-pointer" data-bs-toggle="collapse" href="#add-on-services">
							<div class="rounded-circle border icon-hover"><img class="m-2" src="{{ asset('assets/svg/outline-plus.svg') }}" data-icon-name="outline-plus" alt="plus" width="16px" height="16px"></div>
						</div>
					</div>
					<div id="add-on-services" class="mt-4 collapse">
						<div class="form-check align-items-stretch">
							<input class="form-check-input me-2" type="checkbox" value="" id="travel_insurance" name="travel_insurance" required>
							<label class="form-check-label" for="travel_insurance"><span class="fw-semibold me-2">Travel Insurance:</span>50 USD per person</label>
						</div>
					</div>				
				</div>
				<div class="border-dashed bg-beige rounded-4 px-lg-6 px-md-5 p-4 mb-4 applicant">
					<div class="d-flex justify-content-between align-items-center mb-3">
						<h2 class="fw-800 text-title text-black text-uppercase">APPLICANT NO.</h2>
						<div class="delete-person cursor-pointer" style="display: none">
							<div class="rounded-circle border icon-hover"><img class="m-2" src="{{ asset('assets/svg/outline-trash.svg') }}" data-icon-name="outline-trash" alt="trash" width="16px" height="16px"></div>
						</div>
					</div>
					@include('visa.section.applicant')
				</div>
				<div class="border-dashed bg-beige rounded-4 px-lg-6 px-md-5 p-4 mb-4 add-another-person">
					<div class="d-flex justify-content-between align-items-center">
						<h2 class="fw-800 text-title text-black text-uppercase mb-0">ADD ANOTHER PERSON</h2>
						<div class="add-person cursor-pointer">
							<div class="rounded-circle border icon-hover"><img class="m-2" src="{{ asset('assets/svg/outline-plus.svg') }}" data-icon-name="outline-plus" alt="plus" width="16px" height="16px"></div>
						</div>
					</div>
				</div>
				<div class="border-dashed bg-beige rounded-4 px-lg-6 px-md-5 p-4 mb-4">
					<h2 class="fw-800 text-title text-black text-uppercase mb-4">CONTACT INFORMATION</h2>
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
			<div class="col-lg-4 col-12">
				<div class="border-dashed bg-beige rounded-4 text-title py-sm-5 p-4 mb-4">
					@include('visa.section.order_summary')
					<a href="{{ url('/visa/apply/step2') }}" class="btn btn-orange btn-lg rounded-4 py-3 fw-bold w-100 btn-visa-search">Go to Payment Page</a>
				</div>
			</div>
		</div>
	</form>
</div>

<script>
	$(document).ready(function () {		
		var iconPlus = "{{ asset('assets/svg/outline-plus.svg') }}";
		var iconMinus = "{{ asset('assets/svg/outline-minus.svg') }}";
		var applicant = $(".applicant").first().prop('outerHTML');
		
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

		$(".add-on-services").click(function(){
			$(this).find("img").attr('src', (_, attr) => attr == iconPlus ? iconMinus : iconPlus);
			$(this).find("img").attr('alt', (_, alt) => alt == 'plus' ? 'minus' : 'plus');
		});

		$(".add-person").click(function() {
			$(".add-another-person").hide();
			$(".applicant").last().after(applicant);
			$(".applicant").last().find(".delete-person").show();
		});

		$(document).on('click', '.delete-person', function () {
			$(".add-another-person").show();
			$(".applicant").last().remove();
		})

		$('input').on('blur', function () {
			if ($(this).valid()) {
				var parent = $(this).parent(".input-visa-search");
				parent.removeClass('error');
				parent.next("span").hide();
				updateSvgColor(parent.find('img'), '');
			}
		});

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
					var src = `{{ asset('assets/svg/outline-minus${fillColor}.svg') }}`;
					iconMinus = src;
				}
				$(item).attr('src', src);
			});
		}
	});
</script>