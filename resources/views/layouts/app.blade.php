
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Рыболовная база Белый берег</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/MuseoSans/MuseoSans.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/normalize.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexboxgrid.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/app.css') }}">
		<script type="text/javascript" src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>

		<link rel="stylesheet" type="text/css" href="{{ asset('assets/js/OwlCarousel/assets/owl.carousel.min.css') }}">
		<script type="text/javascript" src="{{ asset('assets/js/OwlCarousel/owl.carousel.min.js') }}"></script>

		<link rel="stylesheet" type="text/css" href="{{ asset('assets/js/fancybox/jquery.fancybox.min.css') }}">
		<script type="text/javascript" src="{{ asset('assets/js/fancybox/jquery.fancybox.min.js') }}"></script>

		<script type="text/javascript" src="{{ asset('assets/js/jquery.sticky-kit.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
	</head>
	<body>
		@yield('app-content')
	</body>
</html>