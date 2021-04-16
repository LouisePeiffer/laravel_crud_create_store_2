@extends('layouts.index')

@section('content')
    <h1>Ajoutons des étudiants!</h1>
    <form method="POST" action="{{route('etudiants.store')}}">
        @csrf
        <label for="nom">Nom</label>
        <input type="text" name="nom">

        <br>

        <label for="genre">Genre</label>
        <input type="text" name="genre">

        <br>

        <label for="Age">Age</label>
        <input type="number" name="age">

        <br>

        <button type="submit" class="btn btn-outline-info">Info</button>
    </form>
@endsection