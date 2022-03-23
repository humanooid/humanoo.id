<!DOCTYPE html>
<html lang="en-US">

	<head>
		@yield('css-section')
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Bolby - Portfolio/CV/Resume HTML Template</title>
		<meta name="description" content="Bolby - Portfolio/CV/Resume HTML Template">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

		<!-- STYLESHEETS -->
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" media="all">
		<link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" type="text/css" media="all">
		<link rel="stylesheet" href="{{ asset('assets/css/simple-line-icons.css') }}" type="text/css" media="all">
		<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" type="text/css" media="all">
		<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css" media="all">
		<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" type="text/css" media="all">
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" media="all">

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>
		@yield('content')
		<!-- Go to top button -->
		<a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>
		
		@yield('js-section')
		<!-- SCRIPTS -->
		<script src="{{ asset('assets/js/jquery-1.12.3.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
		<script src="{{ asset('assets/js/popper.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/sotope.pkgd.min.js') }}"></script>
		<script src="{{ asset('assets/js/infinite-scroll.min.js') }}"></script>
		<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
		<script src="{{ asset('assets/js/slick.min.js') }}"></script>
		<script src="{{ asset('assets/js/contact.js') }}"></script>
		<script src="{{ asset('assets/js/validator.js') }}"></script>
		<script src="{{ asset('assets/js/wow.min.js') }}"></script>
		<script src="{{ asset('assets/js/morphext.min.js') }}"></script>
		<script src="{{ asset('assets/js/parallax.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('assets/js/custom.js') }}"></script>
		
	</body>
	
</html>
	