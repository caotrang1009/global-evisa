<div class="d-flex align-items-start gap-3">
	<img class="fit-contain" src="{{ asset('assets/svg/outline/plane-takeoff.svg') }}" alt="Air Asia" width="24px" height="24px">
	<h3 class="custom-h3 fw-800 text-black spacing-n1 mb-0">Your flight</h3>
</div>
<div class="py-4 flight">
	<div class="d-flex align-items-center justify-content-between gap-3 cursor-pointer toggle-data-flight" data-bs-toggle="collapse" data-bs-target="#flightOne">
		<div>
			<div class="d-flex align-items-center gap-1 text-black fw-bold flex-wrap cursor-pointer">
				<span>Tokyo</span> 
				<span><img src="{{ asset('assets/svg/outline/arrow-right-black.svg') }}" alt="arrow-right" width="24px" height="24px"></span>
				<span>Singapore</span>
				<ul class="text-primary ms-1">
					<li>Mon, 18 Sep 2023</li>
				</ul>				
			</div>
		</div>
		<div class="cursor-pointer text-end">
			<img class="icon-direct" src="{{ asset('assets/svg/solid/arrow-up-blue.svg') }}" alt="arrow-bottom" data-icon-name="solid/arrow-down-blue" data-icon-hover="solid/arrow-up-blue" width="12px" height="12px">
		</div>
	</div>
	<div id="flightOne" class="collapse show">
		<div class="d-flex align-items-center gap-3 mb-3">
			<img class="img-airline" src="{{ asset('assets/images/airline/bamboo_airways.png') }}" alt="Air Asia">
			<div class="text-black text-opacity-9 fw-bold airline-name">Bamboo Airlines</div>
		</div>
		<div class="d-flex align-items-center justify-content-between mb-3">
			<div class="departure">
				<div class="flex-grow-1">
					<div class="text-black fw-bold mb-1">17:20</div>
					<div class="code"><span>TYO</span></div>
				</div>
			</div>
			<div>
				<img src="{{ asset('assets/svg/solid/airplane-mode.svg') }}" alt="airplane-mode" width="24px" height="24px">
			</div>
			<div class="arrival">
				<div class="flex-grow-1">
					<div class="text-black fw-bold mb-1">17:20</div>
					<div class="code"><span>SIN</span></div>
				</div>
			</div>
			<div class="duration">+1day</div>
			<div class="time">
				<div class="flex-grow-1">
					<div class="text-black fw-bold mb-1">5h 40m</div>
					<div class="medium">Direct flight</div>
				</div>
			</div>
		</div>
		<div class="d-flex align-items-center gap-2">
			<img src="{{ asset('assets/svg/solid/infomation.svg') }}" alt="infomation" width="20px" height="20px">
			<div class="medium fw-medium">Stop to change flight at Seoul (2h 30m)</div>
		</div>
	</div>
</div>
<div class="py-4 flight">
	<div class="d-flex align-items-center justify-content-between gap-3 cursor-pointer toggle-data-flight" data-bs-toggle="collapse" data-bs-target="#flightTwo">
		<div>
			<div class="d-flex align-items-center gap-1 text-black fw-bold flex-wrap cursor-pointer">
				<span>Singapore</span> 
				<span><img src="{{ asset('assets/svg/outline/arrow-right-black.svg') }}" alt="arrow-right" width="24px" height="24px"></span>
				<span>Tokyo</span>
				<ul class="text-primary ms-1">
					<li>Mon, 20 Sep 2023</li>
				</ul>
			</div>
		</div>
		<div class="cursor-pointer text-end">
			<img class="icon-direct" src="{{ asset('assets/svg/solid/arrow-down-blue.svg') }}" alt="arrow-bottom" data-icon-name="solid/arrow-down-blue" data-icon-hover="solid/arrow-up-blue" width="12px" height="12px">
		</div>
	</div>
	<div id="flightTwo" class="collapse">
		<div class="d-flex align-items-center gap-3 mb-3">
			<img class="img-airline" src="{{ asset('assets/images/airline/bamboo_airways.png') }}" alt="Air Asia">
			<div class="text-black text-opacity-9 fw-bold airline-name">Bamboo Airlines</div>
		</div>
		<div class="d-flex align-items-center justify-content-between">
			<div class="departure">
				<div class="flex-grow-1">
					<div class="text-black fw-bold mb-1">17:20</div>
					<div class="code"><span>TYO</span></div>
				</div>
			</div>
			<div>
				<img src="{{ asset('assets/svg/solid/airplane-mode.svg') }}" alt="airplane-mode" width="24px" height="24px">
			</div>
			<div class="arrival">
				<div class="flex-grow-1">
					<div class="text-black fw-bold mb-1">17:20</div>
					<div class="code"><span>SIN</span></div>
				</div>
			</div>
			<div class="duration">+1day</div>
			<div class="time">
				<div class="flex-grow-1">
					<div class="text-black fw-bold mb-1">5h 40m</div>
					<div class="medium">Direct flight</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="py-4 flight">
	<div class="d-flex align-items-center justify-content-between gap-3 cursor-pointer toggle-data-flight" data-bs-toggle="collapse" data-bs-target="#flightThree">
		<div>
			<div class="d-flex align-items-center gap-1 text-black fw-bold flex-wrap">
				<span>Tokyo</span> 
				<span><img src="{{ asset('assets/svg/outline/arrow-right-black.svg') }}" alt="arrow-right" width="24px" height="24px"></span>
				<span>Ho Chi Minh</span>
				<ul class="text-primary ms-1">
					<li>Mon, 20 Sep 2023</li>
				</ul>
			</div>
		</div>
		<div class="cursor-pointer text-end">
			<img class="icon-direct" src="{{ asset('assets/svg/solid/arrow-down-blue.svg') }}" alt="arrow-bottom" data-icon-name="solid/arrow-down-blue" data-icon-hover="solid/arrow-up-blue" width="12px" height="12px">
		</div>
	</div>
	<div id="flightThree" class="collapse">
		<div class="d-flex align-items-center gap-3 mb-3">
			<img class="img-airline" src="{{ asset('assets/images/airline/bamboo_airways.png') }}" alt="Air Asia">
			<div class="text-black text-opacity-9 fw-bold airline-name">Bamboo Airlines</div>
		</div>
		<div class="d-flex align-items-center justify-content-between">
			<div class="departure">
				<div class="flex-grow-1">
					<div class="text-black fw-bold mb-1">17:20</div>
					<div class="code"><span>TYO</span></div>
				</div>
			</div>
			<div>
				<img src="{{ asset('assets/svg/solid/airplane-mode.svg') }}" alt="airplane-mode" width="24px" height="24px">
			</div>
			<div class="arrival">
				<div class="flex-grow-1">
					<div class="text-black fw-bold mb-1">17:20</div>
					<div class="code"><span>SIN</span></div>
				</div>
			</div>
			<div class="duration">+1day</div>
			<div class="time">
				<div class="flex-grow-1">
					<div class="text-black fw-bold mb-1">5h 40m</div>
					<div class="medium">Direct flight</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="d-flex border border-secondary rounded-3 bg-white input-promo my-4" style="--bs-border-opacity: 0.25;">
	<input class="form-control border-0 rounded-3 px-3 cursor-pointer" type="text" name="promo" placeholder="Enter your promo code here!">
	<button class="btn btn-primary rounded-end-3 px-3"><span class="text-nowrap fw-semibold medium">Apply Now</span></button>
</div>
<div class="row">
	<div class="col-12 pb-3">
		<div class="d-flex fw-bold text-primary fs-6">
			<div class="me-auto">
				<span class="fw-bold">Total Amount:</span>
			</div>
			<div class="align-items-end">
				<div class="">4.761.840 VND</div>
			</div>
		</div>
	</div>
	<div class="col-12 pb-3">
		<div class="d-flex align-items-center">
			<div class="me-auto">
				<span class="fw-semibold">VietJet Air (Adult) x1</span>
			</div>
			<div class="align-items-end">
				<div class="medium">2.952.000 VND</div>
			</div>
		</div>
	</div>
	<div class="col-12 pb-3">
		<div class="d-flex align-items-center">
			<div class="me-auto">
				<span class="fw-semibold">Vietravel Airlines (Adult) x1</span>
			</div>
			<div class="align-items-end">
				<div class="medium">812.440 VND</div>
			</div>
		</div>
	</div>
	<div class="col-12">
		<div class="d-flex align-items-center">
			<div class="me-auto">
				<span class="fw-semibold">VietJet Air (Adult) x1 </span>
			</div>
			<div class="align-items-end">
				<div class="medium">997.400 VND</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		var iconDown = "{{ asset('assets/svg/solid/arrow-down-blue.svg') }}";
		var iconUp = "{{ asset('assets/svg/solid/arrow-up-blue.svg') }}";

		$(".toggle-data-flight").click(function(){
			$(this).find("img.icon-direct").attr('src', (_, attr) => attr == iconDown ? iconUp : iconDown);
		});
	});
</script>