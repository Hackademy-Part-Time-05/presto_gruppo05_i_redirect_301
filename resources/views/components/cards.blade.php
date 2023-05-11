
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
</div>