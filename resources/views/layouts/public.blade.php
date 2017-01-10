<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
	<title>Foro de Steven Universe</title>

	<!-- Styles  -->
	{!! HTML::style("vendor/bootstrap-3/css/bootstrap.min.css") !!}

	@yield('styles')
</head>
<body>
	@include('partials.nav-bar')

	<div class="container">

		@yield('content')
		
	</div>
	
	<!-- Scripts -->
	{!! HTML::script('js/jquery-3.1.1.min.js') !!}
	{!! HTML::script('vendor/bootstrap-3/js/bootstrap.min.js') !!}
</body>
</html>