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
              @forelse ($category->announcements as $announcement )
              <div class="card mt-3 mb-3">
                <div class="card-body">
              <h3 class="card-title text-center">{{$announcement->title}}</h3>
              <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-6">
                <div class="white-box text-center"><img src="https://picsum.photos/400" class="img-fluid"></div>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-6">
                <p>{{$announcement->body}}</p>
                <h2 class="mt-5">
                  {{$announcement->price}}<small class="text-success">(50% di sconto)</small>
                </h2>
                <button class="btn btn-primary btn-rounded"><a href=""></a> Compra ora!</button>
                <h3 class="box-title mt-5">Pubblicato il:</h3>
                <p>{{$announcement->created_at->format('d/m/Y')}} - Autore:{{$announcement->user->name ?? ''}}</p>
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
</x-main>