<!-- app/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.Head')
</head>

<body class="flex flex-col h-screen">
    <header class="row">
        
    </header>
    <div id="main" class="row flex-grow">
        @yield('content')
    </div>
    <footer class="row mt-auto">
        @include('elements.menu')
    </footer>
</body>
</html>