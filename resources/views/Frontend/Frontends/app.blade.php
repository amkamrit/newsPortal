<!DOCTYPE html>
<html lang="en">

<head>
    <title>New Portal Website</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/custome.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

  <link href='https://fonts.googleapis.com/css?family=Denk One' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Dhurjati' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>

</head>

<body>
  <div class="container-fluid">


    @include('Frontend.Frontend_Layout.header')

    @yield('content')

    @include('Frontend.Frontend_Layout.footer')




    </div>
  @yield('scripts')
</body>

</html>
