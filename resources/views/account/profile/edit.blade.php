@extends('layouts.account')

@section('content')
<h2 class="fw-800 custom-h3 text-primary mb-3">Profile information</h2>
<form id="frm-profile" action="" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="change-avatar rounded-4 p-4 mb-3">
		<div class="d-flex align-items-center">
			<div class="flex-shrink-0 avatar avatar-lg me-3">
				<img class="img-fluid rounded-3" src="{{ asset('assets/images/portrait.png') }}">
			</div>
			<div class="flex-grow-1 ms-3">
				<button id="btn-change-avatar" class="btn bg-orange rounded-3 fw-bold text-white text-uppercase fs-6 py-2 px-4 lh-md" type="button"><img class="me-2" src="{{ asset('assets/svg/outline/exchange.svg') }}" alt="exchange" width="14px" height="14px">change avatar</button>
				<div class="medium mt-3">Upload JPG, GIF or PNG image. 300 x 300 is recommended.</div>
			</div>
		</div>
	</div>
	<input type="file" id="userfile" name="userfile" class="invisible" style="height: 0px;" />
	<div class="mb-2">
		<h3 class="fw-800 custom-h3 text-black mb-2">Information</h3>
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label class="h6 fw-semibold text-black">Full Name</label>
					<input class="form-control border rounded-3 px-3 input-info" type="text" id="prf_fullname" name="prf_fullname" value="Lorem Ipsum">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label class="h6 fw-semibold text-black">Nationality</label>
					<div class="dropdown input-end-icon">
						<input class="form-control border rounded-3 px-3 input-info" type="text" id="prf_nationality" name="prf_nationality" placeholder="Please Select" data-icon-name="outline/arrow-bottom" data-bs-toggle="dropdown" data-bs-auto-close="outside" required>
						<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" data-icon-name="outline/arrow-bottom" alt="arrow-bottom">
						<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
						<div class="dropdown-menu rounded-3-5 p-3 w-100 medium">
							@include('visa.section.countries')
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label class="h6 fw-semibold text-black">Email Address</label>
					<input class="form-control border-0 text-secondary fw-light bg-secondary bg-opacity-10" type="text" id="prf_email" name="prf_email" value="loremipsum@gmail.com" disabled>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label class="h6 fw-semibold text-black">Phone Number</label>
					<input class="form-control border rounded-3 telinput input-info" type="text" id="prf_phone" name="prf_phone" value="0766 876 971" required>
				</div>
			</div>
		</div>
	</div>
	<div class="mb-2">
		<h3 class="fw-800 custom-h3 text-black mb-2">CHANGE PASSWORD</h3>
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label class="h6 fw-semibold text-black" for="new_password">New Pasword</label>
					<input class="form-control border rounded-3 px-3 input-info" type="password" id="new_password" name="new_password" value="abcdefssss">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label class="h6 fw-semibold text-black" for="new_password_confirmation">Confirm Password</label>
					<input class="form-control border rounded-3 px-3 input-info" type="password" id="new_password_confirmation" name="new_password_confirmation" value="abcdefssss">
				</div>
			</div>
		</div>
	</div>
	<div class="text-end">
		<button class="btn btn-primary rounded-3 fw-bold text-white text-uppercase fs-6 py-2 px-4 lh-md" type="button" id="btn-update">update profile</button>
	</div>
</form>

<script>
	$(document).ready(function() {	
		$('#btn-change-avatar').click(function(){
			$('#userfile').click();
		});

		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('#user-avatar').attr('src', e.target.result);
				};
				reader.readAsDataURL(input.files[0]);
			}
		}

		$("#userfile").change(function() {
			readURL(this);
		});
	});
</script>
@endsection