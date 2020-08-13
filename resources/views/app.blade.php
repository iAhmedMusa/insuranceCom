<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Versicherungsinformation</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css' rel='stylesheet' />
    
</head>
<body>
    <div id="page-wrapper">
        @include('nav')
        @section('section')
        @show
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js'></script>
@yield('script')
</html>