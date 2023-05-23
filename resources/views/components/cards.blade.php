   <div class="col-md-8 g-3 card_product">
      <div class="row p-2 bg-white border rounded-5 wrapper-shadow">
        <div class="col-md-4 d-flex justify-content-center align-content-center">
          <img class="img-fluid py-1 img-responsive rounded product-image card-image rounded-4" src=" 
            @if ($announcement->images->first() != null)
              {{Storage::url($announcement->images->first()->path)}}
            @else
              /media/Presto Logo Carousel.png
            @endif
            ">
        </div>
        <div class="col-md-5 mt-4">
          <h5>{{$announcement->title}}</h5>
          <div class="d-flex flex-row">
            <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
          </div>
          <div class="mt-1 mb-1 spec-1"><span>{{__('ui.posted_by')}} <em>{{$announcement->user->name}}</em> </span></div>
          <div class="mt-1 mb-1 spec-1"><span>{{__('ui.on')}} {{$announcement->created_at->format('d/m/Y')}}</span></div>
          <p class="text-justify text-truncate para pt-1 mb-0">{{$announcement->body}}<br><br></p>
        </div>
        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
          <div class="d-flex flex-row align-items-center">
            <h4 class="mr-1">{{$announcement->price}} €</h4><span class="strike-text"></span>
          </div>
            <h6 class="free-shipping">{{__('ui.free_shipping')}}</h6>
            <div class="d-flex flex-column mt-4">
              <a href="{{route('announcements.details',compact('announcement'))}}" class="btn buttonRound btn_main btn-sm" type="button" >{{__('ui.details')}}</a>
              <a href="{{ route('categoryShow', compact('category')) }}" class="btn btn_main btn_categories btn-sm mt-2 {{$announcement->category->name}}_background_card buttonRound" type="button">{{__('ui.'.$announcement->category->name)}}</a>
              @auth
                @if(Auth::user()->is_revisor)
                  <form action="{{route('revisor.set_revisionable', compact('announcement'))}}"   method="POST" class="">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn buttonRound btn-danger mt-2 btn-sm w-100">{{__('ui.cancel')}}</button>
                  </form>
                @endif
              @endauth
            </div>
          </div>
        </div>
    </div> 
      