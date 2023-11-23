(function($) {
	
	"use strict";
	
	$(document).ready(function() {
		var adults			= 1;
		var children		= 0;
		var infants			= 0;

		$(".dropdown-menu a.dropdown-toggle").on("click", function(e) {
			if (!$(this).next().hasClass("show")) {
				$(this).parents(".dropdown-menu").first().find(".show").removeClass("show");
			}
			var subMenu = $(this).next(".dropdown-menu");
			subMenu.toggleClass("show");
			$(this).parents("li.nav-item.dropdown.show").on("hidden.bs.dropdown", function(e) {
				$(".dropdown-submenu .show").removeClass("show");
			});
			return false;
		});
		
		var swiper = $(".swiper");
		if (swiper.length) {
			swiper.each(function() {
				var slider = $(this);
				var sliderCentered = slider.data("center-mode") ? slider.data("center-mode") : true;
				var sliderItems = slider.data("items") ? slider.data("items") : 3;
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
						  slidesPerView: 1,
						  spaceBetween: 5,
						},
						768: {
						  slidesPerView: 2,
						  spaceBetween: 5,
						},
						1024: {
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
		$(".selectpicker").selectpicker();
		
		$('.datepicker').each(function() {
			$(this).daterangepicker({
				singleDatePicker: true,
				locale: {
					format: 'DD/MM/YYYY'
				},
				autoApply: true
			});
		});

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
	});
	
})(jQuery);

var telinput = document.querySelector(".telinput");
if (telinput !== null) {
	var iti = intlTelInput(telinput, {
		placeholderNumberType: "MOBILE",
		utilsScript: "/assets/js/telinput/js/utils.js"
	});
}

