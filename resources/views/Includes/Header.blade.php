<nav class="bg-white border-gray-700 dark:bg-gray-700">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{route('Home')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('img/header1.png') }}" class="h-8" alt="Gdzie Moje Piwo? Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Gdzie Moje Piwo?</span>
        </a>

        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <a href="{{ route('Login') }}" class="text-white bg-amber-600 hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-amber-600 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-amber-600 dark:hover:bg-amber-500 dark:focus:ring-amber-600">Zaloguj</a>

            <button id="navbarToggle" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-700 rounded-lg md:hidden hover:bg-amber-100 focus:outline-none focus:ring-2 focus:ring-amber-200 dark:text-gray-400 dark:hover:bg-amber-700 dark:focus:ring-amber-600" aria-controls="navbar-cta" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>

        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-00 rounded-lg bg-gray-700 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-700 md:dark:bg-gray-700 dark:border-gray-700">
                <li>
                    <a href="{{route('Home')}}" class="block py-2 px-3 md:p-0 text-white bg-amber-500 rounded md:bg-transparent md:text-amber-500 md:dark:text-amber-600" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{route('AboutUs')}}" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-amber-100 md:hover:bg-transparent md:hover:text-amber-500 md:dark:hover:text-amber-600 dark:text-white dark:hover:bg-amber-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">O nas</a>
                </li>
                <li>
                    <a href="{{route('beers.index')}}" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-amber-100 md:hover:bg-transparent md:hover:text-amber-500 md:dark:hover:text-amber-600 dark:text-white dark:hover:bg-amber-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Piwa</a>
                </li>
                <li>
                    <a href="{{route('Pubs.index')}}" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-amber-100 md:hover:bg-transparent md:hover:text-amber-500 md:dark:hover:text-amber-600 dark:text-white dark:hover:bg-amber-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Puby</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const navbarToggle = document.getElementById("navbarToggle");
        const navbarCta = document.getElementById("navbar-cta");

        navbarToggle.addEventListener("click", function () {
            const expanded = navbarToggle.getAttribute("aria-expanded") === "true" || false;
            navbarToggle.setAttribute("aria-expanded", !expanded);
            navbarCta.classList.toggle("hidden", expanded);
        });
    });
</script>