<x-main>
    <header class="pt-5 pb-5  align-items-center d-flex bg-dark {{$category->name}}_background ">
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
        @forelse ($announcements as $announcement )
          <x-cards :$announcement :category='$announcement->category'></x-cards>
                @empty
                  <div class="col-12">
                    <p class="h1">Non sono presenti annunci per questa categoria!</p>
                    <p class="h2">Pubblicane uno: <a href="{{route('announcements.create')}}" class="btn btnHeader btn-dark btn-animated">Nuovo Annuncio</a></p>
                  </div>
                @endforelse
              </div>
      </div>
</x-main>