<div class="row">
	<div class="col-lg-6">
		<h2 class="web-header1 fw-800 text-uppercase text-decoration-underline text-black">Select results</h2>
	</div>
	<div class="col-lg-6">
		<div class="d-sm-flex d-none gap-3 align-items-center justify-content-end" id="sort">
			<div class="d-flex gap-2 align-items-center">
				<img src="{{ asset('assets/svg/outline/sort-arrow-down.svg') }}" alt="sort-arrow-down" width="20px" height="20px">
				<span class="fw-bold text-black text-opacity-9 text-uppercase mb-0">Sort by:</span>
			</div>
			<div class="dropdown dropstart">
				<button type="button" class="btn btn-primary text-nowrap d-flex align-items-center text-white rounded-4 px-4" data-bs-toggle="dropdown" data-bs-auto-close="outside">
					<span class="sort-text me-3">Lowest Price</span>
					<img src="{{ asset('assets/svg/outline/arrow-bottom-white.svg') }}" alt="arrow-bottom" width="24px" height="24px">
				</button>
				<div class="dropdown-menu border-0 shadow p-3">
					<div class="sort-options">
						<div class="form-check text-nowrap mb-2">
							<input class="form-check-input mt-0 me-3" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							<label class="form-check-label" for="flexRadioDefault1">
								Lowest price per person
							</label>
						</div>
						<div class="form-check text-nowrap mb-2">
							<input class="form-check-input mt-0 me-3" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
							<label class="form-check-label" for="flexRadioDefault2">
								Highest price per person
							</label>
						</div>
						<div class="form-check text-nowrap mb-2">
							<input class="form-check-input mt-0 me-3" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
							<label class="form-check-label" for="flexRadioDefault3">Direct Flight</label>
						</div>
						<div class="form-check text-nowrap mb-2">
							<input class="form-check-input mt-0 me-3" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
							<label class="form-check-label" for="flexRadioDefault4">Earliest Departure</label>
						</div>
						<div class="form-check text-nowrap mb-2">
							<input class="form-check-input mt-0 me-3" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
							<label class="form-check-label" for="flexRadioDefault5">Latest Departure</label>
						</div>
						<div class="form-check text-nowrap mb-2">
							<input class="form-check-input mt-0 me-3" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
							<label class="form-check-label" for="flexRadioDefault6">Earliest Arrival</label>
						</div>
						<div class="form-check text-nowrap mb-2">
							<input class="form-check-input mt-0 me-3" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
							<label class="form-check-label" for="flexRadioDefault7">Latest Arrival</label>
						</div>
						<div class="form-check text-nowrap mb-2">
							<input class="form-check-input mt-0 me-3" type="radio" name="flexRadioDefault" id="flexRadioDefault8">
							<label class="form-check-label" for="flexRadioDefault8">Short flight time duration</label>
						</div>
						<div class="form-check text-nowrap mb-2">
							<input class="form-check-input mt-0 me-3" type="radio" name="flexRadioDefault" id="flexRadioDefault9">
							<label class="form-check-label" for="flexRadioDefault9">Best overall</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="text-black text-opacity-8 mt-2 mb-3">Results after having applied filter, prices include taxes and fees.</div>
<div class="flight">
	<div class="card rounded-3-5 bg-primary border-2 border-primary mb-4">
		<div class="card-header bg-transparent text-center border-0">
			<span class="fw-bold text-white h5">Most suitable with the filtered results</span>
		</div>
		<div class="card-body bg-white rounded-bottom-3 p-4">
			<div class="d-flex gap-3 justify-content-between flex-wrap">
				<div class="d-flex align-items-center">
					<span class="rounded-3-5 p-2 me-2 border bg-beige"><img class="fit-contain" src="{{ asset('assets/images/airline/bamboo_airways.png') }}" alt="Air Asia" width="46px" height="20px"></span>
					<span class="h4 fw-bold mb-0">Bamboo Airlines</span>
				</div>
				<div class="d-flex gap-3 justify-content-end flex-wrap fw-semibold">
					<span class="rounded-3-5 p-2 border">BB303</span>
					<span class="rounded-3-5 p-2 border">BOEING 777</span>
					<span class="rounded-3-5 p-2 border">Economy Class</span>
				</div>
			</div>
			<div class="row g-4 mt-0">
				<div class="col-md-5">
					<div class="card h-100 border rounded-3-5">						
						<div class="card-body">
							<div class="d-flex align-items-start gap-3">
								<img class="fit-contain mt-2" src="{{ asset('assets/svg/outline/plane-takeoff.svg') }}" alt="Air Asia" width="24px" height="24px">
								<div class="flex-grow-1">
									<h6 class="fw-semibold text-black">Tan Son Nhat International Airport</h6>
									<div class="d-flex gap-3 text-black text-opacity-9 fw-medium">
										<small>Singapore</small>
										<small>Terminal 2</small>
										<small>9:00</small>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-md-2">
					<div class="card h-100 border-0 flex-sm-column flex-row justify-content-center">
						<div class="stop text-center mx-2">
							<div class="path"></div>
							<div class="medium mb-0 mt-2 fw-semibold">2 Hours</div>
							<span class="small-caption fw-normal">Direct (no stop)</span>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="card h-100 border rounded-3-5">						
						<div class="card-body">
							<div class="d-flex align-items-start gap-3">
								<img class="fit-contain mt-2" src="{{ asset('assets/svg/outline/map.svg') }}" alt="Air Asia" width="24px" height="24px">
								<div class="flex-grow-1">
									<h6 class="fw-semibold text-black">Changi International Airport</h6>
									<div class="d-flex gap-3 text-black text-opacity-9 fw-medium">
										<small>Singapore</small>
										<small>Terminal 2</small>
										<small>11:30</small>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</div>
			<div class="row justify-content-between g-3 mt-2">
				<div class="col-sm-7">
					<span class="text-black text-opacity-7 text-decoration-line-through fw-semibold me-4">2,599,000 VND</span>
					<span class="text-primary fw-bold h4">2,399,000 VND</span>
				</div>
				<div class="col-sm-5">
					<a href="{{ url("/flights/multi-city") }}" class="btn btn-orange btn-lg text-uppercase rounded-3-5 w-100 fw-bold">select</a>
					<div class="text-end">
						<div class="accordion view-details">
							<div class="card">
								<div class="card-header p-0 pt-3" data-bs-toggle="collapse" data-bs-target="#view-details" aria-expanded="false" aria-controls="#view-details">
									<span class="fw-semibold text-primary">View Details</span>
									<img src="{{ asset('assets/svg/outline/arrow-bottom-blue.svg') }}" alt="arrow-bottom" data-icon-name="outline/arrow-bottom-blue" data-icon-hover="outline/arrow-top-blue" width="24px" height="24px">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div id="view-details" class="content-detail accordion-collapse collapse mt-4">
					<div class="accordion-body pt-4">
						<nav>
							<div class="nav nav-tabs border-bottom-0" id="nav-tab" role="tablist">
								<button class="nav-link active" id="nav-departing-flight-detail-1-tab" data-bs-toggle="tab" data-bs-target="#nav-departing-flight-detail-1" type="button" role="tab" aria-controls="nav-departing-flight-detail-1" aria-selected="true">Flight Detail</button>
								<button class="nav-link" id="nav-fare-detail-1-tab" data-bs-toggle="tab" data-bs-target="#nav-fare-detail-1" type="button" role="tab" aria-controls="nav-fare-detail-1" aria-selected="false">Fare Summary</button>
								<button class="nav-link" id="nav-departing-fare-rule-1-tab" data-bs-toggle="tab" data-bs-target="#nav-departing-fare-rule-1" type="button" role="tab" aria-controls="nav-departing-fare-rule-1" aria-selected="false">Fare Rules</button>
							</div>
						</nav>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="nav-departing-flight-detail-1" role="tabpanel" aria-labelledby="nav-departing-flight-detail-1-tab" tabindex="0">
								<div class="p-4 rounded-3-5 rounded-top-start-0 border text-black small">
									<div class="row g-3">
										<div class="col-2 pt-1 text-center">
											<div class="border rounded-4 img-airline">
												<img class="fit-contain" alt="bamboo" src="{{ asset('assets/images/airline/bamboo_airways.png') }}" width="70px" height="52px">
											</div>
										</div>
										<div class="col-10">
											<div class="row">
												<div class="col-sm-7">
													<div class="departure mb-1"><b>Departure time:</b> 09:00 AM - Fri 08, Dec 23 - Tan Son Nhat Intl</div>
													<div class="arrival mb-1"><b>Travel time:</b> 2 hr 30 min</div>
													<div class="landing-time mb-1"><b>Landing time:</b> 11:30 AM - Fri 08, Dec 23 - Changi Intl</div>
													<div class="mt-3">
														<div class="fw-semibold">Operated by Bamboo Airways - BB 382 - Airbus A321</div>
													</div>
												</div>
												<div class="col-sm-5">
													<ul class="list-unstyled lh-lg">
														<li><img class="fit-contain me-2" src="{{ asset('assets/svg/outline/bag-check.svg') }}" alt="bag-check" width="20px" height="20px">Checked baggage: 2 piece(s) per person</li>
														<li><img class="fit-contain me-2" src="{{ asset('assets/svg/outline/cabin.svg') }}" alt="bag-check" width="20px" height="20px">Cabin: ECONOMY</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="nav-fare-detail-1" role="tabpanel" aria-labelledby="nav-fare-detail-1-tab" tabindex="0">
								<div class="p-4 rounded-3-5 rounded-top-start-0 border text-black">
									<table class="table table-bordered text-center mb-0">
										<tr>
											<th>Traveler</th>
											<th>Quantity</th>
											<th>Fare</th>
											<th>Taxes & Fee</th>
											<th>Total</th>
										</tr>
										<tr class="medium">
											<td>
												<div class="d-flex justify-content-between"><span>Adults</span> <small class="text-secondary">From 12</small></div>
											</td>
											<td>1</td>
											<td>USD 200.00</td>
											<td>USD 150.00</td>
											<td>USD 350.00</td>
										</tr>
										<tr class="medium">
											<td colspan="4">Total (1 traveler, Round-trip)</td>
											<td>USD 350.00</td>
										</tr>
									</table>
								</div>
							</div>
							<div class="tab-pane fade" id="nav-departing-fare-rule-1" role="tabpanel" aria-labelledby="nav-departing-fare-rule-1-tab" tabindex="0">
								<div class="p-4 rounded-3-5 rounded-top-start-0 border text-black small">
									<div class="d-flex mt-2">
										<div class="flex-shrink-0 me-3"><img src="{{ asset('assets/svg/outline/ticket.svg') }}" alt="ticket" width="24px" height="24px"></div>
										<div class="flex-grow w-100">
											<h6 class="fw-bold text-black">Ticketing Time</h6>
											<p>Once payment is confirmed, tickets will be issued within 24 hours.</p>
										</div>
									</div>
									<div class="d-flex mt-2">
										<div class="flex-shrink-0 me-3"><img src="{{ asset('assets/svg/outline/remove-border.svg') }}" alt="remove" width="24px" height="24px"></div>
										<div class="flex-grow w-100">
											<h6 class="fw-bold text-black">Refund Alert</h6>
											<p>Refunds may be in the form of airline vouchers</p>
										</div>
									</div>
									<div class="d-flex mt-2">
										<div class="flex-shrink-0 me-3"><img src="{{ asset('assets/svg/outline/smile-ellipse.svg') }}" alt="smile" width="24px" height="24px"></div>
										<div class="flex-grow w-100">
											<h6 class="fw-bold text-black">Booking with your Child/Infant</h6>
											<p>When adult tickets are booked together with child or infant tickets, tickets will be issued separately based on the passenger type. Cancellations and changes of tickets that have already been issued must also be made separately by passenger type. Fees will be charged in accordance with the policy of each ticket.</p>
										</div>
									</div>
									<div class="d-flex mt-2">
										<div class="flex-shrink-0 me-3"><img src="{{ asset('assets/svg/outline/briefcase.svg') }}" alt="briefcase" width="24px" height="24px"></div>
										<div class="flex-grow w-100">
											<h6 class="fw-bold text-black">Baggage Allowance</h6>
											<table class="table table-bordered">
												<thead class="table-secondary">
													<tr>
														<th colspan="2" class="medium">Changi Intl (CAG) => Melbourne (MEB)</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td width="30%">Checked Baggage</td>
														<td>
															1 piece(s) per person. 25 KG each piece.
															Total dimensions (length + width + height) of each piece cannot exceed 158 cm.
														</td>
													</tr>
													<tr>
														<td>Carry-on Baggage</td>
														<td>1 piece(s) per person. 7 KG each piece. Total dimensions (length + width + height) of each piece cannot exceed 115 cm.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="d-flex mt-2">
										<div class="flex-shrink-0 me-3"><img src="{{ asset('assets/svg/outline/briefcase.svg') }}" alt="briefcase" width="24px" height="24px"></div>
										<div class="flex-grow w-100">
											<h6 class="fw-bold text-black">Cancellation &amp; Change Policies</h6>
											<p>The ticket policy is subject to the rules listed below, and these might differ from policies listed on the airline's website. Any cancellation or change requests must be made through FlyCorp platforms or to our customer support.</p>
											<table class="table table-bordered">
												<thead class="table-secondary">
													<tr>
														<th colspan="3" class="medium">Changi Intl (CAG) => Melbourne (MEB)</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td width="30%" rowspan="2">Cancellation Fee</td>
														<td>More than 24 hours prior to departure</td>
													</tr>
													<tr>
														<td>Within 24 hours of departure</td>
													</tr>
													<tr>
														<td rowspan="2">Change Fee</td>
														<td>More than 24 hours prior to departure</td>
													</tr>
													<tr>
														<td>Within 24 hours of departure</td>
													</tr>
												</tbody>
											</table>
											<p class="text-danger fw-semibold">If your flight is changed due to external factors (for example if your flight is delayed or the plane type is changed) and you need to change your flight, please refer to the latest airline policies.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="card rounded-3-5 mb-4">
		<div class="card-body rounded-bottom-3 p-4">
			<div class="d-flex gap-3 justify-content-between flex-wrap">
				<div class="d-flex align-items-center">
					<span class="rounded-3-5 p-2 me-2 border bg-beige"><img class="fit-contain" src="{{ asset('assets/images/airline/air_asia.png') }}" alt="Air Asia" width="46px" height="20px"></span>
					<span class="h4 fw-bold mb-0">Air Asia</span>
				</div>
				<div class="d-flex gap-3 justify-content-end flex-wrap fw-medium text-black">
					<span class="rounded-3-5 p-2 border"><img src="{{ asset('assets/svg/outline/luaggage.svg') }}" alt="luaggage" width="25px" height="23px"></span>
					<span class="rounded-3-5 p-2 border">AA0012</span>
					<span class="rounded-3-5 p-2 border">Economy Class</span>
				</div>
			</div>
			<div class="row g-4 mt-0">
				<div class="col-md-5">
					<div class="card h-100 border rounded-3-5">						
						<div class="card-body">
							<div class="d-flex align-items-start gap-3">
								<img class="fit-contain mt-2" src="{{ asset('assets/svg/outline/plane-takeoff.svg') }}" alt="Air Asia" width="24px" height="24px">
								<div class="flex-grow-1">
									<h6 class="fw-semibold text-black">Tan Son Nhat International Airport</h6>
									<div class="d-flex gap-3 text-black text-opacity-9 fw-medium">
										<small>Singapore</small>
										<small>Terminal 2</small>
										<small>9:00</small>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-md-2">
					<div class="card h-100 border-0 flex-sm-column flex-row justify-content-center">
						<div class="stop text-center mx-2">
							<div class="path"></div>
							<div class="medium mb-0 mt-2 fw-semibold">2 Hours</div>
							<span class="small-caption fw-normal">Direct (no stop)</span>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="card h-100 border rounded-3-5">						
						<div class="card-body">
							<div class="d-flex align-items-start gap-3">
								<img class="fit-contain mt-2" src="{{ asset('assets/svg/outline/map.svg') }}" alt="Air Asia" width="24px" height="24px">
								<div class="flex-grow-1">
									<h6 class="fw-semibold text-black">Changi International Airport</h6>
									<div class="d-flex gap-3 text-black text-opacity-9 fw-medium">
										<small>Singapore</small>
										<small>Terminal 2</small>
										<small>11:30</small>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</div>
			<div class="row justify-content-between g-3 mt-2">
				<div class="col-sm-7">
					<span class="text-black text-opacity-9 text-decoration-line-through fw-semibold me-4">2,479,000 VND</span>
					<span class="text-orange fw-bold h4">2,599,000 VND</span>
				</div>
				<div class="col-sm-5">
					<a href="{{ url("/flights/multi-city") }}" class="btn btn-primary btn-lg text-uppercase rounded-3-5 w-100 fw-bold">select</a>
					<div class="text-end">
						<div class="accordion view-details">
							<div class="card">
								<div class="card-header p-0 pt-3" data-bs-toggle="collapse" data-bs-target="#view-details-1" aria-expanded="false" aria-controls="#view-details-1">
									<span class="fw-semibold text-primary">View Details</span>
									<img src="{{ asset('assets/svg/outline/arrow-bottom-blue.svg') }}" alt="arrow-bottom" data-icon-name="outline/arrow-bottom-blue" data-icon-hover="outline/arrow-top-blue" width="24px" height="24px">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div id="view-details-1" class="content-detail accordion-collapse collapse mt-4">
					<div class="accordion-body pt-4">
						<nav>
							<div class="nav nav-tabs border-bottom-0" id="nav-tab" role="tablist">
								<button class="nav-link active" id="nav-departing-flight-detail-2-tab" data-bs-toggle="tab" data-bs-target="#nav-departing-flight-detail-2" type="button" role="tab" aria-controls="nav-departing-flight-detail-2" aria-selected="true">Flight Detail</button>
								<button class="nav-link" id="nav-fare-detail-2-tab" data-bs-toggle="tab" data-bs-target="#nav-fare-detail-2" type="button" role="tab" aria-controls="nav-fare-detail-2" aria-selected="false">Fare Summary</button>
								<button class="nav-link" id="nav-departing-fare-rule-2-tab" data-bs-toggle="tab" data-bs-target="#nav-departing-fare-rule-2" type="button" role="tab" aria-controls="nav-departing-fare-rule-2" aria-selected="false">Fare Rules</button>
							</div>
						</nav>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="nav-departing-flight-detail-2" role="tabpanel" aria-labelledby="nav-departing-flight-detail-2-tab" tabindex="0">
								<div class="p-4 rounded-3-5 rounded-top-start-0 border text-black small">
									<div class="row g-3">
										<div class="col-2 pt-1 text-center">
											<div class="border rounded-4 img-airline">
												<img class="fit-contain" alt="bamboo" src="{{ asset('assets/images/airline/air_asia.png') }}" width="70px" height="52px">
											</div>
										</div>
										<div class="col-10">
											<div class="row">
												<div class="col-sm-7">
													<div class="departure mb-1"><b>Departure time:</b> 09:00 AM - Fri 08, Dec 23 - Tan Son Nhat Intl</div>
													<div class="arrival mb-1"><b>Travel time:</b> 2 hr 30 min</div>
													<div class="landing-time mb-1"><b>Landing time:</b> 11:30 AM - Fri 08, Dec 23 - Changi Intl</div>
													<div class="mt-3">
														<div class="fw-semibold">Operated by Bamboo Airways - BB 382 - Airbus A321</div>
													</div>
												</div>
												<div class="col-sm-5">
													<ul class="list-unstyled lh-lg">
														<li><img class="fit-contain me-2" src="{{ asset('assets/svg/outline/bag-check.svg') }}" alt="bag-check" width="20px" height="20px">Checked baggage: 2 piece(s) per person</li>
														<li><img class="fit-contain me-2" src="{{ asset('assets/svg/outline/cabin.svg') }}" alt="bag-check" width="20px" height="20px">Cabin: ECONOMY</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="nav-fare-detail-2" role="tabpanel" aria-labelledby="nav-fare-detail-2-tab" tabindex="0">
								<div class="p-4 rounded-3-5 rounded-top-start-0 border text-black">
									<table class="table table-bordered text-center mb-0">
										<tr>
											<th>Traveler</th>
											<th>Quantity</th>
											<th>Fare</th>
											<th>Taxes & Fee</th>
											<th>Total</th>
										</tr>
										<tr class="medium">
											<td>
												<div class="d-flex justify-content-between"><span>Adults</span> <small class="text-secondary">From 12</small></div>
											</td>
											<td>1</td>
											<td>USD 200.00</td>
											<td>USD 150.00</td>
											<td>USD 350.00</td>
										</tr>
										<tr class="medium">
											<td colspan="4">Total (1 traveler, Round-trip)</td>
											<td>USD 350.00</td>
										</tr>
									</table>
								</div>
							</div>
							<div class="tab-pane fade" id="nav-departing-fare-rule-2" role="tabpanel" aria-labelledby="nav-departing-fare-rule-2-tab" tabindex="0">
								<div class="p-4 rounded-3-5 rounded-top-start-0 border text-black small">
									<div class="d-flex mt-2">
										<div class="flex-shrink-0 me-3"><img src="{{ asset('assets/svg/outline/ticket.svg') }}" alt="ticket" width="24px" height="24px"></div>
										<div class="flex-grow w-100">
											<h6 class="fw-bold text-black">Ticketing Time</h6>
											<p>Once payment is confirmed, tickets will be issued within 24 hours.</p>
										</div>
									</div>
									<div class="d-flex mt-2">
										<div class="flex-shrink-0 me-3"><img src="{{ asset('assets/svg/outline/remove-border.svg') }}" alt="remove" width="24px" height="24px"></div>
										<div class="flex-grow w-100">
											<h6 class="fw-bold text-black">Refund Alert</h6>
											<p>Refunds may be in the form of airline vouchers</p>
										</div>
									</div>
									<div class="d-flex mt-2">
										<div class="flex-shrink-0 me-3"><img src="{{ asset('assets/svg/outline/smile-ellipse.svg') }}" alt="smile" width="24px" height="24px"></div>
										<div class="flex-grow w-100">
											<h6 class="fw-bold text-black">Booking with your Child/Infant</h6>
											<p>When adult tickets are booked together with child or infant tickets, tickets will be issued separately based on the passenger type. Cancellations and changes of tickets that have already been issued must also be made separately by passenger type. Fees will be charged in accordance with the policy of each ticket.</p>
										</div>
									</div>
									<div class="d-flex mt-2">
										<div class="flex-shrink-0 me-3"><img src="{{ asset('assets/svg/outline/briefcase.svg') }}" alt="briefcase" width="24px" height="24px"></div>
										<div class="flex-grow w-100">
											<h6 class="fw-bold text-black">Baggage Allowance</h6>
											<table class="table table-bordered">
												<thead class="table-secondary">
													<tr>
														<th colspan="2" class="medium">Changi Intl (CAG) => Melbourne (MEB)</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td width="30%">Checked Baggage</td>
														<td>
															1 piece(s) per person. 25 KG each piece.
															Total dimensions (length + width + height) of each piece cannot exceed 158 cm.
														</td>
													</tr>
													<tr>
														<td>Carry-on Baggage</td>
														<td>1 piece(s) per person. 7 KG each piece. Total dimensions (length + width + height) of each piece cannot exceed 115 cm.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="d-flex mt-2">
										<div class="flex-shrink-0 me-3"><img src="{{ asset('assets/svg/outline/briefcase.svg') }}" alt="briefcase" width="24px" height="24px"></div>
										<div class="flex-grow w-100">
											<h6 class="fw-bold text-black">Cancellation &amp; Change Policies</h6>
											<p>The ticket policy is subject to the rules listed below, and these might differ from policies listed on the airline's website. Any cancellation or change requests must be made through FlyCorp platforms or to our customer support.</p>
											<table class="table table-bordered">
												<thead class="table-secondary">
													<tr>
														<th colspan="3" class="medium">Changi Intl (CAG) => Melbourne (MEB)</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td width="30%" rowspan="2">Cancellation Fee</td>
														<td>More than 24 hours prior to departure</td>
													</tr>
													<tr>
														<td>Within 24 hours of departure</td>
													</tr>
													<tr>
														<td rowspan="2">Change Fee</td>
														<td>More than 24 hours prior to departure</td>
													</tr>
													<tr>
														<td>Within 24 hours of departure</td>
													</tr>
												</tbody>
											</table>
											<p class="text-danger fw-semibold">If your flight is changed due to external factors (for example if your flight is delayed or the plane type is changed) and you need to change your flight, please refer to the latest airline policies.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="card rounded-3-5 mb-4">
		<div class="card-body rounded-bottom-3 p-4">
			<div class="d-flex gap-3 justify-content-between flex-wrap">
				<div class="d-flex align-items-center">
					<span class="rounded-3-5 p-2 me-2 border bg-beige"><img class="fit-contain" src="{{ asset('assets/images/airline/vietjet_air.png') }}" alt="Air Asia" width="46px" height="20px"></span>
					<span class="h4 fw-bold mb-0">Vietjet Air</span>
				</div>
				<div class="d-flex gap-3 justify-content-end flex-wrap fw-medium text-black">
					<span class="rounded-3-5 p-2 border"><img src="{{ asset('assets/svg/outline/luaggage.svg') }}" alt="luaggage" width="25px" height="23px"></span>
					<span class="rounded-3-5 p-2 border">VJA0034</span>
					<span class="rounded-3-5 p-2 border">Economy Class</span>
				</div>
			</div>
			<div class="row g-4 mt-0">
				<div class="col-md-5">
					<div class="card h-100 border rounded-3-5">						
						<div class="card-body">
							<div class="d-flex align-items-start gap-3">
								<img class="fit-contain mt-2" src="{{ asset('assets/svg/outline/plane-takeoff.svg') }}" alt="Air Asia" width="24px" height="24px">
								<div class="flex-grow-1">
									<h6 class="fw-semibold text-black">Tan Son Nhat International Airport</h6>
									<div class="d-flex gap-3 text-black text-opacity-9 fw-medium">
										<small>Singapore</small>
										<small>Terminal 2</small>
										<small>9:00</small>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-md-2">
					<div class="card h-100 border-0 flex-sm-column flex-row justify-content-center">
						<div class="stop text-center mx-2">
							<div class="path"></div>
							<div class="medium mb-0 mt-2 fw-semibold">2.5 Hours</div>
							<span class="small-caption fw-normal">1 stop</span>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="card h-100 border rounded-3-5">						
						<div class="card-body">
							<div class="d-flex align-items-start gap-3">
								<img class="fit-contain mt-2" src="{{ asset('assets/svg/outline/map.svg') }}" alt="Air Asia" width="24px" height="24px">
								<div class="flex-grow-1">
									<h6 class="fw-semibold text-black">Changi International Airport</h6>
									<div class="d-flex gap-3 text-black text-opacity-9 fw-medium">
										<small>Singapore</small>
										<small>Terminal 2</small>
										<small>11:30</small>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</div>
			<div class="row justify-content-between g-3 mt-2">
				<div class="col-sm-7">
					<span class="text-black text-opacity-9 text-decoration-line-through fw-semibold me-4">2,479,000 VND</span>
					<span class="text-orange fw-bold h4">2,679,000 VND</span>
				</div>
				<div class="col-sm-5">
					<a href="{{ url("/flights/multi-city") }}" class="btn btn-primary btn-lg text-uppercase rounded-3-5 w-100 fw-bold">select</a>
					<div class="text-end">
						<div class="accordion view-details">
							<div class="card">
								<div class="card-header p-0 pt-3" data-bs-toggle="collapse" data-bs-target="#view-details-2" aria-expanded="false" aria-controls="#view-details-2">
									<span class="fw-semibold text-primary">View Details</span>
									<img src="{{ asset('assets/svg/outline/arrow-bottom-blue.svg') }}" alt="arrow-bottom" data-icon-name="outline/arrow-bottom-blue" data-icon-hover="outline/arrow-top-blue" width="24px" height="24px">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div id="view-details-2" class="content-detail accordion-collapse collapse mt-4">
					<div class="accordion-body pt-4">
						<nav>
							<div class="nav nav-tabs border-bottom-0" id="nav-tab" role="tablist">
								<button class="nav-link active" id="nav-departing-flight-detail-3-tab" data-bs-toggle="tab" data-bs-target="#nav-departing-flight-detail-3" type="button" role="tab" aria-controls="nav-departing-flight-detail-3" aria-selected="true">Flight Detail</button>
								<button class="nav-link" id="nav-fare-detail-3-tab" data-bs-toggle="tab" data-bs-target="#nav-fare-detail-3" type="button" role="tab" aria-controls="nav-fare-detail-3" aria-selected="false">Fare Summary</button>
								<button class="nav-link" id="nav-departing-fare-rule-3-tab" data-bs-toggle="tab" data-bs-target="#nav-departing-fare-rule-3" type="button" role="tab" aria-controls="nav-departing-fare-rule-3" aria-selected="false">Fare Rules</button>
							</div>
						</nav>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="nav-departing-flight-detail-3" role="tabpanel" aria-labelledby="nav-departing-flight-detail-3-tab" tabindex="0">
								<div class="p-4 rounded-3-5 rounded-top-start-0 border text-black small">
									<div class="row g-3">
										<div class="col-2 pt-1 text-center">
											<div class="border rounded-4 img-airline">
												<img class="fit-contain" alt="bamboo" src="{{ asset('assets/images/airline/vietjet_air.png') }}" width="70px" height="52px">
											</div>
										</div>
										<div class="col-10">
											<div class="row">
												<div class="col-sm-7">
													<div class="departure mb-1"><b>Departure time:</b> 09:00 AM - Fri 08, Dec 23 - Tan Son Nhat Intl</div>
													<div class="arrival mb-1"><b>Travel time:</b> 2 hr 30 min</div>
													<div class="landing-time mb-1"><b>Landing time:</b> 11:30 AM - Fri 08, Dec 23 - Changi Intl</div>
													<div class="mt-3">
														<div class="fw-semibold">Operated by Bamboo Airways - BB 382 - Airbus A321</div>
													</div>
												</div>
												<div class="col-sm-5">
													<ul class="list-unstyled lh-lg">
														<li><img class="fit-contain me-2" src="{{ asset('assets/svg/outline/bag-check.svg') }}" alt="bag-check" width="20px" height="20px">Checked baggage: 2 piece(s) per person</li>
														<li><img class="fit-contain me-2" src="{{ asset('assets/svg/outline/cabin.svg') }}" alt="bag-check" width="20px" height="20px">Cabin: ECONOMY</li>
													</ul>
												</div>
											</div>
											<div class="mt-3 mb-4">
												<div class="bg-primary text-white p-2 rounded-3"><img class="me-3" src="{{ asset('assets/svg/solid/information-circle-white.svg') }}" alt="information" width="24px" height="24px"> Stop to change planes in Taoyuan Intl</div>
											</div>
										</div>
									</div>
									<div class="row g-3">
										<div class="col-2 pt-1 text-center">
											<div class="border rounded-4 img-airline">
												<img class="fit-contain" alt="bamboo" src="{{ asset('assets/images/airline/vietjet_air.png') }}" width="70px" height="52px">
											</div>
										</div>
										<div class="col-10">
											<div class="row">
												<div class="col-sm-7">
													<div class="departure mb-1"><b>Departure time:</b> 09:00 AM - Fri 08, Dec 23 - Tan Son Nhat Intl</div>
													<div class="arrival mb-1"><b>Travel time:</b> 2 hr 30 min</div>
													<div class="landing-time mb-1"><b>Landing time:</b> 11:30 AM - Fri 08, Dec 23 - Changi Intl</div>
													<div class="mt-3">
														<div class="fw-semibold">Operated by Bamboo Airways - BB 382 - Airbus A321</div>
													</div>
												</div>
												<div class="col-sm-5">
													<ul class="list-unstyled lh-lg">
														<li><img class="fit-contain me-2" src="{{ asset('assets/svg/outline/bag-check.svg') }}" alt="bag-check" width="20px" height="20px">Checked baggage: 2 piece(s) per person</li>
														<li><img class="fit-contain me-2" src="{{ asset('assets/svg/outline/cabin.svg') }}" alt="bag-check" width="20px" height="20px">Cabin: ECONOMY</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="nav-fare-detail-3" role="tabpanel" aria-labelledby="nav-fare-detail-3-tab" tabindex="0">
								<div class="p-4 rounded-3-5 rounded-top-start-0 border text-black">
									<table class="table table-bordered text-center mb-0">
										<tr>
											<th>Traveler</th>
											<th>Quantity</th>
											<th>Fare</th>
											<th>Taxes & Fee</th>
											<th>Total</th>
										</tr>
										<tr class="medium">
											<td>
												<div class="d-flex justify-content-between"><span>Adults</span> <small class="text-secondary">From 12</small></div>
											</td>
											<td>1</td>
											<td>USD 200.00</td>
											<td>USD 150.00</td>
											<td>USD 350.00</td>
										</tr>
										<tr class="medium">
											<td colspan="4">Total (1 traveler, Round-trip)</td>
											<td>USD 350.00</td>
										</tr>
									</table>
								</div>
							</div>
							<div class="tab-pane fade" id="nav-departing-fare-rule-3" role="tabpanel" aria-labelledby="nav-departing-fare-rule-3-tab" tabindex="0">
								<div class="p-4 rounded-3-5 rounded-top-start-0 border text-black small">
									<div class="d-flex mt-2">
										<div class="flex-shrink-0 me-3"><img src="{{ asset('assets/svg/outline/ticket.svg') }}" alt="ticket" width="24px" height="24px"></div>
										<div class="flex-grow w-100">
											<h6 class="fw-bold text-black">Ticketing Time</h6>
											<p>Once payment is confirmed, tickets will be issued within 24 hours.</p>
										</div>
									</div>
									<div class="d-flex mt-2">
										<div class="flex-shrink-0 me-3"><img src="{{ asset('assets/svg/outline/remove-border.svg') }}" alt="remove" width="24px" height="24px"></div>
										<div class="flex-grow w-100">
											<h6 class="fw-bold text-black">Refund Alert</h6>
											<p>Refunds may be in the form of airline vouchers</p>
										</div>
									</div>
									<div class="d-flex mt-2">
										<div class="flex-shrink-0 me-3"><img src="{{ asset('assets/svg/outline/smile-ellipse.svg') }}" alt="smile" width="24px" height="24px"></div>
										<div class="flex-grow w-100">
											<h6 class="fw-bold text-black">Booking with your Child/Infant</h6>
											<p>When adult tickets are booked together with child or infant tickets, tickets will be issued separately based on the passenger type. Cancellations and changes of tickets that have already been issued must also be made separately by passenger type. Fees will be charged in accordance with the policy of each ticket.</p>
										</div>
									</div>
									<div class="d-flex mt-2">
										<div class="flex-shrink-0 me-3"><img src="{{ asset('assets/svg/outline/briefcase.svg') }}" alt="briefcase" width="24px" height="24px"></div>
										<div class="flex-grow w-100">
											<h6 class="fw-bold text-black">Baggage Allowance</h6>
											<table class="table table-bordered">
												<thead class="table-secondary">
													<tr>
														<th colspan="2" class="medium">Changi Intl (CAG) => Melbourne (MEB)</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td width="30%">Checked Baggage</td>
														<td>
															1 piece(s) per person. 25 KG each piece.
															Total dimensions (length + width + height) of each piece cannot exceed 158 cm.
														</td>
													</tr>
													<tr>
														<td>Carry-on Baggage</td>
														<td>1 piece(s) per person. 7 KG each piece. Total dimensions (length + width + height) of each piece cannot exceed 115 cm.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="d-flex mt-2">
										<div class="flex-shrink-0 me-3"><img src="{{ asset('assets/svg/outline/briefcase.svg') }}" alt="briefcase" width="24px" height="24px"></div>
										<div class="flex-grow w-100">
											<h6 class="fw-bold text-black">Cancellation &amp; Change Policies</h6>
											<p>The ticket policy is subject to the rules listed below, and these might differ from policies listed on the airline's website. Any cancellation or change requests must be made through FlyCorp platforms or to our customer support.</p>
											<table class="table table-bordered">
												<thead class="table-secondary">
													<tr>
														<th colspan="3" class="medium">Changi Intl (CAG) => Melbourne (MEB)</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td width="30%" rowspan="2">Cancellation Fee</td>
														<td>More than 24 hours prior to departure</td>
													</tr>
													<tr>
														<td>Within 24 hours of departure</td>
													</tr>
													<tr>
														<td rowspan="2">Change Fee</td>
														<td>More than 24 hours prior to departure</td>
													</tr>
													<tr>
														<td>Within 24 hours of departure</td>
													</tr>
												</tbody>
											</table>
											<p class="text-danger fw-semibold">If your flight is changed due to external factors (for example if your flight is delayed or the plane type is changed) and you need to change your flight, please refer to the latest airline policies.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="card rounded-3-5 mb-4">
		<div class="card-body rounded-bottom-3 p-4">
			<div class="d-flex gap-3 justify-content-between flex-wrap">
				<div class="d-flex align-items-center">
					<span class="rounded-3-5 p-2 me-2 border"><img class="fit-contain" src="{{ asset('assets/svg/outline/airplane-plus.svg') }}" alt="Air Asia" width="24px" height="24px"></span>
					<span class="h4 d-inline fw-bold mb-0">MULTIPLE AIRLINES <i class="fal fa-info-circle small align-middle"></i></span>
				</div>
				<div class="d-flex gap-3 justify-content-end flex-wrap fw-medium text-black">
					<span class="d-flex align-items-center gap-3 rounded-3-5 p-2 border">
						<img src="{{ asset('assets/svg/outline/luaggage.svg') }}" alt="luaggage" width="25px" height="23px">
						<img src="{{ asset('assets/svg/outline/usb.svg') }}" alt="usb" width="20px" height="20px">
					</span>
					<span class="rounded-3-5 p-2 border">VJA0034</span>
					<span class="rounded-3-5 p-2 border">Economy Class</span>
				</div>
			</div>
			<div class="row g-4 mt-0">
				<div class="col-md-5">
					<div class="card h-100 border rounded-3-5">						
						<div class="card-body">
							<div class="d-flex align-items-start gap-3">
								<img class="fit-contain mt-2" src="{{ asset('assets/svg/outline/plane-takeoff.svg') }}" alt="Air Asia" width="24px" height="24px">
								<div class="flex-grow-1">
									<h6 class="fw-semibold text-black">Tan Son Nhat International Airport</h6>
									<div class="d-flex gap-3 text-black text-opacity-9 fw-medium">
										<small>Singapore</small>
										<small>Terminal 2</small>
										<small>9:00</small>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-md-2">
					<div class="card h-100 border-0 flex-sm-column flex-row justify-content-center">
						<div class="stop text-center mx-2">
							<div class="path"></div>
							<div class="medium mb-0 mt-2 fw-semibold">2 Hours</div>
							<span class="small-caption fw-normal">Direct (no stop)</span>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="card h-100 border rounded-3-5">						
						<div class="card-body">
							<div class="d-flex align-items-start gap-3">
								<img class="fit-contain mt-2" src="{{ asset('assets/svg/outline/map.svg') }}" alt="Air Asia" width="24px" height="24px">
								<div class="flex-grow-1">
									<h6 class="fw-semibold text-black">Changi International Airport</h6>
									<div class="d-flex gap-3 text-black text-opacity-9 fw-medium">
										<small>Singapore</small>
										<small>Terminal 2</small>
										<small>11:30</small>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</div>
			<div class="row justify-content-between g-3 mt-2">
				<div class="col-sm-7">
					<span class="text-black text-opacity-9 text-decoration-line-through fw-semibold me-4">2,689,000 VND</span>
					<span class="text-orange fw-bold h4">2,799,000 VND</span>
				</div>
				<div class="col-sm-5">
					<a href="{{ url("/flights/multi-city") }}" class="btn btn-primary btn-lg text-uppercase rounded-3-5 w-100 fw-bold">select</a>
					<div class="text-end">
						<div class="accordion view-details">
							<div class="card">
								<div class="card-header p-0 pt-3" data-bs-toggle="collapse" data-bs-target="#view-details-3" aria-expanded="false" aria-controls="#view-details-3">
									<span class="fw-semibold text-primary">View Details</span>
									<img src="{{ asset('assets/svg/outline/arrow-bottom-blue.svg') }}" alt="arrow-bottom" data-icon-name="outline/arrow-bottom-blue" data-icon-hover="outline/arrow-top-blue" width="24px" height="24px">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div id="view-details-3" class="content-detail accordion-collapse collapse mt-4">
					<div class="accordion-body pt-4">
						<nav>
							<div class="nav nav-tabs border-bottom-0" id="nav-tab" role="tablist">
								<button class="nav-link active" id="nav-departing-flight-detail-4-tab" data-bs-toggle="tab" data-bs-target="#nav-departing-flight-detail-4" type="button" role="tab" aria-controls="nav-departing-flight-detail-4" aria-selected="true">Flight Detail</button>
								<button class="nav-link" id="nav-fare-detail-4-tab" data-bs-toggle="tab" data-bs-target="#nav-fare-detail-4" type="button" role="tab" aria-controls="nav-fare-detail-4" aria-selected="false">Fare Summary</button>
								<button class="nav-link" id="nav-departing-fare-rule-4-tab" data-bs-toggle="tab" data-bs-target="#nav-departing-fare-rule-4" type="button" role="tab" aria-controls="nav-departing-fare-rule-4" aria-selected="false">Fare Rules</button>
							</div>
						</nav>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="nav-departing-flight-detail-4" role="tabpanel" aria-labelledby="nav-departing-flight-detail-4-tab" tabindex="0">
								<div class="p-4 rounded-3-5 rounded-top-start-0 border text-black small">
									<div class="row g-3">
										<div class="col-2 pt-1 text-center">
											<div class="border rounded-4 img-airline">
												<img class="fit-contain" alt="bamboo" src="{{ asset('assets/images/airline/vietjet_air.png') }}" width="70px" height="52px">
											</div>
										</div>
										<div class="col-10">
											<div class="row">
												<div class="col-sm-7">
													<div class="departure mb-1"><b>Departure time:</b> 09:00 AM - Fri 08, Dec 23 - Tan Son Nhat Intl</div>
													<div class="arrival mb-1"><b>Travel time:</b> 2 hr 30 min</div>
													<div class="landing-time mb-1"><b>Landing time:</b> 11:30 AM - Fri 08, Dec 23 - Changi Intl</div>
													<div class="mt-3">
														<div class="fw-semibold">Operated by Bamboo Airways - BB 382 - Airbus A321</div>
													</div>
												</div>
												<div class="col-sm-5">
													<ul class="list-unstyled lh-lg">
														<li><img class="fit-contain me-2" src="{{ asset('assets/svg/outline/bag-check.svg') }}" alt="bag-check" width="20px" height="20px">Checked baggage: 2 piece(s) per person</li>
														<li><img class="fit-contain me-2" src="{{ asset('assets/svg/outline/cabin.svg') }}" alt="bag-check" width="20px" height="20px">Cabin: ECONOMY</li>
													</ul>
												</div>
											</div>
											<div class="mt-3 mb-4">
												<div class="bg-primary text-white p-2 rounded-3"><img class="me-3" src="{{ asset('assets/svg/solid/information-circle-white.svg') }}" alt="information" width="24px" height="24px"> Stop to change planes in Taoyuan Intl</div>
											</div>
										</div>
									</div>
									<div class="row g-3">
										<div class="col-2 pt-1 text-center">
											<div class="border rounded-4 img-airline">
												<img class="fit-contain" alt="bamboo" src="{{ asset('assets/images/airline/singapore_airlines.png') }}" width="70px" height="52px">
											</div>
										</div>
										<div class="col-10">
											<div class="row">
												<div class="col-sm-7">
													<div class="departure mb-1"><b>Departure time:</b> 09:00 AM - Fri 08, Dec 23 - Tan Son Nhat Intl</div>
													<div class="arrival mb-1"><b>Travel time:</b> 2 hr 30 min</div>
													<div class="landing-time mb-1"><b>Landing time:</b> 11:30 AM - Fri 08, Dec 23 - Changi Intl</div>
													<div class="mt-3">
														<div class="fw-semibold">Operated by Bamboo Airways - BB 382 - Airbus A321</div>
													</div>
												</div>
												<div class="col-sm-5">
													<ul class="list-unstyled lh-lg">
														<li><img class="fit-contain me-2" src="{{ asset('assets/svg/outline/bag-check.svg') }}" alt="bag-check" width="20px" height="20px">Checked baggage: 2 piece(s) per person</li>
														<li><img class="fit-contain me-2" src="{{ asset('assets/svg/outline/cabin.svg') }}" alt="bag-check" width="20px" height="20px">Cabin: ECONOMY</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="nav-fare-detail-4" role="tabpanel" aria-labelledby="nav-fare-detail-4-tab" tabindex="0">
								<div class="p-4 rounded-3-5 rounded-top-start-0 border text-black">
									<table class="table table-bordered text-center mb-0">
										<tr>
											<th>Traveler</th>
											<th>Quantity</th>
											<th>Fare</th>
											<th>Taxes & Fee</th>
											<th>Total</th>
										</tr>
										<tr class="medium">
											<td>
												<div class="d-flex justify-content-between"><span>Adults</span> <small class="text-secondary">From 12</small></div>
											</td>
											<td>1</td>
											<td>USD 200.00</td>
											<td>USD 150.00</td>
											<td>USD 350.00</td>
										</tr>
										<tr class="medium">
											<td colspan="4">Total (1 traveler, Round-trip)</td>
											<td>USD 350.00</td>
										</tr>
									</table>
								</div>
							</div>
							<div class="tab-pane fade" id="nav-departing-fare-rule-4" role="tabpanel" aria-labelledby="nav-departing-fare-rule-4-tab" tabindex="0">
								<div class="p-4 rounded-3-5 rounded-top-start-0 border text-black small">
									<div class="d-flex mt-2">
										<div class="flex-shrink-0 me-3"><img src="{{ asset('assets/svg/outline/ticket.svg') }}" alt="ticket" width="24px" height="24px"></div>
										<div class="flex-grow w-100">
											<h6 class="fw-bold text-black">Ticketing Time</h6>
											<p>Once payment is confirmed, tickets will be issued within 24 hours.</p>
										</div>
									</div>
									<div class="d-flex mt-2">
										<div class="flex-shrink-0 me-3"><img src="{{ asset('assets/svg/outline/remove-border.svg') }}" alt="remove" width="24px" height="24px"></div>
										<div class="flex-grow w-100">
											<h6 class="fw-bold text-black">Refund Alert</h6>
											<p>Refunds may be in the form of airline vouchers</p>
										</div>
									</div>
									<div class="d-flex mt-2">
										<div class="flex-shrink-0 me-3"><img src="{{ asset('assets/svg/outline/smile-ellipse.svg') }}" alt="smile" width="24px" height="24px"></div>
										<div class="flex-grow w-100">
											<h6 class="fw-bold text-black">Booking with your Child/Infant</h6>
											<p>When adult tickets are booked together with child or infant tickets, tickets will be issued separately based on the passenger type. Cancellations and changes of tickets that have already been issued must also be made separately by passenger type. Fees will be charged in accordance with the policy of each ticket.</p>
										</div>
									</div>
									<div class="d-flex mt-2">
										<div class="flex-shrink-0 me-3"><img src="{{ asset('assets/svg/outline/briefcase.svg') }}" alt="briefcase" width="24px" height="24px"></div>
										<div class="flex-grow w-100">
											<h6 class="fw-bold text-black">Baggage Allowance</h6>
											<table class="table table-bordered">
												<thead class="table-secondary">
													<tr>
														<th colspan="2" class="medium">Changi Intl (CAG) => Melbourne (MEB)</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td width="30%">Checked Baggage</td>
														<td>
															1 piece(s) per person. 25 KG each piece.
															Total dimensions (length + width + height) of each piece cannot exceed 158 cm.
														</td>
													</tr>
													<tr>
														<td>Carry-on Baggage</td>
														<td>1 piece(s) per person. 7 KG each piece. Total dimensions (length + width + height) of each piece cannot exceed 115 cm.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="d-flex mt-2">
										<div class="flex-shrink-0 me-3"><img src="{{ asset('assets/svg/outline/briefcase.svg') }}" alt="briefcase" width="24px" height="24px"></div>
										<div class="flex-grow w-100">
											<h6 class="fw-bold text-black">Cancellation &amp; Change Policies</h6>
											<p>The ticket policy is subject to the rules listed below, and these might differ from policies listed on the airline's website. Any cancellation or change requests must be made through FlyCorp platforms or to our customer support.</p>
											<table class="table table-bordered">
												<thead class="table-secondary">
													<tr>
														<th colspan="3" class="medium">Changi Intl (CAG) => Melbourne (MEB)</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td width="30%" rowspan="2">Cancellation Fee</td>
														<td>More than 24 hours prior to departure</td>
													</tr>
													<tr>
														<td>Within 24 hours of departure</td>
													</tr>
													<tr>
														<td rowspan="2">Change Fee</td>
														<td>More than 24 hours prior to departure</td>
													</tr>
													<tr>
														<td>Within 24 hours of departure</td>
													</tr>
												</tbody>
											</table>
											<p class="text-danger fw-semibold">If your flight is changed due to external factors (for example if your flight is delayed or the plane type is changed) and you need to change your flight, please refer to the latest airline policies.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {
		$(".view-details .card-header").click(function(){
			var item = $(this).find('img');
			var iconHover = $(item).data('icon-hover');
			var iconName = $(item).data('icon-name');
			var srcName = `{{ asset('assets/svg/${iconName}.svg') }}`;
			var srcHover = `{{ asset('assets/svg/${iconHover}.svg') }}`;
			
			$(this).find("img").attr('src', (_, attr) => attr == srcName ? srcHover : srcName);
			if ($(this).hasClass("collapsed")) {
				$(this).find('span').text("View Details").removeClass("text-decoration-underline");
			} else {
				$(this).find('span').text("Hide Details").addClass("text-decoration-underline");
			}
		});
	})
</script>