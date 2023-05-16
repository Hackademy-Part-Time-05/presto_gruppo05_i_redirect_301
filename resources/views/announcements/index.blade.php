<x-main>
    <div class="container mt-5 cards_landscape_wrap-2">
        <div class="row">             
            @forelse ($announcements as $announcement )
            <x-cards :$announcement :category='$announcement->category'></x-cards>
            @empty
            <div class="col-12">
                <p class="h1 mt-5">Non sono presenti annunci per la tua ricerca</p>
            </div>
            @endforelse
        </div>
    </div>
</x-main>


