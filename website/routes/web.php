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

Route::namespace('\App\Http\Controllers')->group(function () {
    //rotas relacionadas a view HOME
    Route::get('/', 'Site\HomeController@index');

    
});
