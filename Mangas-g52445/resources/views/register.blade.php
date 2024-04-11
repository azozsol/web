@extends('dashboard')

@section('content')
    <main class="main">

        <h1>Création d'une nouvelle série</h1>

        <form action="/registeItem" method="POST" >
            @csrf
            <div>
                <label for="title">Titre:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <br>
            <div>
                <label for="author">Autheur:</label>
                <input type="text" id="author" name="author" required>
            </div>
            <br>
            <div>
                <label for="volumes">Nomber de Volumes:</label>
                <input type="number" id="volumes" name="volumes" required>
            </div>
            <br>
            <div>
                <label for="date">Date de création:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <br>
            <div>
                <label for="cover">Couverture:</label>
                <input type="text" id="cover" name="cover" >
            </div>
            <br>
            <div>
                <label for="scales">La série est finie</label>
                <input type="checkbox" id="fini" name="fini">
            </div>
            <br>
            <div>
                <input type="submit" value="Créer la série">
            </div>
        </form>

    </main>
@endsection
