<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'belone') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js',
         'resources/css/app.css','resources/js/vanilla-tilt.js',
         'resources/views/components/scripts/contact.js',
          'resources/views/scripts/nav-scroll.js'])
</head>
<body class=" mx-3 layout-body row justify-content-center">
    <div class="thanks mt-4 row justify-content-center fit glass"  data-tilt data-tilt-glare data-tilt-max="1" data-tilt-max-glare="0.1" >
        <div class="stack-div py-3 justify-content-center row ">
            <div class="row justify-content-center">
                <h1 class="col-12 fit mt-2">Thank you!</h1>
            </div>
            <p class="fs-4 mt-2 mb-5 d-flex justify-content-center">Your message was sent. I will respond it as soon as I can!
            </p>
            <div class="row justify-content-center mb-5 mt-3">
                <a class="fit btn  btn btn-primary " href="{{route('home')}}">
                Go back
                </a>
            </div>
        </div>
    </div>
</body>
</html>




