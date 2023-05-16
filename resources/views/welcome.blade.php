<x-main>
    @if(session()->has('access.denied'))
    <div class="flex flex-row justify-center my-2 alert alert-warning">
        {{session('access.denied')}}
    </div>
    @endif
    <x-header/>
    <section class="pt-4 container">
        <div class="row justify-content-center pb-5">
            @foreach ($categories as $category)
                <x-category-button :$category>
                </x-category-button>
            @endforeach
        </div>
    </section>
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