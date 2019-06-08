@extends('Frontend.Frontends.app')

@section('content')

<!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md">
                    <div class="wellcome-heading">
                        @foreach($about as $abouts)
                        <h2>{{$abouts->name}}</h2>
                        @endforeach
                        <p>MID-SENIOR Level PHP Developer</p>
                    </div>
                    <div class="get-start-area">
                        <!-- Form Start -->
                        <form action="#" method="post" class="form-inline">
                            <input type="email" class="form-control email" placeholder="info@amritkafle.com.np">
                            <input type="submit" class="submit" value="Get Started">
                        </form>
                        <!-- Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome thumb -->
        <div class="welcome-thumb wow fadeInDown" data-wow-delay="0.5s">

            <div class="row">
    <div class="col-lg-12">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
       <li data-target="#myCarousel" data-slide-to="3"></li>
       <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="{{asset('asset/img/scr-img/img2.png')}}" alt="Makalu Himal" style="width:100%;">
        <div class="carousel-caption">
         <!--  <h3>Makalu Himal</h3>
          <p>Sankwashava, Nepal</p> -->
        </div>
      </div>

      <div class="item">
        <img src="{{asset('asset/img/scr-img/img3.png')}}" alt="travel in nepal" style="width:100%;">
        <div class="carousel-caption">
          <!-- <h3>Beauty Of Nepal</h3>
          <p>Kathmandu, Nepal</p> -->
        </div>
      </div>
      <div class="item">
        <img src="{{asset('asset/img/scr-img/img4.png')}}" alt="travel in nepal" style="width:100%;">
        <div class="carousel-caption">
          <!-- <h3>Beauty Of Nepal</h3>
          <p>Kathmandu, Nepal</p> -->
        </div>
      </div>
      <div class="item">
        <img src="{{asset('asset/img/scr-img/img6.png')}}" alt="travel in nepal" style="width:100%;">
        <div class="carousel-caption">
          <!-- <h3>Beauty Of Nepal</h3>
          <p>Kathmandu, Nepal</p> -->
        </div>
      </div>
    
      <div class="item">
        <img src="{{asset('asset/img/scr-img/img5.png')}}" alt="paragalding nepal" style="width:100%;">
        <div class="carousel-caption">
        <!--   <h3>Paraglading</h3>
          <p>Pokhara, Nepal</p> -->
        </div>
      </div>
    </div>
    <!-- Left and right controls -->
    <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a> -->
 </div>
</div>
</div>

    <!-- Slider End Hear -->
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Special Area Start ***** -->
    <section class="special-area bg-white section_padding_100" >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Area -->
                    <div class="section-heading text-center">
                        <h2 style="padding-top: 50px;">Why I Am Special</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Special Area -->
                <div class="col-12 col-md-4" >
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s" style="background-color: #5a1515;">
                        <div class="single-icon" >
                            <i class="ti-mobile" aria-hidden="true"></i>
                        </div>
                        <h4 style="color: black">Easy to use</h4>
                        <p style="color: white">
                            User Friendly Website, Good Formattiong, SEO Friendly Website, Fast Loading Website etc.
                        </p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s"  style="background-color: #5a1515;">
                        <div class="single-icon">
                            <i class="ti-ruler-pencil" aria-hidden="true"></i>
                        </div>
                        <h4 style="color: black">Powerful Design</h4>
                        <p style="color: white">
                            Mobile Friendly Website, Effective Navigation, Good Internal Linking, Good search feature etc.
                        </p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s"  style="background-color: #5a1515;">
                        <div class="single-icon">
                            <i class="ti-settings" aria-hidden="true"></i>
                        </div>
                        <h4 style="color: black">Customizability</h4>
                        <p style="color: white">
                            Higher Customize Website, Easy to Integaration and Easy To Add New Feature etc.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Special Description Area -->
        <div class="special_description_area mt-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" id="about">
                        <div class="special_description_img">
                            <img src="{{asset('asset/img/bg-img/welcome-img.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 ml-xl-auto">
                        <div class="special_description_content">
                            <h2>About Us!</h2>
                            <p>
                                @foreach($about as $abouts)
                                {!!$abouts->description!!}
                                @endforeach
                            </p>
                            <div class="app-download-area">
                                <div class="app-download-btn wow fadeInUp" data-wow-delay="0.2s">
                                    <!-- Google Store Btn -->
                                    <a href="#">
                                        <i class="fa fa-facebok"></i>
                                        <p class="mb-0"><span>Follow on</span> Facebook</p>
                                    </a>
                                </div>
                                <div class="app-download-btn wow fadeInDown" data-wow-delay="0.4s">
                                    <!-- Apple Store Btn -->
                                    <a href="#">
                                        <i class="fa fa-linketin"></i>
                                        <p class="mb-0"><span>Follow on</span>Linkedin</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Special Area End ***** -->

    <!-- ***** Awesome Features Start ***** -->
    <section class="awesome-feature-area bg-white section_padding_0_50 clearfix" id="features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text -->
                    <div class="section-heading text-center">
                        <h2>My Portfolio</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-shopping-cart" aria-hidden="true"></i>
                        <h5>E-commerse</h5>
                        @foreach($projectList as $projectLists )
                        @if($projectLists->category==1)
                        <p>
                        <?php
                        
                        $url=url('image/'.$projectLists->coverImage);

                        ?>
                        <img src="{{$url}}" alt="IMG-PRODUCT" style="width: 200px; height: 200px"><br>
                            <a href="#contact" class="btn btn-primary" style="margin-left: 30px;">Order Now</a>
                        
                    </p>
                    @endif
                    @endforeach
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-align-justify" aria-hidden="true"></i>
                        <h5>News Portal</h5>
                         @foreach($projectList as $projectLists )
                        @if($projectLists->category==2)
                        <p>
                             <?php
                        
                        $url=url('image/'.$projectLists->coverImage);

                        ?>
                        <img src="{{$url}}" alt="IMG-PRODUCT" style="width: 200px; height: 200px"><br>
                        <a href="#contact" class="btn btn-primary" style="margin-left: 30px;">Order Now</a>
                        
                        </p>
                        @endif
                         @endforeach
                    </div>
                </div>

                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-car" aria-hidden="true"></i>
                        <h5>Travel and Hotel</h5>
                        <p>
                        @foreach($projectList as $projectLists )
                        @if($projectLists->category==3)
                        <p>
                             <?php
                        
                        $url=url('image/'.$projectLists->coverImage);

                        ?>
                        <img src="{{$url}}" alt="IMG-PRODUCT" style="width: 250px; height: 200px"><br>
                        <a href="#contact" class="btn btn-primary" style="margin-left: 30px;">Order Now</a>
                        
                        </p>
                        @endif
                         @endforeach
                        </p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-home" aria-hidden="true"></i>
                        <h5>Resturant and Cafe</h5>
                        @foreach($projectList as $projectLists )
                        @if($projectLists->category==4)
                        <p>
                             <?php
                        
                        $url=url('image/'.$projectLists->coverImage);

                        ?>
                        <img src="{{$url}}" alt="IMG-PRODUCT" style="width: 200px; height: 200px"><br>
                        <a href="#contact" class="btn btn-primary" style="margin-left: 30px;">Order Now</a>
                        
                        </p>
                        @endif
                         @endforeach
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-up" aria-hidden="true"></i>
                        <h5>Other Website</h5>
                        <p>
                        @foreach($projectList as $projectLists )
                        @if($projectLists->category==5)
                        <p>
                             <?php
                        
                        $url=url('image/'.$projectLists->coverImage);

                        ?>
                        <img src="{{$url}}" alt="IMG-PRODUCT" style="width: 250px; height: 200px"><br>
                        <a href="#contact" class="btn btn-primary" style="margin-left: 30px;">Order Now</a>
                        
                        </p>
                        @endif
                         @endforeach
                        </p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-headphone" aria-hidden="true"></i>
                        <h5>24/7 Online Support</h5>
                        <p>
                        @foreach($projectList as $projectLists )
                        @if($projectLists->category==6)
                        <p>
                             <?php
                        
                        $url=url('image/'.$projectLists->coverImage);

                        ?>
                        <img src="{{$url}}" alt="IMG-PRODUCT" style="width: 250px; height: 200px">
                        
                        </p>
                        @endif
                         @endforeach
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ***** Awesome Features End ***** -->

    <!-- ***** Video Area Start ***** -->
    <div class="video-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Video Area Start -->
                    <div class="video-area" style="background-image: url(asset/img/bg-img/video.png);">
                        <div class="video-play-btn">
                            <a href="https://www.youtube.com/watch?v=f5BBJ4ySgpo" class="video_btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Video Area End ***** -->

    

    <!-- ***** Client Feedback Area Start ***** -->
    <section class="clients-feedback-area bg-white section_padding_100 clearfix" id="testimonials">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="slider slider-for">
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <p>“ I have been using it for a number of years. I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job and save me the coding time and just the general hassle of hosting. ”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Aigars Silkalns</h5>
                                <p>Ceo Colorlib</p>
                            </div>
                        </div>
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <p>“ I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job and save me the coding time and just the general hassle of hosting. ”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Jennifer</h5>
                                <p>Developer</p>
                            </div>
                        </div>
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <p>“ I have been using it for a number of years. I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job.”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Helen</h5>
                                <p>Marketer</p>
                            </div>
                        </div>
                        <!-- Client Feedback Text  -->
                        <div class="client-feedback-text text-center">
                            <div class="client">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <p>“ I have been using it for a number of years. I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job and save me the coding time and just the general hassle of hosting. ”</p>
                            </div>
                            <div class="star-icon text-center">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Henry smith</h5>
                                <p>Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Client Thumbnail Area -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="slider slider-nav">
                        <div class="client-thumbnail">
                            <img src="{{asset('asset/img/bg-img/client-3.jpg')}}" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="{{asset('asset/img/bg-img/client-2.jpg')}}" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="{{asset('asset/img/bg-img/client-1.jpg')}}" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="{{asset('asset/img/bg-img/client-2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Client Feedback Area End ***** -->


@endsection