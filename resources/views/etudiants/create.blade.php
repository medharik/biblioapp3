<!-- resources/views/etudiants/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un Étudiant</h1>
    <form action="{{ route('etudiants.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom:</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
        <div class="form-group">
            <label for="filiere_id">Filière:</label>
            <select class="form-control" id="filiere_id" name="filiere_id" required>
                @foreach($filieres as $filiere)
                    <option value="{{ $filiere->id }}">{{ $filiere->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
