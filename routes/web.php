<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\LevelController;

/* MAP */
use App\Http\Controllers\Admin\ContinentController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Admin\CityController;


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* home di partenza (ex welcome) disponibile a tutti */
Route::get('/', function () {
    return view('home');
});

/* pagina privata visibile solo se utente autenticato, per questo personalizzo percorso*/

Route::middleware(['auth', 'verified'])
    ->prefix('admin')
    ->name('admin.')->
    group(function () {

        Route::get('/', [DashboardController::class, 'home'])->name('dashboard');

        /*Route::get('/users', [DashboardController::class, 'users'])->name('users'); */

        /* tutte le rotte progetti vengono gestite tramite amministratore */
        Route::resource('projects', ProjectController::class);
        Route::resource('types', TypeController::class);
        Route::resource('levels', LevelController::class);

        /* MAP */
        Route::resource('continents', ContinentController::class);
        Route::resource('countries', CountryController::class);
        Route::resource('regions', RegionController::class);
        Route::resource('cities', CityController::class);
    });



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';