@extends('template')
@section('titre')
Nouveau Livre
@endsection

@section('main')

<form class="w-50 mx-auto shadow p-3 rounded" action="{{route('livres.store')}}" method="post">
    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $e)
    <li>
        {{$e}}
    </li>
        @endforeach
    </div>
    @endif
    @csrf
    <div class="mb-3">
      <label for="titre" class="form-label">titre </label>
      <input value="{{old('titre')}}" type="text" class="form-control" name="titre" id="titre" >
@error('titre')
<div class="text-danger">{{$message}}</div>
@enderror     </div>
    <div class="mb-3">
      <label for="prix" class="form-label">prix </label>
      <input value="{{old('prix')}}" type="text" class="form-control @error('prix')   border border-danger   @enderror" name="prix" id="prix" >
     @error('prix')
<div class="text-danger">{{$message}}</div>
     @enderror
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>
  </form>
@endsection
