@extends('template')
@section('titre')
Nouvelle Filiere
@endsection

@section('main')
<form class="w-50 mx-auto shadow p-3 rounded" action="{{route('filieres.store')}}" method="post" enctype="multipart/form-data">
    @csrf
@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $e)
<li>{{$e}}</li>
        @endforeach
    </div>

@endif
    <div class="mb-3">
      <label for="nom" class="form-label">{{__('name')}} </label>
      <input type="text" class="form-control" name="nom" id="nom" >
    </div>
    <div class="mb-3">
      <label for="chemin" class="form-label">Image : </label>
      <input type="file" class="form-control" name="chemin" id="chemin" >
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>
  </form>
@endsection
