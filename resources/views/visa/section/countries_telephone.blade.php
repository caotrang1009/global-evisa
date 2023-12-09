@php
	$countries = [
		'belarus' => (object)[
			'name' => 'Belarus',
			'dial_code' => '375'
		],
		'brunei' => (object)[
			'name' => 'Brunei',
			'dial_code' => '673'
		],
		'cambodia' => (object)[
			'name' => 'Cambodia',
			'dial_code' => '855'
		],
		'chile' => (object)[
			'name' => 'Chile',
			'dial_code' => '56'
		],
		'denmark' => (object)[
			'name' => 'Denmark',
			'dial_code' => '45'
		],
		'finland' => (object)[
			'name' => 'Finland',
			'dial_code' => '358'
		],
		'france' => (object)[
			'name' => 'France',
			'dial_code' => '33'
		],
		'germany' => (object)[
			'name' => 'Germany',
			'dial_code' => '49'
		],
		'indonesia' => (object)[
			'name' => 'Indonesia',
			'dial_code' => '62'
		],
		'italy' => (object)[
			'name' => 'Italy',
			'dial_code' => '39'
		],
		'japan' => (object)[
			'name' => 'Japan',
			'dial_code' => '81'
		],
		'laos' => (object)[
			'name' => 'Laos',
			'dial_code' => '856'
		],
		'malaysia' => (object)[
			'name' => 'Malaysia',
			'dial_code' => '60'
		],
		'myanmar' => (object)[
			'name' => 'Myanmar',
			'dial_code' => '95'
		],
		'norway' => (object)[
			'name' => 'Norway',
			'dial_code' => '47'
		],
		'panama' => (object)[
			'name' => 'Panama',
			'dial_code' => '507'
		],
		'philippines' => (object)[
			'name' => 'Philippines',
			'dial_code' => '63'
		],
		'russia' => (object)[
			'name' => 'Russia',
			'dial_code' => '07'
		],
		'singapore' => (object)[
			'name' => 'Singapore',
			'dial_code' => '65'
		],
		'spain' => (object)[
			'name' => 'Spain',
			'dial_code' => '34'
		],
		'korea' => (object)[
			'name' => 'South Korea',
			'dial_code' => '82'
		],
		'sweden' => (object)[
			'name' => 'Sweden',
			'dial_code' => '46'
		],
		'thailand' => (object)[
			'name' => 'Thailand',
			'dial_code' => '66'
		],
		'united-kingdom' => (object)[
			'name' => 'United Kingdom',
			'dial_code' => '44'
		],
		'vietnam' => (object)[
			'name' => 'Vietnam',
			'dial_code' => '84'
		]
	];
@endphp
<div class="d-flex align-items-center border rounded-3-5 px-2">
	<img src="{{ asset('assets/svg/solid/search.svg') }}" alt="search">
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
			<div class="swiper m-0" data-parent=".slide-input-country" data-items="5" data-space-between="1" data-direction="vertical" data-prev=".swiper-custom-prev" data-next=".swiper-custom-next" style="width: 88%">
				<div class="swiper-wrapper align-items-center">
					@foreach ($countries as $i => $c)
					<a class="swiper-slide d-block text-start" href="{{ url('/visa/country/'.$i) }}">
						<img class="d-inline" src="{{ asset('assets/svg/emojione-flag/'.$i.'.svg') }}" alt="{{ $i }}" style="width: 20px; height: 20px;">
						<span class="ms-2 text-capitalize medium">{{ $c->name.' - +'.$c->dial_code }}</span>
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