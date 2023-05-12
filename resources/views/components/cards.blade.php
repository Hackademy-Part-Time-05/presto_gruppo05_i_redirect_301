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

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <div class="card-flyer">
      <div class="text-box">
          <div class="image-box">
              <img src="https://picsum.photos/400" class="img-fluid" alt="" />
          </div>
          <div class="text-container">
              <h6>{{$latestAnnouncement->title}}</h6>
              <p>{{$latestAnnouncement->body}}</p>
              <hr class="my-4"/>
              <p>{{$latestAnnouncement->created_at->format('d/m/Y')}} - Inserito da:{{$latestAnnouncement->user->name}}</p>
              <a href="{{route('announcements.details',compact('latestAnnouncement'))}}" class="btn btn-link link-secondary p-md-1 mb-0">Visualizza</a>
              <a href="{{ route('categoryShow', compact('category')) }}" class="btn btn-link link-secondary p-md-1 mb-0">{{$category->name}}</a>
          </div>
      </div>
  </div>
</div>