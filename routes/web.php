<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;

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

Route::get('/', [NavController::class, 'welcome']);

Route::get('Accueil', [NavController::class, 'welcome']);

Route::get('Les_Personnages', [NavController::class, 'characters']);

Route::get('Nouveau_Personnage', [NavController::class, 'newCharacter']);

Route::post('Nouveau_Personnage', [ActionController::class, 'newCharacter']);

Route::get('/update', [NavController::class, 'updateCharacter']);

Route::post('./updateCharacter', [ActionController::class, 'updateCharacter']);

Route::post('delete', [ActionController::class, 'delete']);
