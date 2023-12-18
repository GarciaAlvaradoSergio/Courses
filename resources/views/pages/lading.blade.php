<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutor UTVT - @yield('title')</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    @include('pages._partials.header')
    @yield('content')
    @include('pages._partials.footer')
</body>

</html>
