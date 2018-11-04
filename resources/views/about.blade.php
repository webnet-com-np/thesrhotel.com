@extends('layouts.app')

@section('content')
    <div class="banner"><img src="{{BASE_URL}}/assets/images/srhotel-aboutus-banner.jpg" alt="banner"></div>
    <!-- Navigation -->
    <div class="navigation-bar">
        <div class="container">
            <div class="row">
                <div class="col-xs-7">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="active">About us</li>
                    </ol>
                </div>
                <div class="col-xs-5">
                    <a href="#" class="link">book a room</a>
                </div>
            </div>
        </div>
    </div>
    <!-- contain main informative part of the site -->
    <main id="main">
        <!-- about us section -->
        <section class="about-us container general-padding">
            <div class="row">
                <div class="col-sm-6 animate" data-anim-type="fadeInUp" data-anim-delay="300">
                    <div class="text-box">
                        <h1 class="maroon-text">About us</h1>
                        <p>The SR Hotel provides hospitality services ranging from hotel rooms, restaurants and banquet hall for locals, corporate and tourists. The hotel is located at Shankar Tower, Drivertole, Tilottama-1 in. The main focus will be on customer’s satisfaction through highest level of work standards and care. With its proximity to Indian Border, Lumbini- Birthplace of Lord Buddha, upcoming Gautam Buddha International Airport, it is an access point which connects overall western Nepal, hilly regions towards north and those travelling from and towards eastern Nepal.</p>
                    </div>
                </div>
                <div class="col-sm-6 animate" data-anim-type="fadeInUp" data-anim-delay="600">
                    <div class="image-frame"><img src="{{BASE_URL}}/assets/images/first_floor_lobby.jpg" alt="image description"></div>
                </div>
            </div>
        </section>
        <!-- about -->
        <section class="about container general-padding">
            <div class="row">
                <header class="header col-xs-12 g-padding">
                    <h1 class="maroon-text">A few words</h1>
                </header>
            </div>
            <div class="row">
                <div class="col-sm-4 animate" data-anim-type="fadeInUp" data-anim-delay="300">
                    <div class="box">
                        <div class="icon ico-luxury"></div>
                        <h2 class="maroon-text">Luxury</h2>
                        <p>Live like royalty in a classy environment with so much to indulge.</p>
                    </div>
                </div>
                <div class="col-sm-4 animate" data-anim-type="fadeInUp" data-anim-delay="600">
                    <div class="box">
                        <div class="icon ico-services"></div>
                        <h2 class="maroon-text">Great services</h2>
                        <p>Designed with comfort and practicality in mind, our hotel offers varieties of services as per our guests requirement.</p>
                    </div>
                </div>
                <div class="col-sm-4 animate" data-anim-type="fadeInUp" data-anim-delay="900">
                    <div class="box">
                        <div class="icon ico-reservation"></div>
                        <h2 class="maroon-text">Online reservation</h2>
                        <p>You can simply book the rooms and other services via our online reservation portal.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services block -->
        <section class="services-block">
            <div class="image-frame" style="background-image: url({{BASE_URL}}/assets/images/reception3.jpg);">

            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-12 pull-right">
                        <div class="row">

                            <div class="col-sm-6 col-md-12 col-lg-6 block sea">
                                <h2>rooftop view</h2>
                                <p>Enjoy the early morning sunrise and green hills on the north and plain lands in south east  from One Square Lounge.</p>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6 block downtown">
                                <h2>In city area</h2>
                                <p>Located between two prime cities, Bhairahawa and Butwal, The SR Hotel is ideal place to drive by. we also provide cab pick up facilities</p>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6 block pool">
                                <h2>pool</h2>
                                <p>With Butwal getting baked by the sun for more than half of the year, we plan to have one of the best outdoor swimming pool in the town in near future</p>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6 block playground">
                                <h2>playground</h2>
                                <p>The hotel will have a dedicated playground for kids under 10 years age. Parents can then enjoy their time without having any hassle.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our team -->
        <section class="our-team" style="background-image: url({{BASE_URL}}/assets/images/pattern.jpg);">
            <div class="container general-padding">
                <div class="row">
                    <header class="header col-xs-12 general-padding">
                        <h1 class="maroon-text">our partners</h1>
                    </header>
                </div>
                <div class="row sr-hotel-partners">
                    <!-- carousel -->
                    <div id="carousel-example-generic" class="carousel team-carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <!--<div class="col-xs-4">-->
                                    <!--<div class="box">-->
                                    <!--<div class="info-box">-->
                                    <!--<div class="holder">-->
                                    <!--<div class="frame">-->
                                    <!--<h2>Elissa Pompil</h2>-->
                                    <!--<span class="sub-heading">Maid</span>-->
                                    <!--<ul class="list-inline social-networks">-->
                                    <!--<li><a href="#"><span class="icon-facebook"></span></a></li>-->
                                    <!--<li><a href="#"><span class="icon-twitter"></span></a></li>-->
                                    <!--<li><a href="#"><span class="icon-youtube"></span></a></li>-->
                                    <!--<li><a href="#"><span class="icon-instagram"></span></a></li>-->
                                    <!--<li><a href="#"><span class="icon-google"></span></a></li>-->
                                    <!--</ul>-->
                                    <!--</div>-->
                                    <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="image-frame">-->
                                    <!--<img src="images/thumb-01.jpg" alt="image description">-->
                                    <!--</div>-->
                                    <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="col-xs-4">-->
                                    <!--<div class="box">-->
                                    <!--<div class="info-box">-->
                                    <!--<div class="holder">-->
                                    <!--<div class="frame">-->
                                    <!--<h2>Elissa Pompil</h2>-->
                                    <!--<span class="sub-heading">Maid</span>-->
                                    <!--<ul class="list-inline social-networks">-->
                                    <!--<li><a href="#"><span class="icon-facebook"></span></a></li>-->
                                    <!--<li><a href="#"><span class="icon-twitter"></span></a></li>-->
                                    <!--<li><a href="#"><span class="icon-youtube"></span></a></li>-->
                                    <!--<li><a href="#"><span class="icon-instagram"></span></a></li>-->
                                    <!--<li><a href="#"><span class="icon-google"></span></a></li>-->
                                    <!--</ul>-->
                                    <!--</div>-->
                                    <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="image-frame">-->
                                    <!--<img src="images/thumb-02.jpg" alt="image description">-->
                                    <!--</div>-->
                                    <!--</div>-->
                                    <!--</div>-->
                                    <div class="col-xs-12">
                                        <div class="box">
                                            <div class="info-box">
                                                <div class="holder">
                                                    <div class="frame">
                                                        <h2>Wisdom Lumbini</h2>
                                                        <span class="sub-heading">COLLEGE</span>
                                                        <ul class="list-inline social-networks">
                                                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                                                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                                                            <li><a href="#"><span class="icon-youtube"></span></a></li>
                                                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                                                            <li><a href="#"><span class="icon-google"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image-frame">
                                                <img src="{{BASE_URL}}/assets/images/wisdomlumbinicollege.jpg" alt="image description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="item">-->
                            <!--<div class="row">-->
                            <!--<div class="col-xs-4">-->
                            <!--<div class="box">-->
                            <!--<div class="info-box">-->
                            <!--<div class="holder">-->
                            <!--<div class="frame">-->
                            <!--<h2>Elissa Pompil</h2>-->
                            <!--<span class="sub-heading">Maid</span>-->
                            <!--<ul class="list-inline social-networks">-->
                            <!--<li><a href="#"><span class="icon-facebook"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-twitter"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-youtube"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-instagram"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-google"></span></a></li>-->
                            <!--</ul>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--<div class="image-frame">-->
                            <!--<img src="images/thumb-01.jpg" alt="image description">-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--<div class="col-xs-4">-->
                            <!--<div class="box">-->
                            <!--<div class="info-box">-->
                            <!--<div class="holder">-->
                            <!--<div class="frame">-->
                            <!--<h2>Elissa Pompil</h2>-->
                            <!--<span class="sub-heading">Maid</span>-->
                            <!--<ul class="list-inline social-networks">-->
                            <!--<li><a href="#"><span class="icon-facebook"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-twitter"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-youtube"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-instagram"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-google"></span></a></li>-->
                            <!--</ul>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--<div class="image-frame">-->
                            <!--<img src="images/thumb-02.jpg" alt="image description">-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--<div class="col-xs-4">-->
                            <!--<div class="box">-->
                            <!--<div class="info-box">-->
                            <!--<div class="holder">-->
                            <!--<div class="frame">-->
                            <!--<h2>Elissa Pompil</h2>-->
                            <!--<span class="sub-heading">Maid</span>-->
                            <!--<ul class="list-inline social-networks">-->
                            <!--<li><a href="#"><span class="icon-facebook"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-twitter"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-youtube"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-instagram"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-google"></span></a></li>-->
                            <!--</ul>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--<div class="image-frame">-->
                            <!--<img src="images/thumb-03.jpg" alt="image description">-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--<div class="item">-->
                            <!--<div class="row">-->
                            <!--<div class="col-xs-4">-->
                            <!--<div class="box">-->
                            <!--<div class="info-box">-->
                            <!--<div class="holder">-->
                            <!--<div class="frame">-->
                            <!--<h2>Elissa Pompil</h2>-->
                            <!--<span class="sub-heading">Maid</span>-->
                            <!--<ul class="list-inline social-networks">-->
                            <!--<li><a href="#"><span class="icon-facebook"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-twitter"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-youtube"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-instagram"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-google"></span></a></li>-->
                            <!--</ul>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--<div class="image-frame">-->
                            <!--<img src="images/thumb-01.jpg" alt="image description">-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--<div class="col-xs-4">-->
                            <!--<div class="box">-->
                            <!--<div class="info-box">-->
                            <!--<div class="holder">-->
                            <!--<div class="frame">-->
                            <!--<h2>Elissa Pompil</h2>-->
                            <!--<span class="sub-heading">Maid</span>-->
                            <!--<ul class="list-inline social-networks">-->
                            <!--<li><a href="#"><span class="icon-facebook"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-twitter"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-youtube"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-instagram"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-google"></span></a></li>-->
                            <!--</ul>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--<div class="image-frame">-->
                            <!--<img src="images/thumb-02.jpg" alt="image description">-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--<div class="col-xs-4">-->
                            <!--<div class="box">-->
                            <!--<div class="info-box">-->
                            <!--<div class="holder">-->
                            <!--<div class="frame">-->
                            <!--<h2>Elissa Pompil</h2>-->
                            <!--<span class="sub-heading">Maid</span>-->
                            <!--<ul class="list-inline social-networks">-->
                            <!--<li><a href="#"><span class="icon-facebook"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-twitter"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-youtube"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-instagram"></span></a></li>-->
                            <!--<li><a href="#"><span class="icon-google"></span></a></li>-->
                            <!--</ul>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--<div class="image-frame">-->
                            <!--<img src="images/thumb-03.jpg" alt="image description">-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--</div>-->
                        </div>
                        <!-- carousel-indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <!--<li data-target="#carousel-example-generic" data-slide-to="1"></li>-->
                            <!--<li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
                        </ol>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection