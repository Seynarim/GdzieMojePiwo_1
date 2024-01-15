<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Title</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Dodaj dowolne inne style lub skrypty, które chcesz użyć -->
</head>
<body class="bg-gray-100 font-sans">

    

    <!-- Treść aplikacji -->
    <div class="container mx-auto mt-8 p-4">

        <!-- Logo -->
        <div class="text-center">
            <img src="/img/logo_v2.png" alt="Gdzie Moje Piwo?" class="h-64 w-auto mx-auto">
        </div>

        <!-- Krótki opis -->
        <div class="text-center mt-4">
            <p class="text-xl text-gray-600">Znajdź swoje ulubione piwo i odkrywaj nowe miejsca!</p>
        </div>

        <!-- Okno wyszukiwania -->
        <div class="mt-8">
            <div class="relative shadow-md">
                <input type="text" placeholder="" class="w-full py-4 px-16 border rounded text-center">
                <button class="absolute right-2 top-1/2 transform -translate-y-1/2">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <!-- Dodaj ikonę do SVG -->
                    </svg>
                </button>
            </div>
        </div>

        <!-- Przycisk "Znajdź Piwo" z ikoną lupy -->
        <div class="text-center mt-4">
            <button class="bg-green-800 hover:bg-green-700 text-white font-bold py-4 px-16 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 inline-block mr-2">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                ZNAJDŹ PIWO
            </button>
        </div>


    </div>

    <!-- Footer -->
    <footer class="bg-white-800 text-white p-4 fixed bottom-0 w-full">
        <div class="flex justify-around">
            <!-- Element 1 -->
            <a href="#" class="flex flex-col items-center">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <!-- Dodaj ikonę do SVG -->
                    <img src="img/beer.svg" alt="Beer Icon" class="w-16 h-20" />
                </svg>
                <span class="text-xl text-gray-600">Piwa</span>
            </a>

            <!-- Element 2 -->
            <a href="#" class="flex flex-col items-center">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <!-- Dodaj ikonę do SVG -->
                    <img src="img/pub.svg" alt="Pub Icon" class="w-16 h-20" />
                </svg>
                <span class="text-xl text-gray-600">Puby</span>
            </a>

            <!-- Element 3 -->
            <a href="#" class="flex flex-col items-center">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <!-- Dodaj ikonę do SVG -->
                    <img src="img/favbeer.svg" alt="FavBeer Icon" class="w-16 h-20" />
                </svg>
                <span class="text-xl text-gray-600">Polecane</span>
            </a>

            <!-- Element 4 -->
            <a href="#" class="flex flex-col items-center">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <!-- Dodaj ikonę do SVG -->
                    <img src="img/events.svg" alt="FavBeer Icon" class="w-16 h-20" />
                </svg>
                <span class="text-xl text-gray-600">Wydarzenia</span>
            </a>
        </div>
    </footer>

</body>
</html>