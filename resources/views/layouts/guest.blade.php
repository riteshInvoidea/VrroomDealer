<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

            <!-- Favicon icon -->
        <link rel="icon" href="{{ asset('vroom/assets/images/favicon.ico')}}" type="image/x-icon">

        <!-- vendor css -->
        <link rel="stylesheet" href="{{ asset('vroom/assets/css/style.css') }}">


    </head>
    <body>
        {{ $slot }}

        <!-- Required Js -->
        <script src="{{ asset('vroom/assets/js/vendor-all.min.js')}}"></script>
        <script src="{{ asset('vroom/assets/js/plugins/bootstrap.min.js')}}"></script>
        <script src="{{ asset('vroom/assets/js/waves.min.js')}}"></script>


    </body>
</html>
