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
                    <a href="#" class="link">book a table</a>
                </div>
            </div>
        </div>
    </div>
    <!-- contain main informative part of the site -->
    <main id="main">
        <section class="resturant-details general-padding">
            <div class="row text-center">
                <img src="{{ BASE_URL }}/assets/images/onesquare-logo.png" alt="">
            </div>
            <div class="row general-padding">
                <header class="col-md-10 col-sm-12 col-md-offset-1 col-sm-offset-0 header">

                    <p>One Square is one of the most popular hospitality brands in Butwal having restaurant customer base since last 6 years. This lounge bar will be open for high end customers with a capacity of 30-35 pax. The customers can enjoy food and beverages with the rooftop view of green hills on the north and plain lands in south east. It will include Open (live) Kitchen with focus on barbeque, steaks, sea foods, and other specialty dishes. The bar will have varieties of cocktails, mocktails, beer and other alcoholic/ non alcoholic beverages. This will be designed with contemporary theme at heart. This will offer new taste to locals as well as tourist alike. With scenic view, comfort and specialty dishes, it is poised to become one of the best restaurants in town from day 1.</p>
                </header>
            </div>
            <div class="container">

                <div class="row ">

                    <div class="restaurant-time-capacity-wrapper">
                        <div class=" srhotel-restaurant-time">
                            <div class="restro-time-title ">Opening time</div>
                            <div class="opening-time">11am - 11pm</div>
                        </div>
                        <div class="srhotel-restaurant-capacity">
                            <div class="seating-capacity-title">Seating capacity</div>
                            <div class="seat-capacity-no">40</div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- menu section -->
        {{--<section class="menu-section restaurant-menus general-padding container">--}}
            {{--<div class="row">--}}
                {{--<header class="col-xs-12">--}}
                    {{--<h1>Taste our delicious dishes</h1>--}}
                {{--</header>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<!-- carousel -->--}}
                {{--<div id="carousel-example-generic" class="carousel menu-carousel slide" data-ride="carousel">--}}
                    {{--<!-- Wrapper for slides -->--}}
                    {{--<div class="carousel-inner">--}}
                        {{--<div class="item active">--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<ul class="list-unstyled menu-list">--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="image-frame">--}}
                                                {{--<img src="{{ BASE_URL }}/assets/images/img-04.jpg" alt="image description"></div>--}}
                                            {{--<div class="text">--}}
                                                {{--<h2>MO:MO</h2>--}}
                                                {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="price">$12</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="image-frame">--}}
                                                {{--<img src="{{ BASE_URL }}/assets/images/img-04.jpg" alt="image description"></div>--}}
                                            {{--<div class="text">--}}
                                                {{--<h2>Wellfleet oysters</h2>--}}
                                                {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="price">$45</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="image-frame">--}}
                                                {{--<img src="{{ BASE_URL }}/assets/images/img-04.jpg" alt="image description"></div>--}}
                                            {{--<div class="text">--}}
                                                {{--<h2>Wellfleet oysters</h2>--}}
                                                {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="price">$23</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<ul class="list-unstyled menu-list">--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="image-frame">--}}
                                                {{--<img src="{{ BASE_URL }}/assets/images/img-04.jpg" alt="image description"></div>--}}
                                            {{--<div class="text">--}}
                                                {{--<h2>Wellfleet oysters</h2>--}}
                                                {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="price">$15</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="image-frame">--}}
                                                {{--<img src="{{ BASE_URL }}/assets/images/img-04.jpg" alt="image description"></div>--}}
                                            {{--<div class="text">--}}
                                                {{--<h2>Wellfleet oysters</h2>--}}
                                                {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="price">$87</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="image-frame">--}}
                                                {{--<img src="{{ BASE_URL }}/assets/images/img-04.jpg" alt="image description"></div>--}}
                                            {{--<div class="text">--}}
                                                {{--<h2>Wellfleet oysters</h2>--}}
                                                {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="price">$24</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<ul class="list-unstyled menu-list">--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="image-frame">--}}
                                                {{--<img src="{{ BASE_URL }}/assets/images/img-04.jpg" alt="image description"></div>--}}
                                            {{--<div class="text">--}}
                                                {{--<h2>Wellfleet oysters</h2>--}}
                                                {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="price">$12</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="image-frame">--}}
                                                {{--<img src="{{ BASE_URL }}/assets/images/img-04.jpg" alt="image description"></div>--}}
                                            {{--<div class="text">--}}
                                                {{--<h2>Wellfleet oysters</h2>--}}
                                                {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="price">$45</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="image-frame">--}}
                                                {{--<img src="{{ BASE_URL }}/assets/images/img-04.jpg" alt="image description"></div>--}}
                                            {{--<div class="text">--}}
                                                {{--<h2>Wellfleet oysters</h2>--}}
                                                {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="price">$23</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<ul class="list-unstyled menu-list">--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="image-frame">--}}
                                                {{--<img src="{{ BASE_URL }}/assets/images/img-04.jpg" alt="image description"></div>--}}
                                            {{--<div class="text">--}}
                                                {{--<h2>Wellfleet oysters</h2>--}}
                                                {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="price">$15</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="image-frame">--}}
                                                {{--<img src="{{ BASE_URL }}/assets/images/img-04.jpg" alt="image description"></div>--}}
                                            {{--<div class="text">--}}
                                                {{--<h2>Wellfleet oysters</h2>--}}
                                                {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="price">$87</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="image-frame">--}}
                                                {{--<img src="{{ BASE_URL }}/assets/images/img-04.jpg" alt="image description"></div>--}}
                                            {{--<div class="text">--}}
                                                {{--<h2>Wellfleet oysters</h2>--}}
                                                {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="price">$24</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<ul class="list-unstyled menu-list">--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="image-frame">--}}
                                                {{--<img src="{{ BASE_URL }}/assets/images/img-04.jpg" alt="image description"></div>--}}
                                            {{--<div class="text">--}}
                                                {{--<h2>Wellfleet oysters</h2>--}}
                                                {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="price">$12</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="image-frame">--}}
                                                {{--<img src="{{ BASE_URL }}/assets/images/img-04.jpg" alt="image description"></div>--}}
                                            {{--<div class="text">--}}
                                                {{--<h2>Wellfleet oysters</h2>--}}
                                                {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="price">$45</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="image-frame">--}}
                                                {{--<img src="{{ BASE_URL }}/assets/images/img-04.jpg" alt="image description"></div>--}}
                                            {{--<div class="text">--}}
                                                {{--<h2>Wellfleet oysters</h2>--}}
                                                {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="price">$23</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<ul class="list-unstyled menu-list">--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="image-frame">--}}
                                                {{--<img src="{{ BASE_URL }}/assets/images/img-04.jpg" alt="image description"></div>--}}
                                            {{--<div class="text">--}}
                                                {{--<h2>Wellfleet oysters</h2>--}}
                                                {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="price">$15</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="image-frame">--}}
                                                {{--<img src="{{ BASE_URL }}/assets/images/img-04.jpg" alt="image description"></div>--}}
                                            {{--<div class="text">--}}
                                                {{--<h2>Wellfleet oysters</h2>--}}
                                                {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="price">$87</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="image-frame">--}}
                                                {{--<img src="{{ BASE_URL }}/assets/images/img-04.jpg" alt="image description"></div>--}}
                                            {{--<div class="text">--}}
                                                {{--<h2>Wellfleet oysters</h2>--}}
                                                {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
                                            {{--</div>--}}
                                            {{--<div class="price">$24</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- carousel-indicators -->--}}
                    {{--<ol class="carousel-indicators">--}}
                        {{--<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>--}}
                        {{--<li data-target="#carousel-example-generic" data-slide-to="1"></li>--}}
                        {{--<li data-target="#carousel-example-generic" data-slide-to="2"></li>--}}
                    {{--</ol>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}
        <section class="gallery-block container b-padding">
            <div class="row">
                <header class="col-xs-12">
                    <h1 class="maroon-text">gallery</h1>
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
                                        <a href="{{ BASE_URL }}/assets/images/one-square-1.JPG" class="fancybox" ><img src="{{ BASE_URL }}/assets/images/one-square-1.JPG" alt="image description"></a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="{{ BASE_URL }}/assets/images/one-square-2.jpg" class="fancybox" ><img src="{{ BASE_URL }}/assets/images/one-square-2.jpg" alt="image description"></a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="{{ BASE_URL }}/assets/images/one-square-3.jpg" class="fancybox" ><img src="{{ BASE_URL }}/assets/images/one-square-3.jpg" alt="image description"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <a href="{{ BASE_URL }}/assets/images/one-square-4.jpg" class="fancybox" ><img src="{{ BASE_URL }}/assets/images/one-square-4.jpg" alt="image description"></a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="{{ BASE_URL }}/assets/images/one-square-5.jpg" class="fancybox"><img src="{{ BASE_URL }}/assets/images/one-square-5.jpg" alt="image description"></a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="{{ BASE_URL }}/assets/images/one-square-6.jpg" class="fancybox" ><img src="{{ BASE_URL }}/assets/images/one-square-6.jpg" alt="image description"></a>
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