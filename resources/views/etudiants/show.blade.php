@extends('template')
@section('titre')
Consultation  de l'etudiant : {{$etudiant->nom}} {{$etudiant->prenom}}
@endsection
@section('main')
<ul>
    <Li>Nom : {{$etudiant->nom}} </Li>
    <Li>Prenom : {{$etudiant->prenom}} </Li>
    <Li>Filiere : {{$etudiant->filiere->nom}}</Li>
</ul>
@endsection
