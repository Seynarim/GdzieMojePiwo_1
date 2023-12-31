<!-- app/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html>
<head>
@include('includes.Head')
</head>

<body>
  <div>
    <header class="row">
      @include('includes.header')
    </header>
    <div id="main" class="row">
      @yield('content')

    </div>
    <footer class="row">
      @include('includes.footer')
  </footer>

  </div>

</body>

</html>




