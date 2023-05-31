<section class="position-relative w-100 latest_announcements_section">
    {{-- {{dd($announcement)}} --}}
    <div class="custom-shape-divider-bottom-1684350379">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
        </svg>
    </div>
    <div class=" container cards_landscape_wrap-2 w-100 pb-3 mb-5">
        <div class="row align-content-start justify-content-center g-4">
          <div class="col-lg-12 col-xl-11">
            <div class="card text-black" style="border-radius: 25px;">
              <div class="card-body p-md-5">
                <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Modifica il tuo annuncio! </p>
                    @if(session()->has('message'))
                    <div class="text-center mb-5 mx-1 mx-md-4 mt-4 alert alert-success">
                      {{__('ui.well_done')}}
                    </div>
                    @endif
                    <form class="mx-1 mx-md-4" wire:submit.prevent="save">
                      @csrf
                      <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                          <label for="category">{{__('ui.category')}}</label>
                           <select wire:model.defer="category" id="category" class=" @error('title') is-invalid @enderror">
                            <option value="">{{__('ui.select')}}</option>
                            @foreach ($categories as $category)
                              <option value="{{$category->id}}"
                                @if ($announcement->category->id == $category->id)
                                    {{'selected'}}
                                @endif
                                >
                                {{__('ui.'.$category->name)}}</option>
                            @endforeach
                          </select> 
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                          <label for="title">{{__('ui.ad_title')}}</label>
                          <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror" value="test">
                          @error('title')
                          <div class=" text-danger">
                            {{$message}}
                          </div> 
                          @enderror
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center mb-4">
                          <div class="form-outline flex-fill mb-0">
                            <label for="body">{{__('ui.description')}}</label>
                              <textarea wire:model="body" type="text" class="form-control @error('body') is-invalid @enderror"></textarea>
                              @error('body')
                              <div class=" text-danger">
                                {{$message}}
                              </div> 
                              @enderror
                            </div>
                      </div>
                      <div class="d-flex flex-row align-items-center mb-4">
                          <div class="form-outline flex-fill mb-0">
                            <label for="price">{{__('ui.price')}}</label>
                              <input wire:model="price" type="number" class="form-control @error('price') is-invalid @enderror">
  
                              @error('price')
                              <div class=" text-danger">
                                {{$message}}
                              </div> 
                              @enderror
                            </div>
                      </div>
                      <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <input wire:model="temporary_images" type="file" name="images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror"
                            placeholder="Img"/>
                            @error('temporary_images.*')
                            <div class=" text-danger">
                              {{$message}}
                            </div> 
                            @enderror
                          </div>
                      </div>
                      @if (!empty($images))
                      <div class="row">
                        <div class="col-12"><p>{{__('ui.photo_preview')}}:</p>
                          <div class="row border border-4 border-info rounded shadow py-4">
                            @foreach ($temporary_images as $image )
                            <div class="col my-3">
                              <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}})"></div>
                              <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click='removeImage({{$key}})'>{{__('ui.delete')}}</button>
                            </div>
                            @endforeach
                          </div>
                        </div>
                      </div>
                      @endif
                      <div class="d-flex justify-content-end">
                        <button type="submit" class="btn buttonRound btn_main">{{__('ui.Confirm_your_ad')}}!</button>
                      </div>
                    </form>
                  </div>
                  <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
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
  </div>
  