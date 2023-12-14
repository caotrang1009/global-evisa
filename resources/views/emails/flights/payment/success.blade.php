@extends('emails.template')

@section('content')
	<p class="text-primary fs-h5 fw-extrabold">BOOKING ID : F699600811 - SUCCESSFUL PAYMENT CONFIRMATION!</p>
	<p class="fw-semibold mb-3">Dear <span class="text-primary">Customer’s name,</span></p>
	<p>Thank you for using our service! We’ve successfully processed your payment of 840.50 USD</p>
	<div class="fs-h5 fw-extrabold text-uppercase">Payment INFORMATION</div>
	<table>
		<tr>
			<td class="p-0" width="35%">
				<table>
					<tr>
						<td width="14px" align="right"><img src="{{ asset('assets/svg/outline/wallet.svg') }}" alt="wallet" width="20px" height="20px"></td>
						<td align="left">Amount paid :<br><span class="text-primary fw-semibold">116002939886</span></td>
					</tr>
				</table>
			</td>
			<td class="p-0">
				<table>
					<tr>
						<td width="14px" align="right"><img src="{{ asset('assets/svg/outline/calendar-blue.svg') }}" alt="calendar" width="20px" height="20px"></td>
						<td align="left">Date paid :<br><span class="text-primary fw-semibold">10/11/2023</span></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
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
			<td><b class="fw-semibold">PNR Code:</b><br>54XK3S</td>
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
		<tr>
			<th>Passenger</th>
			<th>Gender</th>
			<th>Birth Date</th>
			<th>Fare</th>
			<th>Taxes</th>
			<th>Total</th>
		</tr>
		<tr class="fs-md">
			<td>HUYEN/TEST</td>
			<td>FEMALE</td>
			<td>Mar 03, 2000</td>
			<td>586.00 USD</td>
			<td>254.50 USD</td>
			<td>840.50 USD</td>
		</tr>
		<tr>
			<td class="fw-bold fs-h5" align="center" colspan="4">Grand total</td>
			<td class="fw-bold fs-md" align="right" colspan="2">840.50 USD <br> 21,012,500.00 VND</td>
		</tr>
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
	<div class="mb-3" style="border-radius: 8px;border: 0.5px solid #545454;padding:6px">
		<table>
			<tr class="fs-md text-primary">
				<th align="left">Tansonnhat Intl (SGN) -> Sydney Intl (SYD)</th>
				<th align="right">Friday, 04, November, 2023</th>	
			</tr>
			<tr>
				<td colspan="2">
					<div style="border-radius: 8px;border: 0.5px solid #545454;margin-bottom:12px;padding:6px">
						<table valign="top" class="fs-sm">
							<tr>
								<td width="28px"><img class="fit-contain" src="{{ asset('assets/images/airline/air_asia.png') }}" alt="air_asia" width="28px" height="28px"></td>
								<td valign="top">
									<b>AIR ASIA</b>
									<p>TR 303, AIRBUS A320</p>
									<b>18:15 PM . Wed 22, Nov 23 . Tan Son Nhat Intl (SGN)</b>
								</td>
								<td width="20%" valign="top">
									<b>18:15 PM</b>
									<p>SGN, Terminal 2</p>
								</td>
								<td width="16%" valign="top">
									<b>14hr 45 min</b>
									<p>1 stop</p>
								</td>
								<td width="20%" valign="top">
									<b>13:00 PM</b>
									<p>SYD, Terminal 1</p>
								</td>
							</tr>
						</table>
					</div>
					<div style="border-radius: 8px;border: 0.5px solid #545454;margin-bottom:12px;padding:6px">
						<table valign="top" class="fs-sm">
							<tr>
								<td width="28px"><img class="fit-contain" src="{{ asset('assets/images/airline/air_asia.png') }}" alt="air_asia" width="28px" height="28px"></td>
								<td valign="top">
									<span>
										Travel time: 1 hr 55 min<br>
										<b>21:10 PM . Wed 22, Nov 23 . Changi Intl (SIN)</b><br>
										Operated by AIR ASIA. TR 303 . AIRBUS A320
									</span>
									<p>Stop to change planes in Changi Intl (SIN)</p>
									<b>02:00 AM . Thu 23, Nov 23 . Changi Intl (SIN)</b>
								</td>
								<td width="35%" valign="top"><span>Checked baggage : 30 KG</span><br><span>Cabin: ECONOMY</span></td>
							</tr>
						</table>
					</div>
					<div style="border-radius: 8px;border: 0.5px solid #545454;margin-bottom:12px;padding:6px">
						<table valign="top" class="fs-sm">
							<tr>
								<td width="28px"><img class="fit-contain" src="{{ asset('assets/images/airline/air_asia.png') }}" alt="air_asia" width="28px" height="28px"></td>
								<td valign="top">
									<span>
										Travel time: 8hr 0 min<br>
										<b>13:00 PM . Thu 23, Nov 23 . Sydney Intl (SYD)</b><br>
										Operated by AIR ASIA. TR 2 . BOEING 787-9
									</span>
								</td>
								<td width="35%" valign="top"><span>Checked baggage : 30 KG</span><br><span>Cabin: ECONOMY</span></td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<div style="border-radius: 8px;border: 0.5px solid #545454;padding:6px">
		<table>
			<tr class="fs-md text-primary">
				<th align="left">Sydney Intl (SYD) → Tansonnhat Intl (SGN))</th>
				<th align="right">Thu 30, Nov 23</th>	
			</tr>
			<tr>
				<td colspan="2">
					<div style="border-radius: 8px;border: 0.5px solid #545454;margin-bottom:12px;padding:6px">
						<table valign="top" class="fs-sm">
							<tr>
								<td width="28px"><img class="fit-contain" src="{{ asset('assets/images/airline/air_asia.png') }}" alt="air_asia" width="28px" height="28px"></td>
								<td valign="top">
									<b>AIR ASIA</b>
									<p>TR 303, AIRBUS A320</p>
									<b>18:15 PM . Wed 22, Nov 23 . Tan Son Nhat Intl (SGN)</b>
								</td>
								<td width="20%" valign="top">
									<b>18:15 PM</b>
									<p>SGN, Terminal 2</p>
								</td>
								<td width="16%" valign="top">
									<b>14hr 45 min</b>
									<p>1 stop</p>
								</td>
								<td width="20%" valign="top">
									<b>13:00 PM</b>
									<p>SYD, Terminal 1</p>
								</td>
							</tr>
						</table>
					</div>
					<div style="border-radius: 8px;border: 0.5px solid #545454;margin-bottom:12px;padding:6px">
						<table valign="top" class="fs-sm">
							<tr>
								<td width="28px"><img class="fit-contain" src="{{ asset('assets/images/airline/air_asia.png') }}" alt="air_asia" width="28px" height="28px"></td>
								<td valign="top">
									<span>
										Travel time: 1 hr 55 min<br>
										<b>21:10 PM . Wed 22, Nov 23 . Changi Intl (SIN)</b><br>
										Operated by AIR ASIA. TR 303 . AIRBUS A320
									</span>
									<p>Stop to change planes in Changi Intl (SIN)</p>
									<b>02:00 AM . Thu 23, Nov 23 . Changi Intl (SIN)</b>
								</td>
								<td width="35%" valign="top"><span>Checked baggage : 30 KG</span><br><span>Cabin: ECONOMY</span></td>
							</tr>
						</table>
					</div>
					<div style="border-radius: 8px;border: 0.5px solid #545454;margin-bottom:12px;padding:6px">
						<table valign="top" class="fs-sm">
							<tr>
								<td width="28px"><img class="fit-contain" src="{{ asset('assets/images/airline/air_asia.png') }}" alt="air_asia" width="28px" height="28px"></td>
								<td valign="top">
									<span>
										Travel time: 8hr 0 min<br>
										<b>13:00 PM . Thu 23, Nov 23 . Sydney Intl (SYD)</b><br>
										Operated by AIR ASIA. TR 2 . BOEING 787-9
									</span>
								</td>
								<td width="35%" valign="top"><span>Checked baggage : 30 KG</span><br><span>Cabin: ECONOMY</span></td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<br>
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
