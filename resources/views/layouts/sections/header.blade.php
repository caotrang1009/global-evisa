
<header class="bg-primary text-white text-title">
	<div class="main-nav">
		<nav class="navbar navbar-expand-lg navbar-mega navbar-light">
			<div class="container position-relative px-5">
				<a href="/" class="d-flex align-items-center navbar-brand me-5">
					<img width="60" height="60" src="{{ asset('assets\images\new_logo.png') }}" alt="logo">
					<span class="fs-6 fw-semibold text-white text-center mx-3">Global <br> eVISA</span>
				</a>
				<button class="navbar-toggler px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbar-content">
					<ul class="navbar-nav navbar-nav-scroll mx-auto">
						<li class="nav-item">
							<a class="nav-link" title="" href="{{ url('/visa') }}">Visa Application</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" title="" href="{{ url('/flights') }}">Flights</a>
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
					</ul>
					<ul class="navbar-nav">
						<li class="nav-item me-sm-3">
							<div class="d-flex align-items-center">
								<a class="nav-link">
									<img class="avatar-img rounded-circle" src="{{ asset('assets/images/united-states.png') }}" alt="flag" width="32px" height="32px">
								</a>
								<div><span class="border-start border-white h-50"></span></div>
								<a class="nav-link" title="" href="#"><i class="fal fa-usd-circle fs-2"></i></a>
							</div>
						</li>
						<li class="nav-item ms-sm-3">
							<a class="nav-link" title="" href="#"><i class="fal fa-user-circle fs-2"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>
