@extends('template')
@section('titre')
Consultation  de la filiere : {{$filiere->nom}}
@endsection
@section('main')
<ul>
    <Li>Nom : {{$filiere->nom}} </Li>
    <Li>Id : {{$filiere->id}}</Li>
</ul>
<h2> les {{$filiere->nombreEtudiant()}} etudiant{{($filiere->nombreEtudiant()>1)? "s":"" }} de cette filiere est :</h2>
<ul>
    @foreach ($filiere->etudiants as $e)
    <li>{{$e->nom}}  {{$e->prenom}}</li>

    @endforeach
</ul>
@endsection
