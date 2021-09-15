<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerErrori;
use App\Http\Controllers\RicetteController;

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

Route::get('/', [RicetteController::class, 'indexricette'])->name('welcome');
Route::get('creaerrore', [ControllerErrori::class, 'creaerrore'])->name('creaerrore');
Route::post('aggiungierrore', [ControllerErrori::class, 'aggiungierrore'])->name('aggiungierrore');

Route::get('/crearicette', [RicetteController::class, 'crearicette'])->name('ricette.crearicette');
Route::post('/storericette', [RicetteController::class, 'storericette'])->name('ricette.storericette');
