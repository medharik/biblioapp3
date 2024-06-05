@extends('template')

@section('titre')
Emprunter un livre par un etudiant
@endsection

@section('main')
<form action="{{route('etudiants.store_emprunter')}}" method="post">
    @csrf
        <div class="mb-3">
          <label for="etudiant_id" class="form-label">Etudiant :</label>
          <select name="etudiant_id" class="form-select" id="etudiant_id" >
       @foreach ($etudiants as $e)

       <option value="{{$e->id}}">     {{$e->nom}} {{$e->prenom}}   </option>
       @endforeach
        </select>
        </div>
        <div class="mb-3">
          <label for="livre_id" class="form-label">Livre :</label>
<select name="livre_id" id="livre_id" class="form-select">
    @foreach ($livres as $l)

    <option value="{{$l->id}}">     {{$l->titre}}   </option>
    @endforeach</select>
        </div>
        <button type="submit" class="btn btn-primary">Emprunter</button>

</form>
@endsection
