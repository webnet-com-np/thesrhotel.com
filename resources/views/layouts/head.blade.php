<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{-- Meta tags --}}
@if(isset($metas) && is_array($metas))
    {!! echoMetaTag($metas) !!}
@endif
<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- google site verification -->
    <meta name="google-site-verification" content="H6PvTGQ6bopRzlZrqhHffUJ_hIM_pPhUMjwys5B9dIU" />


    <title>{{  'The SR Hotel ,luxury Hotel in Butwal- Bhairahawa, Nepal' }}</title>

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

<!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ BASE_URL }}/css/vendor.css" rel="stylesheet" type="text/css">

    <!-- Styles -->
{{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--<link rel="stylesheet" href="{{ BASE_URL }}/assets/css/bootstrap.css" type="text/css" media="all">--}}
{{--<link rel="stylesheet" href="{{ BASE_URL }}/assets/css/style.css" type="text/css" media="all">--}}
{{--<link rel="stylesheet" href="{{ BASE_URL }}/assets/css/custom.css" type="text/css" media="all">--}}
{{--<link rel="stylesheet" href="{{ BASE_URL }}/assets/css/colors.css" type="text/css" media="all">--}}
{{--<link rel="stylesheet" href="{{ BASE_URL }}/assets/css/jquery.countdown.css" type="text/css">--}}
{{--<link rel="stylesheet" href="{{ BASE_URL }}/assets/css/animations.min.css" type="text/css" media="all">--}}
{{--<link rel="stylesheet" href="{{ BASE_URL }}/assets/css/datepicker.css" type="text/css" media="all">--}}
<!-- Bootstrap Dropdown Hover CSS -->
{{--    <link rel="stylesheet" href="{{ BASE_URL }}/assets/css/animate.min.css" type="text/css" media="all">--}}
{{--    <link rel="stylesheet" href="{{ BASE_URL }}/assets/css/bootstrap-dropdownhover.min.css" type="text/css" media="all">--}}
<!-- Fonts CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400italic,700" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" type="text/css">
    <!-- Range slider CSS -->
{{--<link rel="stylesheet prefetch" href="{{ BASE_URL }}/assets/css/jquery-ui.css" type="text/css">--}}
<!-- flex slider CSS -->
    {{--<link rel="stylesheet" href="{{ BASE_URL }}/assets/css/flexslider.css" type="text/css">--}}
    <link rel="icon" type="image/gif" href="{{ BASE_URL }}/assets/images/title-logo.png" />
    {{--<title>The SR Hotel ,luxury Hotel in Butwal- Bhairahawa, Nepal</title>--}}

</head>
