<div class="container">
  <div class="row">
    <div class="col-12 col-md-4 my4 pt-5">
      <div class="card productCard" style="width: 18rem;">
        <img src="https://picsum.photos/200" class="card-img-top p-3 rounded" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$latestAnnouncement->title}}</h5>
          <p class="card-text">{{$latestAnnouncement->price}}</p>
          <p class="card-text">{{$latestAnnouncement->body}}</p>
          <a href="#" class="btn btn-primary shadow">{{$latestAnnouncement->category->name}}</a><a href="#"
            class="my-2 border-top pt-2 border-dark card-link shadow btn btn-success">Go somewhere</a>
          <p>Pubblicato il: {{$latestAnnouncement->created_at}}</p>
          <p>Caricato da: {{$latestAnnouncement->user}}</p>
        </div>
      </div>
    </div>
  </div>
</div>