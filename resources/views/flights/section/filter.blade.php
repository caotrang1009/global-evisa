<div class="col-sm-4">
	<div class="border rounded-4 p-4">
		<div class="d-flex justify-content-between align-items-center">
			<div class="reset text-decoration-underline small">Reset</div>
			<h2 class="fw-bold">Filter</h2>
			<div class="close"><i class="fas fa-times-circle text-orange fs-3"></i></div>
		</div>
		<div class="filter-options mt-5">
			<div class="prices border-bottom">
				<div class="accordion">
					<div class="card">
						<h5 class="card-header px-0 fw-bold" data-bs-toggle="collapse" data-bs-target="#price" aria-expanded="false" aria-controls="#price">
							Prices
						</h5>
						<div id="price" class="collapse show">
							<div class="px-4 pb-3">
								<input type="range" class="form-range custom-range" min="0" max="100" step="1" id="price-range">
								<label for="price-range">Up to 000,000,000 amount.</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="arline border-bottom">
				<div class="accordion">
					<div class="card">
						<h5 class="card-header px-0 fw-bold" data-bs-toggle="collapse" data-bs-target="#airlines" aria-expanded="false" aria-controls="#airlines">
							Airlines
						</h5>
						<div id="airlines" class="collapse show">
							<div class="px-4 pb-3">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="arlines[]" value="" id="airlines-1">
									<label class="form-check-label" for="airlines-1"><img class="me-2" src="{{ asset('assets/images/airline/Air_Asia.png') }}" alt="Air Asia"> Air Asia</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="arlines[]" value="" id="airlines-2">
									<label class="form-check-label" for="airlines-2"><img class="me-2" src="{{ asset('assets/images/airline/Air_Canada.png') }}" alt="Air Asia">Air Canada</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="arlines[]" value="" id="airlines-3">
									<label class="form-check-label" for="airlines-3"><img class="me-2" src="{{ asset('assets/images/airline/Bamboo_Airways.png') }}" alt="Air Asia">Bamboo Airlines</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="arlines[]" value="" id="airlines-4">
									<label class="form-check-label" for="airlines-4"><img class="me-2" src="{{ asset('assets/images/airline/Japan_Airlines.png') }}" alt="Air Asia">Japan Airlines</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="arlines[]" value="" id="airlines-5">
									<label class="form-check-label" for="airlines-5"><img class="me-2" src="{{ asset('assets/images/airline/Singapore_Airlines.png') }}" alt="Air Asia">Singapore Airlines</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="arlines[]" value="" id="airlines-6">
									<label class="form-check-label" for="airlines-6"><img class="me-2" src="{{ asset('assets/images/airline/Air_Asia.png') }}" alt="Air Asia">United Airlines</label>
								</div>										
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="arlines[]" value="" id="airlines-7">
									<label class="form-check-label" for="airlines-7"><img class="me-2" src="{{ asset('assets/images/airline/VietJet_Air.png') }}" alt="Air Asia">Vietjet Air</label>
								</div>
								<div class="form-check mb-0">
									<input class="form-check-input" type="checkbox" name="arlines[]" value="" id="airlines-8">
									<label class="form-check-label" for="airlines-8"><img class="me-2" src="{{ asset('assets/images/airline/Vietnam_Airlines.png') }}" alt="Air Asia">Vietnam Airlines</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="stops border-bottom">
				<div class="accordion">
					<div class="card">
						<h5 class="card-header px-0 fw-bold" data-bs-toggle="collapse" data-bs-target="#stops" aria-expanded="false" aria-controls="#stops">
							Number of stops
						</h5>
						<div id="stops" class="collapse show">
							<div class="px-4 pb-3">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="stops[]" value="" id="stops-1">
									<label class="form-check-label" for="stops-1">Direct</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="stops[]" value="" id="stops-2">
									<label class="form-check-label" for="stops-2">1 stop</label>
								</div>
								<div class="form-check mb-0">
									<input class="form-check-input" type="checkbox" name="stops[]" value="" id="stops-3">
									<label class="form-check-label" for="stops-3">2 stops</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="depart-time border-bottom">
				<div class="accordion">
					<div class="card">
						<h5 class="card-header px-0 fw-bold" data-bs-toggle="collapse" data-bs-target="#price" aria-expanded="false" aria-controls="#price">
							Take-off Time
						</h5>
						<div id="price" class="collapse show">
							<div class="px-4 pb-3">
								<p>Depart from:  Lorem Ipsum Dolor Sit Amet  Aonsectetur Adipiscing Elit</p>
								<input type="range" class="form-range" min="0" max="24" step="1" id="depart-time">
								<label for="depart-time" class="form-label d-flex justify-content-between">
									<span>Between 0:00</span>
									<span>and</span>
									<span>24:00</span>
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="landing-time border-bottom">
				<div class="accordion">
					<div class="card">
						<h5 class="card-header px-0 fw-bold" data-bs-toggle="collapse" data-bs-target="#price" aria-expanded="false" aria-controls="#price">
							Landing Time
						</h5>
						<div id="price" class="collapse show">
							<div class="px-4 pb-3">
								<p>Depart from:  Lorem Ipsum Dolor Sit Amet  Aonsectetur Adipiscing Elit</p>
								<input type="range" class="form-range" min="0" max="24" step="1" id="landing-time">
								<label for="landing-time" class="form-label d-flex justify-content-between">
									<span>Between 0:00</span>
									<span>and</span>
									<span>24:00</span>
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="duration">
				<div class="accordion">
					<div class="card">
						<h5 class="card-header px-0 fw-bold" data-bs-toggle="collapse" data-bs-target="#duration" aria-expanded="false" aria-controls="#duration">
							Flight Duration 
						</h5>
						<div id="duration" class="collapse show">
							<div class="px-4">
								<input type="range" class="form-range" min="0" max="48" step="1" id="duration-range">
								<label for="duration-range">Under 48 hours</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>