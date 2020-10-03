<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});


// Company Routes
Route::get('/addcompany','UsaController@companyview');
Route::post('/storecompany','UsaController@storecompany');
Route::get('/allcompany','UsaController@allcompany');
Route::delete('/allcompany/{id}','UsaController@companydelete');

// Size Routes
Route::get('/addsize','UsaController@sizeview');
Route::post('/storesize','UsaController@storesize');
Route::get('/allsize','UsaController@allsize');
Route::delete('/allsize/{id}','UsaController@allsizedelete');


// Article Routes
Route::get('/addarticle','UsaController@articleview');
Route::post('/storearticle','UsaController@storearticle');
Route::get('/allarticle','UsaController@allarticle');
Route::delete('/allarticle/{id}','UsaController@allarticledelete');


// Product Routes
Route::get('/addproduct','UsaController@productview');
Route::post('/storeproduct','UsaController@storeproduct');


// Auth Routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');