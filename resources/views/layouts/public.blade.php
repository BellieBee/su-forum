<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
	<title>Foro de Steven Universe</title>

	<!-- Styles  -->
	{!! Html::style("vendor/bootstrap-3/css/bootstrap.min.css") !!}
	{!! Html::style("css/style.css") !!}

	@yield('styles')
</head>
<body>
	@include('partials.nav-bar')

	@include('partials.banner')

	<hr>

	<div class="container">

		@yield('content')
		
	</div>

	<hr>
	<footer class="foot">
		<div class="container">
			<p><span class="glyphicon glyphicon-star" aria-hidden="true"></span>SU Forum es propiedad intelectual de DreamCatcher &copy; - 2017</p>
		</div>
	</footer>

	
	<!-- Scripts -->
	{!! Html::script('js/jquery-3.1.1.min.js') !!}
	{!! Html::script('vendor/bootstrap-3/js/bootstrap.min.js') !!}
</body>
</html>