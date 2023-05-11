<x-main>

    <div class="w-100">
        @foreach ($categories as $category)
            {{$category}}
        @endforeach
    </div>
    <div class="w-100 container">
        <div class="row">
                @foreach ($latestAnnouncements as $latestAnnouncement)
                    <x-cards :latestAnnouncement="$latestAnnouncement"></x-cards>
                @endforeach
        </div>
    </div>

</x-main>