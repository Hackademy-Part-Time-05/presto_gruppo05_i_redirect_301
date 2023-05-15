<x-main>
    <x-header/>
    {{-- <div class="w-100">
        @foreach ($categories as $category)
            {{$category}}
        @endforeach
    </div> --}}
    <div class=" container cards_landscape_wrap-2 mb-5">
        <div class="row align-content-start g-4">
                @foreach ($latestAnnouncements as $latestAnnouncement)
                    <x-cards :$latestAnnouncement :category='$latestAnnouncement->category'></x-cards>
                @endforeach
        </div>
    </div>
</x-main>