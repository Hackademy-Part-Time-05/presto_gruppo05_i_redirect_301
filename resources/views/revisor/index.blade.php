<x-main>
  <div class="container-fluid hero-header py-5 mb-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-12">
                <h1 class="display-4 mb-3 animated slideInDown fw-bold text-center">Dashboard Revisore</h1>
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
      @if ($announcement_to_check)
      <div class=" container cards_landscape_wrap-2 w-100 pb-3 mb-5">
        <div class="row align-content-start justify-content-center g-4">
          <x-carousel></x-carousel>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h5 class="col-lg-7 col-md-7 col-sm-6 mt-5">{{$announcement_to_check->category->name}}</h5>
            <h2 class="col-lg-7 col-md-7 col-sm-6">{{$announcement_to_check->title}}</h2>
            <div class="col-lg-7 col-md-7 col-sm-6">
              <h2> {{$announcement_to_check->price}}</H2>
                <h3>IVA ESCLUSA</h3>
                <p>11,71€Pz IVA inclusa</p>
            </div>
            <div>
              <p>
                {{$announcement_to_check->body}}
              </p>
            </div>
            <hr>
            <p>Pubblicato il:</p>
            <p>{{$announcement_to_check->created_at->format('d/m/Y')}} - Autore:{{$announcement_to_check->user->name ?? ''}}</p>
            <div class="row">
                <div class="col-12 col-md-6">
                    <form action="{{route('revisor.accept_announcement' , ['announcement'=>$announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btnHeader btn-success btn-animated m-1">Accetta</button>
                </form>
                </div>
                <div class="col-12 col-md-6 text-end">
                    <form action="{{route('revisor.reject_announcement' , ['announcement'=>$announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btnHeader btn-danger btn-animated m-1">Rifiuta</button>
                </form>
                </div>
            </div>
          </div>
        </div>
      </div>
      @else
      <div class="col-12">
        <p class="h1 text-center">Non sono presenti annunci da revisionare!</p>
      </div>
      @endif
      <div class="custom-shape-divider-top-1684351062">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
        </svg>
    </div>
</section>
</x-main>