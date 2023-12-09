<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="robots" content="index,follow"/>
		<meta name="author" content="{{ env('APP_NAME') }}">
		<title>My Account</title>
		@include('layouts/sections/styles')
	</head>
	<body>
		@include('layouts/sections/header')
		@include('layouts/account/sections/sidebar')
		@include('layouts/sections/footer')
		@include('layouts/sections/scripts')

		
	<script>
		$(document).ready(function () {
			$(window).bind('load', function() {
				updateSvgColor($('#navbar-myaccount li.active img'), 'black');
			});
			
			$(document).on('blur', 'input', function () {
				if ($(this).valid()) {
					console.log($(this))
					$(this).removeClass('error');
					$(this).siblings("span").hide();
					updateSvgColor($(this).siblings('img'), '');
				}
			})

			function updateSvgColor(pathElement, fillColor) {
				if (fillColor!='') {
					fillColor = '-'+fillColor;
				}

				pathElement.each(function(index, item) {
					var iconName = $(item).data('icon-name');
					var src = `{{ asset('assets/svg/${iconName + fillColor}.svg') }}`;
					
					if ($(item).attr('alt') == 'plus') {
						iconPlus = src;
					} else if($(item).attr('alt') == 'minus') {
						var src = `{{ asset('assets/svg/outline/minus${fillColor}.svg') }}`;
						iconMinus = src;
					}
					$(item).attr('src', src);
				});
			}
		});
	</script>
	</body>
</html>