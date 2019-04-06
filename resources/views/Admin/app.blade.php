<!DOCTYPE html>
<html>
<head>
	<title>Amrit Kafle</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('css/custome.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
			@include('Admin.Admin-Layouts.head')
			</div>
		</div>
	</div>
	<div class="container">
	<div class="row">
		<div class="col-sm-4">
			@include('Admin.Admin-Layouts.slider')
		</div>
		<div class="col-sm-6">
			@yield('content')
		</div>
	</div>
</div>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>