@extends('layouts.app')

@section('content')
    <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="description">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <h1>
                                    <em>reserve a room for</em><br class="hidden-xs">
                                    <span>family vacation</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ BASE_URL }}/assets/images/2000.webp" alt="image description">
            </div>
            <div class="item">
                <div class="description">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- <h1>
                                    <em>reserve a room to</em><br class="hidden-xs">
                                    <span>relax yourself</span></h1> -->
                            </div>
                        </div>
                    </div>
                </div>
                <img class="lazy" src="" data-src="{{ BASE_URL }}/assets/images/banner/banner-room.webp" alt="image description">
            </div>
            <div class="item">
                <div class="description">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- <h1>
                                    <em>Next inline</em><br class="hidden-xs">
                                    <span>swimming pool,Banquet</span></h1> -->
                            </div>
                        </div>
                    </div>
                </div>
                <img class="lazy" src="" data-src="{{ BASE_URL .'/assets/images/2002.webp' }}" alt="image description">
            </div>
            <div class="item">
                <div class="description">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- <h1>
                                    <em>Next inline</em><br class="hidden-xs">
                                    <span>swimming pool,Banquet</span></h1> -->
                            </div>
                        </div>
                    </div>
                </div>
                <img class="lazy" src="" data-src="{{ BASE_URL .'/assets/images/2003.webp' }}" alt="image description">
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev"></a>
        <a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next"></a>
    </div>
    <!-- reservation-bar -->
    @include('bookings.reservation-bar')


    <!-- contain main informative part of the site -->
    <main id="main">
        <!--section resturants-->
        <section class="restaurant" style="background-image: url({{ BASE_URL }}/assets/images/pattern.webp);">
            <div class="container general-padding">
                <div class="row">
                    <div class="col-sm-6 animate" data-anim-type="fadeInUp" data-anim-delay="300">
                        <div class="text-box">
                            <h1 class="animate-title title">Warmest welcome for our guest</h1>
                            <p>Located in the foothills of chure hills and on the southern plains of Terai region of Nepal, The SR Hotel is committed and dedicated to providing you with the best hotel experience you can have while your stay in Nepal. With just 20 Kilometers North from Gautam Buddha Airport, Bhairahawa, and 40 Kilometers North from Lumbini, The SR Hotel is a perfect example of luxury and comfort.</p>

                            <p> Equipped with 32 well furnished rooms wherein each room enjoys a beautiful view of the town. The Hotel has 26 Deluxe, 3 Superior Deluxe & 3 Suite rooms spread out on 3 floor levels.

                            </p>
                            <a href="{{route('bookings')}}" class="btn btn-default">Book Now</a>
                        </div>
                    </div>
                    <div class="col-sm-6 animate sr-hotel-animate" data-anim-type="fadeInUp" data-anim-delay="600">
                        <div class="row">
                            {{--<div class="col-md-4 sr-hotel-popup-img">--}}
                                {{--<img class="lazy" src="" data-src="/assets/images/circular-image.webp" alt="" style="border-radius: 50%">--}}
                            {{--</div>--}}
                            <div class="col-md-8 sr-hotel-background-img">
                                <div class="image-frame">
                                    <img class="lazy" src="" data-src="/assets/images/welcome_img.webp" alt="image description">
                                </div>
                            </div>
                        </div>
                        div.pop

                    </div>
                </div>
            </div>
        </section>
        <!-- about -->
        <section class="about container general-padding">
            <div class="row">
                <header class="header col-xs-12 general-padding">
                    <h1 class="maroon-text">Facilities we offer</h1>
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
        <!--&lt;!&ndash; Our room &ndash;&gt;-->
        <!--<section class="our-room">-->
        <!--<div class="image-frame" style="background-image: url(images/image-03.jpg);"></div>-->
        <!--<div class="container">-->
        <!--<div class="row">-->
        <!--<div class="col-sm-6 text-block pull-right animate" data-anim-type="fadeInRight" data-anim-delay="300">-->
        <!--<h1>Our room - deluxe double</h1>-->
        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
        <!--<div class="row">-->
        <!--<ul class="list-unstyled list col-sm-6">-->
        <!--<li>LCD TVs 28 ''</li>-->
        <!--<li>national and international TV channels</li>-->
        <!--<li>direct dial telephone, Internet access</li>-->
        <!--<li>premium cosmetics</li>-->
        <!--</ul>-->
        <!--<ul class="list-unstyled list col-sm-6">-->
        <!--<li>fluffy cotton bathrobes</li>-->
        <!--<li>towels and cotton sheets</li>-->
        <!--<li>comfortable slippers</li>-->
        <!--<li>hairdryer</li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--<ul class="list-inline services-list">-->
        <!--<li><span class="icon ico-downtown"></span>Near<br> downtown</li>-->
        <!--<li><span class="icon ico-wifi"></span>free wifi</li>-->
        <!--<li><span class="icon ico-parking"></span>free<br> parking</li>-->
        <!--<li><span class="icon ico-breakfast"></span>Free<br> breackfast</li>-->
        <!--<li><span class="icon ico-mp"></span>23mp</li>-->
        <!--</ul>-->
        <!--<a href="#" class="btn btn-default">Book Now</a>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</section>-->
        <!-- restaurant -->
        <section class="restaurant" style="background-image: url({{ BASE_URL }}/assets/images/pattern.jpg);">
            <div class="container general-padding">
                <div class="row">
                    <div class="col-sm-6 animate" data-anim-type="fadeInUp" data-anim-delay="300">
                        <div class="text-box">
                            <h1 class="maroon-text">our restaurants</h1>
                            <p>Enjoy Unique, yet magnificent dining experience at our restaurants. Whether you???re viewing the chure ranges, or the magnificent terai plains while sipping a refreshing cocktail or sharing an authentic Nepali meal with friends, your time spent at any of our 2 on-site restaurants at The SR Hotel is sure to be memorable.
                            </p>
                            <p>

                                Start your day with a hearty Super Breakfast from our Cafe or a casual lunch in a fine dining experience in Lete Vansa, will make your way to Neptunes.

                            </p>
                            <a href="{{route('restaurants')}}" class="btn btn-default">Read More</a>
                        </div>
                    </div>
                    <div class="col-sm-6 animate" data-anim-type="fadeInUp" data-anim-delay="600">
                        <div class="image-frame">
                            <img class="lazy" src="" data-src="{{ BASE_URL }}/assets/images/restaurant-home.webp" alt="image description">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our news -->
        <section class="home-rooms news container b-padding">
            <div class="row">
                <header class="header col-xs-12 general-padding">
                    <h1 class="maroon-text">our Rooms</h1>
                    <p>Equipped with 32 well furnished and spacious rooms wherein each room enjoys a beautiful view. The Hotel has 3 Suite,  3 Deluxe Luxury & 26 Standard rooms spread out on 3 floors.</p>
                </header>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <!-- carousel -->
                    <div id="carousel-example-generic2" class="carousel slide news rooms" data-ride="carousel">    <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <!-- <div class="item active">
                                <div class="col-sm-8 col">
                                    <div class="image-holder">
                                        <a href="{{ BASE_URL }}/assets/images/suite-room.webp" class="fancybox">
                                            <img class="lazy" src="" data-src="{{ BASE_URL }}/assets/images/suite-room.webp" alt="image description">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4 col">
                                    <div class="carousel-caption">
                                        <h2 class="yellow-text">Suite Room</h2>
                                        <p>We have 3 types of Suite rooms, Honeymoon Suite room, Executive Suite Room and Presidential Suite room for VIP guests and couples. Depeding upon guests??? requirements, we have bathtub, shower enclosure, living hall. These rooms come with larger LED TVs, bed and mini bar.</p>
                                        <a href="{{route('roomsuite')}}" class="btn btn-default">read more</a>
                                    </div>
                                </div>
                            </div> -->
                            <div class="item active">
                                <div class="col-sm-8 col">
                                    <div class="image-holder">
                                        <a href="{{ BASE_URL }}/assets/images/delux-room.webp" class="fancybox">
                                            <img class="lazy" src="" data-src="{{ BASE_URL }}/assets/images/delux-room.webp" alt="image description">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4 col">
                                    <div class="carousel-caption">
                                        <h2 class="yellow-text">Superior Deluxe Room</h2>
                                        <p>We have 3 superior deluxe rooms with with double window view facing east and south with pleasant view of plain lands and 6 lane highway. These rooms come with additional amenities such.as mini bar fridge, bigger mattress etc.</p>
                                        <a href="{{route('roomdeluxe')}}" class="btn btn-default">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-8 col">
                                    <div class="image-holder">
                                        <a href="{{ BASE_URL }}/assets/images/luxury-room.webp" class="fancybox">
                                            <img class="lazy" src="" data-src="{{BASE_URL}}/assets/images/standard-room.webp" alt="image description">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4 col">
                                    <div class="carousel-caption">
                                        <h2 class="yellow-text">standard Room</h2>
                                        <p>We have 26 standard rooms with 6 twin bedrooms, 1 triple bed room and 19 double bed rooms. All the rooms are equipped with AC, attached bathrooms and free Wifi. This is ideal for travelers and corporate clients.</p>
                                        <a href="{{route('roomstandard')}}" class="btn btn-default">read more</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                                                                                                                   <!-- Indicators -->
                        <div class="indicators col-sm-4">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
                                <!-- <li data-target="#carousel-example-generic2" data-slide-to="2"></li> -->
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--&lt;!&ndash; Fun facts &ndash;&gt;-->
        <!--<section class="fun-facts">-->
        <!--<div class="container">-->
        <!--<div class="row">-->
        <!--<div class="col-xs-12">-->
        <!--<div class="counter-list horizon" data-animate-in="scale:1.2;">-->
        <!--<div class="grid-item">-->
        <!--<div class="counter-wrapper">-->
        <!--<strong class="number counter">-->
        <!--<span id="s1" class="stats" data-count-from="100" data-count-to="7892" >7892</span>-->
        <!--</strong>-->
        <!--<span class="title">Customers</span>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div class="grid-item">-->
        <!--<div class="counter-wrapper">-->
        <!--<strong class="number counter">-->
        <!--<span id="s2" class="stats" data-count-from="10" data-count-to="415" >415</span>-->
        <!--</strong>-->
        <!--<span class="title">Celebrities</span>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div class="grid-item">-->
        <!--<div class="counter-wrapper">-->
        <!--<strong class="number counter">-->
        <!--<span id="s3" class="stats" data-count-from="100" data-count-to="6781" >6781</span>-->
        <!--</strong>-->
        <!--<span class="title">Returns</span>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div class="grid-item">-->
        <!--<div class="counter-wrapper">-->
        <!--<strong class="number counter">-->
        <!--<span id="s4" class="stats" data-count-from="100" data-count-to="6123" >6123</span>-->
        <!--</strong>-->
        <!--<span class="title">Happy people</span>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</section>-->
    </main>
    <!-- footer of the page -->
    <div class="b-container">
        @include( 'googlemap' )
        @include('layouts.footer')
    </div>
@endsection

@push('footer-scripts')
{{--<script>--}}
    {{--$(document).click(function (e) {--}}
        {{--if (!$(e.target).is('.guest-modal ,.guest-modal *')) {--}}
            {{--$('.collapse').collapse('hide');--}}
        {{--}--}}
    {{--});--}}

    {{--var updateField = {--}}
        {{--updateGuest : function(child,adult){--}}
             {{--var resultChild,resultAdult;--}}
             {{--if( child > 1){--}}
                 {{--child = child +' ' +'Children';--}}
             {{--}else{--}}
                 {{--child = child + ' ' + 'Child';--}}
             {{--}--}}
            {{--if( adult > 1){--}}
                {{--adult = adult + ' ' +'Adults';--}}
            {{--}else{--}}
                {{--adult = adult + ' ' + 'Adult';--}}
            {{--}--}}
            {{--$('#guest-numbers'). val(adult + ' '+ child );--}}
        {{--}--}}
    {{--}--}}

    {{--$('#child-num, #adult-num').on('change', function () {--}}
        {{--updateField.updateGuest($('#child-num').val(),$('#adult-num').val());--}}
    {{--});--}}



{{--</script>--}}


@endpush
