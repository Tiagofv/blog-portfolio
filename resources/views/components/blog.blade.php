<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172851158-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-172851158-1');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://kit.fontawesome.com/ef6f3a6778.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,500;0,600;0,700;1,500;1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400&display=swap" rel="stylesheet">
    <style>
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Raleway', sans-serif;
        }
        body{
            font-family: 'Open Sans', sans-serif;
        }
    </style>
    @laravelPWA
</head>
<body >
<x-navbar></x-navbar>
<div class="mt-4" style="min-height: 60vh;">
    {{$slot}}
</div>
<x-footer></x-footer>
@include('sweetalert::alert')

</body>

</html>
