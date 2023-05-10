<section class=" mt-5">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
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
                      <button type="submit" class="btn btn-primary btn-lg">Conferma tuo annuncio!</button>
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
  </section>
