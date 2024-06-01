@extends('template')
@section('titre')
    Liste des filieres
@endsection
@section('notice')
{{session('notice')}}
@endsection
@section('main')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nom</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($filieres as $f)

        <tr>
            <th scope="row">{{$f->id}}</th>
            <td>{{$f->nom}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                <a  class="btn btn-primary btn-sm" href="{{route('filieres.show',$f->id)}}">C</a>
                <a  class="btn btn-warning btn-sm" href="{{route('filieres.edit',$f->id)}}">M</a>
                <form action="{{route('filieres.destroy',$f)}}" method="post">
                @csrf
                @method('DELETE')
                <button   class="btn btn-danger btn-sm" href="">S</button>

                </form>
                </div>
            </td>

        </tr>
        @endforeach

    </tbody>
  </table>
@endsection
