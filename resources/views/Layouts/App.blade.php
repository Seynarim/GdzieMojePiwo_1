<!-- app/views/layouts/App.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    @include('includes.Head')
</head>
<header class="row">
        @include('elements.top_menu')
        
</header>
<body class="flex flex-col h-screen">
    
    <div id="main" class="row flex-grow">
        @yield('content')
    </div>
    
</body>

<footer class="row">
        @include('elements.bottom_menu')
</footer>
</html>