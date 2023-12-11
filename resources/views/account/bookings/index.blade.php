@extends('layouts.account')

@section('content')
<h2 class="fw-800 custom-h3 text-primary mb-3">My bookings</h2>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr class="text-center">
			<th class="text-primary-600 text-decoration-underline py-3">Booking ID</th>
			<th class="text-primary-600 text-decoration-underline py-3">Booking date<img class="ms-1" src="{{ asset('assets/svg/outline/slide-updown-arrow.svg') }}" alt="slide-updown-arrow" width="15px" height="18px"></th>
			<th class="text-primary-600 text-decoration-underline py-3">Total<img class="ms-1" src="{{ asset('assets/svg/outline/slide-updown-arrow.svg') }}" alt="slide-updown-arrow" width="15px" height="18px"></th>
			<th class="text-primary-600 text-decoration-underline py-3">Status</th>
			<th class="text-primary-600 text-decoration-underline py-3">Payment</th>
			<th class="text-primary-600 text-decoration-underline py-3">Action</th>
		</tr>
		<tr class="text-center align-middle">
			<td><a href="{{ url('/account/bookings') }}">ABC_123</a></td>
			<td class="text-black text-opacity-9">09:34<br>11/07/2023</td>
			<td class="text-black text-opacity-9">money</td>
			<td class="text-success fw-bold">Completed</td>
			<td class="text-danger fw-bold">Unpaid</td>
			<td><img src="{{ asset('assets/svg/outline/eye-blue.svg') }}" alt="eye" width="24px" height="24px"></td>
		</tr>
	</table>
</div>
@endsection