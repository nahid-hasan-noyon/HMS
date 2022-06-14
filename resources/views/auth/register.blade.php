<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>HMS Registration</title>

	<!-- Site favicon -->
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('src\images\login_icon.png')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('src/plugins/jquery-steps/jquery.steps.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/style.css')}}">
</head>

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="{{route('login')}}">
					<img src="{{asset('src/images/HMS.png')}}" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="{{route('login')}}">Login</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!--Registration Form-->
	<div class="register-page-wrap d-flex align-items-center justify-content-center">
		<div class="container ">
			<div class="row">
				@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			</div>
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-6">
					<img src="{{asset('vendors/images/register-page-img.png')}}" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
			<div class="register-box mw-100 p-5 bg-white box-shadow border-radius-10" style="height: 620px; ">
			<form action="{{route('register')}}" method="POST">
			@csrf
			<fieldset>
				<h2 class="heading col-md-12 text-center"><b>Registration in HMS</b></h2><br>
			<div class="form-group">
				<label class="col-md-8 control-label">Name</label>  
				<div class="col-md-12 inputGroupContainer">
				<div class="input-group">
				<input  name="name" placeholder="Name" class="form-control"  type="text">
				  </div>
				</div>
			  </div>
			  {{-- <div class="form-group">
				<label class="col-md-4 control-label">Username</label>  
				<div class="col-md-12 inputGroupContainer">
				<div class="input-group">
				<input  name="user_name" placeholder="Username" class="form-control"  type="text">
				  </div>
				</div>
			  </div> --}}

			  <div class="form-group">
				<label class="col-md-8 control-label">E-Mail</label>  
				  <div class="col-md-12 inputGroupContainer">
				  <div class="input-group">
				<input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
				  </div>
				</div>
			  </div>

			  <div class="form-group">
				<label class="col-md-8 control-label" >Password</label> 
				  <div class="col-md-12 inputGroupContainer">
				  <div class="input-group">
				<input name="password" placeholder="Password" class="form-control"  type="password">
				  </div>
				</div>
			  </div>

			  <div class="form-group">
				<label class="col-md-8 control-label" >Confirm Password</label> 
				  <div class="col-md-12 inputGroupContainer">
				  <div class="input-group">
				<input name="password_confirmation" placeholder="Confirm Password" class="form-control"  type="password">
				  </div>
				</div>
			  </div>

			  <div class="form-group col-sm-12">
					<button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
			  </div>
			  
		</fieldset>
		</form>
			</div>
				</div>
		</div>
	</div>
	<!-- js -->
	<script src="{{asset('vendors/scripts/core.js')}}"></script>
	<script src="{{asset('vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('vendors/scripts/process.js')}}"></script>
	<script src="{{asset('vendors/scripts/layout-settings.js')}}"></script>
	<script src="{{asset('src/plugins/jquery-steps/jquery.steps.js')}}"></script>
	<script src="{{asset('vendors/scripts/steps-setting.js')}}"></script>
</body>

</html>