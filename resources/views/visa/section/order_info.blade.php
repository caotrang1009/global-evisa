<div class="form-group row gx-4 gy-3">
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black">Destination</label>
		<div class="dropdown input-end-icon">
			<input class="form-control border rounded-3 px-3 input-info" type="text" id="destination" name="destination" placeholder="Please Select" data-icon-name="outline/arrow-bottom" data-bs-toggle="dropdown" data-bs-auto-close="outside" required>
			<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" data-icon-name="outline/arrow-bottom" alt="arrow-bottom">
			<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
			<div class="dropdown-menu rounded-3-5 p-3 w-100 medium">
				@include('visa.section.countries')
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black">Type of Visa</label>
		<div class="dropdown input-end-icon">
			<input class="form-control border rounded-3 px-3 input-info" type="text" id="type_of_visa" name="type_of_visa" placeholder="Please Select" data-icon-name="outline/arrow-bottom" data-bs-toggle="dropdown" data-bs-auto-close="outside" required>
			<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" data-icon-name="outline/arrow-bottom" alt="arrow-bottom">
			<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
			<div class="dropdown-menu rounded-3-5 p-3 w-100 medium">
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
</div>
<div class="form-group row gx-4 gy-3">
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black">Day of Arrival</label>
		<div class="input-start-icon">
			<img class="form-icon" src="{{ asset('assets/svg/outline/date.svg') }}" data-icon-name="outline/date" alt="date">
			<input class="form-control border rounded-3 px-3 datepicker input-info" type="text" id="day_of_arrival" name="day_of_arrival" placeholder="DD/MM/YY" required>
			<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
		</div>
	</div>
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black">Day of Return</label>
		<div class="input-start-icon">
			<img class="form-icon" src="{{ asset('assets/svg/outline/date.svg') }}" data-icon-name="outline/date" alt="date">
			<input class="form-control border rounded-3 px-3 datepicker input-info" type="text" id="day_of_return" name="day_of_return" placeholder="DD/MM/YY" required>
			<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
		</div>
	</div>
</div>