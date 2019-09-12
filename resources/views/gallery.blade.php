@extends('layouts.app')

@section('content')
    <div class="banner"><img src="{{ BASE_URL }}/assets/images/srhotel-aboutus-banner.jpg" alt="banner"></div>

    @include('bookings.reservation-bar')
    <main id="main">
        <!-- Room details -->
        <section class="our-room room-type-details">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-block pull-right animate" data-anim-type="fadeInRight" data-anim-delay="300">

                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection
