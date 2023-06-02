<x-main>
  <div class="container-fluid hero-header py-5 mb-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-12">
                <h1 class="display-4  mt-3 pt-3 animated slideInDown fw-bold text-center">{{__('ui.reviewer_area')}}</h1>
                @if(session()->has('messageS'))
                <div class="text-center mb-5 mx-1 mx-md-4 mt-4 alert alert-success  mt-5">
                  {{__('ui.congratulation_accepted')}}
                </div>
                @elseif (session()->has('messageR'))
                <div class="text-center mb-5 mx-1 mx-md-4 mt-4 alert alert-danger  mt-5">
                  {{__('ui.congratulation_rejected')}}
                </div>
                @endif
            </div>
        </div>
    </div>
  </div>
<div class="custom-shape-divider-bottom-1684350379">
  <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
  </svg>
</div>
@if($announcement_to_check)
<section class="position-relative w-100 latest_announcements_section">
  <div class="custom-shape-divider-bottom-1684350379">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
    </svg>
  </div>
  <div class=" container cards_landscape_wrap-2 w-100 pb-3 mb-5">
    <div class="row align-items-start d-flex justify-content-center g-5">      
      <x-carousel :images='$announcement_to_check->images' :announcement='$announcement_to_check'></x-carousel>
      <div class="col-lg-5 pt-4 col-md-12 col-sm-12 announcement-detail emulateclick_on_hover h-100 my-2">
        <a class="btn btn_main btn_categories btn-sm mx-3 mt-2 {{$announcement_to_check->category->name}}_background_card buttonRound" type="button">{{__('ui.'.$announcement_to_check->category->name)}}</a>
        <h2 class=" p-3 col-lg-10 fw-bold col-md-10 col-sm-10 title-announcement-detail">{{$announcement_to_check->title}}</h2>
        <div class="col-lg-7 col-md-7 col-sm-6 p-3">
          <p>{{__('ui.on')}}: <em>{{$announcement_to_check->created_at->format('d/m/Y')}}</em></p>{{__('ui.posted_by')}}: <b>{{$announcement_to_check->user->name ?? ''}}</b> 
        </p>
        <h2 class="announcement_detail_price"> {{$announcement_to_check->price}} €</H2>
        </div>
        <div class="h-100 ">
          <p class="announcement_detail_body p-3 h-100">
            {{$announcement_to_check->body}}
          </p>
          <h5 class="title-announcement-detail p-2">Tags</h5>
            <div class="p-2">
              @foreach ($announcement_to_check->images as $image)
              @if ($image->labels)
              @foreach ($image->labels as $label )
              <p class="d-inline">{{$label}},</p>
              @endforeach
              @endif 
            @endforeach
            </div>
          <br>
          <h5 class="title-announcement-detail p-2">{{__('ui.Adults')}}</h5>
          <p class="px-2">{{__('ui.Adults')}}:
            @foreach ($announcement_to_check->images as $image)
              <span class="{{$image->adult}}"></span>
            @endforeach
          </p>
          <p class="px-2">{{__('ui.satire')}}:
            @foreach ($announcement_to_check->images as $image)
              <span class="{{$image->spoof}}"></span>
            @endforeach
          </p>
          <p class="px-2">{{__('ui.medicine')}}:
            @foreach ($announcement_to_check->images as $image)
              <span class="{{$image->medical}}"></span>
            @endforeach
          </p>
          <p class="px-2">{{__('ui.violence')}}:
            @foreach ($announcement_to_check->images as $image)
              <span class="{{$image->violence}}"></span>
            @endforeach
          </p>
          <p class="px-2">{{__('ui.explicit_content')}}:
            @foreach ($announcement_to_check->images as $image)
              <span class="{{$image->racy}}"></span>
            @endforeach
          </p>

          
          


          <div class="row justify-content-center py-4 revisor_buttons">
            <div class="col-5 col-md-4">
                <form action="{{route('revisor.accept_announcement' , ['announcement'=>$announcement_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-main btn-success rounded-5  m-1">{{__('ui.accept')}}</button>
            </form>
            </div>
            <div class="col-5 col-md-4 text-end">
                <form action="{{route('revisor.reject_announcement' , ['announcement'=>$announcement_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-main rounded-5 btn-danger m-1">{{__('ui.refuses')}}</button>
            </form>
            </div>
        </div>
        </div>
      </div>

      {{-- -----------------PROFILO INSERZIONISTA NELL'ANNUNCIO------------------ --}}
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-12 col-md-9 col-lg-9 col-xl-7">
              <div class="card announcement_detail_user" style="border-radius: 15px;">
                <div class="card-body p-4">
                  <div class="d-flex text-black">
                    <div class="flex-shrink-0">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                        alt="Generic placeholder image" class="img-fluid"
                        style="width: 180px; border-radius: 10px;">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="mb-1"> <b>{{$announcement_to_check->user->name}}</b></h5>
                      <p class="mb-2 pb-1" style="color: #424242;">{{$announcement_to_check->user->email}}</p>
                      <div class="d-flex justify-content-between rounded-3 p-2 mb-2"
                        style="background-color: #e6e6e6;">
                        <div>
                          <p class="small text-muted mb-1">{{__('ui.listings')}}</p>
                          <p class="mb-0">{{$announcement_to_check->user->announcements->count()}}</p>
                        </div>
                        <div class="px-3">
                          <p class="small text-muted mb-1">{{__('ui.subscribed_by')}}</p>
                          <p class="mb-0">{{$announcement_to_check->user->created_at->format('d/m/Y')}}</p>
                        </div>
                        <div>
                          <p class="small text-muted mb-1">{{__('ui.last_activity')}}</p>
                          <p class="mb-0">{{$latestannouncementbyuser[0]->created_at}}</p>
                        </div>
                      </div>
                      <div class="d-flex pt-1">
                        <button type="button" class="btn btn_main btn-outline-primary me-1 flex-grow-1">{{__('ui.contact_us')}}</button>
                        {{-- <button type="button" class="btn btn-primary flex-grow-1">Follow</button> --}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="accordion accordion-flush m-5" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            {{__('ui.Rejected_Ads')}}
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body"><table class="table">
            <thead>
              <tr>
                <th scope="col-2">Id</th>
                <th scope="col-2">{{__('ui.author')}}</th>
                <th scope="col-2">{{__('ui.title')}}</th>
                <th scope="col-2">{{__('ui.category')}}</th>
                <th scope="col-2">{{__('ui.on')}}</th>
                <th scope="col-2"></th>
              </tr>
            </thead>
                @foreach ($announcements_rejected as $rejected)
                <tbody>
                  <tr>
                <td>{{$rejected->id}}</th>
                <td>{{$rejected->user->name}}</td>
                <td>{{$rejected->title}}</td>
                <td>{{$rejected->category->name}}</td>
                <td>{{$rejected->user->created_at->format('d/m/Y')}}</td>
                <td> <form action="{{route('revisor.set_revisionable', ['announcement'=>$rejected])}}"   method="POST" class="">
                  @csrf
                  @method('PATCH')
                  <button type="submit" class="btn buttonRound btn-danger mt-2 btn-sm w-100">{{__('ui.cancel')}}</button>
                </form></td>
              </tr>
            </tbody>
                @endforeach
          </table>
          </div>
        </div>
      </div>
  </div>
  <div class="custom-shape-divider-top-1684351062">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
    </svg>
</div>
  @else
  <section class="position-relative w-100 latest_announcements_section">
    <div class="custom-shape-divider-bottom-1684350379">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
        </svg>
    </div>
    <div class=" container cards_landscape_wrap-2 w-100 pb-3 mb-5">
      <div class="row align-content-start justify-content-center g-4">
      <p class="h1 text-center">{{__('ui.no_announcements_to_review')}}!</p>
      <div class="accordion accordion-flush m-5 " id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              Annunci Rifiutati
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body"><table class="table">
              <thead>
                <tr>
                  <th scope="col-2">Id</th>
                  <th scope="col-2">{{__('ui.author')}}</th>
                  <th scope="col-2">{{__('ui.title')}}</th>
                  <th scope="col-2">{{__('ui.category')}}</th>
                  <th scope="col-2">{{__('ui.on')}}</th>
                  <th scope="col-2"></th>
                </tr>
              </thead>
                  @foreach ($announcements_rejected as $rejected)
                  <tbody>
                    <tr>
                  <td>{{$rejected->id}}</th>
                  <td>{{$rejected->user->name}}</td>
                  <td>{{$rejected->title}}</td>
                  <td>{{$rejected->category->name}}</td>
                  <td>{{$rejected->user->created_at->format('d/m/Y')}}</td>
                  <td> <form action="{{route('revisor.set_revisionable', ['announcement'=>$rejected])}}"   method="POST" class="">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn buttonRound btn-danger mt-2 btn-sm w-100">{{__('ui.cancel')}}</button>
                  </form></td>
                </tr>
              </tbody>
                  @endforeach
            </table>
            </div>
          </div>
        </div>
    </div>
  <div class="custom-shape-divider-top-1684351062">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
    </svg>
</div>
</section>
      @endif
  </div>
</section>

</x-main>