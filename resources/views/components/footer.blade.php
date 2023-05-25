<footer class="text-center text-lg-start text-dark bg-footer pt-2 mt-5">
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold">reADy.it</h6>
          <hr>
          <p>
            {{__('ui.Description_reAdy')}}
          </p>

        </div>
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold">{{__('ui.follow_us_too')}}</h6>
          <hr>
          <div class="row p-1">
            <a href="https://www.instagram.com/" class="social m-2 text-decoration-none"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.facebook.com/" class="social m-2 text-decoration-none"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.twitter.com/" class="social m-2 text-decoration-none"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.tiktok.com/" class="social m-2 text-decoration-none"><i class="fa-brands fa-tiktok"></i></a>
            <a href="https://www.youtube.com/" class="social m-2 text-decoration-none"><i class="fa-brands fa-youtube"></i></a>
          </div>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold ">{{__('ui.useful_links')}}</h6>
          <hr>
          <p class="linkveloci">
            <a href="/login" class="text-dark nav-link"><i class="fa-solid fa-arrow-right"></i> {{__('ui.your_account')}}</a>
          </p>
          <!-- Button trigger modal -->
          @guest
          
          @else
          @if (Auth::user()->is_revisor)
          
          @else
          
          <p class="linkveloci text-dark nav-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <i class="fa-solid fa-arrow-right"></i> {{__('ui.become_an_affiliate')}}!
          </p>
          
          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="flex-grow-1 ms-3">
                    <h5 class="mb-1"><b>{{ auth()->user()->name }}</b></h5>
                    <p class="mb-2 pb-1" style="color: #424242;">{{ auth()->user()->email }}</p>
                    <div>
                      <p class="small text-muted mb-1">{{__('ui.listings')}}</p>
                      <p class="mb-0">{{ auth()->user()->announcements->count()}}</p>
                    </div>
                    <div >
                      <p class="small text-muted mb-1">{{__('ui.subscribed_by')}}</p>
                      <p class="mb-0">{{ auth()->user()->created_at->format('d/m/Y')}}</p>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-main rounded-5 btn-danger m-1" data-bs-dismiss="modal">{{__('ui.refuses')}}</button>
                  <button type="submit" class="btn btn-main btn-success rounded-5 "><a href="{{route('become.revisor')}}" class="nav-link">{{__('ui.become_an_affiliate')}}!</a></button>
                </div>
              </div>
            </div>
          </div>  
          @endif
          @endguest
          <p class="linkveloci">
            <a href="/register" class="text-dark nav-link"><i class="fa-solid fa-arrow-right"></i> {{__('ui.sign_in')}}!</a>
          </p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase fw-bold"> {{__('ui.contact_us')}}</h6>
          <hr/>
          <p class="linkveloci"><i class="fas fa-home mr-3"></i> Italia</p>
          <p class="linkveloci"><i class="fas fa-envelope mr-3"></i> ready@info.it</p>
          <p class="linkveloci"><i class="fa-solid fa-phone trin-trin"></i> 32491043913</p>
        </div>
      </div>
    </div>
  </footer>