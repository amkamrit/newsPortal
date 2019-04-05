<!DOCTYPE html>
<html>
<head>
	<title>Amrit Kafle</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/custome.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
			@include('Admin.Admin-Layouts.head')
			</div>
		</div>
		@yield('content')

	</div>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>