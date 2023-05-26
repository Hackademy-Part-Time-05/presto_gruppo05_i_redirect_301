<x-main>
    <div class="container-fluid hero-header pt-5 pb-0 mb-5">
        <div class="container pt-5 pb-0">
          <div class="row g-5 align-items-center">
            <div class="col-lg-6">
              <nav aria-label="breadcrumb animated slideInDown">
                <ol class="mt-5 breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="{{Route('welcome')}}" class="text-decoration-none text-dark">Home</a></li>
                  <li class="breadcrumb-item active text-dark" aria-current="page">{{__('ui.profile')}}</li>
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
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card announcement_detail_user">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                          <h4>{{ auth()->user()->name }}</h4>
                          @if(Auth::user()->is_revisor)
                            <a class="nav-link  position-relative" aria-current="page" href="{{route('revisor.index')}}">
                              {{__('ui.reviewer_area')}}
                          </a>
                        @endif
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mt-3 announcement_detail_user">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                        <span class="text-secondary"></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                        <span class="text-secondary"></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                        <span class="text-secondary"></span>
                      </li>
                    </ul>
                  </div>
                </div>
                 <div class="col-md-8">
              <div class="card mb-3 announcement_detail_user">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">{{__('ui.name')}}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ auth()->user()->name }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ auth()->user()->email }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">{{__('ui.listings')}}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{auth()->user()->announcements->count()}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">{{__('ui.subscribed_by')}}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{auth()->user()->created_at->format('d/m/Y')}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">{{__('ui.Date_of_birth')}}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">{{__('ui.Region_of_residence')}}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">{{__('ui.City_of_residence')}}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <button type="button" class="btn btn_main btn-outline-primary me-1 flex-grow-1">{{__('ui.contact_us')}}</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 mb-3">
                  <div class="card h-100 announcement_detail_user">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">{{__('ui.Announcements_posted')}}</i></h6>
                      <small>{{$announcements_accepted}}</small>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 mb-3 ">
                    <div class="card h-100 announcement_detail_user">
                      <div class="card-body">
                        <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">{{__('ui.Announcements_to_review')}}</i></h6>
                        <small>{{$announcements_to_be_revisioned}}</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 mb-3">
                    <div class="card h-100 announcement_detail_user">
                      <div class="card-body">
                        <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">{{__('ui.Announcements_rejected')}}</i></h6>
                        <small>{{$announcements_rejected}}</small>
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