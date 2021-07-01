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

Route::namespace('App\Http\Controllers\Site')->group(function(){
    Route::get('/', 'HomeController'); // Rota para o Controller HomeController

    Route::get('produtos', 'CategoryController@index'); // Rota para o método do CategoryController, reponsável por retornar a página de categorias/produtos
    Route::get('produtos/{slug}', 'CategoryController@show'); // Rota para o médoto show do CategoryController, responsável por retornar a view que mostra os produtos da categoria de acordo com o slug

    Route::get('blog', 'BlogController'); // Rota para o BlogController

    Route::view('sobre', 'site.about.index'); // Rota direto para view Sobre, por ser uma página estática

    Route::get('contato', 'ContactController@index'); //Rota para o médoto index do  ContactController, responsável por retornar a view de Contato
    Route::post('contato', 'ContactController@form'); //Rota para o método form do ContactController, responsável por criar a lógica do formulário de contato
});