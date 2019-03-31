<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="{{ asset('js/custom.js') }}"></script>
</head>
<body>
<header class="site-header">

@include('layouts.User.user_header')

@yield('content')

@include('layouts.User.user_footer')

</header>

    <script type='text/javascript' src="{{ asset('js/jquery.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/jquery.collapsible.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/swiper.min.js') }} "></script>
    <script type='text/javascript' src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/circle-progress.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/jquery.countTo.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/jquery.barfiller.js') }}"></script>
    <script type='text/javascript' src='js/custom.js'></script>
</body>
</html>