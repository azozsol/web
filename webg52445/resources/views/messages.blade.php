@extends('canevas')
@section('title', '???')
@section('top')
    <div>
        <h1>WEBII - Mon Forum</h1>
    </div>
@endsection

@section('home')
    <p><a href="/threads">Home</a></p>
@endsection

@section('container')
    <table>
        <thead>
            <tr>
                <th>Auteur</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody id="content">

            {{-- @foreach ($allMess as $item)
                <tr>
                    <td>{{ $item->author }} <br>
                        {{ $item->date }}
                    </td>
                    <td>{{ $item->text }}</td>
                </tr>
            @endforeach --}}

        </tbody>
    </table>
    <form action="/api/threads/{{ $thread }}/messages" method="POST">
        @csrf
        <fieldset>
            <legend>Envoyer un message</legend>
            <input type="text" id="name" name="name" placeholder="Nom d'utilisateur:"><br>
            <input type="text" id="password" name="password" placeholder="Mot de pass:"><br>
            <textarea name="message" cols="30" rows="3" placeholder="Votre message..."></textarea><br>
            <input type="submit" value="Envoyer">
        </fieldset>
    </form>

@endsection

@section('down')
    <div>
        <p>WEBG3 - WEBII - 52445</p>
    </div>
@endsection

<script>
    function getThreadId() {
        return {{ $thread }}
    }
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script defer src="{{ asset('js/message.js') }}"></script>
