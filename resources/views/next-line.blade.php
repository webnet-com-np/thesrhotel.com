@extends('layouts.app')

@section('content')
    <div class="banner"><img src="{{ BASE_URL  }}/assets/images/srhotel-resturants-banner.jpg" alt="banner"></div>
    <!-- Navigation -->
    <div class="navigation-bar">
        <div class="container">
            <div class="row">
                <div class="col-xs-7">
                    <ol class="breadcrumb">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li class="active">Next Inline</li>
                    </ol>
                </div>
                <div class="col-xs-5">
                    <a href="#" class="link">book</a>
                </div>
            </div>
        </div>
    </div>
    <!-- contain main informative part of the site -->
    <main id="main">
        <section class="banquet-hall-section container general-padding">
            <div class="row">
                <header class="col-md-10 col-sm-12 col-md-offset-1 col-sm-offset-0 header">
                    <h1 class="maroon-text">Banquet hall</h1>
                    <p>We are planning to operate a party palace from Magh 2075, with indoor seating capacity of 500-600 pax. This will be enough to host any event with up to 1500 pax including outdoor area.</p>
                </header>

            </div>
            <div class="row">
                <img src="{{ BASE_URL  }}/assets/images/banquet_hall.jpg" alt="banner">
            </div>
        </section>
        <section class="swimming-pool-section container general-padding">

            <div class="row">
                <header class="col-md-10 col-sm-12 col-md-offset-1 col-sm-offset-0 header">
                    <h1 class="maroon-text">Swimming Pool</h1>
                    <p>With Butwal getting baked by the sun for more than half of the year, we plan to have one of the best outdoor swimming pool in the town in near future</p>
                </header>
            </div>
            <div class="row">
                <img src="{{ BASE_URL  }}/assets/images/sr-hotel-slide3.jpg" alt="banner">
            </div>
        </section>
        <section class="wedding-photographs general-padding">
            <div class="container wedding-photography-wrapper">

            </div>
        </section>
    </main>
@endsection