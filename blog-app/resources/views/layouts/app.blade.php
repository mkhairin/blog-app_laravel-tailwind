<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']);
</head>

<body class="bg-gray-100">

    <nav>
    </nav>

    <main class="py-8">
        @yield('content')
    </main>

    <footer>
    </footer>

</body>

</html>
