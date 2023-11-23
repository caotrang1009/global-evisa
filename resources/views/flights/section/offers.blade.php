<div class="col-sm-8">
	<div class="d-flex justify-content-between align-items-center mb-4">
		<div>
			<h1 class="text-uppercase" style="font-weight: 800">Select results</h1>
			<div>Results after having applied filter, prices include taxes and fees.</div>
		</div>
		<div>
			<div class="d-flex gap-3 align-items-center">
				<div class="d-flex gap-3 align-items-baseline">
					<i class="fal fa-sort-amount-down-alt"></i>
					<span class="fw-semibold h5 mb-0">Sort by:</span>
				</div>
				<div class="dropdown dropstart">
					<button type="button" class="btn btn-primary text-nowrap d-flex align-items-center text-white rounded-3" data-bs-toggle="dropdown" data-bs-auto-close="outside">
						<span class="sort-text me-3">Lowest Price</span><i class="fal fa-sort-down"></i>
					</button>
					<ul class="dropdown-menu border-0 shadow">
						<li>
							<a class="dropdown-item cursor-pointer direction-item selected">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
									<label class="form-check-label" for="flexRadioDefault1">
										Lowest price per person
									</label>
								</div>
							</a>
						</li>
						<li>
							<a class="dropdown-item cursor-pointer direction-item">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
								<label class="form-check-label" for="flexRadioDefault2">
									Highest price per person
								</label>
							</div>
							</a>
						</li>						
						<li>
							<a class="dropdown-item cursor-pointer direction-item">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
								<label class="form-check-label" for="flexRadioDefault3">Direct Flight</label>
							</div>
							</a>
						</li>						
						<li>
							<a class="dropdown-item cursor-pointer direction-item">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
								<label class="form-check-label" for="flexRadioDefault4">Earliest Departure</label>
							</div>
							</a>
						</li>
						<li>
							<a class="dropdown-item cursor-pointer direction-item">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
								<label class="form-check-label" for="flexRadioDefault5">Latest Departure</label>
							</div>
							</a>
						</li>
						<li>
							<a class="dropdown-item cursor-pointer direction-item">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
								<label class="form-check-label" for="flexRadioDefault6">Earliest Arrival</label>
							</div>
							</a>
						</li>
						<li>
							<a class="dropdown-item cursor-pointer direction-item">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
								<label class="form-check-label" for="flexRadioDefault7">Latest Arrival</label>
							</div>
							</a>
						</li>
						<li>
							<a class="dropdown-item cursor-pointer direction-item">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault8">
								<label class="form-check-label" for="flexRadioDefault8">Short flight time duration</label>
							</div>
							</a>
						</li>
						<li>
							<a class="dropdown-item cursor-pointer direction-item">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault9">
								<label class="form-check-label" for="flexRadioDefault9">Best overall</label>
							</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="flight">
		<div class="card rounded-3 bg-primary border-2 border-primary mb-4">
			<div class="card-header bg-transparent text-center border-0">
				<span class="fw-bold text-white h5">Most suitable with the filtered results</span>
			</div>
			<div class="card-body bg-white rounded-bottom-3 p-4">
				<div class="row mb-3">
					<div class="col-sm-5">
						<div class="d-flex align-items-center">
							<span class="rounded-3 p-2 border"><img src="{{ asset('assets/images/airline/Bamboo_Airways.png') }}" alt="Air Asia"></span>
							<span class="h4 fw-bold ms-2">Bamboo Airlines</span>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="d-flex gap-3 justify-content-end">
							<span class="rounded-3 p-2 border d-flex gap-2">
								<span><i class="fal fa-briefcase p-1"></i></span>
								<span><i class="fal fa-utensils p-1"></i></span>
								<span><i class="fal fa-wifi p-1"></i></span>
								<span><img src="{{ asset('assets/images/usb-port.png') }}" alt="usb" width="18px"></span>
							</span>
							<span class="rounded-3 p-2 border">BB01230</span>
							<span class="rounded-3 p-2 border">Economy Class</span>
						</div>
					</div>
				</div>
				<div class="row g-4 ">
					<div class="col-md-5">
						<div class="card h-75 border rounded-3">						
							<div class="card-body">
								<div class="d-flex align-items-center gap-3">
									<i class="fal fa-plane-departure"></i>
									<div>
										<h5 class="fw-semibold mb-0" style="font-size: 18px">Changi International Airport</h5>
										<small>Singapore</small> <br>
										<small>Terminal 2</small>
									</div>
								</div>
							</div>							
						</div>
						<h4 class="fw-bold text-center mt-2">9:00</h4>
					</div>
					<div class="col-md-2">
						<div class="card h-75 border-0 justify-content-center">
						<div class="d-flex">

							<div class="stop text-center mx-2">
								<div class="path"></div>
								<div class="h6 mb-0 fw-semibold">2 Hours</div>
								<small>Direct (no stop)</small>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="card h-75 border rounded-3">						
							<div class="card-body">
								<div class="d-flex align-items-center gap-3">
									<i class="fal fa-plane-departure"></i>
									<div>
										<h5 class="fw-semibold text-dark mb-0" style="font-size: 18px">Tan Son Nhat International Airport</h5>
										<small>Vietnam</small> <br>
										<small>Terminal 4</small>
									</div>
								</div>
							</div>							
						</div>
						<h4 class="fw-bold text-center mt-2">11:00</h4>
					</div>
				</div>
				<div class="row justify-content-between mt-1">
					<div class="col-sm-5 text-center">
						<span class="text-secondary text-decoration-line-through fw-semibold">2,599,000 VND</span>
						<span class="text-primary fw-bold h4">1,899,000 VND</span>
					</div>
					<div class="col-sm-5">
						<a href="{{ url('flights/return') }}" class="btn btn-primary btn-lg text-uppercase w-100 fw-bold">select</a>
						<div class="text-end">
							<div class="accordion view-details">
								<div class="card">
									<div class="card-header p-0 pt-3" data-bs-toggle="collapse" data-bs-target="#view-details" aria-expanded="false" aria-controls="#view-details">
										<span class="fw-semibold pe-3 text-primary">View Details</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div id="view-details" class="content-detail accordion-collapse collapse mt-4" style="border-top: 1px dashed #545454">
						<div class="accordion-body pt-3">
							<nav>
								<div class="nav nav-tabs" id="nav-tab" role="tablist">
									<button class="nav-link active" id="nav-departing-flight-detail-1-tab" data-bs-toggle="tab" data-bs-target="#nav-departing-flight-detail-1" type="button" role="tab" aria-controls="nav-departing-flight-detail-1" aria-selected="true">Flight Detail</button>
									<button class="nav-link" id="nav-fare-detail-1-tab" data-bs-toggle="tab" data-bs-target="#nav-fare-detail-1" type="button" role="tab" aria-controls="nav-fare-detail-1" aria-selected="false">Fare Summary</button>
									<button class="nav-link" id="nav-departing-fare-rule-1-tab" data-bs-toggle="tab" data-bs-target="#nav-departing-fare-rule-1" type="button" role="tab" aria-controls="nav-departing-fare-rule-1" aria-selected="false">Fare Rules</button>
								</div>
							</nav>
							<div class="tab-content">
								<div class="tab-pane fade show active" id="nav-departing-flight-detail-1" role="tabpanel" aria-labelledby="nav-departing-flight-detail-1-tab" tabindex="0">
									<div class="p-4 rounded border border-top-0 rounded-bottom-4">
										<div class="row">
											<div class="col-12">
												<div class="rounded-3 border p-3 px-4">
													<div class="d-flex gap-4 align-items-center mb-3">
														<div class="flight-time border rounded-4 text-center px-3 py-2">
															<h3>09:00</h3>
															<img src="{{ asset('assets/images/airline/Bamboo_Airways.png') }}" alt="Air Asia">
														</div>
														<div>
															<h6 class="text-black fw-semibold">Bamboo Airlines - Take-off</h6>
															<small>At Changi International Airport, Singapore</small> <br>
															<small>Terminal 3</small>
														</div>
													</div>
													<div class="row small g-2">
														<div class="col-sm-3">
															<div class="fw-semibold">Flight ID: <span class="fw-normal">BB01230</span></div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-suitcase me-2"></i>Checked baggage (20kg)</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-utensils me-2"></i>Food</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-wifi me-2"></i>Wifi</div>
														</div>
														<div class="col-sm-3">
															<div class="fw-semibold">Class: <span class="fw-normal">Economy</span></div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-briefcase me-2"></i>Carry-on baggage (10kg)</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-coffee-togo me-2"></i>Drink</div>
														</div>
														<div class="col-sm-3">
															<div><img class="me-2" src="{{ asset('assets/images/usb-port.png') }}" alt="usb" width="18px">Charging power/USB port</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row my-3">
											<div class="col-12 d-flex justify-content-center">
												<div class="stop d-flex align-items-center mx-2 vertical">
													<div class="path"></div>
													<div class="ms-2">
														<div class="h6 mb-0 fw-semibold">2 Hours</div>
														<small>Direct (no stop)</small>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-12">
												<div class="rounded-3 border p-3">
													<div class="d-flex gap-4 align-items-center mb-3">
														<div class="flight-time border rounded-4 text-center px-3 py-2">
															<h3>11:00</h3>
															<img src="{{ asset('assets/images/airline/Bamboo_Airways.png') }}" alt="Air Asia">
														</div>
														<div>
															<h6 class="text-black fw-semibold">Bamboo Airlines - Take-off</h6>
															<small>At Changi International Airport, Singapore</small> <br>
															<small>Terminal 3</small>
														</div>
													</div>
													<div class="row small g-2">
														<div class="col-sm-3">
															<div class="fw-semibold">Flight ID: <span class="fw-normal">BB01230</span></div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-suitcase me-2"></i>Checked baggage (20kg)</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-utensils me-2"></i>Food</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-wifi me-2"></i>Wifi</div>
														</div>
														<div class="col-sm-3">
															<div class="fw-semibold">Class: <span class="fw-normal">Economy</span></div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-briefcase me-2"></i>Carry-on baggage (10kg)</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-coffee-togo me-2"></i>Drink</div>
														</div>
														<div class="col-sm-3">
															<div><img class="me-2" src="{{ asset('assets/images/usb-port.png') }}" alt="usb" width="18px">Charging power/USB port</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="nav-fare-detail-1" role="tabpanel" aria-labelledby="nav-fare-detail-1-tab" tabindex="0">
									<div class="p-4 rounded border border-top-0 rounded-bottom-4">
										<table class="table table-bordered text-center">
											<tr>
												<th>Traveler</th>
												<th>Quantity</th>
												<th>Fare</th>
												<th>Taxes & Fee</th>
												<th>Total</th>
											</tr>
											<tr>
												<td>
													<div class="d-flex justify-content-between"><span>Adults</span> <small class="text-secondary">From 12</small></div>
												</td>
												<td>1</td>
												<td>USD 200.00</td>
												<td>USD 150.00</td>
												<td>USD 350.00</td>
											</tr>
											<tr>
												<td colspan="4">Total (1 traveler, Round-trip)</td>
												<td>USD 350.00</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="tab-pane fade" id="nav-departing-fare-rule-1" role="tabpanel" aria-labelledby="nav-departing-fare-rule-1-tab" tabindex="0">
									<div class="p-4 rounded border border-top-0 rounded-bottom-4">
										<div class="d-flex mt-3">
											<div class="flex-shrink-0 me-3"><i class="h6 fal fa-ticket fa-fw"></i></div>
											<div class="flex-grow w-100">
												<h6>Ticketing Time</h6>
												<p>Once payment is confirmed, tickets will be issued within 24 hours.</p>
											</div>
										</div>
										<div class="d-flex mt-3">
											<div class="flex-shrink-0 me-3"><i class="h6 fal fa-backspace fa-fw"></i></div>
											<div class="flex-grow w-100">
												<h6>Refund Alert</h6>
												<p>Refunds may be in the form of airline vouchers</p>
											</div>
										</div>
										<div class="d-flex mt-3">
											<div class="flex-shrink-0 me-3"><i class="h6 fal fa-baby fa-fw"></i></div>
											<div class="flex-grow w-100">
												<h6>Booking with your Child/Infant</h6>
												<p>When adult tickets are booked together with child or infant tickets, tickets will be issued separately based on the passenger type. Cancellations and changes of tickets that have already been issued must also be made separately by passenger type. Fees will be charged in accordance with the policy of each ticket.</p>
											</div>
										</div>
										<div class="d-flex mt-3">
											<div class="flex-shrink-0 me-3"><i class="h6 fal fa-suitcase-rolling fa-fw"></i></div>
											<div class="flex-grow w-100">
												<h6>Baggage Allowance</h6>
												<table class="table table-bordered">
													<thead class="table-light">
														<tr><th colspan="2" class="fw-normal">Tansonnhat Intl (SGN) <i class="fal fa-long-arrow-right"></i> Suvarnabhumi Intl (BKK)</th>
													</tr></thead>
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
										<div class="d-flex mt-3">
											<div class="flex-shrink-0 me-3"><i class="h6 fal fa-map-marker-slash fa-fw"></i></div>
											<div class="flex-grow w-100">
												<h6>Cancellation &amp; Change Policies</h6>
												<p>The ticket policy is subject to the rules listed below, and these might differ from policies listed on the airline's website. Any cancellation or change requests must be made through FlyCorp platforms or to our customer support.</p>
												<table class="table table-bordered">
													<thead class="table-light">
														<tr><th colspan="3" class="fw-normal">Tansonnhat Intl (SGN) <i class="fal fa-long-arrow-right"></i> Suvarnabhumi Intl (BKK)</th>
													</tr></thead>
													<tbody>
														<tr>
															<td width="30%" rowspan="2">Cancellation Fee</td>
															<td>More than 24 hours prior to departure</td>
															<td></td>
														</tr>
														<tr>
															<td>Within 24 hours of departure</td>
															<td></td>
														</tr>
														<tr>
															<td rowspan="2">Change Fee</td>
															<td>More than 24 hours prior to departure</td>
															<td></td>
														</tr>
														<tr>
															<td>Within 24 hours of departure</td>
															<td></td>
														</tr>
													</tbody>
												</table>
												<p class="text-danger">If your flight is changed due to external factors (for example if your flight is delayed or the plane type is changed) and you need to change your flight, please refer to the latest airline policies.</p>
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
		<div class="card rounded-3 mb-4">
			<div class="card-body rounded-bottom-3 p-4">
				<div class="row mb-3">
					<div class="col-sm-5">
						<div class="d-flex align-items-center">
							<span class="rounded-3 p-2 border"><img src="{{ asset('assets/images/airline/Air_Asia.png') }}" alt="Air Asia"></span>
							<span class="h4 fw-bold ms-2">Air Asia</span>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="d-flex gap-3 justify-content-end">
							<span class="rounded-3 p-2 border d-flex gap-2">
								<span><i class="fal fa-suitcase-rolling p-1"></i></span>
							</span>
							<span class="rounded-3 p-2 border">AA0012</span>
							<span class="rounded-3 p-2 border">Economy Class</span>
						</div>
					</div>
				</div>
				<div class="row g-4 ">
					<div class="col-md-5">
						<div class="card h-75 border rounded-3">						
							<div class="card-body">
								<div class="d-flex align-items-center gap-3">
									<i class="fal fa-plane-departure"></i>
									<div>
										<h5 class="fw-semibold mb-0" style="font-size: 18px">Changi International Airport</h5>
										<small>Singapore</small> <br>
										<small>Terminal 2</small>
									</div>
								</div>
							</div>							
						</div>
						<h4 class="fw-bold text-center mt-2">9:10</h4>
					</div>
					<div class="col-md-2">
						<div class="card h-75 border-0 justify-content-center">
						<div class="d-flex">

							<div class="stop text-center mx-2">
								<div class="path"></div>
								<div class="h6 mb-0 fw-semibold">2.5 Hours</div>
								<small>Direct (no stop)</small>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="card h-75 border rounded-3">						
							<div class="card-body">
								<div class="d-flex align-items-center gap-3">
									<i class="fal fa-plane-departure"></i>
									<div>
										<h5 class="fw-semibold text-dark mb-0" style="font-size: 18px">Tan Son Nhat International Airport</h5>
										<small>Vietnam</small> <br>
										<small>Terminal 4</small>
									</div>
								</div>
							</div>							
						</div>
						<h4 class="fw-bold text-center mt-2">11:40</h4>
					</div>
				</div>
				<div class="row justify-content-between mt-1">
					<div class="col-sm-5 text-center">
						<span class="text-secondary text-decoration-line-through fw-semibold">2,799,000 VND</span>
						<span class="text-orange fw-bold h4">1,999,000 VND</span>
					</div>
					<div class="col-sm-5">
						<a href="{{ url('flights/return') }}" class="btn btn-primary btn-lg text-uppercase w-100 fw-bold">select</a>
						<div class="text-end">
							<div class="accordion view-details">
								<div class="card">
									<div class="card-header p-0 pt-3" data-bs-toggle="collapse" data-bs-target="#view-details-1" aria-expanded="false" aria-controls="#view-details-1">
										<span class="fw-semibold pe-3 text-primary">View Details</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div id="view-details-1" class="content-detail accordion-collapse collapse mt-4" style="border-top: 1px dashed #545454">
						<div class="accordion-body pt-3">
							<nav>
								<div class="nav nav-tabs" id="nav-tab" role="tablist">
									<button class="nav-link active" id="nav-departing-flight-detail-1-tab" data-bs-toggle="tab" data-bs-target="#nav-departing-flight-detail-1" type="button" role="tab" aria-controls="nav-departing-flight-detail-1" aria-selected="true">Flight Detail</button>
									<button class="nav-link" id="nav-fare-detail-1-tab" data-bs-toggle="tab" data-bs-target="#nav-fare-detail-1" type="button" role="tab" aria-controls="nav-fare-detail-1" aria-selected="false">Fare Summary</button>
									<button class="nav-link" id="nav-departing-fare-rule-1-tab" data-bs-toggle="tab" data-bs-target="#nav-departing-fare-rule-1" type="button" role="tab" aria-controls="nav-departing-fare-rule-1" aria-selected="false">Fare Rules</button>
								</div>
							</nav>
							<div class="tab-content">
								<div class="tab-pane fade show active" id="nav-departing-flight-detail-1" role="tabpanel" aria-labelledby="nav-departing-flight-detail-1-tab" tabindex="0">
									<div class="p-4 rounded border border-top-0 rounded-bottom-4">
										<div class="row">
											<div class="col-12">
												<div class="rounded-3 border p-3 px-4">
													<div class="d-flex gap-4 align-items-center mb-3">
														<div class="flight-time border rounded-4 text-center px-3 py-2">
															<h3>09:10</h3>
															<img src="{{ asset('assets/images/airline/Air_Asia.png') }}" alt="Air Asia">
														</div>
														<div>
															<h6 class="text-black fw-semibold">Air Asia - Take-off</h6>
															<small>At Changi International Airport, Singapore</small> <br>
															<small>Terminal 3</small>
														</div>
													</div>
													<div class="row small g-2">
														<div class="col-sm-3">
															<div class="fw-semibold">Flight ID: <span class="fw-normal">AA0012</span></div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-suitcase me-2"></i>Checked baggage (20kg)</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-utensils me-2"></i>Food</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-wifi me-2"></i>Wifi</div>
														</div>
														<div class="col-sm-3">
															<div class="fw-semibold">Class: <span class="fw-normal">Economy</span></div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-briefcase me-2"></i>Carry-on baggage (10kg)</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-coffee-togo me-2"></i>Drink</div>
														</div>
														<div class="col-sm-3">
															<div><img class="me-2" src="{{ asset('assets/images/usb-port.png') }}" alt="usb" width="18px">Charging power/USB port</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row my-3">
											<div class="col-12 d-flex justify-content-center">
												<div class="stop d-flex align-items-center mx-2 vertical">
													<div class="path"></div>
													<div class="ms-2">
														<div class="h6 mb-0 fw-semibold">2 Hours</div>
														<small>Direct (no stop)</small>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-12">
												<div class="rounded-3 border p-3">
													<div class="d-flex gap-4 align-items-center mb-3">
														<div class="flight-time border rounded-4 text-center px-3 py-2">
															<h3>11:40</h3>
															<img src="{{ asset('assets/images/airline/Air_Asia.png') }}" alt="Air Asia">
														</div>
														<div>
															<h6 class="text-black fw-semibold">Air Asia - Take-off</h6>
															<small>At Changi International Airport, Singapore</small> <br>
															<small>Terminal 3</small>
														</div>
													</div>
													<div class="row small g-2">
														<div class="col-sm-3">
															<div class="fw-semibold">Flight ID: <span class="fw-normal">BB01230</span></div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-suitcase me-2"></i>Checked baggage (20kg)</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-utensils me-2"></i>Food</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-wifi me-2"></i>Wifi</div>
														</div>
														<div class="col-sm-3">
															<div class="fw-semibold">Class: <span class="fw-normal">Economy</span></div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-briefcase me-2"></i>Carry-on baggage (10kg)</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-coffee-togo me-2"></i>Drink</div>
														</div>
														<div class="col-sm-3">
															<div><img class="me-2" src="{{ asset('assets/images/usb-port.png') }}" alt="usb" width="18px">Charging power/USB port</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="nav-fare-detail-1" role="tabpanel" aria-labelledby="nav-fare-detail-1-tab" tabindex="0">
									<div class="p-4 rounded border border-top-0 rounded-bottom-4">
										<table class="table table-bordered text-center">
											<tr>
												<th>Traveler</th>
												<th>Quantity</th>
												<th>Fare</th>
												<th>Taxes & Fee</th>
												<th>Total</th>
											</tr>
											<tr>
												<td>
													<div class="d-flex justify-content-between"><span>Adults</span> <small class="text-secondary">From 12</small></div>
												</td>
												<td>1</td>
												<td>USD 200.00</td>
												<td>USD 150.00</td>
												<td>USD 350.00</td>
											</tr>
											<tr>
												<td colspan="4">Total (1 traveler, Round-trip)</td>
												<td>USD 350.00</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="tab-pane fade" id="nav-departing-fare-rule-1" role="tabpanel" aria-labelledby="nav-departing-fare-rule-1-tab" tabindex="0">
									<div class="p-4 rounded border border-top-0 rounded-bottom-4">
										<div class="d-flex mt-3">
											<div class="flex-shrink-0 me-3"><i class="h6 fal fa-ticket fa-fw"></i></div>
											<div class="flex-grow w-100">
												<h6>Ticketing Time</h6>
												<p>Once payment is confirmed, tickets will be issued within 24 hours.</p>
											</div>
										</div>
										<div class="d-flex mt-3">
											<div class="flex-shrink-0 me-3"><i class="h6 fal fa-backspace fa-fw"></i></div>
											<div class="flex-grow w-100">
												<h6>Refund Alert</h6>
												<p>Refunds may be in the form of airline vouchers</p>
											</div>
										</div>
										<div class="d-flex mt-3">
											<div class="flex-shrink-0 me-3"><i class="h6 fal fa-baby fa-fw"></i></div>
											<div class="flex-grow w-100">
												<h6>Booking with your Child/Infant</h6>
												<p>When adult tickets are booked together with child or infant tickets, tickets will be issued separately based on the passenger type. Cancellations and changes of tickets that have already been issued must also be made separately by passenger type. Fees will be charged in accordance with the policy of each ticket.</p>
											</div>
										</div>
										<div class="d-flex mt-3">
											<div class="flex-shrink-0 me-3"><i class="h6 fal fa-suitcase-rolling fa-fw"></i></div>
											<div class="flex-grow w-100">
												<h6>Baggage Allowance</h6>
												<table class="table table-bordered">
													<thead class="table-light">
														<tr><th colspan="2" class="fw-normal">Tansonnhat Intl (SGN) <i class="fal fa-long-arrow-right"></i> Suvarnabhumi Intl (BKK)</th>
													</tr></thead>
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
										<div class="d-flex mt-3">
											<div class="flex-shrink-0 me-3"><i class="h6 fal fa-map-marker-slash fa-fw"></i></div>
											<div class="flex-grow w-100">
												<h6>Cancellation &amp; Change Policies</h6>
												<p>The ticket policy is subject to the rules listed below, and these might differ from policies listed on the airline's website. Any cancellation or change requests must be made through FlyCorp platforms or to our customer support.</p>
												<table class="table table-bordered">
													<thead class="table-light">
														<tr><th colspan="3" class="fw-normal">Tansonnhat Intl (SGN) <i class="fal fa-long-arrow-right"></i> Suvarnabhumi Intl (BKK)</th>
													</tr></thead>
													<tbody>
														<tr>
															<td width="30%" rowspan="2">Cancellation Fee</td>
															<td>More than 24 hours prior to departure</td>
															<td></td>
														</tr>
														<tr>
															<td>Within 24 hours of departure</td>
															<td></td>
														</tr>
														<tr>
															<td rowspan="2">Change Fee</td>
															<td>More than 24 hours prior to departure</td>
															<td></td>
														</tr>
														<tr>
															<td>Within 24 hours of departure</td>
															<td></td>
														</tr>
													</tbody>
												</table>
												<p class="text-danger">If your flight is changed due to external factors (for example if your flight is delayed or the plane type is changed) and you need to change your flight, please refer to the latest airline policies.</p>
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
		<div class="card rounded-3 mb-4">
			<div class="card-body rounded-bottom-3 p-4">
				<div class="row mb-3">
					<div class="col-sm-5">
						<div class="d-flex align-items-center">
							<span class="rounded-3 p-2 border"><img src="{{ asset('assets/images/airline/VietJet_Air.png') }}" alt="Air Asia"></span>
							<span class="h4 fw-bold ms-2">Vietjet Air</span>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="d-flex gap-3 justify-content-end">
							<span class="rounded-3 p-2 border d-flex gap-2">
								<span><i class="fal fa-suitcase-rolling p-1"></i></span>
							</span>
							<span class="rounded-3 p-2 border">VJA0034</span>
							<span class="rounded-3 p-2 border">Economy Class</span>
						</div>
					</div>
				</div>
				<div class="row g-4 ">
					<div class="col-md-5">
						<div class="card h-75 border rounded-3">						
							<div class="card-body">
								<div class="d-flex align-items-center gap-3">
									<i class="fal fa-plane-departure"></i>
									<div>
										<h5 class="fw-semibold mb-0" style="font-size: 18px">Changi International Airport</h5>
										<small>Singapore</small> <br>
										<small>Terminal 2</small>
									</div>
								</div>
							</div>							
						</div>
						<h4 class="fw-bold text-center mt-2">9:00</h4>
					</div>
					<div class="col-md-2">
						<div class="card h-75 border-0 justify-content-center">
						<div class="d-flex">

							<div class="stop text-center mx-2">
								<div class="path"></div>
								<div class="h6 mb-0 fw-semibold">2.5 Hours</div>
								<small>Direct (no stop)</small>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="card h-75 border rounded-3">						
							<div class="card-body">
								<div class="d-flex align-items-center gap-3">
									<i class="fal fa-plane-departure"></i>
									<div>
										<h5 class="fw-semibold text-dark mb-0" style="font-size: 18px">Tan Son Nhat International Airport</h5>
										<small>Vietnam</small> <br>
										<small>Terminal 4</small>
									</div>
								</div>
							</div>							
						</div>
						<h4 class="fw-bold text-center mt-2">11:30</h4>
					</div>
				</div>
				<div class="row justify-content-between mt-1">
					<div class="col-sm-5 text-center">
						<span class="text-secondary text-decoration-line-through fw-semibold">2,650,000 VND</span>
						<span class="text-orange fw-bold h4">2,000,000 VND</span>
					</div>
					<div class="col-sm-5">
						<a href="{{ url('flights/return') }}" class="btn btn-primary btn-lg text-uppercase w-100 fw-bold">select</a>
						<div class="text-end">
							<div class="accordion view-details">
								<div class="card">
									<div class="card-header p-0 pt-3" data-bs-toggle="collapse" data-bs-target="#view-details-2" aria-expanded="false" aria-controls="#view-details-2">
										<span class="fw-semibold pe-3 text-primary">View Details</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div id="view-details-2" class="content-detail accordion-collapse collapse mt-4" style="border-top: 1px dashed #545454">
						<div class="accordion-body pt-3">
							<nav>
								<div class="nav nav-tabs" id="nav-tab" role="tablist">
									<button class="nav-link active" id="nav-departing-flight-detail-1-tab" data-bs-toggle="tab" data-bs-target="#nav-departing-flight-detail-1" type="button" role="tab" aria-controls="nav-departing-flight-detail-1" aria-selected="true">Flight Detail</button>
									<button class="nav-link" id="nav-fare-detail-1-tab" data-bs-toggle="tab" data-bs-target="#nav-fare-detail-1" type="button" role="tab" aria-controls="nav-fare-detail-1" aria-selected="false">Fare Summary</button>
									<button class="nav-link" id="nav-departing-fare-rule-1-tab" data-bs-toggle="tab" data-bs-target="#nav-departing-fare-rule-1" type="button" role="tab" aria-controls="nav-departing-fare-rule-1" aria-selected="false">Fare Rules</button>
								</div>
							</nav>
							<div class="tab-content">
								<div class="tab-pane fade show active" id="nav-departing-flight-detail-1" role="tabpanel" aria-labelledby="nav-departing-flight-detail-1-tab" tabindex="0">
									<div class="p-4 rounded border border-top-0 rounded-bottom-4">
										<div class="row">
											<div class="col-12">
												<div class="rounded-3 border p-3 px-4">
													<div class="d-flex gap-4 align-items-center mb-3">
														<div class="flight-time border rounded-4 text-center px-3 py-2">
															<h3>09:00</h3>
															<img src="{{ asset('assets/images/airline/VietJet_Air.png') }}" alt="Air Asia">
														</div>
														<div>
															<h6 class="text-black fw-semibold">Vietjet Air - Take-off</h6>
															<small>At Changi International Airport, Singapore</small> <br>
															<small>Terminal 3</small>
														</div>
													</div>
													<div class="row small g-2">
														<div class="col-sm-3">
															<div class="fw-semibold">Flight ID: <span class="fw-normal">VJA0034</span></div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-suitcase me-2"></i>Checked baggage (20kg)</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-utensils me-2"></i>Food</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-wifi me-2"></i>Wifi</div>
														</div>
														<div class="col-sm-3">
															<div class="fw-semibold">Class: <span class="fw-normal">Economy</span></div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-briefcase me-2"></i>Carry-on baggage (10kg)</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-coffee-togo me-2"></i>Drink</div>
														</div>
														<div class="col-sm-3">
															<div><img class="me-2" src="{{ asset('assets/images/usb-port.png') }}" alt="usb" width="18px">Charging power/USB port</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row my-3">
											<div class="col-12 d-flex justify-content-center">
												<div class="stop d-flex align-items-center mx-2 vertical">
													<div class="path"></div>
													<div class="ms-2">
														<div class="h6 mb-0 fw-semibold">2 Hours</div>
														<small>Direct (no stop)</small>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-12">
												<div class="rounded-3 border p-3">
													<div class="d-flex gap-4 align-items-center mb-3">
														<div class="flight-time border rounded-4 text-center px-3 py-2">
															<h3>11:30</h3>
															<img src="{{ asset('assets/images/airline/VietJet_Air.png') }}" alt="Air Asia">
														</div>
														<div>
															<h6 class="text-black fw-semibold">Vietjet Air - Take-off</h6>
															<small>At Changi International Airport, Singapore</small> <br>
															<small>Terminal 3</small>
														</div>
													</div>
													<div class="row small g-2">
														<div class="col-sm-3">
															<div class="fw-semibold">Flight ID: <span class="fw-normal">BB01230</span></div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-suitcase me-2"></i>Checked baggage (20kg)</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-utensils me-2"></i>Food</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-wifi me-2"></i>Wifi</div>
														</div>
														<div class="col-sm-3">
															<div class="fw-semibold">Class: <span class="fw-normal">Economy</span></div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-briefcase me-2"></i>Carry-on baggage (10kg)</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-coffee-togo me-2"></i>Drink</div>
														</div>
														<div class="col-sm-3">
															<div><img class="me-2" src="{{ asset('assets/images/usb-port.png') }}" alt="usb" width="18px">Charging power/USB port</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="nav-fare-detail-1" role="tabpanel" aria-labelledby="nav-fare-detail-1-tab" tabindex="0">
									<div class="p-4 rounded border border-top-0 rounded-bottom-4">
										<table class="table table-bordered text-center">
											<tr>
												<th>Traveler</th>
												<th>Quantity</th>
												<th>Fare</th>
												<th>Taxes & Fee</th>
												<th>Total</th>
											</tr>
											<tr>
												<td>
													<div class="d-flex justify-content-between"><span>Adults</span> <small class="text-secondary">From 12</small></div>
												</td>
												<td>1</td>
												<td>USD 200.00</td>
												<td>USD 150.00</td>
												<td>USD 350.00</td>
											</tr>
											<tr>
												<td colspan="4">Total (1 traveler, Round-trip)</td>
												<td>USD 350.00</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="tab-pane fade" id="nav-departing-fare-rule-1" role="tabpanel" aria-labelledby="nav-departing-fare-rule-1-tab" tabindex="0">
									<div class="p-4 rounded border border-top-0 rounded-bottom-4">
										<div class="d-flex mt-3">
											<div class="flex-shrink-0 me-3"><i class="h6 fal fa-ticket fa-fw"></i></div>
											<div class="flex-grow w-100">
												<h6>Ticketing Time</h6>
												<p>Once payment is confirmed, tickets will be issued within 24 hours.</p>
											</div>
										</div>
										<div class="d-flex mt-3">
											<div class="flex-shrink-0 me-3"><i class="h6 fal fa-backspace fa-fw"></i></div>
											<div class="flex-grow w-100">
												<h6>Refund Alert</h6>
												<p>Refunds may be in the form of airline vouchers</p>
											</div>
										</div>
										<div class="d-flex mt-3">
											<div class="flex-shrink-0 me-3"><i class="h6 fal fa-baby fa-fw"></i></div>
											<div class="flex-grow w-100">
												<h6>Booking with your Child/Infant</h6>
												<p>When adult tickets are booked together with child or infant tickets, tickets will be issued separately based on the passenger type. Cancellations and changes of tickets that have already been issued must also be made separately by passenger type. Fees will be charged in accordance with the policy of each ticket.</p>
											</div>
										</div>
										<div class="d-flex mt-3">
											<div class="flex-shrink-0 me-3"><i class="h6 fal fa-suitcase-rolling fa-fw"></i></div>
											<div class="flex-grow w-100">
												<h6>Baggage Allowance</h6>
												<table class="table table-bordered">
													<thead class="table-light">
														<tr><th colspan="2" class="fw-normal">Tansonnhat Intl (SGN) <i class="fal fa-long-arrow-right"></i> Suvarnabhumi Intl (BKK)</th>
													</tr></thead>
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
										<div class="d-flex mt-3">
											<div class="flex-shrink-0 me-3"><i class="h6 fal fa-map-marker-slash fa-fw"></i></div>
											<div class="flex-grow w-100">
												<h6>Cancellation &amp; Change Policies</h6>
												<p>The ticket policy is subject to the rules listed below, and these might differ from policies listed on the airline's website. Any cancellation or change requests must be made through FlyCorp platforms or to our customer support.</p>
												<table class="table table-bordered">
													<thead class="table-light">
														<tr><th colspan="3" class="fw-normal">Tansonnhat Intl (SGN) <i class="fal fa-long-arrow-right"></i> Suvarnabhumi Intl (BKK)</th>
													</tr></thead>
													<tbody>
														<tr>
															<td width="30%" rowspan="2">Cancellation Fee</td>
															<td>More than 24 hours prior to departure</td>
															<td></td>
														</tr>
														<tr>
															<td>Within 24 hours of departure</td>
															<td></td>
														</tr>
														<tr>
															<td rowspan="2">Change Fee</td>
															<td>More than 24 hours prior to departure</td>
															<td></td>
														</tr>
														<tr>
															<td>Within 24 hours of departure</td>
															<td></td>
														</tr>
													</tbody>
												</table>
												<p class="text-danger">If your flight is changed due to external factors (for example if your flight is delayed or the plane type is changed) and you need to change your flight, please refer to the latest airline policies.</p>
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
		<div class="card rounded-3 mb-4">
			<div class="card-body rounded-bottom-3 p-4">
				<div class="row mb-3">
					<div class="col-sm-5">
						<div class="d-flex align-items-center">
							<span class="rounded-3 p-2 border"><i class="fal fa-plane-alt fs-5 m-1" style="transform: rotate(-40deg);"></i><i class="fal fa-plus small" style="translate: -8px 8px;"></i></span>
							<span class="h4 d-inline fw-bold ms-2">MULTIPLE AIRLINES <i class="fal fa-info-circle small align-middle"></i></span>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="d-flex gap-3 justify-content-end">
							<span class="rounded-3 p-2 border d-flex gap-2">
								<span><i class="fal fa-suitcase-rolling p-1"></i></span>
								<span><img src="{{ asset('assets/images/usb-port.png') }}" alt="usb" width="18px"></span>
							</span>
							<span class="rounded-3 p-2 border">BB01230</span>
							<span class="rounded-3 p-2 border">Economy Class</span>
						</div>
					</div>
				</div>
				<div class="row g-4 ">
					<div class="col-md-5">
						<div class="card h-75 border rounded-3">						
							<div class="card-body">
								<div class="d-flex align-items-center gap-3">
									<i class="fal fa-plane-departure"></i>
									<div>
										<h5 class="fw-semibold mb-0" style="font-size: 18px">Changi International Airport</h5>
										<small>Singapore</small> <br>
										<small>Terminal 2</small>
									</div>
								</div>
							</div>							
						</div>
						<h4 class="fw-bold text-center mt-2">9:30</h4>
					</div>
					<div class="col-md-2">
						<div class="card h-75 border-0 justify-content-center">
						<div class="d-flex">

							<div class="stop text-center mx-2">
								<div class="path"></div>
								<div class="h6 mb-0 fw-semibold">3 Hours</div>
								<small>Direct (no stop)</small>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="card h-75 border rounded-3">						
							<div class="card-body">
								<div class="d-flex align-items-center gap-3">
									<i class="fal fa-plane-departure"></i>
									<div>
										<h5 class="fw-semibold text-dark mb-0" style="font-size: 18px">Tan Son Nhat International Airport</h5>
										<small>Vietnam</small> <br>
										<small>Terminal 4</small>
									</div>
								</div>
							</div>							
						</div>
						<h4 class="fw-bold text-center mt-2">23:45</h4>
					</div>
				</div>
				<div class="row justify-content-between mt-1">
					<div class="col-sm-5 text-center">
						<span class="text-secondary text-decoration-line-through fw-semibold">2,799,000 VND</span>
						<span class="text-orange fw-bold h4">2,230,000 VND</span>
					</div>
					<div class="col-sm-5">
						<a href="{{ url('flights/return') }}" class="btn btn-primary btn-lg text-uppercase w-100 fw-bold">select</a>
						<div class="text-end">
							<div class="accordion view-details">
								<div class="card">
									<div class="card-header p-0 pt-3" data-bs-toggle="collapse" data-bs-target="#view-details-3" aria-expanded="false" aria-controls="#view-details-3">
										<span class="fw-semibold pe-3 text-primary">View Details</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div id="view-details-3" class="content-detail accordion-collapse collapse mt-4" style="border-top: 1px dashed #545454">
						<div class="accordion-body pt-3">
							<nav>
								<div class="nav nav-tabs" id="nav-tab" role="tablist">
									<button class="nav-link active" id="nav-departing-flight-detail-1-tab" data-bs-toggle="tab" data-bs-target="#nav-departing-flight-detail-1" type="button" role="tab" aria-controls="nav-departing-flight-detail-1" aria-selected="true">Flight Detail</button>
									<button class="nav-link" id="nav-fare-detail-1-tab" data-bs-toggle="tab" data-bs-target="#nav-fare-detail-1" type="button" role="tab" aria-controls="nav-fare-detail-1" aria-selected="false">Fare Summary</button>
									<button class="nav-link" id="nav-departing-fare-rule-1-tab" data-bs-toggle="tab" data-bs-target="#nav-departing-fare-rule-1" type="button" role="tab" aria-controls="nav-departing-fare-rule-1" aria-selected="false">Fare Rules</button>
								</div>
							</nav>
							<div class="tab-content">
								<div class="tab-pane fade show active" id="nav-departing-flight-detail-1" role="tabpanel" aria-labelledby="nav-departing-flight-detail-1-tab" tabindex="0">
									<div class="p-4 rounded border border-top-0 rounded-bottom-4">
										<div class="row">
											<div class="col-12">
												<div class="rounded-3 border p-3 px-4">
													<div class="d-flex gap-4 align-items-center mb-3">
														<div class="flight-time border rounded-4 text-center px-3 py-2">
															<h3>09:30</h3>
															<img src="{{ asset('assets/images/airline/Bamboo_Airways.png') }}" alt="Air Asia">
														</div>
														<div>
															<h6 class="text-black fw-semibold">Bamboo Airlines - Take-off</h6>
															<small>At Changi International Airport, Singapore</small> <br>
															<small>Terminal 3</small>
														</div>
													</div>
													<div class="row small g-2">
														<div class="col-sm-3">
															<div class="fw-semibold">Flight ID: <span class="fw-normal">BB01230</span></div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-suitcase me-2"></i>Checked baggage (20kg)</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-utensils me-2"></i>Food</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-wifi me-2"></i>Wifi</div>
														</div>
														<div class="col-sm-3">
															<div class="fw-semibold">Class: <span class="fw-normal">Economy</span></div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-briefcase me-2"></i>Carry-on baggage (10kg)</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-coffee-togo me-2"></i>Drink</div>
														</div>
														<div class="col-sm-3">
															<div><img class="me-2" src="{{ asset('assets/images/usb-port.png') }}" alt="usb" width="18px">Charging power/USB port</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row my-3">
											<div class="col-12 d-flex justify-content-center">
												<div class="stop d-flex align-items-center mx-2 vertical">
													<div class="path"></div>
													<div class="ms-2">
														<div class="h6 mb-0 fw-semibold">2 Hours</div>
														<small>Direct (no stop)</small>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-12">
												<div class="rounded-3 border p-3">
													<div class="d-flex gap-4 align-items-center mb-3">
														<div class="flight-time border rounded-4 text-center px-3 py-2">
															<h3>12:45</h3>
															<img src="{{ asset('assets/images/airline/Bamboo_Airways.png') }}" alt="Air Asia">
														</div>
														<div>
															<h6 class="text-black fw-semibold">Bamboo Airlines - Take-off</h6>
															<small>At Changi International Airport, Singapore</small> <br>
															<small>Terminal 3</small>
														</div>
													</div>
													<div class="row small g-2">
														<div class="col-sm-3">
															<div class="fw-semibold">Flight ID: <span class="fw-normal">BB01230</span></div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-suitcase me-2"></i>Checked baggage (20kg)</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-utensils me-2"></i>Food</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-wifi me-2"></i>Wifi</div>
														</div>
														<div class="col-sm-3">
															<div class="fw-semibold">Class: <span class="fw-normal">Economy</span></div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-briefcase me-2"></i>Carry-on baggage (10kg)</div>
														</div>
														<div class="col-sm-3">
															<div><i class="fal fa-coffee-togo me-2"></i>Drink</div>
														</div>
														<div class="col-sm-3">
															<div><img class="me-2" src="{{ asset('assets/images/usb-port.png') }}" alt="usb" width="18px">Charging power/USB port</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="nav-fare-detail-1" role="tabpanel" aria-labelledby="nav-fare-detail-1-tab" tabindex="0">
									<div class="p-4 rounded border border-top-0 rounded-bottom-4">
										<table class="table table-bordered text-center">
											<tr>
												<th>Traveler</th>
												<th>Quantity</th>
												<th>Fare</th>
												<th>Taxes & Fee</th>
												<th>Total</th>
											</tr>
											<tr>
												<td>
													<div class="d-flex justify-content-between"><span>Adults</span> <small class="text-secondary">From 12</small></div>
												</td>
												<td>1</td>
												<td>USD 200.00</td>
												<td>USD 150.00</td>
												<td>USD 350.00</td>
											</tr>
											<tr>
												<td colspan="4">Total (1 traveler, Round-trip)</td>
												<td>USD 350.00</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="tab-pane fade" id="nav-departing-fare-rule-1" role="tabpanel" aria-labelledby="nav-departing-fare-rule-1-tab" tabindex="0">
									<div class="p-4 rounded border border-top-0 rounded-bottom-4">
										<div class="d-flex mt-3">
											<div class="flex-shrink-0 me-3"><i class="h6 fal fa-ticket fa-fw"></i></div>
											<div class="flex-grow w-100">
												<h6>Ticketing Time</h6>
												<p>Once payment is confirmed, tickets will be issued within 24 hours.</p>
											</div>
										</div>
										<div class="d-flex mt-3">
											<div class="flex-shrink-0 me-3"><i class="h6 fal fa-backspace fa-fw"></i></div>
											<div class="flex-grow w-100">
												<h6>Refund Alert</h6>
												<p>Refunds may be in the form of airline vouchers</p>
											</div>
										</div>
										<div class="d-flex mt-3">
											<div class="flex-shrink-0 me-3"><i class="h6 fal fa-baby fa-fw"></i></div>
											<div class="flex-grow w-100">
												<h6>Booking with your Child/Infant</h6>
												<p>When adult tickets are booked together with child or infant tickets, tickets will be issued separately based on the passenger type. Cancellations and changes of tickets that have already been issued must also be made separately by passenger type. Fees will be charged in accordance with the policy of each ticket.</p>
											</div>
										</div>
										<div class="d-flex mt-3">
											<div class="flex-shrink-0 me-3"><i class="h6 fal fa-suitcase-rolling fa-fw"></i></div>
											<div class="flex-grow w-100">
												<h6>Baggage Allowance</h6>
												<table class="table table-bordered">
													<thead class="table-light">
														<tr><th colspan="2" class="fw-normal">Tansonnhat Intl (SGN) <i class="fal fa-long-arrow-right"></i> Suvarnabhumi Intl (BKK)</th>
													</tr></thead>
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
										<div class="d-flex mt-3">
											<div class="flex-shrink-0 me-3"><i class="h6 fal fa-map-marker-slash fa-fw"></i></div>
											<div class="flex-grow w-100">
												<h6>Cancellation &amp; Change Policies</h6>
												<p>The ticket policy is subject to the rules listed below, and these might differ from policies listed on the airline's website. Any cancellation or change requests must be made through FlyCorp platforms or to our customer support.</p>
												<table class="table table-bordered">
													<thead class="table-light">
														<tr><th colspan="3" class="fw-normal">Tansonnhat Intl (SGN) <i class="fal fa-long-arrow-right"></i> Suvarnabhumi Intl (BKK)</th>
													</tr></thead>
													<tbody>
														<tr>
															<td width="30%" rowspan="2">Cancellation Fee</td>
															<td>More than 24 hours prior to departure</td>
															<td></td>
														</tr>
														<tr>
															<td>Within 24 hours of departure</td>
															<td></td>
														</tr>
														<tr>
															<td rowspan="2">Change Fee</td>
															<td>More than 24 hours prior to departure</td>
															<td></td>
														</tr>
														<tr>
															<td>Within 24 hours of departure</td>
															<td></td>
														</tr>
													</tbody>
												</table>
												<p class="text-danger">If your flight is changed due to external factors (for example if your flight is delayed or the plane type is changed) and you need to change your flight, please refer to the latest airline policies.</p>
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
</div>