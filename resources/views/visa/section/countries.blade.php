@php
	$countries = ['belarus', 'brunei', 'cambodia', 'chile', 'denmark', 'finland', 'france', 'germany', 'indonesia', 'italy', 'japan', 'laos', 'malaysia', 'myanmar', 'norway', 'panama', 'philippines', 'russia', 'singapore', 'spain', 'korea', 'sweden', 'thailand', 'united-kingdom', 'vietnam'];
@endphp
<div class="d-flex align-items-center border rounded-4 px-2">
	<img src="{{ asset('assets/svg/solid-search.svg') }}" alt="search">
	<input class="form-control border-0 py-2 me-1" type="text" name="search" placeholder="Enter Input" autocomplete="off" required>
</div>
<div class="list-nationality mt-4 text-title text-black">
	<div class="list-popular mb-4">
		<div class="label-title mb-3 fw-bold">Most Popular</div>
		<div class="country-01 mb-2">
			<a href="{{ url('/visa/country/united-kingdom') }}">
				<img src="{{ asset('assets/svg/emojione-flag/united-kingdom.svg') }}" alt="United Kingdom" width="20px" height="20px">
				<span class="ms-2">United Kingdom</span>
			</a>
		</div>
		<div class="country-02 mb-2">
			<a href="{{ url('/visa/country/france') }}">
				<img src="{{ asset('assets/svg/emojione-flag/france.svg') }}" alt="France" width="20px" height="20px">
				<span class="ms-2">French</span>
			</a>
		</div>
		<div class="country-03 mb-2">
			<a href="{{ url('/visa/country/singapore') }}">
				<img src="{{ asset('assets/svg/emojione-flag/singapore.svg') }}" alt="Singapore" width="20px" height="20px">
				<span class="ms-2">Singapore</span>
			</a>
		</div>
	</div>
	<div class="list-alphabetically">
		<div class="label-title mb-3 fw-bold">Alphabetically </div>
		<div class="slide-input-country position-relative d-flex justify-content-between mb-4" style="height: 142px">
			<div class="swiper m-0" data-parent=".slide-input-country" data-items="5" data-space-between="1" data-direction="vertical" data-prev=".swiper-custom-prev" data-next=".swiper-custom-next" style="width: 85%">
				<div class="swiper-wrapper align-items-center">
					@foreach ($countries as $c)
					<a class="swiper-slide d-block text-start" href="{{ url('/visa/country/'.$c) }}">
						<img class="d-inline" src="{{ asset('assets/svg/emojione-flag/'.$c.'.svg') }}" alt="{{ $c }}" style="width: 20px; height: 20px;">
						<span class="ms-2 text-capitalize fs-6">{{ $c }}</span>
					</a>
					@endforeach
				</div>
			</div>
			<div class="position-relative swiper-control">
				<div class="position-absolute top-0 end-0 swiper-custom-prev">
					<i class="fal fa-chevron-circle-up fs-4 icon-color"></i>
				</div>
				<div class="position-absolute bottom-0 end-0 swiper-custom-next">
					<i class="fal fa-chevron-circle-down fs-4 icon-color"></i>
				</div>
			</div>
		</div>
	</div>
</div>