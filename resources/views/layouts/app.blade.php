<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Kampung Makan</title>
    <link rel="stylesheet" href="/css/styling.css">
</head>
<body>

<header>
                 <h1>Kampung Makan</h1>

    <nav>
        <a href="/">Home</a>
        <a href="/menu">Menu</a>
        <a href="/contact">Contact</a>
        @auth
            <a href="/admin/dashboard">Admin</a>
            <a href="/logout">Uitloggen</a>
        @endauth
        @guest
            <a href="/login">Inloggen</a>
        @endguest
    </nav>
</header>

<main>
    @yield('inhoud')
</main>

<footer>
    <p>© 2025 Kampung Makan - Authentiek Maleis Restaurant Nijmegen</p>
</footer>

</body>
</html>
