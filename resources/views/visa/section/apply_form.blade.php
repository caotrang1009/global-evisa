<form id="frm-visa-search">
	<div class="row gx-5-5 gy-4 align-items-end mt-0">
		<div class="col-lg-8 col-12">
			<div class="row gx-5-5 gy-4">
				<div class="col-sm-4">
					<div class="form-group mb-0">
						<label class="mb-3 text-title">Your Nationality</label>
						<div class="dropdown">
							<div class="d-flex gap-3 align-items-center justify-content-between border rounded-4 py-1 px-4 input-visa-search" data-bs-toggle="dropdown" data-bs-auto-close="outside">
								<img src="{{ asset('assets/svg/outline/people.svg') }}" alt="people">
								<input class="form-control px-0 py-2 cursor-pointer" type="text" name="nationality" placeholder="Please Select" autocomplete="off" >
								<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" alt="arrow-bottom">
							</div>
							<div class="dropdown-menu rounded-4 p-3 w-100 medium">
								@include('visa.section.countries')
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group mb-0">
						<label class="mb-3 text-title">Traveling to</label>
						<div class="dropdown">
							<div class="d-flex gap-3 align-items-center justify-content-between border rounded-4 py-1 px-4 input-visa-search" data-bs-toggle="dropdown" data-bs-auto-close="outside">
								<img src="{{ asset('assets/svg/outline/map.svg') }}" alt="people">
								<input class="form-control px-0 py-2 cursor-pointer" type="text" name="nationality_to" placeholder="Please Select" >
								<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" alt="people">
							</div>
							<div class="dropdown-menu rounded-4 p-3 w-100 medium">
								@include('visa.section.countries')
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group mb-0">
						<label class="mb-3 text-title">Purpose</label>
						<div class="dropdown">
							<div class="d-flex gap-3 align-items-center justify-content-between border rounded-4 py-1 px-4 input-visa-search" data-bs-toggle="dropdown" data-bs-auto-close="outside">
								<img src="{{ asset('assets/svg/outline/map-gps-navigation.svg') }}" alt="people">
								<input class="form-control px-0 py-2 cursor-pointer" type="text" name="purpose" placeholder="Please Select" >
								<img class="cursor-pointer" src="{{ asset('assets/svg/outline/arrow-bottom.svg') }}" alt="people">
							</div>
							<div class="dropdown-menu rounded-4 p-3 w-100">
								<div class="d-flex align-items-center border rounded-4 px-2">
									<img src="{{ asset('assets/svg/solid/search.svg') }}" alt="search">
									<input class="form-control py-2 me-1" type="text" name="search" placeholder="Enter Input" autocomplete="off" >
								</div>
								<div class="list-purpose mt-4">
									<div class="list-popular mb-4">
										<div class="label-title mb-2 fw-bold">Most Popular</div>
										<ul class="list-unstyled">
											<li><a class="cursor-pointer">Tourist</a></li>
											<li><a class="cursor-pointer">Business</a></li>
											<li><a class="cursor-pointer">Study</a></li>
										</ul>
									</div>
									<div class="list-alphabetically">
										<div class="label-title mb-2 fw-bold">Alphabetically</div>
										<ul class="list-unstyled">
											<li><a class="cursor-pointer">Business</a></li>
											<li><a class="cursor-pointer">Non-immigrant</a></li>
											<li><a class="cursor-pointer">Tourist</a></li>
											<li><a class="cursor-pointer">Transit</a></li>
											<li><a class="cursor-pointer">Study</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-12">
			<a href="{{ url('/visa/apply') }}" class="btn btn-orange btn-lg button1 rounded-4 py-3 w-100 btn-visa-search">
				<span class="btn-text">Apply now</span><i class="fal fa-long-arrow-up ms-4" style="transform: rotate(45deg);"></i>
			</a>
		</div>
	</div>
</form>

<script>
	$(document).ready(function () {
		$(".input-visa-search").hover(
			function() {
				$(this).find("img:last").attr('src', "{{ asset('assets/svg/icon/down-arrow.svg') }}");
			}, function() {
				$(this).find("img:last").attr('src', "{{ asset('assets/svg/outline/arrow-bottom.svg') }}");
			}
		);
	});
</script>