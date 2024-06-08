@extends('template')
@section('titre')
Edition Livre : {{$livre->nom}}
@endsection

@section('main')
<form class="w-50 mx-auto shadow p-3 rounded" action="{{route('livres.update',$livre->id)}}" method="post">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $e)
    <li>
        {{$e}}
    </li>
        @endforeach
    </div>
    @endif
    @method('put')
    <div class="mb-3">
        <input type="hidden" name="id"  value="{{$livre->id}}">
      <label for="nom" class="form-label">Titre </label>
      <input type="text" value="{{$livre->titre}}" class="form-control" name="titre" id="titre" >
    </div>
    <div class="mb-3">
        <label for="prix" class="form-label">prix </label>
        <input value="{{$livre->prix}}" type="text" class="form-control" name="prix" id="prix" >
      </div>

    <button type="submit" class="btn btn-primary">Valider</button>
  </form>
@endsection
