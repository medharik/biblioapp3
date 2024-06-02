@extends('template')
@section('titre')
    Liste des etudiants
@endsection
@section('CreateRoute')
<a class="btn btn-primary col-4" href="{{ route('etudiants.create')}}" role="button" aria-disabled="true">Creer nouvelle etudiant</a>
@endsection
@section('notice')
    {{ session('notice') }}
@endsection
@section('main')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Filiere</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($etudiants as $etudiant)
                <tr>
                    <th scope="row">{{ $etudiant->id }}</th>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->prenom }}</td>
                    <td>{{ $etudiant->filiere->nom }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('etudiants.show', $etudiant->id) }}"><box-icon
                                name='low-vision'></box-icon></a>
                        <a class="btn btn-warning btn-sm" href="{{ route('etudiants.edit', $etudiant->id) }}"><box-icon
                                type='solid' name='edit'></box-icon></a>
                        <form action="{{ route('etudiants.destroy', $etudiant)}}" onsubmit="return deleteConfirmation()" class="d-inline" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"  href=""><box-icon
                                    name='trash-alt'></box-icon></button>
                        </form>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
<script>
    function deleteConfirmation() {
        let result = confirm("Are you sure you want to delete this?");
        if (result) {
            alert("Item deleted successfully");
            return true; // Proceed with form submission
        } else {
            alert("Deletion canceled");
            return false; // Cancel form submission
        }
    }
</script>
