{{-- 
  <div class="col-12 col-md-4 my-4 pt-5">
    <div class="card productCard" style="width: 18rem;">
      <img src="https://picsum.photos/200" class="card-img-top p-3 rounded" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$latestAnnouncement->title}}</h5>
        <p class="card-text">{{$latestAnnouncement->price}}</p>
        <p class="card-text">{{$latestAnnouncement->body}}</p>
        <a href="#" class="btn btn-primary shadow m-1">{{$latestAnnouncement->category->name}}</a>
        <a href="{{route('announcements.details',compact('latestAnnouncement'))}}"class="my-2 border-top pt-2  card-link shadow btn btn-success">Visualizza</a>
        <p>Pubblicato il: {{$latestAnnouncement->created_at}}</p>
        <p>Caricato da: {{$latestAnnouncement->user->name}}</p>
      </div>
    </div>
  </div> --}}
  
  {{-- <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 .action">
    <div class="card-flyer .action">
      <div class="text-box .action">
        <div class="image-box .action">
          <img src="https://picsum.photos/400" class="img-fluid" alt="" />
        </div>
        <div class="text-container .action">
          <h6>{{$latestAnnouncement->title}}</h6>
          <p>{{$latestAnnouncement->body}}</p>
          <p>{{$latestAnnouncement->price}}€</p>
          <hr class="my-4"/>
          <p>{{$latestAnnouncement->created_at->format('d/m/Y')}} - Inserito da:{{$latestAnnouncement->user->name}}</p>
          <a href="{{route('announcements.details',compact('latestAnnouncement'))}}" class="btn btn-link link-secondary p-md-1 mb-0">Visualizza</a>
          <a href="{{ route('categoryShow', compact('category')) }}" class="btn btn-link link-secondary p-md-1 mb-0">{{$category->name}}</a>
        </div>
      </div>
    </div>
  </div> --}}
  
  
  {{-- 
    <div class="wrapper-card col-xs-12 col-sm-6 col-md-3 col-lg-3 position-relative g-5">
      <div class="mt-0 ml-0 background-coloured-card {{$latestAnnouncement->category->name}}_background">
        <a class='category-card-button' href="{{ route('categoryShow', compact('category')) }}">
          <h2 class="category_name_card">
            {{$latestAnnouncement->category->name}}
          </h2>
        </a>
      </div>
      <div class="content-main-card position-absolute mb-0">
        <figure class="figure-container">
          <img src="https://picsum.photos/{{150+$latestAnnouncement->id}}/120" alt="">
        </figure>
        
      </div>
      
      
    </div> --}}
    <div class="col-md-8 g-3">
      <div class="row p-2 bg-white border rounded wrapper-shadow">
        <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://picsum.photos/200/{{200+$latestAnnouncement->id}}"></div>
        <div class="col-md-6 mt-1">
          <h5>{{$latestAnnouncement->title}}</h5>
          <div class="d-flex flex-row">
            <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>{{$latestAnnouncement->id}}</span>
          </div>
          <div class="mt-1 mb-1 spec-1"><span>Inserito da <em>{{$latestAnnouncement->user->name}}</em> </span></div>
          <div class="mt-1 mb-1 spec-1"><span>in data {{$latestAnnouncement->created_at->format('d/m/Y')}}</span></div>
          <p class="text-justify text-truncate para mb-0">{{$latestAnnouncement->body}}<br><br></p>
        </div>
        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
          <div class="d-flex flex-row align-items-center">
            <h4 class="mr-1">{{$latestAnnouncement->price}} €</h4><span class="strike-text"></span>
          </div>
            <h6 class="text-success">Spedizione Gratuita</h6>
            <div class="d-flex flex-column mt-4">
              <a href="{{route('announcements.details',compact('latestAnnouncement'))}}" class="btn btn-primary btn-sm" type="button">Dettagli</a>
              <a href="{{ route('categoryShow', compact('category')) }}" class="btn btn-outline-primary btn-sm mt-2 {{$latestAnnouncement->category->name}}_background_card" type="button">{{$latestAnnouncement->category->name}}</a>
            </div>
          </div>
        </div>
    </div> 
      