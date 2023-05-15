<x-main>

    @foreach ($announcements as $announcement)
        <x-card :$announcement :category='$announcement->category'>

        </x-card>
    @endforeach

</x-main>