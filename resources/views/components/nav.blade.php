<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm fixed-top ">
  <a href="/" class="navbar-brand d-flex ms-2"><img src="/media/Presto logo Main.png" alt="Logo"  height="50" class="w-100 d-inline-block align-text-top"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link " href="{{route('meetTheTeam')}}">{{__('ui.meet_the_team')}}</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             {{__('ui.languages')}}
            </a> 
          <ul class="dropdown-menu ">
            <li class="nav-item">
              <x-_locale lang="it"/>
              <span> {{__('ui.Italian')}}</span>
            </li>
            <li class="nav-item">
              <x-_locale lang="en"/>
              <span> {{__('ui.English')}}</span>
            </li>
            <li class="nav-item">
              <x-_locale lang="es"/>
              <span> {{__('ui.Spanish')}}</span>
            </li>
            <li class="nav-item">
              <x-_locale lang="de"/>
              <span> {{__('ui.German')}}</span>
            </li>
          </ul>
            @guest
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__('ui.category')}}
              </a>    
              <ul class="dropdown-menu ">
                @foreach ($categories as $category)
                  <li><a class="dropdown-item " href="{{ route('categoryShow', compact('category')) }}">{{__('ui.'.$category->name)}}</a></li>
                @endforeach
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/register">{{__('ui.sign_in')}}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/login">{{__('ui.log_in')}}</a>
            </li>
            
            @else      
             @if(Auth::user()->is_revisor)
            <li class="nav-item">
              <a class="nav-link  position-relative" aria-current="page" href="{{route('revisor.index')}}">
                {{__('ui.reviewer_area')}}
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary text-dark">{{App\Models\Announcement::toBeRevisionedCount()}}
            </a>
            </li>
          @endif
            <li class="nav-item">
              <a href="{{route('announcements.create')}}" class="nav-item nav-link">+  {{__('ui.announcements')}}</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__('ui.category')}}
              </a>    
              <ul class="dropdown-menu">
                @foreach ($categories as $category)
                <li><a class="dropdown-item " href="{{route('categoryShow', compact('category'))}}">{{__('ui.'.$category->name)}}</a></li>
                @endforeach
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a href="{{route('userShow', ['user_name' => auth()->user()->name])}}" class="dropdown-item">{{__('ui.profile')}} </a>
                </li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">{{__('ui.sign_out')}}</button>
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
              <input name="searched" class="input-search" type="search" placeholder="{{__('ui.search_category')}}" aria-label="Search">
            </form>
          </div>
      </div>
  </nav>
