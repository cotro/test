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

Route::get('/', function () {
    return view('layouts/search');
});


Auth::routes();

/*Get*/

Route::get('/', 'HomeController@index');
Route::get('/account', 'UserController@index');
Route::post('/{user}/updateInfos','UserController@updateInfos');
Route::get('/reservations/rapports','RapportController@index');
Route::get('/{reservation}/generatePDF','RapportController@generatePDF');
Route::get('/admin','AdminController@index')->middleware(['auth','admin']);
Route::get('/user/{user}/delete', 'AdminController@delete')->middleware(['auth','admin']);
Route::get('/user/{user}/toggleactive', 'AdminController@toggleActive')->middleware(['auth','admin']);
Route::get('/salle/{salle}/view', 'SalleController@index');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/AdministrationSalle', 'SalleController@liste')->middleware(['auth','admin']);
Route::get('/Salle/{salle}/update', 'SalleController@toggleActive')->middleware(['auth','admin']);
Route::get('/Salle/{salle}/delete', 'SalleController@delete')->middleware(['auth','admin']);
Route::post('/CreateSalle', 'SalleController@create')->middleware(['auth','admin']);
Route::get('/Salle/{salle}/update', 'SalleController@update')->middleware(['auth','admin']);
Route::post('/updateSalleAction', 'SalleController@updateAction')->middleware(['auth','admin']);



Route::get('/AdministrationForfait', 'ForfaitController@index')->middleware(['auth','admin']);
Route::post('/CreateForfait', 'ForfaitController@create')->middleware(['auth','admin']);
Route::get('/Forfait/{Forfait}/delete', 'ForfaitController@delete')->middleware(['auth','admin']);
Route::get('/Forfait/{forfait}/update', 'ForfaitController@update')->middleware(['auth','admin']);
Route::post('/updateForfaitAction', 'ForfaitController@updateAction')->middleware(['auth','admin']);

Route::get('/AdministrationModule', 'ModuleController@index')->middleware(['auth','admin']);
Route::post('/CreateModule', 'ModuleController@create')->middleware(['auth','admin']);
Route::get('/Module/{module}/delete', 'ModuleController@delete')->middleware(['auth','admin']);
Route::get('/Module/{module}/update', 'ModuleController@update')->middleware(['auth','admin']);
Route::post('/updateModuleAction', 'ModuleController@updateAction')->middleware(['auth','admin']);

/*Post*/
Route::get('/salle/{salle}/reservation', 'ReservationController@index');
Route::post('/search/post', 'SearchController@getDataLocation');


