<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\DashboardController;


Route::get('/', [DashboardController::class, 'index'])->name('home');



///                         LOGIN/REGISTRO

///LOGIN
Route::get('/tlogin',function(){return view('login');});
Route::get('/login', [LoginController::class, 'Login'])->name('user.login');
Route::post('/login', [LoginController::class, 'Login'])->name('user.login');

///REGISTRO
Route::get('/registro', function(){return view('registro');});
Route::post('/registro',[LoginController::class,'Cadastrar'])->name('user.registro');
Route::get('/registroFail', function(){return view('registroFail');});
Route::post('/registroFail',[LoginController::class,'Cadastrar'])->name('user.registrofail');

/////////  ///////    /////  ///////       /////////  /////////    ////////////

///                         FORMULARIO
Route::get('/formulario', [FormularioController::class, 'formulario'])->name('view.form');
Route::post('/formulario', [FormularioController::class, 'formularioSalvar'])->name('salvar.form');
Route::get('/formulario/dash', [FormularioController::class, 'formularioDash'])->name('dash.dash.form');
Route::post('/formulario/dash', [FormularioController::class, 'formularioSalvarDash'])->name('dash.dash.form');



Route::get('/formulario/gerenciar/{id}', [FormularioController::class, 'GerenciarDispositivo'])->name('gerenciar.form');
Route::put('/formulario/alterar/{id}', [FormularioController::class, 'AlterarBancoDispositivo'])->name('alterar.form');

/////////  ///////    /////  ///////       /////////  /////////    ////////////




///                         Dashboard

Route::get('/dashboard', [DashboardController::class, 'DashBoard'])->name('view.dashboard');
Route::post('/dashboard', [DashboardController::class, 'DashBoard'])->name('view.dashboard');
Route::get('/lista', [DashboardController::class, 'Lista'])->name('view.lista');

//DELETAR
Route::delete('/dashboard/{id}', [DashboardController::class, 'Apagar'])->name('view.deletar');
Route::delete('/dashboard/lista/{id}', [DashboardController::class, 'ApagarLista'])->name('view.lista.deletar');