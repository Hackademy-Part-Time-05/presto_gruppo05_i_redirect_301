<x-main>
    @foreach ($latestAnnouncements as $announcement)
        <div>
            {{$announcement}}
        </div>
    @endforeach

    <div class="w-100">
        @foreach ($categories as $category)
            
        @endforeach
    </div>

</x-main>