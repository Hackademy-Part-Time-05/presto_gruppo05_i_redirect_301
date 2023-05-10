<x-main>
    @foreach ($latestAnnouncements as $announcement)
        <div>
            {{$announcement}}
        </div>
    @endforeach
</x-main>