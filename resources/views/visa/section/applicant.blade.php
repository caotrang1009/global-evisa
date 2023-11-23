<div class="form-group row gx-3 gx-lg-7 gx-md-5">
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black" for="family_name">Family Name<img class="ms-2" src="{{ asset('assets/svg/icon-info.svg') }}" alt="info"></label>
		<div class="d-flex gap-3 align-items-center justify-content-between border rounded-4 bg-white py-1 px-3 input-visa-search">
			<img src="{{ asset('assets/svg/outline-education.svg') }}" data-icon-name="outline-education" alt="education">
			<input class="form-control border-0 px-0 cursor-pointer" type="text" id="family_name" name="family_name[]" placeholder="Enter Value" required>
		</div>
		<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
	</div>
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black" for="given_name">Given Name<img class="ms-2" src="{{ asset('assets/svg/icon-info.svg') }}" alt="info"></label>
		<div class="d-flex gap-3 align-items-center justify-content-between border rounded-4 bg-white py-1 px-3 input-visa-search">
			<img src="{{ asset('assets/svg/outline-education.svg') }}" data-icon-name="outline-education" alt="date">
			<input class="form-control border-0 px-0 cursor-pointer" type="text" id="given_name" name="given_name[]" placeholder="Enter Value" required>
		</div>
		<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
	</div>
</div>
<div class="form-group row g-3 g-lg-7 g-md-5">
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black" for="gender">Gender</label>
		<div class="dropdown">
			<div class="d-flex gap-3 align-items-center justify-content-between border rounded-4 bg-white py-1 px-3 input-visa-search" data-bs-toggle="dropdown" data-bs-auto-close="outside">
				<img src="{{ asset('assets/svg/outline-gender.svg') }}" data-icon-name="outline-gender" alt="gender">
				<input class="form-control border-0 px-0 cursor-pointer" type="text" id="gender" name="gender[]" placeholder="Please Select" required>
				<img class="cursor-pointer" src="{{ asset('assets/svg/outline-arrow_bottom.svg') }}" data-icon-name="outline-arrow_bottom" alt="arrow_bottom">
			</div>
			<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
			<ul class="dropdown-menu dropdown-select border-secondary rounded-4 shadow w-100" style="--bs-border-opacity: 0.5;">
				<li><a class="dropdown-item cursor-pointer direction-item selected">Mr</a></li>
				<li><a class="dropdown-item cursor-pointer direction-item">Ms</a></li>
				<li><a class="dropdown-item cursor-pointer direction-item">Master</a></li>
				<li><a class="dropdown-item cursor-pointer direction-item">Miss</a></li>
			</ul>
		</div>
	</div>
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black" for="date_of_birth">Day of Birth</label>
		<div class="d-flex gap-3 align-items-center justify-content-between border rounded-4 bg-white py-1 px-3 input-visa-search" data-bs-toggle="dropdown" data-bs-auto-close="outside">
			<img src="{{ asset('assets/svg/outline-date.svg') }}" data-icon-name="outline-date" alt="date">
			<input class="form-control border-0 px-0 cursor-pointer datepicker" type="text" id="date_of_birth" name="date_of_birth[]" placeholder="DD/MM/YY" required>
			<img class="cursor-pointer" src="{{ asset('assets/svg/outline-arrow_bottom.svg') }}" data-icon-name="outline-arrow_bottom" alt="arrow_bottom">
		</div>
		<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
	</div>
</div>
<div class="form-group row g-3 g-lg-7 g-md-5">
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black" for="phone_number">Your Phone Number</label>
		<div class="d-flex gap-2">
			<div style="width: 80px; height: 46px">
				<div class="d-flex align-items-center justify-content-between border rounded-4 bg-white py-1 px-2 h-100 input-visa-search" data-bs-toggle="dropdown" data-bs-auto-close="outside">
					<input class="form-control border-0 px-0 cursor-pointer medium" type="text" id="nationality" name="nationality[]" value="+84" required>
					<img class="cursor-pointer" src="{{ asset('assets/svg/icon-direction-up.svg') }}" alt="arrow_bottom">
				</div>
			</div>
			<div class="w-100">
				<div class="d-flex gap-3 align-items-center justify-content-between border rounded-4 bg-white py-1 px-3 input-visa-search" data-bs-toggle="dropdown" data-bs-auto-close="outside">
					<img src="{{ asset('assets/svg/outline-phone.svg') }}" data-icon-name="outline-phone" alt="phone">
					<input class="form-control border-0 px-0 cursor-pointer" type="text" id="phone_number" name="phone_number[]" placeholder="Enter Value" required>
				</div>
				<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black" for="email">Email Address<img class="ms-2" src="{{ asset('assets/svg/icon-info.svg') }}" alt="info"></label>
		<div class="d-flex gap-3 align-items-center justify-content-between border rounded-4 bg-white py-1 px-3 input-visa-search" data-bs-toggle="dropdown" data-bs-auto-close="outside">
			<img src="{{ asset('assets/svg/outline-education.svg') }}" data-icon-name="outline-education" alt="date">
			<input class="form-control border-0 px-0 cursor-pointer" type="text" id="email" name="email[]" placeholder="Enter Value" required>
		</div>
		<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
	</div>
</div>
<div class="form-group row g-3 g-lg-7 g-md-5">
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black" for="country_of_birth">Country of Birth</label>
		<div class="dropdown">
			<div class="d-flex gap-3 align-items-center justify-content-between border rounded-4 bg-white py-1 px-3 input-visa-search" data-bs-toggle="dropdown" data-bs-auto-close="outside">
				<img src="{{ asset('assets/svg/outline-map.svg') }}" data-icon-name="outline-map" alt="date">
				<input class="form-control border-0 px-0 cursor-pointer" type="text" id="country_of_birth" name="country_of_birth[]" placeholder="Please Select" required>
				<img class="cursor-pointer" src="{{ asset('assets/svg/outline-arrow_bottom.svg') }}" data-icon-name="outline-arrow_bottom" alt="arrow_bottom">
			</div>
			<div class="dropdown-menu rounded-4 p-3 w-100">
				@include('visa.section.countries')
			</div>
		</div>
		<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
	</div>
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black" for="country_of_residency">Country of Residency</label>
		<div class="dropdown">
			<div class="d-flex gap-3 align-items-center justify-content-between border rounded-4 bg-white py-1 px-3 input-visa-search" data-bs-toggle="dropdown" data-bs-auto-close="outside">
				<img src="{{ asset('assets/svg/outline-map.svg') }}" data-icon-name="outline-map" alt="date">
				<input class="form-control border-0 px-0 cursor-pointer" type="text" id="country_of_residency" name="country_of_residency[]" placeholder="Please Select" required>
				<img class="cursor-pointer" src="{{ asset('assets/svg/outline-arrow_bottom.svg') }}" data-icon-name="outline-arrow_bottom" alt="arrow_bottom">
			</div>
			<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
			<div class="dropdown-menu rounded-4 p-3 w-100">
				@include('visa.section.countries')
			</div>
		</div>
	</div>
</div>
<div class="form-group row g-3 g-lg-7 g-md-5">
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black" for="passport_number">Passport Number<img class="ms-2" src="{{ asset('assets/svg/icon-info.svg') }}" alt="info"></label>
		<div class="d-flex gap-3 align-items-center justify-content-between border rounded-4 bg-white py-1 px-3 input-visa-search" data-bs-toggle="dropdown" data-bs-auto-close="outside">
			<img src="{{ asset('assets/svg/outline-education.svg') }}" data-icon-name="outline-education" alt="date">
			<input class="form-control border-0 px-0 cursor-pointer" type="text" id="passport_number" name="passport_number[]" placeholder="Enter Value" required>
		</div>
		<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
	</div>
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black" for="appointment_location">Appointment Location<img class="ms-2" src="{{ asset('assets/svg/icon-info.svg') }}" alt="info"></label>
		<div class="dropdown">
			<div class="d-flex gap-3 align-items-center justify-content-between border rounded-4 bg-white py-1 px-3 input-visa-search" data-bs-toggle="dropdown" data-bs-auto-close="outside">
				<img src="{{ asset('assets/svg/outline-map-location.svg') }}" data-icon-name="outline-map-location" alt="date">
				<input class="form-control border-0 px-0 cursor-pointer" type="text" id="appointment_location" name="appointment_location[]" placeholder="Please Select" required>
				<img class="cursor-pointer" src="{{ asset('assets/svg/outline-arrow_bottom.svg') }}" data-icon-name="outline-arrow_bottom" alt="arrow_bottom">
			</div>
			<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
			<div class="dropdown-menu rounded-4 p-3 w-100">
				@include('visa.section.countries')
			</div>
		</div>
	</div>
</div>
<div class="form-group row g-3 g-lg-7 g-md-5">
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black" for="issue_date">Issue Date<img class="ms-2" src="{{ asset('assets/svg/icon-info.svg') }}" alt="info"></label>
		<div class="d-flex gap-3 align-items-center justify-content-between border rounded-4 bg-white py-1 px-3 input-visa-search" data-bs-toggle="dropdown" data-bs-auto-close="outside">
			<img src="{{ asset('assets/svg/outline-date.svg') }}" data-icon-name="outline-date" alt="date">
			<input class="form-control border-0 px-0 cursor-pointer datepicker" type="text" id="issue_date" name="issue_date" placeholder="DD/MM/YY" required>
			<img class="cursor-pointer" src="{{ asset('assets/svg/outline-arrow_bottom.svg') }}" data-icon-name="outline-arrow_bottom" alt="arrow_bottom">
		</div>
		<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
	</div>
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black" for="expired_date">Expired Date<img class="ms-2" src="{{ asset('assets/svg/icon-info.svg') }}" alt="info"></label>
		<div class="d-flex gap-3 align-items-center justify-content-between border rounded-4 bg-white py-1 px-3 input-visa-search" data-bs-toggle="dropdown" data-bs-auto-close="outside">
			<img src="{{ asset('assets/svg/outline-date.svg') }}" data-icon-name="outline-date" alt="date">
			<input class="form-control border-0 px-0 cursor-pointer datepicker" type="text" id="expired_date" name="expired_date[]" placeholder="DD/MM/YY" required>
			<img class="cursor-pointer" src="{{ asset('assets/svg/outline-arrow_bottom.svg') }}" data-icon-name="outline-arrow_bottom" alt="arrow_bottom">
		</div>
		<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
	</div>
</div>
<div class="form-group row g-3 g-lg-7 g-md-5">
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black" for="photo_of_passport">Photo of Passport Page<img class="ms-2" src="{{ asset('assets/svg/icon-info.svg') }}" alt="info"></label>
		<div class="border rounded-4 bg-upload text-center align-middle cursor-pointer" style="height: 160px; display: table-cell;">
			<img src="{{ asset('assets/svg/outline-multimedia.svg') }}" alt="date">
			<input class="form-control" type="file" name="photo_of_passport[]" id="photo_of_passport" style="visibility: hidden; height:0;">
			<div class="text-decoration-underline medium mt-2">+ Upload File</div>
		</div>
	</div>
	<div class="col-sm-6">
		<label class="h6 fw-semibold text-title text-black" for="portrait_photo">Portrait Photo<img class="ms-2" src="{{ asset('assets/svg/icon-info.svg') }}" alt="info"></label>
		<div class="border rounded-4 bg-upload text-center align-middle cursor-pointer" style="height: 160px; display: table-cell;">
			<img src="{{ asset('assets/svg/outline-multimedia.svg') }}" alt="date">
			<input class="form-control" type="file" name="portrait_photo[]" id="photo_of_passport" style="visibility: hidden; height:0;">
			<div class="text-decoration-underline medium mt-2">+ Upload File</div>
		</div>
	</div>
</div>