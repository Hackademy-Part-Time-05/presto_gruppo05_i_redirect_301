<x-main>
  <div class="container-fluid hero-header py-5 mb-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-12">
                <h1 class="display-4  mt-3 pt-3 animated slideInDown fw-bold text-center">{{__('ui.reviewer_area')}}</h1>
            </div>
            <div class="col-12">
              <h2 class="display-2  mt-3 pt-3 animated slideInDown fw-bold text-center">{{__('ui.to_be_revisioned')}}</h2>
            </div>
            <div class="col-12">
              <h2 class="display-2  mt-3 pt-3 animated slideInDown fw-bold text-center">{{__('ui.rejected_ad')}}</h2>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-box clearfix">
              <div class="table-responsive">
                <table class="table user-list">
                  <thead>
                    <tr>
                      <th><span>User</span></th>
                      <th><span>Created</span></th>
                      <th class="text-center"><span>Status</span></th>
                      <th><span>Email</span></th>
                      <th>&nbsp;</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        <a href="#" class="user-link">Mila Kunis</a>
                        <span class="user-subhead">Admin</span>
                      </td>
                      <td>
                        2013/08/08
                      </td>
                      <td class="text-center">
                        <span class="label label-default">Inactive</span>
                      </td>
                      <td>
                        <a href="#">mila@kunis.com</a>
                      </td>
                      <td style="width: 20%;">
                        <a href="#" class="table-link">
                          <span class="fa-stack">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                          </span>
                        </a>
                        <a href="#" class="table-link">
                          <span class="fa-stack">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                          </span>
                        </a>
                        <a href="#" class="table-link danger">
                          <span class="fa-stack">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                          </span>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <ul class="pagination pull-right">
                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        </div>

      {{-- @if($announcements_to_check)
      <section class="position-relative w-100 latest_announcements_section">
        <div class="custom-shape-divider-bottom-1684350379">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class=" container cards_landscape_wrap-2 w-100 pb-3 mb-5">
            <div class="row align-content-start justify-content-center g-4">         
                @forelse ($announcements_to_check as $announcement )
                <x-cards :$announcement :category='$announcement->category'></x-cards>
                @empty
                <div class="col-12">
                    <p class="h1 mt-5">{{__('ui.No_Announcements')}}</p>
                </div>
                @endforelse
                {{$announcements_to_check->appends(Request::except('page'))->links()}}
        </div>
        <div class="custom-shape-divider-top-1684351062">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>
      @endif

      <div class="container-fluid hero-header py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-12">
                  <h2 class="display-5  mt-3 pt-3 animated slideInDown fw-bold text-center">{{__('ui.rejected_ad')}}</h2>
                </div>
              </div>
            </div>
          </div>
          @if($rejected_announcement)
          <section class="position-relative w-100 latest_announcements_section">
            <div class="custom-shape-divider-bottom-1684350379">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>
            <div class=" container cards_landscape_wrap-2 w-100 pb-3 mb-5">
                <div class="row align-content-start justify-content-center g-4">         
                    @forelse ($rejected_announcement as $announcement )
                    <x-cards :$announcement :category='$announcement->category'></x-cards>
                    @empty
                    <div class="col-12">
                        <p class="h1 mt-5">{{__('ui.No_Announcements')}}</p>
                    </div>
                    @endforelse
                    {{$rejected_announcement->appends(Request::except('page'))->links()}}
            </div>
            <div class="custom-shape-divider-top-1684351062">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>
        </section>
          @endif --}}

</x-main>