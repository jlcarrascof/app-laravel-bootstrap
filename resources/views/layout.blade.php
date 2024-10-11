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
    <nav>
        <ul>
            <!--<li class="{{ setActive('home') }}"><a href="/">Home</a></li> -->
            <li class="{{ request()->routeIs('about') ? 'active' : ''}}"><a href="/about">About</a></li>
            <li class="{{ request()->routeIs('portfolio') ? 'active' : ''}}"><a href="/portfolio">Portfolio</a></li>
            <li class="{{ request()->routeIs('contact') ? 'active' : ''}}"><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>
