<nav  class="navbar bg-primary border-bottom border-body navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">BIBLIO 1.0</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('filieres.index')}}">Filieres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('etudiants.index')}}">Etudiants</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('livres.index')}}">Livres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('etudiants.emprunter')}}">Emprunter</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li> --}}
        </ul>
      </div>
    </div>
  </nav>
