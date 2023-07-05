<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css',])
</head>
<body class="layout-body">
<nav class="navbar navbar-expand-md">
    <div class="container">
        <div class=" mt-3 collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto" alt=""><h3 class="fw-bolder">joao belone</h3></ul>
            <!-- Right Side Of Navbar -->
            <ul class="nav2"><a href="/" class="fw-bolder">About</a></ul>
            <ul class="nav2"><a href="/" class="fw-bolder">Projects</a></ul>
            <ul class="nav2"><a href="/" class="fw-bolder">Contact</a></ul>
        </div>
    </div>
</nav>
<main class="">
    @yield('content')
</main>
</body>
</html>




