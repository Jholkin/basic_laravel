<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/app.css">{{--mix('css/app.css') se debe usar eso si se pone a produccion y se trabaja con versionado--}}
    <script src="/js/app.js" defer></script>

</head>
<body>
    @include('partials.nav')

    @include('partials.session-status')

    @yield('content')
</body>
</html>