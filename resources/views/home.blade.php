<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>

    <h1>Welcome to Home Page</h1>

    Welcome <?php echo $name ?? "Guest"; ?> <br>

    Welcome {{ $name ?? "Guest" }}  <br>

</body>
</html>
