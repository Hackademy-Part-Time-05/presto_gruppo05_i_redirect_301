<x-main>
    <header class="pt-5 pb-5  align-items-center d-flex bg-dark">
        <div class="container ">
          <div class="row align-items-center d-flex justify-content-between">
            <div class="col-12  pb-5 order-2 order-sm-2 ">
              <h1 class=" mb-3 mt-5 display-3 text-white">{{$announcement_to_check}}</h1>
            </div>
          </div>
        </div>
      </header>
      @if ($announcement_to_check)
      <div class="container mt-5 mb-5 ">
        <div class="row">         
          <x-carousel></x-carousel>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <h5 class="col-lg-7 col-md-7 col-sm-6 mt-5">{{$latestAnnouncement->category->name}}</h5>
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
      @endif
</x-main>