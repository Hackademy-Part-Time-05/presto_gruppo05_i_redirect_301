<x-main>
    @if(session()->has('access.denied'))
    <div class="flex flex-row justify-center my-2 alert alert-warning">
        {{session('access.denied')}}
    </div>
    @endif
    <x-header/>
    <section class="pt-4">
        <div class="container">
            <div class=" col-5 col-xs-3 col-sm-3 col-md-3 col-lg-2 border welcome-card_link welcome-card_link">
                <div class="welcome-card_bg"></div>
                <div class=" text-center ">
                 <a href="" class="welcome-card_title">Motori</a>
                </div>
            </div>  
        </div>   
         {{-- <div class="w-100">
        @foreach ($categories as $category)
            {{$category}}
        @endforeach
    </div> --}}
    <div class=" container cards_landscape_wrap-2 mb-5">
        <div class="row align-content-start g-4">
                @foreach ($announcements as $announcement)
                    <x-cards :$announcement :category='$announcement->category'></x-cards>
                @endforeach
        </div>
    </div>
</x-main>