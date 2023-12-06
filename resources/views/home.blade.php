@extends('layouts.app')

@section('content')
<section>
	<div class="container">
		<div class="row">
			<div class="col-12 d-lg-block d-none">
				<div class="position-relative pt-5">
					<div class="graphic-ellipse position-absolute start-60"></div>
					<img class="position-absolute end-0" src="{{ asset('assets/images/banner/home-visa.png') }}" alt="banner" width="564px" height="514px">				
				</div>
			</div>
			<div class="col-lg-6 mt-lg-n5">
				<h1 class="web-title text-black text-uppercase">FIND YOUR DESTINATION!</h1>
				<div class="sub-title mt-4 mb-3">Let us apply the paperworks or eVISA for your trip.</div>
			</div>
			<div class="col-lg-7 pe-lg-5">
				<form action="" id="frm-visa-search">
					<div class="row gx-lg-5 gy-4 mt-0">
						<div class="col-sm-6">
							<div class="form-group mb-0">
								<label class="mb-3 text-title">Your Nationality</label>
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
								<label class="mb-3 text-title">Traveling to</label>
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
							<a href="/visa" class="btn btn-primary btn-lg button1 rounded-4 w-100 btn-visa-search">
								<span class="btn-text">Get Started</span><i class="fal fa-long-arrow-up ms-4 my-2" style="transform: rotate(45deg);"></i>
							</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<section class="position-relative z-3 pt-lg-4 pt-0">
	<div class="container">
		<div class="border rounded-4 bg-white px-3 py-4">
			<div class="row gx-lg-5 gy-3 align-items-center">
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
		<div class="row justify-content-center mt-4">
			<div class="col-12 text-center">
				<a href="#" class="btn button1 border rounded-4 bg-white w-sm-auto w-100 py-2 px-5">
					<div class="text-black text-opacity-9">Scroll down to see more</div>
					<img src="{{ asset('assets/svg/outline/direction-double-down.svg') }}" alt="direction-double-down" width="24px" height="24px">
				</a>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<h2 class="web-header1 text-uppercase text-decoration-underline text-black text-opacity-9 fw-800 spacing-n1 mb-2">WHY CHOOSE US?</h2>
		<div class="row gx-lg-8 g-4 mt-0">
			<div class="col-lg-6">
				<div class="card border-0 card-why-choose-us">
					<div class="card-body">
						<div class="d-flex align-items-center gap-4">
							<div class="rounded-circle bg-primary" style="width: fit-content">
								<img class="m-3" src="{{ asset('assets/svg/outline/time-24-white.svg') }}" data-icon-name="outline/trash" alt="trash" width="32px" height="32px">
							</div>
							<h5 class="subheading fw-bold mb-0">Support 24/7</h5>
						</div>
						<span class="d-block bg-orange my-4" style="width:64px; height:8px;"></span>
						<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card border-0 card-why-choose-us">
					<div class="card-body">
						<div class="d-flex align-items-center gap-4">
							<div class="rounded-circle bg-primary" style="width: fit-content">
								<img class="m-3" src="{{ asset('assets/svg/outline/stopwatch-fast-white.svg') }}" data-icon-name="outline/trash" alt="trash" width="32px" height="32px">
							</div>
							<h5 class="subheading fw-bold mb-0">Fast & Simple</h5>
						</div>
						<span class="d-block bg-orange my-4" style="width:64px; height:8px;"></span>
						<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card border-0 card-why-choose-us">
					<div class="card-body">
						<div class="d-flex align-items-center gap-4">
							<div class="rounded-circle bg-primary" style="width: fit-content">
								<img class="m-3" src="{{ asset('assets/svg/outline/alarm-check-white.svg') }}" data-icon-name="outline/trash" alt="trash" width="32px" height="32px">
							</div>
							<h5 class="subheading fw-bold mb-0">Approved On Time</h5>
						</div>
						<span class="d-block bg-orange my-4" style="width:64px; height:8px;"></span>
						<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card border-0 card-why-choose-us">
					<div class="card-body">
						<div class="d-flex align-items-center gap-4">
							<div class="rounded-circle bg-primary" style="width: fit-content">
								<img class="m-3" src="{{ asset('assets/svg/outline/lock-white.svg') }}" data-icon-name="outline/trash" alt="trash" width="32px" height="32px">
							</div>
							<h5 class="subheading fw-bold mb-0">Safe & Private</h5>
						</div>
						<span class="d-block bg-orange my-4" style="width:64px; height:8px;"></span>
						<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center mt-4">
			<div class="col-12 text-center">
				<a href="/visa" class="btn btn-primary btn-lg button1 rounded-4 py-3 px-6 spacing-05 w-sm-auto w-100">
					<span class="btn-text">Get Started</span><i class="fal fa-long-arrow-up ms-4" style="transform: rotate(45deg);"></i>
				</a>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<h2 class="web-header1 text-uppercase text-decoration-underline text-black text-opacity-9 fw-800 spacing-n1 mb-2">WHY CHOOSE US?</h2>
		<div class="row g-sm-5 g-4 mt-0">
			<div class="col-lg-4 col-md-6 col-12">
				<div class="card h-100 border-0">
					<div class="card-body text-center">
						<div class="p-4">
							<h5 class="subheading fw-bold">Fill Out Online Application</h5>
						</div>
						<div class="d-flex align-items-center justify-content-center rounded-circle bg-orange mx-auto mt-2 mb-5" style="width:160px; height:160px">
							<img src="{{ asset('assets/svg/duotone/laptop.svg') }}" alt="check">
						</div>
						<div class="text-start medium px-1 pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<div class="card h-100 border-0">
					<div class="card-body text-center">
						<div class="p-4">
							<h5 class="subheading fw-bold">Get Visa Approved Via Email</h5>
						</div>
						<div class="d-flex align-items-center justify-content-center rounded-circle bg-orange mx-auto mt-2 mb-5" style="width:160px; height:160px">
							<img src="{{ asset('assets/svg/duotone/mail-fast.svg') }}" alt="check">
						</div>
						<div class="text-start medium px-1 pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<div class="card h-100 border-0">
					<div class="card-body text-center">
						<div class="p-4">
							<h5 class="subheading fw-bold">Confident Enter Destination</h5>
						</div>
						<div class="d-flex align-items-center justify-content-center rounded-circle bg-orange mx-auto mt-2 mb-5" style="width:160px; height:160px">
							<img src="{{ asset('assets/svg/duotone/security.svg') }}" alt="check">
						</div>
						<div class="text-start medium px-1 pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center mt-4">
			<div class="col-12 text-center">
				<a href="/visa" class="btn btn-primary btn-lg button1 rounded-4 py-3 px-6 spacing-05 w-sm-auto w-100">
					<span class="btn-text">Get Started</span><i class="fal fa-long-arrow-up ms-4" style="transform: rotate(45deg);"></i>
				</a>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<h2 class="web-header1 text-uppercase text-decoration-underline text-black text-opacity-9 fw-800 spacing-n1 mb-2">TESTIMONIALS</h2>
		<div class="slide-blog position-relative py-4">
			<div class="swiper" data-parent=".slide-blog" data-items="3" data-items-md="2" data-items-sm="1" data-space-between="40" data-prev=".swiper-custom-prev" data-next=".swiper-custom-next">
				<div class="swiper-wrapper align-items-center">
					<div class="swiper-slide" id="rewind-item-1">
						<div class="card border rounded-3 bg-white slide-testimonials">
							<div class="card-body text-start">
								<div class="ratio ratio-1x1">
									<img class="rounded-3" src="{{ asset('assets/images/blog/testimonials-01.png') }}" alt="blog">
								</div>
								<h5 class="headline fw-bold text-black text-opacity-9 my-3">Lorem Ipsum</h5>
								<div class="text-black text-opacity-9 mb-3">Job Title</div>
								<div class="d-flex mb-3">
									<img class="w-auto" src="{{ asset('assets/svg/icon/star.svg') }}" alt="star" width="24px" height="24px">
									<img class="w-auto" src="{{ asset('assets/svg/icon/star.svg') }}" alt="star" width="24px" height="24px">
									<img class="w-auto" src="{{ asset('assets/svg/icon/star.svg') }}" alt="star" width="24px" height="24px">
									<img class="w-auto" src="{{ asset('assets/svg/icon/star.svg') }}" alt="star" width="24px" height="24px">
									<img class="w-auto" src="{{ asset('assets/svg/icon/star.svg') }}" alt="star" width="24px" height="24px">
								</div>
								<div class="description fst-italic">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</div>
								<div class="text-end small-caption fw-normal">dd/mm/yy</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide" id="rewind-item-2">
						<div class="card border rounded-3 bg-white slide-testimonials">
							<div class="card-body text-start">
								<div class="ratio ratio-1x1">
									<img class="rounded-3" src="{{ asset('assets/images/blog/testimonials-02.png') }}" alt="blog">
								</div>
								<h5 class="headline fw-bold text-black text-opacity-9 my-3">Lorem Ipsum</h5>
								<div class="text-black text-opacity-9 mb-3">Job Title</div>
								<div class="d-flex mb-3">
									<img class="w-auto" src="{{ asset('assets/svg/icon/star.svg') }}" alt="star" width="24px" height="24px">
									<img class="w-auto" src="{{ asset('assets/svg/icon/star.svg') }}" alt="star" width="24px" height="24px">
									<img class="w-auto" src="{{ asset('assets/svg/icon/star.svg') }}" alt="star" width="24px" height="24px">
									<img class="w-auto" src="{{ asset('assets/svg/icon/star.svg') }}" alt="star" width="24px" height="24px">
									<img class="w-auto" src="{{ asset('assets/svg/icon/star.svg') }}" alt="star" width="24px" height="24px">
								</div>
								<div class="description fst-italic">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</div>
								<div class="text-end small-caption fw-normal">dd/mm/yy</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide" id="rewind-item-3">
						<div class="card border rounded-3 bg-white slide-testimonials">
							<div class="card-body text-start">
								<div class="ratio ratio-1x1">
									<img class="rounded-3" src="{{ asset('assets/images/blog/testimonials-03.png') }}" alt="blog">
								</div>
								<h5 class="headline fw-bold text-black text-opacity-9 my-3">Lorem Ipsum</h5>
								<div class="text-black text-opacity-9 mb-3">Job Title</div>
								<div class="d-flex mb-3">
									<img class="w-auto" src="{{ asset('assets/svg/icon/star.svg') }}" alt="star" width="24px" height="24px">
									<img class="w-auto" src="{{ asset('assets/svg/icon/star.svg') }}" alt="star" width="24px" height="24px">
									<img class="w-auto" src="{{ asset('assets/svg/icon/star.svg') }}" alt="star" width="24px" height="24px">
									<img class="w-auto" src="{{ asset('assets/svg/icon/star.svg') }}" alt="star" width="24px" height="24px">
									<img class="w-auto" src="{{ asset('assets/svg/icon/star.svg') }}" alt="star" width="24px" height="24px">
								</div>
								<div class="description fst-italic">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</div>
								<div class="text-end small-caption fw-normal">dd/mm/yy</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-control d-lg-block d-none">
				<div class="rounded-circle bg-primary text-white top-50 d-block fs-2 position-absolute d-flex justify-content-center align-items-center mt-n3 swiper-custom-prev">
					<i class="fal fa-angle-left"></i>
				</div>
				<div class="rounded-circle bg-primary text-white top-50 d-block fs-2 position-absolute d-flex justify-content-center align-items-center mt-n3 swiper-custom-next">
					<i class="fal fa-angle-right"></i>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
