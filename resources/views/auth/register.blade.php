<x-main>
  <section class="position-relative w-100 latest_announcements_section">
    <div class="custom-shape-divider-bottom-1684350379">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
        </svg>
    </div>
    <div class=" container cards_landscape_wrap-2 w-100 pb-3 mb-5">
        <div class="row align-content-start justify-content-center g-4">
            <div class="col-lg-12 col-xl-11 mt-5">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">{{__('ui.create_your_account')}}! </p>
                      <form class="mx-1 mx-md-4" action="{{ route("register") }}" method="POST">
                        @csrf
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas pb-4 fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" name="name" id="name" class="form-control" />
                            <label class="form-label" for="name">{{__('ui.name')}}</label>
                            @error('name')<span class="small text-danger">{{$message}}</span>  
                            @enderror
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas pb-4 fa-calendar-days fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="date" name="bornDate" id="bornDate" class="form-control" />
                            <label class="form-label" for="bornDate">{{__('ui.birthday')}}</label>
                            @error('bornDate')<span class="small text-danger">{{$message}}</span>  
                            @enderror
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas pb-4 fa-city fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" name="city" id="city" class="form-control" />
                            <label class="form-label" for="city">{{__('ui.city')}}</label>
                            @error('city')<span class="small text-danger">{{$message}}</span>  
                            @enderror
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas pb-4 fa-location fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" name="region" id="region" class="form-control" />
                            <label class="form-label" for="region">{{__('ui.region')}}</label>
                            @error('region')<span class="small text-danger">{{$message}}</span>  
                            @enderror
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fa-solid pb-4 fa-briefcase fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" name="profession" id="profession" class="form-control" />
                            <label class="form-label" for="profession">Professione</label>
                            @error('profession')<span class="small text-danger">{{$message}}</span>  
                            @enderror
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas pb-4 pb-4 fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="email" name="email" id="email" class="form-control" />
                            <label class="form-label" for="email">Email</label>
                            @error('email')<span class="small text-danger">{{$message}}</span>  
                            @enderror
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas pb-4 fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" name="password" id="password" class="form-control" />
                            <label class="form-label" for="password">Password</label>
                            @error('password')<span class="small text-danger">{{$message}}</span>  
                            @enderror
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas pb-4 fa-lock fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <input type="password" name="password_confirmation" id="password" class="form-control" />
                              <label class="form-label" for="password">{{__('ui.confirm_password')}}</label>
                            </div>
                          </div>
                        <div class="d-flex justify-content-end">
                          <button type="submit" class="btn buttonRound btn_main">{{__('ui.sign_in')}}!</button>
                        </div>
                      </form>
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                        class="img-fluid" alt="Sample image">
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