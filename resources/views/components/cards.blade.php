<div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="https://picsum.photos/200/300" alt="" />
                            </div>
                            <div class="text-container">
                                <h6>{{$latestAnnouncement->title}}</h6>
                                <p>{{$latestAnnouncement->body}}</p>
                                <p>{{$latestAnnouncement->price}}</p>
                                <a href="" class="btn btn-primary shadow">Categoria: {{$latestAnnouncement->category->name}}</a>
                                <a href="" class="my-2 border-top pt-2 border-dark card-link shadow btn btn-success">Visualizza</a>
                                <p class="card-footer">Pubblicato il:{{$latestAnnouncement->created_at->format('d/m/Y')}}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
