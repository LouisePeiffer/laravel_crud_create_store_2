@extends('layouts.index')

@section('content')
    <h1>Hello les étudiants !</h1>
    <a href="{{route('etudiants.create')}}">Go ajouter des étudiants !</a>
    <h3>Tout le monde :</h3>
    <div>
        @foreach ($dataEtudiants as $etudiant)
            <div>
                {{$etudiant->nom}}
            </div>
        @endforeach
    </div>
    <h3>Les filles :</h3>
    <div>
        @foreach ($dataFilles as $fille)
            <div>
                {{$fille->nom}}
            </div>
        @endforeach
    </div>
    <h3>Les garçons :</h3>
    <div>
        @foreach ($dataGarcons as $garcon)
            <div>
                {{$garcon->nom}}
            </div>
        @endforeach
    </div>
@endsection