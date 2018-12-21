<header id="header" class="fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <strong class="logo"><a href="{{ route('index') }}"><img src="{{ BASE_URL }}/assets//images/sr-hotel-logo.png" alt="Hotel"></a></strong>
                <!-- main navigation -->
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span></span></button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-left">
                            <li><a href="{{ route('index') }}">HOME</a></li>
                            <li><a href="{{ route('about') }}">ABOUT US</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle disable" data-hover="dropdown">rooms</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('roomsuite')}}">suite rooms</a></li>
                                    <li><a href="{{ route('roomdeluxe') }}">deluxe rooms</a></li>
                                    <li><a href="{{ route('roomstandard') }}">standard rooms</a></li>
                                    {{--<li><a href="{{ route('roomhoneymoon') }}">Honeymoon Suite rooms</a></li>--}}

                                </ul>
                            </li>
                            <li><a href="{{route('conference')}}">conference room</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="{{route('restaurants')}}" class="dropdown-toggle disable" data-hover="dropdown">Restaurants</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('onesquarelounge')}}">one square lounge</a></li>
                                    <li><a href="{{ route('letevansa') }}">lete vansa</a></li>

                                </ul>
                            </li>
                            <li><a href="{{ route('nextline') }}">next inline</a></li>
                            <li><a href="{{ route('contact') }}">contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>