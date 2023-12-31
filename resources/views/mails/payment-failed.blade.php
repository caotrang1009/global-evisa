@extends('mails.template')

@section('content')
	<p class="text-primary fs-h5 fw-extrabold">BOOKING ID : F699600811 - YOUR PAYMENT HAVE FAILED</p>
	<p class="fw-semibold mb-3">Dear <span class="text-primary">Customer’s name,</span></p>
	<p>Thank you for booking with us!<br>We would like to remind you that we have not yet received payment for <b>Booking ID: [F699600811]</b>, which was placed on <b>[May 5th, 2023]</b>.The total amount is <b>[$295.00]</b>, and you can pay by either bank transfer, PayPal or cash at our office.<br>Please don’t hesitate to contact us by <b>hotline: [+84 987 309 313]</b> or <b>email: [booking@flycorp.vn]</b>. We will be happy to assist you in any way possible.</p>
	<p>The total amount you need to pay : <span class="text-primary fw-extrabold">XXX USD</span></p>
	<p>You can choose the following payment methods:</p>
	<table>
		<tr>
			<td width="48px"><img class="fit-contain" src="{{ asset('assets/images/payment-method/paypal/icon-color.png') }}" alt="paypal" width="48px" height="48px"></td>
			<td>
				<b class="text-uppercase">PAYPAL</b><br><span>You payment method : via PayPal</span>
			</td>
			<td>
				<a class="bg-primary text-uppercase fs-sm fw-extrabold" href="#" style="padding:.5rem .75rem;border-radius:10px;color:white !important">Pay online</a>
			</td>
		</tr>
		<tr>
			<td width="48px"><img class="fit-contain" src="{{ asset('assets/images/payment-method/onepay/icon.png') }}" alt="onepay" width="48px" height="48px"></td>
			<td>
				<b class="text-uppercase">ONEPAY</b><br><span>You payment method : via OnePay</span>
			</td>
			<td>
				<a class="bg-primary text-uppercase fs-sm fw-extrabold" href="#" style="padding:.5rem .75rem;border-radius:10px;color:white !important">Pay online</a>
			</td>
		</tr>
		<tr>
			<td width="48px"><img class="fit-contain" src="{{ asset('assets/images/payment-method/bank/icon-color.png') }}" alt="bank" width="40px" height="40px"></td>
			<td>
				<b class="text-uppercase">bank transfer</b><br><span>You payment method : Bank transfer</span>
			</td>
		</tr>
	</table>
	<br>
	<div style="border:0.5px solid #C8C6C6;border-radius:5px;">
		<table>	
			<tr>
				<td width="50%" valign="top" style="border-right:0.5px solid #C8C6C6;">
					<table>
						<tr>
							<td width="20%" align="right"><img src="{{ asset('assets/svg/outline/wallet.svg') }}" alt="wallet" width="20px" height="20px"></td>
							<td width="80%" align="left">
								<b class="fw-bold">Account number (USD)</b><br><span class="text-primary fw-semibold">116002939886</span>
							</td>
						</tr>
					</table>
					<table>
						<tr>
							<td width="12px"><img src="{{ asset('assets/svg/solid/tick.svg') }}" alt="tick" width="12px" height="12px"></td>
							<td><span class="fw-semibold">Bank name:</span> <br> VIETINBANK</td>
						</tr>
						<tr>
							<td width="12px"><img src="{{ asset('assets/svg/solid/tick.svg') }}" alt="tick" width="12px" height="12px"></td>
							<td><span class="fw-semibold">Account name:</span> <br> CONG TY CO PHAN THE ONE DIGI</td>
						</tr>
						<tr>
							<td width="12px"><img src="{{ asset('assets/svg/solid/tick.svg') }}" alt="tick" width="12px" height="12px"></td>
							<td><span class="fw-semibold">Swift code : <br> ICBVVNVX900</span></td>
						</tr>
						<tr>
							<td width="12px"><img src="{{ asset('assets/svg/solid/tick.svg') }}" alt="tick" width="12px" height="12px"></td>
							<td><span class="fw-semibold">Details of Payment:</span> <br> F699600811_54XK3S</td>
						</tr>
					</table>
				</td>
				<td width="50%" valign="top" style="border-left:0.5px solid #C8C6C6;">
					<table>
						<tr>
							<td width="20%" align="right"><img src="{{ asset('assets/svg/outline/wallet.svg') }}" alt="wallet" width="20px" height="20px"></td>
							<td width="80%" align="left">
								<b class="fw-bold">Account number (VND)</b><br><span class="text-primary fw-semibold">116856218888</span>
							</td>
						</tr>
					</table>
					<table>
						<tr>
							<td width="12px"><img src="{{ asset('assets/svg/solid/tick.svg') }}" alt="tick" width="12px" height="12px"></td>
							<td><span class="fw-semibold">Bank name:</span> <br> VIETINBANK</td>
						</tr>
						<tr>
							<td width="12px"><img src="{{ asset('assets/svg/solid/tick.svg') }}" alt="tick" width="12px" height="12px"></td>
							<td><span class="fw-semibold">Account name:</span> <br> CONG TY CO PHAN THE ONE DIGI</td>
						</tr>
						<tr>
							<td width="12px"><img src="{{ asset('assets/svg/solid/tick.svg') }}" alt="tick" width="12px" height="12px"></td>
							<td><span class="fw-semibold">Details of Payment:</span> <br> F699600811_54XK3S</td>
						</tr>
					</table>
				</td>	
			</tr>
		</table>
	</div>
	<br>
	<div class="fs-h5 fw-extrabold text-uppercase">BOOKING INFORMATION</div>
	<table>
		<tr>
			<td width="20px"><img src="{{ asset('assets/svg/solid/send-fast.svg') }}" alt="send" width="20px" height="15px"></td>
			<td><b class="fw-semibold">Booking ID:</b><br>F699600811</td>
			<td width="20px"><img src="{{ asset('assets/svg/solid/send-fast.svg') }}" alt="send" width="20px" height="15px"></td>
			<td><b class="fw-semibold">Booking Date:</b><br>10/11/2023 14:20</td>
			<td width="20px"><img src="{{ asset('assets/svg/solid/send-fast.svg') }}" alt="send" width="20px" height="15px"></td>
			<td><b class="fw-semibold">Booking status:</b><br>Pending</td>
		</tr>
		<tr>
			<td width="20px"><img src="{{ asset('assets/svg/solid/send-fast.svg') }}" alt="send" width="20px" height="15px"></td>
			<td><b class="fw-semibold">Payment Method:</b><br>Bank Transfer</td>
		</tr>
		<tr>
			<td colspan="6" class="fw-semibold p-0">Please check the information and payment before 19:10 PM, Nov 10, 2023.</td>
		</tr>
	</table>
	<br>
	<h6 class="fs-h5 fw-extrabold text-uppercase">Passenger List & Price Details</h6>
	<table class="table-bordered">
		<tbody>
			<tr>
				<th align="left" colspan="2" width="36%">Fullname</th>
				<td align="left" width="32%">Ms.Jennie</td>
				<td align="left" width="32%">Mr.Adam</td>
			</tr>
			<tr>
				<th align="left" colspan="2">Fare</th>
				<td align="left" class="fw-medium medium border-end">100 USD</td>
				<td align="left">100 USD</td>
			</tr>
			<tr>
				<th align="left" colspan="2">Taxes</th>
				<td align="left" class="fw-medium medium border-end">50 USD</td>
				<td align="left">50 USD</td>
			</tr>
			<tr>
				<th align="left" colspan="2">Travel Insurance</th>
				<td align="left" class="fw-medium medium border-end">10 USD</td>
				<td align="left">10 USD</td>
			</tr>
			<tr>
				<th align="left" rowspan="2" class="custom-rowspan border-end">Airport Services</th>
				<th align="center" style="width: 80px;">TYN</th>
				<td align="left" class="fw-medium medium border-end">20 USD</td>
				<td align="left">20 USD</td>
			</tr>
			<tr>
				<th align="center">NYC</th>
				<td align="left" class="fw-medium medium border-end"></td>
				<td align="left"></td>
			</tr>
			<tr>
				<th align="left" colspan="2">Total</th>
				<td align="left" class="fw-medium medium border-end">180 USD</td>
				<td align="left">180 USD</td>
			</tr>
			<tr>
				<th align="left" colspan="2">Grand Total:</th>
				<td align="left" colspan="2" class="fw-semibold medium">360 USD</td>
			</tr>
		</tbody>    
	</table>
	<br>
	<h6 class="fs-h5 fw-extrabold text-uppercase">Contact Information</h6>
	<table class="table-bordered">
		<tr>
			<td	 class="fw-bold">Full Name:</td>
			<td class="fs-md">Huyen Test</td>
		</tr>
		<tr>
			<td class="fw-bold">Email:</td>
			<td class="fs-md">trthanhhuyen33@gmail.com</td>
		</tr>
		<tr>
			<td class="fw-bold">Phone Number :</td>
			<td class="fs-md">+84766876971</td>
		</tr>
	</table>
	<br>
	<h6 class="fs-h5 fw-extrabold text-uppercase">FLIGHT DETAILS</h6>
	<div class="mb-3" style="border-radius: 8px;border: 0.5px solid #C8C6C6;padding:6px">
		<table>
			<tr class="text-primary">
				<th align="left" valign="top">Tansonnhat Intl (SGN) → Sydney Intl (SYD)</th>
				<th align="right" valign="top">Wed 22, Nov 23</th>	
			</tr>
			<tr>
				<td colspan="2">
					<table>
						<tr>
							<td>
								<table>
									<tr>
										<td width="16%" style="position: relative">
											<table style="position: absolute; height:100%; top:0">
												<tr>
													<td>
														<b>21:00</b>
														<div class="fs-sm">30th Dec</div>
													</td>
												</tr>
												<tr>
													<td class="fs-sm">6 h 34 m</td>
												</tr>
												<tr>
													<td>
														<b>00:34</b><sup class="text-secondary fs-sm">+1</sup>
														<div class="fs-sm">31st Dec</div>
													</td>
												</tr>
											</table>
										</td>
										<td align="center" class="stop">
											<img src="{{ asset('assets/svg/icon/bar.svg') }}" alt="bar" width="100%">
										</td>
										<td>
											<table class="fw-md">
												<tr>
													<td>
														<b>Newyork (NY) (JFK)</b>
														<div class="fs-md">John F. Kennedy International Airport</div>
													</td>
												</tr>
												<tr>
													<td>
														<table>
															<tr>
																<td width="40px" valign="bottom">
																	<img class="fit-contain" src="{{ asset('assets/images/airline/air_asia.png') }}" style="border-radius: 3px;border: 0.25px solid #A9A9A9; padding:3px;" width="40px" alt="air_asia">
																</td>
																<td>
																	<div class="fw-md">Bamboo Airlines</div>
																	<div class="d-flex gap-2 flex-wrap fs-sm">
																		<span>Economy Class</span>
																		<span>AA 185</span>
																		<span>Boeing 777-300ER</span>
																	</div>
																</td>
															</tr>
														</table>
													</td>
												</tr>
												<tr>
													<td>
														<b>Los Angeles (CA) (LAX)</b>
														<div class="fs-md">Los Angeles International Airport</div>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>
								<div class="fs-md fw-md d-flex gap-2" style="background-color: #EDEDED; border-radius: 3px; padding: 6px 8px; margin-left: 12px">
									<span>Delay 21 hours 51 minutes - Los Angeles (CA) (LAX)</span>
									<span class="text-secondary fw-semibold">Overnight delay</span>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<table>
									<tr>
										<td width="16%" style="position: relative">
											<table style="position: absolute; height:100%; top:0">
												<tr>
													<td>
														<b>22:25<sup class="text-secondary fs-sm">+</sup></b>
														<div class="fs-sm">31st Dec</div>
													</td>
												</tr>
												<tr>
													<td class="fs-sm">6 h 34 m</td>
												</tr>
												<tr>
													<td>
														<b>09:00</b><sup class="text-secondary fs-sm">+3</sup>
														<div class="fs-sm">2nd Jan</div>
													</td>
												</tr>
											</table>
										</td>
										<td align="center" class="stop">
											<img src="{{ asset('assets/svg/icon/bar.svg') }}" alt="bar" width="100%">
										</td>
										<td>
											<table class="fw-md">
												<tr>
													<td>
														<b>Los Angeles (CA) (LAX)</b>
														<div class="fs-md">Los Angeles International Airport</div>
													</td>
												</tr>
												<tr>
													<td>
														<table>
															<tr>
																<td width="40px" valign="bottom">
																	<img class="fit-contain" src="{{ asset('assets/images/airline/air_asia.png') }}" style="border-radius: 3px;border: 0.25px solid #A9A9A9; padding:3px;" width="40px" alt="air_asia">
																</td>
																<td>
																	<div class="fw-md">Bamboo Airlines</div>
																	<div class="d-flex gap-2 flex-wrap fs-sm">
																		<span>Economy Class</span>
																		<span>AA 77</span>
																		<span>Boeing 777-300ER</span>
																	</div>
																</td>
															</tr>
														</table>
													</td>
												</tr>
												<tr>
													<td>
														<b>Sydney (SYD)</b>
														<div class="fs-md">Los Angeles International Airport</div>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
	<div class="mb-3" style="border-radius: 8px;border: 0.5px solid #C8C6C6;padding:6px">
		<table>
			<tr class="text-primary">
				<th align="left" valign="top">Tansonnhat Intl (SGN) → Sydney Intl (SYD)</th>
				<th align="right" valign="top">Wed 22, Nov 23</th>	
			</tr>
			<tr>
				<td colspan="2">
					<table>
						<tr>
							<td>
								<table>
									<tr>
										<td width="16%" style="position: relative">
											<table style="position: absolute; height:100%; top:0">
												<tr>
													<td>
														<b>21:00</b>
														<div class="fs-sm">30th Dec</div>
													</td>
												</tr>
												<tr>
													<td class="fs-sm">6 h 34 m</td>
												</tr>
												<tr>
													<td>
														<b>00:34</b><sup class="text-secondary fs-sm">+1</sup>
														<div class="fs-sm">31st Dec</div>
													</td>
												</tr>
											</table>
										</td>
										<td align="center" class="stop">
											<img src="{{ asset('assets/svg/icon/bar.svg') }}" alt="bar" width="100%">
										</td>
										<td>
											<table class="fw-md">
												<tr>
													<td>
														<b>Newyork (NY) (JFK)</b>
														<div class="fs-md">John F. Kennedy International Airport</div>
													</td>
												</tr>
												<tr>
													<td>
														<table>
															<tr>
																<td width="40px" valign="bottom">
																	<img class="fit-contain" src="{{ asset('assets/images/airline/air_asia.png') }}" style="border-radius: 3px;border: 0.25px solid #A9A9A9; padding:3px;" width="40px" alt="air_asia">
																</td>
																<td>
																	<div class="fw-md">Bamboo Airlines</div>
																	<div class="d-flex gap-2 flex-wrap fs-sm">
																		<span>Economy Class</span>
																		<span>AA 185</span>
																		<span>Boeing 777-300ER</span>
																	</div>
																</td>
															</tr>
														</table>
													</td>
												</tr>
												<tr>
													<td>
														<b>Los Angeles (CA) (LAX)</b>
														<div class="fs-md">Los Angeles International Airport</div>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>
								<div class="fs-md fw-md d-flex gap-2" style="background-color: #EDEDED; border-radius: 3px; padding: 6px 8px; margin-left: 12px">
									<span>Delay 21 hours 51 minutes - Los Angeles (CA) (LAX)</span>
									<span class="text-secondary fw-semibold">Overnight delay</span>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<table>
									<tr>
										<td width="16%" style="position: relative">
											<table style="position: absolute; height:100%; top:0">
												<tr>
													<td>
														<b>22:25<sup class="text-secondary fs-sm">+</sup></b>
														<div class="fs-sm">31st Dec</div>
													</td>
												</tr>
												<tr>
													<td class="fs-sm">6 h 34 m</td>
												</tr>
												<tr>
													<td>
														<b>09:00</b><sup class="text-secondary fs-sm">+3</sup>
														<div class="fs-sm">2nd Jan</div>
													</td>
												</tr>
											</table>
										</td>
										<td align="center" class="stop">
											<img src="{{ asset('assets/svg/icon/bar.svg') }}" alt="bar" width="100%">
										</td>
										<td>
											<table class="fw-md">
												<tr>
													<td>
														<b>Los Angeles (CA) (LAX)</b>
														<div class="fs-md">Los Angeles International Airport</div>
													</td>
												</tr>
												<tr>
													<td>
														<table>
															<tr>
																<td width="40px" valign="bottom">
																	<img class="fit-contain" src="{{ asset('assets/images/airline/air_asia.png') }}" style="border-radius: 3px;border: 0.25px solid #A9A9A9; padding:3px;" width="40px" alt="air_asia">
																</td>
																<td>
																	<div class="fw-md">Bamboo Airlines</div>
																	<div class="d-flex gap-2 flex-wrap fs-sm">
																		<span>Economy Class</span>
																		<span>AA 77</span>
																		<span>Boeing 777-300ER</span>
																	</div>
																</td>
															</tr>
														</table>
													</td>
												</tr>
												<tr>
													<td>
														<b>Sydney (SYD)</b>
														<div class="fs-md">Los Angeles International Airport</div>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
	<p>
		<i>
			<b class="text-primary">Note* :</b> <br>
			<small>Lorem ipsum dolor sit amet consectetur. Nec condimentum id diam vel nulla bibendum fames nunc blandit. Elit donec interdum accumsan vitae faucibus enim ac malesuada ultrices. Aliquam mollis et amet sit lacus. Amet purus placerat tellus enim tristique at egestas.</small>
		</i>
	</p>
	<br>
	<h6 class="text-uppercase fw-extrabold fs-h4">FAQs</h6>
	<table>
		<tr>
			<td style="padding: 6px 0">
				<b class="fs-h5">Change or cancel your trip?</b> <br>
				Your booking can be changed upon request without charge before our team has issued your ticket. Kindly contact us via+84 987 309 313 for further information.
			</td>
		</tr>
		<tr>
			<td style="padding: 6px 0">
				<b class="fs-h5">Tax invoices?</b> <br>
				Should you request to issue Tax invoices, kindly provide us the company's information. Tax invoices are issued within 24hrs after ticket issuance according to our policy. We do not take responsibility if no Tax invoices are issued due to guests' lack of information.
			</td>
		</tr>
		<tr>
			<td style="padding: 6px 0">Please visit <span class="text-primary fw-bold">FAQs</span> for more details.</td>
		</tr>
    </table>
@endsection
