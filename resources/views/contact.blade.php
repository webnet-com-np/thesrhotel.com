@extends('layouts.app')

@section('content')
    <!-- banner -->
    <div class="banner"><img src="{{ BASE_URL }}/assets/images/contact-banner.jpg" alt="banner"></div>
    @include('bookings.reservation-bar')
    <!-- Navigation -->

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
                        <p></p>
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


                    <div class="col-sm-6">
                        <div class="fb-page" data-href="https://www.facebook.com/thesrhotel/" data-tabs="timeline, events, messages" data-height="600" data-width="450" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/thesrhotel/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/thesrhotel/">The SR Hotel</a></blockquote></div>

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