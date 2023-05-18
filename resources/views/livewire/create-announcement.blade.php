<section class="position-relative w-100 latest_announcements_section">
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
                  @if(session()->has('message'))
                    <div class="flex flex-row justify-center my-2 alert alert-success">
                      {{session('message')}}
                    </div>
                  @endif
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Crea il tuo annuncio! </p>
                  <form class="mx-1 mx-md-4" wire:submit.prevent="store">
                    @csrf
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label for="category">Categoria</label>
                         <select wire:model.defer="category" id="category" class=" @error('title') is-invalid @enderror">
                          <option value="">Seleziona</option>
                          @foreach ($categories as $category)
                            <option value="{{$category->id}}"> {{$category->name}}</option>
                          @endforeach
                        </select> 
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label for="title">Titolo Annuncio</label>
                        <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror"/>
                        @error('title')
                        <div class=" text-danger">
                          {{$message}}
                        </div> 
                        @enderror
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                          <label for="body">Descrizione</label>
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
                          <label for="price">Prezzo</label>
                            <input wire:model="price" type="number" class="form-control @error('price') is-invalid @enderror">

                            @error('price')
                            <div class=" text-danger">
                              {{$message}}
                            </div> 
                            @enderror
                          </div>
                    </div>
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btnHeader btn-dark btn-animated">Conferma il tuo annuncio!</button>
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
