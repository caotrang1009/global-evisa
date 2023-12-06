$(document).ready(function() {
	var direction		= "oneway-roundtrip";
	var travelClass		= "ECONOMY";
	var adults			= 1;
	var children		= 0;
	var infants			= 0;
	var totalPax		= adults + children + infants;
	var multiFlightItem	= $(".multi-city-item").last().prop('outerHTML');
	var flights			= $("#multiCityQty").val();
	
	function addPax(type) {
		if (type == 'adult') {
			adults++;
			totalPax = adults + children + infants;			
			showSelectElements();
		}
		else if (type == 'children') {
			children++;
			totalPax = adults + children + infants;
			showSelectElements();
		}
		else if (type == 'infant') {
			infants = Math.min(++infants, adults);
			totalPax = adults + children + infants;
			showSelectElements();
		}
	}
	
	function removePax(type) {
		if (type == 'adult') {
			adults = adults > 1 ?  adults - 1 : adults;
			infants = Math.min(infants, adults);
			totalPax = adults + children + infants;
			showSelectElements();
		}
		else if (type == 'children') {
			children = children > 0 ? children - 1 : children;
			totalPax = adults + children + infants;
			showSelectElements();
		} else if (type == 'infant') {
			infants = Math.max(0, Math.min(--infants, adults));
			totalPax = adults + children + infants;
			showSelectElements();
		}
	}
	
	function showSelectElements(e) {
		$(".direction .direction-item").each(function() {
			if (direction == $(this).attr("data-show")) {
				$(this).addClass("btn-orange selected");
			} else {
				$(this).removeClass("btn-orange selected").addClass("bg-white");
			}
		});
		$("#direction").val(direction);
		
		$("#adults").val(adults);
		$(".adults-text").text(adults);
		
		$("#children").val(children);
		$(".children-text").text(children);
		
		$("#infants").val(infants);
		$(".infants-text").text(infants);
		
		$(".dropdown-travel-class .travel-class-item").each(function() {
			if (travelClass == $(this).attr("data-value")) {
				$(this).addClass("selected");
			} else {
				$(this).removeClass("selected");
			}
		});
		$("#travelClass").val(travelClass);
		$(".travel-class-value").val($("."+travelClass).text());

		$(".add-more-flight").hide();
		$(".multi-city-control").hide();
		$(".remove-flight").first().hide();
		$("#multiCityQty").val(1);
		$('.multi-city-control input').prop('disabled', true);
		
		setDate($("#departureDate"), new Date());
		setDate($("#returnDate"), $("#departureDate").val());
		var departureDateMultiCity = $("[id*='departureDateMultiCity']");
		if (departureDateMultiCity.length) {
			departureDateMultiCity.each(function(index, item) {
				var previousDate = (index > 0) ? $("#departureDateMultiCity_"+(index+1)) : $("#departureDate");
				setDate($(item), previousDate.val());
			});
		}

		if (direction == "oneway-roundtrip") {
			if ($("#round_trip_check").is(':checked')) {
				$("#returnDate").prop('disabled', false);
				$(".round-trip-control").show();
			} else {
				$("#returnDate").prop('disabled', true);
				$(".round-trip-control").hide();
			}
		} else if (direction == "multi-city") {
			$("#returnDate").prop('disabled', true);
			$(".round-trip-control").hide();
			$(".multi-city-control").show();
			$(".add-more-flight").show();
			$("#multiCityQty").val(flights);
			$('.multi-city-control input').prop('disabled', false);
		}
	}
	
	function setDate(datePicker, minDate) {
		if (datePicker.length) {
			datePicker.daterangepicker({
				singleDatePicker: true,
				minDate: minDate,
				startDate: datePicker.val(),
				endDate: datePicker.val(),
				locale: {
					format: 'DD/MM/YYYY'
				},
				autoApply: true
			});
		}
	}

	function addOneDay(date = new Date(), number = 1) {
		date.setDate(date.getDate() + number);
		return date;
	}
	
	function checkDate(dateMultiCity = null) {
		var departureDate = $("#departureDate").val();
		var returnDate = $("#returnDate").val();
		console.log(departureDate, returnDate)
		if (Date.parse(returnDate) < Date.parse(departureDate)) {
			$("#returnDate").data("daterangepicker").setStartDate(departureDate);
			$("#returnDate").data("daterangepicker").setEndDate(departureDate);
		}
		if (dateMultiCity != null && dateMultiCity.is("[id*='departureDateMultiCity']")) {
			var number = dateMultiCity.attr("id").match(/\d+/g);
			number = (!number) ? 1 : parseInt(number);
			var nextInputDate = $("#departureDateMultiCity_"+(parseInt(number)+1));
			if (Date.parse(nextInputDate.val()) < Date.parse(dateMultiCity.val())) {
				nextInputDate.data("daterangepicker").setStartDate(addOneDay(new Date(dateMultiCity.val())));
				nextInputDate.data("daterangepicker").setEndDate(addOneDay(new Date(dateMultiCity.val())));
			}
		}
	}
	
	function initFlightForm() {
		direction	= $("#direction").val();
		travelClass	= $("#travelClass").val();
		adults		= parseInt($("#adults").val());
		children	= parseInt($("#children").val());
		infants		= parseInt($("#infants").val());
		totalPax	= adults + children + infants;
		startDate	= $("#departureDate").val();
		endDate		= $("#returnDate").val();
		
		showSelectElements();
	}
	
	function updateMultiCityItem() {
		$(".multi-city-item").each(function(index, item) {
			$(this).find("[id*='originLocationCodeMultiCity_']").attr("id", "originLocationCodeMultiCity_" + (index+2));
			$(this).find("[id*='destinationLocationCodeMultiCity']").attr("id", "destinationLocationCodeMultiCity_" + (index+2));
			$(this).find("[id*='departureDateMultiCity']").attr("id", "departureDateMultiCity_" + (index+2));
			$(this).find(".btn-exchange").attr("data-value", (index+1));
			if (index != 0) {
				var findAdd = $(this).find(".add-more-flight");
				var img = $(findAdd).find("img");
				$(findAdd).removeClass("add-more-flight").addClass("remove-flight");
				$(findAdd).find("a").removeClass("btn-add").addClass("btn-remove");
				$(img).attr("src", $(img).data("link")+'/'+$(img).attr("alt"));
			}
		});
		$("#multiCityQty").val(flights);

		if (flights >= 5) {
			$(".add-more-flight a").addClass("d-none");
		} else {
			$(".add-more-flight a").removeClass("d-none");
		}
	}
	
	$(".direction-item").click(function() {
		direction = $(this).attr("data-show");
		showSelectElements();
	});

	$("#round_trip_check").change(function() {
		if ($(this).is(':checked')){
			$("#returnDate").prop('disabled', false);
			$(this).closest('.round-trip-control').find('.input-search-flight').removeClass("input-disabled").addClass("bg-white");
		} else {
			$("#returnDate").prop('disabled', true);
			$(this).closest('.round-trip-control').find('.input-search-flight').removeClass("bg-white").addClass("input-disabled");
		}
	});

	$(".pax-add").click(function() {
		if (totalPax < 9) {
			addPax($(this).attr("data-value"));
		}
	});

	$(".pax-remove").click(function() {
		removePax($(this).attr("data-value"));
	});

	$(".travel-class-item").click(function() {
		travelClass = $(this).attr("data-value");
		showSelectElements();
	});
	
	$(document).on("click", ".btn-exchange", function() {
		dataValue = $(this).data("value");
		var originLocationCode = $("[id*='originLocationCode']").eq(dataValue).val();
		$("[id*='originLocationCode']").eq(dataValue).val($("[id*='destinationLocationCode']").eq(dataValue).val());
		$("[id*='destinationLocationCode']").eq(dataValue).val(originLocationCode);
	});

	$(".btn-add-flight, .btn-add").click(function() {
		flights++;
		$(".multi-city-control").append(multiFlightItem);		
		$(".multi-city-item input").last().prop('disabled', false);
		updateMultiCityItem();		
	});

	$(".multi-city-control").on("click", ".btn-remove", function() {
		flights--;
		$(this).closest('.multi-city-item').remove();
		updateMultiCityItem();
	});
	
	$(document).on("change", ".date-picker", function(){
		checkDate($(this));
		showSelectElements();
	});

	$('#round_trip_check').on('change', function(){
		if ($(this).is(':checked')){
			$('.show-return-date').removeClass('d-none');
		} else {
			$('.show-return-date').addClass('d-none');
		}
	});
	
	initFlightForm();
});