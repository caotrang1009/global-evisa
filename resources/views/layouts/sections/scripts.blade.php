<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script src="{{ asset('assets/js/telinput/js/intlTelInput.min.js') }}"></script>
<script src="{{ asset('assets/js/flight.js') }}?id={{ filemtime('assets/js/flight.js') }}"></script>
<script src="{{ asset('assets/js/search.js') }}?id={{ filemtime('assets/js/search.js') }}"></script>
@vite('resources/js/app.js')