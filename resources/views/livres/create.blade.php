@extends('template')
@section('titre')
Nouveau Livre
@endsection

@section('main')
<form class="w-50 mx-auto shadow p-3 rounded" action="{{route('livres.store')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="titre" class="form-label">titre </label>
      <input type="text" class="form-control" name="titre" id="titre" >
    </div>
    <div class="mb-3">
      <label for="prix" class="form-label">prix </label>
      <input type="text" class="form-control" name="prix" id="prix" >
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>
  </form>
@endsection
