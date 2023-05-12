<x-main>
    <header class="pt-5 pb-5  align-items-center d-flex bg-dark">
        <div class="container ">
          <div class="row align-items-center d-flex justify-content-between">
            <div class="col-12  pb-5 order-2 order-sm-2 ">
              <h1 class=" mb-3 mt-5 display-3 text-white">Esplora la categoria {{$category->name}}</h1>
            </div>
          </div>
        </div>
      </header>
      <div class="container">
      <div class="row">              
        @forelse ($category->announcements as $announcement )
        <section class="mx-auto my-5" style="max-width: 23rem;">
          <div class="card productCard">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="https://picsum.photos/400" class="img-fluid" />
            </div>
            <div class="card-body">
              <h3 class="card-title ">{{$announcement->title}}</h3>
              <ul class="list-unstyled list-inline mb-0">
                <li class="list-inline-item me-0">
                  <i class="fas fa-star text-warning fa-xs"> </i>
                </li>
                <li class="list-inline-item me-0">
                  <i class="fas fa-star text-warning fa-xs"></i>
                </li>
                <li class="list-inline-item me-0">
                  <i class="fas fa-star text-warning fa-xs"></i>
                </li>
                <li class="list-inline-item me-0">
                  <i class="fas fa-star text-warning fa-xs"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fas fa-star-half-alt text-warning fa-xs"></i>
                </li>
                <li class="list-inline-item">
                  <p class="text-muted">4.5 (413)</p>
                </li>
              </ul>
              <p class="mb-2">{{$announcement->price}}</p>
              <p class="card-text">
                <p>{{$announcement->body}}</p>
              </p>
              <hr class="my-4"/>
              <p>{{$announcement->created_at->format('d/m/Y')}} - Autore:{{$announcement->user->name ?? ''}}</p>
              <a href="#!" class="btn btn-link link-secondary p-md-1 mb-0">Visualizza</a>
            </div>
          </div>
        </section>
                @empty
                  <div class="col-12">
                    <p class="h1">Non sono presenti annunci per questa categoria!</p>
                    <p class="h2">Pubblicane uno: <a href="{{route('announcements.create')}}" class="btn btn-success shadow">Nuovo Annuncio</a></p>
                  </div>
                @endforelse
              </div>
      </div>
</x-main>