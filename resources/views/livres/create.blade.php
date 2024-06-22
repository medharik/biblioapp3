@extends('template')
@section('titre')
Nouveau Livre
@endsection

@section('main')

<form class="w-50 mx-auto shadow p-3 rounded" action="{{route('livres.store')}}" method="post" enctype="multipart/form-data">
    @csrf
  @if ($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $e)
    <li>{{$e}}</li>
    @endforeach
</div>
  @endif
    <div class="mb-3">
      <label for="titre" class="form-label">{{__('title')}} </label>
      <input value="{{old('titre')}}" type="text" class="form-control @error('titre') is-invalid    @enderror" name="titre" id="titre" >
    @error('titre')
<div class="text-danger">{{$message}}</div>
    @enderror
    </div>
    <div class="mb-3">
      <label for="prix" class="form-label">{{__('price')}} </label>
      <input value="{{old('prix')}}" type="text" class="form-control @error('prix')   border border-danger   @enderror" name="prix" id="prix" >
@error('prix')
<div class="text-danger">{{$message}}</div>
@enderror
    </div>
<div class="row mb-3">
<label for="photo" class="col-md-4 col-form-label text-md-end">Photo : </label>
<div class="col-md-6">
    <input type="file" name="photo"  class="form-control">
</div></div>

    <button type="submit" class="btn btn-primary">Valider</button>
  </form>
@endsection
