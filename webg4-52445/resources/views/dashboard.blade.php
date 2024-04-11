<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}">
    <script defer src="{{ asset('js/script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Examen - Juin 2021 - 52445</title>
</head>

<body>

    <header>
        <div class="header-top">
            <img src="{{ asset('images/esi.png') }}" alt="Logo">
            <h1>WEBG4 - Gestion des commits</h1>
        </div>

        <div class="header-bottom">
            <a href="">Home</a>
            <a href="/repository">Dépôts</a>
        </div>
    </header>

    <main>
        <h2 >Tous les Dépôts</h2>
        @yield('content')
    </main>

    <footer>
        <h3>Soliman Azoz G52445.</h3>
    </footer>

</body>

</html>
