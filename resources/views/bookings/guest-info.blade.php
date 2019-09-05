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

                <form action="{{ route('reserve_email') }}" class="contact-form" method="POST">
                    <div class="row">
                        <!-- side bar -->

                        <aside class="col-md-4 col-sm-12 sidebar">
                            <!-- widget -->
                            <section class="widget">
                                <h1>confirmation</h1>
                                <div class="holder reservation-bar">
                                    <ul class="itemsList">
                                        <li>
                                            Arrive date: 
                                            <input type="text" name="arrival_date" value="{{ $arrival_date->format('d/M/Y') }}">
                                        </li>
                                        <li>
                                            Departure:
                                            <input type="text" name="departure_date" value="{{ $departure_date->format('d/M/Y') }}">
                                        </li>
                                        <li>
                                            Adult: 
                                            <input type="number" name="adult" value="{{ $adult }}">
                                        </li>
                                        <li>
                                            Children: 
                                            <input type="number" name="children" value="{{ $children }}">
                                        </li>
                                        <li>
                                            Room Type:
                                            <select name="room_type" required>
                                                <option value="deluxe" @if($room_type == 'delux') selected @endif>Deluxe Room</option>
                                                <option value="standard" @if($room_type == 'standard') selected @endif>Standard Room</option>

                                            </select>
                                        </li>

                                    </ul>

                                    <style type="text/css">
                                        .itemsList input, .itemsList select{
                                            background: #353535;
                                            border: none;
                                        }
                                    </style>
                                    <!-- <strong class="total-price">total: <span>$1410</span></strong> -->
                                </div>
                            </section>
                        </aside>
                        <!-- content -->
                        <div class="col-md-8 col-sm-8 content">
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
                                        

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!-- footer of the page -->
    <div class="b-container">

        @include ('layouts.footer')
    </div>

 @push('footer-scripts')

 @endpush
@endsection