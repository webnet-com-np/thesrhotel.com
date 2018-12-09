@extends('layouts.app')

@section('content')

    <!-- contain main informative part of the site -->
    <main id="main">
        <div class="container">
            <div class="contact g-padding">
                <div class="row">
                    <div class="col-xs-6">
                        <h1 class="maroon-text pull-left">Enter Your Details</h1>
                    </div>

                </div>
                <div class="row">

                    <div class="col-sm-6">
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
                            <input class="btn btn-default" type="submit" value="Reserve">
                        </form>

                    </div>
                    <div class="col-sm-6">

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