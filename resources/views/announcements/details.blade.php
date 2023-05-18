<x-main>
  <div class="container-fluid hero-header pt-5 pb-0 mb-5">
    <div class="container pt-5 pb-0">
      <div class="row g-5 align-items-center">
        <div class="col-lg-6">
          <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">{{$announcement->category->name}}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$announcement->title}}</li>
            </ol>
          </nav>
          <h1 class="display-4 mb-3 animated slideInDown">Scopri {{$announcement->title}}</h1>
        </div>
      </div>
    </div>
  </div>
  <section class="position-relative w-100 latest_announcements_section">
    <div class="custom-shape-divider-bottom-1684350379">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
      </svg>
    </div>
    <div class=" container cards_landscape_wrap-2 w-100 pb-3 mb-5">
      <div class="row align-content-start justify-content-center g-5">       
        <x-carousel></x-carousel>
        <div class="col-lg-5 pt-4 col-md-6 col-sm-6 announcement-detail">
          <h5>
            {{-- <a href="{{route('categoryShow',['category'=>$announcement->category])}}"><button class="btn btnHeader btn-category-details btn-animated w-75 m-1"> Esplora la categoria: {{$announcement->category->name}}
            </button></a> --}}
          </h5>
          <h2 class="col-lg-7 fw-bold col-md-7 col-sm-6 title-announcement-detail">{{$announcement->title}}</h2>
          <div class="col-lg-7 col-md-7 col-sm-6">
            <p>Pubblicato il: <em>{{$announcement->created_at->format('d/m/Y')}}</em></p>Inserito da: <b>{{$announcement->user->name ?? ''}}</b> 
          </p>
          <h2> {{$announcement->price}} €</H2>
          </div>
          <div>
            <hr>
            <p>
              {{$announcement->body}}
            </p>
          </div>
        </div>
        <div class="container w-100">
          <div class="rounded-4 announcement-detail-user-info w-50 row ">
            <div class="col-3">
              <img src="https://icons.veryicon.com/png/o/internet--web/prejudice/user-128.png" alt="" class=" w-100">
            </div>
            <h3 class="col-3">{{$announcement->user->name}}</h3>
            <p class="col-3">Iscritto dal: {{$announcement->user->created_at->format('d/m/Y')}}</p>
            <p>L'utente ha inserito  <b>{{$announcement->user->announcements->count()}}</b> Annunci</p>
          </div>
        </div>
      </div>
    </div>
    <div class="custom-shape-divider-top-1684351062">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
      </svg>
    </div>
  </section>
</x-main>