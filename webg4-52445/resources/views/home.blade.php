@extends('dashboard')
@section('content')

    <table class="paleBlueRows">
        <thead>
            <tr>
                <th>Nom du dépôt</th>
                <th>Nom de l'utilisateur</th>
                <th>Nombre de commits</th>
            </tr>
        </thead>
        <tbody>
            @if (isset($all))
                @foreach ($all as $item)
                    <tr>
                        <td>
                            <a href="#" data-link="{{ $item->id }}">{{ $item->name }}</a>
                        </td>
                        <td>{{ $item->contr }}</td>
                        <td>{{ $item->count }}</td>
                    </tr>
                @endforeach
            @endif


        </tbody>
    </table>

    <div id='details'></div>

@endsection
