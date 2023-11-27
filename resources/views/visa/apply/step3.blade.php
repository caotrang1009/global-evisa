<div class="step-3">
	<div class="row gx-8">
		<div class="col-lg-7 col-12">
			<h1 class="web-header1 fw-800 text-uppercase text-black">YOUR ORDER HAS BEEN CONFIRMED!</h1>
			<div class="text-black my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
			<a href="#" class="btn btn-outline-primary btn-lg rounded-4 py-2 fw-bold text-title w-100 btn-get-email">
				<img class="me-4 mb-1" src="{{ asset('assets/svg/solid/mail-arrow-down.svg') }}" data-icon-name="solid/mail-arrow-down" alt="arrow" width="32px" height="32px">
				<span class="ps-1 fs-6">Get Email Confirmation</span>
			</a>
			<div class="mt-5">
				<img class="img-fluid" src="{{ asset('assets/images/bg-send-mail.png') }}" alt="arrow">
			</div>
			<div class="text-title text-center mt-4"><span class="fw-semibold">Image Credit:</span> Thanh Tran</div>
		</div>
		<div class="col-lg-5 col-12">
			<div class="border-dashed bg-beige rounded-3-5 text-title py-sm-5 p-4 mb-4">
				@include('visa.section.order_summary')
				<a href="{{ url('/visa') }}" class="btn btn-orange btn-lg rounded-4 py-3 fw-bold text-title fs-6 w-100 btn-visa-search">Back to Home</a>
			</div>
		</div>
	</div>
</div>

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