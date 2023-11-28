<div class="form-group row mb-3">
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black" for="destination">Destination</label>
		<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3">
			<img src="{{ asset('assets/svg/outline/map.svg') }}" data-icon-name="outline/map" alt="people">
			<input class="form-control border-0 px-0 cursor-pointer" id="destination" name="destination" type="text" value="Lorem Ipsum" placeholder="Please Select" autocomplete="off" >
		</div>
	</div>
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black" for="type_of_visa">Type of Visa</label>
		<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3">
			<img src="{{ asset('assets/svg/outline/map-gps-navigation.svg') }}" data-icon-name="outline/map-gps-navigation" alt="people">
			<input class="form-control border-0 px-0 cursor-pointer" type="text" id="type_of_visa" name="type_of_visa" value="Lorem Ipsum" placeholder="Please Select" autocomplete="off" >
		</div>
	</div>
</div>
<div class="form-group row g-4">
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black" for="day_of_arrival">Day of Arrival</label>
		<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3">
			<img src="{{ asset('assets/svg/outline/date.svg') }}" data-icon-name="outline/date" alt="date">
			<input class="form-control border-0 px-0 cursor-pointer datepicker" type="text" id="day_of_arrival" name="day_of_arrival" value="20/09/2029" placeholder="DD/MM/YY" >
		</div>
	</div>
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black" for="day_of_return">Day of Return</label>
		<div class="d-flex gap-3 align-items-center justify-content-between border rounded-3-5 bg-white py-1 px-3">
			<img src="{{ asset('assets/svg/outline/date.svg') }}" data-icon-name="outline/date" alt="date">
			<input class="form-control border-0 px-0 cursor-pointer datepicker" type="text" id="day_of_return" name="day_of_return" value="21/10/2029" placeholder="DD/MM/YY" >
		</div>
	</div>
</div>