<!-- resources/views/etudiants/create.blade.php -->
@extends('template')

@section('main')
<div class="container">
    <h1>Ajouter un Étudiant</h1>
    <form action="{{ route('etudiants.store') }}" method="POST">
        @csrf

        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $e)
                    <li>{{$e}}</li>
            @endforeach
        </div>

        @endif

        <div class="form-group">
            <label for="nom">Nom:</label>
            <input value="{{old('nom')}}" type="text" class="form-control" id="nom" name="nom" required>
            @error('nom')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="prenom">Prénom:</label>
            <input value="{{old('prenom')}}" type="text" class="form-control" id="prenom" name="prenom" required>
            @error('prenom')
            <div class="text-danger">{{$message}}</div>
            @enderror
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
