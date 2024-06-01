@extends('template')
@section('titre')
Edition Filiere : {{$filiere->nom}}
@endsection

@section('main')
<form class="w-50 mx-auto shadow p-3 rounded" action="{{route('filieres.update',$filiere->id)}}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
      <label for="nom" class="form-label">nom </label>
      <input type="text" value="{{$filiere->nom}}" class="form-control" name="nom" id="nom" >
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>
  </form>
@endsection
