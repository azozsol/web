@extends('canevas')
@section('title', 'home')
@section('top')
    <div>
        <h1>WEBII - Mon Forum</h1>
    </div>
@endsection

@section('home')
    <p><a href="/threads">Home</a></p>
@endsection

@section('container')

    <table >
        <thead>
            <tr>
                <th>Sujets de discussion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($all as $item)             
                <tr>
                    <td><p><a href="/threads/{{$item->id}}">{{ $item->title }}</a></p></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

@section('down')
    <div>
        <p>WEBG3 - WEBII - 52445</p>
    </div>
@endsection
