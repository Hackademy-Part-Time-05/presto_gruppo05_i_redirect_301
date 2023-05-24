<div class="container-fluid hero-header bg-main py-5 mb-5">
  <div class="container py-5">
    @if(session()->has('request'))
    <div class="flex flex-row justify-center text-center my-2 alert alert-success">
        {{__('ui.well_done_revisor')}}
    </div>
    @elseif (session()->has('become'))
    <div class="flex flex-row justify-center text-center my-2 alert alert-success">
      {{__('ui.revisor_accepted')}}
    </div>
    @endif
      <div class="row g-5 align-items-center">
          <div class="col-lg-6">
              <h1 class="display-4 mb-3 animated slideInDown">{{__('ui.welcome')}} <img src="/media/Presto logo Main.png" alt="Logo"  height="50"></h1>
              <a href="{{route('announcements.create')}}" class="btn buttonRound btn_main btn_create_announcement btn-sm py-2 px-4">{{__('ui.announcements')}}</a>
          </div>
          <div class="col-lg-6">
              <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="https://blog.hootsuite.com/wp-content/uploads/2019/07/facebook-ads-cost.svg"
                  alt="">
          </div>
      </div>
  </div>
</div>