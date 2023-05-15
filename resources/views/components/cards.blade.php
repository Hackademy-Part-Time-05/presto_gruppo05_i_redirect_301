  {{-- <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 .action">
    <div class="card-flyer .action">
      <div class="text-box .action">
        <div class="image-box .action">
          <img src="https://picsum.photos/400" class="img-fluid" alt="" />
        </div>
        <div class="text-container .action">
          <h6>{{$announcement->title}}</h6>
          <p>{{$announcement->body}}</p>
          <p>{{$announcement->price}}€</p>
          <hr class="my-4"/>
          <p>{{$announcement->created_at->format('d/m/Y')}} - Inserito da:{{$announcement->user->name}}</p>
          <a href="{{route('announcements.details',compact('announcement'))}}" class="btn btn-link link-secondary p-md-1 mb-0">Visualizza</a>
          <a href="{{ route('categoryShow', compact('category')) }}" class="btn btn-link link-secondary p-md-1 mb-0">{{$category->name}}</a>
        </div>
      </div>
    </div>
  </div> --}}
  
  
    <div class="col-md-8 g-3">
      <div class="row p-2 bg-white border rounded wrapper-shadow">
        <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://picsum.photos/200/{{200+$announcement->id}}"></div>
        <div class="col-md-6 mt-1">
          <h5>{{$announcement->title}}</h5>
          <div class="d-flex flex-row">
            <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>{{$announcement->id}}</span>
          </div>
          <div class="mt-1 mb-1 spec-1"><span>Inserito da <em>{{$announcement->user->name}}</em> </span></div>
          <div class="mt-1 mb-1 spec-1"><span>in data {{$announcement->created_at->format('d/m/Y')}}</span></div>
          <p class="text-justify text-truncate para mb-0">{{$announcement->body}}<br><br></p>
        </div>
        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
          <div class="d-flex flex-row align-items-center">
            <h4 class="mr-1">{{$announcement->price}} €</h4><span class="strike-text"></span>
          </div>
            <h6 class="text-success">Spedizione Gratuita</h6>
            <div class="d-flex flex-column mt-4">
              <a href="{{route('announcements.details',compact('announcement'))}}" class="btn btn-primary btn-sm" type="button">Dettagli</a>
              <a href="{{ route('categoryShow', compact('category')) }}" class="btn btn-outline-primary btn-sm mt-2 {{$announcement->category->name}}_background_card" type="button">{{$announcement->category->name}}</a>
            </div>
          </div>
        </div>
    </div> 
      