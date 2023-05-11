<x-main>
    <header class="pt-5 pb-5  align-items-center d-flex bg-dark">
        <div class="container ">
          <div class="row align-items-center d-flex justify-content-between">
            <div class="col-12  pb-5 order-2 order-sm-2 ">
              <h1 class=" mb-3 mt-5 display-3 text-white">Home->{{$latestAnnouncement->category->name}}->{{$latestAnnouncement->title}}</h1>
            </div>
          </div>
        </div>
      </header>
    <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-6">
            <div class="white-box text-center mt-5"><img src="https://picsum.photos/400" class="img-fluid rounded-3"></div>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-6">
            <h5 class="box-title mt-5 m-2">{{$latestAnnouncement->category->name}}</h5>
            <h2 class="m-2 mb-4">{{$latestAnnouncement->title}}</h2>
            <div class="col-lg-7 col-12 bg-presto p-3 m-1 rounded-3">
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
            <a href="{{route('categoryShow',['category'=>$latestAnnouncement->category])}}"><button class="btn btn-success w-100 m-1">Categoria
            </button></a>
            <button type="submit" class="btn btn-success w-100 m-1">Registrati
            </button>
          </div>
        </div>
</x-main>