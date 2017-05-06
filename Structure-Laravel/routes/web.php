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
Route::get('/', 'CandidatController@index');

// Route pour candidat (ne marche pas)
Route::get('candidat/{nom}', ['as' => 'candidat', 'uses' => 'CandidatController@show'])->where('nom', '[A-Za-z]+');
