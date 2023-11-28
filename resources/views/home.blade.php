@extends('layouts.app')

@section('content')
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h1 class="web-title text-black">FIND YOUR DESTINATION!</h1>
				<div class="sub-title mt-4 mb-3">Let us apply the paperworks or eVISA for your trip.</div>
				<form action="" id="frm-visa-search">
					<div class="row gx-5 gy-4 mt-0">
						<div class="col-sm-6">
							<div class="form-group mb-0">
								<label for="nationality" class="mb-3 text-title">Your Nationality</label>
								<div class="dropdown">
									<div class="d-flex gap-3 align-items-center justify-content-between border rounded-4 py-1 px-4 input-visa-search" data-bs-toggle="dropdown" data-bs-auto-close="outside">
										<img src="{{ asset('assets/svg/outline/people.svg') }}" alt="people">
										<input class="form-control px-0 py-2 cursor-pointer" type="text" name="nationality" placeholder="Please Select" autocomplete="off" >
										<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" alt="arrow-bottom">
									</div>
									<div class="dropdown-menu rounded-4 p-3 w-100 medium">
										@include('visa.section.countries')
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group mb-0">
								<label for="nationality_to" class="mb-3 text-title">Traveling to</label>
								<div class="dropdown">
									<div class="d-flex gap-3 align-items-center justify-content-between border rounded-4 py-1 px-4 input-visa-search" data-bs-toggle="dropdown" data-bs-auto-close="outside">
										<img src="{{ asset('assets/svg/outline/map.svg') }}" alt="people">
										<input class="form-control px-0 py-2 cursor-pointer" type="text" name="nationality_to" placeholder="Please Select" >
										<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" alt="people">
									</div>
									<div class="dropdown-menu rounded-4 p-3 w-100 medium">
										@include('visa.section.countries')
									</div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<a href="{{ url('/visa') }}" class="btn btn-primary btn-lg button1 rounded-4 w-100 btn-visa-search">
								<span class="btn-text">Get Started</span><i class="fal fa-long-arrow-up ms-4 my-2" style="transform: rotate(45deg);"></i>
							</a>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-6">
				<div class="position-relative pt-5">
					<div class="graphic-ellipse position-absolute end-7"></div>
					<img class="position-absolute end-0" src="{{ asset('assets/images/banner/home-visa.png') }}" alt="banner" width="564px" height="514px">				
				</div>
			</div>
		</div>
	</div>
</section>
<section class="position-relative z-3 pt-4">
	<div class="container">
		<div class="border rounded-4 bg-white px-3 py-4">
			<div class="row">
				<div class="col-sm-3">
					<div class="d-flex align-items-center gap-2">
						<img src="{{ asset('assets/svg/solid/user.svg') }}" alt="user" width="24px" height="24px">
						<span class="text-uppercase fw-bold spacing-05">a12</span>
						<span class="text-black medium">Lorem Ipsum Dolor</span>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="d-flex align-items-center gap-2">
						<img src="{{ asset('assets/svg/solid/alarm-check.svg') }}" alt="user" width="24px" height="24px">
						<span class="text-uppercase fw-bold spacing-05">b12</span>
						<span class="text-black medium">Lorem Ipsum Dolor</span>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="d-flex align-items-center gap-2">
						<img src="{{ asset('assets/svg/solid/calendar-check.svg') }}" alt="user" width="24px" height="24px">
						<span class="text-uppercase fw-bold spacing-05">a2</span>
						<span class="text-black medium">Lorem Ipsum Dolor</span>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="d-flex align-items-center gap-2">
						<img src="{{ asset('assets/svg/solid/image-tick.svg') }}" alt="user" width="24px" height="24px">
						<span class="text-uppercase fw-bold spacing-05">ab12</span>
						<span class="text-black medium">Lorem Ipsum Dolor</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function () {
		$('.btn-test').on('click', function(){
			$('#append_here').append('<span class="fs-3 text-primary">It is work</span>');
		})
	});
</script>
@endsection
