<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head', ['metas' => isset($metas)?$metas: NULL])
<body>
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
