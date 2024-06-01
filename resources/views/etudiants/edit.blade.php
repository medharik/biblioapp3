@extends('template')
@section('titre')
edition Etudiant
@endsection

@section('main')
<form class="w-50 mx-auto shadow p-3 rounded" action="{{route('etudiants.update',$etudiant->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="nom" class="form-label">nom </label>
      <input type="text" name="nom" value="{{$etudiant->nom}}" class="form-control" name="nom" id="nom" >
    </div>
    <div class="mb-3">
      <label for="prenom" class="form-label">prenom </label>
      <input type="text" name="prenom" value="{{$etudiant->prenom}}" class="form-control" name="nom" id="nom" >
    </div>
    <div class="mb-3 ">
      <label class="form-label">Filiers</label>
      <select name="filiere_id" class="form-control">
          @foreach ($filiers as $filier)
              <option @if ($filier->id == $etudiant->filiere_id) selected @endif value="{{ $filier->id }}">{{ $filier->nom }}</option>
          @endforeach
      </select>
  </div>
    <button type="submit" class="btn btn-primary">update</button>
  </form>
@endsection
