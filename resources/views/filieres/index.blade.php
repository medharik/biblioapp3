@extends('template')

@section('titre')
    Liste des filières
@endsection

@section('notice')
    {{ session('notice') }}
@endsection

@section('main')
<div class="mb-3">
    <a href="{{ route('filieres.create') }}" class="btn btn-success">Ajouter une nouvelle filière</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($filieres as $f)
        <tr>
            <th scope="row">{{ $f->id }}</th>
            <td>{{ $f->nom }}</td>
            <td><img src="{{ asset($f->chemin)}}" alt="{{$f->nom}}" width="200">
            <a href="{{ asset($f->chemin)}}" download>TELECHARGER</a>
            </td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-primary btn-sm" href="{{ route('filieres.show', $f->id) }}">C</a>
                    <a class="btn btn-warning btn-sm" href="{{ route('filieres.edit', $f->id) }}">M</a>
                    <form action="{{ route('filieres.destroy', $f) }}" method="post" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">S</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
