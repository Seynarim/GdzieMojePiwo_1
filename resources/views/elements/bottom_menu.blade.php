<!-- Menu -->
<footer class="bg-white text-white p-4 border-t fixed bottom-0 w-full">
        <div class="flex justify-around">
            <!-- Element 1 -->
            <a href="{{route('Home')}}" class="flex flex-col items-center">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <!-- Dodaj ikonę do SVG -->
                    <img src="/img/beer.svg" alt="Beer Icon" class="w-16 h-16" />
                </svg>
                <span class="text-xl text-gray-800">Piwa</span>
            </a>

            <!-- Element 2 -->
            <a href="{{route('FavPubs')}}" class="flex flex-col items-center">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <!-- Dodaj ikonę do SVG -->
                    <img src="/img/pub.svg" alt="Pub Icon" class="w-16 h-16" />
                </svg>
                <span class="text-xl text-gray-800">Puby</span>
            </a>

            <!-- Element 3 -->
            <a href="{{route('FavBeers')}}" class="flex flex-col items-center">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <!-- Dodaj ikonę do SVG -->
                    <img src="/img/favbeer.svg" alt="FavBeer Icon" class="w-16 h-16" />
                </svg>
                <span class="text-xl text-gray-800">Polecane</span>
            </a>

            <!-- Element 4 -->
            <a href="#" class="flex flex-col items-center">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <!-- Dodaj ikonę do SVG -->
                    <img src="/img/events.svg" alt="Events Icon" class="w-16 h-16" />
                </svg>
                <span class="text-xl text-gray-800">Wydarzenia</span>
            </a>
        </div>
    </footer>