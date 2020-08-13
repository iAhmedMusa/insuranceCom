<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('home')}}">Versicherungsunternehmen</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{route('home')}}">Zuhause</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::is('create') ? 'active' : '' }}" href="{{route('create')}}">Daten hinzufügen</a>
        </li>
      </ul>
    </div>
  </nav>