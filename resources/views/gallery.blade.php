@extends('layouts.app')

@section('content')
    <div class="banner"><img src="{{ BASE_URL }}/assets/images/contact-banner.jpg" alt="banner"></div>

    @include('bookings.reservation-bar')
    <main id="main">
        <!-- Room details -->
        <section class="contact ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="maroon-text" style="margin-top: 50px;">Gallery</h1>
                    </div>

                    <div class=" animate" data-anim-type="fadeInRight" data-anim-delay="300">
                        <div id="lightgallery">
                            @foreach($images as $image)
                                    <a class="thumb" href="{{$image->full}}">
                                        <img src="{{$image->thumb}}">
                                    </a>

                            @endforeach
                        </div>

                        <style>
                            .thumb{
                                width: 280px;
                                min-height: 200px;
                                padding: 10px;
                                float: left;
                            }
                            .thumb:first-child, .thumb:nth-child(5), .thumb:nth-child(9){
                                padding-right: 0px;
                            }
                            .thumb:nth-child(4), .thumb:nth-child(8), .thumb:nth-child(12){
                                padding-left: 0px;
                            }
                        </style>

                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection
