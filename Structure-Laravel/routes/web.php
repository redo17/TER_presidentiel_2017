<?php

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

// Route pour la page d'accueil
Route::get('/', 'CandidatController@index')->name('accueil');

// Route pour un candidat
Route::get('candidat/{nom}', ['as' => 'candidat', 'uses' => 'CandidatController@show'])->where('nom', '[A-Za-z- é]+');

// Route pour le résultat de la recherche
Route::post('recherche', 'RechercheController@recherche');

// Route pour les infos de création du site
Route::get('infos', function() {

	return View::make('infos');

})->name('infos');
