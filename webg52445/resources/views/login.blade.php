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

<form action="/login" method="POST">
    @csrf
    <fieldset>
        <legend>Log In</legend>
        <input type="text" id="login" name="login" placeholder="Nom d'utilisateur:"><br><br>
        <input type="text" id="password" name="password" placeholder="Mot de pass:"><br><br>
        <button type="submit" >Envoyer</button>
    </fieldset>
</form>

@endsection

@section('down')
    <div>
        <p>WEBG3 - WEBII - 52445</p>
    </div>
@endsection
