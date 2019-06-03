<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Amrit Kafle</title>

    <!-- Favicon -->
   

    <!-- Core Stylesheet -->
    <link href="{{asset('asset/style.css')}}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{asset('asset/css/responsive.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/custome.css')}}">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body>
   <div class="super_container">


    @include('Frontend.Frontend_Layout.header')

    @yield('content')

    @include('Frontend.Frontend_Layout.footer')




    </div>
  @yield('scripts')
</body>


    <!-- Jquery-2.2.4 JS -->
    <script src="{{asset('asset/js/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('asset/js/popper.min.js')}}"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
    <!-- All Plugins JS -->
    <script src="{{asset('asset/js/plugins.js')}}"></script>
    <!-- Slick Slider Js-->
    <script src="{{asset('asset/js/slick.min.js')}}"></script>
    <!-- Footer Reveal JS -->
    <script src="{{asset('asset/js/footer-reveal.min.js')}}"></script>
    <!-- Active JS -->
    <script src="{{asset('asset/js/active.js')}}"></script>

</html>
