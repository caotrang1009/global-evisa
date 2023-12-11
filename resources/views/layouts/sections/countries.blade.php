@php
	$countries = ['belarus', 'brunei', 'cambodia', 'chile', 'denmark', 'finland', 'france', 'germany', 'indonesia', 'italy', 'japan', 'laos', 'malaysia', 'myanmar', 'norway', 'panama', 'philippines', 'russia', 'singapore', 'spain', 'korea', 'sweden', 'thailand', 'united-kingdom', 'vietnam'];
@endphp
<div class="list-nationality text-title text-black">
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
		<div class="slide-input-country position-relative d-flex justify-content-between" style="height: 142px">
			<div class="swiper m-0" data-parent=".slide-input-country" data-items="5" data-space-between="1" data-direction="vertical" data-mouse-wheel-control="true" data-prev=".swiper-custom-prev" data-next=".swiper-custom-next">
				<div class="swiper-wrapper align-items-center">
					@foreach ($countries as $c)
					<a class="swiper-slide d-block text-start" href="{{ url('/visa/country/'.$c) }}">
						<img class="d-inline" src="{{ asset('assets/svg/emojione-flag/'.$c.'.svg') }}" alt="{{ $c }}" style="width: 20px; height: 20px;">
						<span class="ms-2 text-capitalize medium">{{ $c }}</span>
					</a>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>