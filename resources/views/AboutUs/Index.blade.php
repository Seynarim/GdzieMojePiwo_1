@extends('layouts.main')

@section('content')
<div class="container mx-auto p-6 mb-36">
    <h1 class="text-3xl font-semibold mb-6">O nas</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="col-span-2">
            <p class="text-lg mb-4">Jesteśmy zespołem studentów z pasją do programowania i rozwoju aplikacji webowych. Nasza aplikacja, GdzieMojePiwo?, została stworzona z myślą o miłośnikach piwa, którzy chcą odkrywać nowe gatunki i marki, dzielić się swoimi opiniami oraz znajdować najlepsze puby serwujące ulubione trunki.</p>

            <p class="text-lg mb-4">Dzięki naszej aplikacji możesz przeglądać różnorodne gatunki piwa, poznawać ich historię, składniki i zalecenia dotyczące spożycia. Dodatkowo, możesz również przeglądać listę pubów, które oferują szeroki wybór piw oraz poznawać opinie innych użytkowników na temat tych miejsc.</p>

            <p class="text-lg mb-4">Nasza aplikacja umożliwia również wyszukiwanie piw i pubów na podstawie różnych kryteriów, co pozwala użytkownikom na szybkie znalezienie interesujących ich miejsc i trunków.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-4">Twórcy:</h2>

            <div class="student-card">
                <div class="student-name font-semibold">Eryk</div>
             
                <div class="student-info">Zainteresowania: Programowanie, sport</div>
            </div>

            <div class="student-card mt-4">
                <div class="student-name font-semibold">Wojciech</div>
               
                <div class="student-info">Zainteresowania: Gry planszowe, podróże</div>
            </div>

            <div class="student-card mt-4">
                <div class="student-name font-semibold">Ola</div>
              
                <div class="student-info">Zainteresowania: Muzyka, literatura</div>
            </div>
        </div>
    </div>
</div>
@endsection
