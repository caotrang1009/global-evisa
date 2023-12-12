@extends('layouts.app')

@section('content')
<section>
	<div class="container">
		<div class="row">
			<div class="d-flex align-items-center justify-content-between mb-4-5">
				<h1 class="web-title fw-800 text-black text-uppercase mb-0">booking detail</h1>
				<div class="d-flex gap-4">
					<a class="btn btn-primary rounded-3 fw-bold text-white text-uppercase fs-6 py-2 px-4 lh-md" id="btn-refund">Request refund</a>
				</div>
			</div>
			<div class="d-flex align-items-center justify-content-between mb-4-5 d-none">
				<h1 class="web-title fw-800 text-black text-uppercase mb-0">booking detail</h1>
				<div class="d-flex gap-4">
					<a class="btn btn-primary rounded-3 fw-bold text-white text-uppercase fs-6 py-2 px-4 lh-md" id="btn-pay-now">pay now</a>
					<a class="btn btn-primary rounded-3 fw-bold text-white text-uppercase fs-6 py-2 px-4 lh-md" id="btn-change-method">change payment method</a>
					<a class="btn btn-primary rounded-3 fw-bold text-white text-uppercase fs-6 py-2 px-4 lh-md" id="btn-cancel">cancel</a>
				</div>
			</div> 
			<div class="d-flex align-items-center justify-content-between mb-4-5 d-none">
				<h1 class="web-title fw-800 text-black text-uppercase mb-0">booking detail</h1>
			</div>
			<div class="mb-4-5">
				<div class="border rounded-3 px-lg-5 p-4">
					<div class="fw-bold mb-3">Booking ID: ABC1234<span class="mx-3">|</span>PNR: 12ABC3<span class="mx-3">|</span>Total: 450 USD</div>
					<div class="row g-2">
						<div class="col-lg-3 col-6">
							<div class="fw-bold">Booking date:</div>
							<div class="fw-medium">10:20 - 04/11/2023</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="fw-bold">Booking status:</div>
							<div class="fw-medium">Inprogress</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="fw-bold">Payment Method:</div>
							<div class="fw-medium">Paypal</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mb-4-5">
				<h2 class="web-header2 fw-800 text-primary text-uppercase mb-3">passenger information</h2>
				<div class="table-responsive">
					<table class="table table-bordered table-primary-subtle mb-0">
						<thead class="align-middle">
							<tr>
								<th rowspan="2">Name</th>
								<th rowspan="2">Gender</th>
								<th rowspan="2">Birth Date</th>
								<th rowspan="2">Passport Number</th>
								<th rowspan="2">Fare</th>
								<th rowspan="2">Taxes</th>
								<th rowspan="2">Travel Insurance Fee</th>
								<th class="text-center" colspan="2">Airport Priority Check-in</th>
								<th class="text-end" rowspan="2" width="200px">Total</th>
							</tr>
							<tr class="text-center">
								<th>SGN</th>
								<th>SYD</th>
							</tr>
						</thead>
						<tbody class="align-middle fw-medium medium">
							<tr>
								<td class="text-uppercase">Thanh Huyen</td>
								<td class="text-uppercase">FEMALE</td>
								<td class="text-nowrap">March 03, 2000</td>
								<td>C1235346</td>
								<td>185.00 USD</td>
								<td>299.40 USD</td>
								<td class="text-nowrap">0.00 USD <br> 0.00 USD</td>
								<td class="text-nowrap">60.00 USD</td>
								<td class="text-nowrap">20.00 USD</td>
								<td class="text-end text-nowrap">594.40 USD</td>
							</tr>
							<tr>
								<td class="text-primary text-end fw-bold fs-6" colspan="9">Grand total</td>
								<td class="text-end text-nowrap">616.40 USD<br>15,293,000 VND</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="mb-4-5">
				<h2 class="web-header2 fw-800 text-primary text-uppercase mb-3">CONTACT INFORMATION</h2>
				<div class="table-responsive">
					<table class="table table-bordered table-primary-subtle mb-0">
						<thead class="align-middle">
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Special request</th>
							</tr>
						</thead>
						<tbody class="align-middle fw-medium medium">
							<tr>
								<td>Thanh Huyền</td>
								<td>emailmailmail@gmail.com</td>
								<td>090909090</td>
								<td>Urgent</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="mb-4-5">
				<h2 class="web-header2 fw-800 text-primary text-uppercase mb-3">e-invoice</h2>
				<div class="table-responsive">
					<table class="table table-bordered table-primary-subtle mb-0">
						<thead class="align-middle">
							<tr>
								<th>Company name</th>
								<th>Company address</th>
								<th>Tax code</th>
							</tr>
						</thead>
						<tbody class="align-middle fw-medium medium">
							<tr>
								<td>Thanh Huyền</td>
								<td>emailmailmail@gmail.com</td>
								<td>090909090</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div>
				<h2 class="web-header2 fw-800 text-primary text-uppercase mb-3">TRIP</h2>
				<div class="mb-4">
					<table class="table table-bordered table-primary-subtle">
						<thead class="align-middle">
							<tr>
								<th class="p-3" colspan="5">Tan Son Nhat  Intl (SGN) -> Sydney Intl (SYD)<span class="mx-3">|</span>Friday, 04, November, 2023</th>
							</tr>
						</thead>
						<tbody class="align-middle medium">
							<tr>
								<td class="p-3">
									<div class="row align-items-center fw-bold">
										<div class="col-lg-1 col-sm-2 col-3">
											<img class="fit-contain img-fluid" src="{{ asset('assets/images/airline/vietjet_air.png') }}" alt="vietjet_air">
										</div>
										<div class="col-sm-10 col-9">
											<div class="row g-3 justify-content-between">
												<div class="col-sm-3 col-6">Vietjet Air<br>TR 305, AIRBUS A320</div>
												<div class="col-sm-3 col-6">09:30<br>SGN, Terminal 2</div>
												<div class="col-sm-3 col-6">23 hr 30 min<br>1 stop</div>
												<div class="col-sm-3 col-6">13:00<br>SYD, Terminal 1</div>
											</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="border p-3 medium fw-medium">
						<div class="d-flex flex-wrap gap-3">
							<div class="border rounded-4 logo-airline mx-lg-0 mx-auto">
								<img class="fit-contain" alt="bamboo" src="{{ asset('assets/images/airline/vietjet_air.png') }}" width="70px" height="52px">
							</div>
							<div>
								<div class="row g-3">
									<div class="col-sm-7">
										<div class="departure mb-1"><b>Departure time:</b> 09:00 AM - Fri 08, Dec 23 - Tan Son Nhat Intl</div>
										<div class="arrival mb-1"><b>Travel time:</b> 2 hr 30 min</div>
										<div class="landing-time mb-1"><b>Landing time:</b> 11:30 AM - Fri 08, Dec 23 - Changi Intl</div>
										<div class="fw-semibold mt-2">Operated by Vietjet Air - VJ 382 - Airbus A321</div>
									</div>
									<div class="col-sm-5">
										<ul class="list-unstyled lh-lg">
											<li><img class="fit-contain me-2" src="{{ asset('assets/svg/outline/bag-check.svg') }}" alt="bag-check" width="20px" height="20px"><b>Checked baggage:</b> 2 piece(s) per person</li>
											<li><img class="fit-contain me-2" src="{{ asset('assets/svg/outline/cabin.svg') }}" alt="bag-check" width="20px" height="20px"><b>Cabin:</b> ECONOMY</li>
										</ul>
									</div>
								</div>
								<div class="my-3">
									<div class="bg-primary text-white p-2 rounded-3"><img class="me-3" src="{{ asset('assets/svg/solid/information-circle-white.svg') }}" alt="information" width="24px" height="24px"> Stop to change planes in Taoyuan Intl</div>
								</div>
							</div>
						</div>
						<div class="d-flex flex-wrap gap-3">
							<div class="border rounded-4 logo-airline mx-lg-0 mx-auto">
								<img class="fit-contain" alt="bamboo" src="{{ asset('assets/images/airline/vietjet_air.png') }}" width="70px" height="52px">
							</div>
							<div>
								<div class="row g-3">
									<div class="col-sm-7">
										<div class="departure mb-1"><b>Departure time:</b> 09:00 AM - Fri 08, Dec 23 - Tan Son Nhat Intl</div>
										<div class="arrival mb-1"><b>Travel time:</b> 2 hr 30 min</div>
										<div class="landing-time mb-1"><b>Landing time:</b> 11:30 AM - Fri 08, Dec 23 - Changi Intl</div>
										<div class="fw-semibold mt-2">Operated by Vietjet Air - VJ 382 - Airbus A321</div>
									</div>
									<div class="col-sm-5">
										<ul class="list-unstyled lh-lg">
											<li><img class="fit-contain me-2" src="{{ asset('assets/svg/outline/bag-check.svg') }}" alt="bag-check" width="20px" height="20px"><b>Checked baggage:</b> 2 piece(s) per person</li>
											<li><img class="fit-contain me-2" src="{{ asset('assets/svg/outline/cabin.svg') }}" alt="bag-check" width="20px" height="20px"><b>Cabin:</b> ECONOMY</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div>
					<table class="table table-bordered table-primary-subtle">
						<thead class="align-middle">
							<tr>
								<th class="p-3" colspan="5">Sydney Intl (SYD) -> Tan Son Nhat  Intl (SGN)<span class="mx-3">|</span>Monday, 20, November, 2023</th>
							</tr>
						</thead>
						<tbody class="align-middle medium">
							<tr>
								<td class="p-3">
									<div class="row align-items-center fw-bold">
										<div class="col-lg-1 col-sm-2 col-3">
											<img class="fit-contain img-fluid" src="{{ asset('assets/images/airline/vietjet_air.png') }}" alt="vietjet_air">
										</div>
										<div class="col-sm-10 col-9">
											<div class="row g-3 justify-content-between">
												<div class="col-sm-3 col-6">Vietjet Air<br>TR 305, AIRBUS A320</div>
												<div class="col-sm-3 col-6">09:30<br>SGN, Terminal 2</div>
												<div class="col-sm-3 col-6">23 hr 30 min<br>1 stop</div>
												<div class="col-sm-3 col-6">13:00<br>SYD, Terminal 1</div>
											</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="border p-3 medium fw-medium">
						<div class="d-flex flex-wrap gap-3">
							<div class="border rounded-4 logo-airline mx-lg-0 mx-auto">
								<img class="fit-contain" alt="bamboo" src="{{ asset('assets/images/airline/vietjet_air.png') }}" width="70px" height="52px">
							</div>
							<div>
								<div class="row g-3">
									<div class="col-sm-7">
										<div class="departure mb-1"><b>Departure time:</b> 09:00 AM - Fri 08, Dec 23 - Tan Son Nhat Intl</div>
										<div class="arrival mb-1"><b>Travel time:</b> 2 hr 30 min</div>
										<div class="landing-time mb-1"><b>Landing time:</b> 11:30 AM - Fri 08, Dec 23 - Changi Intl</div>
										<div class="fw-semibold mt-2">Operated by Vietjet Air - VJ 382 - Airbus A321</div>
									</div>
									<div class="col-sm-5">
										<ul class="list-unstyled lh-lg">
											<li><img class="fit-contain me-2" src="{{ asset('assets/svg/outline/bag-check.svg') }}" alt="bag-check" width="20px" height="20px"><b>Checked baggage:</b> 2 piece(s) per person</li>
											<li><img class="fit-contain me-2" src="{{ asset('assets/svg/outline/cabin.svg') }}" alt="bag-check" width="20px" height="20px"><b>Cabin:</b> ECONOMY</li>
										</ul>
									</div>
								</div>
								<div class="my-3">
									<div class="bg-primary text-white p-2 rounded-3"><img class="me-3" src="{{ asset('assets/svg/solid/information-circle-white.svg') }}" alt="information" width="24px" height="24px"> Stop to change planes in Taoyuan Intl</div>
								</div>
							</div>
						</div>
						<div class="d-flex flex-wrap gap-3">
							<div class="border rounded-4 logo-airline mx-lg-0 mx-auto">
								<img class="fit-contain" alt="bamboo" src="{{ asset('assets/images/airline/vietjet_air.png') }}" width="70px" height="52px">
							</div>
							<div>
								<div class="row g-3">
									<div class="col-sm-7">
										<div class="departure mb-1"><b>Departure time:</b> 09:00 AM - Fri 08, Dec 23 - Tan Son Nhat Intl</div>
										<div class="arrival mb-1"><b>Travel time:</b> 2 hr 30 min</div>
										<div class="landing-time mb-1"><b>Landing time:</b> 11:30 AM - Fri 08, Dec 23 - Changi Intl</div>
										<div class="fw-semibold mt-2">Operated by Vietjet Air - VJ 382 - Airbus A321</div>
									</div>
									<div class="col-sm-5">
										<ul class="list-unstyled lh-lg">
											<li><img class="fit-contain me-2" src="{{ asset('assets/svg/outline/bag-check.svg') }}" alt="bag-check" width="20px" height="20px"><b>Checked baggage:</b> 2 piece(s) per person</li>
											<li><img class="fit-contain me-2" src="{{ asset('assets/svg/outline/cabin.svg') }}" alt="bag-check" width="20px" height="20px"><b>Cabin:</b> ECONOMY</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection