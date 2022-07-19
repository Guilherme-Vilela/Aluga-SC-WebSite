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

Route::get('/email_aviso', function () {
    // return new \App\Mail\Notices();
    Illuminate\Support\Facades\Mail::send(new \App\Mail\Notices());
    session()->put(['mensage' =>['title'=>'Pagamento efetuado com sucesso','text'=> " Enviamos um email com os detalhes", 'icon' => "success","function" => "alert"]]);
    return redirect()->route('home');
})->name('email.notices');
Route::namespace('\App\Http\Controllers')->group(function () {

    Route::get('/auth/google/redirect', 'SocialiteController@redirect')->name('login.google');
    Route::get('/auth/google/callback', 'SocialiteController@callback')->name('callback');

    Route::get('/', 'ImmobileController@index')->name("home");

    Route::post('/login', 'UserController@login')->name("login");
    Route::get('/logout', 'UserController@logout')->name("logout");
    Route::get('/user/imoveis', 'ImmobileController@myimmobile')->middleware('auth')->name("immobile.my");
    Route::get('/imovel/cadastro', "ImmobileController@create")->middleware('auth')->name("immobile.create");
    Route::Resource('/imovel', "ImmobileController", ['except' => ['create', 'update']])->names("immobile")->parameters(['imovel' => 'immobile']);

    Route::get('/atualizacao_cadastro', 'UserController@update')->middleware('auth')->name("user.update");
    Route::get('/usuario', 'UserController@index')->middleware('auth')->name("user.index");
    // Route::Resource('/mobilia',"FurnitureController")->names("furtinure")->parameters(['mobilia'=>'furtinure']);
    Route::Resource('/reservar', "PaymentController")->names("payment")->middleware('auth')->parameters(['pagamento' => 'payment']);
    // Route::Resource('/comodo',"RoomController")->names("room")->parameters(['comodo'=>'room']);
    // Route::Resource('/agenda',"ScheduleController")->names("schedule")->parameters(['agenda'=>'schedule']);

    Route::Resource('/usuario', "UserController", ['except' => ['update', 'index']])->names("user")->parameters(['usuario' => 'user']);
});
