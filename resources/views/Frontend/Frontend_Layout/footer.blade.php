<!-- Footer Start -->
<div class=" row fotter">
    <div class="col-sm-3">
        <h1 align="center">खबर आजको </h1>
        <p align="center">सबै भन्दा पहिले </p>
    </div>
    <div class="col-sm-3">
        <h3>सोसल मिडिया</h3><hr>
        <a href=""><h6> <i class="fa fa-facebook" style="font-size: 30px;"></i>  Facebook</h6></a>
        <a href=""><h6> <i class="fa fa-twitter" style="font-size: 30px;"></i>  Twitter</h6></a>
        <a href=""><h6> <i class="fa fa-linkedin" style="font-size: 30px;"></i>  linkedin</h6></a>
        <a href=""><h6> <i class="fa fa-instagram" style="font-size: 30px;"></i>  Instagram</h6></a>
    </div>
    <div class="col-sm-3">
        <div class="row">
            <div class="col-sm-6">
                <h3>प्रधान सम्पादक</h3><br><hr>
                <a href=""><h6>Amrit Kafle</h6></a>
            </div>
            <div class="col-sm-6">
                <h3>विज्ञापनका लागि</h3><hr>
                <h6>977-01-5544598, 9801123339, 9851123339 </h6>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <h3>मेनु</h3>
        <div class="row">
            <div class="col-sm-6">
                @foreach($menu as $menus)
                <a href=""><h6>{{$menus->name}}</h6></a>
                @endforeach

            </div>
            <div class="col-sm-6">
                <a href=""><h6>विशेष</h6></a>
                <a href=""><h6>ICC #CT2017</h6></a>
                <a href=""><h6>सेभेन डेज इन टिबेट</h6></a>
                <a href=""><h6>Election 2017</h6></a>
                 <a href=""><h6>विश्वकप २०१८</h6></a>
            </div>
        </div>
    </div>
</div>
<div class="row copyright">
    <div class="col-sm-4">
         
    </div>
    <div class="col-sm-4">
        <h3>© Amrit Kafle  Pvt. Ltd. -2019 All rights reserved.</h3>
    </div>
    <div class="col-sm-4">
        <a href=""><h3 align="right">Develop By Amrti kafle</h3></a>
    </div>
</div>
<!-- Footer End -->