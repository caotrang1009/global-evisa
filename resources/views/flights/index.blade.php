@extends('layouts.app')

@section('content')

<section>
	<div class="container">
		<h1 class="web-title text-black text-uppercase">BOOK YOUR FLIGHT!</h1>
		<div class="d-flex align-items-center">
			<span class="d-block me-3 sub-line-title"></span>
			<h4 class="text-black text-opacity-9">Where do you wanna go?</h4>
		</div>
		<div class="mt-4">
			<div class="bg-primary px-4 py-4-5">
				@include('flights.section.quicksearch')
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row align-items-end pb-3">
			<div class="col-sm-6">
				<span class="d-block sub-line-title"></span>
				<h2 class="web-header1 text-uppercase fw-800 text-decoration-underline text-black text-opacity-9 my-3">TOP DESTINATIONS</h2>
				<ul>
					<li class="custom-h3 h4 fw-bold">Best Location</li>
				</ul>
			</div>
			<div class="col-sm-6">
				<p class="text-end text-black text-opacity-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
		</div>
		<div class="row gx-lg-5 g-4">
			<div class="col-lg-5 col-md-6">
				<div class="card text-bg-secondary flex-row justify-content-lg-start justify-content-center border-0 mb-lg-5 mb-4">
					<div class="ratio ratio-4x3">
						<img src="{{ asset('assets/images/destinations/image-01.png') }}" alt="image" class="fit-cover hover-brightness">
					</div>
					<div class="card-body position-absolute bottom-0 text-white ps-lg-5 pb-4">
						<h5 class="card-title lg-body semi fw-bold">Lorem Ipsum Dolor Sit Amet</h5>
						<p class="card-text medium">Lorem Ipsum Dolor Sit Amet</p>
					</div>
				</div>
				<div class="card text-bg-secondary flex-row justify-content-lg-start justify-content-center border-0">
					<div class="ratio ratio-4x3">
						<img src="{{ asset('assets/images/destinations/image-02.png') }}" alt="image" class="fit-cover hover-brightness">
					</div>
					<div class="card-body position-absolute bottom-0 text-white ps-lg-5 pb-4">
						<h5 class="card-title lg-body semi fw-bold">Lorem Ipsum Dolor Sit Amet</h5>
						<p class="card-text medium">Lorem Ipsum Dolor Sit Amet</p>
					</div>
				</div>
			</div>			
			<div class="col-lg-7 col-md-6">
				<div class="card text-bg-secondary h-100 flex-row justify-content-lg-start justify-content-center border-0 mb-5">
					<div class="ratio ratio-1x1">
						<img src="{{ asset('assets/images/destinations/image-03.png') }}" alt="image" class="fit-cover hover-brightness">
					</div>
					<div class="card-body position-absolute bottom-0 text-white ps-lg-5 pb-4">
						<h5 class="card-title lg-body semi fw-bold">Lorem Ipsum Dolor Sit Amet</h5>
						<p class="card-text medium">Lorem Ipsum Dolor Sit Amet</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="me-3 ratio ratio-1x1 h-100">
					<img src="https://images.unsplash.com/photo-1505300639033-a5cd978a6239?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fCUyM2x1Y2V8ZW58MHx8MHx8fDA%3D&w=1000&q=80" alt="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="d-flex justify-content-end flex-wrap">
					<span class="d-block position-absolute sub-line-title"></span>
					<h2 class="web-header1 text-uppercase fw-800 text-decoration-underline text-black text-opacity-9 text-end mt-4-5 mb-3 w-100">HOW IT WORKS</h2>					
					<ul>
						<li class="custom-h3 h4 fw-bold">Best Location</li>
					</ul>
				</div>
				<div class="row g-4 mt-0">
					<div class="col-12">
						<div class="d-flex align-items-center rounded-3-5 group-post-content px-4-2 py-1">
							<div class="flex-shrink-0 rounded-3-5 me-4-5 icon">
								<img class="m-3" src="{{ asset('assets/svg/outline/folder-search.svg') }}" data-icon-name="outline/folder-search" alt="folder-search" width="32px" height="32px">
							</div>
							<div class="flex-grow-1">
								<h5 class="text-black text-opacity-9 fw-bold mb-1">Expert Consultation</h5>
								<h6 class="body-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="d-flex align-items-center rounded-3-5 group-post-content px-4-2 py-1">
							<div class="flex-shrink-0 rounded-3-5 me-4-5 icon">
								<img class="m-3" src="{{ asset('assets/svg/outline/notes-edit-search.svg') }}" data-icon-name="outline/notes-edit-search" alt="notes-edit-search" width="32px" height="32px">
							</div>
							<div class="flex-grow-1">
								<h5 class="text-black text-opacity-9 fw-bold mb-1">Book a ticket</h5>
								<h6 class="body-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="d-flex align-items-center rounded-3-5 group-post-content px-4-2 py-1">
							<div class="flex-shrink-0 rounded-3-5 me-4-5 icon">
								<img class="m-3" src="{{ asset('assets/svg/outline/mobile-payment.svg') }}" data-icon-name="outline/mobile-payment" alt="mobile-payment" width="32px" height="32px">
							</div>
							<div class="flex-grow-1">
								<h5 class="text-black text-opacity-9 fw-bold mb-1">Make payment</h5>
								<h6 class="body-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="d-flex align-items-center rounded-3-5 group-post-content px-4-2 py-1">
							<div class="flex-shrink-0 rounded-3-5 me-4-5 icon">
								<img class="m-3" src="{{ asset('assets/svg/outline/map-people.svg') }}" data-icon-name="outline/map-people" alt="map-people" width="32px" height="32px">
							</div>
							<div class="flex-grow-1">
								<h5 class="text-black text-opacity-9 fw-bold mb-1">Explore destinations</h5>
								<h6 class="body-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row align-items-end pb-3">
			<div class="col-sm-6">
				<span class="d-block me-3 sub-line-title"></span>
				<h2 class="web-header1 text-uppercase fw-800 text-decoration-underline spacing-n1 text-black text-opacity-9 my-3">TOUR PACKAGES</h2>
				<ul class="ms-3">
					<li class="custom-h3 h4 fw-bold">Our Destination List</li>
				</ul>
			</div>
			<div class="col-sm-6">
				<p class="text-end text-black text-opacity-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
		</div>
		<div class="slide-blog position-relative py-4">
			<div class="swiper" data-parent=".slide-blog" data-items="3" data-items-md="2" data-items-sm="1" data-space-between="40" data-prev=".swiper-custom-prev" data-next=".swiper-custom-next">
				<div class="swiper-wrapper align-items-center">							
					<div class="swiper-slide" id="rewind-item-1">
						<div class="card border rounded-3 slide-packages">
							<div class="card-body text-start">
								<div class="ratio ratio-1x1">
									<img class="fit-cover" src="{{ asset('assets/images/blog/package-01.png') }}" alt="package">
								</div>
								<h5 class="fw-bold headline text-black text-opacity-9 mt-3 mb-1">Lorem Ipsum</h5>
								<div class="body-2 highlight text-black text-opacity-9 mb-3">Lorem Ipsum</div>
								<div class="small-link-text fw-normal text-black text-opacity-8">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide" id="rewind-item-1">
						<div class="card border rounded-3 slide-packages">
							<div class="card-body text-start">
								<div class="ratio ratio-1x1">
									<img class="fit-cover" src="{{ asset('assets/images/blog/package-02.png') }}" alt="package">
								</div>
								<h5 class="fw-bold headline text-black text-opacity-9 mt-3 mb-1">Lorem Ipsum</h5>
								<div class="body-2 highlight text-black text-opacity-9 mb-3">Lorem Ipsum</div>
								<div class="small-link-text fw-normal text-black text-opacity-8">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide" id="rewind-item-1">
						<div class="card border rounded-3 slide-packages">
							<div class="card-body text-start">
								<div class="ratio ratio-1x1">
									<img class="fit-cover" src="{{ asset('assets/images/blog/package-03.png') }}" alt="package">
								</div>
								<h5 class="fw-bold headline text-black text-opacity-9 mt-3 mb-1">Lorem Ipsum</h5>
								<div class="body-2 highlight text-black text-opacity-9 mb-3">Lorem Ipsum</div>
								<div class="small-link-text fw-normal text-black text-opacity-8">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide" id="rewind-item-1">
						<div class="card border rounded-3 slide-packages">
							<div class="card-body text-start">
								<div class="ratio ratio-1x1">
									<img class="fit-cover" src="{{ asset('assets/images/blog/package-02.png') }}" alt="package">
								</div>
								<h5 class="fw-bold headline text-black text-opacity-9 mt-3 mb-1">Lorem Ipsum</h5>
								<div class="body-2 highlight text-black text-opacity-9 mb-3">Lorem Ipsum</div>
								<div class="small-link-text fw-normal text-black text-opacity-8">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-control d-lg-block d-none">
				<div class="rounded-circle bg-primary text-white top-50 d-block fs-2 position-absolute d-flex justify-content-center align-items-center mt-n3 swiper-custom-prev">
					<i class="fal fa-angle-left"></i>
				</div>
				<div class="rounded-circle bg-primary text-white top-50 d-block fs-2 position-absolute d-flex justify-content-center align-items-center mt-n3 swiper-custom-next">
					<i class="fal fa-angle-right"></i>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function () {
		$(document).on('mouseenter', '.group-post-content', function () {
			updateSvgColor($(this).find('img'), 'black');
		}).on('mouseleave', '.group-post-content', function () {
			updateSvgColor($(this).find('img'), '');
		});

		function updateSvgColor(pathElement, fillColor) {
			if (fillColor!='') {
				fillColor = '-'+fillColor;
			}

			pathElement.each(function(index, item) {
				var iconName = $(item).data('icon-name');
				var src = `{{ asset('assets/svg/${iconName + fillColor}.svg') }}`;
				
				if ($(item).attr('alt') == 'plus') {
					iconPlus = src;
				} else if($(item).attr('alt') == 'minus') {
					var src = `{{ asset('assets/svg/outline/minus${fillColor}.svg') }}`;
					iconMinus = src;
				}
				$(item).attr('src', src);
			});
		}
	});
</script>

@endsection