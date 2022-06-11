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
Route::get('/teste', 'ImmobileController@show')->name("home");
Route::Resource('imovel',"ImmobileController")->names("immobile")->parameters(['imovel'=>'immobile']);
Route::Resource('usuario',"UserController")->names("user")->parameters(['usuario'=>'user']);
Route::Resource('mobilia',"FurnitureController")->names("furtinure")->parameters(['mobilia'=>'furtinure']);
Route::Resource('pagamento',"PaymentController")->names("payment")->parameters(['pagamento'=>'payment']);
Route::Resource('comodo',"RoomController")->names("room")->parameters(['comodo'=>'room']);
Route::Resource('agenda',"ScheduleController")->names("schedule")->parameters(['agenda'=>'schedule']);

 });