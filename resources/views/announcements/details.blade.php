<x-main>
    <header class="pt-5 pb-5  align-items-center d-flex bg-dark">
        <div class="container ">
          <div class="row align-items-center d-flex justify-content-between">
            <div class="col-12  pb-5 order-2 order-sm-2 ">
              <h1 class=" mb-3 mt-5 display-6 fs-3 text-white">Home - {{$latestAnnouncement->category->name}} - {{$latestAnnouncement->title}}</h1>
            </div>
          </div>
        </div>
      </header>
    <div class="container mt-5 mb-5 ">
        <div class="row">

          {{-- --------Old photocarousel--------- --}}

          {{-- <div class="col-lg-5 col-md-5 col-sm-6">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                  <img src="https://picsum.photos/400" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="https://picsum.photos/400" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://picsum.photos/400" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div> --}}

          {{-- --------End Old photocarousel--------- --}}
          
          <x-carousel></x-carousel>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <h5 class="col-lg-7 col-md-7 col-sm-6 mt-5">{{$latestAnnouncement->category->name}}</h5>
            <h2 class="col-lg-7 col-md-7 col-sm-6">{{$latestAnnouncement->title}}</h2>
            <div class="col-lg-7 col-md-7 col-sm-6">
              <h2> {{$latestAnnouncement->price}}</H2>
                <h3>IVA ESCLUSA</h3>
                <p>11,71€Pz IVA inclusa</p>
            </div>
            <div>
              <p>
                {{$latestAnnouncement->body}}
              </p>
            </div>
            <hr>
            <p>Pubblicato il:</p>
            <p>{{$latestAnnouncement->created_at->format('d/m/Y')}} - Autore:{{$latestAnnouncement->user->name ?? ''}}</p>
            <a href="{{route('categoryShow',['category'=>$latestAnnouncement->category])}}"><button class="btn btnHeader btn-dark btn-animated w-100 m-1">Esplora la categoria: {{$latestAnnouncement->category->name}}
            </button></a>
          </div>
        </div>
      </div>
</x-main>