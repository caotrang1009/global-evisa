@extends('layouts.account')
@php
	$originLocation = $airports->get($booking->origin_location_code);
	$destinationLocation = $airports->get($booking->destination_location_code);
	$check_vietjet = false;
	$booking->extra_services = \App\Models\FlightExtra::where('booking_id', $booking->id)->get();
	if ($originLocation->country == 'Vietnam' && $originLocation->country == $destinationLocation->country) { 
		foreach ($booking->flights as $i => $flight) {
			$segments = \App\Models\FlightSegment::where('flight_id', $flight->id)->get();
			$firstSegment = $segments->first();
			if ($firstSegment->operating_carrier_code == 'VJ') {
				$check_vietjet = true;
			}
		}
	}
	$count_column = 5;
@endphp
@section('content')
<h2 class="h4 mb-4">{{ __('page.my-bookings.booking-id') }}: {{ $booking->order_ref }}</h2>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr class="bg-secondary bg-opacity-10">
			<th>ID</th>
			<th>{{ __('page.my-bookings.pnr-code') }}</th>
			<th class="text-end">{{ __('page.my-bookings.date') }}</th>
			<th class="text-end">{{ __('page.my-bookings.total') }}</th>
			<th class="text-end">{{ __('page.my-bookings.status') }}</th>
			<th class="text-end">{{ __('page.my-bookings.payment') }}</th>
		</tr>
		<tr>
			<td>{{ $booking->order_ref }}</td>
			<td>{{ $check_vietjet == false && $booking->direction != 'multi-city' && !$booking->payment_status ? $booking->associated_records_reference : '' }}</td>
			<td class="text-end text-nowrap">{{ date('M d, Y', strtotime($booking->booking_date)) }}</td>
			<td class="text-end text-nowrap">{{ number_format($booking->grand_total + (!empty($booking->insurance_fee) ? $booking->insurance_fee : 0), 2) }} {{ $booking->currency }}</td>
			<td class="text-end">
				@if (!$booking->pnr_status)
				<span class="text-danger">{{ __('page.my-bookings.canceled') }}</span>
				@else
				<span class="text-success">{{ __('page.my-bookings.ok') }}</span>
				@endif
			</td>
			<td class="text-end">
				@if (!$booking->payment_status)
				<span class="text-danger">{{ __('page.my-bookings.unpaid') }}</span>
				@else
				<span class="text-success">{{ __('page.my-bookings.paid') }}</span>
				@endif
			</td>
		</tr>
	</table>
</div>
<div class="mt-3 table-responsive">
	<table class="table table-bordered">
		@php
			foreach ($booking->flights as $i => $flight) {
				$segments = \App\Models\FlightSegment::where('flight_id', $flight->id)->get();
				$firstSegment = $segments->first();
				$lastSegment = $segments->last();
		@endphp
		<tr class="bg-secondary bg-opacity-10">
			<th>{{ $airports->get($firstSegment->departure_iata_code)->name }} ({{ $firstSegment->departure_iata_code }}) <i class="fal fa-long-arrow-right mx-1"></i> {{ $airports->get($lastSegment->arrival_iata_code)->name }} ({{ $lastSegment->arrival_iata_code }})</th>
		</tr>
		<tr class="bg-light">
			<td>{{ date('D d, M y', strtotime($firstSegment->departure_at)) }}</td>
		</tr>
		<tr>
			<td class="p-0">
				<table class="table table-borderless mb-2">
					<tr class="bg-light border-bottom">
						<td width="36px">
							<img width="36px" alt="" src="https://www.gstatic.com/flights/airline_logos/70px/dark/{{ $firstSegment->carrier_code }}.png">
						</td>
						<td>
							<h6>{{ $airlines->get($firstSegment->carrier_code)->business_name }}</h6>
							<small>{{ (($firstSegment->operating_carrier_code != $firstSegment->carrier_code) ? $firstSegment->operating_carrier_code.':'.$firstSegment->carrier_code : $firstSegment->carrier_code) }} {{ $firstSegment->carrier_number }}, {{ $firstSegment->carrier_aircraft }}</small>
						</td>
						<td width="20%">
							<h6>{{ date('H:i A', strtotime($firstSegment->departure_at)) }}</h6>
							<small>{{ $firstSegment->departure_iata_code }}, {{ __('flight.search-flights.terminal') }} {{ $firstSegment->departure_terminal }}</small>
						</td>
						<td width="15%" class="text-center">
							<div class="stop">
								<h6>{{ (new \DateInterval($flight->duration))->format('%h hr %i min') }}</h6>
								<div class="path"></div>
								<small>{{ $flight->stops ? $flight->stops." ".__('flight.search-flights.flight-details.stop').(($flight->stops > 1 && App::getLocale() == 'en') ? "s" : "") : __('flight.search-flights.flight-details.nonstop') }}</small>
							</div>
						</td>
						<td width="20%" class="text-end">
							<h6>{{ date('H:i A', strtotime($lastSegment->arrival_at)) }}</h6>
							<small>{{ $lastSegment->arrival_iata_code }}, {{ __('flight.search-flights.terminal') }} {{ $lastSegment->arrival_terminal }}</small>
						</td>
					</tr>
				</table>
				@php
					foreach ($segments as $s => $segment) {
						$fare = \App\Models\FlightFare::where('segment_id', $segment->segment_id)->first();
				@endphp
				<table class="table table-borderless">
					<tr>
						<td width="36px">
							<img width="36px" alt="" src="https://www.gstatic.com/flights/airline_logos/70px/dark/{{ $segment->operating_carrier_code }}.png">
						</td>
						<td width="60%">
							<h6>{{ date('H:i A', strtotime($segment->departure_at)) }} . {{ date('D d, M y', strtotime($segment->departure_at)) }} . {{ $airports->get($segment->departure_iata_code)->name }} ({{ $segment->departure_iata_code }})</h6>
							<p><small>{{ __('flight.search-flights.flight-details.travel-time') }}: {{ (new \DateInterval($segment->duration))->format('%h hr %i min') }}</small></p>
							<h6>{{ date('H:i A', strtotime($segment->arrival_at)) }} . {{ date('D d, M y', strtotime($segment->arrival_at)) }} . {{ $airports->get($segment->arrival_iata_code)->name }} ({{ $segment->arrival_iata_code }})</h6>
							<p><small>{{ __('flight.search-flights.flight-details.operated-by') }} {{ $airlines->get($segment->operating_carrier_code)->business_name }} . {{ (($segment->operating_carrier_code != $segment->carrier_code) ? $segment->operating_carrier_code.':'.$segment->carrier_code : $segment->carrier_code) }} {{ $segment->carrier_number }} . {{ $segment->carrier_aircraft }}</small></p>
						</td>
						<td>
							<ul class="list-unstyled text-secondary small">
								<li><i class="fal fa-suitcase-rolling fa-fw me-2"></i>{{ __('flight.search-flights.flight-details.checked-baggage') }}: {{ (!empty($fare->bag_quantity) ? $fare->bag_quantity. ' ' .__('flight.search-flights.fare-rules.piece-per-person') : '') }} {{ (!empty($fare->bag_weight) ? $fare->bag_weight.' '.$fare->bag_weight_unit : '') }}</li>
								<li><i class="fal fa-loveseat fa-fw me-2"></i>{{ __('flight.search-flights.flight-details.cabin') }}: {{ $fare->cabin ?? '' }}</li>
							</ul>
						</td>
					</tr>
					@php
						if (!empty($segments[($s+1)])) {
							$nextSegment = $segments[($s+1)];
					@endphp
					<tr>
						<td></td>
						<td>
							<div class="alert alert-info p-2">
								<i class="fad fa-info-circle me-3"></i>{{ __('flight.search-flights.flight-details.stop-to-change-planes-in') }} {{ $airports->get($nextSegment->departure_iata_code)->name }} ({{ $nextSegment->departure_iata_code }})
							</div>
						</td>
						<td></td>
					</tr>
					@php
						}
					@endphp
				</table>
				@php
					}
				@endphp
			</td>
		</tr>
		@php
			}
		@endphp
	</table>
</div>
@if (count($booking->extra_services) != 0)
<div class="mt-3 table-responsive">
	<table class="table table-borderless border">
		<tr class="bg-secondary text-light">
			<th colspan="15" align="left">{{ __('mail.flight.order.extra-services') }}</th>
		</tr>
		@foreach ($booking->extra_services as $service)
			@php
						$service_type = \App\Models\BookingType::find($service->service_type_id);
			@endphp
			<tr class="border-top">
				<td colspan="2">
					<b>{{ __('flight.extra-services.service') }}</b>
					<div class="border-start border-2 bg-light p-2 my-2 text-nowrap">{{ $service_type->name }}</div>
				</td>
			</tr>
			<tr>
				@if (!empty($service->remark))
				<td colspan="2">
					<b>{{ __('flight.extra-services.requirements') }}</b>
					<div class="border-start border-2 bg-light p-2 my-2 text-nowrap">{{ $service->remark }}</div>
				</td>
				@endif
			</tr>
		@endforeach
	</table>
</div>
@endif
<div class="mt-3 table-responsive">
	<table class="table table-bordered">
		<tr class="bg-secondary bg-opacity-10 align-middle">
			<th rowspan="2">{{ __('page.my-bookings.passengers') }}</th>
			<th rowspan="2">{{ __('page.my-bookings.gender') }}</th>
			<th rowspan="2" class="text-end">{{ __('page.my-bookings.birth-date') }}</th>
			<th rowspan="2" class="text-end">{{ __('page.my-bookings.fare') }}</th>
			<th rowspan="2" class="text-end">{{ __('page.my-bookings.taxes') }}</th>
			@if (!empty($booking->excess_baggage_fee))
				@php $count_column++; @endphp
				<th rowspan="2" class="text-end">{{ __('page.my-bookings.excess-baggage') }}</th>
			@endif
			@if (!empty($booking->insurance_fee))
				@php $count_column++; @endphp
				<th rowspan="2" class="text-end">{{ __('flight.pricing-flights.other-services.travel-insurance-fee') }}</th>
			@endif
			@php
				$collectTravelerSerivce = collect();
					foreach ($booking->travelers as $traveler) {
					$traveler_airport_services = $traveler->airportServices()->get();
					$collectTravelerSerivce = $collectTravelerSerivce->merge($traveler_airport_services);
					foreach ($traveler_airport_services->groupBy('service_id') as $key => $airport_services) {
						$airport_services_fee[$key] = 0;
						foreach ($airport_services as $airport_service) {
							$airport_services_fee[$key] += $airport_service->fee;
						}
					}
				}
				foreach ($collectTravelerSerivce->groupBy('service_id') as $s => $services ) {
					if (count($services)) {
						$airport_service_info = \App\Models\AirportService::find($s);
					@endphp
						<th colspan="{{ ($booking->direction !== 'one-way') ? 2 : 1 }}" class="text-center">{{ $airport_service_info->name }}</th>
					@php
					}
				}
			@endphp
			<th rowspan="2" class="text-end" width="100px">{{ __('page.my-bookings.total') }}</th>
		</tr>
		<tr>
			@php
				foreach ($collectTravelerSerivce->groupBy('service_id') as $s => $services ) {
					if (count($services)) {
						$count_column += ($booking->direction !== 'one-way') ? 2 : 1;
			@endphp
					<th class="text-center bg-secondary bg-opacity-10">{{ $booking->origin_location_code }}</th>
					@if ($booking->direction !== 'one-way')
						<th class="text-center bg-secondary bg-opacity-10">{{ $booking->destination_location_code }}</th>
					@endif
			@php
					}
				}
			@endphp
		</tr>
		@foreach ($booking->travelers as $traveler)
		@php $item_insurance = $traveler->travelInsurance; @endphp
		<tr class="align-middle">
			<td class="text-nowrap">{{ strtoupper($traveler->given_name) }}/<br>{{ strtoupper($traveler->family_name) }}</td>
			<td>{{ strtoupper($traveler->gender) }}</td>
			<td class="text-end text-nowrap">{{ date('M d, Y', strtotime($traveler->birth_date)) }}</td>
			<td class="text-end text-nowrap">{{ number_format($traveler->base, 2) }} {{ $traveler->currency }}</td>
			<td class="text-end text-nowrap">{{ number_format($traveler->taxes + $traveler->ticketing_fee, 2) }} {{ $traveler->currency }}</td>
			@if (!empty($booking->excess_baggage_fee))
				<td>
					@php
						$traveler_baggages = $traveler->excessBaggage()->get()->groupBy('flight_id');
						$counter = 0;
						foreach ($traveler_baggages as $key => $baggages) {
							$counter ++;
							$flightInfo = \App\Models\FlightSegment::where('flight_id', $key)->get();
							$firstSegment = $flightInfo->first();
							$lastSegment = $flightInfo->last();
							$totalBag = 0;
					@endphp
							<div>
								<p class="small fw-semibold mb-0 text-end">{{ $firstSegment->departure_iata_code }} to {{ $lastSegment->arrival_iata_code }}</p>
								@foreach ($baggages as $k => $baggage) 
									<p class="mb-0 text-end text-nowrap"> {{ $baggage->name }} : {{ number_format($baggage->total) }} {{ $booking->currency }}</p>
								@endforeach
								@if ($counter !== count($traveler_baggages))
									<hr class="my-1">
								@endif
							</div>
					@php } @endphp
				</td>
			@endif
			@if (!empty($booking->insurance_fee))
				<td class="text-end text-nowrap">
					<span>{{ number_format($item_insurance->usd_fee ?? 0, 2) }} {{ $booking->currency }}</span>
					<br>
					@if ($booking->currency !== 'VND')
						<span> {{ number_format($item_insurance->vnd_fee ?? 0, 2) }} VND</span>
					@endif
				</td>
			@endif
			@php
				foreach ($collectTravelerSerivce->groupBy('service_id') as $s => $services ) {
					if (count($services)) {
						$origin_location_service = \App\Models\FlightTravelerService::where('traveler_id', $traveler->id)->where('airport_id', $airports->get($booking->origin_location_code)->id)->where('service_id', $s)->first();
						if ($booking->direction !== 'one-way') {
							$destination_airport = $airports->get($booking->destination_location_code);
							$destination_location_service = \App\Models\FlightTravelerService::where('traveler_id', $traveler->id)->where('airport_id', $destination_airport->id)->where('service_id', $s)->first();
						}
			@endphp
					<td class="text-center text-nowrap">{{ !empty($origin_location_service) ? number_format($origin_location_service->fee, 2).' '. $traveler->currency : '' }}</td>
					@if ($booking->direction !== 'one-way') 
						<td class="text-center text-nowrap">{{ !empty($destination_location_service) ? number_format($destination_location_service->fee, 2) .' '. $traveler->currency : '' }} </td>
					@endif
			@php
					}
				}
			@endphp
			<td class="text-end text-nowrap">{{ number_format($traveler->total + (!empty($booking->insurance_fee) ? $item_insurance->usd_fee ?? 0 : 0), 2) }} {{ $traveler->currency }}</td>
		</tr>
		@endforeach
		<tr>
			<td colspan="{{ $count_column }}" class="text-end"><b>Grand total</b></td>
			<td class="text-end text-nowrap"><b>{{ number_format($booking->grand_total + (!empty($booking->insurance_fee) ? $booking->insurance_fee : 0), 2) }} {{ $booking->currency }}</b>
				<br>
				@if ($booking->currency !== 'VND')
				@php $insurance_vnd_fee = \App\Models\FlightInsurance::where('booking_id', $booking->id)->sum('vnd_fee'); @endphp
					<b> {{ number_format($booking->grand_total * $booking->vnd_ex_rate + (!empty($booking->insurance_fee) ? $insurance_vnd_fee : 0),2) }} VND</b>
				@endif
			</td>
		</tr>
	</table>
</div>
@if (!empty($booking->insurance_fee))
<div class="mt-3 table-responsive">
	<table class="table table-bordered">
		<tr class="bg-secondary bg-opacity-10 align-middle">
			<th>{{ __('page.my-bookings.passengers') }}</th>
			<th class="text-end">{{ __('flight.extra-services.package') }}</th>
			<th class="text-end">{{ __('flight.extra-services.number-of-days') }}</th>
			<th class="text-end">{{ __('menu.passport') }}</th>
		</tr>
		@foreach ($booking->travelers as $traveler)
		@php
			$item_insurance = $traveler->travelInsurance;
			if (empty($item_insurance)) {
				continue;
			}
		@endphp
		<tr class="align-middle">
			<td class="text-nowrap">{{ strtoupper($traveler->given_name) }}/<br>{{ strtoupper($traveler->family_name) }}</td>
			<td class="text-end">{{ $item_insurance->package }}</td>
			<td class="text-end">{{ $item_insurance->days }}</td>
			<td class="text-end"><a class="link fancybox" data-caption="Passport Photo" data-fancybox="gallery-child" href="{{ asset('storage/travel_insurance/'.strtolower($booking->order_ref).'/images/'.$item_insurance->passport_img) }}">{{ $item_insurance->passport_img }}</a></td>
		</tr>
		@endforeach
	</table>
</div>
@endif
<div class="mt-3">
	<table class="table table-bordered">
		<tr class="bg-secondary bg-opacity-10">
			<th colspan="2">{{ __('page.my-bookings.contact') }}</th>
		</tr>
		<tr>
			<td width="120px">{{ __('page.my-bookings.fullname') }}</td>
			<td>{{ $booking->contact_fullname }}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{ $booking->contact_email }}</td>
		</tr>
		<tr>
			<td>{{ __('page.my-bookings.phone') }}</td>
			<td>{{ $booking->contact_phone }}</td>
		</tr>
		<tr>
			<td>{{ __('page.my-bookings.remark') }}</td>
			<td>{{ $booking->contact_message }}</td>
		</tr>
	</table>
</div>
@endsection