<x-main>
    <section class="position-relative mb-5">
        <x-header/>
        <div class="custom-shape-divider-top-1684349093 mb-5">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>
    <section class="pt-4 mt-5 container categories_card_container">
        <div class=" mt-5 row justify-content-center pb-5">
            @foreach ($categories as $category)
            <x-category-button :$category>
            </x-category-button>
            @endforeach
        </div>
    </section>
    <section class="position-relative w-100 latest_announcements_section">
        <div class="custom-shape-divider-bottom-1684350379">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class=" container cards_landscape_wrap-2 w-100 pb-3 mb-5">
            <div class="row align-content-start justify-content-center g-4">
                @foreach ($announcements as $announcement)
                    <x-cards :$announcement :category='$announcement->category'></x-cards>
                @endforeach
            </div>
        </div>
        <div class="custom-shape-divider-top-1684351062">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>
    
</x-main>