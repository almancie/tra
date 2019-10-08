<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="TRA Awards Portal">
		<meta name="author" content="">
		<title>TRA Awards</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<!-- Custom fonts for this template-->
		<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">

		<!-- Custom styles for this template-->
		<link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
	</head>
	<body>
		@yield('content')

		<!-- Bootstrap core JavaScript-->
		<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

		<!-- Core plugin JavaScript-->
		<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

		<!-- Custom scripts for all pages-->
		<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

		<!-- Page level plugins -->
		<script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

		<!-- Page level custom scripts -->
		<script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
		<script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>
	</body>
</html>