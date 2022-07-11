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
Route::get('/', 'ImmobileController@index')->name("home");

Route::post('/login','UserController@login')->name("login");
Route::get('/logout','UserController@logout')->name("logout");

Route::get('/imovel/cadastro',"ImmobileController@create")->middleware('auth')->name("immobile.create");
Route::Resource('/imovel',"ImmobileController", ['except'=> ['create','update']])->names("immobile")->parameters(['imovel'=>'immobile']);

Route::get('/atualizacao_cadastro', 'UserController@update')->middleware('auth')->name("user.update");
Route::get('/usuario', 'UserController@index')->middleware('auth')->name("user.index");
// Route::Resource('/mobilia',"FurnitureController")->names("furtinure")->parameters(['mobilia'=>'furtinure']);
// Route::Resource('/pagamento',"PaymentController")->names("payment")->parameters(['pagamento'=>'payment']);
// Route::Resource('/comodo',"RoomController")->names("room")->parameters(['comodo'=>'room']);
// Route::Resource('/agenda',"ScheduleController")->names("schedule")->parameters(['agenda'=>'schedule']);

Route::Resource('/usuario',"UserController",['except'=> ['update','index']])->names("user")->parameters(['usuario'=>'user']);
 });