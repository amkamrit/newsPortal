@extends('Frontend.Frontends.app')

@section('content')

<!--HeadLine Start  -->

    <div class="row headline">
        <div class="col-sm-6">
            <button class="btn btn-danger btn-lg">लोकप्रिय  </button>

        </div>
        <!-- <div class="col-sm-6" align="right">
            <button class="btn btn-primary btn-md moreButton">सबै </button>
        </div> -->
    </div>
    <hr>
    <div class="row headlineNews">
        <div class="col-sm-3">
            <div class="row">
                <img src="asset/image/headline1.jpg" width="100%">
            </div>
            <div class="row">
                <a href="{{url('singlePage')}}"><h3 align="center">संस्कृति मास्न र जग्गा हडप्न भूमाफियाको डिजाइनमा गुठी विधेयक ! </h3></a>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="row">
                <img src="asset/image/headline2.JPG" width="100%">
            </div>
            <div class="row">
                <a href=""><h3 align="center">लोकसेवा विज्ञापनको विरोधीले मागे मन्त्री र आयोगका अध्यक्षको राजीनामा, यस्तो छ भनाई (फोटो/भिडियो) </h3></a>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="row">
                <img src="asset/image/headline3.jpg" width="100%">
            </div>
            <div class="row">
                <a href=""><h3 align="center">‘संसदीय व्यवस्थाले गणतन्त्रको लक्ष्य पूरा हुन सक्दैन’  </h3></a>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="row">
                <img src="asset/image/headline4.JPG" width="100%">
            </div>
            <div class="row">
                <a href=""><h3 align="center">प्रधानमन्त्री रोजगार कार्यक्रम : कतिले रोजगारी पाए भन्ने तथ्याङ्कसमेत सरकारसँग छैन  </h3></a>
            </div>
        </div>
                <div class="col-sm-3">
            <div class="row">
                <img src="asset/image/headline8.jpg" width="100%">
            </div>
            <div class="row">
                <a href=""><h3 align="center">रबि लामिछानेसँग जोडेर प्रकाशित समाचारप्रति मन्त्री पुनको आपत्ति  </h3></a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="row">
                <img src="asset/image/headline7.jpg" width="100%">
            </div>
            <div class="row">
                <a href=""><h3 align="center">बजेटपछि प्रदेश २ मा होला सरकार हेरफेर ?   </h3></a>
            </div>
        </div>
                <div class="col-sm-3">
            <div class="row">
                <img src="asset/image/headiline6.jpg" width="100%">
            </div>
            <div class="row">
                <a href=""><h3 align="center">संविधानले स्वीकारेको सङ्घीयता काँग्रेसले कहिले स्वीकार्छ ?   </h3></a>
            </div>
        </div>
                <div class="col-sm-3">
            <div class="row">
                <img src="asset/image/headline5.jpg" width="100%">
            </div>
            <div class="row">
                <a href=""><h3 align="center">प्गुठी विधेयकको विरोधमा हजारौं पाटनवासी सडकमाः फिर्ता नलिए कडा आन्दोलन गर्ने चेतावनी (भिडियो)   </h3></a>
            </div>
        </div>
        
    </div>
    <!--HeadLine End  -->



@endsection