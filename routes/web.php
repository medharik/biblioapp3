<?php

use App\Http\Controllers\Api\EtudiantApiController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\LivreController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/template', function () {
    return view('template');
});

Route::resource('filieres', FiliereController::class);
Route::resource('livres', LivreController::class);
Route::resource('etudiants', EtudiantController::class);
//route pour afficher la page emprunter
Route::get('/emprunter', [EtudiantController::class,'emprunter'])->name('etudiants.emprunter');
Route::post('/emprunter', [EtudiantController::class,'store_emprunter'])->name('etudiants.store_emprunter');
Route::Apiresource('apietudiants', EtudiantApiController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
