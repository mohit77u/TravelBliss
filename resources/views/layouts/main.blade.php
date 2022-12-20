<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">

        <title>@yield('meta_title') | TravelBliss</title>
        @vite('resources/sass/app.scss')

    </head>
    <body>

        <!-- include header -->
        @include('partials.header')

        <!-- main content -->
        @yield('content')

        <!-- include footer -->
        @include('partials.footer')

        <!-- toast -->
        @include('toast.toast')

        <!-- scripts -->
        <!-- optional script -->
        @stack('before-scripts')

        <!-- main scripts -->
        @vite('resources/js/app.js')

        <!-- optional script -->
        @stack('after-scripts')

    </body>
</html>
