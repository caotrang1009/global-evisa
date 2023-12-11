@extends('layouts.app')

@section('content')
<section class="pb-0">
	<div class="container">
		<h1 class="web-title text-black text-uppercase">ABOUT US</h1>
		<div class="row align-items-center mt-4">
			<div class="col-lg-6 col-12">
				<h2 class="web-header1 text-uppercase fw-800 text-decoration-underline">ELEVATING TRAVEL WITH  EXPERTISE.</h2>
				<div class="mt-3 fs-5">"We are dedicated to offer deliver truly unique and customized experiences that elevate the travel experience."</div>
			</div>
			<div class="col-lg-6">
				<img class="fit-contain" src="{{ asset('assets/images/banner/about.png') }}" alt="banner" width="490px" height="530px">
			</div>
		</div>
	</div>
</section>
<section class="pb-0">
	<div class="container">
		<h2 class="web-header1 text-uppercase text-decoration-underline text-black text-opacity-9 fw-800 mb-2">OUR DESIRABLE WORK</h2>
		<div class="row justify-content-center g-4-3 mt-0">
			<div class="col-lg-4 col-md-6 col-12">
				<div class="card h-100 border-0 rounded-4 how-it-works-card">
					<div class="card-body">
						<div class="px-4 py-3">
							<h5 class="subheading fw-bold text-center">eVisa Services</h5>
						</div>
						<div class="d-flex align-items-center justify-content-center rounded-circle bg-orange mx-auto mt-2 mb-4-5 how-it-works-icon">
							<img src="{{ asset('assets/svg/icon/evisa.svg') }}" alt="evisa" width="88px" height="88px">
						</div>
						<div class="medium px-1 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<div class="card h-100 border-0 rounded-4 how-it-works-card">
					<div class="card-body">
						<div class="px-4 py-3">
							<h5 class="subheading fw-bold text-center">Flight Booking Services</h5>
						</div>
						<div class="d-flex align-items-center justify-content-center rounded-circle bg-orange mx-auto mt-2 mb-4-5 how-it-works-icon">
							<img src="{{ asset('assets/svg/icon/air-plane.svg') }}" alt="evisa" width="66px" height="74px">
						</div>
						<div class="medium px-1 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<div class="card h-100 border-0 rounded-4 how-it-works-card">
					<div class="card-body">
						<div class="px-4 py-3">
							<h5 class="subheading fw-bold text-center">Hotel Booking Services</h5>
						</div>
						<div class="d-flex align-items-center justify-content-center rounded-circle bg-orange mx-auto mt-2 mb-4-5 how-it-works-icon">
							<img src="{{ asset('assets/svg/icon/home-location.svg') }}" alt="evisa" width="66px" height="74px">
						</div>
						<div class="medium px-1 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<div class="card h-100 border-0 rounded-4 how-it-works-card">
					<div class="card-body">
						<div class="px-4 py-3">
							<h5 class="subheading fw-bold text-center">Airport Services</h5>
						</div>
						<div class="d-flex align-items-center justify-content-center rounded-circle bg-orange mx-auto mt-2 mb-4-5 how-it-works-icon">
							<img src="{{ asset('assets/svg/icon/airport-service.svg') }}" alt="evisa" width="80px" height="80px">
						</div>
						<div class="medium px-1 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<div class="card h-100 border-0 rounded-4 how-it-works-card">
					<div class="card-body">
						<div class="px-4 py-3">
							<h5 class="subheading fw-bold text-center">Insurance Services</h5>
						</div>
						<div class="d-flex align-items-center justify-content-center rounded-circle bg-orange mx-auto mt-2 mb-4-5 how-it-works-icon">
							<img src="{{ asset('assets/svg/icon/security.svg') }}" alt="evisa" width="88px" height="88px">
						</div>
						<div class="medium px-1 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="pb-0">
	<div class="container">
		<h2 class="web-header1 text-uppercase text-decoration-underline text-black text-opacity-9 fw-800 mb-2">WHY CHOOSE US? </h2>
		<div class="row gx-5 gy-4 mt-0">
			<div class="col-lg-6 col-12">
				<div class="card h-100 border-0 rounded-4 why-choose-us-card">
					<div class="card-body">
						<div class="row align-items-center gy-4">
							<div class="col-sm-3">
								<div class="d-flex align-items-center justify-content-center rounded-circle border border-2 border-orange mx-auto why-choose-us-icon">
									<img src="{{ asset('assets/svg/icon/user-blue.svg') }}" alt="evisa" width="42px" height="50px">
								</div>
							</div>
							<div class="col-sm-9">
								<h5 class="fw-bold text-uppercase">Professional</h5>
								<div class="mb-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
								<span class="d-block bg-orange" style="width: 64px; height:8px;"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-12">
				<div class="card h-100 border-0 rounded-4 why-choose-us-card">
					<div class="card-body">
						<div class="row align-items-center gy-4">
							<div class="col-sm-3">
								<div class="d-flex align-items-center justify-content-center rounded-circle border border-2 border-orange mx-auto why-choose-us-icon">
									<img src="{{ asset('assets/svg/icon/diverse-blue.svg') }}" alt="evisa" width="42px" height="50px">
								</div>
							</div>
							<div class="col-sm-9">
								<h5 class="fw-bold text-uppercase">Diverse</h5>
								<div class="mb-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
								<span class="d-block bg-orange" style="width: 64px; height:8px;"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-12">
				<div class="card h-100 border-0 rounded-4 why-choose-us-card">
					<div class="card-body">
						<div class="row align-items-center gy-4">
							<div class="col-sm-3">
								<div class="d-flex align-items-center justify-content-center rounded-circle border border-2 border-orange mx-auto why-choose-us-icon">
									<img src="{{ asset('assets/svg/icon/security-blue.svg') }}" alt="evisa" width="48px" height="50px">
								</div>
							</div>
							<div class="col-sm-9">
								<h5 class="fw-bold text-uppercase">Reliable</h5>
								<div class="mb-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
								<span class="d-block bg-orange" style="width: 64px; height:8px;"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-12">
				<div class="card h-100 border-0 rounded-4 why-choose-us-card">
					<div class="card-body">
						<div class="row align-items-center gy-4">
							<div class="col-sm-3">
								<div class="d-flex align-items-center justify-content-center rounded-circle border border-2 border-orange mx-auto why-choose-us-icon">
									<img src="{{ asset('assets/svg/icon/lock-blue.svg') }}" alt="evisa" width="42px" height="50px">
								</div>
							</div>
							<div class="col-sm-9">
								<h5 class="fw-bold text-uppercase">Safe</h5>
								<div class="mb-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
								<span class="d-block bg-orange" style="width: 64px; height:8px;"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center mt-4">
			<a href="#" class="btn btn-orange btn-lg button1 rounded-3 spacing-05 px-6 py-3 mt-3 w-sm-auto w-100">
				<span class="btn-text">GET STARTED</span><i class="fal fa-long-arrow-up ms-3" style="transform: rotate(45deg);"></i>
			</a>
		</div>
	</div>
</section>
@endsection
