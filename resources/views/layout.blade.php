<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Aprendible' )</title>
    <style>
        .active a {
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>
    @include('partials.nav')
    @yield('content')
</body>
</html>
