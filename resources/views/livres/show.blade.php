@extends('template')
@section('titre')
Consultation  de la livre : {{$livre->nom}}
@endsection
@section('main')
<ul>
    <Li>Nom : {{$livre->titre}} </Li>
    <Li>Id : {{$livre->prix}}DHS</Li>
</ul>
<ul>

</ul>
@endsection
