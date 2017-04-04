<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title> @section('Title')Sipab</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

</head>
<body class="fondo">
	
		@yield('content')
	
	

	<!-- Scripts -->
	<script src="{{ asset('/js/jquery.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>

</body>
</html>
