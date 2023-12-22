// LIST OF FUNCTIONS
var delayTimer;
function getAirport(ele) {
    clearTimeout(delayTimer);
    delayTimer = setTimeout(function() {
        
        const objEle = $(ele);
        const term = objEle.val();
        if(term) {
            $.ajax({
                url: '/flight/search-airport',
                data : {
                    term
                },
                method : 'GET',
                headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
                success: function (res) {
                    objEle.parent()
                        .find('.dropdown-searchflight')
                        .html(res.html);
                },
                error: function (err) {
                    console.warn(err);
                }
            });
        }
    }, 300);
}

function selectAirport(ele) {
    const airportCode = $(ele).data('code');
    const airportText = $(ele).find('.airport').text();
    const input = $(ele).parents('.jsFlight').find('.jsFlightInput');
    const inputValue = $(ele).parents('.jsFlight').find('.jsFlightInputValue');
    
    input.val(airportText).trigger('change');
    inputValue.val(airportCode);
}

function checkData(ele) {
    let value = $(ele).val();
    let type = $(ele).attr('type');
    if(value === '' || value === undefined || value == 0
        || (type === 'checkbox' && $(ele).prop('checked') === false)
        || (type === 'email' && !ValidateEmail(value))) {

        $(ele).parent().addClass('invalid');
        return false;
    }
    $(ele).parent().removeClass('invalid');
    return true;
}

function changeTravelClass(input) {
    search.travelClass = input;
    $(".travel-class-item").each(function(index, item) {
        if($(item).data('value') === input) {
            $(item).addClass("selected");
            $(".travel-class-text").text($(item).text());
        } else {
            $(item).removeClass("selected");
        }
    });
    $("#travel_class").val(search.travelClass);
}

function showListAirport(ele) {
    const sibling = $(ele).siblings('.dropdown-searchflight');
    if(!$(ele).hasClass('show')) {
        sibling.addClass('show');
        $(ele).addClass('show');
    }
}


// ACTION AFTER LOAD PAGE

$(document).ready(function() {
    window.search = {
        direction: $('#direction').val(),
        adults: parseInt($('#adults').val()),
        children: parseInt($('#children').val()),
        infants: parseInt($('#infants').val()),
        travelClass: 'economy',
        flights: 2,
    };

	// Change direction flight
	$(".direction-item").click(function() {
        search.direction = $(this).data("value");
        $(".direction-item").each(function(index, item) {
            if($(item).data('value') === search.direction) {
                $(item).addClass("selected");
                $(".direction-text").text($(item).text());
            } else {
                $(item).removeClass("selected");
            }
        });
        $("#direction").val(search.direction);
        
        // Change action
        switch (search.direction) {
            case 'round-trip':
                $(".js-round-trip").show();
                $(".js-one-way").hide();
                $(".js-multi").hide();
                break;
            case 'one-way':
                $(".js-round-trip").hide();
                $(".js-one-way").show();
                $(".js-multi").hide();
                break;
            case 'multi-city':
                $(".js-round-trip").hide();
                $(".js-one-way").hide();
                $(".js-multi").show();
                break;
        }
	});

	// Increase passenger
	$(".pax-add").click(function() {
        const type = $(this).data('value');
        switch (type) {
            case 'adult':
                if((search.adults + search.children) < 9) {
                    ++search.adults;
                    $(".adults-text").text(search.adults);
                }
                break;
            case 'children':
                if((search.adults + search.children) < 9) {
                    ++search.children;
                    $(".children-text").text(search.children);
                }
                break;
            case 'infant':
                if(search.infants < search.adults) {
                    ++search.infants;
                    $(".infants-text").text(search.infants);
                }
                break;
        }
        $(".pax-text").text(search.adults + search.children + search.infants);
        $("#adults").val(search.adults);
        $("#children").val(search.children);
        $("#infants").val(search.infants);
	});

	// Decrease passenger
	$(".pax-remove").click(function() {
		const type = $(this).data('value');
		switch (type) {
			case 'adult':
				if(search.adults > 0 && search.adults > search.infants) {
					--search.adults;
					$(".adults-text").text(search.adults);
				}
				break;
			case 'children':
				if(search.children > 0) {
					--search.children;
					$(".children-text").text(search.children);
				}
				break;
			case 'infant':
				if(search.infants > 0) {
					--search.infants;
					$(".infants-text").text(search.infants);
				}
				break;
		}
		$(".pax-text").text(search.adults + search.children + search.infants);
        $("#adults").val(search.adults);
        $("#children").val(search.children);
        $("#infants").val(search.infants);
	});

	// Change travel class
	$(".travel-class-item").click(function() {
        const value = $(this).data("value");
        changeTravelClass(value);
	});

	$(".btn-add-flight").on('click', function() {
        if(search.flights < 6) {
            ++search.flights;
            $('#js-flight-more').append(`
                <div class="row g-1 mb-3 js-template-item">
                    <div class="col-md-3">
                        <div class="input-curve">
                            <div class="curve-control curve-right">
                                <div class="autocomplete-wrapper form-floating dropdown jsFlight">
                                    <input class="form-control rounded-3 ps-4 text-truncate jsFlightInput" id="multi_from_${search.flights}"
                                        placeholder="Where from?" data-bs-toggle="dropdown" data-bs-auto-close="true">
                                    <label class="ms-2 ps-3"><i class="far fa-map-marker-alt pe-2"></i>Where from?</label>
                                    <div class="dropdown-menu p-0 w-100 medium dropdown-searchflight rounded-3">
                                        <li class="searchflight-item">
                                            <a class="dropdown-item">
                                                No data found
                                            </a>
                                        </li>
                                    </div>
                                    <input type="hidden" name="multi_from[${search.flights}]" class="jsFlightInputValue">
							        <small class="form-text text-danger">This field is required</small>
                                </div>
                            </div>
                            <button type="button" class="btn-exchange curve-text border-0 bg-transparent" data-value="0">
                                <i class="fal fa-exchange"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-curve">
                            <div class="curve-control curve-left">
                                <div class="autocomplete-wrapper form-floating dropdown jsFlight">
                                    <input class="form-control rounded-3 ps-4 text-truncate jsFlightInput" id="multi_to_${search.flights}"
                                        placeholder="Where to?" data-bs-toggle="dropdown" data-bs-auto-close="true">
                                    <label class="ms-2 ps-3"><i class="far fa-map-marker-alt pe-2"></i>Where to?</label>
                                    <div class="dropdown-menu p-0 w-100 medium dropdown-searchflight rounded-3">
                                        <li class="searchflight-item">
                                            <a class="dropdown-item">
                                                No data found
                                            </a>
                                        </li>
                                    </div>
                                    <input type="hidden" name="multi_to[${search.flights}]" class="jsFlightInputValue">
							        <small class="form-text text-danger">This field is required</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input class="form-control rounded-3 ps-4 js-datepicker-${search.flights}" autocomplete="off"
                                name="multi_departure[${search.flights}]" id="multi_departure_${search.flights}" readonly>
                            <label for="departureDate" class="ms-2 ps-3">
                                <i class="far fa-calendar-alt pe-2"></i> Departure date
                            </label>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="d-flex align-items-center h-100">
                            <a type="button" class="bg-orange border rounded-3 btn-remove">
                                <span class="fs-3 fw-bold text-white">-</span>
                            </a>
                        </div>
                    </div>
                </div>
            `);

            $(`.js-datepicker-${search.flights}`).daterangepicker({
                singleDatePicker: true,
                minDate: moment(),
                startDate: moment(),
                autoApply: true,
                locale: {
                    format: 'YYYY/MM/DD'
                }
            });
            
            if(search.flights === 6) {
                $(this).hide();
            }
        }
	});
	
    $("#js-flight-more").on('click', '.btn-remove', function() {
        --search.flights;
        $(this).parents('.js-template-item').remove();
        if(search.flights < 6) {
            $(".btn-add-flight").show();
        }
	});
    
    // Input search departure
    $('#js-flight-more').on('keyup', '.jsFlightInput', function() {
        getAirport(this);
        showListAirport(this);
    })

    $('#js-flight-more').on('change', '.jsFlightInput', function() {
        checkData(this);
    })

    $('.jsFlightInput').on('keyup', function() {
        getAirport(this);
        showListAirport(this);
    })

    $('.jsFlightInput').on('change', function() {
        checkData(this);
    })

    // Select flight
    $('#js-flight-more').on('click', '.searchflight-item', function() {
        selectAirport(this);
    })

    $('.dropdown-searchflight').on('click', '.searchflight-item', function() {
        selectAirport(this);
    })

    // Change date
    $('#input_departure').on('change', function() {
        const returnDate = $('#input_return').val();
        const departureDate = $('#input_departure').val();
        if(new Date(returnDate).getTime() < new Date(departureDate).getTime()) {
            $('#input_return').data('daterangepicker').setStartDate(departureDate);
            $('#input_return').data('daterangepicker').setEndDate(departureDate);
        }
    })

    $('#input_return').on('change', function() {
        const returnDate = $('#input_return').val();
        const departureDate = $('#input_departure').val();
        if(new Date(returnDate).getTime() < new Date(departureDate).getTime()) {
            $('#input_departure').data('daterangepicker').setStartDate(returnDate);
            $('#input_departure').data('daterangepicker').setEndDate(returnDate);
        }
    })

    // Submit form
    $('#frm-search').on('submit', function(e) {
        
        let inValid = 0;
        let lists;
        switch (search.direction) {
			case 'round-trip':
                lists = ['#input_from', '#input_to', '#input_departure', '#input_return'];
                lists.forEach(function(item) {
                    if(!checkData(item)) {
                        inValid++;
                        if(inValid === 1) $(item).focus()
                    }
                });
                if(inValid > 0) 
                    e.preventDefault();{
                }
				break;
			case 'one-way':
				lists = ['#input_from', '#input_to', '#input_departure'];
                lists.forEach(function(item) {
                    if(!checkData(item)) {
                        inValid++;
                        if(inValid === 1) $(item).focus()
                    }
                });
                if(inValid > 0) 
                    e.preventDefault();{
                }
				break;
			case 'multi-city':
				lists = [
                    '#input_from', '#input_to', '#input_departure',
                    '#multi_from_2', '#multi_to_2', '#multi_departure_2'
                ];
                lists.forEach(function(item) {
                    if(!checkData(item)) {
                        inValid++;
                        if(inValid === 1) $(item).focus()
                    }
                });

                if(search.flights > 2) {
                    for (let index = 3; index <= search.flights; index++) {
                        if(!checkData(`#multi_from_${index}`)) {
                            inValid++;
                            if(inValid === 1) $(`#multi_from_${index}`).focus()
                        }
                        if(!checkData(`#multi_to_${index}`)) {
                            inValid++;
                            if(inValid === 1) $(`#multi_to_${index}`).focus()
                        }
                        if(!checkData(`#multi_departure_${index}`)) {
                            inValid++;
                            if(inValid === 1) $(`#multi_departure_${index}`).focus()
                        }
                    }
                }

                if(inValid > 0) 
                    e.preventDefault();{
                }
				break;
		}
    })
})