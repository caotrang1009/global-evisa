(function($) {
	
	"use strict";
	
	$(document).ready(function() {

		initLoadElement();

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
		$(".selectpicker").selectpicker();
	});
	
})(jQuery);

var telinput = document.querySelector(".telinput");
if (telinput !== null) {
	var iti = intlTelInput(telinput, {
		placeholderNumberType: "MOBILE",
		utilsScript: "/assets/js/telinput/js/utils.js"
	});
}

function initLoadElement() {
	$('.datepicker').each(function() {
		$(this).daterangepicker({
			singleDatePicker: true,
			locale: {
				format: 'DD/MM/YYYY'
			},
			autoApply: true
		});
	});

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

