<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm fixed-top ">
  <a href="/" class="navbar-brand d-flex ms-2"><h2>Presto.it</h2></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            @guest
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorie
              </a>    
              <ul class="dropdown-menu ">
                @foreach ($categories as $category)
                <li><a class="dropdown-item " href="{{ route('categoryShow', compact('category')) }}">{{$category->name}}</a></li>
                @endforeach
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/register">Registrati</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/login">Accedi</a>
            </li>
            
            @else      
             @if(Auth::user()->is_revisor)
            <li class="nav-item">
              <a class="nav-link  position-relative" aria-current="page" href="{{route('revisor.index')}}">
              Zona revisore
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary text-dark">{{App\Models\Announcement::toBeRevisionedCount()}}
            </a>
            </li>
          @endif
            <li class="nav-item">
              <a href="{{route('announcements.create')}}" class="nav-item nav-link">+ Crea Annuncio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorie
              </a>    
              <ul class="dropdown-menu">
                @foreach ($categories as $category)
                <li><a class="dropdown-item " href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
                @endforeach
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">Esci</button>
                    </form>
                </li>
                @endguest
              </ul>
            </li>
          </ul>
          <div  class="search-box m-3">
            <form action="{{route('announcement.search')}}" method="GET" class="d-flex ">
              @csrf
              <button class="btn-search"><i class="fas fa-search"></i></button>
              <input name="searched" class="input-search" type="search" placeholder="Cerca categoria" aria-label="Search">
            </form>
          </div>
      </div>
  </nav>
