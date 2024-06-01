<!-- resources/views/etudiants/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails de l'Étudiant</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $etudiant->nom }} {{ $etudiant->prenom }}</h5>
            <p class="card-text"><strong>Filière:</strong> {{ $etudiant->filiere->nom }}</p>
            <a href="{{ route('etudiants.index') }}" class="btn btn-secondary">Retour</a>
        </div>
    </div>
</div>
@endsection
