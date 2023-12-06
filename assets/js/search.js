$(document).ready(function() {
	var adults			= 1;
	var children		= 0;
	var infants			= 0;

	$(".pax-add").click(function() {
		addPax($(this).attr("data-value"));
	});

	$(".pax-remove").click(function() {
		removePax($(this).attr("data-value"));
	});
			
	function addPax(type) {
		if (type == 'adult') {
			adults++;
			showSelectElements();
		}
		else if (type == 'children') {
			children++;
			showSelectElements();
		}
		else if (type == 'infant') {
			infants++;
			showSelectElements();
		}
	}

	function removePax(type) {
		if (type == 'adult') {
			adults = adults > 1 ?  adults - 1 : adults;
			infants = Math.min(infants, adults);
			showSelectElements();
		}
		else if (type == 'children') {
			children = children > 0 ? children - 1 : children;
			showSelectElements();
		} else if (type == 'infant') {
			infants = infants > 0 ? infants - 1 : infants;
			showSelectElements();
		}
	}

	function showSelectElements(e) {
		$("#adults").val(adults);
		$(".adults-text").text(adults);
		
		$("#children").val(children);
		$(".children-text").text(children);
		
		$("#infants").val(infants);
		$(".infants-text").text(infants);
	}

	$(document).on("click", ".btn-exchange", function() {
		dataValue = $(this).data("value");
		var originLocationCode = $(".originLocationCode").eq(dataValue).text();
		$(".originLocationCode").eq(dataValue).text($(".destinationLocationCode").eq(dataValue).text());
		$(".destinationLocationCode").eq(dataValue).text(originLocationCode);

		var originTerminal = $(".originTerminal").eq(dataValue).text();
		$(".originTerminal").eq(dataValue).text($(".destinationTerminal").eq(dataValue).text());
		$(".destinationTerminal").eq(dataValue).text(originTerminal);
	});
});