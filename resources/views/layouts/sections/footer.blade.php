<footer class="py-5 bg-primary text-white text-title medium mt-5">
	<div class="container">
		<div class="row gy-4">
			<div class="col-lg-1 col-md-2">
				<a href="{{ url("/") }}" class="d-flex align-items-center navbar-brand">
					<img width="60" height="60" src="{{ asset('assets\images\new_logo.svg') }}" alt="logo">
				</a>
			</div>
			<div class="col-lg-6 col-md-10">
				<div class="row me-lg-5 footer-nav">
					<div class="col-sm-4">
						<h5 class="text-white text-nowrap">Global eVISA</h5>
						<ul class="nav flex-column">
							<li class="nav-item mb-2"><a href="{{ url('/about-us') }}" class="nav-link p-0 text-white">About Us</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Careers</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Policies</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Terms & Conditions</a></li>
						</ul>
					</div>
					<div class="col-sm-4">
						<h5 class="text-white text-nowrap">Need to Know</h5>
						<ul class="nav flex-column">
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">How it works</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
							<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Blogs</a></li>
						</ul>
					</div>
					<div class="col-sm-4">
						<h5 class="text-white text-nowrap">Contact Us</h5>
						<ul class="nav flex-column">
							<li class="nav-item mb-2">No. 40 - 42, Thien Phuoc St Ward 9, Tan Binh Dist, HCMC, Vietnam</li>
							<li class="nav-item mb-2">Hotline: <br><a class="text-white" href="tel:+84.987.309.313">+84.987.309.313</a> <br> <a class="text-white" href="tel:+84.28.6685.1315">+84.28.6685.1315</a> <br> <a class="text-white" href="tel:+84.28.6685.1317">+84.28.6685.1317</a></li>
							<li class="nav-item mb-2">Email: <br> <a class="text-white" href="mailto:loremipsum@gmail.com">loremipsum@gmail.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<form id="frm-subscribe">
					<h5 class="text-white mb-3">Subscribe To Get Our Newsletter</h5>
					<div class="row g-2">
						<div class="col-8">
							<div class="d-flex align-items-center rounded-3 bg-white h-100 px-3">
								<input id="newsletter1" type="text" class="form-control border-0 px-0 cursor-pointer" placeholder="Enter your email address">
							</div>
						</div>
						<div class="col-4">
							<button class="btn bg-orange text-white border-2 border-white rounded-3 h-100 w-100" type="button">
								<span class="my-2">Subscribe</span>
								<i class="fal fa-long-arrow-up ms-2" style="transform: rotate(45deg);"></i>
							</button>
						</div>
					</div>
				</form>
				<div class="d-flex justify-content-center gap-5 mt-4">
					<span class="border border-white rounded-circle">
						<img class="m-2" src="{{ asset('assets/svg/icon/linkedin-fill.svg') }}" alt="logo" width="24px" height="24px">
					</span>
					<span class="border border-white rounded-circle">
						<img class="m-2" src="{{ asset('assets/svg/icon/fb.svg') }}" alt="logo" width="24px" height="24px">
					</span>
					<span class="border border-white rounded-circle">
						<img class="m-2" src="{{ asset('assets/svg/icon/twitter.svg') }}" alt="logo" width="24px" height="24px">
					</span>
				</div>
			</div>
		</div>
		<div class="mt-1">@Global eVISA 2023 All rights reserved</div>
	</div>
</footer>