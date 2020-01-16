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


Route::get('/', 'AccueilleController@index');
Route::get('/home', 'AccueilleController@index');


Auth::routes();

Route::get('/admin/home', 'AdminController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::resource('/admin/symptome', 'SymptomeController');
Route::post('/admin/symptome/import', 'SymptomeController@import')->name('symptome.import');
Route::patch('/admin/symptome/update', 'SymptomeController@update')->name('symptome.update');

Route::resource('/admin/abonnes', 'AbonneController');

Route::resource('/admin/medecins', 'MedecinController');
Route::post('/admin/medecins/import', 'MedecinController@import')->name('medecin.import');


Route::resource('/admin/maladies', 'MaladieController');
Route::post('/admin/maladies/import', 'MaladieController@import')->name('maladie.import');
Route::patch('/admin/maladies/update', 'MaladieController@update')->name('malady.update');

Route::resource('/admin/conseils', 'ConseilController');
Route::get('/admin/conseils', 'ConseilController@index')->name('conseils');

Route::resource('/admin/questionnaires', 'QuestionnaireController');
Route::post('/admin/questionnaires/import', 'QuestionnaireController@import')->name('questionnaires.import');
Route::patch('/admin/questionnaires/update','QuestionnaireController@update')->name('questionnaires.update');


Route::resource('/admin/newsletters', 'NewsletterController');
Route::resource('/admin/actualites', 'ActualiteController');


/* FRONT*/

Route::get('/front','AccueilleController@index');
Route::post('/front','AccueilleController@store')->name('accueil.store');

Route::get('/frontend','AccueilleController@index')->name('accueil');
Route::post('/frontend','AccueilleController@store')->name('contact');
Route::get('/frontend/conseils/{conseil}','AccueilleController@showConseil')->name('conseil_astuce');
Route::get('/frontend/actualites/{actualite}','AccueilleController@showNews')->name('actualite');
Route::resource('/frontend/register', 'RegisterAbonnesController');

Route::get('/refresh_captcha','RegisterAbonnesController@refreshCaptcha')->name('refresh_captcha');



Route::get('/uploadfile', 'UpdaloadFileController@index');
Route::post('/uploadfile', 'UpdaloadFileController@upload');


Route::post('/autocomplete/fetch', 'MedecinController@fetch')->name('autocomplete.fetch');

Route::get('/login', 'LogintestController@index')->name('login');
Route::post('/login/verifiemail', 'LogintestController@checkEmail')->name('login.email');
Route::post('/medecin/photo', 'MedecinController@updatePhoto')->name('update.medhoto');

