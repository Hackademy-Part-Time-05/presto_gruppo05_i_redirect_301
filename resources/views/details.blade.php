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
      <div class="container cards_landscape_wrap-2">
        <div class="row">             
        @forelse ($category->announcements as $announcement )
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <div class="card-flyer">
                          <div class="text-box">
                              <div class="image-box">
                                  <img src="https://picsum.photos/400" class="img-fluid" alt="" />
                              </div>
                              <div class="text-container">
                                  <h6>{{$announcement->title}}</h6>
                                  <p>{{$announcement->body}}</p>
                                  <hr class="my-4"/>
                                  <p>{{$announcement->created_at->format('d/m/Y')}} - Autore:{{$announcement->user->name ?? ''}}</p>
                                  <a href="#!" class="btn btn-link link-secondary p-md-1 mb-0">Visualizza</a>
                              </div>
                          </div>
                      </div>
              </div>
                @empty
                  <div class="col-12">
                    <p class="h1">Non sono presenti annunci per questa categoria!</p>
                    <p class="h2">Pubblicane uno: <a href="{{route('announcements.create')}}" class="btn btn-success shadow">Nuovo Annuncio</a></p>
                  </div>
                @endforelse
              </div>
      </div>
</x-main>