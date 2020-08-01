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
    return view('welcome');
});


// Grammy

Route::get('/grammys', 'GrammysController@GrammysStore')->name('GrammysStore');

Route::get('/grammys/{id}', 'GrammysController@Details')->name('GrammysDetails');

Route::post('/grammys/comment', 'GrammysController@AddComment')->name('GrammysComments');

// Grammy admin

Route::get('/admin/grammys', 'GrammysController@Index');

Route::get('/admin/grammys/create', "GrammysController@Create");

Route::post('/admin/grammys/create', "GrammysController@Store");

Route::get('/admin/grammys/delete/{id}', "GrammysController@Delete");

Route::get('/admin/grammys/edit/{id}', "GrammysController@Edit");

Route::get('/admin/grammys/{id}', "GrammysController@Show");

Route::post('/admin/grammys/edit', "GrammysController@Update");

Route::delete('/admin/grammys/delete', "GrammysController@Remove");


// Pokemons

Route::get('/pokemons', 'PokemonsController@PokemonsStore')->name('PokemonsStore');

Route::get('/pokemons/{id}', 'PokemonsController@Details')->name('PokemonsDetails');

Route::post('/pokemons/comment', 'PokemonsController@AddComment')->name('PokemonsComments');

// Pokemons admin

Route::get('/admin/pokemons', 'PokemonsController@Index');

Route::get('/admin/pokemons/create', "PokemonsController@Create");

Route::post('/admin/pokemons/create', "PokemonsController@Store");

Route::get('/admin/pokemons/delete/{id}', "PokemonsController@Delete");

Route::get('/admin/pokemons/edit/{id}', "PokemonsController@Edit");

Route::get('/admin/pokemons/{id}', "PokemonsController@Show");

Route::post('/admin/pokemons/edit', "PokemonsController@Update");

Route::delete('/admin/pokemons/delete', "PokemonsController@Remove");


// Videogames

Route::get('/videogames', 'VideogamesController@VideogamesStore')->name('VideogamesStore');

Route::get('/videogames/{id}', 'VideogamesController@Details')->name('DraonBallsDetails');

Route::post('/videogames/comment', 'VideogamesController@AddComment')->name('VideogamesComments');

// Videogames.Admin

Route::get('/admin/videogames', 'VideogamesController@Index');

Route::get('/admin/videogames/create', "VideogamesController@Create");

Route::post('/admin/videogames/create', "VideogamesController@Store");

Route::get('/admin/videogames/delete/{id}', "VideogamesController@Delete");

Route::get('/admin/videogames/edit/{id}', "VideogamesController@Edit");

Route::get('/admin/videogames/{id}', "VideogamesController@Show");

Route::post('/admin/videogames/edit', "VideogamesController@Update");

Route::delete('/admin/videogames/delete', "VideogamesController@Remove");


// Toys

Route::get('/toys', 'ToysController@ToysStore')->name('ToysStore');

Route::get('/toys/{id}', 'ToysController@Details')->name('ToysDetails');

Route::post('/toys/comment', 'ToysController@AddComment')->name('ToysComments');

// Toys.Admin

Route::get('/admin/toys', 'ToysController@Index');

Route::get('/admin/toys/create', "ToysController@Create");

Route::post('/admin/toys/create', "ToysController@Store");

Route::get('/admin/toys/delete/{id}', "ToysController@Delete");

Route::get('/admin/toys/edit/{id}', "ToysController@Edit");

Route::get('/admin/toys/{id}', "ToysController@Show");

Route::post('/admin/toys/edit', "ToysController@Update");

Route::delete('/admin/toys/delete', "ToysController@Remove");



Route::get('/mongodb', function () {
    return view('mongodb');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

