<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

			body {
				font-family: 'Montserrat';
				font-size: 14px;
				color: #000;
				font-weight: 400;
				line-height: 1.65;
			}
			small, .fs-sm {
				font-size: 10px;
			}
			medium, .fs-md {
				font-size: 12px;
			}
			.fs-base {
				font-size: 13px;
			}
			h1, h2, h3, h4, h5, h6 {
				margin-top: 0;
				margin-bottom: 0.5rem;
			}
			h4, .fs-h4 {
				font-size: 20px;
			}
			h5, .fs-h5 {
				font-size: 16px;
			}
			h6, .fs-h6 {
				font-size: 14px;
			}
			.bordered {
				border: 1px solid #D3D3D3;
			}
			.border-top {
				border-top: 1px solid #D3D3D3;
			}
			.border-bottom {
				border-bottom: 1px solid #D3D3D3;
			}
			.text-start {
				text-align: left;
			}
			.text-center {
				text-align: center;
			}
			.text-end {
				text-align: right;
			}
			.text-primary {
				color: #3B7ACC;
			}
			.text-white {
				color: #ffffff;
			}
			.text-uppercase {
				text-transform:uppercase
			}
			.bg-white {
				background-color: #ffffff;
			}
			.bg-primary {
                background-color: #3B7ACC;
            }
			.fw-extrabold {
				font-weight: 800;
			}
			.fw-bold {
				font-weight: 700;
			}
			.fw-semibold {
				font-weight: 600;
			}
			.w-100 {
				width: 100%;
			}
			table {
				width: 100%;
				border-collapse: collapse;
			}
			table tr {
				vertical-align: middle;
			}
			table th, td {
				padding: 6px;
			}
			.table-bordered th, .table-bordered td {
				border: 1px solid #D3D3D3;
			}
			a {
				text-decoration: none;
			}
			.pb-4 {
				padding-bottom:24px;
			}
			.p-0 {
				padding: 0 !important;
			}
			.mb-4 {
				margin-bottom: 24px;
			}
			.mb-3 {
				margin-bottom: 16px;
			}
			.fit-contain {
				object-fit: contain;
			}
		</style>
	</head>
	<body style="background-color:#fff">
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td align="center" border="0">
					<table class="bg-white" style="max-width:600px" cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td class="p-0">
								<table class="bg-primary text-white w-100 fs-md" cellpadding="0" cellspacing="0" border="0">
									<tr>
										<td align="center">
											<table style="max-width:550px;" cellpadding="0" cellspacing="0" border="0">
												<tr>
													<td width="48px">
														<img src="{{ asset('assets/images/new_logo.svg') }}" alt="new_logo" width="48px" height="48px">
													</td>
													<td class="fw-bold fs-h5">Global<br>eVisa</td>
													<td align="right">Hotline: (+84) 123-456-789 <br> www.globalevisa.com</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>
								<table class="bg-white w-100" cellpadding="0" cellspacing="0" border="0">
									<tr>
										<td align="center">
											<table style="max-width:550px;" cellpadding="0" cellspacing="0" border="0">
												<tr>
													<td>
														@yield('content')
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
								<br>
							</td>
						</tr>
						<tr>
							<td class="p-0">
								<table class="bg-primary text-white w-100" cellpadding="0" cellspacing="0" border="0">
									<tr>
										<td align="center">
											<table style="max-width:550px;margin-top:10px;" cellpadding="0" cellspacing="0" border="0">
												<tr>
													<td align="center" class="text-uppercase fw-bold fs-h4">THE ONE DIGI CORP</td>
												</tr>
												<tr>
													<td align="center" class="fs-md">P.S. If you need to talk to us directly, just visit our website, or reply to this email, or give us a call at +84 987 309 313</td>
												</tr>
											</table>
											<table style="max-width:550px;margin-top:10px;" cellpadding="0" cellspacing="0" border="0">
												<tr>
													<td align="center" class="text-uppercase fw-bold fs-h4">THE ONE DIGI CORP</td>
												</tr>
												<tr>
													<td align="center" class="fw-bold">Flight Ticket - Hotel Booking - Car Transfers - Travel Insurance </td>
												</tr>
												<tr>
													<td align="center" class="fs-md">40 Thien Phuoc street, ward 9, Tan Binh district, Ho Chi Minh city, Vietnam</td>
												</tr>
												<tr>
													<td align="center" class="fs-md">Call us: +84 987 309 313 </td>
												</tr>
												<tr>
													<td align="center" class="fs-md">Email us: booking@flycorp.vn</td>
												</tr>
											</table>
											<table style="max-width:550px;" cellpadding="0" cellspacing="0" border="0">
												<tr>
													<td align="center">
														<table>
															<tr>
																<td align="right" width="40%">
																	<span style="border:1px solid #fff;border-radius:50%;width:32px;height:32px;display:flex;align-items:center;justify-content:center;">
																		<img src="{{ asset('assets/svg/icon/linkedin-fill.svg') }}" alt="logo" width="18px" height="18px">
																	</span>
																</td>
																<td align="center" width="20%">
																	<span style="border:1px solid #fff;border-radius:50%;width:32px;height:32px;display:flex;align-items:center;justify-content:center;">
																		<img src="{{ asset('assets/svg/icon/fb.svg') }}" alt="logo" width="18px" height="18px">
																	</span>
																</td>
																<td align="left" width="40%">
																	<span style="border:1px solid #fff;border-radius:50%;width:32px;height:32px;display:flex;align-items:center;justify-content:center;">
																		<img src="{{ asset('assets/svg/icon/twitter.svg	') }}" alt="logo" width="18px" height="18px">
																	</span>
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
				</td>
			</tr>
		</table>
	</body>
</html>
