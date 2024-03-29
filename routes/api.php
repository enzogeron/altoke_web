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

Route::group(['prefix' => 'v1'], function () {
	Route::get('concursos', 'Admin\ContestsController@data');
	Route::get('notificaciones', 'Admin\NotificationsController@data');
	Route::get('eventos', 'Admin\EventsController@data');
	Route::post('premios', 'Admin\AwardsController@awards');
	Route::post('reclamos', 'Admin\ClaimsController@claims');
});
