<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm fixed-top">
    <div class="container">
      <a class="navbar-brand text-white" href="/">Presto.it</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            @guest
            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorie
              </a>    
              <ul class="dropdown-menu ">
                @foreach ($categories as $category)
                <li><a class="dropdown-item" href="{{ route('categoryShow', compact('category')) }}">{{$category->name}}</a></li>
                @endforeach
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="/register">Registrati</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="/login">Accedi</a>
            </li>
            @else
            <li class="nav-item">
              <a href="{{route('announcements.create')}}"><button class="btn ms-lg-2 ms-4">+ Crea Annuncio</button></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorie
              </a>    
              <ul class="dropdown-menu">
                @foreach ($categories as $category)
                <li><a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
                @endforeach
              </ul>
            </li>
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
