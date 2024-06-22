@extends('template')

@section('titre')
    Liste des livres
@endsection

@section('notice')
    {{ session('notice') }}
@endsection

@section('main')
<div class="mb-3">
    <a href="{{ route('livres.create') }}" class="btn btn-success">Ajouter un nouveau livre</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Titre</th>
            <th scope="col">Prix</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($livres as $l)
        <tr>
            <th scope="row">{{ $l->id }}</th>
            <td>{{ $l->titre }}</td>
            <td>{{ $l->prix }}</td>
            <td><img src="{{asset($l->photo)}}" width="100"></td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-primary btn-sm" href="{{ route('livres.show', $l->id) }}">C</a>
                    <a class="btn btn-warning btn-sm" href="{{ route('livres.edit', $l->id) }}">M</a>
                    <form action="{{ route('livres.destroy', $l) }}" method="post" style="display:inline-block;">
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
