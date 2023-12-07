<div class="border rounded-4 mb-4 medium">
	<div class="position-relative">
		<span class="position-absolute top-50 d-block me-3 bg-orange d-lg-block d-none" style="width: 60px; height:8px;"></span>
		<h2 class="custom-h1 fw-800 text-uppercase text-black text-opacity-9 text-center mb-0 spacing-n1 p-4 px-5">Your Flights</h2>
	</div>
	<div class="p-4 pt-0">
		<div class="mb-3" id="accordionFlightOne">
			<div class="card border border-primary rounded-4">
				<div class="card-body">
					<div class="d-flex gap-3 align-items-start cursor-pointer collapsed" data-bs-toggle="collapse" data-bs-target="#flightOne">						
						<div class="flex-shrink-0 number-flight">1</div>
						<div class="flex-grow-1">
							<div class="text-primary text-600 fw-bold mb-1">Wed, 06 Dec, 2023</div>
							<h6 class="body-2 mb-0 d-flex gap-1 text-black fw-bold">
								<span>Singapore</span> 
								<span><img src="{{ asset('assets/svg/outline/arrow-right-black.svg') }}" alt="arrow-right" width="24px" height="24px"></span>
								<span>Tokyo</span>
							</h6>
						</div>
					</div>
					<div id="flightOne" class="collapse flight-selected-detail mt-3" data-bs-parent="#accordionFlightOne">
						<div class="d-flex align-items-center justify-content-between mb-3">
							<img class="img-airline" src="{{ asset('assets/images/airline/bamboo_airways.png') }}" alt="Air Asia">
							<div class="text-black-text-opacity-8 fw-bold small airline-name">Bamboo Airlines</div>
							<div class="cursor-pointer d-inline-block" style="display: none" role="button" data-bs-toggle="collapse" data-bs-target="#flightOne">
								<div class="rounded-circle border border-primary icon">
									<img src="{{ asset('assets/svg/solid/arrow-down-blue.svg') }}" alt="arrow" width="10px" height="10px">
								</div>
							</div>
						</div>
						<div class="d-flex align-items-start justify-content-between mb-3">
							<div class="departure">
								<div class="flex-grow-1">
									<div class="text-black fw-bold mb-1">17:20</div>
									<div class="code"><span>SIN</span></div>
								</div>
							</div>
							<div>
								<img src="{{ asset('assets/svg/solid/airplane-mode.svg') }}" alt="airplane-mode" width="24px" height="24px">
							</div>
							<div class="arrival">
								<div class="flex-grow-1">
									<div class="text-black fw-bold mb-1">17:20</div>
									<div class="code"><span>TYO</span></div>
								</div>
							</div>
							<div class="duration small">+1day</div>
							<div class="time">
								<div class="flex-grow-1">
									<div class="text-black fw-bold mb-1">5h 40m</div>
									<div class="small">Direct flight</div>
								</div>
							</div>
						</div>
						<a href="#" class="btn btn-primary w-100 rounded-3-5 text-white fs-6 fw-semibold py-2 btn-change-flight">Change Departure Flight</a>
					</div>
				</div>
			</div>
		</div>
		<div class="mb-3 opacity-50" id="accordionFlightTwo">
			<div class="card border border-primary rounded-4">
				<div class="card-body">
					<div class="d-flex gap-3 align-items-start cursor-pointer collapsed" data-bs-toggle="collapse" data-bs-target="#flightTwo">						
						<div class="flex-shrink-0 number-flight">1</div>
						<div class="flex-grow-1">
							<div class="text-primary text-600 fw-bold mb-1">Wed, 06 Dec, 2023</div>
							<h6 class="body-2 mb-0 d-flex gap-1 text-black fw-bold">
								<span>Tokyo</span> 
								<span><img src="{{ asset('assets/svg/outline/arrow-right-black.svg') }}" alt="arrow-right" width="24px" height="24px"></span>
								<span>Singapore</span>
							</h6>
						</div>
					</div>
					<div id="flightTwo" class="collapse flight-selected-detail mt-3" data-bs-parent="#accordionFlightTwo">
						<div class="d-flex align-items-center justify-content-between mb-3">
							<img class="img-airline" src="{{ asset('assets/images/airline/bamboo_airways.png') }}" alt="Air Asia">
							<div class="text-black-text-opacity-8 fw-bold small airline-name">Bamboo Airlines</div>
							<div class="cursor-pointer d-inline-block" style="display: none" role="button" data-bs-toggle="collapse" data-bs-target="#flightTwo">
								<div class="rounded-circle border border-primary icon">
									<img src="{{ asset('assets/svg/solid/arrow-down-blue.svg') }}" alt="arrow" width="10px" height="10px">
								</div>
							</div>
						</div>
						<div class="d-flex align-items-start justify-content-between mb-3">
							<div class="departure">
								<div class="flex-grow-1">
									<div class="text-black fw-bold mb-1">17:20</div>
									<div class="code"><span>TYO</span></div>
								</div>
							</div>
							<div>
								<img src="{{ asset('assets/svg/solid/airplane-mode.svg') }}" alt="airplane-mode" width="24px" height="24px">
							</div>
							<div class="arrival">
								<div class="flex-grow-1">
									<div class="text-black fw-bold mb-1">17:20</div>
									<div class="code"><span>SIN</span></div>
								</div>
							</div>
							<div class="duration small">+1day</div>
							<div class="time">
								<div class="flex-grow-1">
									<div class="text-black fw-bold mb-1">5h 40m</div>
									<div class="small">Direct flight</div>
								</div>
							</div>
						</div>
						<a href="#" class="btn btn-primary w-100 rounded-3-5 text-white fs-6 fw-semibold py-2 btn-change-flight">Change Departure Flight</a>
					</div>
				</div>
			</div>
		</div>
		<div class="accordion">
			<div class="card border-0 text-black text-opacity-9">
				<div class="card-header px-0 fw-semibold medium cursor-pointer" data-bs-toggle="collapse" data-bs-target="#prices" aria-expanded="false" aria-controls="#prices">
					Price
				</div>
				<div id="prices" class="collapse show">
					<h4 class="text-orange px-0 fw-800">
						1,999,000 VND <small class="text-black fw-normal">/ per customer</small>
					</h4>
					<a href="{{ url("/flights/information") }}">
						<button type="button" class="btn bg-orange text-white border-2 border-white rounded-3-5 fw-bold w-100 fs-6">
							GO TO NEXT PAGE <i class="fal fa-long-arrow-up rotate-45 ms-4"></i>
						</button>
					</a>
				</div>
			</div>
		</div>
	</div>
	
</div>