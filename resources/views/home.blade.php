@extends('layouts.app')

@section('content')
<section>
	<div class="container">
		<div>
			<h2 class="text-danger">Hello World!</h2>
			<h3 id="append_here"></h3>
			<button class="btn btn-primary btn-test">Append</button>
		</div>
	</div>
</section>
	
<script>
	$(document).ready(function () {
		$('.btn-test').on('click', function(){
			$('#append_here').append('<span class="fs-3 text-primary">It is work</span>');
		})
	});
</script>
@endsection
