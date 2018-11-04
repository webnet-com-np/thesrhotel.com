@extends('layouts.app')

@section('content')
    <div class="banner"><img src="{{ BASE_URL }}/assets/images/srhotel-resturants-banner.jpg" alt="banner"></div>
    <!-- Navigation -->
    <div class="navigation-bar">
        <div class="container">
            <div class="row">
                <div class="col-xs-7">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>
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
                <img src="{{ BASE_URL }}/assets/images/letevansa-logo.png" alt="">
            </div>
            <div class="row general-padding">
                <header class="col-md-10 col-sm-12 col-md-offset-1 col-sm-offset-0 header">

                    <p>This will be on the ground floor, next to hotel reception. Lete is essentially, a name of place, which is the gateway to Mustang. This will be a contemporary mustang themed dining area with indoor and outdoor seating areas. This will give our guests an opportunity to know about geographical and cultural diversity of our country. Also, souvenir and t-shirts will be on display and sale. Our main food attraction will be Thakali thali for lunch and dinner for lodge and other customers, with capacity of 85-90 pax. Thakali thali set is one of the most popular dishes in Nepal and is liked by Indians and foreigner customers. We will also serve authentic Nepalese dishes in seasonal basis. The outdoor area will include a kids play area where your kids can play in a safe environment, so that the parents can enjoy the time without hassle.
                    </p>
                </header>
            </div>
            <div class="container">
                <div class="row ">
                    <div class="restaurant-time-capacity-wrapper">
                        <div class=" srhotel-restaurant-time">
                            <div class="restro-time-title ">Opening time</div>
                            <div class="opening-time">6am - 10pm</div>
                        </div>
                        <div class="srhotel-restaurant-capacity">
                            <div class="seating-capacity-title">Seating capacity</div>
                            <div class="seat-capacity-no">55 (indoor) & 35 (outdoor)
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- menu section -->
        <section class="menu-section restaurant-menus general-padding container">
            <div class="row">
                <header class="col-xs-12">
                    <h1>Taste our delicious dishes</h1>
                </header>
            </div>
            <div class="row">
                <!-- carousel -->
                <div id="carousel-example-generic" class="carousel menu-carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <ul class="list-unstyled menu-list">
                                    <li>
                                        <a href="#">
                                            <div class="image-frame">
                                                <img src="{{ BASE_URL }}/assets/images/img-01.jpg" alt="image description"></div>
                                            <div class="text">
                                                <h2>MO:MO</h2>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div>
                                            <div class="price">$12</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="image-frame">
                                                <img src="{{ BASE_URL }}/assets/images/img-02.jpg" alt="image description"></div>
                                            <div class="text">
                                                <h2>Wellfleet oysters</h2>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div>
                                            <div class="price">$45</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="image-frame">
                                                <img src="{{ BASE_URL }}/assets/images/img-03.jpg" alt="image description"></div>
                                            <div class="text">
                                                <h2>Wellfleet oysters</h2>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div>
                                            <div class="price">$23</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled menu-list">
                                    <li>
                                        <a href="#">
                                            <div class="image-frame">
                                                <img src="{{ BASE_URL }}/assets/images/img-04.jpg" alt="image description"></div>
                                            <div class="text">
                                                <h2>Wellfleet oysters</h2>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div>
                                            <div class="price">$15</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="image-frame">
                                                <img src="{{ BASE_URL }}/assets/images/img-05.jpg" alt="image description"></div>
                                            <div class="text">
                                                <h2>Wellfleet oysters</h2>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div>
                                            <div class="price">$87</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="image-frame">
                                                <img src="{{ BASE_URL }}/assets/images/img-06.jpg" alt="image description"></div>
                                            <div class="text">
                                                <h2>Wellfleet oysters</h2>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div>
                                            <div class="price">$24</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <ul class="list-unstyled menu-list">
                                    <li>
                                        <a href="#">
                                            <div class="image-frame">
                                                <img src="{{ BASE_URL }}/assets/images/img-01.jpg" alt="image description"></div>
                                            <div class="text">
                                                <h2>Wellfleet oysters</h2>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div>
                                            <div class="price">$12</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="image-frame">
                                                <img src="{{ BASE_URL }}/assets/images/img-02.jpg" alt="image description"></div>
                                            <div class="text">
                                                <h2>Wellfleet oysters</h2>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div>
                                            <div class="price">$45</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="image-frame">
                                                <img src="{{ BASE_URL }}/assets/images/img-03.jpg" alt="image description"></div>
                                            <div class="text">
                                                <h2>Wellfleet oysters</h2>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div>
                                            <div class="price">$23</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled menu-list">
                                    <li>
                                        <a href="#">
                                            <div class="image-frame">
                                                <img src="{{ BASE_URL }}/assets/images/img-04.jpg" alt="image description"></div>
                                            <div class="text">
                                                <h2>Wellfleet oysters</h2>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div>
                                            <div class="price">$15</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="image-frame">
                                                <img src="{{ BASE_URL }}/assets/images/img-05.jpg" alt="image description"></div>
                                            <div class="text">
                                                <h2>Wellfleet oysters</h2>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div>
                                            <div class="price">$87</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="image-frame">
                                                <img src="{{ BASE_URL }}/assets/images/img-06.jpg" alt="image description"></div>
                                            <div class="text">
                                                <h2>Wellfleet oysters</h2>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div>
                                            <div class="price">$24</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <ul class="list-unstyled menu-list">
                                    <li>
                                        <a href="#">
                                            <div class="image-frame">
                                                <img src="{{ BASE_URL }}/assets/images/img-01.jpg" alt="image description"></div>
                                            <div class="text">
                                                <h2>Wellfleet oysters</h2>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div>
                                            <div class="price">$12</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="image-frame">
                                                <img src="{{ BASE_URL }}/assets/images/img-02.jpg" alt="image description"></div>
                                            <div class="text">
                                                <h2>Wellfleet oysters</h2>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div>
                                            <div class="price">$45</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="image-frame">
                                                <img src="{{ BASE_URL }}/assets/images/img-03.jpg" alt="image description"></div>
                                            <div class="text">
                                                <h2>Wellfleet oysters</h2>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div>
                                            <div class="price">$23</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled menu-list">
                                    <li>
                                        <a href="#">
                                            <div class="image-frame">
                                                <img src="{{ BASE_URL }}/assets/images/img-04.jpg" alt="image description"></div>
                                            <div class="text">
                                                <h2>Wellfleet oysters</h2>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div>
                                            <div class="price">$15</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="image-frame">
                                                <img src="{{ BASE_URL }}/assets/images/img-05.jpg" alt="image description"></div>
                                            <div class="text">
                                                <h2>Wellfleet oysters</h2>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div>
                                            <div class="price">$87</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="image-frame">
                                                <img src="{{ BASE_URL }}/assets/images/img-06.jpg" alt="image description"></div>
                                            <div class="text">
                                                <h2>Wellfleet oysters</h2>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div>
                                            <div class="price">$24</div>
                                        </a>
                                    </li>
                                </ul>
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