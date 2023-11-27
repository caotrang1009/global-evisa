<div class="form-group mb-3">
	<label class="h6 fw-semibold text-title text-black" for="destination">Destination</label>
	<div class="dropdown">
		<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3 input-order-info" data-bs-toggle="dropdown" data-bs-auto-close="outside">
			<img src="{{ asset('assets/svg/outline/map.svg') }}" data-icon-name="outline/map" alt="people">
			<input class="form-control border-0 px-0 cursor-pointer" id="destination" name="destination" type="text" placeholder="Please Select" autocomplete="off" required>
			<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" data-icon-name="outline/arrow-bottom" alt="arrow-bottom">
		</div>
		<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
		<div class="dropdown-menu rounded-3-5 p-3 w-100 medium">
			@include('visa.section.countries')
		</div>
	</div>
</div>
<div class="form-group mb-3">
	<label class="h6 fw-semibold text-title text-black" for="type_of_visa">Type of Visa</label>
	<div class="dropdown">
		<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3 input-order-info" data-bs-toggle="dropdown" data-bs-auto-close="outside">
			<img src="{{ asset('assets/svg/outline/map-gps-navigation.svg') }}" data-icon-name="outline/map-gps-navigation" alt="people">
			<input class="form-control border-0 px-0 cursor-pointer" type="text" id="type_of_visa" name="type_of_visa" placeholder="Please Select" autocomplete="off" required>
			<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" data-icon-name="outline/arrow-bottom" alt="arrow-bottom">
		</div>
		<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
		<div class="dropdown-menu rounded-3-5 p-3 w-100">
			<div class="d-flex align-items-center border rounded-3-5 px-2">
				<img src="{{ asset('assets/svg/solid/search.svg') }}" alt="search">
				<input class="form-control border-0 py-2 me-1" type="text" name="search" placeholder="Enter Input" autocomplete="off" required>
			</div>
			<div class="list-purpose mt-4">
				<div class="list-popular mb-4">
					<div class="label-title mb-2 fw-bold">Most Popular</div>
					<ul class="list-unstyled">
						<li><a class="cursor-pointer">Tourist</a></li>
						<li><a class="cursor-pointer">Business</a></li>
						<li><a class="cursor-pointer">Study</a></li>
					</ul>
				</div>
				<div class="list-alphabetically">
					<div class="label-title mb-2 fw-bold">Alphabetically</div>
					<ul class="list-unstyled">
						<li><a class="cursor-pointer">Business</a></li>
						<li><a class="cursor-pointer">Non-immigrant</a></li>
						<li><a class="cursor-pointer">Tourist</a></li>
						<li><a class="cursor-pointer">Transit</a></li>
						<li><a class="cursor-pointer">Study</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="form-group row g-4">
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black" for="day_of_arrival">Day of Arrival</label>
		<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3 input-order-info">
			<img src="{{ asset('assets/svg/outline/date.svg') }}" data-icon-name="outline/date" alt="date">
			<input class="form-control border-0 px-0 cursor-pointer datepicker" type="text" id="day_of_arrival" name="day_of_arrival" placeholder="DD/MM/YY" required>
			<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" data-icon-name="outline/arrow-bottom" alt="arrow-bottom">
		</div>
		<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
	</div>
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black" for="day_of_return">Day of Return</label>
		<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3 input-order-info">
			<img src="{{ asset('assets/svg/outline/date.svg') }}" data-icon-name="outline/date" alt="date">
			<input class="form-control border-0 px-0 cursor-pointer datepicker" type="text" id="day_of_return" name="day_of_return" placeholder="DD/MM/YY" required>
			<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" data-icon-name="outline/arrow-bottom" alt="arrow-bottom">
		</div>
		<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
	</div>
</div>