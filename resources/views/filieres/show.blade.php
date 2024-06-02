@extends('template')
@section('titre')
Consultation  de la filiere : {{$filiere->nom}}
@endsection
@section('main')
<ul>
    <Li>Nom : {{$filiere->nom}} </Li>
    <Li>Id : {{$filiere->id}}</Li>
    {{-- <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($etudiants as $etudiant)
                <tr>
                    <th scope="row">{{ $etudiant->id }}</th>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->prenom }}</td>
                    <td>{{ $etudiant->filiere->nom }}</td>
                </tr>
            @endforeach

        </tbody> --}}
@foreach ($filiere->etudiants as $et)
<Li>Id : {{$et->nom}}</Li>

@endforeach
</ul>

@endsection
