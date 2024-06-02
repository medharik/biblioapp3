@extends('template')
@section('titre')
Consultation  de la filiere : {{$filiere->nom}}
@endsection
@section('main')
<ul>
    <Li>Nom : {{$filiere->nom}} </Li>
    <Li>Id : {{$filiere->id}}</Li>
</ul>
<h1>Liste des etudiant </h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($filiere->etudiants as $et)
            <tr>
                <th scope="row">{{ $et->id }}</th>
                <td>{{ $et->nom }}</td>
                <td>{{ $et->prenom }}</td>
            </tr>
        @endforeach

    </tbody>
</table>
@endsection
