@extends('layouts.app')

@section('content')
    <div class="banner"><img src="{{BASE_URL}}/assets/images/srhotel-aboutus-banner.webp" alt="banner"></div>
    <!-- Navigation -->
    <div class="navigation-bar">
        <div class="container">
            <div class="row">
                <div class="col-xs-7">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="active">conference room</li>
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
        <!-- conference room -->
        <section class="rooms-section container general-padding">
            <div class="row">
                <header class="col-md-10 col-sm-12 col-md-offset-1 col-sm-offset-0 header">
                    <h1 class="maroon-text">conference rooms</h1>
                    <p>We have a seminar hall for party/ meeting bookings. The hall is designed such that it can be divided into two smaller halls as well as combined into one for large functions of up to 100 people.</p>
                </header>
            </div>
            <div class="row">
                <article class="col-sm-4 info-block animate" data-anim-type="fadeInUp" data-anim-delay="300">
                    <div class="image-frame">
                        <div class="info-frame">
                            <a href="{{BASE_URL}}/assets/images/img13.jpg" class="fancybox magnify"></a>
                            <ul class="list-inline social-networks">
                                <li><a href="#"><span class="icon-facebook"></span></a></li>
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-youtube"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                                <li><a href="#"><span class="icon-google"></span></a></li>
                            </ul>
                        </div>
                        <img class="lazy" src="" data-src="{{BASE_URL}}/assets/images/buffet.webp" alt="image description">
                    </div>
                    <div class="info-bar">
                        <div class="holder">
                            <div class="col">
                                <strong class="title yellow-text">hall 1</strong>
                            </div>
                            <div class="col">
                                <strong class="price">
                                    <!--<span>$475</span> -->
                                    35 pax people</strong>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-sm-4 info-block animate" data-anim-type="fadeInUp" data-anim-delay="600">
                    <div class="image-frame">
                        <div class="info-frame">
                            <a href="{{BASE_URL}}/assets/images/buffet.webp" class="fancybox magnify"></a>
                            <ul class="list-inline social-networks">
                                <li><a href="#"><span class="icon-facebook"></span></a></li>
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-youtube"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                                <li><a href="#"><span class="icon-google"></span></a></li>
                            </ul>
                        </div>
                        <img class="lazy" src="" data-src="{{BASE_URL}}/assets/images/buffet.webp" alt="image description">
                    </div>
                    <div class="info-bar">
                        <div class="holder">
                            <div class="col">
                                <strong class="title">hall 2</strong>
                            </div>
                            <div class="col">
                                <strong class="price">
                                    <!--<span>$750</span>-->
                                    35 pax</strong>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-sm-4 info-block animate" data-anim-type="fadeInUp" data-anim-delay="900">
                    <div class="image-frame">
                        <div class="info-frame">
                            <a href="{{BASE_URL}}/assets/images/buffet.webp" class="fancybox magnify" ></a>
                            <ul class="list-inline social-networks">
                                <li><a href="#"><span class="icon-facebook"></span></a></li>
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-youtube"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                                <li><a href="#"><span class="icon-google"></span></a></li>
                            </ul>
                        </div>
                        <img class="lazy" src="" data-src="{{BASE_URL}}/assets/images/buffet.webp" alt="image description">
                    </div>
                    <div class="info-bar">
                        <div class="holder">
                            <div class="col">
                                <strong class="title">combined hall</strong>
                            </div>
                            <div class="col">
                                <strong class="price">
                                    <!--<span>$1250</span>-->
                                    70-100 pax</strong>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <!-- about -->
        <section class="about container general-padding">
            <div class="row">
                <div class="col-sm-4 animate" data-anim-type="fadeInUp" data-anim-delay="300">
                    <div class="box">
                        <div class="icon ico-projector"></div>
                        <h2 class="maroon-text">Projector</h2>
                        <p>There are two projector available as per event requirement. Please ask our attendants for any assistance.</p>
                    </div>
                </div>
                <div class="col-sm-4 animate" data-anim-type="fadeInUp" data-anim-delay="600">
                    <div class="box">
                        <div class="icon ico-people"></div>
                        <h2 class="maroon-text">up to 100 people</h2>
                        <p>We can accommodate upto 100 people in our seminar hall.</p>
                    </div>
                </div>
                <div class="col-sm-4 animate" data-anim-type="fadeInUp" data-anim-delay="900">
                    <div class="box">
                        <div class="icon ico-breakfast"></div>
                        <h2 class="maroon-text">SUPER FAST INTERNET</h2>
                        <p>We have dedicated internet router for the seminar hall for fast downloading and display.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services block -->
        <!--<section class="services-block">-->
        <!--	<div class="image-frame" style="background-image: url(./images/image-12.jpg);"></div>-->
        <!--	<div class="container-fluid">-->
        <!--		<div class="row">-->
        <!--			<div class="col-md-6 col-sm-12 pull-right">-->
        <!--				<div class="row blocks">-->
        <!--					<div class="col-sm-6 col-md-12 col-lg-6 block meeting">-->
        <!--						<h2>create your meeting</h2>-->
        <!--						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
        <!--					</div>-->
        <!--					<div class="col-sm-6 col-md-12 col-lg-6 block hall">-->
        <!--						<h2>modern hall</h2>-->
        <!--						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
        <!--					</div>-->
        <!--					<div class="col-sm-6 col-md-12 col-lg-6 block speakers">-->
        <!--						<h2>great speakers</h2>-->
        <!--						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
        <!--					</div>-->
        <!--					<div class="col-sm-6 col-md-12 col-lg-6 block downtown">-->
        <!--						<h2>Near downtown</h2>-->
        <!--						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
        <!--					</div>-->
        <!--				</div>-->
        <!--			</div>-->
        <!--		</div>-->
        <!--	</div>-->
        <!--</section>-->

        <!-- Fun facts -->
        <!--<section class="fun-facts">-->
        <!--<div class="container">-->
        <!--<div class="row">-->
        <!--<div class="col-xs-12">-->
        <!--<div class="counter-list horizon" data-animate-in="scale:1.2;">-->
        <!--<div class="grid-item">-->
        <!--<div class="counter-wrapper">-->
        <!--<strong class="number counter">-->
        <!--<span id="s1" class="stats" data-count-from="10" data-count-to="489" >489</span>-->
        <!--</strong>-->
        <!--<span class="title">International speakers</span>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div class="grid-item">-->
        <!--<div class="counter-wrapper">-->
        <!--<strong class="number counter">-->
        <!--<span id="s2" class="stats" data-count-from="1" data-count-to="124" >124</span>-->
        <!--</strong>-->
        <!--<span class="title">New speakers</span>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div class="grid-item">-->
        <!--<div class="counter-wrapper">-->
        <!--<strong class="number counter">-->
        <!--<span id="s3" class="stats" data-count-from="1" data-count-to="75" >75</span>-->
        <!--</strong>-->
        <!--<span class="title">Returns</span>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div class="grid-item">-->
        <!--<div class="counter-wrapper">-->
        <!--<strong class="number counter">-->
        <!--<span id="s4" class="stats" data-count-from="10" data-count-to="512" >512</span>-->
        <!--</strong>-->
        <!--<span class="title">Registrated members</span>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</section>-->
        <!-- testimonials -->
        <section class="testimonials container add-padding">
            <div class="row">
                <header class="col-xs-12">
                    <h1 class="maroon-text">What our clients say</h1>
                </header>
            </div>
            <div class="row">
                <!-- carousel -->
                <div id="carousel-example-generic" class="carousel testimonials-carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-xs-6">
                                <div class="row">
                                    <div class="col-sm-8 col">
                                        <blockquote>
                                            <cite><span>Enjoyed my stay</span>, Rupandehi</cite>
                                            <q>Really enjoyed the amenities and the staff is all so kind and service oriented - very centrally located and convenient for dining, shopping and tours. Beautiful gardens and relaxing lounge as well as a wide variety of food options - the best hotel service I have encountered anywhere!</q>
                                        </blockquote>
                                    </div>
                                    <div class="col-sm-4 col">
                                        <div class="image-frame">
                                            <div class="image-holder">
                                                <img class="lazy" src="" data-src="{{BASE_URL}}/assets/images/thumb-12.jpg" alt="image description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="row">
                                    <div class="col-sm-8 col">
                                        <blockquote>
                                            <cite><span>Rachel</span>, Miami</cite>
                                            <q>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</q>
                                        </blockquote>
                                    </div>
                                    <div class="col-sm-4 col">
                                        <div class="image-frame">
                                            <div class="image-holder">
                                                <img class="lazy" src="" data-src="{{BASE_URL}}/assets/images/thumb-13.jpg" alt="image description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-6">
                                <div class="row">
                                    <div class="col-sm-8 col">
                                        <blockquote>
                                            <cite><span>Janice</span>, Italy</cite>
                                            <q>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</q>
                                        </blockquote>
                                    </div>
                                    <div class="col-sm-4 col">
                                        <div class="image-frame">
                                            <div class="image-holder">
                                                <img class="lazy" src="" data-src="{{BASE_URL}}/assets/images/thumb-12.jpg" alt="image description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="row">
                                    <div class="col-sm-8 col">
                                        <blockquote>
                                            <cite><span>Rachel</span>, Miami</cite>
                                            <q>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</q>
                                        </blockquote>
                                    </div>
                                    <div class="col-sm-4 col">
                                        <div class="image-frame">
                                            <div class="image-holder">
                                                <img class="lazy" src="" data-src="{{BASE_URL}}/assets/images/thumb-13.jpg" alt="image description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-6">
                                <div class="row">
                                    <div class="col-sm-8 col">
                                        <blockquote>
                                            <cite><span>Janice</span>, Italy</cite>
                                            <q>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</q>
                                        </blockquote>
                                    </div>
                                    <div class="col-sm-4 col">
                                        <div class="image-frame">
                                            <div class="image-holder">
                                                <img class="lazy" src="" data-src="{{BASE_URL}}/assets/images/thumb-12.jpg" alt="image description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="row">
                                    <div class="col-sm-8 col">
                                        <blockquote>
                                            <cite><span>Rachel</span>, Miami</cite>
                                            <q>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</q>
                                        </blockquote>
                                    </div>
                                    <div class="col-sm-4 col">
                                        <div class="image-frame">
                                            <div class="image-holder">
                                                <img class="lazy" src="" data-src="{{BASE_URL}}/assets/images/thumb-13.jpg" alt="image description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- carousel-indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </section>
    </main>
@endsection