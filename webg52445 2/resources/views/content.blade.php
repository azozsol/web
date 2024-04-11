@extends('canevas')
@section('title', 'Programme')

@section('content')

    <table id="content">
        @csrf 
        @method('DELETE')
        {{-- <tr>
            <th>Sigle</th>
            <th>Cours</th>
            <th>Crédits</th>
        </tr>
        <tr>
            <td>Data 1</td>
            <td>Data 2</td>
            <td>Data 3</td>
        </tr> --}}
    </table>

@endsection
