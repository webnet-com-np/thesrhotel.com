<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head', ['metas' => isset($metas)?$metas: NULL])
<body>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=290318151005957&autoLogAppEvents=1"></script>


    <div id="app">


        <div id="wrapper">
            @include('layouts.header')
            @yield('content')
            @include('layouts.footer')
        </div>


    </div>
    @include('layouts.foot')
    @stack('footer-scripts')
</body>
</html>
