@extends('dashboard')

@section('content')
    <main class="main">
        <h1>Les meilleurs séries Managa</h1>
        <div class="containerManga">

            @foreach ($all as $item)
                @php
                    $path = "img/$item->couverture .jpg";
                @endphp
                <h2>{{ $item->titre }}</h2>
                <img src=<?= $path ?> alt="Image">
                <div class="content">
                    <p> Auteur : {{ $item->auteur }}</p>
                    <p>Nombre de columes : {{ $item->nombre_volumes }}</p>
                    <p>Date création : {{ $item->date_premiere_parution }}</p>
                    <p>La série est finie : {{ $item->serie_finie }}</p>
                    <a href="#" data-link="{{ $item->id }}">Show details</a>
                    <div id="div"+{{ $item->id }}></div>
                </div>
            @endforeach

        </div>


    </main>
@endsection
