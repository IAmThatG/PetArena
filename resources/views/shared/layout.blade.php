<?php
    /**
     * Created by PhpStorm.
     * User: GABRIEL
     * Date: 2/8/2018
     * Time: 5:04 PM
     */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link type="text/css" rel="stylesheet" href="{{asset('css/font-awesome/css/fontawesome-all.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/site.css')}}"/>
    @yield('style')

    {{--<link href="css/font-awesome.min.css" rel="stylesheet">--}}

    {{--<script type="text/javascript" src="js/site.js"></script>--}}

            <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
</head>

<body>

    @yield('content')

{{--@include('layout.footer')--}}

<script type="text/javascript" src="{{asset('js/jquery-3.2.1.slim.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
@yield('script')
</body>
</html>