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

// 
//     //rotas relacionadas a view HOME
//     Route::get('/', 'Site\HomeController@index');

    

Route::namespace('\App\Http\Controllers')->group(function () {
Route::Resource('imoveis',"ImmobileController@index")->names("immobile")->parameters(['imoveis'=>'immobile']);
Route::Resource('usuario',"UserController@index")->names("user")->parameters(['usuario'=>'user']);
Route::Resource('mobilia',"FurnitureController@index")->names("furtinure")->parameters(['mobilia'=>'furtinure']);
Route::Resource('pagamento',"PaymentController@index")->names("payment")->parameters(['pagamento'=>'payment']);
Route::Resource('comodo',"RoomController@index")->names("room")->parameters(['comodo'=>'room']);
Route::Resource('agenda',"ScheduleController@index")->names("schedule")->parameters(['agenda'=>'schedule']);

 });