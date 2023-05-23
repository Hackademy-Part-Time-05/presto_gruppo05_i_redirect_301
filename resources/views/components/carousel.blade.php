<div id='prova' class=" container emulateclick_on_hover my-2 py-0 col-xs-12 col-md-12 col-lg-6">
    <div class="carousel-container position-relative row">
        <div id="myCarousel" class=" carousel slide px-0 " data-ride="carousel">
            <div class="carousel-inner rounded-4 ">
                @foreach ($images as $image)

                    <div class="carousel-item active" data-slide-number="{{$loop->index}}">
                        <img src="{{Storage::url($image->path)}}" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/Pn6iimgM-wo/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                    </div>

                @endforeach



                {{-- <div class="carousel-item" data-slide-number="1">
                    <img src="https://picsum.photos/1000/702" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/tXqVe7oO-go/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                </div>
                <div class="carousel-item" data-slide-number="2">
                    <img src="https://picsum.photos/1000/703" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/qlYQb7B9vog/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                </div>
                <div class="carousel-item" data-slide-number="3">
                    <img src="https://picsum.photos/1000/704" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/QfEfkWk1Uhk/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                </div>
                <div class="carousel-item" data-slide-number="4">
                    <img src="https://picsum.photos/1000/705" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/CSIcgaLiFO0/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                </div>
                <div class="carousel-item" data-slide-number="5">
                    <img src="https://picsum.photos/1000/706" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/CSIcgaLiFO0/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                </div> --}}
            
            </div>
        </div>
        
        <!-- Carousel Navigation -->
        <div id="carousel-thumbs" class="carousel slide rounded-4 w-100" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row mx-0">

                        @foreach ($images as $image)

                            <div id="carousel-selector-{{$loop->index}}" class="thumb col-4 col-sm-2 px-1 py-2 selected" data-target="#myCarousel" data-slide-to="0">
                                <img src="{{Storage::url($image->path)}}" class="img-fluid" alt="...">
                            </div>
    
                        @endforeach

                        {{-- <div id="carousel-selector-0" class="thumb col-4 col-sm-2 px-1 py-2 selected" data-target="#myCarousel" data-slide-to="0">
                            <img src="https://picsum.photos/1000/701" class="img-fluid" alt="...">
                        </div>

                        <div id="carousel-selector-1" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="1">
                            <img src="https://picsum.photos/1000/702" class="img-fluid" alt="...">
                        </div>
                        <div id="carousel-selector-2" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="2">
                            <img src="https://picsum.photos/1000/703" class="img-fluid" alt="...">
                        </div>
                        <div id="carousel-selector-3" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="3">
                            <img src="https://picsum.photos/1000/704" class="img-fluid" alt="...">
                        </div>
                        <div id="carousel-selector-4" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="4">
                            <img src="https://picsum.photos/1000/705" class="img-fluid" alt="...">
                        </div>
                        <div id="carousel-selector-5" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="4">
                            <img src="https://picsum.photos/1000/706" class="img-fluid" alt="...">
                        </div> --}}
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row mx-0">
                        <div class="col-2 px-1 py-2"></div>
                        <div class="col-2 px-1 py-2"></div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
        </div>
        
    </div> <!-- /row -->
</div> <!-- /container -->