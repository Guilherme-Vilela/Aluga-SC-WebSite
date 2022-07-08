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
Route::get('/atualizacao', 'UserController@update')->name("user_register_complete");
Route::post('/login','UserController@login')->name("login");
Route::get('/logout','UserController@logout')->name("logout");
Route::post('/register','UserController@register')->name("register");
Route::get('/imovel/cadastro',"ImmobileController@create")->middleware('auth')->name("immobile.create");
Route::Resource('/imovel',"ImmobileController", ['except'=> ['create','edit']])->names("immobile")->parameters(['imovel'=>'immobile']);



// Route::Resource('/mobilia',"FurnitureController")->names("furtinure")->parameters(['mobilia'=>'furtinure']);
// Route::Resource('/pagamento',"PaymentController")->names("payment")->parameters(['pagamento'=>'payment']);
// Route::Resource('/comodo',"RoomController")->names("room")->parameters(['comodo'=>'room']);
// Route::Resource('/agenda',"ScheduleController")->names("schedule")->parameters(['agenda'=>'schedule']);
Route::Resource('usuario',"UserController")->names("user")->parameters(['usuario'=>'user']);
 });