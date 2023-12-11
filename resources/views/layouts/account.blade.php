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

			var validator = $("#frm-profile").validate({
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

			$('#btn-change-avatar').click(function(){
				$('#userfile').click();
			});

			function readURL(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();
					reader.onload = function(e) {
						$('#user-avatar').attr('src', e.target.result);
					};
					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#userfile").change(function() {
				readURL(this);
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