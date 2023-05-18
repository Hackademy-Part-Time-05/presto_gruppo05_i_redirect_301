<x-main>
  <div class="container-fluid hero-header py-5 mb-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 mb-3 animated slideInDown">Esplora la categoria:</h1>
                <h2 class="display-1 mb-3 animated slideInDown fw-bold">{{$category->name}}</h2>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="https://www.clickcease.com/blog/wp-content/uploads/2019/10/digital-advertising-display-network.jpg"
                    alt="">
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
        <div class="row align-content-start justify-content-center g-4">
                @forelse ($announcements as $announcement)
                    <x-cards :$announcement :category='$announcement->category'></x-cards>
                @empty
                <div class="col-12">
                  <p class="h1">Non sono presenti annunci per questa categoria!</p>
                  <p class="h2">Pubblicane uno: <a href="{{route('announcements.create')}}" class="btn btnHeader btn-dark btn-animated">Nuovo Annuncio</a></p>
                </div>
              @endforelse
        </div>
    </div>
    <div class="custom-shape-divider-top-1684351062">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
        </svg>
    </div>
</section>
</x-main>