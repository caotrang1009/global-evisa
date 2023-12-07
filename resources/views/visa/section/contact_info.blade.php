<div class="form-group">
	<label class="h6 fw-semibold text-title text-black">Your Full Name</label>
	<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
		<img class="form-icon" src="{{ asset('assets/svg/outline/menu-user.svg') }}" data-icon-name="outline/menu-user" alt="menu-user">
		<input class="form-control border-0 px-0 cursor-pointer" type="text" id="contact_name" name="contact_name" placeholder="Enter Value" required>
	</div>
	<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
</div>
<div class="form-group">
	<label class="h6 fw-semibold text-title text-black">Your Email</label>
	<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
		<img class="form-icon" src="{{ asset('assets/svg/outline/email.svg') }}" data-icon-name="outline/email" alt="email">
		<input class="form-control border-0 px-0 cursor-pointer" type="text" id="contact_email" name="contact_email" placeholder="Enter Value" required>
	</div>
	<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
</div>
<div class="form-group mb-0">
	<label class="h6 fw-semibold text-title text-black">Your Phone Number</label>
	<div class="dropdown">
		<div class="d-flex gap-2 align-items-center justify-content-between border rounded-3 bg-white px-3 input-order-info">
			<img class="form-icon" src="{{ asset('assets/svg/outline/phone.svg') }}" data-icon-name="outline/phone" alt="phone">
			<div class="d-flex align-items-center gap-2 cursor-pointer bg-white input-order-info" data-bs-toggle="dropdown" data-bs-auto-close="outside">
				<span class="medium text-black text-opacity-7 nationality">+84</span>
				<img class="cursor-pointer" src="{{ asset('assets/svg/icon/direction-up.svg') }}" data-icon-name="icon/direction-up" alt="direction-up" style="max-width: none">
				<input class="form-control" type="hidden" id="nationality" name="nationality[]" value="" required>
			</div>
			<div class="dropdown-menu rounded-3-5 p-3 w-100 medium">
				@include('visa.section.countries_telephone')
			</div>
			<input class="form-control border-0 px-0 cursor-pointer" type="text" id="phone_number" name="phone_number[]" placeholder="Enter Value" required>
		</div>
		<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
	</div>
</div>