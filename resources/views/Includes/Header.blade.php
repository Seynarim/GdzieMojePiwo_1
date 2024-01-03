<nav class="font-sans flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-8 bg-white shadow sm:items-baseline w-full">

  <div class="mb-2 sm:mb-0">
    <a href="{{route('Home')}}" class="text-3xl no-underline text-grey-darkest hover:text-blue-dark">Home</a>
  </div>

  <div class="text-center">
    <img class="object-center object-none bg-gray-300 w-40 h-10 m-2 inline" src="{{ asset('img/header1.png') }}"/>
  </div>

  <div>
    <a href="{{route('beers.index')}}"  class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">beers</a>
    <a href="{{route('Pubs')}}"         class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Pubs</a>
    <a href="{{route('AboutUs')}}"      class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">aboutus</a>
    <a href="{{route('Login')}}"        class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">login</a>
  </div>

</nav>