<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#!">Presto.it</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            @guest
            <li class="nav-item">
              <a class="nav-link" href="/register">Registrati</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login">Accedi</a>
            </li>
            @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-sm ms-2">Esci</button>
                    </form>
                </li>
                @endguest
              </ul>
            </li>
          </ul>
      </div>
    </div>
  </nav>
