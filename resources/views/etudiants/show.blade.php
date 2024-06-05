<!-- resources/views/etudiants/create.blade.php -->
@extends('template')

@section('main')
<div class="container">
    <h1>Détails de l'Étudiant</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $etudiant->nom }} {{ $etudiant->prenom }}</h5>
            <p class="card-text"><strong>Filière:</strong> {{ $etudiant->filiere->nom }}</p>
            <a href="{{ route('etudiants.index') }}" class="btn btn-secondary">Retour</a>
        </div>
    </div>
    <h3>liste des livres empruntes </h3>
    <ul>
        @foreach ($etudiant->livres as $l)
        <li>

            {{$l->titre}} emprunte le : {{$l->pivot->date_emprunt}}
        </li>
        @endforeach
    </ul>
</div>
@endsection
