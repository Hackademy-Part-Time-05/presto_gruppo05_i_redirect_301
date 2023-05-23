<div id='prova' class=" container emulateclick_on_hover my-2 py-0 col-xs-12 col-md-12 col-lg-6">
    <div class="carousel-container position-relative row">
        <div id="myCarousel" class=" carousel slide px-0 " data-ride="carousel">
            <div class="carousel-inner rounded-4 ">
                @if ($images->isEmpty())
                {{-- {{dd($images)}} --}}
                <div class="carousel-item active" data-slide-number="0">
                    <img src="/media/Presto Logo Carousel.png" class="d-block w-100" alt="no_image" data-remote="/media/Presto Logo Carousel.png" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                </div>
                @else
                @foreach ($images as $image)
                <div class="carousel-item @if ($loop->index == 0) active @endif" data-slide-number="{{$loop->index}}">
                    <img src="{{$image->getUrl(400,300)}}" class="d-block w-100" alt="{{$announcement->title}}" data-remote="{{$image->getUrl(400,300)}}" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                </div>
                @endforeach
                @endif
            </div>
        </div>
        <!-- Carousel Navigation -->
        <div id="carousel-thumbs" class="carousel slide rounded-4 w-100" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row mx-0">
                        @if ($images->isEmpty())
                        <div id="carousel-selector-0" class="thumb col-4 col-sm-2 px-1 py-2 selected" data-target="#myCarousel" data-slide-to="0">
                            <img src="/media/Presto Logo Carousel.png" class="img-fluid" alt="...">
                        </div>
                        @else
                        @foreach ($images as $image)
                        <div id="carousel-selector-{{$loop->index}}" class="thumb col-4 col-sm-2 px-1 py-2 @if ($loop->index == 0) selected @endif
                            " data-target="#myCarousel" data-slide-to="{{$loop->index}}">
                            <img src="{{$image->getUrl(400,300)}}" class="img-fluid" alt="...">
                        </div>
                        @endforeach
                        @endif
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