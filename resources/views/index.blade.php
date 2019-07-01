@extends('Frontend.Frontends.app')

@section('content')

<!-- Second Ad Start -->
    <div class="row secondad">
        <img src="asset/image/ad1.gif" class="img-responsive center-block">
    </div>
    <!--Second Ad End -->

    <!--HeadLine Start  -->

    <div class="row headline">
        <div class="col-sm-6">
            <button class="btn btn-danger btn-lg">हेडलाइन</button>

        </div>
        <div class="col-sm-6" align="right">
            <a href="" class="btn btn-primary btn-md moreButton">सबै </a>
        </div>
    </div>
    <hr>
    <div class="row headlineNews">
        @foreach($headline as $headlines)
        <div class="col-sm-3">
            <div class="row">
            <?php $url=url('image/'.$headlines->image); ?>
                <img src="{{$url}}" width="100%">
            </div>
            <div class="row">
                <a href="{{url('singlePage')}}"><h3 align="center">{{$headlines->name}} </h3></a>
            </div>
        </div>
        @endforeach
    </div>
    <!--HeadLine End  -->
<div class="row add3">
    <img src="asset/image/ad3.gif" class="img-responsive center-block">
</div>
<!-- News Start -->
    
    <div class="row headline">
        <div class="col-sm-6">
            <button class="btn btn-danger btn-lg">समाचार</button>

        </div>
        <div class="col-sm-6" align="right">
            <button class="btn btn-primary btn-md moreButton">सबै </button>
        </div>
    </div>
    <hr>
    <div class="row samachgar">
        @foreach($newsOnes as $newsOne)
        <div class="col-sm-6">
             <?php $url=url('image/'.$newsOne->image); ?>
            <img src="{{$url}}" width="100%">
        </div>
        <div class="col-sm-6">
            <a href=""><h3>{{$newsOne->name}}</h3></a>
            <p>{!!$newsOne->description!!} </p>
        </div>
    </div>
    @endforeach
    <div class="row spadd">
        <div class="col-sm-6">
            <img src="asset/image/ad10.jpeg">
        </div>
        <div class="col-sm-6">
            <img src="asset/image/ad11.jpg">
        </div>
    </div>
    <div class="row samachgarImage">
          @foreach($newss as $news)
        <div class="col-sm-3">
            <div class="row">
                 <?php $url=url('image/'.$news->image); ?>
                <img src="{{$url}}" width="100%">
            </div>
            <div class="row">
                <a href=""><h3 align="center">{{$news->name}}</h3></a>
            </div>
        </div>
        @endforeach
    </div>
<!-- News End -->
    
    <div class="row add3">
    <img src="asset/image/ad3.gif" class="img-responsive center-block">
</div>
        <!--Suchana Prabadhi Start  -->

    <div class="row headline">
        <div class="col-sm-6">
            <button class="btn btn-danger btn-lg">सूचना प्रविधि</button>

        </div>
        <div class="col-sm-6" align="right">
            <button class="btn btn-primary btn-md moreButton">सबै </button>
        </div>
    </div>
    <hr>
    <div class="row suchanaPrabadi">
        <div class="col-sm-4">
            @foreach($tecnologyOne as $tecnologyOnes)
            <div class="row">
                <?php $url=url('image/'.$tecnologyOnes->image); ?>
                <img src="{{$url}}" width="100%">
            </div>
            <div class="row">
                <a href=""><h3 align="center">{{$tecnologyOnes->name}}</h3></a>
            </div>
            <div class="row">
                <p align="center">{!!str_limit($tecnologyOnes ->description, $limit = 300, $end = '...')!!}<br> <button class="btn btn-primary btn-md">More</button></p>
            </div>
            @endforeach
        </div>
        <div class="col-sm-6">
            <div class="row">
                @foreach($tecnology as $tecnologys)
                <div class="col-sm-6">
                    <div class="row">
                        <?php $url=url('image/'.$tecnologys->image); ?>
                        <img src="{{$url}}" width="100%" height="220px">
                    </div>
                    <div class="row">
                        <a href=""><h4 align="center">{{$tecnologys->name}}</h4></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
                <div class="col-sm-2 treding" >
                        <h2>समाचारहरु</h2>
                        <table class="table table-striped">
                                    <tbody>
                                        @foreach($newsList as $newsLists)
                                      <tr>
                                        <td><a href="">{{$newsLists->name}}</a></td>
                                      </tr>
                                      @endforeach

                                    </tbody>
                                  </table>
                </div>
        </div>

    <!--Suchana Prabadhi End  -->

        <div class="row add3">
            <img src="asset/image/ad4.gif" class="img-responsive center-block" >
        </div>
    <!-- Intreview Start -->

    <div class="row headline">
        <div class="col-sm-6">
            <button class="btn btn-danger btn-lg">अन्तर्वार्ता </button>

        </div>
        <div class="col-sm-6" align="right">
            <button class="btn btn-primary btn-md moreButton">सबै </button>
        </div>
    </div>
    <hr>
          @foreach($intreview as $intreviews)
    <div class="row intreviews">
         <?php $url=url('image/'.$intreviews->image); ?>
        <img src="asset/image/intreview.jpg" class="img-responsive center-block" >
    </div>
    @endforeach
    <!-- Intreview End -->
            <div class="row add3">
            <img src="asset/image/ad5.gif" class="img-responsive center-block" >
        </div>
    <!-- Entertainment Start -->

    <div class="row headline">

        <div class="col-sm-6">
            <button class="btn btn-danger btn-lg">मनोरञ्जन </button>

        </div>
        <div class="col-sm-6" align="right">
            <button class="btn btn-primary btn-md moreButton">सबै </button>
        </div>
    </div>
    <hr>
    <div class="row entertainment">
        @foreach($entertimentOnce as $entertimentOnces)
        <div class="col-sm-6">
             <?php $url=url('image/'.$entertimentOnces->image); ?>
            <img src="{{$url}}" class="img-responsive center-block" style="height: 600px;">
            <div class="text-block">
                <h3>{{$entertimentOnces->name}} </h3>
                
            </div>
        </div>
        @endforeach
        <div class="col-sm-6">
            <div class="row">
                @foreach($entertiment as $entertiments)
                <div class="col-sm-6">
                    <div class="row">
                        <?php $url=url('image/'.$entertiments->image); ?>
                        <img src="{{$url}}" class="rounded-circle">
                    </div>
                    <div class="row">
                        <a href=""><h3 align="center">{{$entertiments->name}}</h3></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Entertainment End -->
<div class="row add3">
    <img src="asset/image/ad6.gif" class=" img-responsive center-block">
</div>
<!-- Sports Start -->
    
    <div class="row headline">
        <div class="col-sm-6">
            <button class="btn btn-danger btn-lg">खेल </button>

        </div>
        <div class="col-sm-6" align="right">
            <button class="btn btn-primary btn-md moreButton">सबै </button>
        </div>
    </div>
    <hr>
    <div class="row sport">
        <div class="col-sm-6">
            @foreach($sportOnce as $sportOnces)
            <?php $url=url('image/'.$sportOnces->image); ?>
            <img src="{{$url}}" width="100%" >
        </div>
        <div class="col-sm-3">
            <a href=""><h3>{{$sportOnces->name}}</h3></a>
            <p>{!!str_limit($sportOnces ->description, $limit = 800, $end = '...')!!}</p>
        </div>
        @endforeach
        <div class="col-sm-3 smadd">
            <img src="asset/image/smadd1.gif" width="100%"><br>
            <img src="asset/image/smadd2.gif" width="100%">
        </div>
    </div>
    <div class="row sportlist">
         @foreach($sport as $sports)
        <div class="col-sm-3">
            <div class="row ">
                 <?php $url=url('image/'.$sports->image); ?>
                <img src="{{$url}}" class="rounded-circle" width="100%">
            </div>
            <div class="row">
                <a href=""><h3 align="center">{{$sports->name}}</h3></a>
            </div>
        </div>
        @endforeach

    </div>
<!-- Sports End -->
<hr>
<!-- Special News start -->
@foreach($randomNew as $randomNews)
    <div class="row special">
        <a href=""><h3 align="center"> {{$randomNews->name}}</h3></a>
    </div>
    <div class="row special">
        <?php $url=url('image/'.$randomNews->image); ?>
        <img src="{{$url}}" width="100%">
    </div>
    <hr>
    @endforeach
<!-- Special News End -->


@endsection