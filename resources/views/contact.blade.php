@extends('layouts.app')

@section('content')
    <!-- banner -->
    <div class="banner"><img src="{{ BASE_URL }}/assets/images/srhotel-aboutus-banner.jpg" alt="banner"></div>
    @include('bookings.reservation-bar')
    <!-- Navigation -->
    {{--<div class="navigation-bar">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-xs-7">--}}
                    {{--<ol class="breadcrumb">--}}
                        {{--<li><a href="{{ route('index') }}">Home</a></li>--}}
                        {{--<li class="active">Contact</li>--}}
                    {{--</ol>--}}
                {{--</div>--}}
                {{--<div class="col-xs-5">--}}
                    {{--<a href="" class="link">contact</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- contain main informative part of the site -->
    <main id="main">
        <div class="container">
            <div class="contact g-padding">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="maroon-text">Contact Us Through</h1>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <dl class="contact-info">
                            <dt><span class="icon-location"></span>Address:</dt>
                            <dd>Shankar Tower,Drivertole,Tilottama-1, Rupandehi,Nepal
                            </dd>
                            <dt><span class="icon-phone"></span>Phone:</dt>
                            <dd><a href="tel:0097771590502">+977-71-590502, 71590503
                                    <br>+977 9851118056, 9857032539, 9857071422</a></dd>
                            <dt><span class="icon-paperplane"></span>E-MAIL:</dt>
                            <dd><a href="mailto:thesrhotel@gmail.com">thesrhotel@gmail.com</a></dd>
                        </dl>
                    </div>
                    <div class="col-sm-6">
                        @if(session('message'))

                            <div class='alert alert-success  alert-dismissible'>
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                {{ session('message') }}
                            </div>
                        @endif
                        <form action="{{ route('send_email') }}" class="contact-form" method="POST">
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
                                <label for="comment">Comment</label>
                                <textarea id="comment" class="form-control" rows="8" name="comment" cols="45" required></textarea>
                            </div>
                            <input class="btn btn-default" type="submit" value="Send Message">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- footer of the page -->
    <div class="b-container">
		 @include ('googlemap')
		 @include ('layouts.footer')
    </div>
@endsection