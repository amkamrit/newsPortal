<!--Header Top Ad banner Start -->
    <div class="topbanner">
        <img src="asset/image/top-header-gif-image.gif" class="img-responsive center-block">
    </div>
    <!--Header Top Ad banner end -->
    <!-- Logo start --> 
    <div class="jumbtron toplogo">
        <h1 align="center">खबर आजको </h1>
        <p align="center"> सबै भन्दा पहिले </p>
    </div>
    <!--Logo End -->

    <!-- Nav Start-->
    <nav class="navbar nav navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
    @foreach($menu as $menus)

                <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="{{url('categoryPage')}}">{{$menus->name}}<span class="caret"></span></a>

          <ul class="dropdown-menu">
            @foreach($submenu as $submenus)
            @if($menus->id==$submenus->mainMenu)
            <li><a href="{{url('categoryPage')}}">{{$submenus->name}}</a></li>
            @endif

             @endforeach
          </ul>

        </li>

@endforeach

      </ul>
    </div>
  </div>
</nav>
    <!-- Nav End