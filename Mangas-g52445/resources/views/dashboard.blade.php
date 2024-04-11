<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <script defer src="{{ asset('js/script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <title>Mangas-g52445</title>
</head>

<body>
    <header class="header">
        <h1>WEBII - Serie - Manga</h1>
    </header>

    <div class="container">
        <nav class="nav">
            <a href="/">Accueil</a>
            <a href="/registration">Nouvlelle série</a>
        </nav>

        @yield('content')
    </div>

    <footer class="footer">WEBG4 - WEBII - g52445 Azoz Soliman</footer>
</body>

</html>
