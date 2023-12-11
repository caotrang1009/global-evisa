
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
								<a class="nav-link me-0" title="" href="#" data-bs-toggle="modal" data-bs-target="#accountModal"><img class="cursor-pointer" src="{{ asset('assets/svg/outline/user-circle.svg') }}" alt="user" width="40px" height="40px"></a>
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
							<a class="nav-link me-0" title="" href="#" data-bs-toggle="modal" data-bs-target="#accountModal"><img class="cursor-pointer" src="{{ asset('assets/svg/outline/user-circle.svg') }}" alt="user" width="40px" height="40px"></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>

<div class="modal fade" id="accountModal" tabindex="-1" aria-labelledby="accountModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header px-5">
			  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body p-5">
				<form id="frm-singin" action="" method="POST" autocomplete="off">
					<div class="row g-sm-6 g-4">
						<div class="col-sm-6">
							<h2 class="web-title text-uppercase text-center mb-3">SIGN IN</h2>
							<div class="form-group">
								<label class="h6 fw-semibold text-title text-black">Your Email <span class="text-danger">*</span></label>
								<input class="form-control border rounded-3 px-3 input-info" type="text" id="email" name="email" placeholder="Enter Value" required>
								<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
							</div>
							<div class="form-group">
								<label class="h6 fw-semibold text-title text-black">Your Password <span class="text-danger">*</span></label>
								<div class="dropdown input-end-icon">
									<input class="form-control border rounded-3 px-3 input-info" type="password" id="password" name="password" placeholder="Enter Value" required>
									<img class="cursor-pointer" src="{{ asset('assets/svg/outline/eye.svg') }}" data-icon-name="outline/eye" alt="eye" width="16px" height="16px">
									<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
								</div>
							</div>
							<a href="{{ url("/account") }}" class="btn btn-primary rounded-3 text-uppercase fw-bold fs-6 py-2 mt-2 lh-md w-100">Sign in</a>
							<a href="#" class="d-block text-center fs-6 mt-4">Forgot your password?</a>
						</div>
						<div class="col-sm-6">
							<h2 class="web-title text-uppercase text-center mb-3">SIGN UP</h2>
							<div class="form-group">
								<label class="h6 fw-semibold text-title text-black">Your Full Name <span class="text-danger">*</span></label>
								<input class="form-control border rounded-3 px-3 input-info" type="text" id="reg_fullname" name="reg_fullname" placeholder="Enter Value" required>
								<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
							</div>
							<div class="form-group">
								<label class="h6 fw-semibold text-title text-black">Your Email <span class="text-danger">*</span></label>
								<input class="form-control border rounded-3 px-3 input-info" type="text" id="reg_email" name="reg_email" placeholder="Enter Value" required>
								<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
							</div>
							<div class="form-group">
								<label class="h6 fw-semibold text-title text-black">Your Password <span class="text-danger">*</span></label>
								<div class="dropdown input-end-icon">
									<input class="form-control border rounded-3 px-3 input-info" type="password" id="reg_password" name="reg_password" placeholder="Enter Value" required>
									<img class="cursor-pointer" src="{{ asset('assets/svg/outline/eye.svg') }}" data-icon-name="outline/eye" alt="eye" width="16px" height="16px">
									<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
								</div>
							</div>
							<div class="form-group">
								<label class="h6 fw-semibold text-title text-black">Confirm Your Password <span class="text-danger">*</span></label>
								<div class="dropdown input-end-icon">
									<input class="form-control border rounded-3 px-3 input-info" type="password" id="reg_password_confirmation" name="reg_password_confirmation" placeholder="Enter Value" required>
									<img class="cursor-pointer" src="{{ asset('assets/svg/outline/eye.svg') }}" data-icon-name="outline/eye" alt="eye" width="16px" height="16px">
									<span class="hide text-danger fw-semibold medium" id="error-msg"></span>
								</div>
							</div>
							<div class="form-check mt-2 mb-0">	
								<input class="form-check-input mt-0" type="checkbox" value="" id="term" name="term" style="width:1.5rem; height:1.5rem" checked="" required="">
								<label class="form-check-label ms-3 cursor-pointer fw-medium" for="term">
									By creating an account, it means that you will agree to our <a href="#" class="fw-bold text-title text-primary text-decoration-underline">Terms and Conditions</a> and <a href="#" class="fw-bold text-title text-primary text-decoration-underline">Policies</a>.
								</label>
							</div>
							<a href="#" class="btn btn-primary rounded-3 text-uppercase fw-bold fs-6 py-2 mt-4 lh-md w-100">CREATE AN ACCOUNT</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {	
		var validator = $("#frm-singin").validate({
			highlight: function(input){
				$(input).addClass('error');
				updateSvgColor($(input).siblings('img'), 'red');
			},
			errorPlacement: function(error, input){
				if (error.text() != '') {
					$(input).siblings("span").show();
					$(input).siblings("span").html(error.text())
				}
			},
			invalidHandler: function(event, validator) {
				$(".spinner").addClass("d-none");
				$('.spinner .center-div').loader('spinner').hide();
			}
		});
	});
</script>