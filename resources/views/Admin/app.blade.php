<!DOCTYPE html>
<html>
<head>
	<title>Amrit Kafle</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/custome.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
			@include('Admin.Admin-Layouts.head')
			</div>
		</div>
		@yield('content')

	</div>
	
</body>
</html>