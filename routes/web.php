<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerErrori;
use App\Http\Controllers\ManutenzioniController;
use App\Http\Controllers\RicetteController;
use App\Http\Controllers\OrdiniController;

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
Route::get('/indiceordini', [OrdiniController::class, 'indexordini'])->name('ordini.indexordini');
Route::get('/cercaordini', [OrdiniController::class, 'cercaordini'])->name('ordini.cercaordini');
Route::get('/cercacodice', [OrdiniController::class, 'cercacodice'])->name('ordini.cercaCodici');
Route::get('/ordiniPerCliente', [OrdiniController::class, 'ordiniPerCliente'])->name('ordini.ordiniPerCliente');
Route::get('/cercaAltezza', [OrdiniController::class, 'cercaAltezza'])->name('ordini.cercaAltezza');
Route::get('/cercaAnima', [OrdiniController::class, 'cercaAnima'])->name('ordini.cercaAnima');
Route::get('/cercaDiametro', [OrdiniController::class, 'cercaDiametro'])->name('ordini.cercaDiametro');
Route::get('/ordine/{id}', [OrdiniController::class, 'show'])->name('ordini.ordine');
Route::get('/ricetta/{id}', [RicetteController::class, 'showParam'])->name('ricette.ricetta');
Route::get('/manutenzioni', [ManutenzioniController::class, 'indexManutenzioni'])->name('manutenzioni');
Route::get('/createmanutenzioni', [ManutenzioniController::class, 'createManutenzioni'])->name('createmanutenzioni');
Route::post('/storemanutenzioni', [ManutenzioniController::class, 'storeManutenzioni'])->name('storemanutenzioni');
