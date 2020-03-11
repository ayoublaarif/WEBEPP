<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/getTransportsQuartiers','InscriptionController@getTransports');
Route::get('/getEtudiants','etudiantsController@getEtudiants');
Route::get('/addEtud_transports','InscriptionController@addEtud_transports');
Route::get('/getNiveauDetails','NiveauController@getNiveauDetails');
Route::post('/updateEtudiant','etudiantsController@updateEtudiant');
Route::post('/addEtudiant','etudiantsController@addEtudiant');
Route::post('/deleteEtudiant','etudiantsController@deleteEtudiant');
Route::get('/test','etudiantsController@test');


Route::get('/getTransports','transportsController@getTransports');
Route::post('/updateTransport','transportsController@updateTransport');
Route::post('/addTransport','transportsController@addTransport');
Route::post('/deleteTransport','transportsController@deleteTransport');

Route::get('/getQuartiers','quartiersController@getQuartiers');
Route::post('/addQuartier','quartiersController@addQuartier');
Route::put('/updateQuartier','quartiersController@updateQuartier');
Route::post('/deleteQuartier','quartiersController@deleteQuartier');
Route::get('/getselectItems','quartiersController@getselectItems');