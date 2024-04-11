@extends('canevas')
@section('title', 'Programme')

@section('students')

   <!-- <form>-->

        <label>Your name : </label>
        <select name="prog" id="prog">
            <option value="none" selected disabled hidden>Veulliez choisir un étudiant</option>
            @foreach ($student as $item)
                <option value="{{ $item->name }}">{{ $item->name }} - {{ $item->credits }} crédits</option>
            @endforeach
        </select>
   <!-- </form> -->

@endsection

@section('content')
        <table id="content">
            <tbody>
            </tbody>
        </table>
@endsection

<script></script>
