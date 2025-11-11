<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
          rel="stylesheet">
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.2/src/regular/style.css"
    />
    <link rel="icon" href="/assets/img/icon.png">
    @vite('resources/css/app.css')
    <style>[x-cloak]{display:none!important}</style>
    <title>AI-SANA | SKMA</title>
</head>
@stack('styles')
<body>
@include('layouts.components.header')
<main>
    @yield('content')
</main>
@include('layouts.components.footer')
@vite('resources/js/app.js')
@stack('scripts')
</body>
</html>
