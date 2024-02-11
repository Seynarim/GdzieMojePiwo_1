<div class="fixed top-0 left-0 right-0 bg-white border-b border-gray-200 flex justify-between items-center p-4 z-10">
    <!-- Strzałka powrotu -->
    <a href="#" class="text-3xl text-gray-800" onclick="goBack()">
        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13"/>
        </svg>
    </a>
    
    
    
    <!-- Ikona ustawień -->

    @include('elements.log_icon')

</div>

<!-- JS Powróc do poprzedniego okna -->
<script>
    function goBack() {
        window.history.back();
    }
</script>
