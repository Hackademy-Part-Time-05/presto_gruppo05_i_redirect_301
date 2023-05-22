<x-main>
  <div class="container-fluid hero-header pt-5 pb-0 mb-5">
    <div class="container pt-5 pb-0">
      <div class="row g-5 align-items-center">
        <div class="col-lg-6">
          <nav aria-label="breadcrumb animated slideInDown">
            <ol class="mt-5 breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">{{$announcement->category->name}}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$announcement->title}}</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <section class="position-relative w-100 latest_announcements_section">
    <div class="custom-shape-divider-bottom-1684350379">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
      </svg>
    </div>
    <div class=" container cards_landscape_wrap-2 w-100 pb-3 mb-5">
      <div class="row align-items-start d-flex justify-content-center g-5">       
        <x-carousel></x-carousel>
        <div class="col-lg-5 pt-4 col-md-12 col-sm-12 emulateclick_on_hover m-bottom-3 announcement-detail h-100 my-2">
          <h5>
          </h5>
          <h2 class=" p-3 col-lg-10 fw-bold col-md-10 col-sm-10 title-announcement-detail">{{$announcement->title}}</h2>
          <div class="col-lg-7 col-md-7 col-sm-6 p-3">
            <p>{{__('ui.on')}} : <em>{{$announcement->created_at->format('d/m/Y')}}</em></p>{{__('ui.posted_by')}}: <b>{{$announcement->user->name ?? ''}}</b> 
          </p>
          <h2 class="announcement_detail_price"> {{$announcement->price}} €</H2>
          </div>
          <div class="h-100 ">
            {{-- <hr> --}}
            <p class="announcement_detail_body p-3 h-100">
              {{$announcement->body}}
            </p>
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
                        <h5 class="mb-1"> <b>{{$announcement->user->name}}</b></h5>
                        <p class="mb-2 pb-1" style="color: #424242;">{{$announcement->user->email}}</p>
                        <div class="d-flex justify-content-between rounded-3 p-2 mb-2"
                          style="background-color: #e6e6e6;">
                          <div>
                            <p class="small text-muted mb-1">{{__('ui.listings')}}</p>
                            <p class="mb-0">{{$announcement->user->announcements->count()}}</p>
                          </div>
                          <div class="px-3">
                            <p class="small text-muted mb-1">{{__('ui.subscribed_by')}}</p>
                            <p class="mb-0">{{$announcement->user->created_at->format('d/m/Y')}}</p>
                          </div>
                          <div>
                            <p class="small text-muted mb-1">{{__('ui.last_activity')}}</p>
                            <p class="mb-0">{{$latestannouncementbyuser[0]->created_at}}</p>
                          </div>
                        </div>
                        <div class="d-flex pt-1">
                          <button type="button" class="btn btn_main btn-outline-primary me-1 flex-grow-1">{{__('ui.contact_us')}}</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
</x-main>