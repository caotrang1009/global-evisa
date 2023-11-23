<section class="py-0">
	<div class="container border border-2 border-primary rounded-4 p-4">
		<div class="d-flex align-items-baseline">
			<span class="d-block me-4" style="width: 60px; height: 8px; background-color: #EB9444"></span>
			<h1 class="mb-1" style="font-size: 5rem; font-weight:800">Your Selected Flight</h1>
		</div>
		<div class="row flight-selected">
			<div class="col-12 p-4">
				<div class="accordion mb-3" id="accordionFlightOne">
					<div class="card border border-primary rounded-3">
						<div class="card-header d-flex gap-2 align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#flightOne">
							<div class="rounded-circle bg-primary bg-opacity-50"><span class="p-2">1</span></div>
							<h5 class="fw-semibold text-black mb-0">Changi International Airport</h5>
							<div class="stop text-center mx-2" style="width: 85px">
								<div class="path"></div>
							</div>
							<h5 class="fw-semibold text-black mb-0">Tan Son Nhat International Airport</h5>
							<h4 class="fw-semibold text-black mb-0 text-primary">LoremDay, DD <br> Month Year</h4>
						</div>
						<div id="flightOne" class="collapse" data-bs-parent="#accordionFlightOne">
							<div class="p-4">
							  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
							</div>
						</div>
					</div>
				</div>
				<div class="accordion mb-3" id="accordionFlightTwo">
					<div class="card border border-primary rounded-3">						
						<div class="card-header d-flex gap-2 align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#flightTwo">
							<div class="rounded-circle bg-primary bg-opacity-50"><span class="p-2">1</span></div>
							<h5 class="fw-semibold text-black">Changi International Airport</h5>
							<div class="stop text-center mx-2" style="width: 85px">
								<div class="path"></div>
							</div>
							<h5 class="fw-semibold text-black">Tan Son Nhat International Airport</h5>
							<h4 class="fw-semibold text-black mb-0 text-primary">LoremDay, DD <br> Month Year</h4>
						</div>
						<div id="flightTwo" class="collapse" data-bs-parent="#accordionFlightTwo">
							<div class="p-4">
							  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-sm-6">
				<a href="{{ url('flights/information') }}" class="btn btn-orange btn-lg rounded-4 text-uppercase fw-bold fs-4 w-100">
					<span class="btn-text">Go to next page</span><i class="fal fa-long-arrow-up icon-sm ms-3" style="transform: rotate(45deg);"></i>
				</a>
			</div>
		</div>
	</div>
</section>