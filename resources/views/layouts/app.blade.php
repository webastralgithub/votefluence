<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title')</title>
        <!-- MAIN app.css and app.js -->
        @vite(['resources/js/app.js','resources/css/app.css'])

        <!-- CDN common stylesheets -->
        @foreach (config('cdn.__common.styles') as $style)
            <link href="{{ $style }}" rel="stylesheet">
        @endforeach

        <!-- CDN common stylesheets -->
        @foreach (config('cdn.page__index.styles') as $style)
            <link href="{{ $style }}" rel="stylesheet">
        @endforeach

        <!-- Adding more custom styles -->
        @yield('styles')

        <!-- Adding components css -->
        @stack('component-styles')

    </head>
    <body class="container w-full relative bg-gray-100 ">
        <x-loader />
        @include('partials.header')

        @yield('content')
        
        @include('partials.footer')
    </body>
</html>
