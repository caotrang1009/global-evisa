(function($) {
	
	"use strict";
	
	$(document).ready(function() {
		var minGap = 0;
		var filterOptions = ['price', 'airlines', 'stops', 'depart-time', 'landing-time', 'duration'];

		initLoadElement();

		$(".selectpicker").selectpicker();

		$(window).bind('load', function() {
			var multiRange = $(".multi-range");
			multiRange.each(function(index, item) {
				var inputRange = $(item).find("input[type='range']");
				handleRangeFirst($(inputRange).first());
				handleRangeLast($(inputRange).last());
			});
		});

		$(".price-range, .duration-range").on("input", function() {
			$(this).css('--val', $(this).val());
			$(this).parent(".range").find(".range__output").text($(this).val())
		});

		$(".depart-time-1, .landing-time-1").on("input", function() {
			handleRangeFirst($(this));
		});

		$(".depart-time-2, .landing-time-2").on("input", function() {
			handleRangeLast($(this));
		});

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
			var slideMax = parseInt($(valFirst).attr('max'));
			var precent1 = (parseInt($(valFirst).val()) / slideMax) * 100;
			var precent2 = (parseInt($(valLast).val()) / slideMax) * 100;
			$(valFirst).closest(".multi-range").find(".slide-track").attr('style', `background: linear-gradient(to right, #F3BF8F ${precent1}%, #3B7ACC ${precent1}%, #3B7ACC ${precent2}%, #F3BF8F ${precent2}%)`);
		}

		$('#filterModal').on('shown.bs.modal', function () {
			showFilter();
		});
		$('#sortModal').on('shown.bs.modal', function () {
			showSort();
		});

		$('#filterModal').on('hidden.bs.modal', function () {
			hideFilter();
		});
		$('#sortModal').on('hidden.bs.modal', function () {
			hideSort();
		});

		function hideFilter() {
			$.each(filterOptions, function (index, option) {
				var content = $('#filterModal').find(`.${option} .content`).clone(true);
				$('#filterModal').find(`.${option}`).html('');
				$(`#${option}`).append(content);
			});
		}
		function hideSort() {
			var content = $('#sortModal').find('.sort-options').clone(true);
			$('#sortModal').find('.modal-body').html('');
			$(`#sort .dropdown-menu`).append(content);
		}

		function showFilter() {
			$.each(filterOptions, function (index, option) {
				var content = $(`#${option} .content`).clone(true);
				$(`#${option}`).html('');
				$('#filterModal').find(`.${option}`).append(content);
			});
		}
		function showSort() {
			var content = $(`#sort .sort-options`).clone(true);
			$(`#sort .dropdown-menu`).html('');
			$('#sortModal').find('.modal-body').append(content);
		}

		$(window).resize(function () {
			if ($(window).width() < 576) {
				showFilter();
				showSort();
			} else {
				$('#filterModal .close').trigger("click");
				$('#sortModal .close').trigger("click");
				hideFilter();
				hideSort();
			}
		});
	});
	
	// Date Picker

	$('.datepicker').each(function(index, item) {
		const value = $(item).val() || moment();
		$(item).daterangepicker({
			singleDatePicker: true,
			minDate: moment(),
			startDate: value,
			autoApply: true,
			locale: {
				format: 'YYYY/MM/DD'
			}
		})
	});

	// Upload file
	$('.btn-upload-file').on('click', function(){
		$(this).parent().find('.uploaded-files').trigger('click');
	})
	$('.uploaded-files').on('change', function(){
		var files = $(this).prop('files');
		console.log(files);
		let render = $('.render-names');
		render.html('');
		for (const file of files) {
			render.append(`<p class="text-primary mb-0">${file.name}</p>`);
		}
		$(this).parent().find('.render-file-names').removeClass('d-none');
	})
	

})(jQuery);

var telinput = document.querySelector(".telinput");
if (telinput !== null) {
	var iti = intlTelInput(telinput, {
		placeholderNumberType: "MOBILE",
		utilsScript: "/js/telinput/js/utils.js"
	});
}

function initLoadElement() {
	var swiper = $(".swiper");
	if (swiper.length) {
		swiper.each(function() {
			var slider = $(this);
			var sliderCentered = slider.data("center-mode") ? slider.data("center-mode") : true;
			var sliderItems = slider.data("items") ? slider.data("items") : 3;
			var sliderItemsXl = slider.data("items-xl") ? slider.data("items-xl") : Number(sliderItems); //option: number (items in 1200 to end )
			var sliderItemsLg = slider.data("items-lg") ? slider.data("items-lg") : Number(sliderItemsXl); //option: number (items in 992 to 1199 )
			var sliderItemsMd = slider.data("items-md") ? slider.data("items-md") : Number(sliderItemsLg); //option: number (items in 768 to 991 )
			var sliderItemsSm = slider.data("items-sm") ? slider.data("items-sm") : Number(sliderItemsMd); //option: number (items in 576 to 767 )
			var sliderItemsXs = slider.data("items-xs") ? slider.data("items-xs") : Number(sliderItemsSm); //option: number (items in start to 575 )
			var sliderSpace = slider.data("space-between") ? slider.data("space-between") : 50;
			var slideParent = slider.data("parent");
			var slideRewind = slider.attr("data-rewind") ? false : true;
			var slideDirection = slider.data("direction") ? slider.data("direction") : 'horizontal';
			var arrowLeft = slider.data("prev") ? slider.data("prev") : '.swiper-button-prev';
			var arrowRight = slider.data("next") ? slider.data("next") : '.swiper-button-next';
			
			var swiper = new Swiper(slideParent+" .swiper", {
				direction: slideDirection,
				initialSlide: Math.floor(sliderItems/2),
				breakpoints: {
					576: {
						slidesPerView: sliderItemsXs,
						spaceBetween: 10,
					},
					768: {
						slidesPerView: sliderItemsSm,
						spaceBetween: sliderSpace,
					},
					992: {
						slidesPerView: sliderItemsMd,
						spaceBetween: sliderSpace,
					},
					1200: {
						slidesPerView: sliderItems,
						spaceBetween: sliderSpace
					}
				},
				freeMode: true, 
				centeredSlides: sliderCentered,
				loop: slideRewind,
				navigation: {
					nextEl: slideParent + " " +arrowRight,
					prevEl: slideParent + " " +arrowLeft,
				},
				pagination: {
				el: slideParent + " .swiper-pagination",
				}
			});
		});
	}
}


$(document).ready(function() {
	$('.tooltip-btn').tooltip();
});