@extends('layouts.app')

@section('content')
    <!-- banner -->
    <div class="banner"><img src="{{ BASE_URL }}/assets/images/srhotel-aboutus-banner.jpg" alt="banner"></div>
    <!-- contain main informative part of the site -->
    <div class="navigation-bar">
        <div class="container">
            <div class="row">
                <div class="col-xs-7">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="active">Booking</li>
                    </ol>
                </div>
                <div class="col-xs-5">
                    <a href="" class="link">Reservation</a>
                </div>
            </div>
        </div>
    </div>
    <!-- contain main informative part of the site -->
    <main id="main">
        <div class="container">
            <div class="contact g-padding">
                    <div class="row">
                        <!-- side bar -->
                        <aside class="col-md-3 col-sm-4 sidebar">
                            <!-- widget -->
                            <section class="widget">
                                <h1>Your Selection</h1>
                                <div class="holder reservation-bar">
                                    <div class="input-append date"  data-date="Check In" data-date-format="dd-mm-yyyy">
                                        <input class="form-control" size="16" type="text" value="{{ $arrival_date }}" disabled="disabled">
                                    </div>
                                    <div class="input-append date"  data-date="Check Out" data-date-format="dd-mm-yyyy">
                                        <input class="form-control" size="16" type="text" value="{{ $arrival_date }}" disabled="disabled">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" size="16" type="text" value="{{ $guest_numbers }}" disabled="disabled">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" size="16" type="text" value="{{ $room_type }}" disabled="disabled">
                                    </div>
                                </div>
                            </section>
                        </aside>
                        <!-- content -->
                        <div class="col-md-9 col-sm-8 content">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h1 class="maroon-text ">Enter Your Details</h1>
                                    <div class="col-md-3">

                                    </div>
                                    <div class="col-sm-8">
                                        @if(session('message'))

                                            <div class='alert alert-success  alert-dismissible'>
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                        <form action="{{ route('reserve_email') }}" class="contact-form" method="POST">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="f-name">*Full Name</label>
                                                <input id="f-name" type="text" class="form-control" name="full_name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">*Email</label>
                                                <input id="email" type="email" class="form-control" name="email_from" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">*Phone</label>
                                                <input id="phone" type="tel" class="form-control" name="phone"  maxlength="10"  required>
                                            </div>
                                            <div class="form-group">
                                                <label for="comment">Message</label>
                                                <textarea id="comment"  name="message" class="form-control" rows="8" name="comment" cols="45" required></textarea>
                                            </div>
                                            <input class="btn btn-default" type="submit" value="Reserve">
                                        </form>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </main>
    <!-- footer of the page -->
    <div class="b-container">

        @include ('layouts.footer')
    </div>
@endsection