<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

              <!-- Favicon icon -->
        <link rel="icon" href="{{ asset('vroom/assets/images/favicon.ico')}}" type="image/x-icon">

        <!-- vendor css -->
        <link rel="stylesheet" href="{{ asset('vroom/assets/css/style.css') }}">

    </head>
    <body class="font-sans antialiased">
            @include('layouts.navigation')
            @include('layouts.header')

            <div class="pcoded-main-container">
                <div class="pcoded-content">
                    {{ $slot }}
                </div>
            </div>        

    <!-- Required Js -->
    <script src="{{ asset('vroom/assets/js/vendor-all.min.js')}}"></script>
    <script src="{{ asset('vroom/assets/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{ asset('vroom/assets/js/pcoded.min.js')}}"></script>
    <script src="{{ asset('vroom/assets/js/menu-setting.min.js')}}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('vroom/assets/js/plugins/apexcharts.min.js')}}"></script>


    <!-- custom-chart js -->
    <script src="{{ asset('vroom/assets/js/pages/dashboard-sale.js')}}"></script>

    </body>
</html>
