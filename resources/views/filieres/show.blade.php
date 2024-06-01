@extends('template')
@section('titre')
Consultation  de la filiere : {{$filiere->nom}}
@endsection
@section('main')
<ul>
    <Li>Nom : {{$filiere->nom}} </Li>
    <Li>Id : {{$filiere->id}}</Li>
</ul>
@endsection
