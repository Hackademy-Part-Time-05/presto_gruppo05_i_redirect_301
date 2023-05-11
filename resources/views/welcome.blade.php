<x-main>

    <div class="w-100">
        @foreach ($categories as $category)
            {{$category}}
        @endforeach
    </div>
    <div class="w-100">
        @foreach ($latestAnnouncements as $latestAnnouncement)
            <x-cards :latestAnnouncement="$latestAnnouncement"></x-cards>
        @endforeach
    </div>

</x-main>