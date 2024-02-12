<?php

use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeersController;
use App\Http\Controllers\PubsController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\HomeController;




//temporary
Route::get('/Cmd1', [BeersController::class, 'try']);


//Route::get('Nazwa wprzeglądarce', [NavController::class,wywolanie])->name(nazwawew);

// NAVIGATION CONROLLER ROUTES
Route::get('/aboutus',  [NavController::class,'aboutus'])   ->name('AboutUs');
Route::get('/login',    [NavController::class,'Login'])     ->name('Login');
Route::get('/beers/fav', [NavController::class,'FavBeers']) ->name('FavBeers');
Route::get('/pubs/fav', [NavController::class,'FavPubs']) ->name('FavPubs');


// HOME CONTROLLER
Route::get('/home',     [HomeController::class,'index'])      ->name('Home');

// BEERS CONTROLLER ROUTES 
Route::get('/beers', [BeersController::class, 'index'])->name('beers.index');
// Create
Route::get('/beers/create', [BeersController::class, 'create'])->name('beers.create');
// create->save
Route::post('/beers', [BeersController::class, "store"]) ->name('beers.store');
// Edit
Route::get('/beers/{beer}/edit', [BeersController::class, 'edit'])->name('beers.edit');
// update
Route::put('/beers/{beer}/update', [BeersController::class, 'update'])->name('beers.update');
// delete
Route::delete('/beers/{beer}/delete', [BeersController::class, 'delete'])->name('beers.delete');
// Details
Route::get('/beer/{beer}/details', [BeersController::class, 'details'])->name('beer.details');


// SEARCH CONTROLLER
// Beer
Route::get('/search/Beers', [SearchController::class, 'BeerSearch']) -> name('search.beer');
// Pubs
Route::get('/search/Pubs', [SearchController::class, 'PubSearch']) -> name('search.pub');
// Hybrid
Route::get('/search/Hybrid', [SearchController::class, 'HybridSearch']) -> name('search.hybrid');



//PUBS CONTROLLER ROUTES
Route::get('/pubs',     [PubsController::class,'index'])->name('Pubs.index');
// Create
Route::get('/pubs/create', [PubsController::class, 'create'])->name('Pubs.create');
// create->save
Route::post('/Pubs', [PubsController::class, "store"]) ->name('Pubs.store');
// Edit
Route::get('/Pubs/{Pub}/edit', [PubsController::class, 'edit'])->name('Pubs.edit');
// update
Route::put('/Pubs/{Pub}/update', [PubsController::class, 'update'])->name('Pubs.update');
// delete
Route::delete('/Pubs/{Pub}/delete', [PubsController::class, 'delete'])->name('Pubs.delete');
// Details
Route::get('/Pubs/{Pub}/details', [PubsController::class, 'details'])->name('Pubs.details');

//HOME CONTROLLER ROUTES
Route::get('/', [HomeController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

<<<<<<< HEAD
require __DIR__.'/auth.php';
=======
require __DIR__.'/auth.php';
>>>>>>> parent of 6690312 (Merge branch 'main' into test)
