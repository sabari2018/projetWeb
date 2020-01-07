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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::resource('/admin/symptome', 'SymptomeController');
Route::post('/admin/symptome/import', 'SymptomeController@import')->name('symptome.import');
Route::patch('/admin/symptome/update', 'SymptomeController@update')->name('symptome.update');

Route::resource('/admin/abonnes', 'AbonneController');
Route::get('/admin/abonnes', 'AbonneController@index')->name('abonnes');

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


Route::get('/uploadfile', 'UpdaloadFileController@index');
Route::post('/uploadfile', 'UpdaloadFileController@upload');


/*Route::get('/autocomplete', 'SpecialiteController@index');
Route::post('/autocomplete/fetch', 'SpecialiteController@fetch')->name('autocomplete.fetch');

Route::get('/testFicher', 'MaladieController@ficher')->name('fichier');*/

Route::post('/autocomplete/fetch', 'MedecinController@fetch')->name('autocomplete.fetch');