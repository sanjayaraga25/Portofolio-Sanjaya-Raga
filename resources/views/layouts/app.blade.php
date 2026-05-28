<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#0B0F19">

    <title>@yield('title', config('app.name')) — Portfolio</title>
    <meta name="description" content="@yield('meta_description', 'Personal portfolio website')">

    <meta property="og:title" content="@yield('title', config('app.name'))">
    <meta property="og:description" content="@yield('meta_description', 'Personal portfolio website')">
    <meta property="og:type" content="website">
    <meta property="og:image" content="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 630'%3E%3Crect width='1200' height='630' fill='%230B0F19'/%3E%3Crect x='40' y='40' width='1120' height='550' rx='30' fill='none' stroke='%238B5CF6' stroke-width='2'/%3E%3Ctext x='600' y='340' text-anchor='middle' font-size='72' font-family='Space Grotesk, Arial' fill='%23F5F7FF' font-weight='bold'%3EPortfolio%3C/text%3E%3Ctext x='600' y='420' text-anchor='middle' font-size='32' font-family='Inter, Arial' fill='%239CA3AF'%3EFull Stack Developer%3C/text%3E%3C/svg%3E">
    <meta property="og:url" content="{{ url()->current() }}">

    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' rx='20' fill='%238B5CF6'/%3E%3Ctext x='50' y='68' text-anchor='middle' font-size='50' font-family='Arial' fill='white' font-weight='bold'%3EJ%3C/text%3E%3C/svg%3E">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-neutral text-primary min-h-screen overflow-x-hidden" x-data>
    <div class="bg-noise"></div>
    <div class="bg-grid-pattern fixed inset-0 z-0 pointer-events-none opacity-30"></div>
    <div class="scroll-progress" id="scrollProgress"></div>

    <div id="cursorGlow"></div>

    <x-toast />

    @include('partials.loading-screen')

    @include('partials.navbar')

    <main class="relative z-10">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
