<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function () {
  Route::auth();
});

Route::group(['middleware' => ['auth']], function () {
  //operações referentes ao cadastro de games
  Route::get('cadastro-games' , 'CadastroItensController@cadastroGames');
  Route::post('cadastro-games' , 'CadastroItensController@cadastraGame');
  //operações referentes a geração de seriais
  Route::get('gerador-de-seriais' , 'CadastroItensController@cadastroHistoricos');
  Route::post('gerador-de-seriais' , 'CadastroItensController@cadastraHistorico');

});
Route::get('/' , 'GeralController@index');
Route::get('/logout', 'Auth\AuthController@logout');
