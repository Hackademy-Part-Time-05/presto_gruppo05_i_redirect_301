<x-main>
    @foreach ($latestAnnouncements as $latestAnnouncement)
    <div class="row">
        <div class="col-6">
            <x-cards :latestAnnouncement='$latestAnnouncement'/>  
        </div>
    </div>
    @endforeach

    <div class="w-100">
        @foreach ($categories as $category)
            
        @endforeach
    </div>

</x-main>