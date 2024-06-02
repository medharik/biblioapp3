<!-- resources/views/etudiants/create.blade.php -->
@extends('template')

@section('main')
<div class="container">
    <h1>Modifier Étudiant</h1>
    <form action="{{ route('etudiants.update', $etudiant->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $etudiant->nom }}" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom:</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $etudiant->prenom }}" required>
        </div>
        <div class="form-group">
            <label for="filiere_id">Filière:</label>
            <select class="form-control" id="filiere_id" name="filiere_id" required>
                @foreach($filieres as $filiere)
                    <option value="{{ $filiere->id }}" {{ $filiere->id == $etudiant->filiere_id ? 'selected' : '' }}>{{ $filiere->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
@endsection
