<x-main>
    <div class="container mt-5">
        <div class="row">
            <h1 class="col-4 mx-auto">Ecco i nostri annunci</h1>
        </div>
    </div>
    {{-- <div class="w-100">
        @foreach ($categories as $category)
            {{$category}}
        @endforeach
    </div> --}}
    <div class="w-100 container cards_landscape_wrap-2 mb-5">
        <div class="row justify-content-between g-4">
                @foreach ($latestAnnouncements as $latestAnnouncement)
                    <x-cards :$latestAnnouncement :category='$latestAnnouncement->category'></x-cards>
                @endforeach
        </div>
    </div>
</x-main>