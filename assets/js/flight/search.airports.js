$(document).ready(function() {
	var direction		= "round-trip";
	var travelClass		= "ECONOMY";
	var adults			= 1;
	var children		= 0;
	var infants			= 0;
	var totalPax		= adults + children + infants;
	var startDate		= "";
	var endDate			= "";
	var multiFlightItem	= $(".multi-city-item").first().prop('outerHTML');
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
		$(".dropdown-direction .direction-item").each(function() {
			if (direction == $(this).attr("data-value")) {
				$(this).addClass("selected");
			} else {
				$(this).removeClass("selected");
			}
		});
		$("#direction").val(direction);
		$(".direction-text").text($("."+direction).text());
		
		$("#adults").val(adults);
		$(".adults-text").text(adults);
		
		$("#children").val(children);
		$(".children-text").text(children);
		
		$("#infants").val(infants);
		$(".infants-text").text(infants);

		$(".add-more-flight").hide();
		$(".multi-city-control").hide();
		$(".remove-flight").first().hide();
		
		if (totalPax <= 9) {
			$(".pax-text").text(totalPax);
		}
		
		$(".dropdown-travel-class .travel-class-item").each(function() {
			if (travelClass == $(this).attr("data-value")) {
				$(this).addClass("selected");
			} else {
				$(this).removeClass("selected");
			}
		});
		$("#travelClass").val(travelClass);
		$(".travel-class-value").text($("."+travelClass).text());
		$("#multiCityQty").val(1);
        console.log(flights)
        console.log(direction)
		$('.multi-city-control input').prop('disabled', true);
		$('.round-trip-part').removeClass('col-sm-4');
		
		setDate($("#departureDate"), new Date());
		setDate($("#returnDate"), $("#departureDate").val());
		var departureDateMultiCity = $("[id*='departureDateMultiCity']");
		if (departureDateMultiCity.length) {
			departureDateMultiCity.each(function(index, item) {
				var previousDate = (index > 0) ? $("#departureDateMultiCity_"+(index+1)) : $("#departureDate");
				setDate($(item), previousDate.val());
			});
		}

		if (direction == "round-trip") {
			$(".round-trip-control").show();
			$(".round-trip-control-input").addClass("input-curve");
		} else if (direction == "multi-city") {
			$(".multi-city-control").show();
			$(".add-more-flight").show();
            console.log(flights)
			$("#multiCityQty").val(flights);
			$('.multi-city-control input').prop('disabled', false);
			$(".round-trip-control").hide();
			$(".round-trip-control-input").removeClass("input-curve");
			$('.round-trip-part').addClass('col-sm-4');
		} else {
			$(".round-trip-control").hide();
			$(".round-trip-control-input").removeClass("input-curve");
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
				$(this).find(".remove-flight").show();
			}
		});
		$("#multiCityQty").val(flights);
		
		if (flights >= 6) {
			$(".btn-add-flight").hide();
		} else {
			$(".btn-add-flight").show();
		}
	}
	
	$(".direction-item").click(function() {
		direction = $(this).attr("data-value");
		showSelectElements();
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

	$(".btn-add-flight").click(function() {
		flights++;
		$(".multi-city-control").append(multiFlightItem);
		$('.multi-city-control input').prop('disabled', false);
		updateMultiCityItem();
        
		setDate($("#departureDateMultiCity_"+flights), addOneDay(new Date($("#departureDateMultiCity_"+(flights-1)).val())));
		$("#originLocationCodeMultiCity_"+flights).val($("#destinationLocationCodeMultiCity_"+(flights-1)).val());
		$("#destinationLocationCodeMultiCity_"+flights).val("");
	});

	$(".multi-city-control").on("click", ".btn-remove", function() {
		flights--;
		$(this).closest('.multi-city-item').remove();
		updateMultiCityItem();
	});
	
	$(document).on("change", ".datepicker", function(){
		checkDate($(this));
		showSelectElements();
	});
	
	initFlightForm();
	
	$("#frm-search").validate({
		rules: {
			"originLocationCode": {
				required: true
			},
			"destinationLocationCode": {
				required: true
			},
			"date": {
				required: true
			}
		},
		highlight: function(input){
			$(input).addClass('error');
		},
		errorPlacement: function(error, element){}
	});
	
	$(".btn-search").click(function(){
		$(".spinner").removeClass("d-none");
		$('.spinner .center-div').loader('spinner').show();
		$("#frm-search").submit();
	});
});
