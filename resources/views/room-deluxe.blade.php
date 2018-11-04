@extends('layouts.app')

@section('content')
    <div class="banner"><img src="./images/srhotel-aboutus-banner.jpg" alt="banner"></div>
    <!-- Navigation -->
    <div class="navigation-bar">
        <div class="container">
            <div class="row">
                <div class="col-xs-7">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Room Detail</li>
                    </ol>
                </div>
                <div class="col-xs-5">
                    <a href="rooms.html" class="link">book a room</a>
                </div>
            </div>
        </div>
    </div>
    <!-- contain main informative part of the site -->
    <main id="main">
        <!-- Room details -->
        <section class="our-room room-type-details">
            <div class="image-frame" style="background-image: url(images/delux-room.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-block pull-right animate" data-anim-type="fadeInRight" data-anim-delay="300">
                        <h1 class="yellow-text">Our room - deluxe</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <div class="row">
                            <ul class="list-unstyled list col-sm-6">
                                <li>LED TVs 32"</li>
                                <li>national and international TV channels</li>
                                <li>Telephone</li>
                                <li>premium cosmetics</li>
                            </ul>
                            <ul class="list-unstyled list col-sm-6">
                                <li>fluffy cotton bathrobes</li>
                                <li>towels and cotton sheets</li>
                                <li>comfortable slippers</li>
                                <li>hairdryer</li>
                            </ul>
                        </div>
                        <ul class="list-inline services-list">
                            <li><span class="icon ico-downtown"></span>Near<br> downtown</li>
                            <li><span class="icon ico-wifi"></span>free wifi</li>
                            <li><span class="icon ico-parking"></span>free<br> parking</li>
                            <li><span class="icon ico-breakfast"></span>Free<br> breackfast</li>
                            <li><span class="icon ico-mp"></span>23mp</li>
                        </ul>
                        <a href="#" class="btn btn-default">Book Now</a>
                    </div>
                </div>
            </div>
        </section>

        <!--<section class="room-details container gen-padding">-->
        <!--<div class="row">-->
        <!--<div class="col-sm-6">-->
        <!--<div id="flex-slider" class="flexslider">-->
        <!--<ul class="slides">-->
        <!--<li>-->
        <!--<div class="information-box">-->
        <!--<a class="fancybox magnify" href="images/img13.jpg"></a>-->
        <!--<ul class="list-inline social-networks">-->
        <!--<li><a href="#"><span class="icon-facebook"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-twitter"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-youtube"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-instagram"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-google"></span></a></li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--<img src="images/image-26.jpg" alt="image description">-->
        <!--</li>-->
        <!--<li>-->
        <!--<div class="information-box">-->
        <!--<a class="fancybox magnify" href="images/img13.jpg"></a>-->
        <!--<ul class="list-inline social-networks">-->
        <!--<li><a href="#"><span class="icon-facebook"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-twitter"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-youtube"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-instagram"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-google"></span></a></li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--<img src="images/image-26.jpg" alt="image description">-->
        <!--</li>-->
        <!--<li>-->
        <!--<div class="information-box">-->
        <!--<a class="fancybox magnify" href="images/img13.jpg"></a>-->
        <!--<ul class="list-inline social-networks">-->
        <!--<li><a href="#"><span class="icon-facebook"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-twitter"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-youtube"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-instagram"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-google"></span></a></li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--<img src="images/image-26.jpg" alt="image description">-->
        <!--</li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--<div id="thumbnails" class="flexslider">-->
        <!--<ul class="slides">-->
        <!--<li> <img src="images/img-07.jpg" alt="image description"> </li>-->
        <!--<li> <img src="images/img-08.jpg" alt="image description"> </li>-->
        <!--<li> <img src="images/img-09.jpg" alt="image description"> </li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--</div>	-->
        <!--<div class="col-sm-6 info-frame">-->
        <!--<h1>deluxe room</h1>-->
        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
        <!--<ul class="detail-list list-unstyled">-->
        <!--<li><strong>Bed:</strong> 1 double bed</li>-->
        <!--<li><strong>Max:</strong> 2 people</li>-->
        <!--<li><strong>Availability:</strong> available</li>-->
        <!--<li><strong>Room size:</strong> 32mp</li>-->
        <!--</ul>-->
        <!--<div class="btn-holder">-->
        <!--<a href="#" class="btn btn-default">Book Room</a>-->
        <!--<strong class="rent-price">$235 <span>per night</span></strong>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</section>-->
        <!-- Description block -->
        <!--<article class="description-block container b-padding">-->
        <!--<div class="row">-->
        <!--<div class="col-md-3 col-sm-4">-->
        <!--<h1>Description</h1>-->
        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>-->
        <!--</div>-->
        <!--<div class="col-md-9 col-sm-8">-->
        <!--<div class="image-frame">-->
        <!--<h1>Description</h1>-->
        <!--<img src="images/image-27.jpg" alt="image description">-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</article>-->
        <!-- gallery-block -->
        <section class="gallery-block container b-padding">
            <div class="row">
                <header class="col-xs-12">
                    <h1>gallery</h1>
                </header>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <!-- carousel -->
                    <div id="carousel-example-generic" class="carousel image-gallery slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <a href="images/delux-room.jpg" class="fancybox" ><img src="images/delux-room.jpg" alt="image description"></a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="images/delux-room.jpg" class="fancybox" ><img src="images/delux-room.jpg" alt="image description"></a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="images/delux-room.jpg" class="fancybox" ><img src="images/delux-room.jpg" alt="image description"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <a href="images/delux-room.jpg" class="fancybox" ><img src="images/delux-room.jpg" alt="image description"></a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="images/delux-room.jpg" class="fancybox"><img src="images/delux-room.jpg" alt="image description"></a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="images/delux-room.jpg" class="fancybox" ><img src="images/delux-room.jpg" alt="image description"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"></a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection