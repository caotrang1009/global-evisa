<div class="border rounded-4 p-4 small">
	<div class="d-flex justify-content-between align-items-center">
		<div class="reset text-decoration-underline small">Reset</div>
		<h2 class="custom-h1 fw-800 text-uppercase text-black text-opacity-9 mb-0 spacing-n1">Filter</h2>
		<div class="close"><img src="{{ asset('assets/svg/solid/remove-circle.svg') }}" alt="remove-circle" width="32px" height="32px"></div>
	</div>
	<div class="filter-options mt-4">
		<div class="prices border-bottom">
			<div class="accordion">
				<div class="card text-black text-opacity-9">
					<h5 class="card-header px-0 fw-bold" data-bs-toggle="collapse" data-bs-target="#price" aria-expanded="false" aria-controls="#price">
						Prices
					</h5>
					<div id="price" class="collapse show">
						<div class="px-4 pb-3 range">
							<input type="range" id="price-range" name="price-range" min="0" max="100" value="100" step="1" class="range--progress" style="--min: 0; --max: 100; --val: 100" />
							<label for="price-range text-black">Up to <span class="range__output">000,000,000</span> amount.</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="arline border-bottom">
			<div class="accordion">
				<div class="card text-black text-opacity-9">
					<h5 class="card-header px-0 fw-bold" data-bs-toggle="collapse" data-bs-target="#airlines" aria-expanded="false" aria-controls="#airlines">
						Airlines
					</h5>
					<div id="airlines" class="collapse show">
						<div class="px-4 pb-3">
							<div class="form-check mb-3">
								<input class="form-check-input mt-0 me-2" type="checkbox" name="arlines[]" value="" id="airlines-1">
								<label class="form-check-label" for="airlines-1">
									<img class="me-2 fit-contain" src="{{ asset('assets/images/airline/Air_Asia.png') }}" alt="Air Asia" height="12px">
									<span class="small">Air Asia</span>
								</label>
							</div>
							<div class="form-check mb-3">
								<input class="form-check-input mt-0 me-2" type="checkbox" name="arlines[]" value="" id="airlines-2">
								<label class="form-check-label" for="airlines-2">
									<img class="me-2 fit-contain" src="{{ asset('assets/images/airline/Air_Canada.png') }}" alt="Air Asia" height="12px">
									<span class="small">Air Canada</span>
								</label>
							</div>
							<div class="form-check mb-3">
								<input class="form-check-input mt-0 me-2" type="checkbox" name="arlines[]" value="" id="airlines-3">
								<label class="form-check-label" for="airlines-3">
									<img class="me-2 fit-contain" src="{{ asset('assets/images/airline/Bamboo_Airways.png') }}" alt="Air Asia" height="12px">
									<span class="small">Bamboo Airlines</span>
								</label>
							</div>
							<div class="form-check mb-3">
								<input class="form-check-input mt-0 me-2" type="checkbox" name="arlines[]" value="" id="airlines-4">
								<label class="form-check-label" for="airlines-4">
									<img class="me-2 fit-contain" src="{{ asset('assets/images/airline/Japan_Airlines.png') }}" alt="Air Asia" height="12px">
									<span class="small">Japan Airlines</span>
								</label>
							</div>
							<div class="form-check mb-3">
								<input class="form-check-input mt-0 me-2" type="checkbox" name="arlines[]" value="" id="airlines-5">
								<label class="form-check-label" for="airlines-5">
									<img class="me-2 fit-contain" src="{{ asset('assets/images/airline/Singapore_Airlines.png') }}" alt="Air Asia" height="12px">
									<span class="small">Singapore Airlines</span>
								</label>
							</div>
							<div class="form-check mb-3">
								<input class="form-check-input mt-0 me-2" type="checkbox" name="arlines[]" value="" id="airlines-6">
								<label class="form-check-label" for="airlines-6">
									<img class="me-2 fit-contain" src="{{ asset('assets/images/airline/United_Airlines.png') }}" alt="Air Asia" height="12px">
									<span class="small">United Airlines</span>
								</label>
							</div>										
							<div class="form-check mb-3">
								<input class="form-check-input mt-0 me-2" type="checkbox" name="arlines[]" value="" id="airlines-7">
								<label class="form-check-label" for="airlines-7">
									<img class="me-2 fit-contain" src="{{ asset('assets/images/airline/VietJet_Air.png') }}" alt="Air Asia" height="12px">
									<span class="small">Vietjet Air</span>
								</label>
							</div>
							<div class="form-check mb-0">
								<input class="form-check-input mt-0 me-2" type="checkbox" name="arlines[]" value="" id="airlines-8">
								<label class="form-check-label" for="airlines-8">
									<img class="me-2 fit-contain" src="{{ asset('assets/images/airline/Vietnam_Airlines.png') }}" alt="Air Asia" height="12px">
									<span class="small">Vietnam Airlines</span>
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="stops border-bottom">
			<div class="accordion">
				<div class="card text-black text-opacity-9">
					<h5 class="card-header px-0 fw-bold" data-bs-toggle="collapse" data-bs-target="#stops" aria-expanded="false" aria-controls="#stops">
						Number of stops
					</h5>
					<div id="stops" class="collapse show">
						<div class="px-4 pb-3">
							<div class="form-check mb-3">
								<input class="form-check-input mt-0 me-2" type="checkbox" name="stops[]" value="" id="stops-1">
								<label class="form-check-label" for="stops-1">Direct</label>
							</div>
							<div class="form-check mb-3">
								<input class="form-check-input mt-0 me-2" type="checkbox" name="stops[]" value="" id="stops-2">
								<label class="form-check-label" for="stops-2">1 stop</label>
							</div>
							<div class="form-check mb-0">
								<input class="form-check-input mt-0 me-2" type="checkbox" name="stops[]" value="" id="stops-3">
								<label class="form-check-label" for="stops-3">2 stops</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="depart-time border-bottom">
			<div class="accordion">
				<div class="card text-black text-opacity-9">
					<h5 class="card-header px-0 fw-bold" data-bs-toggle="collapse" data-bs-target="#price" aria-expanded="false" aria-controls="#price">
						Take-off Time
					</h5>
					<div id="price" class="collapse show">
						<div class="px-4 multi-range">
							<p class="text-label">Depart from:  Lorem Ipsum Dolor Sit Amet  Aonsectetur Adipiscing Elit</p>
							<div class="position-relative w-100 d-inline-block mb-2">
								<div class="slide-track"></div>
								<input type="range" id="depart-time-1" name="depart-time-1" min="0" max="24" value="6" step="1" class="range-1" style="--min: 0; --max: 24; --val: 6" />
								<input type="range" id="depart-time-2" name="depart-time-2" min="0" max="24" value="20" step="1" class="range-2" style="--min: 0; --max: 24; --val: 20" />
							</div>
							<label for="depart-time" class="form-label d-flex justify-content-between text-black">
								<div>Between <span class="time-output-1">0</span>:00</div>
								<div>and</div>
								<div><span class="time-output-2">24</span>:00</div>
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="landing-time border-bottom">
			<div class="accordion">
				<div class="card text-black text-opacity-9">
					<h5 class="card-header px-0 fw-bold" data-bs-toggle="collapse" data-bs-target="#price" aria-expanded="false" aria-controls="#price">
						Landing Time
					</h5>
					<div id="price" class="collapse show">
						<div class="px-4 multi-range">
							<p class="text-label">Depart from:  Lorem Ipsum Dolor Sit Amet  Aonsectetur Adipiscing Elit</p>
							<div class="position-relative w-100 d-inline-block mb-2">
								<div class="slide-track"></div>
								<input type="range" id="landing-time-1" name="landing-time-1" min="0" max="24" value="6" step="1" class="range-1" style="--min: 0; --max: 24; --val: 6" />
								<input type="range" id="landing-time-2" name="landing-time-2" min="0" max="24" value="20" step="1" class="range-2" style="--min: 0; --max: 24; --val: 20" />
							</div>
							<label for="landing-time" class="form-label d-flex justify-content-between text-black">
								<div>Between <span class="time-output-1">0</span>:00</div>
								<div>and</div>
								<div><span class="time-output-2">24</span>:00</div>
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="duration">
			<div class="accordion">
				<div class="card text-black text-opacity-9">
					<h5 class="card-header px-0 fw-bold" data-bs-toggle="collapse" data-bs-target="#duration" aria-expanded="false" aria-controls="#duration">
						Flight Duration 
					</h5>
					<div id="duration" class="collapse show">
						<div class="px-4 range">
							<input type="range" id="duration-range" name="duration-range" min="0" max="48" value="48" step="1" class="range--progress" style="--min: 0; --max: 48; --val: 48" />
							<label for="duration-range text-black">Under <span class="range__output">48</span> hours.</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {
		$(window).bind('load', function() {
			var multiRange = $(".multi-range");
			multiRange.each(function(index, item) {
				var inputRange = $(item).find("input[type='range']");
				handleRange($(inputRange).first(), $(inputRange).last());
			});
		});

		var minGap = 0;
		$("#price-range, #duration-range").on("input", function() {
			$(this).css('--val', $(this).val());
			$(this).parent(".range").find(".range__output").text($(this).val())
		});

		$("#depart-time-1").on("input", function() {
			handleRangeFirst($(this));
		});

		$("#depart-time-2").on("input", function() {
			handleRangeLast($(this));
		});

		$("#landing-time-1").on("input", function() {
			handleRangeFirst($(this));
		});

		$("#landing-time-2").on("input", function() {
			handleRangeLast($(this));
		});

		function handleRange(inputFirst, inputLast) {
			handleRangeFirst(inputFirst);
			handleRangeLast(inputLast);
		}

		function handleRangeFirst(input) {
			var range2 = $(input).next("input");
			if (parseInt($(range2).val()) - parseInt($(input).val()) <= minGap) {
				$(input).val(parseInt($(range2).val())-minGap);
			}			
			$(input).closest(".multi-range").find(".time-output-1").text($(input).val());			
			fillColor(input, range2);
		}
		
		function handleRangeLast(input) {
			var range1 = $(input).prev("input");
			if (parseInt($(input).val()) - parseInt($(range1).val()) <= minGap) {
				$(input).val(parseInt($(range1).val())+minGap);
			}
			$(input).closest(".multi-range").find(".time-output-2").text($(input).val());
			fillColor(range1, input);
		}

		function fillColor(valFirst, valLast) {
			var slideMax = 24;
			precent1 = (parseInt($(valFirst).val()) / slideMax) * 100;
			precent2 = (parseInt($(valLast).val()) / slideMax) * 100;
			$(valFirst).closest(".multi-range").find(".slide-track").attr('style', `background: linear-gradient(to right, #F3BF8F ${precent1}%, #3B7ACC ${precent1}%, #3B7ACC ${precent2}%, #F3BF8F ${precent2}%)`);
		}
	})
</script>