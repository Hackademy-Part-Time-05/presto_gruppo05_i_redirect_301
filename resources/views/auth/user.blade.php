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
                      {{auth()->user()->bornDate}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">{{__('ui.Region_of_residence')}}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{auth()->user()->region}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">{{__('ui.City_of_residence')}}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{auth()->user()->city}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">{{__('ui.profession')}}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{auth()->user()->profession}}
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