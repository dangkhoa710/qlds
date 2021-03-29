<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>TNTT - 2021</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="public/images/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png')}}" sizes="32x32" href="public/images/favicon-32x32.png')}}">
	<link rel="icon" type="image/png')}}" sizes="16x16" href="public/images/favicon-16x16.png')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/styles/style.css')}}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>

	@include('thanhphan.top');
	@include('thanhphan.setting_theme');
	@include('thanhphan.menuleft');
	<div class="mobile-menu-overlay"></div>
	@yield('content');
	@include('thanhphan.footer');
	<!-- js -->
	<script src="{{asset('public/scripts/core.js')}}"></script>
	<script src="{{asset('public/scripts/script.min.js')}}"></script>
	<script src="{{asset('public/scripts/process.js')}}"></script>
	<script src="{{asset('public/scripts/layout-settings.js')}}"></script>
	<script src="{{asset('public/src/plugins/apexcharts/apexcharts.min.js')}}"></script>
	<script src="{{asset('public/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('public/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('public/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('public/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
	<script src="{{asset('public/scripts/dashboard.js')}}"></script>
</body>
</html>