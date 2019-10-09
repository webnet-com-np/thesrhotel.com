@extends('layouts.app')

@section('content')
    <div class="banner"><img src="{{ BASE_URL }}/assets/images/srhotel-resturants-banner.jpg" alt="banner"></div>
    <!-- Navigation -->
    <div class="navigation-bar">
        <div class="container">
            <div class="row">
                <div class="col-xs-7">
                    <ol class="breadcrumb">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li class="active">restaurant</li>
                    </ol>
                </div>
                <div class="col-xs-5">
                    <a href="tel:071590502" class="link btn-link" >Book a Table</a>
                </div>
            </div>
        </div>
    </div>
    <!-- contain main informative part of the site -->
    <main id="main">
        <!--&lt;!&ndash;restaurant list&ndash;&gt;-->
        <!--<section class="srhotel-restaurants">-->
        <!--<div class="container general-padding">-->
        <!--<div class="row">-->
        <!--<div class="col-md-4">-->
        <!--<div class="restaurant-wrapper">-->
        <!--<div class="restaurnt-image">-->
        <!--<img src="images/restro-first.jpg" alt="image description">-->
        <!--</div>-->
        <!--<div class="restaurant-details">-->
        <!--<span class="restaurant-name">One square Lounge</span>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div class="col-md-4">-->
        <!--<div class="restaurant-wrapper">-->
        <!--<div class="restaurant-image">-->
        <!--<img src="images/restro-first.jpg" alt="image description">-->
        <!--</div>-->
        <!--<div class="restaurant-details">-->
        <!--<span class="restaurant-name">One square Lounge</span>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div class="col-md-4">-->
        <!--<div class="restaurant-wrapper">-->
        <!--<div class="restaurant-image">-->
        <!--<img src="images/restro-first.jpg" alt="image description">-->
        <!--</div>-->
        <!--<div class="restaurant-details">-->
        <!--<span class="restaurant-name">One square Lounge</span>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</section>-->
        <section class="rooms-section container general-padding">
            <div class="row">
                <header class="col-md-10 col-sm-12 col-md-offset-1 col-sm-offset-0 header">
                    <h1 class="maroon-text">Our Restaurants</h1>
                    <p>
                        Enjoy Unique, yet magnificent dining experience at our restaurants. Whether you’re viewing the chure ranges, or the magnificent terai plains while sipping a refreshing cocktail or sharing an authentic Nepali meal with friends, your time spent at any of our 2 on-site restaurants at The SR Hotel is sure to be memorable.
                    </p>
                    <p>
                        Start your day with a hearty Super Breakfast from our Cafe or a casual lunch in a fine dining experience in Lette Vansa Ghar, will make your way to Neptunes. You can plan a special evening at One Square Lounge. While there are many bars and lounges in Butwal, this is the first time you will experience an entirely different environment here at One Square Lounge in all Butwal and well as Bhairahawa.
                    </p>
                </header>
            </div>
        </section>
        <!-- restaurant first-->
        <section class="restaurant srhotel-restaurant" style="background-image: url({{ BASE_URL }}/assets/images/pattern.jpg);">
            <div class="container general-padding">

                <div class="row">
                    <div class="col-sm-6 animate" data-anim-type="fadeInUp" data-anim-delay="300">
                        <div class="text-box">
                            <h1 class="maroon-text">One square Lounge</h1>
                            <p>One Square is one of the most popular hospitality brands in Butwal having restaurant customer base since last 6 years. This lounge bar will be open for high end customers with a capacity of 30-35 pax. The customers can enjoy food and beverages with the rooftop view of green hills on the north and plain lands in south east. It will include Open (live) Kitchen with focus on barbeque, steaks, sea foods, and other specialty dishes.</p>
                            <a href="{{ route('onesquarelounge') }}" class="btn btn-default">Read More</a>
                        </div>
                    </div>
                    <div class="col-sm-6 animate" data-anim-type="fadeInUp" data-anim-delay="600">
                        <div class="image-frame">
                            <img src="{{ BASE_URL }}/assets/images/one-square.jpg" alt="image description"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- restaurant second-->
        <section class="restaurant srhotel-restaurant" style="background-image: url({{ BASE_URL }}/assets/images/pattern.jpg);">
            <div class="container general-padding">
                <div class="row">
                    <div class="col-sm-6 col-sm-push-6 animate" data-anim-type="fadeInUp" data-anim-delay="300">
                        <div class="text-box">
                            <h1 class="maroon-text">Lete Vansa</h1>
                            <p>This will be on the ground floor, next to hotel reception. Lete is essentially, a name of place, which is the gateway to Mustang. This will be a contemporary mustang themed dining area with indoor and outdoor seating areas. This will give our guests an opportunity to know about geographical and cultural diversity of our country. </p>
                            <a href="{{ route('letevansa') }}" class="btn btn-default">Read More</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-sm-pull-6 animate" data-anim-type="fadeInUp" data-anim-delay="600">
                        <div class="image-frame">
                            <img src="{{ BASE_URL }}/assets/images/lette-vansa.jpg" alt="image description"></div>
                    </div>


                </div>
            </div>
        </section>


        <!-- gallery-section -->
        <!--<section class="gallery-section">-->
        <!--<div class="container-fluid">-->
        <!--<div class="row">-->
        <!--<article class="col-md-3 col-xs-6">-->
        <!--<div class="image-frame">-->
        <!--<div class="info-frame">-->
        <!--<a href="images/img13.jpg" class="fancybox magnify"></a>-->
        <!--<ul class="list-inline social-networks">-->
        <!--<li><a href="#"><span class="icon-facebook"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-twitter"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-youtube"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-instagram"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-google"></span></a></li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--<img src="images/image-20.jpg" alt="image description">-->
        <!--</div>-->
        <!--</article>-->
        <!--<article class="col-md-3 col-xs-6">-->
        <!--<div class="image-frame">-->
        <!--<div class="info-frame">-->
        <!--<a href="images/img13.jpg" class="fancybox magnify"></a>-->
        <!--<ul class="list-inline social-networks">-->
        <!--<li><a href="#"><span class="icon-facebook"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-twitter"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-youtube"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-instagram"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-google"></span></a></li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--<img src="images/image-21.jpg" alt="image description">-->
        <!--</div>-->
        <!--</article>-->
        <!--<article class="col-md-3 col-xs-6">-->
        <!--<div class="image-frame">-->
        <!--<div class="info-frame">-->
        <!--<a href="#" class="magnify"></a>-->
        <!--<ul class="list-inline social-networks">-->
        <!--<li><a href="#"><span class="icon-facebook"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-twitter"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-youtube"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-instagram"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-google"></span></a></li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--<img src="images/image-22.jpg" alt="image description">-->
        <!--</div>-->
        <!--</article>-->
        <!--<article class="col-md-3 col-xs-6">-->
        <!--<div class="image-frame">-->
        <!--<div class="info-frame">-->
        <!--<a href="images/img13.jpg" class="fancybox magnify"></a>-->
        <!--<ul class="list-inline social-networks">-->
        <!--<li><a href="#"><span class="icon-facebook"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-twitter"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-youtube"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-instagram"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-google"></span></a></li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--<img src="images/image-23.jpg" alt="image description">-->
        <!--</div>-->
        <!--</article>-->
        <!--</div>-->
        <!--<div class="row">-->
        <!--<article class="col-xs-6">-->
        <!--<div class="image-frame">-->
        <!--<div class="info-frame">-->
        <!--<a href="images/img13.jpg" class="fancybox magnify"></a>-->
        <!--<ul class="list-inline social-networks">-->
        <!--<li><a href="#"><span class="icon-facebook"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-twitter"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-youtube"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-instagram"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-google"></span></a></li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--<img src="images/image-24.jpg" alt="image description">-->
        <!--</div>-->
        <!--</article>-->
        <!--<article class="col-xs-6">-->
        <!--<div class="image-frame">-->
        <!--<div class="info-frame">-->
        <!--<a href="images/img13.jpg" class="fancybox magnify"></a>-->
        <!--<ul class="list-inline social-networks">-->
        <!--<li><a href="#"><span class="icon-facebook"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-twitter"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-youtube"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-instagram"></span></a></li>-->
        <!--<li><a href="#"><span class="icon-google"></span></a></li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--<img src="images/image-25.jpg" alt="image description">-->
        <!--</div>-->
        <!--</article>-->
        <!--</div>-->
        <!--</div>-->
        <!--</section>-->
        <!-- menu section -->
        <!--<section class="menu-section container add-padding">-->
        <!--<div class="row">-->
        <!--<header class="col-xs-12">-->
        <!--<h1>Taste our delicious dishes</h1>-->
        <!--</header>-->
        <!--</div>-->
        <!--<div class="row">-->
        <!--&lt;!&ndash; carousel &ndash;&gt;-->
        <!--<div id="carousel-example-generic" class="carousel menu-carousel slide" data-ride="carousel">-->
        <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
        <!--<div class="carousel-inner">-->
        <!--<div class="item active">-->
        <!--<div class="col-sm-6">-->
        <!--<ul class="list-unstyled menu-list">-->
        <!--<li>-->
        <!--<a href="#">-->
        <!--<div class="image-frame">-->
        <!--<img src="images/img-01.jpg" alt="image description"></div>-->
        <!--<div class="text">-->
        <!--<h2>Wellfleet oysters</h2>-->
        <!--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
        <!--</div>-->
        <!--<div class="price">$12</div>-->
        <!--</a>-->
        <!--</li>-->
        <!--<li>-->
        <!--<a href="#">-->
        <!--<div class="image-frame">-->
        <!--<img src="images/img-02.jpg" alt="image description"></div>-->
        <!--<div class="text">-->
        <!--<h2>Wellfleet oysters</h2>-->
        <!--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
        <!--</div>-->
        <!--<div class="price">$45</div>-->
        <!--</a>-->
        <!--</li>-->
        <!--<li>-->
        <!--<a href="#">-->
        <!--<div class="image-frame">-->
        <!--<img src="images/img-03.jpg" alt="image description"></div>-->
        <!--<div class="text">-->
        <!--<h2>Wellfleet oysters</h2>-->
        <!--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
        <!--</div>-->
        <!--<div class="price">$23</div>-->
        <!--</a>-->
        <!--</li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--<div class="col-sm-6">-->
        <!--<ul class="list-unstyled menu-list">-->
        <!--<li>-->
        <!--<a href="#">-->
        <!--<div class="image-frame">-->
        <!--<img src="images/img-04.jpg" alt="image description"></div>-->
        <!--<div class="text">-->
        <!--<h2>Wellfleet oysters</h2>-->
        <!--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
        <!--</div>-->
        <!--<div class="price">$15</div>-->
        <!--</a>-->
        <!--</li>-->
        <!--<li>-->
        <!--<a href="#">-->
        <!--<div class="image-frame">-->
        <!--<img src="images/img-05.jpg" alt="image description"></div>-->
        <!--<div class="text">-->
        <!--<h2>Wellfleet oysters</h2>-->
        <!--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
        <!--</div>-->
        <!--<div class="price">$87</div>-->
        <!--</a>-->
        <!--</li>-->
        <!--<li>-->
        <!--<a href="#">-->
        <!--<div class="image-frame">-->
        <!--<img src="images/img-06.jpg" alt="image description"></div>-->
        <!--<div class="text">-->
        <!--<h2>Wellfleet oysters</h2>-->
        <!--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
        <!--</div>-->
        <!--<div class="price">$24</div>-->
        <!--</a>-->
        <!--</li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div class="item">-->
        <!--<div class="col-sm-6">-->
        <!--<ul class="list-unstyled menu-list">-->
        <!--<li>-->
        <!--<a href="#">-->
        <!--<div class="image-frame">-->
        <!--<img src="images/img-01.jpg" alt="image description"></div>-->
        <!--<div class="text">-->
        <!--<h2>Wellfleet oysters</h2>-->
        <!--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
        <!--</div>-->
        <!--<div class="price">$12</div>-->
        <!--</a>-->
        <!--</li>-->
        <!--<li>-->
        <!--<a href="#">-->
        <!--<div class="image-frame">-->
        <!--<img src="images/img-02.jpg" alt="image description"></div>-->
        <!--<div class="text">-->
        <!--<h2>Wellfleet oysters</h2>-->
        <!--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
        <!--</div>-->
        <!--<div class="price">$45</div>-->
        <!--</a>-->
        <!--</li>-->
        <!--<li>-->
        <!--<a href="#">-->
        <!--<div class="image-frame">-->
        <!--<img src="images/img-03.jpg" alt="image description"></div>-->
        <!--<div class="text">-->
        <!--<h2>Wellfleet oysters</h2>-->
        <!--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
        <!--</div>-->
        <!--<div class="price">$23</div>-->
        <!--</a>-->
        <!--</li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--<div class="col-sm-6">-->
        <!--<ul class="list-unstyled menu-list">-->
        <!--<li>-->
        <!--<a href="#">-->
        <!--<div class="image-frame">-->
        <!--<img src="images/img-04.jpg" alt="image description"></div>-->
        <!--<div class="text">-->
        <!--<h2>Wellfleet oysters</h2>-->
        <!--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
        <!--</div>-->
        <!--<div class="price">$15</div>-->
        <!--</a>-->
        <!--</li>-->
        <!--<li>-->
        <!--<a href="#">-->
        <!--<div class="image-frame">-->
        <!--<img src="images/img-05.jpg" alt="image description"></div>-->
        <!--<div class="text">-->
        <!--<h2>Wellfleet oysters</h2>-->
        <!--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
        <!--</div>-->
        <!--<div class="price">$87</div>-->
        <!--</a>-->
        <!--</li>-->
        <!--<li>-->
        <!--<a href="#">-->
        <!--<div class="image-frame">-->
        <!--<img src="images/img-06.jpg" alt="image description"></div>-->
        <!--<div class="text">-->
        <!--<h2>Wellfleet oysters</h2>-->
        <!--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
        <!--</div>-->
        <!--<div class="price">$24</div>-->
        <!--</a>-->
        <!--</li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div class="item">-->
        <!--<div class="col-sm-6">-->
        <!--<ul class="list-unstyled menu-list">-->
        <!--<li>-->
        <!--<a href="#">-->
        <!--<div class="image-frame">-->
        <!--<img src="images/img-01.jpg" alt="image description"></div>-->
        <!--<div class="text">-->
        <!--<h2>Wellfleet oysters</h2>-->
        <!--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
        <!--</div>-->
        <!--<div class="price">$12</div>-->
        <!--</a>-->
        <!--</li>-->
        <!--<li>-->
        <!--<a href="#">-->
        <!--<div class="image-frame">-->
        <!--<img src="images/img-02.jpg" alt="image description"></div>-->
        <!--<div class="text">-->
        <!--<h2>Wellfleet oysters</h2>-->
        <!--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
        <!--</div>-->
        <!--<div class="price">$45</div>-->
        <!--</a>-->
        <!--</li>-->
        <!--<li>-->
        <!--<a href="#">-->
        <!--<div class="image-frame">-->
        <!--<img src="images/img-03.jpg" alt="image description"></div>-->
        <!--<div class="text">-->
        <!--<h2>Wellfleet oysters</h2>-->
        <!--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
        <!--</div>-->
        <!--<div class="price">$23</div>-->
        <!--</a>-->
        <!--</li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--<div class="col-sm-6">-->
        <!--<ul class="list-unstyled menu-list">-->
        <!--<li>-->
        <!--<a href="#">-->
        <!--<div class="image-frame">-->
        <!--<img src="images/img-04.jpg" alt="image description"></div>-->
        <!--<div class="text">-->
        <!--<h2>Wellfleet oysters</h2>-->
        <!--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
        <!--</div>-->
        <!--<div class="price">$15</div>-->
        <!--</a>-->
        <!--</li>-->
        <!--<li>-->
        <!--<a href="#">-->
        <!--<div class="image-frame">-->
        <!--<img src="images/img-05.jpg" alt="image description"></div>-->
        <!--<div class="text">-->
        <!--<h2>Wellfleet oysters</h2>-->
        <!--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
        <!--</div>-->
        <!--<div class="price">$87</div>-->
        <!--</a>-->
        <!--</li>-->
        <!--<li>-->
        <!--<a href="#">-->
        <!--<div class="image-frame">-->
        <!--<img src="images/img-06.jpg" alt="image description"></div>-->
        <!--<div class="text">-->
        <!--<h2>Wellfleet oysters</h2>-->
        <!--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
        <!--</div>-->
        <!--<div class="price">$24</div>-->
        <!--</a>-->
        <!--</li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--&lt;!&ndash; carousel-indicators &ndash;&gt;-->
        <!--<ol class="carousel-indicators">-->
        <!--<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
        <!--<li data-target="#carousel-example-generic" data-slide-to="1"></li>-->
        <!--<li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
        <!--</ol>-->
        <!--</div>-->
        <!--</div>-->
        <!--</section>-->
    </main>
@endsection
