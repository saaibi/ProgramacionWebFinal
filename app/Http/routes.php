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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();


Route::group(['middleware' => ['auth']], function () {

       Route::get('/home', 'HomeController@index');

       
      
      Route::group(['middleware'=>['admin']],function (){
         Route::get('futbolCincos/{id}/delete', [
            'as' => 'futbolCincos.delete',
            'uses' => 'futbolCincoController@destroy',
        ]);
          Route::get('futbolDoces/{id}/delete', [
        'as' => 'futbolDoces.delete',
        'uses' => 'FutbolDoceController@destroy',
        ]);
         Route::get('baloncestos/{id}/delete', [
            'as' => 'baloncestos.delete',
            'uses' => 'BaloncestoController@destroy',
        ]);
        Route::get('voleibols/{id}/delete', [
            'as' => 'voleibols.delete',
            'uses' => 'VoleibolController@destroy',
        ]);
         Route::get('bicicrosses/{id}/delete', [
            'as' => 'bicicrosses.delete',
            'uses' => 'BicicrossController@destroy',
        ]);
        
        Route::get('reservas/{id}/delete', [
            'as' => 'reservas.delete',
            'uses' => 'ReservasController@destroy',
        ]);
      });
      
        Route::resource('futbolCincos', 'futbolCincoController');
        Route::resource('futbolDoces', 'FutbolDoceController');
        Route::resource('baloncestos', 'BaloncestoController');
        Route::resource('voleibols', 'VoleibolController');
        Route::resource('bicicrosses', 'BicicrossController');
        Route::resource('reservas', 'ReservasController');
        Route::get('reservas/escenarios/{id}','ReservasController@getEscenarios');
        Route::get('reservas/reservaEscenarios/{idEs}/{tipo}/{idFecha}','ReservasController@getReservasEcenarios');
        

 });