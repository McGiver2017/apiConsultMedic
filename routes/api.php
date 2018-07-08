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
Route::get('/', function () {
    return ['apiVersion' => '1.1.0'];
});
Route::resource('horarios', 'Schedule\ScheduleController');
Route::get('procedures/{text}/filter','Procedure\ProcedureController@filter');
Route::resource('procedures', 'Procedure\ProcedureController');
Route::get('horarios/{procedureId}/filter/{fecha}', 'Schedule\ScheduleController@filter');
Route::get('horarios/{procedureId}/filter/{fecha}/idprofesional/{id}', 'Schedule\ScheduleController@filterIdHorario');