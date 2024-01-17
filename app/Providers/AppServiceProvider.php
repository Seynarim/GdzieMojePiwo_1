<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Beer; // Importuje model Beer

class AppServiceProvider extends ServiceProvider
{
    /**
     * Rejestruje dowolne usługi aplikacji.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Uruchamia usługi po uruchomieniu aplikacji.
     *
     * @return void
     */
    public function boot()
    {
        // Tutaj możesz zdefiniować zmienną i przekazać ją do wszystkich widoków
        $beers = Beer::all();
        view()->share('beers', $beers);
    }
}