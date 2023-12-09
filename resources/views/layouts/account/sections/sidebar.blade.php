<div class="container d-lg-flex justify-content-between py-2 py-lg-3">
	<div class="order-lg-2 mb-3 mb-lg-0 pt-lg-4">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb bg-transparent flex-lg-nowrap justify-content-center justify-content-lg-start">
				<li class="breadcrumb-item"><a class="text-nowrap" href="{{ url('/') }}"><i class="czi-home"></i>Home</a></li>
				<li class="breadcrumb-item text-nowrap"><a href="{{ url('/account') }}">My Account</a></li>
			</ol>
		</nav>
	</div>
	<div class="order-lg-1 pe-lg-4 mb-3 mb-lg-0 pt-lg-4 text-center text-lg-start">
		<h1 class="web-header1 text-black text-uppercase fw-800">My Account</h1>
	</div>
</div>
<section class="pt-0 pt-sm-3 my-account">
	<div class="container">
		<div class="row g-4">
			<div class="col-lg-4-8 col-12">
				<nav class="navbar border rounded shadow">
					<div class="navbar-brand p-4 pt-5 w-100">
						<div class="d-flex align-items-center gap-4">
							<div class="flex-shrink-0 avatar avatar-xl rounded-circle position-relative">
								<img class="img-fluid rounded-circle" src="{{ asset('assets/images/portrait.png') }}">
							</div>
							<div class="flex-grow-1">
								<h3 class="fw-800 custom-h3 text-primary mb-2">Hi, lorem ipsum</h3>
								<span class="text-black text-opacity-8 fs-6">Loremipsum@gmail.com</span>
							</div>
						</div>
					</div>
					<button class="navbar-toggler collapsed pe-4 d-block d-sm-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-myaccount" aria-controls="navbar-myaccount" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="navbar-collapse collapse d-none d-sm-block" id="navbar-myaccount">
						<div class="px-0 headline">
							<div class="bg-primary-subtle px-4 py-3">
								<h5 class="headline my-1 text-uppercase fw-bold text-white">Bookings</h5>
							</div>
							<ul class="list-unstyled mb-0">
								<li class="mb-0 border-bottom {{ request()->routeIs('account.bookings') ? 'active' : '' }}">
									<a class="d-flex align-items-center text-black text-opacity-9 px-4 py-3" href="{{ url('account/bookings') }}"><img class="me-2" src="{{ asset('assets/svg/outline/book.svg') }}" data-icon-name="outline/book" alt="book" width="20px" height="20px">My Bookings</a>
								</li>
								<li class="mb-0 {{ request()->routeIs('account.invoice') ? 'active' : '' }}">
									<a class="d-flex align-items-center text-black text-opacity-9 px-4 py-3" href="{{ url('account/invoices') }}"><img class="me-2" src="{{ asset('assets/svg/outline/receipt.svg') }}" data-icon-name="outline/receipt" alt="receipt" width="20px" height="20px">Invoices</a>
								</li>
							</ul>
							<div class="bg-primary-subtle px-4 py-3">
								<h5 class="headline my-1 text-uppercase fw-bold text-white">Account setting</h5>
							</div>
							<ul class="list-unstyled mb-0">
								<li class="mb-0 border-bottom {{ request()->routeIs('account.profile') ? 'active' : '' }}">
									<a class="d-flex align-items-center text-black text-opacity-9 px-4 py-3" href="{{ url('account/profile') }}"><img class="me-2" src="{{ asset('assets/svg/outline/user-rectangle.svg') }}" data-icon-name="outline/user-rectangle" alt="user" width="20px" height="20px">Profile Information</a>
								</li>
								<li class="mb-0">
									<a class="d-flex align-items-center text-black text-opacity-9 px-4 py-3" href="{{ url('/') }}"><img class="me-2" src="{{ asset('assets/svg/outline/logout.svg') }}" alt="logout" width="20px" height="20px">Sign Out</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
			<div class="col-lg-7-2 col-12">
				@yield('content')
			</div>
		</div>
	</div>
</section>
