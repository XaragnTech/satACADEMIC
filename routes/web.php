<?php

use App\Http\Controllers\ClasseController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\MatiereController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;


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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//classe route
Route::post('/create/classe',[ClasseController::class,'create'])->name('classe.create');
Route::post('/classe/update/{classe}',[ClasseController::class,'update'])->name('classe.update');

Route::get('/create/class',[ClasseController::class,'createForm'])->name('classe.createForm');
Route::get('/classe/show',[ClasseController::class,'show'])->name('classe.show');
Route::get('/classe/updateForm/{classe}',[ClasseController::class,'updateForm'])->name('classe.updateForm');
//this route must be on post methode
Route::get('classe/delete/{classe}',[ClasseController::class,'delete'])->name('classe.delete');

//niveau route
Route::post('/niveau/create',[NiveauController::class,'create'])->name('niveau.create');
Route::post('/niveau/update/{niveau}',[NiveauController::class,'update'])->name('niveau.update');

Route::get('/niveau/create',[NiveauController::class,'createForm'])->name('niveau.createForm');
Route::get('/niveau/shows',[NiveauController::class,'show'])->name('niveau.show');
Route::get('/niveau/updateForm/{niveau}',[NiveauController::class,'updateForm'])->name('niveau.updateForm');
Route::get('/niveau/delete/{niveau}',[NiveauController::class,'delete'])->name('niveau.delete');

//matiere route
Route::post('/matiere/create',[MatiereController::class,'create'])->name('matiere.create');
Route::post('/matiere/update/{matiere}',[MatiereController::class,'update'])->name('matiere.update');

Route::get('/matiere/create',[MatiereController::class,'createForm'])->name('matiere.createForm');
Route::get('/matiere/shows',[MatiereController::class,'show'])->name('matiere.show');
Route::get('/matiere/updateForm/{matiere}',[MatiereController::class,'updateForm'])->name('matiere.updateForm');
Route::get('/matiere/delete/{matiere}',[MatiereController::class,'delete'])->name('matiere.delete');
