@extends('layouts.app')

@section('content')

@php
	$country = array();
	switch ($alias) {
		case 'belarus':
			$country = (object)[
				'name' => 'Belarus',
				'flag' => asset('assets/svg/country/belarus.svg'),
				'images'	=> (object)[asset('assets/images/country/belarus-01.png'), asset('assets/images/country/belarus-02.png'), asset('assets/images/country/belarus-03.png')]
			];
			break;
		case 'brunei':
			$country = (object)[
				'name' => 'Brunei',
				'flag' => asset('assets/svg/country/brunei.svg'),
				'images'	=> (object)[asset('assets/images/country/brunei-01.png'), asset('assets/images/country/brunei-02.png'), asset('assets/images/country/brunei-03.png')]
			];
			break;
		case 'cambodia':
			$country = (object)[
				'name' => 'Cambodia',
				'flag' => asset('assets/svg/country/cambodia.svg'),
				'images'	=> (object)[asset('assets/images/country/cambodia-01.png'), asset('assets/images/country/cambodia-02.png'), asset('assets/images/country/cambodia-03.png')]
			];
			break;
		case 'chile':
			$country = (object)[
				'name' => 'Chile',
				'flag' => asset('assets/svg/country/chile.svg'),
				'images'	=> (object)[asset('assets/images/country/chile-01.png'), asset('assets/images/country/chile-02.png'), asset('assets/images/country/chile-03.png')]
			];
			break;
		case 'denmark':
			$country = (object)[
				'name' => 'Denmark',
				'flag' => asset('assets/svg/country/denmark.svg'),
				'images'	=> (object)[asset('assets/images/country/demark-01.png'), asset('assets/images/country/demark-02.png'), asset('assets/images/country/demark-03.png')]
			];
			break;
		case 'finland':
			$country = (object)[
				'name' => 'Finland',
				'flag' => asset('assets/svg/country/finland.svg'),
				'images'	=> (object)[asset('assets/images/country/finland-01.png'), asset('assets/images/country/finland-02.png'), asset('assets/images/country/finland-03.png')]
			];
			break;
		case 'france':
			$country = (object)[
				'name' => 'France',
				'flag' => asset('assets/svg/country/france.svg'),
				'images'	=> (object)[asset('assets/images/country/france-01.png'), asset('assets/images/country/france-02.png'), asset('assets/images/country/france-03.png')]
			];
			break;
		case 'germany':
			$country = (object)[
				'name' => 'Germany',
				'flag' => asset('assets/svg/country/germany.svg'),
				'images'	=> (object)[asset('assets/images/country/germany-01.png'), asset('assets/images/country/germany-02.png'), asset('assets/images/country/germany-03.png')]
			];
			break;
		case 'indonesia':
			$country = (object)[
				'name' => 'Indonesia',
				'flag' => asset('assets/svg/country/indonesia.svg'),
				'images'	=> (object)[asset('assets/images/country/indonesia-01.png'), asset('assets/images/country/indonesia-02.png'), asset('assets/images/country/indonesia-03.png')]
			];
			break;
		case 'italy':
			$country = (object)[
				'name' => 'Italy',
				'flag' => asset('assets/svg/country/italy.svg'),
				'images'	=> (object)[asset('assets/images/country/italy-01.png'), asset('assets/images/country/italy-02.png'), asset('assets/images/country/italy-03.png')]
			];
			break;
		case 'japan':
			$country = (object)[
				'name' => 'Japan',
				'flag' => asset('assets/svg/country/japan.svg'),
				'images'	=> (object)[asset('assets/images/country/japan-01.png'), asset('assets/images/country/japan-02.png'), asset('assets/images/country/japan-03.png')]
			];
			break;
		case 'laos':
			$country = (object)[
				'name' => 'Laos',
				'flag' => asset('assets/svg/country/laos.svg'),
				'images'	=> (object)[asset('assets/images/country/laos-01.png'), asset('assets/images/country/laos-02.png'), asset('assets/images/country/laos-03.png')]
			];
			break;
		case 'malaysia':
			$country = (object)[
				'name' => 'Malaysia',
				'flag' => asset('assets/svg/country/malaysia.svg'),
				'images'	=> (object)[asset('assets/images/country/malaysia-01.png'), asset('assets/images/country/malaysia-02.png'), asset('assets/images/country/malaysia-03.png')]
			];
			break;
		case 'myanmar':
			$country = (object)[
				'name' => 'Myanmar',
				'flag' => asset('assets/svg/country/myanmar.svg'),
				'images'	=> (object)[asset('assets/images/country/myanmar-01.png'), asset('assets/images/country/myanmar-02.png'), asset('assets/images/country/myanmar-03.png')]
			];
			break;
		case 'norway':
			$country = (object)[
				'name' => 'Norway',
				'flag' => asset('assets/svg/country/norway.svg'),
				'images'	=> (object)[asset('assets/images/country/norway-01.png'), asset('assets/images/country/norway-02.png'), asset('assets/images/country/norway-03.png')]
			];
			break;
		case 'panama':
			$country = (object)[
				'name' => 'Panama',
				'flag' => asset('assets/svg/country/panama.svg'),
				'images'	=> (object)[asset('assets/images/country/panama-01.png'), asset('assets/images/country/panama-02.png'), asset('assets/images/country/panama-03.png')]
			];
			break;
		case 'philippines':
			$country = (object)[
				'name' => 'Philippines',
				'flag' => asset('assets/svg/country/philippines.svg'),
				'images'	=> (object)[asset('assets/images/country/philippines-01.png'), asset('assets/images/country/philippines-02.png'), asset('assets/images/country/philippines-03.png')]
			];
			break;
		case 'russia':
			$country = (object)[
				'name' => 'Russia',
				'flag' => asset('assets/svg/country/russia.svg'),
				'images'	=> (object)[asset('assets/images/country/russia-01.png'), asset('assets/images/country/russia-02.png'), asset('assets/images/country/russia-03.png')]
			];
			break;
		case 'singapore':
			$country = (object)[
				'name' => 'Singapore',
				'flag' => asset('assets/svg/country/singapore.svg'),
				'images'	=> (object)[asset('assets/images/country/singapore-01.png'), asset('assets/images/country/singapore-02.png'), asset('assets/images/country/singapore-03.png')]
			];
			break;
		case 'spain':
			$country = (object)[
				'name' => 'Spain',
				'flag' => asset('assets/svg/country/spain.svg'),
				'images'	=> (object)[asset('assets/images/country/spain-01.png'), asset('assets/images/country/spain-02.png'), asset('assets/images/country/spain-03.png')]
			];
			break;
		case 'korea':
			$country = (object)[
				'name' => 'Korea',
				'flag' => asset('assets/svg/country/korea.svg'),
				'images'	=> (object)[asset('assets/images/country/korea-01.png'), asset('assets/images/country/korea-02.png'), asset('assets/images/country/korea-03.png')]
			];
			break;
		case 'sweden':
			$country = (object)[
				'name' => 'Sweden',
				'flag' => asset('assets/svg/country/sweden.svg'),
				'images'	=> (object)[asset('assets/images/country/sweden-01.png'), asset('assets/images/country/sweden-02.png'), asset('assets/images/country/sweden-03.png')]
			];
			break;
		case 'thailand':
			$country = (object)[
				'name' => 'Thailand',
				'flag' => asset('assets/svg/country/thailand.svg'),
				'images'	=> (object)[asset('assets/images/country/thailand-01.png'), asset('assets/images/country/thailand-02.png'), asset('assets/images/country/thailand-03.png')]
			];
			break;
		case 'united-kingdom':
			$country = (object)[
				'name' => 'United Kingdom',
				'flag' => asset('assets/svg/country/united-kingdom.svg'),
				'images'	=> (object)[asset('assets/images/country/united-kingdom-01.png'), asset('assets/images/country/united-kingdom-02.png'), asset('assets/images/country/united-kingdom-03.png')]
			];
			break;
		case 'vietnam':
			$country = (object)[
				'name' => 'Vietnam',
				'flag' => asset('assets/svg/country/vietnam.svg'),
				'images'	=> (object)[asset('assets/images/country/vietnam-01.png'), asset('assets/images/country/vietnam-02.png'), asset('assets/images/country/vietnam-03.png')]
			];
			break;
		
		default:
			# code...
			break;
	}
@endphp

<section>
	<div class="container position-relative">
		<span class="d-block me-3 bg-orange position-absolute d-lg-block d-none" style="width: 80px; height:20px; left: -123px;"></span>
		<div class="row">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb visa-breadcrumb text-title mb-2">
					<li class="breadcrumb-item"><a class="btn btn-outline-primary" href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">
						<a class="btn btn-outline-primary px-5 d-flex align-items-center gap-2" href="{{ url()->current() }}">Country <img class="rounded-circle border border-white fit-cover" src="{{ asset('assets/svg/emojione-flag/'.$alias.'.svg') }}" alt="Belarusian" width="20px" height="20px"></a>
					</li>
					<li class="breadcrumb-item"><a class="btn btn-outline-primary px-5" href="{{ url('visa') }}">Get your global evisa now!</a></li>
				</ol>
			</nav>
			<div class="slide-country position-relative mb-4">
				<div class="swiper" data-parent=".slide-country" data-items="1" data-space-between="1" data-prev=".swiper-custom-prev" data-next=".swiper-custom-next">
					<div class="swiper-wrapper align-items-center">
						@foreach ($country->images as $k => $image)								
						<div class="swiper-slide" id="rewind-item-1">
							<div class="card border-0 slide p-4" style="width: 100%; height: 780px; background: url({{ $image }}) no-repeat; background-position: center left;">
								<div class="card-body p-4">
									<div class="d-flex justify-content-between my-1 mx-2">
										<h1 class="web-header1 text-uppercase fw-800 text-decoration-underline spacing-n1 text-white">Travel to {{ $country->name }}</h1>
										<div class="flag">
											<img src="{{ $country->flag }}" alt="{{ $country->name }}">
										</div>
									</div>
								</div>
								<div class="card-body p-3">
									<div class="position-absolute text-start bottom-0 mb-6 me-6">
										<h1 class="web-title text-uppercase text-white spacing-n064 pb-2">{{ $country->name }} <br> TRAVEL TIPS</h1>
										<div class="mt-4 text-white lg-body spacing-1 fw-light">Welcome to {{ $country->name }}, lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat! </div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					<div class="swiper-pagination mb-3"></div>
				</div>
				<div class="swiper-control">
					<div class="rounded-circle bg-transparent text-white d-block fs-2 position-absolute d-flex justify-content-center align-items-center mt-n3 swiper-custom-prev">
						<i class="fal fa-angle-left"></i>
					</div>
					<div class="rounded-circle bg-transparent text-white d-block fs-2 position-absolute d-flex justify-content-center align-items-center mt-n3 swiper-custom-next">
						<i class="fal fa-angle-right"></i>
					</div>
				</div>
			</div>
			@include('visa.section.apply_form')
			@include('visa.section.documents')
			@include('visa.section.tab_content')
			@include('visa.section.blog')
		</div>
	</div>
</section>
@endsection