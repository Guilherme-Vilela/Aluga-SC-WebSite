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


    //rotas relacionadas a usuarios 
    Route::post('/cadastro_usuario', '\UserController@cadastro')->name('cadastro_user');
    Route::get('/cadastro_usuario_completo', '\UserController@cadastro')->name('cadastro_user_completo');
    Route::post('/cadastro_usuario_completo', '\UserController@cadastro')->name('cadastro_user_completo');
    Route::get('/edicao_usuario', '\UserController@cadastro')->name('editar_usuario_view');
    Route::post('/edicao_usuario', '\UserController@cadastro')->name('editar_usuario_view');
    Route::post('/login', '\UserController@cadastro')->name('login');
    Route::post('/logout', '\UserController@cadastro')->name('logout');
    Route::post('/esqueci_minha_senha', '\UserController@cadastro')->name('esqueci_minha_senha');
    Route::get('/esqueci_minha_senha', '\UserController@cadastro')->name('esqueci_minha_senha');
    Route::get('/configurações', '\UserController@cadastro')->name('config_user');
    Route::get('/historico_locações', '\UserController@cadastro')->name('history_user');
    Route::get('/meus_imoveis', '\UserController@cadastro')->name('user_immobile');

    //rotas relacionadas a um imovel
    Route::get('/cadastro_imovel', '\ImmobileController@cadastro')->name('cadastro_immobile');
    Route::post('/cadastro_imovel', '\ImmobileController@cadastro')->name('cadastro_immobile');
    Route::get('/edicao_imovel', '\ImmobileController@cadastro')->name('editar_imombile');
    Route::post('/edicao_imovel', '\ImmobileController@cadastro')->name('editar_immobile');
    Route::get('/historico_imovel', '\ImmobileController@cadastro')->name('history_immobile');
    Route::post('/reservar_imovel', '\ImmobileController@cadastro')->name('editar_imovel');
    Route::get('/imovel', '\ImmobileController@cadastro')->name('editar_imovel');

    //rotas relacionadas ao admin
    Route::get('/admin', '\AdminController@cadastro')->name('home_admin');
    Route::get('/cadastro_admin', '\AdminController@cadastro')->name('cadastro_admin');
    Route::post('/cadastro_admin', '\AdminController@cadastro')->name('cadastro_admin');
    Route::get('/admin_cadastro_comodo', '\AdminController@cadastro')->name('cadastro_comodo');
    Route::post('/admin_cadastro_comodo', '\AdminController@cadastro')->name('cadastro_comodo');
    Route::get('/admin_cadastro_comodo', '\AdminController@cadastro')->name('cadastro_comodo');
    Route::get('/admin_cadastro_mobilia', '\AdminController@cadastro')->name('cadastro_mobilia');
    Route::post('/admin_cadastro_mobilia', '\AdminController@cadastro')->name('cadastro_mobilia');
    Route::get('/admin_cadastro_comodo', '\AdminController@cadastro')->name('cadastro_comodo');
    Route::get('/admin_valida_usuario', '\AdminController@cadastro')->name('admin_valida_usuario');
    Route::post('/admin_valida_usuario', '\AdminController@cadastro')->name('admin_valida_usuario');
    Route::get('/admin_cadastro_comodo', '\AdminController@cadastro')->name('cadastro_comodo');
});
