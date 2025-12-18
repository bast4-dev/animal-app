<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('images/favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
</body>

</html>