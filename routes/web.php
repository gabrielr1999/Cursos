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

Route::get('/','Site\HomeController@index')->name('site.home');

Route::get('/login','Site\LoginController@index')->name('login');
Route::get('/login/sair','Site\LoginController@sair')->name('login.sair');
Route::post('/login/entrar','Site\LoginController@entrar')->name('login.entrar');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/admin/cursos','Admin\CursoController@index')->name('admin.cursos');
    Route::get('/admin/cursos/adicionar','Admin\CursoController@adicionar')->name('admin.cursos.adicionar');
    Route::post('/admin/cursos/salvar','Admin\CursoController@salvar')->name('admin.cursos.salvar');
    Route::get('/admin/cursos/editar/{id}','Admin\CursoController@editar')->name('admin.cursos.editar');
    Route::put('/admin/cursos/atualizar/{id}','Admin\CursoController@atualizar')->name('admin.cursos.atualizar');
    Route::get('/admin/cursos/deletar/{id}','Admin\CursoController@deletar')->name('admin.cursos.deletar');
});
