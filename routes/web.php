<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeersController;
use App\Http\Controllers\NavController;

route::get('/', function()  {
    return view('Home');
});



//Route::get('Nazwa wprzeglądarce', [NavController::class,wywolanie])->name(nazwawew);

// NAVIGATION CONROLLER ROUTES
Route::get('/home',     [NavController::class,'Home'])      ->name('Home');
Route::get('/bars',     [NavController::class,'Bars'])      ->name('Bars');
Route::get('/aboutus',  [NavController::class,'aboutus'])   ->name('AboutUs');
Route::get('/login',    [NavController::class,'Login'])     ->name('Login');


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

/* old ones
Route::get('/admin/beer', [NavController::class,'AdminBeer'])->name('AdminBeer');
Route::get('/admin/bar', [NavController::class,'AdminBar'])->name('AdminBar');
Route::get('/admin/beerbar', [NavController::class,'AdminBeerBaar'])->name('AdminBeerBar');
Route::get('/test', [NavController::class,'test'])->name('test');
 */
// Route::get('/admin', [NavController::class,'Admin'])->name('Admin');
// Route::get('/admin', [NavController::class,'Admin'])->name('Admin');