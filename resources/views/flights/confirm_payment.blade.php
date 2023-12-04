@extends('layouts.app')

@section('content')
<section class="confirmation">
	<div class="container">
		<div class="d-flex align-items-center">
			<span class="position-absolute me-3 bg-orange d-lg-block d-none" style="width: 80px; height:20px;"></span>
			<h1 class="web-title page-title text-black text-center text-uppercase w-100">CONFIRMATION</h1>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row g-sm-8 g-4">
			<div class="col-lg-7 col-12">
				<h1 class="web-header2 fw-800 text-uppercase text-black">YOUR ORDER HAS BEEN CONFIRMED!</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<a href="#" class="btn btn-outline-primary btn-lg rounded-4 py-2 fw-bold text-title w-100 btn-get-email">
					<img class="me-4 mb-1" src="https://caotrang1009.github.io/global-evisa/assets/svg/solid/mail-arrow-down.svg" data-icon-name="solid/mail-arrow-down" alt="arrow" width="32px" height="32px">
					<span class="ps-1 fs-6">Get Email Confirmation</span>
				</a>
				<div class="confirm pt-5">
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
				<div class="mb-4 text-center">
					<img class="img-fluid" src="{{ asset('assets/images/bg-send-mail-2.png') }}" alt="arrow">
				</div>
				<div class="text-title text-center mt-4"><span class="fw-semibold">Image Credit:</span> This illustration was drawn by Thanh Tran</div>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function () {	
		$(document).on('mouseenter', '.btn-get-email', function () {
			updateSvgColor($(this).find('img'), 'white');
		}).on('mouseleave', '.btn-get-email', function () {
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