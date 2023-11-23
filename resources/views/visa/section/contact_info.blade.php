<div class="form-group mb-3">
	<label class="h6 fw-semibold text-title text-black" for="contact_name">Your Full Name</label>
	<div class="d-flex gap-3 align-items-center justify-content-between border rounded-4 bg-white py-1 px-3 input-visa-search">
		<img src="{{ asset('assets/svg/outline-menu-user.svg') }}" data-icon-name="outline-menu-user" alt="outline-menu-user">
		<input class="form-control border-0 px-0 cursor-pointer" type="text" id="contact_name" name="contact_name" placeholder="Enter Value" required>
	</div>
	<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
</div>
<div class="form-group mb-3">
	<label class="h6 fw-semibold text-title text-black" for="contact_email">Your Email</label>
	<div class="d-flex gap-3 align-items-center justify-content-between border rounded-4 bg-white py-1 px-3 input-visa-search">
		<img src="{{ asset('assets/svg/outline-email.svg') }}" data-icon-name="outline-email" alt="outline-email">
		<input class="form-control border-0 px-0 cursor-pointer" type="text" id="contact_email" name="contact_email" placeholder="Enter Value" required>
	</div>
	<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
</div>
<div class="form-group">
	<label class="h6 fw-semibold text-title text-black" for="contact_phone">Your Phone Number</label>
	<div class="d-flex gap-2">
		<div style="width: 80px; height: 46px">
			<div class="d-flex align-items-center justify-content-between border rounded-4 bg-white py-1 px-2 h-100 input-visa-search" data-bs-toggle="dropdown" data-bs-auto-close="outside">
				<input class="form-control border-0 px-0 cursor-pointer medium" type="text" id="contact_nationality" name="contact_nationality" value="+84" required>
				<img class="cursor-pointer" src="{{ asset('assets/svg/icon-direction-up.svg') }}" alt="arrow_bottom">
			</div>
		</div>
		<div class="w-100">
			<div class="d-flex gap-3 align-items-center justify-content-between border rounded-4 bg-white py-1 px-3 input-visa-search" data-bs-toggle="dropdown" data-bs-auto-close="outside">
				<img src="{{ asset('assets/svg/outline-phone.svg') }}" data-icon-name="outline-phone" alt="phone">
				<input class="form-control border-0 px-0 cursor-pointer" type="text" id="contact_phone" name="contact_phone" placeholder="Enter Value" required>
			</div>
			<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
		</div>
	</div>
</div>