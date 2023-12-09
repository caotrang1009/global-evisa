@extends('layouts.account')

@section('content')
<form id="frm-invoice" action="" method="POST" autocomplete="off">
	@csrf
	<h2 class="fw-800 custom-h3 text-primary">send a request for an e-invoice</h2>
	<p class="text-muted">Please enter the required information, we will check and send the e-invoice to your email that you made booking with us.</p>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label class="form-label fw-semibold" for="booking_id">Booking ID <span class="text-danger">*</span></label>
				<input class="form-control border rounded-3" type="text" id="booking_id" name="booking_id" required placeholder="eg: F687227237" value="">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label class="form-label fw-semibold" for="email">Email Address <span class="text-danger">*</span></label>
				<input class="form-control border rounded-3" type="email" value="" id="email" name="email" required placeholder="eg: example@gmail.com">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label class="form-label fw-semibold" for="company_name">Company Name <span class="text-danger">*</span></label>
				<input class="form-control border rounded-3" type="text" value="" id="company_name" name="company_name" required placeholder="eg: ABC Company">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label class="form-label fw-semibold" for="company_address">Company Address <span class="text-danger">*</span></label>
				<input class="form-control border rounded-3" type="text" value="" id="company_address" name="company_address" required placeholder="eg: 40, Thien Phuoc street, Ward 9, Tan Binh District, Ho Chi Minh City">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label class="form-label fw-semibold" for="tax_code">Tax Code <span class="text-danger">*</span></label>
				<input class="form-control border rounded-3" type="text" value="" id="tax_code" name="tax_code" required placeholder="eg: xxxxxxxxxx-xxx">
			</div>
		</div>
	</div>
	<div class="text-end mt-3">
		<button class="btn bg-orange rounded-3 fw-bold text-white fs-6 py-2 px-4 lh-md btn-invoice" type="button" id="btn-invoice">SEND REQUEST<img class="ms-3" src="{{ asset('assets/svg/outline/sent-fast.svg') }}" alt="sent-fast" width="24px" height="24px"></button>
	</div>
</form>

<script>
	$(document).ready(function () {	
		var validator = $("#frm-invoice").validate({
			highlight: function(input){
				$(input).addClass('error');
				updateSvgColor($(input).siblings('img'), 'red');
			},
			errorPlacement: function(error, input){
				if (error.text() != '') {
					$(input).siblings("span").show();
					$(input).siblings("span").html(error.text())
				}
			},
			invalidHandler: function(event, validator) {
				$(".spinner").addClass("d-none");
				$('.spinner .center-div').loader('spinner').hide();
			}
		});
	});
</script>
@endsection