@extends('template')
@section('titre')
Nouvelle Filiere
@endsection

@section('main')
<form class="w-50 mx-auto shadow p-3 rounded" action="{{route('filieres.store')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="nom" class="form-label">nom </label>
      <input type="text" class="form-control" name="nom" id="nom" >
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>
  </form>
@endsection
