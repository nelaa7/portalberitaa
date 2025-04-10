<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title', 'Warta Suara')</title>
        <link rel="icon" href="{{ asset('assets/images/logos/icon.png') }}" type="image/x-icon" />

        @stack('before-styles')
        <link href="{{asset('output.css')}}" rel="stylesheet" />
        <link href="{{asset('main.css')}}" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
        @stack('after-styles')
        <script src="https://unpkg.com/lucide@latest"></script>

    </head>
    @yield('content')
    @stack('before-scripts')
    @stack('after-scripts')
    @extends('front.footer')
</html>    