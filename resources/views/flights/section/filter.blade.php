<div class="filter-options mt-3">
	<div class="border-bottom">
		<div class="accordion">
			<div class="card text-black text-opacity-9">
				<h5 class="card-header px-0 fw-bold" data-bs-toggle="collapse" data-bs-target="#price" aria-expanded="false" aria-controls="#price">
					Prices
				</h5>
				<div id="price" class="collapse show">
					<div class="px-4 pb-3 range content">
						<input type="range" name="price-range" min="0" max="100" value="100" step="1" class="range--progress price-range" style="--min: 0; --max: 100; --val: 100" />
						<label for="price-range text-black">Up to <span class="range__output">000,000,000</span> amount.</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="border-bottom">
		<div class="accordion">
			<div class="card text-black text-opacity-9">
				<h5 class="card-header px-0 fw-bold" data-bs-toggle="collapse" data-bs-target="#airlines" aria-expanded="false" aria-controls="#airlines">
					Airlines
				</h5>
				<div id="airlines" class="collapse show">
					<div class="px-4 pb-3 content">
						<div class="form-check mb-3">
							<input class="form-check-input mt-0 me-2" type="checkbox" name="arlines[]" value="" id="airlines-1">
							<label class="form-check-label" for="airlines-1">
								<img class="me-2 fit-contain" src="{{ asset('assets/images/airline/air_asia.png') }}" alt="Air Asia" height="18px">
								<span class="small">Air Asia</span>
							</label>
						</div>
						<div class="form-check mb-3">
							<input class="form-check-input mt-0 me-2" type="checkbox" name="arlines[]" value="" id="airlines-2">
							<label class="form-check-label" for="airlines-2">
								<img class="me-2 fit-contain" src="{{ asset('assets/images/airline/air_canada.png') }}" alt="Air Asia" height="10px">
								<span class="small">Air Canada</span>
							</label>
						</div>
						<div class="form-check mb-3">
							<input class="form-check-input mt-0 me-2" type="checkbox" name="arlines[]" value="" id="airlines-3">
							<label class="form-check-label" for="airlines-3">
								<img class="me-2 fit-contain" src="{{ asset('assets/images/airline/bamboo_airways.png') }}" alt="Air Asia" height="15px">
								<span class="small">Bamboo Airlines</span>
							</label>
						</div>
						<div class="form-check mb-3">
							<input class="form-check-input mt-0 me-2" type="checkbox" name="arlines[]" value="" id="airlines-4">
							<label class="form-check-label" for="airlines-4">
								<img class="me-2 fit-contain" src="{{ asset('assets/images/airline/japan_airlines.png') }}" alt="Air Asia" height="8px">
								<span class="small">Japan Airlines</span>
							</label>
						</div>
						<div class="form-check mb-3">
							<input class="form-check-input mt-0 me-2" type="checkbox" name="arlines[]" value="" id="airlines-5">
							<label class="form-check-label" for="airlines-5">
								<img class="me-2 fit-contain" src="{{ asset('assets/images/airline/singapore_airlines.png') }}" alt="Air Asia" height="22px">
								<span class="small">Singapore Airlines</span>
							</label>
						</div>
						<div class="form-check mb-3">
							<input class="form-check-input mt-0 me-2" type="checkbox" name="arlines[]" value="" id="airlines-6">
							<label class="form-check-label" for="airlines-6">
								<img class="me-2 fit-contain" src="{{ asset('assets/images/airline/united_airlines.png') }}" alt="Air Asia" height="16px">
								<span class="small">United Airlines</span>
							</label>
						</div>										
						<div class="form-check mb-3">
							<input class="form-check-input mt-0 me-2" type="checkbox" name="arlines[]" value="" id="airlines-7">
							<label class="form-check-label" for="airlines-7">
								<img class="me-2 fit-contain" src="{{ asset('assets/images/airline/vietjet_air.png') }}" alt="Air Asia" height="11px">
								<span class="small">Vietjet Air</span>
							</label>
						</div>
						<div class="form-check mb-0">
							<input class="form-check-input mt-0 me-2" type="checkbox" name="arlines[]" value="" id="airlines-8">
							<label class="form-check-label" for="airlines-8">
								<img class="me-2 fit-contain" src="{{ asset('assets/images/airline/vietnam_airlines.png') }}" alt="Air Asia" height="11px">
								<span class="small">Vietnam Airlines</span>
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="border-bottom">
		<div class="accordion">
			<div class="card text-black text-opacity-9">
				<h5 class="card-header px-0 fw-bold" data-bs-toggle="collapse" data-bs-target="#stops" aria-expanded="false" aria-controls="#stops">
					Number of stops
				</h5>
				<div id="stops" class="collapse show">
					<div class="px-4 pb-3 content">
						<div class="form-check mb-3">
							<input class="form-check-input mt-0 me-2" type="checkbox" name="stops[]" value="" id="stops-1">
							<label class="form-check-label" for="stops-1">Direct</label>
						</div>
						<div class="form-check mb-3">
							<input class="form-check-input mt-0 me-2" type="checkbox" name="stops[]" value="" id="stops-2">
							<label class="form-check-label" for="stops-2">1 stop</label>
						</div>
						<div class="form-check mb-0">
							<input class="form-check-input mt-0 me-2" type="checkbox" name="stops[]" value="" id="stops-3">
							<label class="form-check-label" for="stops-3">2 stops</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="border-bottom">
		<div class="accordion">
			<div class="card text-black text-opacity-9">
				<h5 class="card-header px-0 fw-bold" data-bs-toggle="collapse" data-bs-target="#depart-time" aria-expanded="false" aria-controls="#depart-time">
					Take-off Time
				</h5>
				<div id="depart-time" class="collapse show">
					<div class="px-4 multi-range content">
						<p class="text-label">Depart from:  Lorem Ipsum Dolor Sit Amet  Aonsectetur Adipiscing Elit</p>
						<div class="position-relative w-100 d-inline-block mb-2">
							<div class="slide-track"></div>
							<input type="range" name="depart-time-1" min="0" max="24" value="6" step="1" class="range-1 depart-time-1" style="--min: 0; --max: 24; --val: 6" />
							<input type="range" id="depart-time-2" name="depart-time-2" min="0" max="24" value="20" step="1" class="range-2 depart-time-2" style="--min: 0; --max: 24; --val: 20" />
						</div>
						<label for="depart-time" class="form-label d-flex justify-content-between text-black">
							<div>Between <span class="time-output-1">0</span>:00</div>
							<div>and</div>
							<div><span class="time-output-2">24</span>:00</div>
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="border-bottom">
		<div class="accordion">
			<div class="card text-black text-opacity-9">
				<h5 class="card-header px-0 fw-bold" data-bs-toggle="collapse" data-bs-target="#landing-time" aria-expanded="false" aria-controls="#landing-time">
					Landing Time
				</h5>
				<div id="landing-time" class="collapse show">
					<div class="px-4 multi-range content">
						<p class="text-label">Depart from:  Lorem Ipsum Dolor Sit Amet  Aonsectetur Adipiscing Elit</p>
						<div class="position-relative w-100 d-inline-block mb-2">
							<div class="slide-track"></div>
							<input type="range" name="landing-time-1" min="0" max="24" value="6" step="1" class="range-1 landing-time-1" style="--min: 0; --max: 24; --val: 6" />
							<input type="range" id="landing-time-2" name="landing-time-2" min="0" max="24" value="20" step="1" class="range-2 landing-time-2" style="--min: 0; --max: 24; --val: 20" />
						</div>
						<label for="landing-time" class="form-label d-flex justify-content-between text-black">
							<div>Between <span class="time-output-1">0</span>:00</div>
							<div>and</div>
							<div><span class="time-output-2">24</span>:00</div>
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div class="accordion">
			<div class="card text-black text-opacity-9">
				<h5 class="card-header px-0 fw-bold" data-bs-toggle="collapse" data-bs-target="#duration" aria-expanded="false" aria-controls="#duration">
					Flight Duration 
				</h5>
				<div id="duration" class="collapse show">
					<div class="px-4 range content">
						<input type="range" name="duration-range" min="0" max="48" value="48" step="1" class="range--progress duration-range" style="--min: 0; --max: 48; --val: 48" />
						<label for="duration-range text-black">Under <span class="range__output">48</span> hours.</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>