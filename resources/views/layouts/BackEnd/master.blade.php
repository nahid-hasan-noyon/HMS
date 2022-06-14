<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Hostel Management System</title>

	<!-- Site favicon -->
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('src/images/home_icon.png')}}">


	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	@include('layouts.BackEnd.font.google')
	<!-- CSS -->
	@include('layouts.BackEnd.css.main')
</head>
<body>
	{{-- @include('layouts.BackEnd.loader') --}}

	{{-- Top Navbar --}}
	@include('layouts.BackEnd.nav')

	{{-- Left Sidebar --}}
	@include("layouts.BackEnd.sidebar")

	{{-- Mobile overlay --}}
	<div class="mobile-menu-overlay"></div>

	{{-- Main content --}}
	<div class="main-container">
		<div class="pd-ltr-20">
	@yield('content')
	{{-- Footer --}}
			<div class="footer-wrap pd-20 mb-20 card-box">
				Hostel Management System by <span class="text-primary">dev_</span>
			</div>
		</div>
	</div>
	<!-- js -->
	@include('layouts.BackEnd.js.main')
</body>
</html>