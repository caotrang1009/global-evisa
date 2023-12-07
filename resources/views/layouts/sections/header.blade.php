
<header class="bg-primary text-white text-title">
	<div class="main-nav">
		<nav class="navbar navbar-expand-lg navbar-mega navbar-light">
			<div class="container position-relative">
				<a href="{{ url("/") }}" class="d-flex align-items-center navbar-brand me-5">
					<img width="60" height="60" src="{{ asset('assets\images\new_logo.svg') }}" alt="logo">
					<span class="fs-6 fw-semibold text-white text-center text-title mx-3">Global <br> eVISA</span>
				</a>
				<button class="navbar-toggler px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse my-lg-0 my-3" id="navbar-content">
					<ul class="navbar-nav navbar-nav-scroll mx-auto">
						<li class="nav-item">
							<a class="nav-link" title="" href="{{ url("/visa") }}">Visa Application</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" title="" href="{{ url("/flights") }}">Flights</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" title="" href="#">Travel Insurance </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" title="" href="#">Airport Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" title="" href="#">Hotel</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" title="" href="#">Contact</a>
						</li>
						<li class="nav-item d-lg-none d-block">
							<div class="d-flex align-items-center gap-3">
								<a class="nav-link me-0">
									<img class="avatar-img rounded-circle" src="{{ asset('assets/images/united-states.png') }}" alt="flag" width="40px" height="40px">
								</a>
								<div><span class="border-start border-white h-50"></span></div>
								<a class="nav-link ms-0" title="" href="#"><img class="cursor-pointer" src="{{ asset('assets/svg/outline/coin-dollar.svg') }}" alt="user" width="40px" height="40px"></a>
								<a class="nav-link me-0" title="" href="#"><img class="cursor-pointer" src="{{ asset('assets/svg/outline/user-circle.svg') }}" alt="user" width="40px" height="40px"></a>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav d-lg-flex d-none">
						<li class="nav-item">
							<div class="d-flex align-items-center">
								<a class="nav-link me-0">
									<img class="avatar-img rounded-circle" src="{{ asset('assets/images/united-states.png') }}" alt="flag" width="40px" height="40px">
								</a>
								<div><span class="border-start border-white h-50"></span></div>
								<a class="nav-link ms-0" title="" href="#"><img class="cursor-pointer" src="{{ asset('assets/svg/outline/coin-dollar.svg') }}" alt="user" width="40px" height="40px"></a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link me-0" title="" href="#"><img class="cursor-pointer" src="{{ asset('assets/svg/outline/user-circle.svg') }}" alt="user" width="40px" height="40px"></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>
